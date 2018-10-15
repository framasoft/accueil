<template>
  <div class="container ombre apropos">
    <vue-headful
      :title="$root.meta.title + ' - ' + $t('legals.title')"
    />
    <header class="clearfix header">
      <h1 class="pull-left" v-html="$t('legals.title')"></h1>
      <I18n/>
    </header>
    <main>
      <h2 v-html="$t('legals.editor.title')"></h2>

      <h3 v-html="$root.meta.title"></h3>
      <p><span v-html="$t('legals.editor.asso')"></span><span v-html="$root.legals.editor.assoNb"></span></p>
      <p><span v-html="$t('legals.editor.siret')"></span> <span v-html="$root.legals.editor.siretNb"></span></p>

      <h3 v-html="$t('legals.editor.siege')"></h3>
      <p v-html="$root.legals.editor.address"></p>
      <p><span v-html="$t('legals.editor.contact')"></span> <a :href="$root.link.contact" v-html="$root.link.contact"></a></p>

      <h3 v-html="$t('legals.editor.coprez')"></h3>
      <p v-html="$root.legals.editor.coprezName"></p>

      <h3 v-html="$t('legals.editor.host')"></h3>

      <div id="modal-legals-host" v-if="$root.hash === 'ovh'">
        <p>OVH</p>
        <p>SAS au capital de 10 000 000 € RCS Roubaix –
          Tourcoing 424 761 41900045 </p>
        <p>Code APE 6202A - N° TVA : FR 22 424 761 419</p>
        <p>Siège social : 2 rue Kellermann 59100 Roubaix - France.</p>
      </div>
      <div id="modal-legals-host" v-if="$root.hash === 'soyoustart'">
        <p>So You Start</p>
        <p>OVH SAS au capital de 10 069 020€</p>
        <p>RCS Roubaix – Tourcoing 424 761 419 00045</p>
        <p>Code APE 2620Z — N° TVA : FR 22 424 761 419</p>
        <p>Siège social&nbsp;: 2 rue Kellermann 59100 Roubaix - France.</p>
      </div>
      <div id="modal-legals-host" v-else>
        <p>Hetzner Online AG<br>
        Stuttgarter St. 1<br>
        91710 Gunzenhausen<br>
        Allemagne</p>
        <p>Tél.: +49 – 9831 - 610061</p>
      </div>

      <hr />

      <h2 v-html="$t('legals.infoLib.title')"></h2>

      <h3 v-html="$t('legals.infoLib.private.title')"></h3>
      <p
        v-for="p, index in $t('legals.infoLib.private.text')"
        v-html="$t('legals.infoLib.private.text['+ index +']')"
      ></p>

      <h3 v-html="$t('legals.infoLib.stats.title')"></h3>
      <p
        v-for="p, index in $t('legals.infoLib.stats.text')"
        v-html="$t('legals.infoLib.stats.text['+ index +']')"
      ></p>

      <div id="piwik-iframe" class="well text-center center-block">
        <iframe
          style="border: 0; height: 200px; width: 600px;"
          :src="'https://stats.framasoft.org/index.php?module=CoreAdminHome&action=optOut&language=' + $t('lang')"
        ></iframe>
      </div>

      <h3 v-html="$t('legals.infoLib.modify.title')"></h3>
      <p v-html="$t('legals.infoLib.modify.text[0]')"></p>
      <ul>
        <li
          v-for="li, index in $t('legals.infoLib.modify.list')"
          v-html="$t('legals.infoLib.modify.list['+ index +']')"
        ></li>
      </ul>
      <p v-html="$t('legals.infoLib.modify.text[1]')"></p>

      <hr />

      <h2 v-html="$t('legals.liabilities.title')"></h2>
      <p
        v-for="p, index in $t('legals.liabilities.text')"
        v-html="$t('legals.liabilities.text['+ index +']')"
      ></p>

      <h3 v-html="$t('legals.liabilities.tech.title')"></h3>
      <p
        v-for="p, index in $t('legals.liabilities.tech.text')"
        v-html="$t('legals.liabilities.tech.text['+ index +']')"
      ></p>

      <h3 v-html="$t('legals.liabilities.copyright.title')"></h3>
      <p
        v-for="p, index in $t('legals.liabilities.copyright.text')"
        v-html="$t('legals.liabilities.copyright.text['+ index +']')"
      ></p>

      <div class="signature">
        <hr />
        <p v-for="p, index in $t('legals.footer')" v-html="$t('legals.footer['+ index +']')"></p>
      </div>
    </main>
  </div>
</template>

<script>
import I18n from '../partials/I18n.vue'

export default {
  components: {
    I18n,
  },
}
</script>

