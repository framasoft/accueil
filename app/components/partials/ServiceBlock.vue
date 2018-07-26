<template>
  <div :class="`col-md-${serviceWidth(index)} miniBloc ${clearBoth(index)}`">
    <a :href="$t(`data.cat.cloud.sites.${index}.link`)">
      <h4 class="vert" v-html="$t(`data.cat.cloud.sites.${index}.name`)"></h4>
    </a>
    <p
      :class="`miniBlocSubTitle ${$t('data.cat.cloud.sites.' + index + '.icon')}`"
      v-html="$t(`cat.cloud.sites.${index}.title`)"></p>
    <p
      class="miniBlocTexte"
      v-html="$t(`cat.cloud.sites.${index}.desc`)"></p>
  </div>
</template>
<script>
export default {
  name: 'ServiceBlock',
  props: {
    index: {
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
  data() {
    return {
      data: this.$i18n.messages.data,
    }
  },
};
</script>
