<template>
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

    <div
      v-for="category in ['cloud', 'logiciel', 'culture', 'vrac']"
      :class="`row lite ${$root.cat[category].color}`">
      <h3 class="titreFramaTrucs ${$root.cat[category].color}`" v-html="$t('cat.'+ category +'.title')"></h3>
      <ul class="list-inline">
        <li class="col-xs-4 col-sm-3 text-center"
          v-for="frama in $root.cat[category].sites">
          <a :href="$root.link[frama]" class="btn btn-lg btn-block btn-default"
            :title="$t('cat.'+ category +'.sites.' + frama + '.title')" >
            <i :class="`fa fa-3x fa-fw ${$root.icon[frama]}`"></i>
            <br>
            <span v-html="$root.color[frama]"></span>
          </a>
        </li>
      </ul>
    </div>

    <hr class="trait" role="presentation" style="margin-left:-15px; margin-right:-15px">

    <div class="row">
      <div class="col-xs-12 containerActu">
        <h3 id="news" v-html="$t('pages.news')"></h3>
        <Carousel/>
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
