<template>
    <div class="container-fluid">
        <div class="row">
            <home-carousel :images="images"></home-carousel>
            <aboutus :imageAbout="aboutusImage" :text="aboutusText"></aboutus>
            <certification :title="certificationTitle" :text="certificationText" :certifications="certifications"></certification>
            <home-products></home-products>
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
            certificationTitle: '',
            certificationText: '',
            certifications: []
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
          axios.get('api/certification')
          .then(function (response) {
            vm.certificationTitle = response.data.title;
            vm.certificationText = response.data.description;
          })
          .catch(function (error) {
            console.log(error);
          });
          axios.get('api/certificationsList')
          .then(function (response) {
            vm.certifications = response.data;
          })
          .catch(function (error) {
            console.log(error);
          });    
        }
    }
</script>
