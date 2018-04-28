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
              <div v-cloak class="product-page__animation-container carbon-performance" id="product-animation" v-bind:class="{ withoutParallax: withoutParallax}">
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
              <div v-cloak class="product-page__animation-container ceramic-organic" id="product-animation" v-bind:class="{ withoutParallax: withoutParallax}">
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
              <div v-cloak class="product-page__animation-container brake-shoe" id="product-animation" v-bind:class="{ withoutParallax: withoutParallax}">
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
        positionOfAnimationScroll: 0,
        startParallaxPosition: 260,
        documentHeight: 0,
        availableSpaceToScroll: 0,
        withoutParallax: false
      }
  },
  mounted(){
    const vm = this;
    axios.get('/api/product/'+this.id)
    .then(function (response) {
      vm.product = response.data;
    })
    .catch(function (error) {
      console.log(error);
    });

    var scrollableProductAnimation = document.getElementById("product-animation");
    scrollableProductAnimation.addEventListener('scroll', this.handleScrollEl);
    this.viewportHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
    this.windowWidth = document.documentElement.clientWidth;
    // console.log('prevScrollValue: ' + this.prevScrollValue);
    var bodyElement = document.body;
    var htmlElement = document.documentElement;

    this.documentHeight = Math.max( bodyElement.scrollHeight, bodyElement.offsetHeight, htmlElement.clientHeight, htmlElement.scrollHeight, htmlElement.offsetHeight );
    this.availableSpaceToScroll = this.documentHeight - this.viewportHeight;
    
    if (this.availableSpaceToScroll <= 100) {
      this.withoutParallax = true;
      console.log('Muy poco espacio para scroll, withoutParallax: ' + this.withoutParallax);
    } else {
      console.log('Espacio amplio para scroll, withoutParallax: ' + this.withoutParallax);
    }

    console.log('!!!!! main measurements: viewportHeight: ' + this.viewportHeight + ' windowWidth: ' + this.windowWidth + ' documentHeight: ' + this.documentHeight + ' availableSpaceToScroll: ' + this.availableSpaceToScroll);

    this.$nextTick(function() {
      window.addEventListener('resize', this.getWindowWidth);
      window.addEventListener('resize', this.getWindowHeight);

      //Init
      this.getWindowWidth()
      this.getWindowHeight()
    })

    // Add code below to check if window width is at tablets and mobile size and if that's the case scroll parallax from the beginning.

    // Code working ok for desktops 1100px >
    // if (this.viewportHeight < 500) {
    //   this.startParallaxPosition = this.viewportHeight/1.6;
    // }
    // else if (this.viewportHeight >= 500 && this.viewportHeight < 655) {
    //   this.startParallaxPosition = this.viewportHeight/2.9;
    // }
    // else if (this.viewportHeight >= 655) {
    //   this.startParallaxPosition = 10;
    // }



    // New Logic
    if (this.viewportHeight < 500 && this.windowWidth < 550) {
      //Mobile seguro, start prllx from init
      this.startParallaxPosition = 10;
      console.log('case number: ' + '1' + '-- viewportHeight: ' + this.viewportHeight + ' -- windowWidth: ' + this.windowWidth);
    } else if (this.viewportHeight < 500 && this.windowWidth < 750) {
      //Dudoso, start prllx en medio del scroll del total disponible dado por this.viewportHeight
      this.startParallaxPosition = this.viewportHeight/3.2;
      console.log('case number: ' + '2' + '-- viewportHeight: ' + this.viewportHeight + ' -- windowWidth: ' + this.windowWidth);
    } else if (this.viewportHeight < 500 && this.windowWidth < 1000) {
      //Dudoso, start prllx en medio del scroll del total disponible dado por this.viewportHeight (Mismo q arriba)
      this.startParallaxPosition = this.viewportHeight/2.88;
      console.log('case number: ' + '3' + '-- viewportHeight: ' + this.viewportHeight + ' -- windowWidth: ' + this.windowWidth);
    } else if (this.viewportHeight < 500 && this.windowWidth > 1000) {
      //Dudoso, start prllx en 2 terceras partes del scroll del total disponible dado por this.viewportHeight
      this.startParallaxPosition = this.viewportHeight/2.8;
      console.log('case number: ' + '4' + '-- viewportHeight: ' + this.viewportHeight + ' -- windowWidth: ' + this.windowWidth);
    } else if (this.viewportHeight < 655 && this.windowWidth < 550) {
      //Mobile seguro vertical casi cuadrado, start prllx from init
      this.startParallaxPosition = 50;
      console.log('case number: ' + '5' + '-- viewportHeight: ' + this.viewportHeight + ' -- windowWidth: ' + this.windowWidth);
    } else if (this.viewportHeight < 655 && this.windowWidth < 750) {
      //Mobile tablet, empezar animacion a un tercio de init o algo menos
      this.startParallaxPosition = this.viewportHeight/6;
      console.log('case number: ' + '6' + '-- viewportHeight: ' + this.viewportHeight + ' -- windowWidth: ' + this.windowWidth);
    } else if (this.viewportHeight < 655 && this.windowWidth < 1000) {
      //Tablet vertical o parecido, espere a 2/3 o algo mas de un medio para animar el parallax !!! Could be refined!!!
      this.startParallaxPosition = this.viewportHeight/2.9;
      console.log('case number: ' + '7' + '-- viewportHeight: ' + this.viewportHeight + ' -- windowWidth: ' + this.windowWidth);
    } else if (this.viewportHeight < 655 && this.windowWidth > 1000) {
      //Tablet vertical o parecido, parecido a lo q esta ahora
      this.startParallaxPosition = this.viewportHeight/3.5;
      console.log('case number: ' + '8' + '-- viewportHeight: ' + this.viewportHeight + ' -- windowWidth: ' + this.windowWidth);
    } else if (this.viewportHeight > 655 && this.windowWidth < 550) {
      //Mobile seguro vertical casi cuadrado, start prllx from init
      this.startParallaxPosition = 10;
      console.log('case number: ' + '9' + '-- viewportHeight: ' + this.viewportHeight + ' -- windowWidth: ' + this.windowWidth);
    } else if (this.viewportHeight > 655 && this.windowWidth < 750) {
      //Tablet larga, empiece prllx desde 1 cuarto o menos.
      this.startParallaxPosition = 10;
      console.log('case number: ' + '10' + '-- viewportHeight: ' + this.viewportHeight + ' -- windowWidth: ' + this.windowWidth);
    } else if (this.viewportHeight > 655 && this.windowWidth < 1000) {
      //Tablet casi cuadrada, empiece desde init. // !!! IPAD not working properly !!!
      this.startParallaxPosition = 100;
      console.log('case number: ' + '11' + '-- viewportHeight: ' + this.viewportHeight + ' -- windowWidth: ' + this.windowWidth);
    } else if (this.viewportHeight > 655 && this.windowWidth > 1000) {
      //Desktop largo y alto empiece a un tercio o similar. // !!! IPAD PRO not working properly !!!
      // this.startParallaxPosition = this.viewportHeight/8;
      this.startParallaxPosition = 200;
      console.log('case number: ' + '12' + '-- viewportHeight: ' + this.viewportHeight + ' -- windowWidth: ' + this.windowWidth);
    }
    // End of New Logic

    console.log('startParallaxPosition: ' + this.startParallaxPosition);
    window.addEventListener('scroll', this.handleScroll);
  },
  methods: {
    handleScroll (event) {
      // console.log('window scroll ' + window.scrollY);
      // console.log('ID scroll ' + document.getElementById("product-animation").scrollTop);
      // console.log('previous viewportHeight:' + this.viewportHeight);
      console.log("withoutParallax on scroll: " + this.withoutParallax);

      this.viewportHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
      console.log('Window scroll: ' + window.scrollY);
      console.log('new viewportHeight:' + this.viewportHeight);
      var productAnimationEl = document.querySelectorAll('#product-animation div.product-page__animation-wrapper');
      productAnimationEl = productAnimationEl[0];

      // var productAnimationElHeight = Math.max( productAnimationEl.scrollHeight, productAnimationEl.offsetHeight );
      var productAnimationElHeight = ( productAnimationEl.offsetHeight );

      this.positionOfAnimationScroll = window.scrollY*((productAnimationElHeight + this.startParallaxPosition)/this.viewportHeight);
      var scrollingSpeedForAnimation = productAnimationElHeight/this.viewportHeight;

      var prevAnimationScrollTop = document.getElementById("product-animation").scrollTop;
      var newAnimationScrollTop = document.getElementById("product-animation").scrollTop;

      console.log('document.getElementById("product-animation").scrollTop: ' + document.getElementById("product-animation").scrollTop);

      // New Code

      // End of New Code

      // User is scrolling down
      if (window.scrollY > this.prevScrollValue) {
        this.scrollDirection = 'down';
        console.log('DOWN DOWN DOWN------------------');
        if (window.scrollY <= (this.viewportHeight + this.startParallaxPosition) && window.scrollY >= this.startParallaxPosition) {

          // Esta formula sirve siempre y cuando al menos exista 
          // un tamanio igual a (productAnimationElHeight + this.startParallaxPosition) 
          // para hacer scroll extra del viewportHeight, si no hay.
          // la formula q debe usarse seria:

          if (this.availableSpaceToScroll >= (productAnimationElHeight + this.startParallaxPosition)) {
            this.positionOfAnimationScroll = (window.scrollY - this.startParallaxPosition)*((productAnimationElHeight + this.startParallaxPosition)/this.viewportHeight);
          } else {
            this.positionOfAnimationScroll = (window.scrollY - this.startParallaxPosition)*((productAnimationElHeight + this.startParallaxPosition)/this.availableSpaceToScroll);
          }



          console.log('positionOfAnimationScroll: ' + this.positionOfAnimationScroll);
          // document.getElementById("product-animation").scrollTop += (this.positionOfAnimationScroll - document.getElementById("product-animation").scrollTop);
          newAnimationScrollTop = document.getElementById("product-animation").scrollTop + (this.positionOfAnimationScroll - document.getElementById("product-animation").scrollTop);

          if (newAnimationScrollTop > prevAnimationScrollTop) {
            document.getElementById("product-animation").scrollTop += (this.positionOfAnimationScroll - document.getElementById("product-animation").scrollTop);
          } 
        }
      }

      // User is scrolling up
      if (window.scrollY < this.prevScrollValue) {
        this.scrollDirection = 'up';
        console.log('UP UP UP------------------');
        if (window.scrollY <= (this.viewportHeight + this.startParallaxPosition) && window.scrollY >= this.startParallaxPosition) {
          

          // Esta formula sirve siempre y cuando al menos exista 
          // un tamanio igual a (productAnimationElHeight + this.startParallaxPosition) 
          // para hacer scroll extra del viewportHeight, si no hay.
          // la formula q debe usarse seria:

          if (this.availableSpaceToScroll >= (productAnimationElHeight + this.startParallaxPosition)) {
            this.positionOfAnimationScroll = (window.scrollY - this.startParallaxPosition)*((productAnimationElHeight + this.startParallaxPosition)/this.viewportHeight);
          } else {
            this.positionOfAnimationScroll = (window.scrollY - this.startParallaxPosition)*((productAnimationElHeight + this.startParallaxPosition)/this.availableSpaceToScroll);
          }

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
      if (this.viewportHeight != Math.max(document.documentElement.clientHeight, window.innerHeight || 0)) {
        this.viewportHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
        console.log('!!! New viewportHeight: ' + this.viewportHeight);
      }

      var bodyElement = document.body;
      var htmlElement = document.documentElement;

      this.documentHeight = Math.max( bodyElement.scrollHeight, bodyElement.offsetHeight, htmlElement.clientHeight, htmlElement.scrollHeight, htmlElement.offsetHeight );
      this.availableSpaceToScroll = this.documentHeight - this.viewportHeight;
      console.log('!!!!! main measurements: viewportHeight: ' + this.viewportHeight + ' windowWidth: ' + this.windowWidth + ' documentHeight: ' + this.documentHeight + ' availableSpaceToScroll: ' + this.availableSpaceToScroll);
    },
    getWindowHeight(event) {
      this.windowHeight = document.documentElement.clientHeight;
    }
  },
  beforeDestroy() {
    window.removeEventListener('resize', this.getWindowWidth);
    window.removeEventListener('resize', this.getWindowHeight);

    var scrollableProductAnimation = document.getElementById("product-animation");
    if(scrollableProductAnimation != undefined)
    {
      scrollableProductAnimation.removeEventListener('scroll', this.handleScrollEl); 
    }
    window.removeEventListener('scroll', this.handleScroll);
  },
  created(){
    // if (this.viewportHeight < 500) {
    //   this.startParallaxPosition = 270;
    // }
    // else if (this.viewportHeight > 500 && this.viewportHeight < 650) {
    //   this.startParallaxPosition = 250;
    // }
    // else if (this.viewportHeight >= 650 && this.viewportHeight < 750) {
    //   this.startParallaxPosition = 250;
    // }
  },
  destroyed(){
    
  }
}
</script>
