<template>
    <div class="container-fluid">
        <div class="row">
            <carousel :images="images"></carousel>
            
        </div>
    </div>
</template>

<script>
    export default {
        data () {
          return {
            images: [],
          }
        },
        created(){
          const vm = this;
          axios.get('api/homepictures')
          .then(function (response) {
            vm.images = response.data;
          })
          .catch(function (error) {
            console.log(error);
          });    
        }
    }
</script>
