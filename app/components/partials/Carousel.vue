<template lang="html">
  <div id="carousel-actus" class="carousel slide">
    <div class="carousel-inner">
      <div class="item active">
        <a href="#"><img src="img/slide-degooglisons-internet.png" alt="" />
          <div class="carousel-caption">
            <p>…</p>
          </div>
        </a>
      </div>
    </div>
    <!-- Controls -->
    <p class="text-center" id="play-pause">
      <a href="#play-pause" class="carousel-control" :title="$t('message.carousel.pause')">
        <i class="glyphicon glyphicon-pause"></i>
        <span class="sr-only">{{ $t('message.carousel.pause') }}</span>
      </a>
    </p>
    <a class="left carousel-control" href="#carousel-actus" role="button" data-slide="prev"
      :title="$t('message.carousel.prev')">
        <i class="glyphicon glyphicon-chevron-left"></i>
        <span class="sr-only">{{ $t('message.carousel.prev') }}</span>
    </a>
    <a class="right carousel-control" href="#carousel-actus" role="button" data-slide="next"
      :title="$t('message.carousel.next')">
        <i class="glyphicon glyphicon-chevron-right"></i>
        <span class="sr-only">{{ $t('message.carousel.next') }}</span>
    </a>
  </div>
</template>

<script>
$(document).ready(() => {
  $('#carousel-actus').carousel();
  $('#play-pause a').on('click', function playPause() {
    if ($(this).children('.glyphicon').hasClass('glyphicon-pause')) {
      $(this).children('.glyphicon').addClass('glyphicon-play').removeClass('glyphicon-pause');
      $(this).attr('title', 'Lecture');
      $(this).children('.sr-only').text('Lecture');
      $('#carousel-actus').carousel('pause');
    } else {
      $(this).children('.glyphicon').addClass('glyphicon-pause').removeClass('glyphicon-play');
      $(this).attr('title', 'Pause');
      $(this).children('.sr-only').text('Pause');
      $('#carousel-actus').carousel('cycle');
    }
    return false;
  });
});
</script>
