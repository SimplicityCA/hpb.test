<template>
    <div class="container-fluid">
        <div class="row">
            <img v-if="header.image" v-bind:src="`/img/${header.image}`" />
            <p>{{header.title}}</p>
            <p>{{header.subtitle}}</p>
            <h2>TIPS DE INSTALACIÓN</h2>
            <div class="container">
              <div v-for="(tip, index) in tips" class="col-sm-4 col-xs-6">
                <h4>{{tip.title}}</h4>
                <img :src="'/img/'+tip.image" >
                <p>{{tip.description}}</p>
              </div>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    data () {
      return {
        header: [],
        tips: [],
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
      axios.get('api/tips')
      .then(function (response) {
        vm.tips = response.data;
      })
      .catch(function (error) {
        console.log(error);
      });
    }
  }
</script>
