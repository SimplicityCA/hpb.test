<template>
	<div class="block-container about-us">
		<div class="col-sm-6 image-container">
			<img v-if="imageAbout" :src="'/img/'+imageAbout" >
		</div>
		<div class="col-sm-6 text-container">
			<h2>QUIÉNES <strong>SOMOS</strong></h2>
			<p v-html="text"></p>
		</div>
	</div>
</template>
<script>
export default {
    name: 'aboutus',
    props: ['imageAbout','text'],
  }
</script>