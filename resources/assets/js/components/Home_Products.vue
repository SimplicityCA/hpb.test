<template>
	<div class="block-container">
		<carousel>
		  <slide>
		    Slide 1 Content
		  </slide>
		  <slide>
		    Slide 2 Content
		  </slide>
		  <slide>
		    Slide 3 Content
		  </slide>
		</carousel>
	</div>
</template>
<script>
export default {
    name: 'home-products',
    props: ['imageAbout','text'],
  }
</script>