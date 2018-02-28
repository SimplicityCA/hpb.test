<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Producto {{this.$route.params.product_id}}</div>

                    <div class="panel-body">
                        ruta del producto
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  mounted () {
      console.log('Product mounted id:.',this.$route.params.product_id);
  },
  data () {
      return {
          id: this.$route.params.product_id
      }
  }
}
</script>
