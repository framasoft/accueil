<template>
  <section id="more">
    <div class="container-fluid">
      <div class="container">
        <h2
          class="text-left"
          v-html="$t('home.more.title')"
        ></h2>
        <b-row>
          <b-col md="3">
            <icon
              name="linux"
              name2="circle-thin"
              size="4x bleu d-block mx-auto"
            />
            <h3 v-html="$t('home.more.libre.title')"></h3>
            <p v-html="$t('home.more.libre.text')"></p>
          </b-col>
          <b-col md="3">
            <icon
              name="book"
              name2="circle-thin"
              size="4x rouge d-block mx-auto"
            />
            <h3 v-html="$t('home.more.book.title')"></h3>
            <p v-html="$t('home.more.book.text')"></p>
          </b-col>
          <b-col md="3">
            <icon
              name="pencil"
              name2="circle-thin"
              size="4x violet d-block mx-auto"
            />
            <h3 v-html="$t('home.more.blog.title')"></h3>
            <p v-html="$t('home.more.blog.text')"></p>
          </b-col>
          <b-col md="3">
            <icon
              name="group"
              name2="circle-thin"
              size="4x orange d-block mx-auto"
            />
            <h3 v-html="$t('home.more.confs.title')"></h3>
            <p v-html="$t('home.more.confs.text')"></p>
          </b-col>
        </b-row>
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
