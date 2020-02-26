<template>
  <b-container class="ombre px-5">
    <Header />

    <hr class="trait" />

    <b-row>
      <b-col lg="8">
        <figure
          id="pingouinVolant"
          class="pull-right"
        >
          <img
            :src="`${$t('/')}img/biglogo-notxt.png`"
            style="max-width: 250px;margin: 0;"
            alt=""
          />
        </figure>

        <ul class="list-unstyled accroche mt-2 pl-4">
          <li
            v-for="item in $t('pages.accroche')"
            :key="item"
            v-html="$t(item)"
          ></li>
        </ul>

        <b-row
          class="mt-4 mb-3 mx-0"
          align-h="center"
        >
          <b-col
            md="10"
            class="p-0"
          >
            <Search />
          </b-col>
        </b-row>

        <b-row class="mx-0 mt-3">
          <h3
            id="news"
            v-html="$t('pages.news')"
          ></h3>

          <Carousel />

          <h3 v-html="$t('pages.medias.title')"></h3>
          <p v-html="$t('pages.medias.intro')"></p>

          <table class="table mx-auto">
            <thead class="table-dark">
              <tr>
                <th v-html="$t('pages.medias.th1')"></th>
                <th v-html="$t('pages.medias.th2')"></th>
                <th v-html="$t('pages.medias.th3')"></th>
              </tr>
            </thead>
            <tbody>
              <tr
                v-for="item in $t('pages.medias.list')"
                :key="item[3]"
                :class="!(item[0] === $t('lang')
                  || (item[0] === 'en' && $t('lang') !== 'fr')) ? 'hidden' : ''"
              >
                <td v-html="item[1]"></td>
                <td v-html="item[2]"></td>
                <td>
                  <a
                    :href="item[3]"
                    :hreflang="item[0]"
                    v-html="$t(item[4])"
                  ></a>
                </td>
              </tr>
            </tbody>
          </table>
        </b-row>
      </b-col>

      <b-col
        id="blocFramatrucs"
        lg="4"
      >
        <div
          v-for="section in Object.keys($t('cat'))
            .filter(key => !/(communaute|campagnes)/.test(key))"
          :key="section"
          class="clearfix"
        >
          <h4 class="titreFramaTrucs">
            <a
              :href="`#topPg${section}`"
              :class="$t(`cat.${section}.color`)"
              v-html="$t(`cat.${section}.title`)"
            ></a>
          </h4>

          <ul class="list-unstyled">
            <li
              v-for="key in $t(`cat.${section}.list`)"
              :key="key"
              class="clearfix"
            >
              <span
                :class="`w-${key} pull-left w-50`"
                v-html="$t(`cat.${section}.sites.${key}.what`)"
              ></span>
              <a
                :href="$t(`link.${key}`)"
                :class="`${$t(`cat.${section}.color`)} pull-right w-50`"
              >
                ≻ <span v-html="$t(`color.${key}`)"></span>
              </a>
            </li>
          </ul>
        </div>
      </b-col>
    </b-row>

    <InterNav />
  </b-container>
</template>

<script>
import Header from '../../partials/Header.vue';
import InterNav from '../../partials/InterNav.vue';
import Carousel from '../../partials/Carousel.vue';
import Search from '../../partials/Search.vue';

export default {
  components: {
    Header,
    InterNav,
    Carousel,
    Search,
  },
};
</script>
