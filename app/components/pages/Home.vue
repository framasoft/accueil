<template lang="html">
  <div id="home">
    <div class="container ombre" id="topPgAccueil">

      <Header/>

      <div class="row">
        <div class="col-md-8">
          <div class="row">
            <figure id="pingouinVolant" class="pull-right" >
              <img src="/img/pingouinVolantRefait.png" alt="" />
            </figure>

            <ul class="accroche" v-html="$t('message.pages.accroche')"></ul>
          </div>

          <div class="row" style="margin-top:40px; margin-bottom:20px">
            <div class="col-xs-10 col-xs-offset-1">
              <Search/>
            </div>
          </div>

          <div class="row containerActu">
            <h3 id="news">{{ $t('message.pages.news') }}</h3>

            <Carousel/>

            <h3>{{ $t('message.pages.medias.title') }}</h3>
            <p v-html="$t('message.pages.medias.intro')"></p>

            <div class="well">
              <table class="table">
                <thead>
                  <tr>
                    <th>{{ $t('message.pages.medias.th1') }}</th>
                    <th>{{ $t('message.pages.medias.th2') }}</th>
                    <th>{{ $t('message.pages.medias.th3') }}</th>
                  </tr>
                </thead>
                <tbody>
                  <tr v-for="(item, index) in $t('message.pages.medias.list')">
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
            <a href="#topPgLogiciels" class="bleu">{{ $t('message.cat.logiciel.title') }}</a>
          </h4>
          <div class="row">
            <ul class="listeFramaTrucs col-md-12">
              <li v-for="(frama, index) in $t('message.cat.logiciel.sites')">
                <span v-html="frama.what"></span> <a :href="frama.link" class="bleu">≻   <span v-html="frama.name"></span></a>
              </li>
            </ul>
          </div>
          <h4 class="titreFramaTrucs">
            <a href="#topPgCulture" class="rouge">{{ $t('message.cat.culture.title') }}</a>
          </h4>
          <div class="row">
            <ul class="listeFramaTrucs col-md-12">
              <li v-for="(frama, index) in $t('message.cat.culture.sites')">
                <span v-html="frama.what"></span> <a :href="frama.link" class="rouge">≻   <span v-html="frama.name"></span></a>
              </li>
            </ul>
          </div>
          <h4 class="titreFramaTrucs">
            <a href="#topPgCloud" class="vert">{{ $t('message.cat.cloud.title') }}</a>
          </h4>
          <div class="row">
            <ul class="listeFramaTrucs col-md-12">
              <li v-for="(frama, index) in $t('message.cat.cloud.sites')">
                <span v-html="frama.what"></span> <a :href="frama.link" class="vert">≻   <span v-html="frama.name"></span></a>
              </li>
            </ul>
          </div>
          <h4 class="titreFramaTrucs">
            <a href="#topPgVrac" class="jaune">{{ $t('message.cat.vrac.title') }}</a>
          </h4>
          <div class="row">
            <ul class="listeFramaTrucs col-md-12">
              <li v-for="(frama, index) in $t('message.cat.vrac.sites')">
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
            {{ $t('message.cat.communaute.title') }}
          </a></h1>
        </div>
        <div class="col-md-5">
          <p class="headerSubTitle">{{ $t('message.cat.communaute.desc') }}</p>
        </div>
        <div class="col-md-3">
          <InterNavHead/>
        </div>
      </div>

      <div class="row partenaires" id="contentCommunaute">
        <div class="col-md-4 blocCommunaute" >
          <img src="/img/framateam1.jpg" class="img-responsive" alt="" />
        </div>

        <div class="col-md-4 blocCommunaute">
          <h4 class="titreBloc">{{ $t('message.pages.communaute.title') }}</h4>
          <p class="miniBlocSubTitle">{{ $t('message.pages.communaute.desc ') }}</p>
          <p class="miniBlocTexte" v-html="$t('message.pages.communaute.text')"></p>
        </div>

        <div class="col-md-4 blocCommunaute">
          <h4 class="titreBloc">{{ $t('message.pages.asso.title') }}</h4>
          <p class="miniBlocSubTitle">{{ $t('message.pages.asso.desc') }}</p>
          <p class="miniBlocTexte" v-html="$t('message.pages.asso.text')"></p>
        </div>

        <div class="col-md-4 blocCommunaute">
          <h4 class="titreBloc">{{ $t('message.pages.participer.title') }}</h4>
          <p class="miniBlocSubTitle">{{ $t('message.pages.participer.desc') }}</p>
          <p class="miniBlocTexte" v-html="$t('message.pages.participer.text')"></p>
        </div>

        <div class="col-md-4 blocCommunaute">
          <h4 class="titreBloc">{{ $t('message.pages.soutenir.title') }}</h4>
          <p class="miniBlocSubTitle">{{ $t('message.pages.soutenir.desc') }}</p>
          <p class="miniBlocTexte" v-html="$t('message.pages.soutenir.text')"></p>
        </div>

        <div class="col-md-4 blocCommunaute">
          <img src="/img/framateam2.jpg" class="img-responsive" alt="" />
        </div>

        <div class="col-md-12 blocCommunaute partenaires">
          <h4 class="titreBloc">{{ $t('message.pages.partenaires.title') }}</h4>
          <p class="miniBlocTexte" v-html="$t('message.pages.partenaires.desc')"></p>
          <ul class="list-inline text-center" v-html="$t('message.pages.partenaires.text')"></ul>
        </div>
      </div>

      <InterNavFoot/>

    </div>

    <div class="container ombre" id="topPgLogiciels">
      <div class="clearfix header">
        <div class="col-md-4">
          <h1 class="sitename violet"><a href="#topPgLogiciels" class="bleu">
            {{ $t('message.cat.logiciel.title') }}
          </a></h1>
        </div>
        <div class="col-md-5">
          <p class="headerSubTitle">{{ $t('message.cat.logiciel.desc') }}</p>
        </div>
        <div class="col-md-3">
          <InterNavHead/>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8" id="presentationLogiciels">
          <h3 class="presentation">{{ $t('message.pages.logiciel.title') }}</h3>
          <p class="blocSubTitle" v-html="$t('message.pages.logiciel.desc')"></p>
          <p class="blocTexte" v-html="$t('message.pages.logiciel.text1')"></p>
          <p class="blocTexte" v-html="$t('message.pages.logiciel.text2')"></p>
        </div>

        <div class="col-md-4">
          <figure id="pingouinMuseeWindows">
            <img src="/img/musee-windows_ll-de-mars_licence-art-libre.jpg" alt="" />
          </figure>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 miniBloc" v-for="(frama, index) in $t('message.cat.logiciel.sites')">
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
            {{ $t('message.cat.culture.title') }}
          </a></h1>
        </div>
        <div class="col-md-5">
          <p class="headerSubTitle">{{ $t('message.cat.culture.desc') }}</p>
        </div>
        <div class="col-md-3">
          <InterNavHead/>
        </div>
      </div>

      <div class="row">
        <div class="col-md-6" id="presentationServices">
          <div class="row col-md-12" id="blocServices">
            <h3 class="presentation">{{ $t('message.pages.culture.title') }}</h3>
            <p class="blocSubTitle" v-html="$t('message.pages.culture.desc')"></p>
            <p class="blocTexte" v-html="$t('message.pages.culture.text1')"></p>
            <p class="blocTexte" v-html="$t('message.pages.culture.text2')"></p>
          </div>

          <div class="row col-md-12">
            <figure id="pingouinsQuelquesBriques">
              <img src="/img/quelques-briques_licence-art-libre.jpg" alt="" />
            </figure>
          </div>

          <div class="row col-md-12">
            <blockquote class="well">
              {{ $t('message.pages.culture.quote') }}
            </blockquote>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row">
            <div class="col-md-6 miniBloc2" v-for="(frama, index) in $t('message.cat.culture.sites')">
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
            {{ $t('message.cat.cloud.title') }}
          </a></h1>
        </div>
        <div class="col-md-5">
          <p class="headerSubTitle">{{ $t('message.cat.cloud.desc') }}</p>
        </div>
        <div class="col-md-3">
          <InterNavHead/>
        </div>
      </div>

      <div class="row">
        <div id="presentationLibre">
          <div class="col-md-6">
            <h3 class="presentation">{{ $t('message.pages.cloud.title') }}</h3>
            <p class="blocSubTitle" v-html="$t('message.pages.cloud.desc')"></p>
            <p class="blocTexte" v-html="$t('message.pages.cloud.text1')"></p>
            <p class="blocTexte" v-html="$t('message.pages.cloud.text2')"></p>
          </div>

          <div class="col-md-3 miniBloc" v-for="(frama, index) in $t('message.cat.cloud.sites')" v-bind:id="'f-' + index">
            <a :href="frama.link"><h4 class="vert" v-html="frama.name"></h4></a>
            <p class="miniBlocSubTitle" v-bind:class="frama.icon" v-html="frama.title"></p>
            <p class="miniBlocTexte" v-html="frama.desc"></p>
          </div>

          <div class="hidden">
            <div class="col-md-6 miniBloc" id="stallmanoramix">
              <a href="https://degooglisons-internet.org">
                <img src="/img/stallmanoramix.png" alt="" class="img-responsive"/>
              </a>
            </div>
            <div class="col-md-6 miniBloc" id="village">
              <a href="https://degooglisons-internet.org">
                <img src="/img/village.png" alt="" class="img-responsive"/>
              </a>
            </div>
            <div class="col-md-6 miniBloc" id="fight">
              <a href="https://degooglisons-internet.org">
                <img src="/img/fight.png" alt="" class="img-responsive"/>
              </a>
            </div>
            <div class="col-md-3 miniBloc" id="carte">
              <a href="https://degooglisons-internet.org">
                <img src="/img/carte_petite.png" alt="" class="img-responsive"/>
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
            {{ $t('message.cat.cloud.title') }}
          </a></h1>
        </div>
        <div class="col-md-5">
          <p class="headerSubTitle">{{ $t('message.cat.vrac.desc') }}</p>
        </div>
        <div class="col-md-3">
          <InterNavHead/>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8" id="presentationLibrenVrac">
          <h3 class="presentation">{{ $t('message.pages.vrac.title') }}</h3>
            <p class="blocSubTitle" v-html="$t('message.pages.vrac.desc')"></p>
            <p class="blocTexte" v-html="$t('message.pages.vrac.text')"></p>
        </div>

        <div class="col-md-4" id="AlaUne">
          <h4 class="titreBloc">{{ $t('message.pages.vrac.une.title') }}</h4>
          <p class="miniBlocSubTitle">{{ $t('message.pages.vrac.une.desc') }}</p>
          <figure id="GeGeGenerator">
            <a href="" ><img src="/img/GeGeGenerator.jpg" :alt="$t('message.pages.vrac.une.desc')" /></a>
          </figure>
          <p class="legende">{{ $t('message.pages.vrac.une.desc') }}</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-4 miniBloc" v-for="(frama, index) in $t('message.cat.vrac.sites')" v-bind:id="'f-' + index">
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
