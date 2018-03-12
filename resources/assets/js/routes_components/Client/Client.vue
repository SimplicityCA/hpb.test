<template>
    <div class="container-fluid">
        <div class="row">
            <img v-if="header.image" v-bind:src="`/img/${header.image}`" />
            <p>{{header.title}}</p>
            <p>{{header.subtitle}}</p>
            <h2>CONVIÉRTETE EN DISTRIBUIDOR</h2>
            <div class="col-sm-6">
              <img v-if="description.image" v-bind:src="`/img/${description.image}`" />
            </div>
            <div class="col-sm-6">
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
