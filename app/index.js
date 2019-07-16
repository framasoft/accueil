import Vue from 'vue';
import VueRouter from 'vue-router';
import VueI18n from 'vue-i18n';
import vueHeadful from 'vue-headful';
import checkView from 'vue-check-view';

import App from './App.vue';

import './assets/scss/bootstrap.scss';
import '../node_modules/fork-awesome/css/fork-awesome.css';
import './assets/scss/main.scss';

import text from './plugins/text';
import is from './plugins/is';
import cookie from './plugins/cookie';
import merge from './plugins/merge';

Vue.use(VueRouter);
Vue.use(VueI18n);
Vue.use(checkView);
Vue.component('vue-headful', vueHeadful);

Vue.use(text);
Vue.use(is);
Vue.use(cookie);
Vue.use(merge);

const defaultLocale = 'fr';
const locales = [];
const pages = [];
const commons = [];
const dataLocales = [];

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
// Import commons data list
req = require.context('./data/commons/', false, /\.yml$/);
req.keys().forEach((key) => {
  commons.push(key.replace(/\.\/(.*)\.yml/, '$1'));
});
// Import dataLocales list
req = require.context('./data/locales/', false, /\.yml$/);
req.keys().forEach((key) => {
  dataLocales.push(key.replace(/\.\/(.*)\.yml/, '$1'));
});

const lang = window.location.href
  .split('/')[(process.env.BASE_URL === '' || (window.location.href.match(/\//g)).length === 3) ? 3 : 4]
  .substr(0, 2)
  .toLowerCase() || '';
document.getElementsByTagName('html')[0].setAttribute('lang', lang);
const userLang = navigator.languages
  || [navigator.language || navigator.userLanguage];
let defaultRouteLang = '';

const messages = {};
const numberFormats = {};
messages.locales = require('./data/lang.yml'); // eslint-disable-line
messages.locales.available = Object.keys(messages.locales).filter(n => locales.indexOf(n) > -1);

// Data import
const data = {};
let project = {};
const scripts = document.getElementsByTagName('script');
for (let i = 0; i < commons.length; i += 1) {
  data[commons[i]] = require(`./data/commons/${commons[i]}.yml`); // eslint-disable-line
}
project = require('./data/project.yml'); // eslint-disable-line
Object.assign(data, project);

Object.assign(data, {
  host: window.location.host,
  url: window.location.href,
  '/': `/${process.env.BASE_URL.replace(/(.+)/, '$1/')}`,
  inframe: window.top.location !== window.self.document.location,
  hash: window.location.hash.replace('#', ''),
  browser: {
    agent: navigator.userAgent,
    opera: !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0,
    firefox: typeof InstallTrigger !== 'undefined',
    safari: Object.prototype.toString.call(window.HTMLElement).indexOf('Constructor') > 0,
    chrome: !!window.chrome && !(!!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0),
    ie: /*@cc_on!@*/false || !!document.documentMode, // eslint-disable-line
  },
});
data.self = new URL(scripts[scripts.length - 1].src, data.url).href;
data.baseurl = `${data.self.split('/').slice(0, -1).join('/')}/`;

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

const routes = [];
for (let i = 0; i < locales.length; i += 1) {
  messages[locales[i]] = {};
  numberFormats[locales[i]] = {};
  // Locales import
  /* eslint-disable */
  messages[locales[i]] = require(`./locales/${locales[i]}.yml`);
  messages[locales[i]].data = data;
  messages[locales[i]].lang = locales[i];
  numberFormats[locales[i]].eur = {
    style: 'currency',
    currency: 'EUR',
    maximumFractionDigits: 0,
    minimumFractionDigits: 0,
  };

  if (dataLocales.includes(locales[i])) {
    const dataLocale = require(`./data/locales/${locales[i]}.yml`);
    Object.keys(dataLocale).forEach((k) => {
      if (messages[locales[i]][k] === undefined) {
        messages[locales[i]][k] = dataLocale[k];
      } else {
        Object.assign(messages[locales[i]][k], dataLocale[k]);
      }
    });
  }
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

// Redirections
for (let i = 0; i < pages.length; i += 1) {
  if (!window.vuefsPrerender) {
    routes.push({
      path: `/${pages[i].toLowerCase().replace('home', '')}`,
      redirect: `/${defaultRouteLang}/${pages[i].toLowerCase().replace('home', '')}`,
    });
  } else {
    // Component needed for SEO
    const component = require(`./components/pages/${pages[i]}.vue`); // eslint-disable-line
    routes.push({
      path: `/${pages[i].toLowerCase().replace('home', '')}`,
      component: component.default,
    });
  }
}

// Create VueI18n instance with options
const i18n = new VueI18n({
  locale: lang === '' ? defaultRouteLang : lang,
  fallbackLocale: defaultLocale,
  messages,
  numberFormats,
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
