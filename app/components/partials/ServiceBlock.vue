<template>
  <div :class="`col-md-${serviceWidth(index)} miniBloc ${clearBoth(index)}`">
    <a :href="frama.link">
      <h4 class="vert">
        <b
          v-for="(part, color) in frama.name"
          :key="color"
          :class="color">{{ part }}</b>
      </h4>
    </a>
    <p
      :class="`miniBlocSubTitle ${frama.icon}`"
      v-html="frama.title"></p>
    <p
      class="miniBlocTexte"
      v-html="frama.desc"></p>
  </div>
</template>
<script>
export default {
  name: 'ServiceBlock',
  props: {
    frama: {
      type: Object,
      required: true,
    },
    index: {
      type: Number,
      required: true,
    },
  },
  methods: {
    serviceWidth(serviceId) {
      return ['bee', 'my'].includes(serviceId) ? '6' : '3';
    },
    clearBoth(serviceId) {
      return ['forms', 'mindmap', 'stallmanoramix', 'sphere', 'talk',
        'village', 'drop', 'drive', 'fight'].includes(serviceId) ? 'clearBoth' : '';
    },
  },
};
</script>
