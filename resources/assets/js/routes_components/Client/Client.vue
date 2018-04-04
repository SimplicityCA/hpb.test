<template>
    <div class="container-fluid client-form-page">
        <div class="row">
            <div class="header-text-container">
              <p class="header-title">{{header.title}}</p>
              <p class="header-subtitle">{{header.subtitle}}</p>
            </div>
            <img v-if="header.image" v-bind:src="`/img/${header.image}`" />
            <h2>CONVIÉRTETE EN <strong>DISTRIBUIDOR</strong></h2>
            <div class="col-sm-6 image-container">
              <img v-if="description.image" v-bind:src="`/img/${description.image}`" />
            </div>
            <div class="col-sm-6 form-container">
              <p>{{description.description}}</p>
              
              <client-form></client-form>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    data () {
      return {
        header: [],
        description: [],
      }
    },
    created(){
      const vm = this;
      axios.get('api/clientbanner')
      .then(function (response) {
        vm.header = response.data;
      })
      .catch(function (error) {
        console.log(error);
      });
      axios.get('api/clientdescription')
      .then(function (response) {
        vm.description = response.data;
      })
      .catch(function (error) {
        console.log(error);
      });
    }
  }
</script>
