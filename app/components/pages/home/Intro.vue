<template>
  <section id="intro" class="clearfix">
    <div class="bg">
      <div id="bubbles" class="bubbles"></div>
      <div id="bubbles2" class="bubbles"></div>
      <div id="bubbles3" class="bubbles"></div>
    </div>
    <div class="container">
      <div class="clearfix">
        <I18n/>
      </div>
      <div class="clearfix">
        <div class="col-sm-5">
          <h1 v-html="$t('txt.soft')"></h1>
          <h2 v-html="$t('home.intro.subtitle')"></h2>
          <p v-html="$t('home.intro.text')"></p>
          <p>
            <a href="#soutenir"
              class="btn btn-lg btn-soutenir"
              v-html="$t('home.intro.btn')">
            </a>
          </p>
        </div>
        <div class="col-sm-7 text-center">
          <img :src="`${$t('/')}img/biglogo-notxt.png`"
            alt=""
            class="img-circle">
        </div>
      </div>
    </div>
  </section>
</template>
<script>
import I18n from '../../partials/I18n.vue';

export default {
  components: {
    I18n,
  },
}
</script>
