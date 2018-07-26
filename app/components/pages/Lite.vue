<template>
  <div id="lite">
    <div class="container ombre" id="topPgAccueil">

      <Header/>

      <div class="row">
        <div class="col-xs-12">
          <hr class="trait"/>
        </div>
      </div>

      <div class="row" style="margin-top:40px; margin-bottom:20px">
        <div class="col-xs-12">
          <Search/>
        </div>
      </div>

      <div class="row lite vert">
        <h3 class="titreFramaTrucs vert">{{ $t('cat.cloud.title') }}</h3>
        <ul class="list-inline">
          <li class="col-xs-4 col-sm-3 text-center"
            v-for="(frama, index) in $t('cat.cloud.sites')">
            <a :href="$t('data.cat.cloud.sites.' + index + '.link')" class="btn btn-lg btn-block btn-default"
              :title="frama.title" >
              <i :class="`fa fa-3x fa-fw ${$t('data.cat.cloud.sites.' + index + '.icon')}`"></i>
              <br/>
              <span v-html="$t('data.cat.cloud.sites.' + index + '.name')"></span>
            </a>
          </li>
        </ul>
      </div>
      <div class="row lite bleu">
        <h3 class="titreFramaTrucs bleu">{{ $t('cat.logiciel.title') }}</h3>
        <ul class="list-inline">
          <li class="col-xs-4 col-sm-3 text-center"
            v-for="(frama, index) in $t('cat.logiciel.sites')">
            <a :href="$t('data.cat.logiciel.sites.' + index + '.link')" class="btn btn-lg btn-block btn-default"
              :title="frama.title" >
              <i :class="`fa fa-3x fa-fw ${$t('data.cat.logiciel.sites.' + index + '.icon')}`"></i>
              <br/>
              <span v-html="$t('data.cat.logiciel.sites.' + index + '.name')"></span>
            </a>
          </li>
        </ul>
      </div>
      <div class="row lite rouge">
        <h3 class="titreFramaTrucs rouge">{{ $t('cat.culture.title') }}</h3>
        <ul class="list-inline">
          <li class="col-xs-4 col-sm-3 text-center"
            v-for="(frama, index) in $t('cat.culture.sites')">
            <a :href="$t('data.cat.culture.sites.' + index + '.link')" class="btn btn-lg btn-block btn-default"
              :title="frama.title" >
              <i :class="`fa fa-3x fa-fw ${$t('data.cat.culture.sites.' + index + '.icon')}`"></i>
              <br/>
              <span v-html="$t('data.cat.culture.sites.' + index + '.name')"></span>
            </a>
          </li>
        </ul>
      </div>
      <div class="row lite jaune">
        <h3 class="titreFramaTrucs jaune">{{ $t('cat.vrac.title') }}</h3>
        <ul class="list-inline">
          <li class="col-xs-4 col-sm-3 text-center"
            v-for="(frama, index) in $t('cat.vrac.sites')">
            <a :href="$t('data.cat.vrac.sites.' + index + '.link')" class="btn btn-lg btn-block btn-default"
              :title="frama.title" >
              <i :class="`fa fa-3x fa-fw ${$t('data.cat.vrac.sites.' + index + '.icon')}`"></i>
              <br/>
              <span v-html="$t('data.cat.vrac.sites.' + index + '.name')"></span>
            </a>
          </li>
        </ul>
      </div>

      <hr class="trait" role="presentation" style="margin-left:-15px; margin-right:-15px">

      <div class="row">
        <div class="col-xs-12 containerActu">
          <h3 id="news">{{ $t('pages.news') }}</h3>
          <Carousel/>
        </div>
      </div>

    </div>
  </div>
</template>

<script>
import Header from '../partials/Header.vue'
import Carousel from '../partials/Carousel.vue'
import Search from '../partials/Search.vue'

export default {
  name: 'lite',
  components: {
    Header,
    Carousel,
    Search,
  }
}
</script>
