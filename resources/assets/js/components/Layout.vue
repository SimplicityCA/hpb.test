<template>
  <div>
    <md-tabs md-sync-route>
      <md-tab id="tab-home" md-label="Home" to="/home"></md-tab>
      <md-tab id="tab-posts" md-label="Producto 1" to="/product/1"></md-tab>
      <md-tab id="tab-posts2" md-label="Producto 2" to="/product/2"></md-tab>
      <md-tab id="tab-downloads" md-label="Descargas" to="/downloads"></md-tab>
      <md-tab id="tab-tips" md-label="Tips" to="/tips"></md-tab>
      <md-tab id="tab-contact" md-label="Contáctanos" to="/contact"></md-tab>
    </md-tabs>
    <md-menu md-size="medium" md-align-trigger>
      <md-button md-menu-trigger>Align with trigger</md-button>

      <md-menu-content>
        <md-menu-item to="/product/2">My Item 3</md-menu-item>
      </md-menu-content>
    </md-menu>
    <md-list md-sync-route>
      <md-button to="/home">
        <md-list-item>
          <md-icon>home</md-icon>
          <span class="md-list-item-text">Home</span>
        </md-list-item>
      </md-button>
      <md-button to="/downloads">
        <md-list-item>
          <md-icon>language</md-icon>
          <span class="md-list-item-text">Descargas</span>
        </md-list-item>
      </md-button>
    </md-list>
  </div>
</template>

<script>
  export default {
    name: 'layout'
  }
</script>