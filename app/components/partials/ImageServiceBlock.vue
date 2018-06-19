<template>
  <div
    :id="image.id"
    :class="`col-md-${image.width} miniBloc`">
    <a :href="image.link">
      <img
        :src="`${$t('baseImg')}${image.src}`"
        :alt="image.alt"
        class="img-responsive" />
    </a>
  </div>
</template>
<script>
export default {
  name: 'ImageServiceBlock',
  props: {
    image: {
      type: Object,
      required: true,
    },
  },
};
</script>
