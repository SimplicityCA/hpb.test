<template>
	<div class="certifications-box">
		<div class="block-container certifications-box__header">
			<div class="">
				<h2 v-html="title"></h2>
			</div>
			<div class="">
				<p v-html="text"></p>
			</div>	
		</div>
		<div class="container certifications-box__content">
			<div v-for="(certification, index) in certifications" class="col-md-2 col-sm-4 col-xs-6">
				<img :src="'/img/'+certification.image" >
				<h4>{{certification.name}}</h4>
				<p v-html="certification.description"></p>
			</div>
		</div>
	</div>
</template>
<script>
export default {
    name: 'certification',
    props: ['certifications','text','title'],
    data(){
    	return{
    		data () {
			  },
    	}
    }
  }
</script>