import Vue from 'vue';
import VueRouter from 'vue-router';
import VueI18n from 'vue-i18n';
import vueHeadful from 'vue-headful';
import checkView from 'vue-check-view';

import App from './App.vue';
import Home from './components/pages/Home.vue';

import './assets/scss/bootstrap.scss';
import '../node_modules/fork-awesome/css/fork-awesome.css';
import './assets/scss/main.scss';

Vue.use(VueRouter);
Vue.use(VueI18n);
Vue.use(checkView);
Vue.component('vue-headful', vueHeadful);

const defaultLocale = 'fr';
const locales = [];
const pages = [];

// Import locales list
let req = require.context('./locales/', false, /\.yml$/);
req.keys().forEach((key) => {
  locales.push(key.replace(/\.\/(.*)\.yml/, '$1'));
});
// Import pages list
req = require.context('./components/pages', false, /\.vue$/);
req.keys().forEach((key) => {
  pages.push(key.replace(/\.\/(.*)\.vue/, '$1'));
});

const lang = window.location.href
  .split('/')[(process.env.BASE_URL === '' || (window.location.href.match(/\//g)).length === 3) ? 3 : 4]
  .substr(0, 2)
  .toLowerCase() || defaultLocale;
document.getElementsByTagName('html')[0].setAttribute('lang', lang);
const userLang = navigator.languages
  || [navigator.language || navigator.userLanguage];
let defaultRouteLang = '';

const messages = {};
messages.locales = require('./lang.yml'); // eslint-disable-line
messages.locales.avalaible = Object.keys(messages.locales).filter(n => locales.indexOf(n) > -1);

// Data import
let data = {};
data = require('./data.yml'); // eslint-disable-line
data['/'] = `/${process.env.BASE_URL.replace(/(.+)/, '$1/')}`;
data.hash = window.location.hash.replace('#', '');
data.txt = data.txt || {};
data.html = data.html || {};
Object.keys(data.color).forEach((k) => {
  if (data.txt[k] === undefined) {
    const tmp = document.createElement('div');
    tmp.innerHTML = data.color[k];
    data.txt[k] = tmp.textContent || tmp.innerText;
  }
});

Object.keys(data.link).forEach((k) => {
  if (data.html[k] === undefined) {
    if (data.color[k] !== undefined) {
      data.html[k] = `<a href="${data.link[k]}">${data.color[k]}</a>`;
    } else if (data.txt[k] !== undefined) {
      data.html[k] = `<a href="${data.link[k]}">${data.txt[k]}</a>`;
    }
  }
});
data.year = {
  current: (new Date().getFullYear()).toString(),
  next: (new Date().getFullYear() + 1).toString(),
};

const routes = [
  { path: '/', component: Home, meta: { id: 'home', lang: defaultLocale } },
];

for (let i = 0; i < locales.length; i += 1) {
  messages[locales[i]] = {};
  // Locales import
  /* eslint-disable */
  import(/* webpackChunkName: "lang-[request]" */`./locales/${locales[i]}.yml`).then((locale) => {
    messages[locales[i]] = locale;
    messages[locales[i]].data = data;
    messages[locales[i]].lang = locales[i];
  }).catch((err) => {
    console.error(err);
  });
  /* eslint-enable */

  // Localized routes
  for (let j = 0; j < pages.length; j += 1) {
    const component = require(`./components/pages/${pages[j]}.vue`); // eslint-disable-line
    routes.push({
      path: `/${locales[i]}${pages[j].toLowerCase().replace(/^/, '/').replace('/home', '')}`,
      component: component.default,
      meta: { id: pages[j].toLowerCase(), lang: locales[i] },
    });
  }
}

// define defaultRouteLang
for (let j = 0; j < userLang.length; j += 1) { // check if user locales
  for (let i = 0; i < locales.length; i += 1) { // matches with app locales
    if (defaultRouteLang === '' && userLang[j].substring(0, 2).toLowerCase() === locales[i]) {
      defaultRouteLang = locales[i];
    }
  }
}

// Home redirection
const currentURL = window.location.href.replace(/\/+$/, '');
if ((currentURL.split('/')[3] === undefined || currentURL.split('/')[3] === process.env.BASE_URL)
  && (currentURL.split('/')[4] === undefined)) {
  if (defaultRouteLang === '') {
    defaultRouteLang = defaultLocale;
  }
  window.location.href = `${currentURL}/${defaultRouteLang}/`;
}

// Create VueI18n instance with options
const i18n = new VueI18n({
  locale: lang,
  fallbackLocale: defaultLocale,
  messages,
  silentTranslationWarn: true,
});

// Framanav
if (!window.vuefsPrerender
  && document.querySelectorAll('script[src$="nav.js"]').length < 1
  && process.env.NODE_ENV !== 'development') {
  const navConfig = document.createElement('script');
  navConfig.innerHTML = 'l$ = { js: { j$: \'noConflict\' } }';
  document.getElementsByTagName('head')[0].appendChild(navConfig);
  const nav = document.createElement('script');
  nav.src = 'https://framasoft.org/nav/nav.js';
  document.getElementsByTagName('head')[0].appendChild(nav);
}

// Routes
const router = new VueRouter({
  routes,
  scrollBehavior(to) {
    if (to.path.match(/full/)) {
      return { x: 0, y: 0 };
    }
    return {};
  },
  mode: 'history',
  base: `${__dirname}${process.env.BASE_URL}`,
});

new Vue({ // eslint-disable-line no-new
  el: '#app',
  router,
  i18n,
  data,
  mounted() {
    // You'll need this for renderAfterDocumentEvent.
    document.dispatchEvent(new Event('render-event'));
  },
  render: h => h(App),
});
