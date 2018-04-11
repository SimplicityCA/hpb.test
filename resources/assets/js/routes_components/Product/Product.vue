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
            <div v-cloak class="product-page__animation-container" id="product-animation">
              <div>Posterior</div>
              <div>Lámina</div>
              <div>Frente</div>
            </div>
            <div class="product-page__product-details-container">
              <div class="product-page__download-container">
                <div class="download-file-container">
                  <a class="download-file" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 152 152" width="120" height="120"><path class="icon-bg" fill="#ee482d" d="M0 0h152v152H0z"/><path class="icon-figure" d="M63.5 56.8c.3-.8 1.1-1.4 2-1.4h5.4V39.6c0-1.6 1.3-2.9 2.9-2.9h8c1.6 0 2.9 1.3 2.9 2.9v15.9H90c.9 0 1.7.5 2 1.4.3.8.2 1.8-.5 2.4L79.3 71.4c-.4.4-1 .6-1.5.6-.6 0-1.1-.2-1.5-.6L64 59.2c-.7-.6-.9-1.6-.5-2.4zm52.3 53.7c0 2.5-2 4.5-4.5 4.5h-63c-2 0-3.8-1.3-4.3-3.3l-7.6-26.5c-.2-.8-.1-1.7.4-2.3.5-.7 1.3-1 2.1-1h5.3V64.6c0-1.5 1.2-2.6 2.6-2.6h12.6c.2.3.5.7.8 1l4.3 4.3H49.4V82h55.8c1.2 0 2.2.8 2.5 1.9l2.7 9.6V75.9H82.2c.3-.2.6-.4.9-.7l4.6-4.6h25.5c1.5 0 2.6 1.2 2.6 2.6v37.3z" fill="#fff"/></svg>
                    <strong>Catálogo Digital</strong><div>High Power Brake</div>
                    <small>Descargar</small>
                  </a>
                </div>
              </div>
              <div class="product-page__product-details-container container">
                <div class="product-page__product-details-content">
                  <div class="product-page__product-image">
                    <img v-if="product.description_image" v-bind:src="`/img/${product.description_image}`" />
                  </div>
                  <div class="product-page__product-info">
                    <div v-html="product.characteristics"></div>
                  </div>
                </div>
              </div>
            </div>
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
    // document.querySelector('#product-animation').addEventListener('scroll', function() {
    //   alert('you scrolled');
    // });
    var scrollableProductAnimation = document.getElementById("product-animation");
    scrollableProductAnimation.addEventListener('scroll', this.handleScrollEl);
  },
  methods: {
    handleScroll (event) {
      console.log('window scroll ' + window.scrollY);
      console.log('ID scroll ' + document.getElementById("product-animation").scrollTop);      
      if (window.scrollY > 150) {
        document.getElementById("product-animation").scrollTop += 1;
      }
    },
    handleScrollEl (event) {
      console.log('target ' + event.target.scrollTop);
      console.log('ID scroll ' + document.getElementById("product-animation").scrollTop);
    }
  },
  created(){
    // var scrollableProductAnimation = document.getElementById("product-animation");
    // console.log(scrollableProductAnimation);
    // scrollableProductAnimation.addEventListener('scroll', this.handleScrollEl);
    // document.querySelector('#product-animation').addEventListener('scroll', function() {
    //   alert('you scrolled');
    // });

    window.addEventListener('scroll', this.handleScroll);
  },
  destroyed(){
    var scrollableProductAnimation = document.getElementById("product-animation");
    scrollableProductAnimation.removeEventListener('scroll', this.handleScrollEl); 

    window.removeEventListener('scroll', this.handleScroll);
  }
}
</script>
