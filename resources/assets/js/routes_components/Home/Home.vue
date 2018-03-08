<template>
    <div class="container-fluid">
        <div class="row">
            <carousel :images="images"></carousel>
            <aboutus :image="aboutusImage" :text="aboutusText"></aboutus>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
          return {
            images: [],
            aboutusImage: '',
            aboutusText: '',
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
          axios.get('api/aboutus')
          .then(function (response) {
            vm.aboutusImage = response.data.image;
            vm.aboutusText = response.data.description;
          })
          .catch(function (error) {
            console.log(error);
          });    
        }
    }
</script>
