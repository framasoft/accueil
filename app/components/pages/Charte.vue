<template>
  <div class="container ombre">
    <header class="clearfix header">
      <h1
        class="pull-left"
        v-html="$t('charte.title')"
      ></h1>
      <I18n />
    </header>
    <main>
      <div v-html="$t('charte.md')"></div>

      <div class="signature">
        <hr />
        <div v-html="$t('charte.footer')"></div>
      </div>
    </main>
  </div>
</template>

<script>
import I18n from '../partials/I18n.vue';

export default {
  components: {
    I18n,
  },
};
</script>
