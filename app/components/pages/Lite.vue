<template lang="html">
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
        <h3 class="titreFramaTrucs vert">{{ $t('msg.cat.cloud.title') }}</h3>
        <ul class="list-inline">
          <li class="col-xs-4 col-sm-3 text-center"
            v-for="(frama, index) in $t('msg.cat.cloud.sites')">
            <a :href="frama.link" class="btn btn-lg btn-block btn-default"
              :title="frama.title" >
              <i :class="`fa fa-3x fa-fw ${frama.icon}`"></i>
              <br/><span v-html="frama.name"></span>
            </a>
          </li>
        </ul>
      </div>
      <div class="row lite bleu">
        <h3 class="titreFramaTrucs bleu">{{ $t('msg.cat.logiciel.title') }}</h3>
        <ul class="list-inline">
          <li class="col-xs-4 col-sm-3 text-center"
            v-for="(frama, index) in $t('msg.cat.logiciel.sites')">
            <a :href="frama.link" class="btn btn-lg btn-block btn-default"
              :title="frama.title" >
              <i :class="('fa fa-3x fa-fw ' + frama.icon )"></i>
              <br/><span v-html="frama.name"></span>
            </a>
          </li>
        </ul>
      </div>
      <div class="row lite rouge">
        <h3 class="titreFramaTrucs rouge">{{ $t('msg.cat.culture.title') }}</h3>
        <ul class="list-inline">
          <li class="col-xs-4 col-sm-3 text-center"
            v-for="(frama, index) in $t('msg.cat.culture.sites')">
            <a :href="frama.link" class="btn btn-lg btn-block btn-default"
              :title="frama.title" >
              <i :class="('fa fa-3x fa-fw ' + frama.icon )"></i>
              <br/><span v-html="frama.name"></span>
            </a>
          </li>
        </ul>
      </div>
      <div class="row lite jaune">
        <h3 class="titreFramaTrucs jaune">{{ $t('msg.cat.vrac.title') }}</h3>
        <ul class="list-inline">
          <li class="col-xs-4 col-sm-3 text-center"
            v-for="(frama, index) in $t('msg.cat.vrac.sites')">
            <a :href="frama.link" class="btn btn-lg btn-block btn-default"
              :title="frama.title" >
              <i :class="('fa fa-3x fa-fw ' + frama.icon )"></i>
              <br/><span v-html="frama.name"></span>
            </a>
          </li>
        </ul>
      </div>

      <hr class="trait" role="presentation" style="margin-left:-15px; margin-right:-15px">

      <div class="row">
        <div class="col-xs-12">
          <h3 id="news">{{ $t('msg.pages.news') }}</h3>
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
