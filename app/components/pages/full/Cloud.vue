<template>
  <b-container
    id="topPgcloud"
    class="ombre px-5"
  >
    <b-row
      align-v="center"
      align-h="center"
    >
      <b-col lg="4">
        <h1 class="violet">
          <a
            href="#topPgcloud"
            class="vert"
            v-html="$t('cat.cloud.title')"
          ></a>
        </h1>
      </b-col>
      <b-col lg="5">
        <p
          class="lead"
          v-html="$t('cat.cloud.desc')"
        ></p>
      </b-col>
      <b-col
        lg="3"
        align-self="end"
      >
        <InterNav />
      </b-col>
    </b-row>

    <hr class="trait" />

    <b-row class="mt-5">
      <b-col lg="6">
        <h3
          class="presentation"
          v-html="$t('pages.cloud.title')"
        ></h3>
        <p
          class="blocSubTitle"
          v-html="$t('pages.cloud.desc')"
        ></p>
        <p
          v-html="$t('pages.cloud.text1')"
        ></p>
        <p
          v-html="$t('pages.cloud.text2')"
        ></p>
      </b-col>

      <b-col
        v-for="frama in cols"
        :id="`f-${frama}`"
        :key="frama"
        :lg="/^(my|stallmanoramix|village|fight)$/.test(frama) ? '6' : '3'"
        class="mt-2"
      >
        <div
          v-if="/^(carte_petite|stallmanoramix|village|fight)$/.test(frama)"
        >
          <a :href="$t('link.dio')">
            <img
              :src="`${$t('/')}img/${$t('lang')}/${frama}.png`"
              alt=""
              class="img-fluid d-block mx-auto w-75"
            />
          </a>
        </div>
        <div v-else>
          <a :href="$t(`link.${frama}`)">
            <h4
              class="vert"
              v-html="$t(`color.${frama}`)"
            ></h4>
          </a>
          <p
            :class="`miniBlocSubTitle ${$t(`icon.${frama}`)}`"
            v-html="$t(`cat.cloud.sites.${frama}.title`)"
          ></p>
          <p
            class="miniBlocTexte"
            v-html="$t(`cat.cloud.sites.${frama}.desc`)"
          ></p>
        </div>
      </b-col>
    </b-row>

    <InterNav />
  </b-container>
</template>

<script>
import InterNav from '../../partials/InterNav.vue';

export default {
  components: {
    InterNav,
  },
  data() {
    const cols = Object.keys(this.$t('cat.cloud.sites'));
    const img = {
      sphere: 'stallmanoramix',
      bag: 'village',
      drop: 'carte_petite',
      site: 'fight',
    };
    Object.keys(img).forEach((key) => {
      cols.splice(cols.indexOf(key), 0, img[key]);
    });

    return {
      cols,
    };
  },
};
</script>
