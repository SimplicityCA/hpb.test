<template>
	<div>
		<form @submit.prevent="onSubmit">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="CI o Ruc" v-model="ruc" v-bind:class="{ 'error': formErrors.name }"  v-on:keyup="formErrors.ruc= '' "/>
					<span v-if="formErrors.ruc" class="text-danger">{{formErrors.ruc[0]}}</span>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Nombre del Almacén (Opcional)" v-model="storeName" v-bind:class="{ 'error': formErrors.storeName }"  v-on:keyup="formErrors.storeName= '' "/>
					<span v-if="formErrors.storeName" class="text-danger">{{formErrors.storeName[0]}}</span>
				</div>
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
					<input type="text" class="form-control" placeholder="Dirección" v-model="address" v-bind:class="{ 'error': formErrors.address }"  v-on:keyup="formErrors.address= '' "/>
					<span v-if="formErrors.address" class="text-danger">{{formErrors.address[0]}}</span>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Teléfono o Celular" v-model="phone" v-bind:class="{ 'error': formErrors.phone }"  v-on:keyup="formErrors.phone= '' "/>
					<span v-if="formErrors.phone" class="text-danger">{{formErrors.phone[0]}}</span>
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Mail" v-model="email" v-bind:class="{ 'error': formErrors.email }"  v-on:keyup="formErrors.email= '' "/>
					<span v-if="formErrors.email" class="text-danger">{{formErrors.email[0]}}</span>
				</div>
				<div class="form-group">
					<textarea class="form-control" placeholder="Mensaje" v-model="message" v-bind:class="{ 'error': formErrors.message }"  v-on:keyup="formErrors.message= '' "/></textarea>
					<span v-if="formErrors.message" class="text-danger">{{formErrors.message[0]}}</span> 
				</div>
				<div class="form-group">
					<button class="btn btn-primary">Enviar</button>
					<div class="download-file-container">
  					<a class="download-file" href="#">Catálogo Digital High Power Brake
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 486.619 486.619" width="45" height="45"><path d="M470.481 211.25H314.28l-27.912 27.896c-1.641 1.646-3.468 3.018-5.311 4.381H454.34v107.525l-16.752-58.983a16.14 16.14 0 0 0-15.524-11.726H80.694V190.58h92.42l-26.241-26.249c-1.892-1.875-3.529-3.915-5.028-6.028H64.557c-8.92 0-16.139 7.227-16.139 16.139v105.902H16.141a16.131 16.131 0 0 0-12.875 6.406 16.119 16.119 0 0 0-2.648 14.145l46.526 162.178a27.618 27.618 0 0 0 26.548 20.003H459c15.253 0 27.619-12.365 27.619-27.619V227.389c0-8.913-7.219-16.139-16.138-16.139z" fill="#ee482d"/><path d="M244.556 216.371a13.37 13.37 0 0 0 9.473 3.934c3.436 0 6.871-1.315 9.473-3.934l74.955-74.931a13.393 13.393 0 0 0 2.916-14.595 13.433 13.433 0 0 0-12.389-8.282h-32.75v-97.17c0-9.866-7.99-17.85-17.855-17.85H229.68c-9.851 0-17.824 7.983-17.824 17.85v97.17h-32.768c-5.406 0-10.275 3.271-12.355 8.282a13.332 13.332 0 0 0 2.9 14.595l74.923 74.931z" fill="#ee482d"/></svg>
              <small>Descargar</small>
  					</a>
					</div>
					<pulse-loader :loading="loading" :color="color" ></pulse-loader>
				</div>
		</form>
	</div>
</template>
<script>
export default {
    name: 'client-form',
    data(){
    	return{
    		ruc: '',
    		storeName: '',
    		name: '',
    		lastName: '',
    		city: '',
    		address: '',
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
    		axios.post('api/client', {
    			ruc: vm.ruc,
    			storeName: vm.storeName,
			    name: vm.name,
			    lastName: vm.lastName,
			    city: vm.city,
			    address: vm.address,
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
			    	vm.ruc = '';
				  	vm.storeName = '';
				    vm.name = '';
				    vm.lastName = '';
				    vm.city = '';
				    vm.address = '';
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