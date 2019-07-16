<template>
  <section id="cuo" class="clearfix">
    <div class="container-fluid">
      <div class="container">
        <h2 v-html="$t('home.cuo.title')"></h2>
        <h3 v-html="$t('home.cuo.subtitle')"></h3>
      </div>
      <div class="container ombre">
        <div class="col-md-4">
          <h4 class="label label-success" v-html="$t('home.cuo.meet.title')"></h4>
          <button class="bigbubble"
            :style="`background: url(${$root['/']}img/services-framameet.jpg);`">
            <p v-html="$t('home.cuo.meet.text')"></p>
          </button>
          <a href="#!" class="close" aria-hidden="true">
            &times;
          </a>
        </div>
        <div class="col-md-4">
          <h4 class="label label-primary" v-html="$t('home.cuo.petitions.title')"></h4>
          <button class="bigbubble"
            :style="`background: url(${$root['/']}img/services-framapetitions.jpg);`">
            <p v-html="$t('home.cuo.petitions.text')"></p>
          </button>
          <a href="#!" class="close" aria-hidden="true">
            &times;
          </a>
        </div>
        <div class="col-md-4">
          <h4 class="label label-info" v-html="$t('home.cuo.mooc.title')"></h4>
          <button class="bigbubble"
            :style="`background: url(${$root['/']}img/educ-pop-mooc-chatons.jpg);`">
            <p v-html="$t('home.cuo.mooc.text')"></p>
          </button>
          <a href="#!" class="close" aria-hidden="true">
            &times;
          </a>
        </div>
        <p class="col-sm-12 text-center">
          <a href="#soutenir" class="btn btn-lg btn-soutenir" v-html="$t('home.cuo.btn')"></a>
        </p>
      </div>
      <p class="pfooter" v-html="$t('home.cuo.footer')"></p>
    </div>
  </section>
</template>