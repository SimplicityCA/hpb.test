<template>
	<div class="block-container products-carousel-container">
		<h2>NUESTROS <strong>PRODUCTOS</strong></h2>
		<carousel :perPage="2" :navigationEnabled="true" :paginationEnabled="false" :perPageCustom="[[420, 2],[768, 2], [1024, 3]]">
		  <slide v-for="(product, index) in products" :key="index">
		  	<router-link :to="'/products/'+product.link">
		  		<img :src="'/img/'+product.home_image"> 
          <div class="product-title-block-container">
  			    <div class="product-title-block">
  				    <p><strong>{{product.title}}</strong></p>
  				    <p>{{product.subtitle}}</p>
  				  </div>
          </div>
			  </router-link>
		  </slide>
		</carousel>
    <!-- <div class="separator">separator</div>
    <carousel :perPageCustom="[[768, 2], [1024, 3]]" :paginationEnabled="false" :navigationEnabled="true">
      <slide>
        Slide 1 Content
      </slide>
      <slide>
        Slide 2 Content
      </slide>
      <slide>
        Slide 3 Content
      </slide>
      <slide>
        Slide 4 Content
      </slide>
    </carousel> -->
	</div>
</template>
<script>
export default {
    name: 'home-products',
    props: ['products'],
  }
</script>