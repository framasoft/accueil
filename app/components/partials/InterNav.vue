<template>
  <ul class="navEntities p-0">
    <li
      v-for="(part, key) in $t('nav.parts')"
      :key="part.key"
    >
      <a
        :href="`#topPg${key}`"
        :title="part.title"
      >
        <span
          class="sr-only"
          v-text="part.key"
        ></span>
      </a>
    </li>
  </ul>
</template>
