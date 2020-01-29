<template>
  <section id="dio">
    <div class="container-fluid">
      <p class="btn-circle">
        <a href="#dio">
          <icon
            name="chevron-down"
            name2="circle-thin"
            size="4x vert"
          />
        </a>
      </p>
      <div class="container">
        <h2 v-html="$t('home.dio.title')"></h2>
        <h3 v-html="$t('home.dio.subtitle', 0, {count: vcf.coverList.length })">
        </h3>
      </div>
      <b-container class="ombre">
        <h4 class="text-center">
          <span
            class="neon"
            v-text="vcf.index + 1"
          ></span>
          <br />
          <span v-text="vcf.coverList[vcf.index].title"></span>
        </h4>
        <p
          class="col-sm-6 mx-auto fc_g3"
          v-html="$t(`cat.cloud.sites.${vcf.coverList[vcf.index].id}.desc`)"
        ></p>
        <div class="text-center">
          <carousel-3d
            :autoplay="true"
            :autoplay-timeout="8000"
            :controls-visible="true"
            dir="ltr"
            :height="350"
            @after-slide-change="onAfterSlideChange"
          >
            <slide
              v-for="(slide, i) in vcf.coverList"
              :key="i"
              :index="i"
            >
              <template slot-scope="{ index, isCurrent, leftIndex, rightIndex }">
                <img
                  :data-index="index"
                  :class="{
                    current: isCurrent,
                    onLeft: (leftIndex >= 0),
                    onRight: (rightIndex >= 0)
                  }"
                  :src="slide.cover"
                  alt=""
                />
              </template>
            </slide>
          </carousel-3d>
        </div>
        <p class="text-center">
          <b-button
            href="#soutenir"
            size="lg"
            variant="soutenir"
            v-html="$t('home.dio.btn')"
          />
        </p>
      </b-container>
      <p
        class="pfooter"
        v-html="$t('home.dio.footer')"
      ></p>
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
            cover: `${this.$t('/')}img/screens/agenda.png`,
            title: this.$t('txt.agenda'),
            id: 'agenda',
          },
          {
            cover: `${this.$t('/')}img/screens/pad.png`,
            title: this.$t('txt.pad'),
            id: 'pad',
          },
          {
            cover: `${this.$t('/')}img/screens/date.png`,
            title: this.$t('txt.date'),
            id: 'date',
          },
          {
            cover: `${this.$t('/')}img/screens/forms.png`,
            title: this.$t('txt.forms'),
            id: 'forms',
          },
          {
            cover: `${this.$t('/')}img/screens/talk.png`,
            title: this.$t('txt.talk'),
            id: 'talk',
          },
        ],
        index: 0,
      },
    };
  },
  mounted() {
    window.addEventListener('resize', this.coverflowSize);
  },
  methods: {
    onAfterSlideChange(index) {
      this.vcf.index = index;
    },
  },
};
</script>
