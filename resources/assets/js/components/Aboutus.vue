<template>
	<div class="block-container">
		<div class="col-sm-6">
			<img v-if="imageAbout" :src="'/img/'+imageAbout" >
		</div>
		<div class="col-sm-6">
			<h2>QUIÉNES SOMOS</h2>
			<p>{{text}}</p>
		</div>
	</div>
</template>
<script>
export default {
    name: 'aboutus',
    props: ['imageAbout','text'],
  }
</script>