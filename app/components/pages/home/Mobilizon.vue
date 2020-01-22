<template>
  <section id="mobilizon">
    <div class="embed-responsive embed-responsive-16by9">
      <img
        :src="`${$t('/')}img/mobilizon/event.gif`"
        class="embed-responsive-item"
        alt=""
        style="width: 100%"
      />
    </div>
    <div class="container ombre">
      <h2 v-html="$t('home.mobilizon.title')"></h2>
      <p v-html="$t('home.mobilizon.text')"></p>
      <p>
        <b-button
          :href="$t('home.mobilizon.link')"
          v-html="$t('home.mobilizon.btn')"
        />
      </p>
    </div>
    <p
      class="pfooter"
      v-html="$t('home.mobilizon.footer')"
    ></p>
  </section>
</template>

<script>
export default {
  data() {
    return {
      videoBackground: 'about:blank',
    };
  },
};
</script>
