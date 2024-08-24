<template>
  <q-page class="q-pa-xs bg-grey-3">
    <div class="row">
      <div class="col-12 col-md-3 q-pa-xs">
        <CardComponent :amount="0" color="grey" title="Balance" icon="account_balance" />
      </div>
      <div class="col-12 col-md-3 q-pa-xs">
        <CardComponent :amount="0" color="blue" title="Transferencias" icon="o_trending_up" />
      </div>
      <div class="col-12 col-md-3 q-pa-xs">
        <CardComponent :amount="0" color="green" title="Efectivo" icon="o_trending_up" />
      </div>
      <div class="col-12 col-md-3 q-pa-xs">
        <CardComponent :amount="0" color="red" title="Gastos" icon="o_trending_down" />
      </div>
    </div>
  </q-page>
  <div id="myElement" class="hidden"></div>
</template>

<script>
import moment from 'moment'
import CardComponent from 'components/CardComponent.vue'
import { Imprimir } from 'src/addons/Imprimir'
import { Excel } from 'src/addons/Excel'
export default {
  name: 'IndexPage',
  components: { CardComponent },
  data () {
    return {
    }
  },
  methods: {
  }
}
</script>
