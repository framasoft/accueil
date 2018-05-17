<template lang="html">
  <div class="pull-right">
    <router-link :to="'/' + switchLanguage + '/lite'" class="btn btn-default" :title="$t('message.lite')">
      <i class="fa fa-lg fa-th-large" aria-hidden="true"></i>
      <span class="sr-only">{{ $t("message.lite") }}</span>
    </router-link>
    <div class="btn-group">
      <button type="button" class="btn btn-default dropdown-toggle"
        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
        :title="$t('message.nav.langChange')">
        <i class="fa fa-lg fa-language" aria-hidden="true"></i> {{ $t("message.nav.lang") }} <span class="caret"></span>
      </button>
      <ul class="dropdown-menu">
        <li @click="changeLanguage('en')">
          <router-link :to="'/en/' + (this.$route.path.split('/')[2] || '')">
            English
          </router-link>
        </li>
        <li @click="changeLanguage('fr')">
          <router-link :to="'/fr/' + (this.$route.path.split('/')[2] || '')">
            Français
          </router-link>
        </li>
      </ul>
    </div>
  </div>
</template>

<script src='./I18n.js'></script>
