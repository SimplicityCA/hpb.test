<template>
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li v-for="(image, index) in images" data-target="#myCarousel" :data-slide-to="index" v-bind:class="{ active: index === 0 }" :key="index"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div v-for="(image, index) in images" class="item" v-bind:class="{ active: index === 0 }" :key="index">
          <img class="first-slide" :src="'/img/'+image.image" :alt="image.title">
          <div class="container">
            <div class="carousel-caption">
              <h1>{{image.title}}</h1>
              <p>{{image.subtitle}}</p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
</template>
<script>
export default {
    name: 'home-carousel',
    props: ['images'],
  }
</script>