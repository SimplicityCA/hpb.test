    if (this.viewportHeight < 500) {
      this.startParallaxPosition = this.viewportHeight/1.6;
    }
    else if (this.viewportHeight >= 500 && this.viewportHeight < 655) {
      this.startParallaxPosition = this.viewportHeight/2.9;
    }
    else if (this.viewportHeight >= 655) {
      this.startParallaxPosition = 10;
    }


    // 500, 655, 655 + viewportHeight
    // 550, 750, 1000 + windowWidth

    // if (this.viewportHeight < 500 && this.windowWidth > 1000)
    // 	// desktop alargado

    // if (this.viewportHeight < 500 && this.windowWidth < 1000)
      // desktop

    if (this.viewportHeight < 500 && this.windowWidth < 550) {
      //Mobile seguro, start prllx from init
    }

    if (this.viewportHeight < 500 && this.windowWidth < 750) {
      //Dudoso, start prllx en medio del scroll del total disponible dado por this.viewportHeight
    }

    if (this.viewportHeight < 500 && this.windowWidth < 1000) {
      //Dudoso, start prllx en medio del scroll del total disponible dado por this.viewportHeight (Mismo q arriba)
    }

    if (this.viewportHeight < 500 && this.windowWidth > 1000) {
      //Dudoso, start prllx en 2 terceras partes del scroll del total disponible dado por this.viewportHeight
    }

    if (this.viewportHeight < 655 && this.windowWidth < 550) {
      //Mobile seguro vertical casi cuadrado, start prllx from init
    }

    if (this.viewportHeight < 655 && this.windowWidth < 750) {
      //Mobile tablet, empezar animacion a un tercio de init o algo menos
    }

    if (this.viewportHeight < 655 && this.windowWidth < 1000) {
      //Tablet vertical o parecido, espere a 2/3 o algo mas de un medio para animar el parallax
    }

    if (this.viewportHeight < 655 && this.windowWidth > 1000) {
      //Tablet vertical o parecido, parecido a lo q esta ahora
      // this.startParallaxPosition = this.viewportHeight/1.6;
    }

    if (this.viewportHeight > 655 && this.windowWidth < 550) {
      //Mobile seguro vertical casi cuadrado, start prllx from init
    }

    if (this.viewportHeight > 655 && this.windowWidth < 750) {
      //Tablet larga, empiece prllx desde 1 cuarto o menos.
    }

    if (this.viewportHeight > 655 && this.windowWidth < 1000) {
      //Tablet casi cuadrada, empiece desde init.
    }

    if (this.viewportHeight > 655 && this.windowWidth > 1000) {
      //Desktop largo y alto empiece a un tercio o similar.
    }
