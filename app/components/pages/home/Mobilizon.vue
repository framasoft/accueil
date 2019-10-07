<template>
  <section id="mobilizon" class="clearfix">
    <div class="embed-responsive embed-responsive-16by9">
      <img :src="`${$t('/')}img/mobilizon/event.gif`" alt="" style="width: 100%" />
    </div>
    <div class="container ombre">
      <h2 v-html="$t('home.mobilizon.title')"></h2>
      <p v-html="$t('home.mobilizon.text')"></p>
      <p>
        <a :href="$t('home.mobilizon.link')"
          class="btn btn-default"
          v-html="$t('home.mobilizon.btn')">
        </a>
      </p>
    </div>
    <p class="pfooter" v-html="$t('home.mobilizon.footer')"></p>
  </section>
</template>

<script>
import { Modal, Tabs, Tab} from 'uiv';

export default {
  components: {
    Modal,
    Tabs,
    Tab,
  },
  data() {
    return {
      videoBackground: 'about:blank',
    }
  },
}
</script>
