<template>
	<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">High Power Brake Logo</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="home-menu-item"><router-link :to="{ path: '/' }">Home</router-link></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><router-link :to="{ name: 'products', params: { product_id: 'carbon-performance' }}">Carbon Performance</router-link></li>
              <li><router-link :to="{ name: 'products', params: { product_id: 'ceramic-organic' }}">Ceramic Organic</router-link></li>
              <li><router-link :to="{ name: 'products', params: { product_id: 'brake-shoe' }}">Brake Shoe</router-link></li>
            </ul>
          </li>
          <li><router-link to="/client">Convi&eacute;rtete en Cliente</router-link></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Descargas<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/downloads/catalogoHPB2018.pdf" target="_blank">Cat&aacute;logo de Productos</a></li>
              <li><a href="/downloads/manual_tecnico_y_de_recomendaciones_high_power_brake.pdf" target="_blank">Manual T&eacute;cnico</a></li>
            </ul>
          </li>
          <li><router-link to="/tips">Tips de Instalaci&oacute;n</router-link></li>
          <li><router-link to="/localize">Encuéntranos</router-link></li>
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
  </nav>
</template>

<script>
  export default {
    name: 'site-menu'
  }
</script>
