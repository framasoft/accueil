<template>
  <div id="carousel">
    <carousel :indicators="false" :controls="true" :interval="interval" ref="carousel">
      <slide
        v-for="(slide, index) in slides"
        :key="index">
        <a :href="slide.link" >
          <img :src="slide.img" />
        </a>
        <div class="carousel-caption">
          <h4>{{ slide.title }}</h4>
        </div>
      </slide>
    </carousel>
    <p class="text-center play-pause" v-if="interval === 5000">
      <button class="carousel-control" :title="$t('msg.carousel.pause')"
        @click="interval=0">
        <i class="glyphicon glyphicon-pause" aria-hidden="true"></i>
        <span class="sr-only">{{ $t('msg.carousel.pause') }}</span>
      </button>
    </p>
    <p class="text-center play-pause" v-else>
      <button class="carousel-control" :title="$t('msg.carousel.play')"
        @click="interval=5000">
        <i class="glyphicon glyphicon-play" aria-hidden="true"></i>
        <span class="sr-only">{{ $t('msg.carousel.play') }}</span>
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
    this.loadSlides();
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
