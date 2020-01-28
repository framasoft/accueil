<template>
  <div>
    <Intro />

    <Community />

    <Software />

    <Culture />

    <Cloud />

    <Misc />
  </div>
</template>

<script>
import Intro from './full/Intro.vue';
import Community from './full/Community.vue';
import Software from './full/Software.vue';
import Culture from './full/Culture.vue';
import Cloud from './full/Cloud.vue';
import Misc from './full/Misc.vue';

export default {
  components: {
    Intro,
    Community,
    Software,
    Culture,
    Cloud,
    Misc,
  },
};
</script>
