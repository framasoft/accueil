<template>
  <section id="cuo">
    <div class="container-fluid">
      <div class="container">
        <h2 v-html="$t('home.cuo.title')"></h2>
        <h3 v-html="$t('home.cuo.subtitle')"></h3>
      </div>
      <div class="container ombre">
        <b-row>
          <b-col lg="4">
            <h4
              class="badge badge-warning"
              v-html="$t('home.cuo.peertube.title')"
            ></h4>
            <button
              class="bigbubble"
              :style="`background: url(${$t('/')}img/services-peertube.jpg);`"
            >
              <p v-html="$t('home.cuo.peertube.text')"></p>
            </button>
            <a
              href="#!"
              class="close"
              aria-hidden="true"
              v-text="'×'"
            ></a>
          </b-col>
          <b-col lg="4">
            <h4
              class="badge badge-primary"
              v-html="$t('home.cuo.mobilizon.title')"
            ></h4>
            <button
              class="bigbubble"
              :style="`background: url(${$t('/')}img/services-mobilizon.jpg);`"
            >
              <p v-html="$t('home.cuo.mobilizon.text')"></p>
            </button>
            <a
              href="#!"
              class="close"
              aria-hidden="true"
              v-text="'×'"
            ></a>
          </b-col>
          <b-col lg="4">
            <h4
              class="badge badge-info"
              v-html="$t('home.cuo.cloud.title')"
            ></h4>
            <button
              class="bigbubble"
              :style="`background: url(${$t('/')}img/services-cloud.jpg);`"
            >
              <p v-html="$t('home.cuo.cloud.text')"></p>
            </button>
            <a
              href="#!"
              class="close"
              aria-hidden="true"
              v-text="'×'"
            ></a>
          </b-col>
        </b-row>
        <p class="col-sm-12 text-center">
          <a
            href="#soutenir"
            class="btn btn-lg btn-soutenir"
            v-html="$t('home.cuo.btn')"
          ></a>
        </p>
      </div>
      <p
        class="pfooter"
        v-html="$t('home.cuo.footer')"
      ></p>
    </div>
  </section>
</template>
