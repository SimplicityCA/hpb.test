<template>
	<div>
		<div class="col-sm-6">
			<img :src="'/img/'+image" class="img-responsive" >
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
    props: ['image','text'],
    data(){
    	return{
    		data () {
			  },
    	}
    }
  }
</script>