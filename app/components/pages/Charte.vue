<template>
  <b-container class="ombre">
    <header class="row">
      <h1
        class="col"
        v-html="$t('charte.title')"
      ></h1>
      <b-col
        cols="2"
        align-self="end"
      >
        <I18n />
      </b-col>
    </header>

    <hr class="trait" />

    <main>
      <div v-html="$t('charte.md')"></div>

      <div class="signature">
        <hr />
        <div v-html="$t('charte.footer')"></div>
      </div>
    </main>
  </b-container>
</template>

<script>
import I18n from '../partials/I18n.vue';

export default {
  components: {
    I18n,
  },
};
</script>
