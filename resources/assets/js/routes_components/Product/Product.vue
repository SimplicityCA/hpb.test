<template>
    <div class="container-fluid product-page">
        <div class="row">
            <div class="product-page__top-section">
              <div class="header-text-container">
                <p class="header-title">{{product.title}}</p>
                <p class="header-subtitle">{{product.subtitle}}</p>
              </div>
            </div>
            <img v-if="product.header_image" v-bind:src="`/img/${product.header_image}`" />
            <template v-if="$route.params.product_id === 'carbon-performance'">
              <div v-cloak class="product-page__animation-container carbon-performance" id="product-animation">
                <div class="product-page__animation-wrapper">
                  <div v-bind:class="{ animated: animateFirstImage}">
                    <div class="product-page__animation-item-container">
                      <div class="product-page__image-text">Backing plate de hierro</div>
                      <div class="product-page__image-wrapper"><div class="product-page__image"></div></div>
                    </div>
                  </div>
                  <div v-bind:class="{ animated: animateSecondImage}">
                    <div class="product-page__animation-item-container">
                      <div class="product-page__image-text">Shim de aluminio</div>
                      <div class="product-page__image-wrapper"><div class="product-page__image"></div></div>
                    </div>
                  </div>
                  <div v-bind:class="{ animated: animateThirdImage}">
                    <div class="product-page__animation-item-container">
                      <div class="product-page__image-text">Material de fricción de primera calidad</div>
                      <div class="product-page__image-wrapper"><div class="product-page__image"></div></div>
                    </div>
                  </div>
                </div>
              </div>
            </template>
            <template v-if="$route.params.product_id === 'ceramic-organic'">
              <div v-cloak class="product-page__animation-container ceramic-organic" id="product-animation">
                <div class="product-page__animation-wrapper">
                  <div v-bind:class="{ animated: animateFirstImage}">
                    <div class="product-page__animation-item-container">
                      <div class="product-page__image-text">Backing plate de hierro</div>
                      <div class="product-page__image-wrapper"><div class="product-page__image"></div></div>
                    </div>
                  </div>
                  <div v-bind:class="{ animated: animateSecondImage}">
                    <div class="product-page__animation-item-container">
                      <div class="product-page__image-text">Shim de aluminio</div>
                      <div class="product-page__image-wrapper"><div class="product-page__image"></div></div>
                    </div>
                  </div>
                  <div v-bind:class="{ animated: animateThirdImage}">
                    <div class="product-page__animation-item-container">
                      <div class="product-page__image-text">Material cerámico orgánico que cuida el medio ambiente</div>
                      <div class="product-page__image-wrapper"><div class="product-page__image"></div></div>
                    </div>
                  </div>
                </div>
              </div>
            </template>
            <template v-if="$route.params.product_id === 'brake-shoe'">
              <div v-cloak class="product-page__animation-container brake-shoe" id="product-animation">
                <div class="product-page__animation-wrapper">
                  <div v-bind:class="{ animated: animateFirstImage}">
                    <div class="product-page__animation-item-container">
                      <div class="product-page__image-text">Backing plate de hierro</div>
                      <div class="product-page__image-wrapper"><div class="product-page__image"></div></div>
                    </div>
                  </div>
                  <div v-bind:class="{ animated: animateSecondImage}">
                    <div class="product-page__animation-item-container">
                      <div class="product-page__image-text"></div>
                      <div class="product-page__image-wrapper"><div class="product-page__image"></div></div>
                    </div>
                  </div>
                  <div v-bind:class="{ animated: animateThirdImage}">
                    <div class="product-page__animation-item-container">
                      <div class="product-page__image-text">Material de fricción de alta duración</div>
                      <div class="product-page__image-wrapper"><div class="product-page__image"></div></div>
                    </div>
                  </div>
                </div>
              </div>
            </template>
            <div class="product-page__product-details-container">
              <div class="product-page__download-container">
                <div class="download-file-container">
                  <a class="download-file" href="/downloads/catalogoHPB2018.pdf" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 152 152" width="120" height="120"><path class="icon-bg" fill="#ee482d" d="M0 0h152v152H0z"/><path class="icon-figure" d="M63.5 56.8c.3-.8 1.1-1.4 2-1.4h5.4V39.6c0-1.6 1.3-2.9 2.9-2.9h8c1.6 0 2.9 1.3 2.9 2.9v15.9H90c.9 0 1.7.5 2 1.4.3.8.2 1.8-.5 2.4L79.3 71.4c-.4.4-1 .6-1.5.6-.6 0-1.1-.2-1.5-.6L64 59.2c-.7-.6-.9-1.6-.5-2.4zm52.3 53.7c0 2.5-2 4.5-4.5 4.5h-63c-2 0-3.8-1.3-4.3-3.3l-7.6-26.5c-.2-.8-.1-1.7.4-2.3.5-.7 1.3-1 2.1-1h5.3V64.6c0-1.5 1.2-2.6 2.6-2.6h12.6c.2.3.5.7.8 1l4.3 4.3H49.4V82h55.8c1.2 0 2.2.8 2.5 1.9l2.7 9.6V75.9H82.2c.3-.2.6-.4.9-.7l4.6-4.6h25.5c1.5 0 2.6 1.2 2.6 2.6v37.3z" fill="#fff"/></svg>
                    <strong>Catálogo Digital</strong><div>High Power Brake</div>
                    <small>Descargar</small>
                  </a>
                </div>
              </div>
              <div class="product-page__product-details-container container">
                <div class="product-page__product-details-content">
                  <div class="product-page__product-image">
                    <img v-if="product.description_image" v-bind:src="`/img/${product.description_image}`" />
                  </div>
                  <div class="product-page__product-info">
                    <div v-html="product.characteristics"></div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  data () {
      return {
        id: this.$route.params.product_id,
        product: [],
        prevScrollValue: window.scrollY,
        scrollDirection: 'down',
        animateFirstImage: false,
        animateSecondImage: false,
        animateThirdImage: false,
        viewportHeight: 0,
        windowWidth: 0,
        windowHeight: 0,
        positionOfAnimationScroll: 0
      }
  },
  mounted(){
    const vm = this;
    axios.get('api/product/'+this.id)
    .then(function (response) {
      vm.product = response.data;
    })
    .catch(function (error) {
      console.log(error);
    });
    // document.querySelector('#product-animation').addEventListener('scroll', function() {
    //   alert('you scrolled');
    // });
    var scrollableProductAnimation = document.getElementById("product-animation");
    scrollableProductAnimation.addEventListener('scroll', this.handleScrollEl);
    this.viewportHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
    // console.log('prevScrollValue: ' + this.prevScrollValue);

    this.$nextTick(function() {
      window.addEventListener('resize', this.getWindowWidth);
      window.addEventListener('resize', this.getWindowHeight);

      //Init
      this.getWindowWidth()
      this.getWindowHeight()
    })
  },
  methods: {
    handleScroll (event) {
      // console.log('window scroll ' + window.scrollY);
      // console.log('ID scroll ' + document.getElementById("product-animation").scrollTop);
      // console.log('previous viewportHeight:' + this.viewportHeight);
      this.viewportHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
      console.log('Window scroll: ' + window.scrollY);
      console.log('new viewportHeight:' + this.viewportHeight);
      var productAnimationEl = document.querySelectorAll('#product-animation div.product-page__animation-wrapper');
      productAnimationEl = productAnimationEl[0];

      var productAnimationElHeight = Math.max( productAnimationEl.scrollHeight, productAnimationEl.offsetHeight );

      this.positionOfAnimationScroll = window.scrollY*(productAnimationElHeight/this.viewportHeight);

      // New Code

      // End of New Code

      // var body = document.body,
      // html = document.documentElement;

      // var bodyHeight = Math.max( body.scrollHeight, body.offsetHeight, 
      //                html.clientHeight, html.scrollHeight, html.offsetHeight );
      // // console.log('body all height: ' + bodyHeight);

      // var productAnimationEl = document.getElementById("product-animation");

      // var productAnimationElHeight = Math.max( productAnimationEl.scrollHeight, productAnimationEl.offsetHeight );

      // //Elements needed for getting animation done completely

      // // Product Details
      // var productDetailsEl = document.querySelectorAll('div.product-page__product-details-container');
      // productDetailsEl = productDetailsEl[0];
      // var productDetailsElHeight = productDetailsEl.offsetHeight;

      // // Contact Form
      // var contactFormEl = document.querySelectorAll('div.contact-form');
      // contactFormEl = contactFormEl[0];
      // var contactFormElHeight = contactFormEl.offsetHeight;

      // // Footer
      // var footerEl = document.querySelectorAll('footer');
      // footerEl = footerEl[0];
      // var footerElHeight = footerEl.offsetHeight;

      // // console.log('productDetailsElHeight: ' + productDetailsElHeight + ' contactFormElHeight: ' + contactFormElHeight + ' footerElHeight: ' + footerElHeight);

      // var spaceForTheWholeAnimationToHappen = productAnimationElHeight + contactFormElHeight + footerElHeight;
      // // console.log('All space below animation: ' + spaceForTheWholeAnimationToHappen);
      // spaceForTheWholeAnimationToHappen = bodyHeight - spaceForTheWholeAnimationToHappen + 300;
      // // console.log('Final space for the whole animation to happen: ' + spaceForTheWholeAnimationToHappen);

      // var animationContainerTotalScroll = (productAnimationElHeight - productAnimationEl.offsetHeight);
      // var windowViewportHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
      // // console.log('windowViewportHeight: ' + windowViewportHeight);

      // User is scrolling down
      if (window.scrollY > this.prevScrollValue) {
        this.scrollDirection = 'down';
        console.log('DOWN DOWN DOWN------------------');
        // console.log('Current scrollY minus prevScrollValue: ' + (window.scrollY - this.prevScrollValue));
        // console.log('animationContainerTotalScroll: ' + (animationContainerTotalScroll));
        // console.log('window Viewport height: ' + (windowViewportHeight));
        // console.log('Scroll direction is: ' + this.scrollDirection);
        // console.log('Scroll previous value is: ' + this.prevScrollValue);
        // document.getElementById("product-animation").scrollTop += 5;
        // console.log('animation container height: ' + document.getElementById("product-animation").offsetHeight);
        // console.log('product-animation height: ' + document.getElementById("product-animation").scrollTop);
        // All should show from scroll 0 to 610 no more
        // if (window.scrollY < (windowViewportHeight + 50)) {
        // if (document.getElementById("product-animation").scrollTop <= animationContainerTotalScroll) {
        //   document.getElementById("product-animation").scrollTop += (window.scrollY - this.prevScrollValue) + animationContainerTotalScroll/(windowViewportHeight - 30);
        // }
        if (window.scrollY <= this.viewportHeight) {
          console.log('positionOfAnimationScroll: ' + this.positionOfAnimationScroll);
          document.getElementById("product-animation").scrollTop += (this.positionOfAnimationScroll - document.getElementById("product-animation").scrollTop);
        }
      }

      // User is scrolling up
      if (window.scrollY < this.prevScrollValue) {
        this.scrollDirection = 'up';
        // console.log('Scroll direction is: ' + this.scrollDirection);
        // console.log('Scroll previous value is: ' + this.prevScrollValue);
        // document.getElementById("product-animation").scrollTop -= 5;
        console.log('UP UP UP------------------');
        // console.log('Current scrollY minus prevScrollValue: ' + (-1)*(window.scrollY - this.prevScrollValue));
        // console.log('animationContainerTotalScroll: ' + (animationContainerTotalScroll));
        // console.log('window Viewport height: ' + (windowViewportHeight));
        // // if (window.scrollY < (windowViewportHeight + )) {
        // if (document.getElementById("product-animation").scrollTop >= 0 && (window.scrollY < (windowViewportHeight + 60))) {
        //   document.getElementById("product-animation").scrollTop -= (-1)*(window.scrollY - this.prevScrollValue) + animationContainerTotalScroll/(windowViewportHeight - 100);
        // }
        if (window.scrollY <= this.viewportHeight) {
          console.log('scrollingUp: ' + this.positionOfAnimationScroll);
          document.getElementById("product-animation").scrollTop -= (document.getElementById("product-animation").scrollTop - this.positionOfAnimationScroll);
        }
      }

      this.prevScrollValue = window.scrollY;

      if (window.scrollY > 5) {
        this.animateFirstImage = true;
      }

      if (window.scrollY > 80) {
        this.animateSecondImage = true;
      }

      if (window.scrollY > 180) {
        this.animateThirdImage = true;
      }
    },
    handleScrollEl (event) {
      console.log('target ' + event.target.scrollTop);
      console.log('ID scroll ' + document.getElementById("product-animation").scrollTop);
    },
    getWindowWidth(event) {
      this.windowWidth = document.documentElement.clientWidth;
      console.log('windowWidth: ' + this.windowWidth);
    },
    getWindowHeight(event) {
      this.windowHeight = document.documentElement.clientHeight;
    }
  },
  beforeDestroy() {
    window.removeEventListener('resize', this.getWindowWidth);
    window.removeEventListener('resize', this.getWindowHeight);
  },
  created(){
    window.addEventListener('scroll', this.handleScroll);
  },
  destroyed(){
    var scrollableProductAnimation = document.getElementById("product-animation");
    scrollableProductAnimation.removeEventListener('scroll', this.handleScrollEl); 

    window.removeEventListener('scroll', this.handleScroll);
  }
}
</script>
