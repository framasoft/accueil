<template>
  <div id="cgu" class="container ombre apropos">
    <vue-headful
      :title="$t('data.meta.name') + ' - ' + $t('legals.title')"
    />
    <header class="clearfix header">
      <h1 class="pull-left">{{ $t('legals.title') }}</h1>
      <I18n/>
    </header>
    <main>
      <h2>{{ $t('legals.editor.title') }}</h2>

      <h3>{{ $t('data.meta.name') }}</h3>
      <p>{{ $t('legals.editor.asso') }}{{ data.legals.editor.assoNb }}</p>
      <p>{{ $t('legals.editor.siret') }} {{ data.legals.editor.siretNb }}</p>

      <h3>{{ $t('legals.editor.siege') }}</h3>
      <p v-html="data.legals.editor.address"></p>
      <p>{{ $t('legals.editor.contact') }} <a :href="$t('link.contact')">{{ $t('link.contact') }}</a></p>

      <h3>{{ $t('legals.editor.coprez') }}</h3>
      <p>{{ data.legals.editor.coprezName }}</p>

      <h3>{{ $t('legals.editor.host') }}</h3>

      <div id="modal-legals-host" v-if="host === 'ovh'">
        <p>OVH</p>
        <p>SAS au capital de 10 000 000 € RCS Roubaix –
          Tourcoing 424 761 41900045 </p>
        <p>Code APE 6202A - N° TVA : FR 22 424 761 419</p>
        <p>Siège social : 2 rue Kellermann 59100 Roubaix - France.</p>
      </div>
      <div id="modal-legals-host" v-else>
        <p>Hetzner Online AG<br />
        Stuttgarter St. 1<br />
        91710 Gunzenhausen<br />
        Allemagne</p>
        <p>Tél.: +49 – 9831 - 610061</p>
      </div>

      <hr />

      <h2>{{ $t('legals.infoLib.title') }}</h2>

      <h3>{{ $t('legals.infoLib.private.title') }}</h3>
      <p
        v-for="p, index in $t('legals.infoLib.private.text')"
        v-html="$t('legals.infoLib.private.text['+ index +']')"
      ></p>

      <h3>{{ $t('legals.infoLib.stats.title') }}</h3>
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

      <h3>{{ $t('legals.infoLib.modify.title') }}</h3>
      <p v-html="$t('legals.infoLib.modify.text[0]')"></p>
      <ul>
          <li
            v-for="li, index in $t('legals.infoLib.modify.list')"
            v-html="$t('legals.infoLib.modify.list['+ index +']')"
          ></li>
      </ul>
      <p v-html="$t('legals.infoLib.modify.text[1]')"></p>

      <hr />

      <h2>{{ $t('legals.liabilities.title') }}</h2>
      <p
        v-for="p, index in $t('legals.liabilities.text')"
        v-html="$t('legals.liabilities.text['+ index +']')"
      ></p>

      <h3>{{ $t('legals.liabilities.tech.title') }}</h3>
      <p
        v-for="p, index in $t('legals.liabilities.tech.text')"
        v-html="$t('legals.liabilities.tech.text['+ index +']')"
      ></p>

      <h3>{{ $t('legals.liabilities.copyright.title') }}</h3>
      <p
        v-for="p, index in $t('legals.liabilities.copyright.text')"
        v-html="$t('legals.liabilities.copyright.text['+ index +']')"
      ></p>

      <div class="signature">
        <hr />
        <p v-for="p, index in $t('legals.footer')" v-html="$t('legals.footer['+ index +']')""></p>
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
  data() {
    return {
      host: window.location.hash.replace('#', ''),
      data: this.$i18n.messages.data,
    }
  },
}
</script>

