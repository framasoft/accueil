<template>
  <div id="app">
    <vue-headful
      :title="$t('msg.meta.title')"
      :description="$t('msg.meta.desc')"
      :keywords="$t('msg.meta.keywords')"
      :head="{
        'meta[name=author]': {content:  $t('msg.meta.name') },
        'meta[name$=title]': {content: $t('msg.meta.title') },
        'meta[name$=publisher]': {content: $t('msg.meta.name') },
        'meta[name$=contributor]': {content: $t('msg.meta.name') },
        'meta[name$=language]': {content: $t('msg.meta.lang') },
        'meta[name$=subject]': {content: $t('msg.meta.keywords') },
        'meta[name$=rights]': {content: $t('msg.meta.license') },
        'meta[name$=description]': {content: $t('msg.meta.desc') },
      }"
    />
    <router-view></router-view>
  </div>
</template>
