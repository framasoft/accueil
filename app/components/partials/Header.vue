<template>
  <b-row
    align-v="center"
    align-h="center"
  >
    <b-col lg="4">
      <h1>
        <router-link
          :to="`/${$t('lang')}/`"
          v-html="$t('color.soft')"
        />
      </h1>
    </b-col>
    <b-col lg="5">
      <p
        class="lead m-0"
        v-html="$t('meta.lead')"
      ></p>
    </b-col>
    <b-col
      lg="3"
      align-self="end"
    >
      <div class="clearfix">
        <I18n />
      </div>

      <div
        v-if="$route.meta.id === 'full'"
        class="mt-4"
      >
        <InterNav />
      </div>
    </b-col>
  </b-row>
</template>

<script>
import I18n from './I18n.vue';
import InterNav from './InterNav.vue';

export default {
  components: {
    I18n,
    InterNav,
  },
};

// Konami code
if (window.addEventListener) {
  const kkeys = [];
  const konami = '38,38,40,40,37,39,37,39,66,65';
  window.addEventListener('keydown', (e) => {
    kkeys.push(e.keyCode);
    if (kkeys.toString().indexOf(konami) >= 0) {
      alert('Konami old school ! pwnd :p'); // eslint-disable-line
      window.location.href = 'https://framasoft.org';
    }
  }, true);
}
</script>

