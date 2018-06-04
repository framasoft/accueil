<template lang="html">
  <div id="home">
    <div class="container ombre" id="topPgAccueil">

      <Header/>

      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <figure id="pingouinVolant" class="pull-right" >
              <img :src="img.pinchot" alt="" />
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
                  <tr v-for="(item, index) in $t('msg.pages.medias.list')">
                    <td>{{ item[0] }}</td>
                    <td>{{ item[1] }}</td>
                    <td><a :href="item[2]">{{ item[3] }}</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col-md-4" id="blocFramatrucs">
          <h4 class="titreFramaTrucs">
            <a href="#topPgLogiciels" class="bleu">{{ $t('msg.cat.logiciel.title') }}</a>
          </h4>
          <div class="row">
            <ul class="listeFramaTrucs col-md-12">
              <li v-for="(frama, index) in $t('msg.cat.logiciel.sites')">
                <span v-html="frama.what"></span> <a :href="frama.link" class="bleu">≻   <span v-html="frama.name"></span></a>
              </li>
            </ul>
          </div>
          <h4 class="titreFramaTrucs">
            <a href="#topPgCulture" class="rouge">{{ $t('msg.cat.culture.title') }}</a>
          </h4>
          <div class="row">
            <ul class="listeFramaTrucs col-md-12">
              <li v-for="(frama, index) in $t('msg.cat.culture.sites')">
                <span v-html="frama.what"></span> <a :href="frama.link" class="rouge">≻   <span v-html="frama.name"></span></a>
              </li>
            </ul>
          </div>
          <h4 class="titreFramaTrucs">
            <a href="#topPgCloud" class="vert">{{ $t('msg.cat.cloud.title') }}</a>
          </h4>
          <div class="row">
            <ul class="listeFramaTrucs col-md-12">
              <li v-for="(frama, index) in $t('msg.cat.cloud.sites')">
                <span v-html="frama.what"></span> <a :href="frama.link" class="vert">≻   <span v-html="frama.name"></span></a>
              </li>
            </ul>
          </div>
          <h4 class="titreFramaTrucs">
            <a href="#topPgVrac" class="jaune">{{ $t('msg.cat.vrac.title') }}</a>
          </h4>
          <div class="row">
            <ul class="listeFramaTrucs col-md-12">
              <li v-for="(frama, index) in $t('msg.cat.vrac.sites')">
                <span v-html="frama.what"></span> <a :href="frama.link" class="jaune">≻   <span v-html="frama.name"></span></a>
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
          <img :src="img.team1" class="img-responsive" alt="" />
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
          <img :src="img.team2" class="img-responsive" alt="" />
        </div>

        <div class="col-md-12 blocCommunaute partenaires">
          <h4 class="titreBloc">{{ $t('msg.pages.partenaires.title') }}</h4>
          <p class="miniBlocTexte" v-html="$t('msg.pages.partenaires.desc')"></p>
          <ul class="list-inline text-center" v-html="$t('msg.pages.partenaires.text')"></ul>
        </div>
      </div>

      <InterNavFoot/>

    </div>

    <div class="container ombre" id="topPgLogiciels">
      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename violet"><a href="#topPgLogiciels" class="bleu">
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
            <img :src="img.musee" alt="" />
          </figure>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 miniBloc" v-for="(frama, index) in $t('msg.cat.logiciel.sites')">
          <a :href="frama.link" ><h4 class="bleu" v-html="frama.name"></h4></a>
          <p class="miniBlocSubTitle" v-bind:class="frama.icon" v-html="frama.title"></p>
          <p class="miniBlocTexte" v-html="frama.desc"></p>
        </div>
      </div>

      <InterNavFoot/>

    </div>

    <div class="container ombre" id="topPgCulture">
      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename violet"><a href="#topPgCulture" class="rouge">
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
              <img :src="img.briques" alt="" />
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
              <a :href="frama.link" ><h4 class="rouge" v-html="frama.name"></h4></a>
              <p class="miniBlocSubTitle" v-bind:class="frama.icon" v-html="frama.title"></p>
              <p class="miniBlocTexte" v-html="frama.desc"></p>
            </div>
          </div>
        </div>
      </div>

      <InterNavFoot/>

    </div>

    <div class="container ombre" id="topPgCloud">
      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename violet"><a href="#topPgCloud" class="vert">
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

          <div class="col-md-3 miniBloc" v-for="(frama, index) in $t('msg.cat.cloud.sites')" v-bind:id="'f-' + index">
            <a :href="frama.link"><h4 class="vert" v-html="frama.name"></h4></a>
            <p class="miniBlocSubTitle" v-bind:class="frama.icon" v-html="frama.title"></p>
            <p class="miniBlocTexte" v-html="frama.desc"></p>
          </div>

          <div class="hidden">
            <div class="col-md-6 miniBloc" id="stallmanoramix">
              <a href="https://degooglisons-internet.org">
                <img :src="img.stallmanoramix" alt="" class="img-responsive"/>
              </a>
            </div>
            <div class="col-md-6 miniBloc" id="village">
              <a href="https://degooglisons-internet.org">
                <img :src="img.village" alt="" class="img-responsive"/>
              </a>
            </div>
            <div class="col-md-6 miniBloc" id="fight">
              <a href="https://degooglisons-internet.org">
                <img :src="img.fight" alt="" class="img-responsive"/>
              </a>
            </div>
            <div class="col-md-3 miniBloc" id="carte">
              <a href="https://degooglisons-internet.org">
                <img :src="img.carte_petite" alt="" class="img-responsive"/>
              </a>
            </div>
          </div>
        </div>
      </div>

      <InterNavFoot/>

    </div>

    <div class="container ombre" id="topPgVrac">

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
            <a href="" ><img :src="img.gege" :alt="$t('msg.pages.vrac.une.desc')" /></a>
          </figure>
          <p class="legende">{{ $t('msg.pages.vrac.une.desc') }}</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 miniBloc" v-for="(frama, index) in $t('msg.cat.vrac.sites')" v-bind:id="'f-' + index">
          <a :href="frama.link"><h4 class="jaune" v-html="frama.name"></h4></a>
          <p class="miniBlocSubTitle" v-bind:class="frama.icon" v-html="frama.title"></p>
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
export default {
  name: 'home',
  components: {
    Header,
    InterNavHead,
    InterNavFoot,
    Carousel,
    Search
  },
  data() {
    const { lang } = document.getElementsByTagName('html')[0];
    const base = (window.location.href.split('/')[3] !== lang) ? `/${window.location.href.split('/')[3]}` : '';
    return {
      img: {
        pinchot: `${base}/img/pingouinVolantRefait.png`,
        team1: `${base}/img/framateam1.jpg`,
        team2: `${base}/img/framateam2.jpg`,
        musee: `${base}/img/musee-windows_ll-de-mars_licence-art-libre.jpg`,
        briques: `${base}/img/quelques-briques_licence-art-libre.jpg`,
        stallmanoramix: `${base}/img/stallmanoramix.png`,
        village: `${base}/img/village.png`,
        fight: `${base}/img/fight.png`,
        carte_petite: `${base}/img/carte_petite.png`,
        gege: `${base}/img/GeGeGenerator.jpg`,
      }
    }
  }
}

$(document).ready(() => {
  $('#f-bee, #f-my').addClass('col-md-6').removeClass('col-md-3');
  $('#f-bee').before($('#stallmanoramix'));
  $('#f-bag').before($('#village'));
  $('#f-drop').before($('#carte'));
  $('#f-site').before($('#fight'));
  $(`#f-forms, #f-mindmap, #stallmanoramix, #f-sphere, #f-talk,
    #village, #f-drop, #f-drive, #fight`).css('clear', 'both');
});
</script>
