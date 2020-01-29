<template>
  <div class="money">
    <h3
      class="mt-4 mb-2"
      v-html="$t('why.money.title')"
    ></h3>
    <b-card
      border-variant="light"
      no-body
    >
      <div style="margin: 20px auto; max-width: 300px;">
        <la-polar
          :data="values"
          :colors="colors"
          :width="300"
          :height="290"
        >
          <la-pie
            prop="pv"
            show-label
            label-prop="name"
            :radius="[60, 100]"
          />
        </la-polar>

        <ul class="list-unstyled text-left">
          <li
            v-for="i in values.length"
            :key="i"
          >
            <i
              class="fa fa-circle"
              :style="`color: ${colors[i-1]};`"
              aria-hidden="true"
            ></i>
            <span v-html="$t(`why.money.list[${i-1}]`)"></span>
            <b v-html="`${values[i-1].name}`"></b>
          </li>
        </ul>
      </div>
    </b-card>
  </div>
</template>

<script>
import { Polar, Pie } from 'laue';

export default {
  components: {
    LaPolar: Polar,
    LaPie: Pie,
  },
  data: () => ({
    values: [
      { name: '70%', pv: 70 }, // Ressources humaines
      { name: '6%', pv: 6 }, // Serveurs et domaines
      { name: '6%', pv: 6 }, // Frais de fonctionnement
      { name: '10%', pv: 10 }, // Interventions et projets ext.
      { name: '2%', pv: 2 }, // Communication
      { name: '3%', pv: 3 }, // Achats de marchandise
      { name: '3%', pv: 3 }, // Frais bancaires
    ],
    colors: ['#0C5B7A', '#106D85', '#1697b9', '#36bcd4', '#6cddff', '#b8efff', '#e7f7fa'],
    // greyscale: [30], 36, 49, 63, 78, 89, 95
  }),
};
</script>
