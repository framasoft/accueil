<template>
  <b-container class="ombre">
    <header class="row">
      <h1
        class="col"
        v-html="$t('legals.title')"
      ></h1>
      <b-col
        cols="2"
        align-self="end"
      >
        <I18n />
      </b-col>
    </header>

    <hr class="trait" />

    <main>
      <div v-html="$t('legals.editor')"></div>

      <div
        v-if="$t('hash') === 'ovh'"
        id="modal-legals-host"
      >
        <p>OVH</p>
        <p>
          SAS au capital de 10&nbsp;000&nbsp;000&nbsp;€ RCS Roubaix –
          Tourcoing 424&nbsp;761&nbsp;41900045
        </p>
        <p>Code APE 6202A - N° TVA&nbsp;: FR 22&nbsp;424&nbsp;761&nbsp;419</p>
        <p>Siège social&nbsp;: 2 rue Kellermann 59100 Roubaix - France.</p>
      </div>
      <div
        v-if="$t('hash') === 'soyoustart'"
        id="modal-legals-host"
      >
        <p>So You Start</p>
        <p>OVH SAS au capital de 10&nbsp;069&nbsp;020&nbsp;€</p>
        <p>RCS Roubaix – Tourcoing 424&nbsp;761&nbsp;419&nbsp;00045</p>
        <p>Code APE 2620Z — N° TVA&nbsp;: FR 22&nbsp;424&nbsp;761&nbsp;419</p>
        <p>Siège social&nbsp;: 2 rue Kellermann 59100 Roubaix - France.</p>
      </div>
      <div
        v-else
        id="modal-legals-host"
      >
        <p>
          Hetzner Online AG<br />
          Stuttgarter St. 1<br />
          91710 Gunzenhausen<br />
          Germany
        </p>
        <p>Tél.: +49 – 9831 - 610061</p>
      </div>

      <hr />

      <div v-html="$t('legals.infoLib')"></div>
      <div
        id="piwik-iframe"
        class="well text-center center-block"
      >
        <iframe
          style="border: 0; height: 200px; max-width: 600px; width: 85%;"
          :src="`https://stats.framasoft.org/?module=CoreAdminHome&action=optOut&language=${
            $t('lang')}`"
        ></iframe>
      </div>
      <div v-html="$t('legals.modify')"></div>

      <hr />

      <div v-html="$t('legals.liabilities')"></div>

      <div class="signature">
        <hr />
        <p v-html="$t('legals.footer')"></p>
      </div>
    </main>
  </b-container>
</template>

<script>
import I18n from '../partials/I18n.vue';

export default {
  components: {
    I18n,
  },
};
</script>
