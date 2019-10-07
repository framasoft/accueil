<template>
  <div class="container ombre apropos">
    <vue-headful
      :title="`${$t('txt.soft')} - ${$t('charte.title')}`"
    />
    <header class="clearfix header">
      <h1 class="pull-left" v-html="$t('charte.title')"></h1>
      <I18n/>
    </header>
    <main>
      <v-text section="charte" />

      <div class="signature">
        <hr />
        <v-text section="charte.footer" />
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
