<template>
  <section
    id="more"
    class="clearfix"
  >
    <div class="container-fluid">
      <div class="container">
        <h2
          class="col-xs-12 text-left"
          v-html="$t('home.more.title')"
        ></h2>
        <div class="col-sm-3 text-center">
          <icon
            name="linux"
            name2="circle-thin"
            size="4x bleu"
          />
          <h3
            class="h3 text-left"
            v-html="$t('home.more.libre.title')"
          ></h3>
          <p
            class="text-left"
            v-html="$t('home.more.libre.text')"
          ></p>
        </div>
        <div class="col-sm-3 text-center">
          <icon
            name="book"
            name2="circle-thin"
            size="4x rouge"
          />
          <h3
            class="h3 text-left"
            v-html="$t('home.more.book.title')"
          ></h3>
          <p
            class="text-left"
            v-html="$t('home.more.book.text')"
          ></p>
        </div>
        <div class="col-sm-3 text-center">
          <icon
            name="pencil"
            name2="circle-thin"
            size="4x violet"
          />
          <h3
            class="h3 text-left"
            v-html="$t('home.more.blog.title')"
          ></h3>
          <p
            class="text-left"
            v-html="$t('home.more.blog.text')"
          ></p>
        </div>
        <div class="col-sm-3 text-center">
          <icon
            name="group"
            name2="circle-thin"
            size="4x orange"
          />
          <h3
            class="h3 text-left"
            v-html="$t('home.more.confs.title')"
          ></h3>
          <p
            class="text-left"
            v-html="$t('home.more.confs.text')"
          ></p>
        </div>
      </div>
      <p class="pfooter">
        <span v-html="$t('home.more.footer')"></span>
        <router-link
          :to="`/${$t('lang')}/full`"
          v-html="$t('home.more.link')"
        />
      </p>
    </div>
  </section>
</template>
