<!--top-->
<div class="container-fluid barraSuperior" id="top">
	<div class="container">
		<div class="row">

			<!--Social-->
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-12 social">
				<ul>
					<?php
						$social = TemplateController::ctrlEstiloTemplate();
						$jsonRedesSociales = json_decode($social["redesSociales"], true);

						foreach($jsonRedesSociales as $key => $value) {
							echo '<li>
									<a href="'.$value["url"].'" target="_blank">
										<i class="fa '.$value["red"].' redSocial '.$value["estilo"].'" aria-hidden="true"></i>
									</a>
								</li>';
						}
					?>
				</ul>
			</div>

			<!--Registro-->
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 registro">
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
			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="logo">
				<a href="#">
					<img class="img-responsive" src="../backend/<?php echo $social['logo'] ?>" alt="">
				</a>
			</div>

			<!-- Bloque de Categorías y buscador -->
			<div class="col-lg-6 col-md-6 col-sm-8 col-xs-12">

				<!-- Boton Categorías -->
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 backColor" id="btnCategorias">
					<p>Categorías
						<span class="pull-right">
							<i class="fa fa-bars" aria-hidden="true"></i>
						</span>
					</p>
				</div>

				<!-- Buscador -->
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 input-group" id="buscador">
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

			<div class="col-lg-3 col-md-3 col-sm-2 col-xs-12" id="shoppingCart">
				<a href="#">
					<button class="btn btn-default pull-left backColor">
						<i class="fa fa-shopping-cart" aria-hidden="true"></i>
					</button>
				</a>
				<p>TU CESTA <span class="cantidadCesta"></span>3<br> USD $ <span class="sumaCesta">20</span></p>
			</div>

		</div>

		<!-- Categorías -->
		<div class="col-xs-12 backColor" id="categorias">
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<h4><a href="#" class="pixelCategorias">Lorem Ipsum</a></h4>
				<hr>
				<ul>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
				</ul>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<h4><a href="#" class="pixelCategorias">Lorem Ipsum</a></h4>
				<hr>
				<ul>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
				</ul>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<h4><a href="#" class="pixelCategorias">Lorem Ipsum</a></h4>
				<hr>
				<ul>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
				</ul>
			</div>
			<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
				<h4><a href="#" class="pixelCategorias">Lorem Ipsum</a></h4>
				<hr>
				<ul>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
					<li><a href="#" class="pixelSubCategorias">Lorem Ipsum</a></li>
				</ul>
			</div>
		</div>

	</div>
</header>