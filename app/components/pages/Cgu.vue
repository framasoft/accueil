<template>
  <div class="container ombre apropos">
    <vue-headful
      :title="$t('data.meta.name') + ' - ' + $t('cgu.title')"
    />
    <header class="clearfix header">
      <h1 class="pull-left">{{ $t('cgu.title') }}</h1>
      <I18n/>
    </header>
    <main>
      <h2>{{ $t('cgu.intro.title') }}</h2>
      <p v-html="$t('cgu.intro.text')"></p>

      <h2>{{ $t('cgu.short.title') }}</h2>
      <p v-html="$t('cgu.short.desc')"></p>
      <p><b v-html="$t('cgu.short.sympa.text')"></b></p>
      <ul class="list-group">
        <li class="list-group-item bg-success"
          v-for="li, index in $t('cgu.short.sympa.list')"
          v-html="$t('cgu.short.sympa.list[' + index + ']')"
        ></li>
      </ul>
      <p v-html="$t('cgu.short.terms.text')"></p>
      <ul class="list-group">
        <li class="list-group-item bg-warning"
          v-for="li, index in $t('cgu.short.terms.list')"
          v-html="$t('cgu.short.terms.list[' + index + ']')"
        ></li>
      </ul>

      <h2>{{ $t('cgu.full.title') }}</h2>
      <h3>{{ $t('cgu.full.conditions.title') }}</h3>

      <ol>
        <li
          v-for="li, index in $t('cgu.full.conditions.list')"
          v-html="$t('cgu.full.conditions.list[' + index + ']')"
        ></li>
      </ol>
      <p v-html="$t('cgu.full.liabilities.text')"></p>
      <ol>
        <li
          v-for="li, index in $t('cgu.full.liabilities.list')"
          v-html="$t('cgu.full.liabilities.list[' + index + ']')"
        ></li>
      </ol>

      <h2>{{ $t('cgu.modify.title') }}</h2>
      <ol>
        <li
          v-for="li, index in $t('cgu.modify.list')"
          v-html="$t('cgu.modify.list[' + index + ']')"
        ></li>
      </ol>

      <h3>{{ $t('cgu.modify.copyright.title') }}</h3>
      <ol>
        <li
          v-for="li, index in $t('cgu.modify.copyright.list')"
          v-html="$t('cgu.modify.copyright.list[' + index + ']')"
        ></li>
      </ol>

      <h3>{{ $t('cgu.modify.share.title') }}</h3>
      <ul>
        <li
          v-for="li, index in $t('cgu.modify.share.list')"
          v-html="$t('cgu.modify.share.list[' + index + ']')"
        ></li>
      </ul>

      <h3>{{ $t('cgu.modify.closure.title') }}</h3>
      <p
        v-for="p, index in $t('cgu.modify.closure.text')"
        v-html="$t('cgu.modify.closure.text[' + index + ']')"
      ></p>

      <h3>{{ $t('cgu.modify.private.title') }}</h3>
      <p
        v-for="p, index in $t('cgu.modify.private.text')"
        v-html="$t('cgu.modify.private.text[' + index + ']')"
      ></p>
      <ul>
        <li
          v-for="li, index in $t('cgu.modify.private.list')"
          v-html="$t('cgu.modify.private.list[' + index + ']')"
        ></li>
      </ul>

      <div class="signature">
        <hr />
        <p v-for="p, index in $t('cgu.footer')" v-html="$t('cgu.footer['+ index +']')""></p>
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
      data: this.$i18n.messages.data,
    }
  },
}
</script>
