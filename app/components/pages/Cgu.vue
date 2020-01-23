<template>
  <div class="container ombre">
    <header class="clearfix header">
      <h1
        class="pull-left"
        v-html="$t('cgu.title')"
      ></h1>
      <I18n />
    </header>
    <main>
      <div v-html="$t('cgu.intro')"></div>

      <p><b v-html="$t('cgu.short.sympa.text')"></b></p>
      <ul class="list-group mb-4">
        <li
          v-for="index in Object.keys($t('cgu.short.sympa.list'))"
          :key="index"
          class="list-group-item list-group-item-success"
          v-html="$t(`cgu.short.sympa.list[${index}]`)"
        ></li>
      </ul>

      <p v-html="$t('cgu.short.terms.text')"></p>
      <ul class="list-group mb-4">
        <li
          v-for="index in Object.keys($t('cgu.short.terms.list'))"
          :key="index"
          class="list-group-item list-group-item-warning"
          v-html="$t(`cgu.short.terms.list[${index}]`)"
        ></li>
      </ul>

      <div v-html="$t('cgu.full')"></div>

      <div class="signature">
        <hr />
        <p v-html="$t('cgu.footer')"></p>
      </div>
    </main>
  </div>
</template>

<script>
import I18n from '../partials/I18n.vue';

export default {
  components: {
    I18n,
  },
};
</script>
