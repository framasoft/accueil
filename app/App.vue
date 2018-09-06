<template>
  <div id="app">
    <vue-headful
      :title="$t('meta.title')"
      :html="{ body: {id: $route.meta.id } }"
      :description="$t('meta.desc')"
      :keywords="$t('meta.keywords')"
      :head="{
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
