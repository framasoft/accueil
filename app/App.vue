<template>
  <div id="app">
    <vue-headful
      :title="$t('meta.title')"
      :description="$t('meta.description')"
      :html="{ body: {id: $route.meta.id } }"
      :lang="$route.meta.lang"
      :keywords="$t('meta.keywords')"
      :head="{
        'link[rel^=shortcut]': {href: `${$root['/']}icons/favicon.png`},
        'link[rel=apple-touch-icon]': {href: `${$root['/']}icons/apple-touch-icon.png`},

        'meta[property^=og][property$=title]': {content: `${$t('meta.title')}`},
        'meta[property^=og][property$=image]': {content: `${$root.baseurl}icons/apple-touch-icon.png`},
        'meta[property^=og][property$=url]': {content: $root.baseurl},
        'meta[property^=og][property$=description]': {content: `${$t('meta.description')}`},

        'meta[name^=twitter][name$=title]': {content: `${$t('meta.title')}`},
        'meta[name^=twitter][name$=image]': {content: `${$root.baseurl}icons/apple-touch-icon.png`},
        'meta[name^=twitter][name$=description]': {content: `${$t('meta.description')}`},

        'meta[name=author]': {content:  $t('data.meta.name') },
        'meta[name^=DC][name$=title]': {content: $t('meta.title') },
        'meta[name^=DC][name$=publisher]': {content: $t('data.meta.name') },
        'meta[name^=DC][name$=contributor]': {content: $t('data.meta.name') },
        'meta[name^=DC][name$=language]': {content: $t('lang') },
        'meta[name^=DC][name$=subject]': {content: $t('meta.keywords') },
        'meta[name^=DC][name$=rights]': {content: $t('meta.license') },
        'meta[name^=DC][name$=description]': {content: $t('meta.desc') },
      }"
    />
    <router-view></router-view>
  </div>
</template>
