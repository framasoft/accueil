<template lang="html">
  <div id="carousel-actus" class="carousel slide">
    <div class="carousel-inner">
      <div :class="(index === 0) ? 'item active' : 'item'" v-for="(slide, index) in slides" :key="index">
        <a :href="slide.link"><img :src="slide.img" alt="" />
          <div class="carousel-caption">
            <p class="h4">{{slide.title}}</p>
          </div>
        </a>
      </div>
    </div>
    <!-- Controls -->
    <p class="text-center" id="play-pause" v-if="playPause === 'pause'">
      <button class="carousel-control" :title="$t('msg.carousel.pause')"
        @click="togglePlayPause(); return false;">
        <i class="glyphicon glyphicon-pause"></i>
        <span class="sr-only">{{ $t('msg.carousel.pause') }}</span>
      </button>
    </p>
    <p class="text-center" id="play-pause" v-else>
      <button class="carousel-control" :title="$t('msg.carousel.play')"
        @click="togglePlayPause(); return false;">
        <i class="glyphicon glyphicon-play"></i>
        <span class="sr-only">{{ $t('msg.carousel.play') }}</span>
      </button>
    </p>
    <a class="left carousel-control" href="#carousel-actus" role="button" data-slide="prev"
      :title="$t('msg.carousel.prev')">
        <i class="glyphicon glyphicon-chevron-left"></i>
        <span class="sr-only">{{ $t('msg.carousel.prev') }}</span>
    </a>
    <a class="right carousel-control" href="#carousel-actus" role="button" data-slide="next"
      :title="$t('msg.carousel.next')">
        <i class="glyphicon glyphicon-chevron-right"></i>
        <span class="sr-only">{{ $t('msg.carousel.next') }}</span>
    </a>
  </div>
</template>

<script>
export default {
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
      ]
    }
  },
  mounted() {
    this.loadSlides();
  },
  methods: {
    togglePlayPause () {
      if (this.playPause === 'play') {
        $(document).ready(() => {
          $('#carousel-actus').carousel('cycle');
        });
        this.playPause = 'pause';
      } else {
        $(document).ready(() => {
          $('#carousel-actus').carousel('pause');
        });
        this.playPause = 'play';
      }
      return this.playPause
    },
    loadSlides() {
      fetch('https://rss.framasoft.org/carousel/carousel.json').then(response => response.json()).then((data) => {
        this.slides = data.slides;
      }).catch((err) => {
        console.error(err); // eslint-disable-line
      });
    },
  }
}
$(document).ready(() => {
  $('#carousel-actus').carousel();
});
</script>
