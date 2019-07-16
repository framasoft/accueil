const webpack = require('webpack');
const fs = require('fs');
const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const HtmlWebpackPlugin = require('html-webpack-plugin');
const PrerenderSPAPlugin = require('prerender-spa-plugin');
const Renderer = PrerenderSPAPlugin.PuppeteerRenderer;
const CopyWebpackPlugin = require('copy-webpack-plugin');
const TerserPlugin = require('terser-webpack-plugin');
const OptimizeCSSAssetsPlugin = require('optimize-css-assets-webpack-plugin');
const VueLoaderPlugin = require('vue-loader/lib/plugin');
const PreloadWebpackPlugin = require('preload-webpack-plugin');

let root = (process.env.NODE_ENV === 'preview') ? `/${process.env.INIT_CWD.match(/([^/]*)\/*$/)[1]}/` : '/';
for (let i = 0; i < process.argv.length; i += 1) {
  if (process.argv[i].indexOf('--root=') > -1) {
    root = `/${process.argv[i].split('=')[1]}/`;
  }
}

const config = {
  entry: './app/index.js',
  output: {
    path: path.resolve(__dirname, `public${root}`),
    publicPath: root,
    filename: '[name].[hash].bundle.js',
    // chunkFilename: '[name].bundle.js',
  },
  module: {
    rules: [
      {
        test: /\.vue$/,
        loader: 'vue-loader',
      },
      {
        test: /\.(png|jpg|gif|svg)$/,
        loader: 'file-loader',
        options: {
          name: 'img/[name].[ext]',
        },
      },
      {
        test: /\.(ttf|eot|woff(2)?)(\?[a-z0-9=&.]+)?$/,
        loader: 'file-loader',
        options: {
          name: 'fonts/[name].[ext]',
        },
      },
      {
        test: /\.ya?ml$/,
        loader: 'yaml-import-loader',
      },
      {
        test: /\.scss$/,
        use: [
          'vue-style-loader',
          'css-hot-loader',
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
          'sass-loader',
        ],
      },
      {
        test: /\.css$/,
        use: [
          'css-hot-loader',
          MiniCssExtractPlugin.loader,
          'css-loader',
          'postcss-loader',
        ],
      },
      {
        enforce: 'pre',
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'eslint-loader',
      },
      {
        test: /\.js$/,
        exclude: /node_modules/,
        loader: 'babel-loader',
      },
    ],
  },
  resolve: {
    alias: {
      vue$: 'vue/dist/vue.esm.js',
    },
  },
  plugins: [
    new VueLoaderPlugin(),
    new MiniCssExtractPlugin({
      filename: process.env.NODE_ENV !== 'production' ? '[name].css' : '[name].[hash].css',
      chunkFilename: process.env.NODE_ENV !== 'production' ? '[id].css' : '[id].[hash].css',
    }),
    new webpack.HotModuleReplacementPlugin(),
    new CopyWebpackPlugin([
      { from: path.resolve(__dirname, './app/assets/fonts'), to: 'fonts' },
      { from: path.resolve(__dirname, './app/assets/icons'), to: 'icons' },
      { from: path.resolve(__dirname, './app/assets/img'), to: 'img' },
    ]),
    new PreloadWebpackPlugin({
      rel: 'preload',
      as(entry) {
        if (/\.css$/.test(entry)) return 'style';
        if (/\.woff$/.test(entry)) return 'font';
        if (/\.png$/.test(entry)) return 'image';
        if (/\.jpg$/.test(entry)) return 'image';
        return 'script';
      },
      fileBlacklist: [/\.map/, /\.svg/, /\.woff/, /\.eot/, /\.woff2/, /\.ttf/, /\.png/, /\.gif/, /\.mp4/],
      include: 'allAssets',
    }),
  ],
  devServer: {
    contentBase: path.resolve(__dirname, './public'),
    publicPath: '/',
    historyApiFallback: true,
    inline: true,
    open: true,
    hot: true,
  },
  devtool: 'eval-source-map',
};

