<template>
  <div class="why">
    <h3
      class="mt-4 mb-2"
      v-html="$t('why.reasons.title')"
    ></h3>
    <div role="tablist">
      <b-card
        v-for="(reason, index) in $t('why.reasons.list')"
        :key="index"
        border-variant="light"
        no-body
        :style="(index === 3 && $t('lang') !== 'fr') ? 'display : none' : ''"
      >
        <b-card-header
          v-b-toggle="`reason-${index}`"
          role="tab"
        >
          <h4 v-html="$t(`why.reasons.list[${index}]`)"></h4>
        </b-card-header>
        <b-collapse
          :id="`reason-${index}`"
          :visible="!index"
          role="tabpanel"
          accordion="reasons"
        >
          <b-card-body>
            <p v-html="$t(`why.reasons.desc[${index}]`)"></p>
          </b-card-body>
        </b-collapse>
      </b-card>
    </div>
  </div>
</template>
