<template>
	<div class="block-content contact-form">
		<div class="container">
			<h2>MÁS <strong>INFORMACIÓN</strong></h2>
			<form @submit.prevent="onSubmit">
				<div class="col-sm-5 col-sm-offset-1">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Nombre" v-model="name" v-bind:class="{ 'error': formErrors.name }"  v-on:keyup="formErrors.name= '' "/>
						<span v-if="formErrors.name" class="text-danger">{{formErrors.name[0]}}</span>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Apellido" v-model="lastName" v-bind:class="{ 'error': formErrors.lastName }"  v-on:keyup="formErrors.lastName= '' "/>
						<span v-if="formErrors.lastName" class="text-danger">{{formErrors.lastName[0]}}</span>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Ciudad" v-model="city" v-bind:class="{ 'error': formErrors.city }"  v-on:keyup="formErrors.city= '' "/>
						<span v-if="formErrors.city" class="text-danger">{{formErrors.city[0]}}</span>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Mail" v-model="email" v-bind:class="{ 'error': formErrors.email }"  v-on:keyup="formErrors.email= '' "/>
						<span v-if="formErrors.email" class="text-danger">{{formErrors.email[0]}}</span>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Teléfono" v-model="phone" v-bind:class="{ 'error': formErrors.phone }"  v-on:keyup="formErrors.phone= '' "/>
						<span v-if="formErrors.phone" class="text-danger">{{formErrors.phone[0]}}</span>
					</div>
				</div>
				<div class="col-sm-5">
					<div class="form-group">
						<textarea class="form-control" placeholder="Mensaje" v-model="message" v-bind:class="{ 'error': formErrors.message }"  v-on:keyup="formErrors.message= '' "/></textarea>
						<span v-if="formErrors.message" class="text-danger">{{formErrors.message[0]}}</span> 
					</div>
				</div>
				<div class="col-sm-10 col-sm-offset-1">
					<div class="form-group">
						<button class="btn btn-primary">Enviar</button>
						<pulse-loader :loading="loading" :color="color" ></pulse-loader>
					</div>
				</div>
			</form>
		</div>
	</div>
</template>
<script>
export default {
    name: 'contact-form',
    data(){
    	return{
    		name: '',
    		lastName: '',
    		city: '',
    		email: '',
    		phone: '',
    		message: '',
    		formErrors: [],
    		loading: false,
    		color: '#ee482d'
    	}
    },
    methods:{
    	onSubmit(){
    		const vm = this;
    		this.loading = true;
    		axios.post('api/contact', {
			    name: vm.name,
			    lastName: vm.lastName,
			    city: vm.city,
			    email: vm.email,
			    phone: vm.phone,
			    message: vm.message,
			  })
			  .then(function (response) {
			  	vm.loading = false;
			  	if(response.data.name == undefined){
			    	vm.$swal({
						  type: 'error',
						  title: 'Lo sentimos...',
						  text: 'Ha ocurrido un error. Por favor intenta nuevamente más tarde o comunícate al (02)2416161',
						});
			    }
			    else{
			    	vm.name = '';
				    vm.lastName = '';
				    vm.city = '';
				    vm.email = '';
				    vm.phone = '';
				    vm.message = '';
				    vm.$swal('¡Gracias por contactarte!',
						  'Pronto nos pondremos en contacto contigo',
						  'success');
			    }
			  })
			  .catch(function (error) {
			  	vm.loading = false;
			    vm.formErrors = error.response.data.errors;
			  });
    	}
    }
  }
</script>