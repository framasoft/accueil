<template>
  <div :class="`col-md-${serviceWidth(frama)} miniBloc ${clearBoth(frama)}`">
    <a :href="$root.link[frama]">
      <h4 class="vert" v-html="$root.color[frama]"></h4>
    </a>
    <p
      :class="`miniBlocSubTitle ${$root.icon[frama]}`"
      v-html="$t(`cat.cloud.sites.${frama}.title`)"></p>
    <p
      class="miniBlocTexte"
      v-html="$t(`cat.cloud.sites.${frama}.desc`)"></p>
  </div>
</template>
<script>
export default {
  name: 'ServiceBlock',
  props: {
    frama: {
      type: String,
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
