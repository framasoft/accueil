<template>
  <div class="container ombre apropos">
    <vue-headful
      :title="$root.meta.title + ' - ' + $t('charte.title')"
    />
    <header class="clearfix header">
      <h1 class="pull-left" v-html="$t('charte.title')"></h1>
      <I18n/>
    </header>
    <main>
      <p v-html="$t('charte.intro')"></p>

      <h2 v-html="$t('charte.libre.title')"></h2>
      <p v-for="p, index in $t('charte.libre.text')" v-html="$t('charte.libre.text['+ index +']')"></p>

      <h2 v-html="$t('charte.decentralized.title')"></h2>
      <p v-for="p, index in $t('charte.decentralized.text')" v-html="$t('charte.decentralized.text['+ index +']')"></p>

      <h2 v-html="$t('charte.ethic.title')"></h2>
      <p v-for="p, index in $t('charte.ethic.text')" v-html="$t('charte.ethic.text['+ index +']')"></p>

      <h2 v-html="$t('charte.solidary.title')"></h2>
      <p v-for="p, index in $t('charte.solidary.text')" v-html="$t('charte.solidary.text['+ index +']')"></p>

      <div class="signature">
        <hr />
        <p v-for="p, index in $t('charte.footer')" v-html="$t('charte.footer['+ index +']')"></p>
      </div>
    </main>
  </div>
</template>

<script>
import I18n from '../partials/I18n.vue'

export default {
  components: {
    I18n,
  },
}
</script>
