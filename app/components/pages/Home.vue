<template>
  <div id="home">
    <div class="container ombre" id="topPgAccueil">

      <Header></Header>

      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <figure id="pingouinVolant" class="pull-right" >
              <img :src="$t('baseImg') + 'pingouinVolantRefait.png'" alt="" />
            </figure>

            <ul class="accroche" v-html="$t('msg.pages.accroche')"></ul>
          </div>

          <div class="row" style="margin-top:40px; margin-bottom:20px">
            <div class="col-xs-10 col-xs-offset-1">
              <Search/>
            </div>
          </div>

          <div class="row containerActu">
            <h3 id="news">{{ $t('msg.pages.news') }}</h3>

            <Carousel/>

            <h3>{{ $t('msg.pages.medias.title') }}</h3>
            <p v-html="$t('msg.pages.medias.intro')"></p>

            <div class="well">
              <table class="table">
                <thead>
                  <tr>
                    <th>{{ $t('msg.pages.medias.th1') }}</th>
                    <th>{{ $t('msg.pages.medias.th2') }}</th>
                    <th>{{ $t('msg.pages.medias.th3') }}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="item in $t('msg.pages.medias.list')" :key="item[2]">
                    <td>{{ item[0] }}</td>
                    <td>{{ item[1] }}</td>
                    <td><a :href="item[2]">{{ item[3] }}</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div
          v-for="(section, titre) in sideMenuCat()"
          id="blocFramatrucs"
          :key="titre"
          class="col-md-4">
          <h4 class="titreFramaTrucs">
            <a
              :href="`#topPg${titre}`"
              :class="$t('data.cat.' + titre + '.color')">{{ section.title }}</a>
          </h4>
          <div class="row">
            <ul class="listeFramaTrucs col-md-12">
              <li
                v-for="([key, frama], index) in tradEntries(section.sites)"
                :key="frama.link"
              >
                <span
                  :class="hideRepeat(index, tradEntries(section.sites))"
                >{{ frama.what }}</span>
                <a
                  :href="$t('data.cat.' + titre + '.sites.' + key + '.link')"
                  :class="section.color">≻&nbsp;&nbsp;
                  <span v-html="$t('data.cat.' + titre + '.sites.' + key + '.name')"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <InterNavFoot/>

    </div>

    <div class="container ombre" id="topPgCommunaute">
      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename"><a href="#topPgCommunaute" class="violet">
            {{ $t('msg.cat.communaute.title') }}
          </a></h1>
        </div>
        <div class="col-md-5">
          <p class="headerSubTitle">{{ $t('msg.cat.communaute.desc') }}</p>
        </div>
        <div class="col-md-3">
          <InterNavHead/>
        </div>
      </div>

      <div class="row partenaires" id="contentCommunaute">
        <div class="col-md-4 blocCommunaute" >
          <img :src="$t('baseImg') + 'framateam1.jpg'" class="img-responsive" alt="" />
        </div>

        <div class="col-md-4 blocCommunaute">
          <h4 class="titreBloc">{{ $t('msg.pages.communaute.title') }}</h4>
          <p class="miniBlocSubTitle">{{ $t('msg.pages.communaute.desc ') }}</p>
          <p class="miniBlocTexte" v-html="$t('msg.pages.communaute.text')"></p>
        </div>

        <div class="col-md-4 blocCommunaute">
          <h4 class="titreBloc">{{ $t('msg.pages.asso.title') }}</h4>
          <p class="miniBlocSubTitle">{{ $t('msg.pages.asso.desc') }}</p>
          <p class="miniBlocTexte" v-html="$t('msg.pages.asso.text')"></p>
        </div>

        <div class="col-md-4 blocCommunaute">
          <h4 class="titreBloc">{{ $t('msg.pages.participer.title') }}</h4>
          <p class="miniBlocSubTitle">{{ $t('msg.pages.participer.desc') }}</p>
          <p class="miniBlocTexte" v-html="$t('msg.pages.participer.text')"></p>
        </div>

        <div class="col-md-4 blocCommunaute">
          <h4 class="titreBloc">{{ $t('msg.pages.soutenir.title') }}</h4>
          <p class="miniBlocSubTitle">{{ $t('msg.pages.soutenir.desc') }}</p>
          <p class="miniBlocTexte" v-html="$t('msg.pages.soutenir.text')"></p>
        </div>

        <div class="col-md-4 blocCommunaute">
          <img :src="$t('baseImg') + 'framateam2.jpg'" class="img-responsive" alt="" />
        </div>

        <div class="col-md-12 blocCommunaute partenaires">
          <h4 class="titreBloc">{{ $t('msg.pages.partenaires.title') }}</h4>
          <p class="miniBlocTexte" v-html="$t('msg.pages.partenaires.desc')"></p>
          <ul class="list-inline text-center">
            <li><a href="http://milliweb.fr/"><img src="https://soutenir.framasoft.org/sites/default/files/partenaires/logoMilliweb_150.png" alt="Milliweb"></a></li>
            <li><a href="https://www.flexilivre.com/"><img src="https://soutenir.framasoft.org/sites/default/files/flexilivre.png" alt="FlexiLivre"></a></li>
            <li><a href="http://linphone.org/"><img src="https://soutenir.framasoft.org/sites/default/files/belledonne2.png" alt="Belledonne Communication"></a></li>
          </ul>
        </div>
      </div>

      <InterNavFoot/>

    </div>

    <div class="container ombre" id="topPglogiciel">
      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename violet"><a href="#topPglogiciel" class="bleu">
            {{ $t('msg.cat.logiciel.title') }}
          </a></h1>
        </div>
        <div class="col-md-5">
          <p class="headerSubTitle">{{ $t('msg.cat.logiciel.desc') }}</p>
        </div>
        <div class="col-md-3">
          <InterNavHead/>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8" id="presentationLogiciels">
          <h3 class="presentation">{{ $t('msg.pages.logiciel.title') }}</h3>
          <p class="blocSubTitle" v-html="$t('msg.pages.logiciel.desc')"></p>
          <p class="blocTexte" v-html="$t('msg.pages.logiciel.text1')"></p>
          <p class="blocTexte" v-html="$t('msg.pages.logiciel.text2')"></p>
        </div>

        <div class="col-md-4">
          <figure id="pingouinMuseeWindows">
            <img :src="$t('baseImg') + 'musee-windows_ll-de-mars_licence-art-libre.jpg'" alt="" />
          </figure>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 miniBloc" v-for="(frama, index) in $t('msg.cat.logiciel.sites')">
          <a :href="$t(`data.cat.logiciel.sites.${index}.link`)">
            <h4 class="bleu" v-html="$t(`data.cat.logiciel.sites.${index}.name`)"></h4>
          </a>
          <p class="miniBlocSubTitle" v-bind:class="frama.icon" v-html="frama.title"></p>
          <p class="miniBlocTexte" v-html="frama.desc"></p>
        </div>
      </div>

      <InterNavFoot/>

    </div>

    <div class="container ombre" id="topPgculture">
      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename violet"><a href="#topPgculture" class="rouge">
            {{ $t('msg.cat.culture.title') }}
          </a></h1>
        </div>
        <div class="col-md-5">
          <p class="headerSubTitle">{{ $t('msg.cat.culture.desc') }}</p>
        </div>
        <div class="col-md-3">
          <InterNavHead/>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6" id="presentationServices">
          <div class="row col-md-12" id="blocServices">
            <h3 class="presentation">{{ $t('msg.pages.culture.title') }}</h3>
            <p class="blocSubTitle" v-html="$t('msg.pages.culture.desc')"></p>
            <p class="blocTexte" v-html="$t('msg.pages.culture.text1')"></p>
            <p class="blocTexte" v-html="$t('msg.pages.culture.text2')"></p>
          </div>

          <div class="row col-md-12">
            <figure id="pingouinsQuelquesBriques">
              <img :src="$t('baseImg') + 'quelques-briques_licence-art-libre.jpg'" alt="" />
            </figure>
          </div>

          <div class="row col-md-12">
            <blockquote class="well">
              {{ $t('msg.pages.culture.quote') }}
            </blockquote>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6 miniBloc2" v-for="(frama, index) in $t('msg.cat.culture.sites')">
              <a :href="$t(`data.cat.culture.sites.${index}.link`)">
                <h4 class="rouge" v-html="$t(`data.cat.culture.sites.${index}.name`)"></h4>
              </a>
              <p class="miniBlocSubTitle" v-bind:class="frama.icon" v-html="frama.title"></p>
              <p class="miniBlocTexte" v-html="frama.desc"></p>
            </div>
          </div>
        </div>
      </div>

      <InterNavFoot/>

    </div>

    <div class="container ombre" id="topPgcloud">
      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename violet"><a href="#topPgcloud" class="vert">
            {{ $t('msg.cat.cloud.title') }}
          </a></h1>
        </div>
        <div class="col-md-5">
          <p class="headerSubTitle">{{ $t('msg.cat.cloud.desc') }}</p>
        </div>
        <div class="col-md-3">
          <InterNavHead/>
        </div>
      </div>

      <div class="row">
        <div id="presentationLibre">
          <div class="col-md-6">
            <h3 class="presentation">{{ $t('msg.pages.cloud.title') }}</h3>
            <p class="blocSubTitle" v-html="$t('msg.pages.cloud.desc')"></p>
            <p class="blocTexte" v-html="$t('msg.pages.cloud.text1')"></p>
            <p class="blocTexte" v-html="$t('msg.pages.cloud.text2')"></p>
          </div>

          <div
            v-for="(frama, index) in $t('msg.cat.cloud.sites')"
            :key="index"
            :id="`f-${index}`">
            <ImageServiceBlock
              v-if="['bee', 'bag', 'drop', 'site'].includes(index)"
              :image="beforeImage(index)" />
            <ServiceBlock :index="index" />
          </div>
        </div>
      </div>

      <InterNavFoot/>

    </div>

    <div class="container ombre" id="topPgvrac">

      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename violet"><a href="#topPgVrac" class="jaune">
            {{ $t('msg.cat.cloud.title') }}
          </a></h1>
        </div>
        <div class="col-md-5">
          <p class="headerSubTitle">{{ $t('msg.cat.vrac.desc') }}</p>
        </div>
        <div class="col-md-3">
          <InterNavHead/>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8" id="presentationLibrenVrac">
          <h3 class="presentation">{{ $t('msg.pages.vrac.title') }}</h3>
          <p class="blocSubTitle" v-html="$t('msg.pages.vrac.desc')"></p>
          <p class="blocTexte" v-html="$t('msg.pages.vrac.text')"></p>
        </div>

        <div class="col-md-4" id="AlaUne">
          <h4 class="titreBloc">{{ $t('msg.pages.vrac.une.title') }}</h4>
          <p class="miniBlocSubTitle">{{ $t('msg.pages.vrac.une.desc') }}</p>
          <figure id="GeGeGenerator">
            <a href="https://framalab.org/gknd-creator/"><img :src="$t('baseImg') + 'GeGeGenerator.jpg'" :alt="$t('msg.pages.vrac.une.desc')" /></a>
          </figure>
          <p class="legende">{{ $t('msg.pages.vrac.une.desc') }}</p>
        </div>
      </div>

      <div class="row">
        <div
          v-for="(frama, index) in $t('msg.cat.vrac.sites')"
          :id="'f-' + index"
          :key="index"
          class="col-md-4 miniBloc"
        >
          <a :href="$t(`data.cat.vrac.sites.${index}.link`)">
            <h4 class="jaune" v-html="$t(`data.cat.vrac.sites.${index}.name`)"></h4>
          </a>
          <p class="miniBlocSubTitle" :class="frama.icon" v-html="frama.title"></p>
          <p class="miniBlocTexte" v-html="frama.desc"></p>
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
    console.log(this.$i18n.locale); // eslint-disable-line
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
      const categories = this.$t('msg.cat');
      return Object.assign(...Object.keys(categories)
        .filter(key => Object.prototype.hasOwnProperty.call(categories[key], 'no_menu') === false)
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
