<template>
  <div class="container ombre apropos">
    <header class="clearfix header">
      <h1 class="pull-left" v-html="$t('legals.title')"></h1>
      <I18n/>
    </header>
    <main>
      <h2 v-html="$t('legals.editor.title')"></h2>

      <h3 v-html="$t('txt.soft')"></h3>
      <p><span v-html="$t('legals.editor.asso')"></span><span v-html="$t('legals.editor.assoNb')"></span></p>
      <p><span v-html="$t('legals.editor.siret')"></span> <span v-html="$t('legals.editor.siretNb')"></span></p>

      <h3 v-html="$t('legals.editor.siege')"></h3>
      <p v-html="$t('legals.editor.address')"></p>
      <p><span v-html="$t('legals.editor.contact')"></span> <a :href="$t('link.contact')" v-html="$t('link.contact')"></a></p>

      <h3 v-html="$t('legals.editor.coprez')"></h3>
      <p v-html="$t('legals.editor.coprezName')"></p>

      <h3 v-html="$t('legals.editor.host')"></h3>

      <div v-if="$t('hash') === 'ovh'" id="modal-legals-host">
        <p>OVH</p>
        <p>SAS au capital de 10 000 000 € RCS Roubaix –
          Tourcoing 424 761 41900045 </p>
        <p>Code APE 6202A - N° TVA : FR 22 424 761 419</p>
        <p>Siège social : 2 rue Kellermann 59100 Roubaix - France.</p>
      </div>
      <div v-if="$t('hash') === 'soyoustart'" id="modal-legals-host">
        <p>So You Start</p>
        <p>OVH SAS au capital de 10 069 020€</p>
        <p>RCS Roubaix – Tourcoing 424 761 419 00045</p>
        <p>Code APE 2620Z — N° TVA : FR 22 424 761 419</p>
        <p>Siège social&nbsp;: 2 rue Kellermann 59100 Roubaix - France.</p>
      </div>
      <div v-else id="modal-legals-host">
        <p>Hetzner Online AG<br>
        Stuttgarter St. 1<br>
        91710 Gunzenhausen<br>
        Germany</p>
        <p>Tél.: +49 – 9831 - 610061</p>
      </div>

      <hr>

      <v-text section="legals.infoLib" />
      <div id="piwik-iframe" class="well text-center center-block">
        <iframe
          style="border: 0; height: 200px; width: 600px;"
          :src="`https://stats.framasoft.org/index.php?module=CoreAdminHome&action=optOut&language=${$t('lang')}`">
        </iframe>
      </div>
      <v-text section="legals.infoLib.modify" />

      <hr>

      <v-text section="legals.liabilities" />

      <div class="signature">
        <hr />
        <v-text section="legals.footer" />
      </div>
    </main>
  </div>
</template>

<script>
import I18n from '../partials/I18n.vue';
import VText from '../partials/V-Text.vue';

export default {
  components: {
    I18n,
    VText,
  },
}
</script>
