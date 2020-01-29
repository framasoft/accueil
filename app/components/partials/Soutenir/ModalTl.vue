<template>
  <b-modal
    id="f-modal-tl"
    v-model="state"
    size="lg"
    :static="true"
    :lazy="true"
    :title="$t('why.timeline.title')"
    :cancel-title-html="$t('txt.close')"
    cancel-variant="light"
    button-size="sm"
    @hidden="close()"
  >
    <div class="clearfix">
      <div class="embed-responsive embed-responsive-4by3">
        <iframe
          v-if="state"
          class="embed-responsive-item"
          :src="`${$t('link.dio')}/${$t('lang')}/timeline`"
        ></iframe>
      </div>
    </div>
  </b-modal>
</template>

<script>
export default {
  props: {
    open: {
      type: Boolean,
      required: true,
    },
  },
  data() {
    return {
      state: false,
    };
  },
  watch: {
    open(newValue) {
      if (newValue) {
        this.state = true;
      }
    },
  },
  methods: {
    close() {
      this.state = false;
      this.$parent.modal.openTL = false;
    },
  },
};
</script>
