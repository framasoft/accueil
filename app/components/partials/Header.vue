<template lang="html">
  <div id="framaheader" class="clearfix header">
    <div class="col-md-4">
      <h1 id="framasoft" class="sitename" v-html="$t('message.meta.framasoft[2]')"></h1>
    </div>
    <div class="col-md-5">
      <p class="headerSubTitle">{{ $t("message.meta.slogan") }}</p>
    </div>
    <div class="col-md-3">
      <I18n/>
      <InterNavHead/>
    </div>
  </div>
</template>

<script>
import I18n from './I18n.vue'
import InterNavHead from './InterNavHead.vue'
export default {
  name: 'framaheader',
  components: {
    I18n,
    InterNavHead
  }
}

// Konami code
if (window.addEventListener) {
  const kkeys = [];
  const konami = '38,38,40,40,37,39,37,39,66,65';
  window.addEventListener('keydown', (e) => {
    kkeys.push(e.keyCode);
    if (kkeys.toString().indexOf(konami) >= 0) {
      alert('Konami old school ! pwnd :p'); // eslint-disable-line
      window.location.href = 'https://framasoft.org';
    }
  }, true);
}
</script>

