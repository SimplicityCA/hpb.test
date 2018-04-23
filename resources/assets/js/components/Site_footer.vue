<template>
	<footer>
    <div class="container-fluid">
      <div class="footer-container">
        <div class="footer-rows-container">
          <div class="footer-rows-container__row">
            <div class="footer-rows-container__row-title"><router-link to="/">Home</router-link></div>
          </div>
          <div class="footer-rows-container__row">
            <div class="footer-rows-container__row-title">Productos</div>
            <ul class="footer-rows-container__row-list">
              <li><a href="#/products/carbon-performance" class="">Carbon Performance</a></li>
              <li><a href="#/products/ceramic-organic" class="">Ceramic Organic</a></li>
              <li><a href="#/products/brake-shoe" class="">Brake Shoe</a></li>
            </ul>
          </div>
          <div class="footer-rows-container__row">
            <div class="footer-rows-container__row-title"><router-link to="/client">Convi&eacute;rtete en Cliente</router-link></div>
          </div>
          <div class="footer-rows-container__row">
            <div class="footer-rows-container__row-title">Descargas</div>
            <ul class="footer-rows-container__row-list">
              <li><a href="/downloads/catalogoHPB2018.pdf" target="_blank">Catálogo de Productos</a></li>
              <li><a href="/downloads/manual_tecnico_y_de_recomendaciones_high_power_brake.pdf" target="_blank">Manual Técnico</a></li>
            </ul>
          </div>
          <div class="footer-rows-container__row">
            <div class="footer-rows-container__row-title"><router-link to="/tips">Tips de Instalaci&oacute;n</router-link></div>
          </div>
        </div>
        <div class="footer-bottom-copy">
          © 2018 High Power Brake - Un producto de Importadora Dávila. Todos los derechos reservados.
        </div>
      </div>
    </div><!--/.container-fluid -->
  </footer>
</template>

<script>
  export default {
    name: 'site-menu'
  }
</script>
