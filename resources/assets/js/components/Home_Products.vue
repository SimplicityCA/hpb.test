<template>
	<div class="block-container carousel-container">
		<h2>NUESTROS <b>PRODUCTOS</b></h2>
		<carousel :perPage="2" :navigationEnabled="true" :paginationEnabled="false" :perPageCustom="[[420, 2],[768, 2], [1024, 3]]">
		  <slide v-for="(product, index) in products" :key="index">
		  	<router-link :to="'/products/'+product.link">
		  		<img :src="'/img/'+product.home_image"> 
			    <div class="product-title-block">
				    <p>{{product.title}}</p>
				    <p>{{product.subtitle}}</p>
				  </div>
			  </router-link>
		  </slide>
		</carousel>
	</div>
</template>
<script>
export default {
    name: 'home-products',
    props: ['products'],
  }
</script>