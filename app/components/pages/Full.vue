<template>
  <div>
    <div
      id="topPgAccueil"
      class="container ombre"
    >
      <Header />

      <div class="row">
        <div class="col-md-8">
          <div class="row">
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

            <ul class="accroche">
              <li
                v-for="item in $t('pages.accroche')"
                :key="item"
                v-html="item"
              ></li>
            </ul>
          </div>

          <div
            class="row"
            style="margin-top:40px; margin-bottom:20px"
          >
            <div class="col-xs-10 col-xs-offset-1">
              <Search />
            </div>
          </div>

          <div class="row containerActu">
            <h3
              id="news"
              v-html="$t('pages.news')"
            ></h3>

            <Carousel />

            <h3 v-html="$t('pages.medias.title')"></h3>
            <p v-html="$t('pages.medias.intro')"></p>

            <div class="well">
              <table class="table">
                <thead>
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
            </div>
          </div>
        </div>

        <div
          id="blocFramatrucs"
          class="col-md-4"
        >
          <div
            v-for="section in Object.keys($t('cat'))
              .filter(key => !/(communaute|campagnes)/.test(key))"
            :key="section"
          >
            <h4 class="titreFramaTrucs">
              <a
                :href="`#topPg${section}`"
                :class="$t(`cat.${section}.color`)"
                v-html="$t(`cat.${section}.title`)"
              ></a>
            </h4>
            <div class="row">
              <ul class="listeFramaTrucs col-md-12">
                <li
                  v-for="key in $t(`cat.${section}.list`)"
                  :key="key"
                >
                  <span
                    :class="`w-${key}`"
                    v-html="$t(`cat.${section}.sites.${key}.what`)"
                  ></span>
                  <a
                    :href="$t(`link.${key}`)"
                    :class="$t(`cat.${section}.color`)"
                  >
                    ≻&nbsp;&nbsp;
                    <span v-html="$t(`color.${key}`)"></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <InterNavFoot />
    </div>

    <div
      id="topPgCommunaute"
      class="container ombre"
    >
      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename">
            <a
              href="#topPgCommunaute"
              class="violet"
              v-html="$t('cat.communaute.title')"
            ></a>
          </h1>
        </div>
        <div class="col-md-5">
          <p
            class="headerSubTitle"
            v-html="$t('cat.communaute.desc')"
          ></p>
        </div>
        <div class="col-md-3">
          <InterNavHead />
        </div>
      </div>

      <div
        id="contentCommunaute"
        class="row"
      >
        <div class="col-md-4 blocCommunaute">
          <img
            :src="`${$t('/')}img/framateam1.jpg`"
            alt=""
            class="img-responsive"
          />
        </div>

        <div class="col-md-4 blocCommunaute">
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
        </div>

        <div class="col-md-4 blocCommunaute">
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
        </div>

        <div class="col-md-4 blocCommunaute">
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
        </div>

        <div class="col-md-4 blocCommunaute">
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
        </div>

        <div class="col-md-4 blocCommunaute">
          <img
            :src="`${$t('/')}img/framateam2.jpg`"
            class="img-responsive"
            alt=""
          />
        </div>

        <div class="col-md-12 blocCommunaute partenaires">
          <h4
            class="titreBloc"
            v-html="$t('pages.partenaires.title')"
          ></h4>
          <p
            class="miniBlocTexte"
            v-html="$t('pages.partenaires.desc')"
          ></p>
        </div>
      </div>

      <InterNavFoot />
    </div>

    <div
      id="topPglogiciel"
      class="container ombre"
    >
      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename violet">
            <a
              href="#topPglogiciel"
              class="bleu"
              v-html="$t('cat.logiciel.title')"
            ></a>
          </h1>
        </div>
        <div class="col-md-5">
          <p
            class="headerSubTitle"
            v-html="$t('cat.logiciel.desc')"
          ></p>
        </div>
        <div class="col-md-3">
          <InterNavHead />
        </div>
      </div>

      <div class="row">
        <div
          id="presentationLogiciels"
          class="col-md-8"
        >
          <h3
            class="presentation"
            v-html="$t('pages.logiciel.title')"
          ></h3>
          <p
            class="blocSubTitle"
            v-html="$t('pages.logiciel.desc')"
          ></p>
          <p
            class="blocTexte"
            v-html="$t('pages.logiciel.text1')"
          ></p>
          <p
            class="blocTexte"
            v-html="$t('pages.logiciel.text2')"
          ></p>
        </div>

        <div class="col-md-4">
          <figure id="pingouinMuseeWindows">
            <img
              :src="`${$t('/')}img/musee-windows_ll-de-mars_licence-art-libre.jpg`"
              alt=""
            />
          </figure>
        </div>
      </div>

      <div class="row">
        <div
          v-for="frama in Object.keys($t('cat.logiciel.sites'))"
          :key="frama"
          class="col-md-3 miniBloc"
        >
          <a :href="$t(`link.${frama}`)">
            <h4
              class="bleu"
              v-html="$t(`color.${frama}`)"
            ></h4>
          </a>
          <p
            :class="`miniBlocSubTitle ${$t(`icon.${frama}`)}`"
            v-html="$t(`cat.logiciel.sites.${frama}.title`)"
          ></p>
          <p
            class="miniBlocTexte"
            v-html="$t(`cat.logiciel.sites.${frama}.desc`)"
          ></p>
        </div>
      </div>

      <InterNavFoot />
    </div>

    <div
      id="topPgculture"
      class="container ombre"
    >
      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename violet">
            <a
              href="#topPgculture"
              class="rouge"
              v-html="$t('cat.culture.title')"
            ></a>
          </h1>
        </div>
        <div class="col-md-5">
          <p
            class="headerSubTitle"
            v-html="$t('cat.culture.desc')"
          ></p>
        </div>
        <div class="col-md-3">
          <InterNavHead />
        </div>
      </div>

      <div class="row">
        <div
          id="presentationServices"
          class="col-md-6"
        >
          <div
            id="blocServices"
            class="row col-md-12"
          >
            <h3
              class="presentation"
              v-html="$t('pages.culture.title')"
            ></h3>
            <p
              class="blocSubTitle"
              v-html="$t('pages.culture.desc')"
            ></p>
            <p
              class="blocTexte"
              v-html="$t('pages.culture.text1')"
            ></p>
            <p
              class="blocTexte"
              v-html="$t('pages.culture.text2')"
            ></p>
          </div>

          <div class="row col-md-12">
            <figure id="pingouinsQuelquesBriques">
              <img
                :src="`${$t('/')}img/${$t('lang')}/quelques-briques_licence-art-libre.jpg`"
                alt=""
              />
            </figure>
          </div>

          <div class="row col-md-12">
            <blockquote
              class="well"
              v-html="$t('pages.culture.quote')"
            ></blockquote>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row">
            <div
              v-for="frama in Object.keys($t('cat.culture.sites'))"
              :key="frama"
              class="col-md-6 miniBloc2"
            >
              <a :href="$t(`link${frama}`)">
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
            </div>
          </div>
        </div>
      </div>

      <InterNavFoot />
    </div>

    <div
      id="topPgcloud"
      class="container ombre"
    >
      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename violet">
            <a
              href="#topPgcloud"
              class="vert"
              v-html="$t('cat.cloud.title')"
            ></a>
          </h1>
        </div>
        <div class="col-md-5">
          <p
            class="headerSubTitle"
            v-html="$t('cat.cloud.desc')"
          ></p>
        </div>
        <div class="col-md-3">
          <InterNavHead />
        </div>
      </div>

      <div class="row">
        <div id="presentationLibre">
          <div class="col-md-6">
            <h3
              class="presentation"
              v-html="$t('pages.cloud.title')"
            ></h3>
            <p
              class="blocSubTitle"
              v-html="$t('pages.cloud.desc')"
            ></p>
            <p
              class="blocTexte"
              v-html="$t('pages.cloud.text1')"
            ></p>
            <p
              class="blocTexte"
              v-html="$t('pages.cloud.text2')"
            ></p>
          </div>

          <div
            v-for="frama in Object.keys($t('cat.cloud.sites'))"
            :id="`f-${frama}`"
            :key="frama"
          >
            <ImageServiceBlock
              v-if="['sphere', 'bag', 'drop', 'site'].includes(frama)"
              :image="beforeImage(frama)"
            />
            <ServiceBlock :frama="frama.toString()" />
          </div>
        </div>
      </div>

      <InterNavFoot />
    </div>

    <div
      id="topPgvrac"
      class="container ombre"
    >
      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename violet">
            <a
              href="#topPgVrac"
              class="jaune"
              v-html="$t('cat.vrac.title')"
            ></a>
          </h1>
        </div>
        <div class="col-md-5">
          <p
            class="headerSubTitle"
            v-html="$t('cat.vrac.desc')"
          ></p>
        </div>
        <div class="col-md-3">
          <InterNavHead />
        </div>
      </div>

      <div class="row">
        <div
          id="presentationLibrenVrac"
          class="col-md-8"
        >
          <h3
            class="presentation"
            v-html="$t('pages.vrac.title')"
          ></h3>
          <p
            class="blocSubTitle"
            v-html="$t('pages.vrac.desc')"
          ></p>
          <p
            class="blocTexte"
            v-html="$t('pages.vrac.text')"
          ></p>
        </div>

        <div
          id="AlaUne"
          class="col-md-4"
        >
          <h4
            class="titreBloc"
            v-html="$t('pages.vrac.une.title')"
          ></h4>
          <p
            class="miniBlocSubTitle"
            v-html="$t('pages.vrac.une.desc')"
          ></p>
          <figure id="GeGeGenerator">
            <a href="https://framalab.org/gknd-creator/">
              <img
                :src="`${$t('/')}img/GeGeGenerator.jpg`"
                :alt="$t('pages.vrac.une.desc')"
              />
            </a>
          </figure>
          <p
            class="legende"
            v-html="$t('pages.vrac.une.desc')"
          ></p>
        </div>
      </div>

      <div class="row">
        <div
          v-for="frama in Object.keys($t('cat.vrac.sites'))"
          :key="frama"
          class="col-md-4 miniBloc"
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
        </div>
      </div>

      <InterNavFoot />
    </div>
  </div>
