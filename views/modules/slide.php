<div class="container-fluid slide" id="slide">

	<div class="row">

		<ul>

			<?php
			$slide = SlideController::mostrarSlide();
			foreach($slide as $key => $value) {

				$estiloImgProducto = json_decode($value["estiloImgProducto"], true);
				$estiloTextoSlide = json_decode($value["estiloTextoSlide"], true);
				$titulo1 = json_decode($value["titulo1"], true);
				$titulo2 = json_decode($value["titulo2"], true);
				$titulo3 = json_decode($value["titulo3"], true);

				echo '<li>
					<img src="backend/'.$value["imgFondo"].'" alt="">
                    <div class="slideOpciones '.$value["tipoSlide"].'">';

                    if ($value["imgProducto"] != "") {
                        echo '<img style="top: '.$estiloImgProducto["top"].'; right: '.$estiloImgProducto["right"].'; width: '.$estiloImgProducto["width"].'; left: '.$estiloImgProducto["left"].'" src="backend/'.$value["imgProducto"].'"
						     alt="" class="imgProducto">';
                    }

				echo '<div style="top: '.$estiloTextoSlide["top"].'; left: '.$estiloTextoSlide["left"].'; width: '.$estiloTextoSlide["width"].'; right: '.$estiloTextoSlide["right"].'" class="textosSlide">
							<h1 style="color: '.$titulo1["color"].'">'.$titulo1["texto"].'</h1>
							<h2 style="color: '.$titulo2["color"].'">'.$titulo2["texto"].'</h2>
							<h3 style="color: '.$titulo3["color"].'">'.$titulo3["texto"].'</h3>
							<a href="'.$value["url"].'">
								'.$value["boton"].'
							</a>
						</div>
					</div>
				</li>';
			}

			?>

		</ul>

		<!--paginacion slide-->

		<ol class="paginacion-slide" id="paginacion-slide">
			<?php

			for($i = 1; $i <= count($slide); $i++) {
				echo'<li item="'.$i.'"><span class="fa fa-circle"></span></li>';
			}
			?>
		</ol>

		<!--navegacion del slide-->
		<div class="flechas retroceder" id="retroceder"><span class="fa fa-chevron-left"></span></div>
		<div class="flechas avanzar" id="avanzar"><span class="fa fa-chevron-right"></span></div>

	</div>

</div>

<center>
	<button id="btnSlide" class="btnSlide backColor">
		<i class="fa fa-angle-up"></i>
	</button>
</center>
