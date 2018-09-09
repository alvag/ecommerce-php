<!--top-->
<div class="container-fluid barraSuperior top" id="top">
	<div class="container">
		<div class="row">

			<!--Social-->
			<div class="col-xs-12 col-sm-8 col-md-9 col-lg-9 social">
				<ul>
					<?php
					$template = TemplateController ::ctrlStyleTemplate();
					$jsonRedesSociales = json_decode($template["redesSociales"], true);

					foreach($jsonRedesSociales as $key => $value) {
						echo '<li>
									<a href="' . $value["url"] . '" target="_blank" title="'.$value["title"].'">
										<i class="fa ' . $value["red"] . ' redSocial ' . $value["estilo"] . '" aria-hidden="true"></i>
									</a>
								</li>';
					}
					?>
				</ul>
			</div>

			<!--Registro-->
			<div class="col-xs-12 col-sm-4 col-md-3 col-lg-3  registro">
				<ul>
					<li><a href="#modalLogin" data-toggle="modal">Ingresar</a></li>
					<li>|</li>
					<li><a href="#modalRegister" data-toggle="modal">Crear una cuenta</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!--Header-->
<header class="container-fluid">
	<div class="container">
		<div class="row" id="header">

			<!-- Logo -->
			<div class="col-xs-12 col-sm-2 col-md-3 col-lg-3 logo">
				<a href="./">
					<img class="img-responsive" src="./backend/<?php echo $template['logo'] ?>" alt="">
				</a>
			</div>

			<!-- Bloque de Categorías y buscador -->
			<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">

				<!-- Boton Categorías -->
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 backColor btnCategorias" id="btnCategorias">
					<p>Categorías
						<span class="pull-right">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</span>
					</p>
				</div>

				<!-- Buscador -->
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 input-group buscador" id="buscador">
					<input type="search" name="search" class="form-control" placeholder="Buscar...">
					<span class="input-group-btn">
						<a href="#">
							<button class="btn btn-default backColor" type="submit">
								<i class="fa fa-search"></i>
							</button>
						</a>
					</span>
				</div>

			</div>

			<!--Shopping cart -->

			<div class="col-xs-12 col-sm-2 col-md-3 col-lg-3 shoppingCart" id="shoppingCart">
				<a href="#">
					<button class="btn btn-default pull-left backColor">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</button>
				</a>
				<p>TU CESTA <span class="cantidadCesta"></span>3<br> USD $ <span class="sumaCesta">20</span></p>
			</div>

		</div>

		<!-- Categorías -->
		<div class="col-xs-12 backColor categorias" id="categorias">

			<?php

			$categorias = ProductsController::getCategories();

			foreach($categorias as $key => $value) {

				echo '<div class="col-xs-12 col-sm-4 col-md-3 col-lg-2">
							<h4><a href="'.$value["ruta"].'" class="pixelCategorias">'.$value["nombre"].'</a></h4>
							<hr>
							<ul>';

				$item = "id_categoria";
				$valor = $value["id"];
				$subcategorias = ProductsController::getSubCategories($item, $valor);

				foreach($subcategorias as $keySub => $valueSub){
					echo '<li><a href="'.$valueSub["ruta"].'" class="pixelSubCategorias">'.$valueSub["nombre"].'</a></li>';
				}
				echo '</ul>
						</div>';
			}

			?>
		</div>

	</div>
</header>
