<template>
  <div>
    <div class="container ombre" id="topPgAccueil">

      <Header></Header>

      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <figure id="pingouinVolant" class="pull-right" >
              <img :src="$root['/'] + 'img/biglogo-notxt.png'" style="max-width: 250px;margin: 0;" alt="" />
            </figure>

            <ul class="accroche">
              <li v-for="item in $t('pages.accroche')" v-html="item"></li>
            </ul>
          </div>

          <div class="row" style="margin-top:40px; margin-bottom:20px">
            <div class="col-xs-10 col-xs-offset-1">
              <Search/>
            </div>
          </div>

          <div class="row containerActu">
            <h3 id="news" v-html="$t('pages.news')"></h3>

            <Carousel/>

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
                    v-for="item in $root.pages.medias.list"
                    :key="item[3]"
                    v-if="item[0] === $t('lang') || (item[0] === 'en' && $t('lang') !== 'fr')">
                    <td v-html="item[1]"></td>
                    <td v-html="item[2]"></td>
                    <td ><a :href="item[3]" :hreflang="item[0]" v-html="$t(item[4])"></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div id="blocFramatrucs" class="col-md-4">
          <div
            v-for="(section, titre) in sideMenuCat()"
            :key="titre"
            >
            <h4 class="titreFramaTrucs">
              <a
                :href="`#topPg${titre}`"
                :class="$root.cat[titre].color"
                v-html="section.title"
              ></a>
            </h4>
            <div class="row">
              <ul class="listeFramaTrucs col-md-12">
                <li
                  v-for="([key, frama], index) in tradEntries(section.sites)"
                  :key="frama.link"
                >
                  <span
                    :class="hideRepeat(index, tradEntries(section.sites))"
                     v-html="frama.what"></span>
                  <a
                    :href="$root.link[key]"
                    :class="section.color">≻&nbsp;&nbsp;
                    <span v-html="$root.color[key]"></span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <InterNavFoot/>

    </div>

    <div class="container ombre" id="topPgCommunaute">
      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename">
            <a href="#topPgCommunaute" class="violet" v-html="$t('cat.communaute.title')"></a>
          </h1>
        </div>
        <div class="col-md-5">
          <p class="headerSubTitle" v-html="$t('cat.communaute.desc')"></p>
        </div>
        <div class="col-md-3">
          <InterNavHead/>
        </div>
      </div>

      <div class="row" id="contentCommunaute">
        <div class="col-md-4 blocCommunaute" >
          <img :src="$root['/'] + 'img/framateam1.jpg'" class="img-responsive" alt="" />
        </div>

        <div class="col-md-4 blocCommunaute">
          <h4 class="titreBloc" v-html="$t('pages.communaute.title')"></h4>
          <p class="miniBlocSubTitle" v-html="$t('pages.communaute.desc')"></p>
          <p class="miniBlocTexte" v-html="$t('pages.communaute.text')"></p>
        </div>

        <div class="col-md-4 blocCommunaute">
          <h4 class="titreBloc" v-html="$t('pages.asso.title')"></h4>
          <p class="miniBlocSubTitle" v-html="$t('pages.asso.desc')"></p>
          <p class="miniBlocTexte" v-html="$t('pages.asso.text')"></p>
        </div>

        <div class="col-md-4 blocCommunaute">
          <h4 class="titreBloc" v-html="$t('pages.participer.title')"></h4>
          <p class="miniBlocSubTitle" v-html="$t('pages.participer.desc')"></p>
          <p class="miniBlocTexte" v-html="$t('pages.participer.text')"></p>
        </div>

        <div class="col-md-4 blocCommunaute">
          <h4 class="titreBloc" v-html="$t('pages.soutenir.title')"></h4>
          <p class="miniBlocSubTitle" v-html="$t('pages.soutenir.desc')"></p>
          <p class="miniBlocTexte" v-html="$t('pages.soutenir.text')"></p>
        </div>

        <div class="col-md-4 blocCommunaute">
          <img :src="$root['/'] + 'img/framateam2.jpg'" class="img-responsive" alt="" />
        </div>

        <div class="col-md-12 blocCommunaute partenaires">
          <h4 class="titreBloc" v-html="$t('pages.partenaires.title')"></h4>
          <p class="miniBlocTexte" v-html="$t('pages.partenaires.desc')"></p>
          <ul class="list-inline text-center">
            <li><a href="http://milliweb.fr">
              <img src="https://soutenir.framasoft.org/img/partenaires/milliweb.png" alt="Milliweb">
            </a></li>
            <li><a href="https://www.flexilivre.com">
              <img src="https://soutenir.framasoft.org/img/partenaires/flexilivre.png" alt="FlexiLivre">
            </a></li>
            <li><a href="http://linphone.org">
              <img src="https://soutenir.framasoft.org/img/partenaires/belledonne.png" alt="Belledonne Communication">
            </a></li>
          </ul>
        </div>
      </div>

      <InterNavFoot/>

    </div>

    <div class="container ombre" id="topPglogiciel">
      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename violet">
            <a href="#topPglogiciel" class="bleu" v-html="$t('cat.logiciel.title')"></a>
          </h1>
        </div>
        <div class="col-md-5">
          <p class="headerSubTitle" v-html="$t('cat.logiciel.desc')"></p>
        </div>
        <div class="col-md-3">
          <InterNavHead/>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8" id="presentationLogiciels">
          <h3 class="presentation" v-html="$t('pages.logiciel.title')"></h3>
          <p class="blocSubTitle" v-html="$t('pages.logiciel.desc')"></p>
          <p class="blocTexte" v-html="$t('pages.logiciel.text1')"></p>
          <p class="blocTexte" v-html="$t('pages.logiciel.text2')"></p>
        </div>

        <div class="col-md-4">
          <figure id="pingouinMuseeWindows">
            <img :src="$root['/'] + 'img/musee-windows_ll-de-mars_licence-art-libre.jpg'" alt="" />
          </figure>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 miniBloc" v-for="frama in $root.cat.logiciel.sites">
          <a :href="$root.link[frama]">
            <h4 class="bleu" v-html="$root.color[frama]"></h4>
          </a>
          <p
            :class="`miniBlocSubTitle ${$root.icon[frama]}`"
            v-html="$t('cat.logiciel.sites.' + frama + '.title')"
          ></p>
          <p class="miniBlocTexte" v-html="$t('cat.logiciel.sites.' + frama + '.desc')"></p>
        </div>
      </div>

      <InterNavFoot/>

    </div>

    <div class="container ombre" id="topPgculture">
      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename violet">
            <a href="#topPgculture" class="rouge" v-html="$t('cat.culture.title')"></a>
          </h1>
        </div>
        <div class="col-md-5">
          <p class="headerSubTitle" v-html="$t('cat.culture.desc')"></p>
        </div>
        <div class="col-md-3">
          <InterNavHead/>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6" id="presentationServices">
          <div class="row col-md-12" id="blocServices">
            <h3 class="presentation" v-html="$t('pages.culture.title')"></h3>
            <p class="blocSubTitle" v-html="$t('pages.culture.desc')"></p>
            <p class="blocTexte" v-html="$t('pages.culture.text1')"></p>
            <p class="blocTexte" v-html="$t('pages.culture.text2')"></p>
          </div>

          <div class="row col-md-12">
            <figure id="pingouinsQuelquesBriques">
              <img :src="`${$root['/']}img/${$t('lang')}/quelques-briques_licence-art-libre.jpg`" alt="" />
            </figure>
          </div>

          <div class="row col-md-12">
            <blockquote class="well" v-html="$t('pages.culture.quote')"></blockquote>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6 miniBloc2" v-for="frama in $root.cat.culture.sites">
              <a :href="$root.link[frama]">
                <h4 class="rouge" v-html="$root.color[frama]"></h4>
              </a>
              <p
                :class="`miniBlocSubTitle ${$root.icon[frama]}`"
                v-html="$t('cat.culture.sites.' + frama + '.title')"
              ></p>
              <p class="miniBlocTexte" v-html="$t('cat.culture.sites.' + frama + '.desc')"></p>
            </div>
          </div>
        </div>
      </div>

      <InterNavFoot/>

    </div>

    <div class="container ombre" id="topPgcloud">
      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename violet">
            <a href="#topPgcloud" class="vert" v-html="$t('cat.cloud.title')"></a>
          </h1>
        </div>
        <div class="col-md-5">
          <p class="headerSubTitle" v-html="$t('cat.cloud.desc')"></p>
        </div>
        <div class="col-md-3">
          <InterNavHead/>
        </div>
      </div>

      <div class="row">
        <div id="presentationLibre">
          <div class="col-md-6">
            <h3 class="presentation" v-html="$t('pages.cloud.title')"></h3>
            <p class="blocSubTitle" v-html="$t('pages.cloud.desc')"></p>
            <p class="blocTexte" v-html="$t('pages.cloud.text1')"></p>
            <p class="blocTexte" v-html="$t('pages.cloud.text2')"></p>
          </div>

          <div v-for="frama in $root.cat.cloud.sites" :id="`f-${frama}`">
            <ImageServiceBlock
              v-if="['bee', 'bag', 'drop', 'site'].includes(frama)"
              :image="beforeImage(frama)" />
            <ServiceBlock :frama="frama.toString()" />
          </div>
        </div>
      </div>

      <InterNavFoot/>

    </div>

    <div class="container ombre" id="topPgvrac">

      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename violet">
            <a href="#topPgVrac" class="jaune" v-html="$t('cat.vrac.title')"></a>
          </h1>
        </div>
        <div class="col-md-5">
          <p class="headerSubTitle" v-html="$t('cat.vrac.desc')"></p>
        </div>
        <div class="col-md-3">
          <InterNavHead/>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8" id="presentationLibrenVrac">
          <h3 class="presentation" v-html="$t('pages.vrac.title')"></h3>
          <p class="blocSubTitle" v-html="$t('pages.vrac.desc')"></p>
          <p class="blocTexte" v-html="$t('pages.vrac.text')"></p>
        </div>

        <div class="col-md-4" id="AlaUne">
          <h4 class="titreBloc" v-html="$t('pages.vrac.une.title')"></h4>
          <p class="miniBlocSubTitle" v-html="$t('pages.vrac.une.desc')"></p>
          <figure id="GeGeGenerator">
            <a href="https://framalab.org/gknd-creator/">
              <img :src="$root['/'] + 'img/GeGeGenerator.jpg'" :alt="$t('pages.vrac.une.desc')" />
            </a>
          </figure>
          <p class="legende" v-html="$t('pages.vrac.une.desc')"></p>
        </div>
      </div>

      <div class="row">
        <div v-for="frama in $root.cat.vrac.sites" class="col-md-4 miniBloc">
          <a :href="$root.link[frama]">
            <h4 class="jaune" v-html="$root.color[frama]"></h4>
          </a>
          <p
            :class="`miniBlocSubTitle ${$root.icon[frama]}`"
            v-html="$t('cat.vrac.sites.' + frama + '.title')"
          ></p>
          <p class="miniBlocTexte" v-html="$t('cat.vrac.sites.' + frama + '.desc')"></p>
        </div>
      </div>

      <InterNavFoot/>

    </div>

  </div>
</template>

<script>
import Header from '../partials/Header.vue'
import InterNavHead from '../partials/InterNavHead.vue'
import InterNavFoot from '../partials/InterNavFoot.vue'
import Carousel from '../partials/Carousel.vue'
import Search from '../partials/Search.vue'
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
        bee: 'stallmanoramix',
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
    hideRepeat(index, elemsEntries) {
      return index > 0 && elemsEntries[index][1].what === elemsEntries[index - 1][1].what ? 'sr-only' : '';
    },
    tradEntries(key) {
      if (key) {
        return Object.entries(key);
      }
      return null;
    },
    sideMenuCat() {
      const categories = this.$t('cat');
      return Object.assign(...Object.keys(categories)
        .filter(key => !/(communaute|campagnes)/.test(key))
        .map(key => ({ [key]: categories[key] })));
    },
    beforeImage(service) {
      return this.image[this.service2image[service]];
    },
  },
};
</script>
<style>
  .clearBoth{
    clear: both;
  }
</style>
