<template>
  <div class="container ombre apropos">
    <vue-headful
      :title="`${$root.meta.title} - ${$t('cgu.title')}`"
    />
    <header class="clearfix header">
      <h1 class="pull-left" v-html="$t('cgu.title')"></h1>
      <I18n/>
    </header>
    <main>
      <h2 v-html="$t('cgu.intro.title')"></h2>
      <p v-html="$t('cgu.intro.text')"></p>

      <h2 v-html="$t('cgu.short.title')"></h2>
      <p v-html="$t('cgu.short.desc')"></p>
      <p><b v-html="$t('cgu.short.sympa.text')"></b></p>
      <ul class="list-group">
        <li
          v-for="index in Object.keys($t('cgu.short.sympa.list'))"
          :key="index"
          class="list-group-item bg-success"
          v-html="$t(`cgu.short.sympa.list[${index}]`)">
        </li>
      </ul>
      <p v-html="$t('cgu.short.terms.text')"></p>
      <ul class="list-group">
        <li
          v-for="index in Object.keys($t('cgu.short.terms.list'))"
          :key="index"
          class="list-group-item bg-warning"
          v-html="$t(`cgu.short.terms.list[${index}]`)">
        </li>
      </ul>

      <v-text section="cgu.full" />

      <div class="signature">
        <hr />
        <v-text section="cgu.footer" />
      </div>
    </main>
  </div>
</template>

<script>
import I18n from '../partials/I18n.vue';
import VText from '../partials/V-Text.vue';

export default {
  components: {
    I18n,
    VText,
  },
}
</script>
