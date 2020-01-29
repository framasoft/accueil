<template>
  <b-container
    id="topPgCommunaute"
    class="ombre px-5"
  >
    <b-row
      class="mx-0"
      align-v="center"
      align-h="center"
    >
      <b-col lg="4">
        <h1>
          <a
            href="#topPgCommunaute"
            class="violet"
            v-html="$t('cat.communaute.title')"
          ></a>
        </h1>
      </b-col>
      <b-col lg="5">
        <p
          class="lead"
          v-html="$t('cat.communaute.desc')"
        ></p>
      </b-col>
      <b-col
        lg="3"
        class="pr-0"
        align-self="end"
      >
        <InterNav />
      </b-col>
    </b-row>

    <hr class="trait" />

    <b-row class="mt-5">
      <b-col lg="4">
        <img
          :src="`${$t('/')}img/framateam1.jpg`"
          alt=""
          class="img-fluid w-100 mx-0 mt-2"
        />
      </b-col>

      <b-col lg="4">
        <h4
          class="titreBloc"
          v-html="$t('pages.communaute.title')"
        ></h4>
        <p
          class="miniBlocSubTitle"
          v-html="$t('pages.communaute.desc')"
        ></p>
        <p
          class="miniBlocTexte"
          v-html="$t('pages.communaute.text')"
        ></p>
      </b-col>

      <b-col lg="4">
        <h4
          class="titreBloc"
          v-html="$t('pages.asso.title')"
        ></h4>
        <p
          class="miniBlocSubTitle"
          v-html="$t('pages.asso.desc')"
        ></p>
        <p
          class="miniBlocTexte"
          v-html="$t('pages.asso.text')"
        ></p>
      </b-col>

      <b-col lg="4">
        <h4
          class="titreBloc"
          v-html="$t('pages.participer.title')"
        ></h4>
        <p
          class="miniBlocSubTitle"
          v-html="$t('pages.participer.desc')"
        ></p>
        <p
          class="miniBlocTexte"
          v-html="$t('pages.participer.text')"
        ></p>
      </b-col>

      <b-col lg="4">
        <h4
          class="titreBloc"
          v-html="$t('pages.soutenir.title')"
        ></h4>
        <p
          class="miniBlocSubTitle"
          v-html="$t('pages.soutenir.desc')"
        ></p>
        <p
          class="miniBlocTexte"
          v-html="$t('pages.soutenir.text')"
        ></p>
      </b-col>

      <b-col lg="4">
        <img
          :src="`${$t('/')}img/framateam2.jpg`"
          class="img-fluid w-100 mx-0 mt-2"
          alt=""
        />
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
