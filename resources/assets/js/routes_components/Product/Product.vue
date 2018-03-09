<template>
    <div class="container-fluid">
        <div class="row">
            <img v-if="product.header_image" v-bind:src="`/img/${product.header_image}`" />
            {{product.title}}
            {{product.subtitle}}
            <div> ANIMACIÓN </div>
            <a>Descargar Catálogo</a>
            <img v-if="product.description_image" v-bind:src="`/img/${product.description_image}`" />
            <div v-html="product.characteristics"></div>
        </div>
    </div>
</template>

<script>
export default {
  data () {
      return {
          id: this.$route.params.product_id,
          product: []
      }
  },
  created(){
    const vm = this;
    axios.get('api/product/'+this.id)
    .then(function (response) {
      vm.product = response.data;
    })
    .catch(function (error) {
      console.log(error);
    });   
  }
}
</script>
