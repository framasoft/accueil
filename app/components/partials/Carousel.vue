<template>
  <div v-if="slides.length > 0" class="carousel-container">
    <carousel ref="carousel" :indicators="false" :controls="true" :interval="interval">
      <slide
        v-for="(slide, index) in slides"
        :key="index">
        <a :href="slide.link">
          <img :src="slide.img" alt=""/>
          <div class="carousel-caption">
            <h4>{{ slide.title }}</h4>
          </div>
        </a>
      </slide>
    </carousel>
    <p v-if="interval === 5000" class="text-center play-pause">
      <button
        class="carousel-control"
        :title="$t('carousel.pause')"
        @click="interval=0">
        <i class="fa fa-fw fa-pause" aria-hidden="true"></i>
        <span class="sr-only" v-html="$t('carousel.pause')"></span>
      </button>
    </p>
    <p class="text-center play-pause" v-else>
      <button
        class="carousel-control"
        :title="$t('carousel.play')"
        @click="interval=5000">
        <i class="fa fa-fw fa-play" aria-hidden="true"></i>
        <span class="sr-only" v-html="$t('carousel.play')"></span>
      </button>
    </p>
  </div>
</template>

<script>
import { Carousel, Slide } from 'uiv';

export default {
  components: {
    Carousel, Slide,
  },
  data() {
    return {
      interval: 5000,
      // Slides are loaded from https://rss.framasoft.org/carousel/carousel.json
      slides: [],
    };
  },
  created() {
    if (!window.vuefsPrerender) {
      this.loadSlides();
    }
  },
  methods: {
    loadSlides() {
      fetch('https://rss.framasoft.org/carousel/carousel.json').then(response => response.json()).then((data) => {
        this.slides = data.slides;
      }).catch((err) => {
        console.error(err); // eslint-disable-line
      });
    },
  },
};
</script>
