<template>
  <div class="container ombre apropos">
    <vue-headful
      :title="`${$root.meta.title} - ${$t('asso.title')}`"
    />
    <header class="clearfix header">
      <h1 class="pull-left" v-html="$t('asso.title')"></h1>
      <I18n/>
    </header>
    <main>
      <v-text section="asso.prez" />

      <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
          <img
            class="img-responsive"
            alt=""
            :title="$t('asso.prez.saveas')"
            :src="`${$root['/']}img/${$route.meta.lang}/infographie_Le-Monde-de-Framasoft_CC-By-SA-Geoffrey-Dorne-1920px-2018.jpg`" />
          <p class="text-right">
            <span v-html="$t('asso.prez.infography')"></span>
            <a href="http://geoffreydorne.com" v-html="$root.people.dorme"></a>,
            <span v-html="$root.license.ccbysa4fr"></span>
          </p>
        </div>
      </div>

      <hr />

      <v-text section="asso.infos" />
      <ul>
        <li>
          <a :href="`${$root.asso.files}statuts-Framasoft-2015-v8.pdf`">
            <strong v-html="$t('asso.infos.statuts')"></strong>
          </a>
        </li>
        <li>
          <a :href="`${$root.asso.files}reglement-interieur-2015-v6c.pdf`">
            <strong v-html="$t('asso.infos.ri')"></strong>
          </a>
        </li>
      </ul>

      <p class="text-center">
        <img
          style="width:180px;"
          alt=""
          :src="`${$root['/']}img/biglogo.png`">
      </p>

      <hr />

      <h2 v-html="$t('asso.data.title')"></h2>
      <div class="col-sm-10 col-sm-offset-1 well">
        <dl class="dl-horizontal">
          <dt v-html="$t('asso.data.dt.juridical')"></dt>
          <dd v-html="$t('asso.data.dd.juridical')"></dd>
        </dl>
        <dl class="dl-horizontal">
          <dt v-html="$t('asso.data.dt.coprez')"></dt>
          <dd v-html="$root.legals.editor.coprezName"></dd>
        </dl>
        <dl class="dl-horizontal">
          <dt v-html="$t('asso.data.dt.dg')"></dt>
          <dd>Pierre-Yves Gosset</dd>
        </dl>
        <dl class="dl-horizontal">
          <dt v-html="$t('asso.data.dt.registration')"></dt>
          <dd>
            2004
            (<a :href="`${$root.asso.files}statuts-Framasoft-2015-v8.pdf`"
              rel="nofollow" v-html="$t('asso.infos.statuts')"></a>)
            (<a :href="`${$root.asso.files}reglement-interieur-2015-v6c.pdf`"
              rel="nofollow" v-html="$t('asso.infos.ri')"></a>)
          </dd>
        </dl>
        <dl class="dl-horizontal">
          <dt v-html="$t('asso.data.dt.staff')"></dt>
          <dd v-html="$t('asso.data.dd.staff')"></dd>
        </dl>
        <dl class="dl-horizontal">
          <dt v-html="$t('asso.data.dt.headquarters')"></dt>
          <dd>Lyon, France</dd>
        </dl>
        <dl class="dl-horizontal">
          <dt v-html="$t('asso.data.dt.org')"></dt>
          <dd v-html="$t('asso.data.dd.org')"></dd>
        </dl>
        <dl class="dl-horizontal">
          <dt v-html="$t('asso.data.dt.id')"></dt>
          <dd>
            <a :href="`${$root.asso.files}fiche_identification_framasoft.pdf`"
              rel="nofollow"  v-html="$t('asso.data.dd.id')"></a>
          </dd>
        </dl>
        <dl class="dl-horizontal">
          <dt v-html="$t('asso.data.dt.projects')"></dt>
          <dd>
            <a :href="$root.link.cuo" v-html="$root.color.cuo"></a> -
            <a :href="$root.link.dio" v-html="$t('color.dio')"></a>
          </dd>
        </dl>
        <dl class="dl-horizontal">
          <dt v-html="$t('asso.data.dt.charte')"></dt>
          <dd><a href="../charte" v-html="$t('charte.title')"></a></dd>
        </dl>
        <dl class="dl-horizontal">
          <dt v-html="$t('asso.data.dt.reports')"></dt>
          <dd>
            <ul>
              <li>
                2017 :
                <a :href="`${$root.asso.files}rapport_financier_2017.pdf`"
                  rel="nofollow"
                  v-html="$t('asso.data.dd.reportsFinancial')">
                </a>
              </li>
              <li>
                2016 :
                <a :href="`${$root.asso.files}rapport_financier_2016.pdf`"
                  rel="nofollow"
                  v-html="$t('asso.data.dd.reportsFinancial')">
                </a>
              </li>
              <li>
                2015 :
                <a :href="`${$root.asso.files}rapports-moraux/Framasoft_rapport_activite_2015.pdf`"
                  rel="nofollow"
                  v-html="$t('asso.data.dd.reportsFinancial')">
                </a>
              </li>
              <li>
                2014 :
                <a :href="`${$root.asso.files}rapports-moraux/Framasoft_rapport_activite_2014.pdf`"
                  rel="nofollow"
                  v-html="$t('asso.data.dd.reportsResults')">
                </a>
              </li>
              <li>
                2013 :
                <a :href="`${$root.asso.files}rapports-moraux/rapport_activites_framasoft_2013-v0.3.pdf`"
                  rel="nofollow"
                  v-html="$t('asso.data.dd.reportsMAndF')">
                </a>
              </li>
              <li>
                2012 :
                <a :href="`${$root.asso.files}rapport_moral_framasoft_2012-v0.5.pdf`"
                  rel="nofollow"
                  v-html="$t('asso.data.dd.reportsMAndF')">
                </a>
              </li>
              <li>
                2011 :
                <a :href="`${$root.asso.files}rapport_moral_framasoft_2011-v3.pdf`"
                  rel="nofollow"
                  v-html="$t('asso.data.dd.reportsMAndF')">
                </a>
              </li>
              <li>
                2010 : <a :href="`${$root.asso.files}rapport_moral_framasoft_2010_v3.pdf`"
                rel="nofollow" v-html="$t('asso.data.dd.reportsMAndF')"></a>
              </li>
              <li>
                2009 :
                <a :href="`${$root.asso.files}rapport_moral_framasoft_2009_v2.4.3_0.pdf`"
                  rel="nofollow"
                  v-html="$t('asso.data.dd.reportsMAndF')">
                </a>
              </li>
            </ul>
          </dd>
        </dl>
        <dl class="dl-horizontal">
          <dt v-html="$t('asso.data.dt.newsletter')"></dt>
          <dd><a :href="$root.link.newsletter" v-html="$t('asso.data.dd.newsletter')"></a></dd>
        </dl>
        <dl class="dl-horizontal">
          <dt v-html="$t('asso.data.dt.press')"></dt>
          <dd><a :href="$root.link.press"  v-html="$t('asso.data.dd.press')"></a></dd>
        </dl>
        <dl class="dl-horizontal">
          <dt v-html="$t('asso.data.dt.graphics')"></dt>
          <dd><a href="../graphics" v-html="$t('asso.data.dd.graphics')"></a></dd>
        </dl>
        <dl class="dl-horizontal">
          <dd>
            <a href="https://soutenir.framasoft.org/afficher-votre-soutien"  v-html="$t('asso.data.dd.banners')"></a> -
            <a href="https://soutenir.framasoft.org/benevolat" v-html="$t('asso.data.dd.benevalo')"></a>
          </dd>
        </dl>
        <dl class="dl-horizontal">
          <dt v-html="$t('asso.data.dt.founders')"></dt>
          <dd>{{ $root.people.aka }}, Paul Lunetta, Georges Silva</dd>
        </dl>
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