module.exports = config;

const locales = [];
// Import locales list
fs.readdirSync('./app/locales')
  .forEach(file => locales.push(file.replace(/(.*)\.yml/, '$1')));

if (process.env.NODE_ENV === 'development') {
  module.exports.plugins = (module.exports.plugins || [])
    .concat([
      new webpack.DefinePlugin({
        'process.env': {
          NODE_ENV: '"development"',
          BASE_URL: '""',
        },
      }),
      new HtmlWebpackPlugin({
        title: 'DEVELOPMENT prerender-spa-plugin',
        template: 'index.html',
        filename: 'index.html',
      }),
    ]);
} else { // NODE_ENV === 'production|preview'
  const routes = [];
  const pages = [];
  // Import pages list
  fs.readdirSync('./app/components/pages')
    .forEach(file => pages.push(file.replace(/(.*)\.vue/, '$1')));

  for (let j = 0; j < pages.length; j += 1) {
    routes.push(`${root}${pages[j].toLowerCase().replace('home', '')}`);
    // Localized routes
    for (let i = 0; i < locales.length; i += 1) {
      routes.push(`${root}${locales[i]}${pages[j].toLowerCase().replace(/^/, '/').replace('/home', '')}`);
    }
  }

  module.exports.devtool = '#source-map';
  module.exports.optimization = {
    minimizer: [
      new TerserPlugin({
        cache: true,
        parallel: true,
        sourceMap: true, // set to true if you want JS source maps
      }),
      new OptimizeCSSAssetsPlugin({}),
    ],
    splitChunks: {
      chunks: 'all',
    },
  };
  module.exports.plugins.push(
    new webpack.DefinePlugin({
      'process.env': {
        NODE_ENV: ((process.env.NODE_ENV !== 'production') ? '"preview"' : '"production"'),
        BASE_URL: `"${root.split('/')[1]}"`,
      },
    }),
    new HtmlWebpackPlugin({
      title: 'PRODUCTION prerender-spa-plugin',
      template: 'index.html',
      filename: path.resolve(__dirname, 'public/index.html'),
    }),
    new PrerenderSPAPlugin({
      staticDir: path.join(__dirname, 'public'),
      routes,
      renderer: new Renderer({
        headless: true,
        renderAfterDocumentEvent: 'render-event',
        maxConcurrentRoutes: 1,
        injectProperty: 'vuefsPrerender',
        inject: {
          prerender: true,
        },
        postProcess(renderedRoute) {
          // eslint-disable-next-line no-param-reassign
          renderedRoute.html = renderedRoute.html
              .replace(/<script (.*?)>/g, `<script $1 defer>`)
              .replace(`id="app"`, `id="app" data-server-rendered="true"`);

          return renderedRoute;
        },
      }),
    }),
  );
}

// Create ./public/img/lg/* symlinks only if images need translation
if (fs.existsSync('./app/assets/img/fr')) {
  if (!fs.existsSync('./public')) { fs.mkdirSync('./public'); }
  if (!fs.existsSync(`./public${root}`)) { fs.mkdirSync(`./public${root}`); }
  if (!fs.existsSync(`./public${root}img`)) { fs.mkdirSync(`./public${root}img`); }
  for (let i = 0; i < locales.length; i += 1) {
    if (!fs.existsSync(`./public${root}img/${locales[i]}`)) {
      fs.mkdirSync(`./public${root}img/${locales[i]}`);
    }
    fs.readdirSync('./app/assets/img/fr').forEach((file) => {
      if (!fs.existsSync(`./app/assets/img/${locales[i]}/${file}`)) {
        const symlinkOrigin = (process.env.NODE_ENV === 'development')
          ? `../../../app/assets/img/fr/${file}` // [dev] relative to assets
          : `../fr/${file}`; // [prod] relative to public
        fs.symlink(symlinkOrigin,
          `./public${root}img/${locales[i]}/${file}`,
          (err) => { console.log(err) }); // eslint-disable-line
      }
    });
  }
}
