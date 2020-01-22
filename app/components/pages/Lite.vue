<template>
  <div
    id="topPgAccueil"
    class="container ombre"
  >
    <Header />

    <div class="row">
      <div class="col-xs-12">
        <hr class="trait" />
      </div>
    </div>

    <div
      class="row"
      style="margin-top:40px; margin-bottom:20px"
    >
      <div class="col-xs-12">
        <Search />
      </div>
    </div>

    <div
      v-for="category in ['cloud', 'logiciel', 'culture', 'vrac']"
      :key="category"
      :class="`row lite ${$t(`cat.${category}.color`)}`"
    >
      <h3
        :class="`titreFramaTrucs ${$t(`cat.${category}.color`)}`"
        v-html="$t(`cat.${category}.title`)"
      >
      </h3>
      <ul class="list-inline">
        <li
          v-for="frama in $t(`cat.${category}.list`)"
          :key="frama"
          class="col-xs-4 col-sm-3 text-center"
        >
          <a
            :href="$t(`link.${frama}`)"
            class="btn btn-lg btn-block btn-default"
            :title="$t(`cat.${category}.sites.${frama}.title`)"
          >
            <i
              :class="`fa fa-3x fa-fw ${$t(`icon.${frama}`)}`"
              aria-hidden="true"
            ></i>
            <br />
            <span v-html="$t(`color.${frama}`)"></span>
          </a>
        </li>
      </ul>
    </div>

    <hr
      class="trait row"
      role="presentation"
    />

    <div class="row">
      <div class="col-xs-12 containerActu">
        <h3
          id="news"
          v-html="$t('pages.news')"
        ></h3>

        <Carousel />
      </div>
    </div>
  </div>
</template>

<script>
import Header from '../partials/Header.vue';
import Carousel from '../partials/Carousel.vue';
import Search from '../partials/Search.vue';

export default {
  components: {
    Header,
    Carousel,
    Search,
  },
};
</script>
