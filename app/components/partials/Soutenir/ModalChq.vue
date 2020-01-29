<template>
  <b-modal
    id="f-modal-chq"
    v-model="state"
    size="lg"
    :static="true"
    :lazy="true"
    :ok-title-html="$t('form.step3.ok')"
    cancel-variant=" d-none"
    @hidden="close()"
    @ok="thankYou(); close()"
  >
    <template v-slot:modal-header>
      <button
        type="button"
        class="close"
        @click="close()"
      >
        <icon
          name="close"
          variant="fa-inverse"
          :label="$t('txt.close')"
          sr-only
        />
      </button>
      <h1 class="h3 text-light">
        <span v-html="$t('form.step3.i_give')"></span>
        <span v-text="$n(form.don, 'eur')"></span>
        <span v-html="$t('form.step3.modal_chq.by')"></span>
      </h1>
    </template>

    <p v-html="$t('form.step3.coord')"></p>
    <p>
      <span v-html="$t('form.step3.email_send[0]')"></span>
      <span v-text="form.email"></span>
      <span v-html="$t('form.step3.email_send[1]')"></span>
    </p>
    <p v-html="$t('form.step3.modal_chq.to_finish')"></p>
    <cite
      class="alert alert-success"
      v-text="form.pay_ref"
    ></cite>
    <p v-html="$t('form.step3.modal_chq.to_post')"></p>
    <cite class="alert alert-success">
      Association Framasoft<br />
      Locaux Motiv<br />
      10 bis, rue Jangot<br />
      69007 LYON
    </cite>
  </b-modal>
</template>

<script>
export default {
  props: {
    open: {
      type: Boolean,
      required: true,
    },
    form: {
      type: Object,
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
      this.$parent.modal.openChq = false;
    },
    thankYou() {
      window.location.href = 'https://soutenir.framasoft.org/merci';
    },
  },
};
</script>
