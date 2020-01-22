<template>
  <div
    v-if="slides.length > 0"
    class="carousel-container"
  >
    <carousel
      ref="carousel"
      :indicators="false"
      :controls="true"
      :interval="interval"
    >
      <slide
        v-for="(slide, index) in slides"
        :key="index"
      >
        <a :href="slide.link">
          <img
            :src="slide.img"
            alt=""
          />
          <div class="carousel-caption">
            <h4 v-text="slide.title"></h4>
          </div>
        </a>
      </slide>
    </carousel>
    <p
      v-if="interval === 5000"
      class="text-center play-pause"
    >
      <button
        class="carousel-control"
        :title="$t('carousel.pause')"
        @click="interval=0"
      >
        <icon
          name="pause"
          sr-only
          :label="$t('carousel.pause')"
        />
      </button>
    </p>
    <p
      v-else
      class="text-center play-pause"
    >
      <button
        class="carousel-control"
        :title="$t('carousel.play')"
        @click="interval=5000"
      >
        <icon
          name="play"
          sr-only
          :label="$t('carousel.play')"
        />
      </button>
    </p>
  </div>
</template>

<script>
export default {
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
      fetch('https://rss.framasoft.org/carousel/carousel.json')
        .then(response => response.json())
        .then((data) => { this.slides = data.slides; })
        .catch(err => console.error(err)); // eslint-disable-line
    },
  },
};
</script>
