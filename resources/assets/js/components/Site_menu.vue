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
        <a class="navbar-brand" href="#">High Power Brake Logo</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Productos<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Carbon Performance</a></li>
              <li><a href="#">Ceramic Organic</a></li>
              <li><a href="#">Brake Shoe</a></li>
            </ul>
          </li>
          <li><a href="#">Cont&aacute;ctanos</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Descargas<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Cat&aacute;logo de Productos</a></li>
              <li><a href="#">Manual T&eacute;cnico</a></li>
            </ul>
          </li>
          <li><a href="#">Tips de Instalaci&oacute;n</a></li>
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
