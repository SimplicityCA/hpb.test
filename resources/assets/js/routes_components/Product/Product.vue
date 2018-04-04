<template>
    <div class="container-fluid product-page">
        <div class="row">
            <div class="product-page__top-section">
              <div class="header-text-container">
                  <p class="header-title">{{product.title}}</p>
                  <p class="header-subtitle">{{product.subtitle}}</p>
                </div>
              </div>
              <img v-if="product.header_image" v-bind:src="`/img/${product.header_image}`" />
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
  mounted(){
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
