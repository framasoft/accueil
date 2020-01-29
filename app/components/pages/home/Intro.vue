<template>
  <section id="intro">
    <div class="bg">
      <div
        id="bubbles"
        class="bubbles"
      ></div>
      <div
        id="bubbles2"
        class="bubbles"
      ></div>
      <div
        id="bubbles3"
        class="bubbles"
      ></div>
    </div>
    <div class="container">
      <b-row class="mx-0 justify-content-end">
        <I18n />
      </b-row>
      <b-row class="mx-0">
        <b-col md="5">
          <h1 v-html="$t('txt.soft')"></h1>
          <h2 v-html="$t('home.intro.subtitle')"></h2>
          <p v-html="$t('home.intro.text')"></p>
          <p>
            <b-button
              href="#soutenir"
              variant="soutenir"
              size="lg"
              v-html="$t('home.intro.btn')"
            />
          </p>
        </b-col>
        <b-col
          md="7"
          class="text-center"
        >
          <img
            :src="`${$t('/')}img/biglogo-notxt.png`"
            alt=""
            class="rounded-circle"
          />
        </b-col>
      </b-row>
    </div>
  </section>
</template>
<script>
import I18n from '../../partials/I18n.vue';

export default {
  components: {
    I18n,
  },
};
</script>
