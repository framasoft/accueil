<template>
      <section id="dio" class="clearfix">
      <div class="container-fluid">
        <p class="btn-circle">
          <a href="#dio">
            <span class="fa-stack fa-4x vert" aria-hidden="true">
              <i class="fa fa-circle-thin fa-stack-2x"></i>
              <i class="fa fa-chevron-down fa-stack-1x"></i>
            </span>
          </a>
        </p>
        <div class="container">
          <h2 v-html="$t('home.dio.title')"></h2>
          <h3 v-html="$t('home.dio.subtitle', 0, {count: vcf.coverList.length })">
          </h3>
        </div>
        <div class="container ombre">
          <h4 class="text-center">
            <span class="neon" v-text="vcf.index + 1"></span>
            <br>
            <span v-text="vcf.coverList[vcf.index].title"></span>
          </h4>
          <p
            class="col-sm-6 col-sm-offset-3 fc_g3"
            v-html="$t(`cat.cloud.sites.${vcf.coverList[vcf.index].id}.desc`)">
          </p>
          <div class="col-sm-12 text-center">
            <carousel-3d
              @after-slide-change="onAfterSlideChange"
              :autoplay="true" :autoplay-timeout="5000"
              :controls-visible="true"
              dir="ltr" :height="350">
              <slide v-for="(slide, i) in vcf.coverList"
                :index="i"
                :key="i">
                <template slot-scope="{ index, isCurrent, leftIndex, rightIndex }">
                  <img :data-index="index"
                    :class="{ current: isCurrent, onLeft: (leftIndex >= 0), onRight: (rightIndex >= 0) }"
                    :src="slide.cover">
                </template>
              </slide>
            </carousel-3d>
          </div>
          <p class="col-sm-12 text-center">
            <a href="#soutenir" class="btn btn-lg btn-soutenir" v-html="$t('home.dio.btn')"></a>
          </p>
        </div>
        <p class="pfooter" v-html="$t('home.dio.footer')"></p>
      </div>
    </section>
</template>

<script>
import { Carousel3d, Slide } from 'vue-carousel-3d';

export default {
  components: {
    Carousel3d,
    Slide,
  },
  data() {
    return {
      vcf: {
        coverList: [
          {
            cover: `${this.$root['/']}img/screens/agenda.png`,
            title: this.$root.txt.agenda,
            id: 'agenda',
          },
          {
            cover: `${this.$root['/']}img/screens/pad.png`,
            title: this.$root.txt.pad,
            id: 'pad',
          },
          {
            cover: `${this.$root['/']}img/screens/date.png`,
            title: this.$root.txt.date,
            id: 'date',
          },
          {
            cover: `${this.$root['/']}img/screens/forms.png`,
            title: this.$root.txt.forms,
            id: 'forms',
          },
          {
            cover: `${this.$root['/']}img/screens/talk.png`,
            title: this.$root.txt.talk,
            id: 'talk',
          },
        ],
        index: 0,
      },
    }
  },
  mounted() {
    window.addEventListener('resize', this.coverflowSize);
  },
  methods: {
    onAfterSlideChange(index) {
      this.vcf.index = index;
    },
  },
}
</script>

