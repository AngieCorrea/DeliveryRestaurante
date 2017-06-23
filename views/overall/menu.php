
 
<header class="conatiner">
		<nav class="navbar navbar-default" role="navigation">
			<!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">	
					<span class="sr-only">Desplegar navegación</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="?view=index">Eat Happy</a>
			</div>

			<!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Quienes Somos</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
          Restaurantes<b class="caret"></b>
       	 </a>
						<ul class="dropdown-menu">
							<li><a href="#">Teléfono</a></li>
							<li><a href="#">Twitter</a></li>
							<!--<li class="divider"></li>-->
							<li><a href="#">Facebook</a></li>
						</ul>
					</li>
					<li><a href="?view=restaurant">Mantenimiento de Resataurante</a></li>
				</ul>
				
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Buscar Restaurante">
					</div>
					<button type="submit" class="btn btn-default">Buscar</button>
				</form>

				<ul class="nav navbar-nav navbar-right">
					<li><a href="?view=formulario">Iniciar Sesión</a></li>
					<li class="dropdown">
						<ul class="dropdown-menu">
							<li><a href="#">Acción #1</a></li>
							<li><a href="#">Acción #2</a></li>
							<li><a href="#">Acción #3</a></li>
							<li class="divider"></li>
							<li><a href="#">Acción #4</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
	</header>


	