</template>

<script>
import Header from '../partials/Header.vue';
import InterNavHead from '../partials/InterNavHead.vue';
import InterNavFoot from '../partials/InterNavFoot.vue';
import Carousel from '../partials/Carousel.vue';
import Search from '../partials/Search.vue';
import ServiceBlock from '../partials/ServiceBlock.vue';
import ImageServiceBlock from '../partials/ImageServiceBlock.vue';

export default {
  name: 'Home',
  components: {
    ImageServiceBlock,
    ServiceBlock,
    Header,
    InterNavHead,
    InterNavFoot,
    Carousel,
    Search,
  },
  data() {
    return {
      service2image: {
        sphere: 'stallmanoramix',
        bag: 'village',
        drop: 'carte',
        site: 'fight',
      },
      image: {
        stallmanoramix: {
          src: 'stallmanoramix.png',
          link: 'https://degooglisons-internet.org',
          width: '6',
          alt: '',
        },
        village: {
          src: 'village.png',
          link: 'https://degooglisons-internet.org',
          width: '6',
          alt: '',
        },
        fight: {
          src: 'fight.png',
          link: 'https://degooglisons-internet.org',
          width: '6',
          alt: '',
        },
        carte: {
          src: 'carte_petite.png',
          link: 'https://degooglisons-internet.org',
          width: '3',
          alt: '',
        },
      },
    };
  },
  methods: {
    beforeImage(service) {
      return this.image[this.service2image[service]];
    },
  },
};
</script>

<style>
  .clearBoth {
    clear: both;
  }
</style>
