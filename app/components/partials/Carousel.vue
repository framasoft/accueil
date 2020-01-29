<template>
  <div
    v-if="slides.length > 0"
    id="f-carousel"
    class="carousel-container"
  >
    <b-carousel
      ref="carousel"
      fade
      indicators
      :controls="true"
      :interval="interval"
      :label-prev="$t('carousel.prev')"
      :label-next="$t('carousel.next')"
      class="mx-0 my-4"
    >
      <a
        v-for="(slide, index) in slides"
        :key="index"
        :href="slide.link"
      >
        <b-carousel-slide
          :caption="slide.title"
          caption-tag="h4"
          :img-src="slide.img"
        />
      </a>
    </b-carousel>
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

<style>
#f-carousel .carousel img {
  margin: 0;
}

#f-carousel .play-pause {
  left: initial;
  margin-top: -121px;
}

#f-carousel .play-pause button {
  padding: 0;
}

#f-carousel h4 {
  border: none;
}
</style>
