import Vue from 'vue';
import VueRouter from 'vue-router';
import VueI18n from 'vue-i18n';
import vueHeadful from 'vue-headful';
import checkView from 'vue-check-view';

import App from './App.vue';

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
const locales = {};
const pages = [];
const commons = [];

// Import locales list
// in locales/[lg]/[file].yml
let req = require.context('./locales/', true, /\.\/.*\/.*\.yml$/);
req.keys().forEach((key) => {
  const lg = key.split('/')[1];
  const file = key.split('/')[2].replace(/\.yml/, '');
  if (locales[lg] === undefined) {
    locales[lg] = [];
  }
  if (!locales[lg].includes(file)) {
    locales[lg].push(file);
  }
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
messages.locales = require('./locales/lang.yml'); // eslint-disable-line
messages.locales.available = Object
  .keys(messages.locales)
  .filter(n => Object.keys(locales).includes(n) && locales[n].includes('_main'));

// Data import
let data = {};
const scripts = document.getElementsByTagName('script');
for (let i = 0; i < commons.length; i += 1) {
  req = require(`./data/commons/${commons[i]}.yml`) || {}; // eslint-disable-line
  data[commons[i]] = merge.$(data[commons[i]], JSON.parse(JSON.stringify(req)));
}
req = require('./data/project.yml') || {}; // eslint-disable-line
data = merge.$(data, JSON.parse(JSON.stringify(req)));

Object.assign(data, {
  host: window.location.host,
  url: window.location.href,
  '/': `/${process.env.BASE_URL.replace(/(.+)/, '$1/')}`,
  inframe: window.top.location !== window.self.document.location,
  hash: window.location.hash.replace('#', ''),
  date: process.env.DATE,
  year: {
    current: (new Date().getFullYear()).toString(),
    next: (new Date().getFullYear() + 1).toString(),
  },
});
data.self = new URL(scripts[scripts.length - 1].src, data.url).href;
if (process.env.NODE_ENV === 'production'
  && data.meta.canonical !== undefined
  && /^http/.test(data.meta.canonical)) {
  data.baseurl = data.meta.canonical;
} else {
  data.baseurl = `${data.self.split('/').slice(0, -1).join('/')}/`;
}

data.txt = data.txt || {};
data.html = data.html || {};
/* Depreciated */
/* Doing this is better on msg */
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
/* \ */

const routes = [];
let msg = {};
// Import locales
Object.keys(locales).forEach((k) => {
  /* eslint-disable */
  messages[k] = {};
  messages[k].lang = k;

  numberFormats[k] = {};
  numberFormats[k].eur = {
    style: 'currency',
    currency: 'EUR',
    maximumFractionDigits: 0,
    minimumFractionDigits: 0,
  };

  // Import data
  msg = {};
  msg = merge.$(msg, JSON.parse(JSON.stringify(data)));
  messages[k].data = data; // Keep a copy (depreciated)

  // Init with locales/lg/_commons.yml
  if (locales[k].includes('_commons')) {
    req = require(`./locales/${k}/_commons.yml`) || {};
    msg = merge.$(msg, JSON.parse(JSON.stringify(req)));
  }

  // locales/lg/_main.yml (active and visible)
  // or locales/lg/_main.yml (active and hidden)
  const mainFile = locales[k].filter(filename => /^_?main/.test(filename));
  if (mainFile.length > 0) {
    req = require(`./locales/${k}/${mainFile[0]}.yml`) || {};
    msg = merge.$(msg, JSON.parse(JSON.stringify(req)));
  }

  // locales/lg/*.yml
  for (let i = 0; i < locales[k].length; i += 1) {
    const file = locales[k][i];
    if (!/main|_commons/.test(file)) {
      msg[file] = msg[file] || {};
      req = require(`./locales/${k}/${file}.yml`) || {};
      msg[file] = merge.$(msg[file], JSON.parse(JSON.stringify(req)));
    }
  }

  Object.keys(msg.color).forEach((j) => {
    if (msg.txt[j] === undefined) {
      const tmp = document.createElement('div');
      tmp.innerHTML = msg.color[j];
      msg.txt[j] = tmp.textContent || tmp.innerText;
    }
  });
  Object.keys(msg.link).forEach((j) => {
    if (msg.html[j] === undefined) {
      if (msg.color[j] !== undefined) {
        msg.html[j] = `<a href="@:link.${j}">@:color.${j}</a>`;
      } else if (msg.txt[j] !== undefined) {
        msg.html[j] = `<a href="@:link.${j}">@:txt.${j}</a>`;
      }
    }
  });
  messages[k] = merge.$(messages[k], msg);
  /* eslint-enable */

  // Localized routes
  for (let j = 0; j < pages.length; j += 1) {
    const component = require(`./components/pages/${pages[j]}.vue`); // eslint-disable-line
    routes.push({
      path: `/${k}${pages[j].toLowerCase().replace(/^/, '/').replace('/home', '')}`,
      component: component.default,
      meta: { id: pages[j].toLowerCase(), lang: k },
    });
  }
});

// define defaultRouteLang
for (let j = 0; j < userLang.length; j += 1) { // check if user locales
  const lg = userLang[j].substring(0, 2).toLowerCase();
  if (defaultRouteLang === '' && Object.keys(locales).includes(lg)) { // matches with app locales
    defaultRouteLang = lg;
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
  const nav = document.createElement('script');
  nav.src = 'https://framasoft.org/nav/nav.js';
  document.getElementsByTagName('head')[0].appendChild(nav);
}

// Routes
const router = new VueRouter({
  base: `${__dirname}${process.env.BASE_URL}`,
  mode: 'history',
  routes,
  scrollBehavior(to, from, savedPosition) {
    if (to.hash) {
      return {
        selector: to.hash,
        offset: { x: 0, y: 60 },
      };
    }
    if (savedPosition) {
      return savedPosition;
    }
    return { x: 0, y: 0 };
  },
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
