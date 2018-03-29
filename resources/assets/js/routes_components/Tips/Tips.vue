<template>
    <div class="container-fluid tips-page">
        <div class="row">
            <img v-if="header.image" v-bind:src="`/img/${header.image}`" />
            <div class="header-text-container">
              <p class="header-title">{{header.title}}</p>
              <p class="header-subtitle">{{header.subtitle}}</p>
            </div>
            <h2>TIPS DE <strong>INSTALACIÓN</strong></h2>
            <div class="container tips-container">
              <div v-for="(tip, index) in tips" class="tip-container col-sm-4 col-xs-6">
                <h4><strong>{{tip.title}}</strong></h4>
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
