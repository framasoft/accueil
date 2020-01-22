<template>
  <main>
    <intro />

    <more />

    <degooglisons />

    <peertube v-if="is.before('2019/10/15')" />

    <mobilizon v-if="!is.before('2019/10/15')" />

    <contributopia />

    <div class="clearfix container p-0">
      <soutenir />
    </div>
  </main>
</template>

<script>
import Intro from './home/Intro.vue';
import More from './home/More.vue';
import Degooglisons from './home/Degooglisons.vue';
import Peertube from './home/Peertube.vue';
import Mobilizon from './home/Mobilizon.vue';
import Contributopia from './home/Contributopia.vue';
import Soutenir from '../partials/Soutenir/Main.vue';

export default {
  components: {
    Intro,
    More,
    Degooglisons,
    Peertube,
    Mobilizon,
    Contributopia,
    Soutenir,
  },
};
</script>
