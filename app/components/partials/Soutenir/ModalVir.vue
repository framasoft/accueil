<template>
  <b-modal
    id="f-modal-vir"
    v-model="state"
    size="lg"
    :static="true"
    :lazy="true"
    :ok-title-html="$t('form.step3.ok')"
    cancel-variant=" d-none"
    :modal-class="form.monthly ? 'monthly' : ''"
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
        <span
          v-if="form.monthly"
          v-html="$t('form.step3.monthly')"
        ></span>
        <span v-html="$t('form.step3.modal_vir.by')"></span>
      </h1>
    </template>

    <p v-html="$t('form.step3.coord')"></p>
    <p>
      <span v-html="$t('form.step3.email_send[0]')"></span>
      <span v-text="form.email"></span>
      <span v-html="$t('form.step3.email_send[1]')"></span>
    </p>
    <p v-html="$t('form.step3.modal_vir.no_sepa')"></p>
    <p v-html="$t('form.step3.modal_vir.to_finish')"></p>
    <cite class="alert alert-success">
      Titulaire : Framasoft  <br />
      Domiciliation : CCM LYON GAMBETTA, 52 COURS GAMBETTA, 69007 LYON<br />
      RIB : 10278 07346 00020495901 82  <br />
      IBAN : FR76 1027 8073 4600 0204 9590 182  <br />
      BIC : CMCIFR2A <br />
    </cite>
    <p v-html="$t('form.step3.modal_vir.ref')">
    </p>
    <cite
      class="alert alert-success"
      v-text="form.pay_ref"
    ></cite>
    <p v-html="$t('form.step3.modal_vir.to_bank')"></p>
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
      this.$parent.modal.openVir = false;
    },
    thankYou() {
      window.location.href = 'https://soutenir.framasoft.org/merci';
    },
  },
};
</script>
