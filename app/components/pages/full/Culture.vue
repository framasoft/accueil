<template>
  <b-container
    id="topPgculture"
    class="ombre px-5"
  >
    <b-row
      align-v="center"
      align-h="center"
    >
      <b-col lg="4">
        <h1 class="violet">
          <a
            href="#topPgculture"
            class="rouge"
            v-html="$t('cat.culture.title')"
          ></a>
        </h1>
      </b-col>
      <b-col lg="5">
        <p
          class="lead"
          v-html="$t('cat.culture.desc')"
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
          v-html="$t('pages.culture.title')"
        ></h3>
        <p
          class="blocSubTitle"
          v-html="$t('pages.culture.desc')"
        ></p>
        <p
          v-html="$t('pages.culture.text1')"
        ></p>
        <p
          v-html="$t('pages.culture.text2')"
        ></p>

        <figure>
          <img
            :src="`${$t('/')}img/${$t('lang')}/quelques-briques_licence-art-libre.jpg`"
            alt=""
            class="img-fluid d-block mx-auto"
          />
        </figure>

        <b-card>
          <blockquote
            class="m-0"
            v-html="$t('pages.culture.quote')"
          ></blockquote>
        </b-card>
      </b-col>

      <b-col lg="6">
        <b-row class="mt-2">
          <b-col
            v-for="frama in Object.keys($t('cat.culture.sites'))"
            :key="frama"
            lg="6"
          >
            <a :href="$t(`link.${frama}`)">
              <h4
                class="rouge"
                v-html="$t(`color.${frama}`)"
              ></h4>
            </a>
            <p
              :class="`miniBlocSubTitle ${$t(`icon.${frama}`)}`"
              v-html="$t(`cat.culture.sites.${frama}.title`)"
            ></p>
            <p
              class="miniBlocTexte"
              v-html="$t(`cat.culture.sites.${frama}.desc`)"
            ></p>
          </b-col>
        </b-row>
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
