<template>
  <div :class="`col-md-${serviceWidth(frama)} miniBloc ${clearBoth(frama)}`">
    <a :href="$t(`link.${frama}`)">
      <h4
        class="vert"
        v-html="$t(`color.${frama}`)"
      ></h4>
    </a>
    <p
      :class="`miniBlocSubTitle ${$t(`icon.${frama}`)}`"
      v-html="$t(`cat.cloud.sites.${frama}.title`)"
    ></p>
    <p
      class="miniBlocTexte"
      v-html="$t(`cat.cloud.sites.${frama}.desc`)"
    ></p>
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
      return ['my'].includes(serviceId) ? '6' : '3';
    },
    clearBoth(serviceId) {
      return ['forms', 'mindmap', 'stallmanoramix', 'team', 'memo', 'bag', 'drop', 'drive', 'fight']
        .includes(serviceId) ? 'clearBoth' : '';
    },
  },
};
</script>
