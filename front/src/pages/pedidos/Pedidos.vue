<template>
  <q-page class="q-pa-xs">
    <div class="row">
      <div class="col-12 col-md-3 q-pa-xs">
        <q-input v-model="fechaInicio" label="Fecha Inicio" type="date" dense  outlined @update:modelValue="getPedidos"/>
      </div>
      <div class="col-12 col-md-3 q-pa-xs">
        <q-input v-model="fechaFin" label="Fecha Fin" type="date" dense  outlined @update:modelValue="getPedidos"/>
      </div>
    </div>
  </q-page>
</template>
<script>
import moment from "moment";

export default {
  name: 'PedidosPage',
  data() {
    return {
      pedidos: [],
      fechaInicio: moment().startOf('isoWeek').format('YYYY-MM-DD'),
      fechaFin: moment().endOf('isoWeek').format('YYYY-MM-DD'),
      // protected $fillable = ['user_id','estado','nombre','direccion','telefono','total','latitud','longitud'];
      columns: [
        { name: 'id', label: 'ID', align: 'left', field: row => row.id },
        { name: 'cliente', label: 'Cliente', align: 'left', field: row => row.cliente },
        { name: 'fecha', label: 'Fecha', align: 'left', field: row => row.fecha },
        { name: 'total', label: 'Total', align: 'left', field: row => row.total },
        { name: 'estado', label: 'Estado', align: 'left', field: row => row.estado },
        { name: 'actions', label: 'Acciones', align: 'center' }
      ]
    }
  },
  mounted() {
    this.getPedidos();
  },
  methods: {
    getPedidos() {
      this.$axios.get('pedidos', {
        params: {
          fechaInicio: this.fechaInicio,
          fechaFin: this.fechaFin
        }
      }).then(response => {
        this.pedidos = response.data;
      });
    }
  }
}
</script>
<style scoped>

</style>
