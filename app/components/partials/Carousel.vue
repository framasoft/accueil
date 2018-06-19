<template lang="html">
  <carousel
    ref="carousel"
    :indicators="false"
  >
    <slide
      v-for="(slide, index) in slides"
      :key="index">
      <a
        :href="slide.src"
      >
        <img :src="slide.img" />
      </a>
      <div class="carousel-caption">
        <h4>{{ slide.title }}</h4>
      </div>
    </slide>
  </carousel>
</template>

<script>
import { Carousel, Slide } from 'uiv';

export default {
  components: {
    Carousel, Slide,
  },
  data() {
    const { lang } = document.getElementsByTagName('html')[0];
    const base = (window.location.href.split('/')[3] !== lang) ? `/${window.location.href.split('/')[3]}` : '';
    return {
      playPause: 'pause',
      // Slides are loaded from https://rss.framasoft.org/carousel/carousel.json
      slides: [
        {
          link: 'https://…',
          title: '…',
          img: `${base}/img/…`,
        },
      ],
    };
  },
  created() {
    this.loadSlides();
  },
  methods: {
    /**
     * Le composant Carousel de uiv ne permet pas *facilement* d'intégrer le bouton play/pause
     */
    // togglePlayPause() {
    //   if (this.playPause === 'play') {
    //     $(document).ready(() => {
    //       $('#carousel-actus').carousel('cycle');
    //     });
    //     this.playPause = 'pause';
    //   } else {
    //     $(document).ready(() => {
    //       $('#carousel-actus').carousel('pause');
    //     });
    //     this.playPause = 'play';
    //   }
    //   return this.playPause;
    // },
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
