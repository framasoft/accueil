<template lang="html">
  <ul class="row navEntities">
    <li
      v-for="(part, key) in $t('msg.nav.parts')"
      :key="part.key">
      <a
        :href="`#topPg${key}`"
        :title="part.title"
      >
        <span class="sr-only">{{ part.key }}</span>
      </a>
    </li>
  </ul>
</template>
