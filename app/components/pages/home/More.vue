<template>
  <section id="more" class="clearfix">
      <div class="container-fluid">
        <div class="container">
          <h2 class="col-xs-12 text-left" v-html="$t('home.more.title')"></h2>
          <div class="col-sm-3 text-center">
            <span class="fa-stack fa-4x bleu" aria-hidden="true">
              <i class="fa fa-circle-thin fa-stack-2x"></i>
              <i class="fa fa-linux fa-stack-1x"></i>
            </span>
            <h3 class="h3 text-left"  v-html="$t('home.more.libre.title')"></h3>
            <p class="text-left" v-html="$t('home.more.libre.text')"></p>
          </div>
          <div class="col-sm-3 text-center">
            <span class="fa-stack fa-4x rouge" aria-hidden="true">
              <i class="fa fa-circle-thin fa-stack-2x"></i>
              <i class="fa fa-book fa-stack-1x"></i>
            </span>
            <h3 class="h3 text-left" v-html="$t('home.more.book.title')"></h3>
            <p class="text-left" v-html="$t('home.more.book.text')"></p>
          </div>
          <div class="col-sm-3 text-center">
            <span class="fa-stack fa-4x violet" aria-hidden="true">
              <i class="fa fa-circle-thin fa-stack-2x"></i>
              <i class="fa fa-pencil fa-stack-1x"></i>
            </span>
            <h3 class="h3 text-left" v-html="$t('home.more.blog.title')"></h3>
            <p class="text-left" v-html="$t('home.more.blog.text')"></p>
          </div>
          <div class="col-sm-3 text-center">
            <span class="fa-stack fa-4x orange" aria-hidden="true">
              <i class="fa fa-circle-thin fa-stack-2x"></i>
              <i class="fa fa-group fa-stack-1x"></i>
            </span>
            <h3 class="h3 text-left" v-html="$t('home.more.confs.title')"></h3>
            <p class="text-left" v-html="$t('home.more.confs.text')"></p>
          </div>
        </div>
        <p class="pfooter">
          <span  v-html="$t('home.more.footer')"></span>
          <router-link :to="`/${$t('lang')}/full`" v-html="$t('home.more.link')"></router-link>
        </p>
      </div>
    </section>
</template>
