<template>
	<div>
		<div class="block-container certifications-box">
			<div class="col-sm-4">
				<h2 v-html="title"></h2>
			</div>
			<div class="col-sm-8">
				<p>{{text}}</p>
			</div>	
		</div>
		<div class="block-container">
			<div v-for="(certification, index) in certifications" class="col-md-2 col-sm-4 col-xs-6">
				<img :src="'/img/'+certification.image" >
				<h4>{{certification.name}}</h4>
				<p>{{certification.description}}</p>
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