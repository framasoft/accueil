<template>
  <b-container
    id="topPgvrac"
    class="ombre px-5"
  >
    <b-row
      align-v="center"
      align-h="center"
    >
      <b-col lg="4">
        <h1 class="violet">
          <a
            href="#topPgVrac"
            class="jaune"
            v-html="$t('cat.vrac.title')"
          ></a>
        </h1>
      </b-col>
      <b-col lg="5">
        <p
          class="lead"
          v-html="$t('cat.vrac.desc')"
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
      <b-col lg="7">
        <h3
          class="presentation"
          v-html="$t('pages.vrac.title')"
        ></h3>
        <p
          class="blocSubTitle"
          v-html="$t('pages.vrac.desc')"
        ></p>
        <p
          v-html="$t('pages.vrac.text')"
        ></p>
      </b-col>

      <b-col
        lg="5"
        class="mt-2"
      >
        <h4
          class="titreBloc"
          v-html="$t('pages.vrac.une.title')"
        ></h4>
        <p
          class="miniBlocSubTitle"
          v-html="$t('pages.vrac.une.desc')"
        ></p>
        <figure>
          <a href="https://framalab.org/gknd-creator/">
            <img
              :src="`${$t('/')}img/GeGeGenerator.jpg`"
              :alt="$t('pages.vrac.une.desc')"
              class="img-fluid"
            />
          </a>
        </figure>
      </b-col>
    </b-row>

    <b-row>
      <b-col
        v-for="frama in Object.keys($t('cat.vrac.sites'))"
        :key="frama"
        lg="4"
      >
        <a :href="$t(`link.${frama}`)">
          <h4
            class="jaune"
            v-html="$t(`color.${frama}`)"
          ></h4>
        </a>
        <p
          :class="`miniBlocSubTitle ${$t(`icon.${frama}`)}`"
          v-html="$t(`cat.vrac.sites.${frama}.title`)"
        ></p>
        <p
          class="miniBlocTexte"
          v-html="$t(`cat.vrac.sites.${frama}.desc`)"
        ></p>
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
};
</script>
