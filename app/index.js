import Vue from 'vue';
import VueRouter from 'vue-router';
import VueI18n from 'vue-i18n';
// i18n
import App from './App.vue';
import Home from './components/pages/Home.vue';
import Lite from './components/pages/Lite.vue';

import './assets/scss/main.scss';

Vue.use(VueRouter);
Vue.use(VueI18n);

// Ready translated locale messages
const locales = ['en', 'fr'];
const lang = window.location.href.split('/')[3].substr(0, 2).toLowerCase() || 'fr';
document.getElementsByTagName('html')[0].setAttribute('lang', lang);

const messages = {};

const routes = [
  { path: '/', component: Home },
];

for (let i = 0; i < locales.length; i += 1) {
  messages[locales[i]] = { message: {} };
  // Locales import
  messages[locales[i]].message = require('./locales/' + locales[i] + '.yml'); // eslint-disable-line

  // Localized routes
  routes.push(
    { path: `/${locales[i]}`, component: Home },
    { path: `/${locales[i]}/lite`, component: Lite },
  );
}

// Create VueI18n instance with options
const i18n = new VueI18n({
  locale: lang, // set locale
  messages, // set locale messages
});

// <meta>
const head = messages[lang].message.meta;
if (typeof $ !== 'undefined') {
  $('title').text(head.title);
  $('head meta[name="description"]').attr('content', head.desc);
  $('head meta[name="author"]').attr('content', head.framasoft[0]);
  $('head meta[name="keywords"]').attr('content', head.keywords);

  $('head meta[name="DC.title"]').attr('content', head.title);
  $('head meta[name="DC.publisher"]').attr('content', head.framasoft[0]);
  $('head meta[name="DC.contributor"]').attr('content', head.framasoft[0]);
  $('head meta[name="DC.language"]').attr('content', head.lang);
  $('head meta[name="DC.subject"]').attr('content', head.keywords);
  $('head meta[name="DC.rights"]').attr('content', head.license);
  $('head meta[name="DC.description"]').attr('content', head.desc);
}
// </meta>

const router = new VueRouter({
  routes,
  mode: 'history',
  base: __dirname + ((process.env.NODE_ENV === 'preview') ? 'accueil' : ''), // eslint-disable-line
});

new Vue({ // eslint-disable-line no-new
  el: '#app',
  router,
  i18n,
  mounted() {
    // You'll need this for renderAfterDocumentEvent.
    document.dispatchEvent(new Event('render-event'));
  },
  render: h => h(App),
});
