<figure class="banner">

    <img src="backend/views/img/banner/default.jpg" class="img-responsive" width="100%">

    <div class="textoBanner textoDer">
        <h1 style="color: #FFF">OFERTAS ESPECIALES</h1>
        <h2 style="color: #FFF"><strong>50% Off</strong></h2>
        <h3 style="color: #FFF">Termina el 31 de Octubre</h3>

    </div>

</figure>

<div class="container-fluid well well-sm barraProductos">

    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-sm-6">
                <div class="btn-group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                        Ordenar Productos <span class="caret"></span>
                    </button>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Más reciente</a></li>
                        <li><a href="#">Más antiguo</a></li>
                    </ul>
                </div>
            </div>

            <div class="col-xs-12 organizarProductos">

                <div class="btn-group pull-right">

                    <button type="button" class="btn btn-default bntGrid" id="btnGrid0">
                        <i class="fa fa-th" aria-hidden="true"></i>
                        <span class="col-xs-0 pull-right"> GRID</span>
                    </button>

                    <button type="button" class="btn btn-default btnList" id="btnList0">
                        <i class="fa fa-list" aria-hidden="true"></i>
                        <span class="col-xs-0 pull-right"> LIST</span>
                    </button>

                </div>

            </div>
        </div>
    </div>

</div>

<div class="container-fluid productos">
    <div class="container">
        <div class="row">

            <ul class="breadcrumb fondoBreadcrumb lead">
                <li><a href="#">INICIO</a></li>
                <li class="active"><?php echo $rutas[0] ?></li>
            </ul>

            <?php

                if ($rutas[0] == "articulos-gratis") {

                    $pItem = "precio";
                    $pValor = 0;
                    $orderBy = "id";

                } elseif ($rutas[0] == "lo-mas-vendido") {

                    $pItem = null;
                    $pValor = null;
                    $orderBy = "ventas";

                } elseif ($rutas[0] == "lo-mas-visto") {

                    $pItem = null;
                    $pValor = null;
                    $orderBy = "vistas";

                } else {

                    $orderBy = "id";
                    $item = "ruta";
                    $valor = $rutas[0];

                    $categories = ProductsController::getCategories($item, $valor);

                    if (!$categories) {
                        $subCategories = ProductsController::getSubCategories($item, $valor);
                        $pItem = "id_subcategoria";
                        $pValor = $subCategories[0]["id"];

                    } else {

                        $pValor = $categories["id"];
                        $pItem = "id_categoria";
                    }

                }

                $start = 0;
                $limit = 12;
                $products = ProductsController::getProducts($orderBy, $start, $limit, $pItem, $pValor);

                if (!$products) {
                    echo "
                        <div class='col-xs-12 text-center error404'>
                        <h1><small>¡Oops!</small></h1>
                            <h2>Aún no hay productos en esta categoría</h2>
                        </div>
                    ";
                } else {

                    echo "<ul class='grid0'>";

                    foreach ($products as $key => $value) {
                        echo '
                            <li class="col-md-3 col-sm-6 col-xs-12">

                                <figure>
                                    <a href="'.$value["ruta"].'" class="pixelProducto">
                                        <img src="backend/'.$value["portada"].'"
                                             class="img-responsive">
                                    </a>
                                </figure>

                                <h4>
                                    <small>
                                        <a href="'.$value["ruta"].'" class="pixelProducto">
                                            '.$value["titulo"].' <br>
                                            <span style="color: rgba(0,0,0,0)">-</span>';
                        if ($value["nuevo"] != 0) {
                            echo '<span class="label label-warning fontSize">Nuevo</span> ';
                        }

                        if ($value["oferta"] != 0) {
                            echo '<span class="label label-warning fontSize">'.$value["descuentoOferta"].'% off</span>';
                        }

                        echo'</a>
                                    </small>
                                </h4>

                                <div class="col-xs-6 precio">';
                        if ($value["precio"] == 0) {
                            echo '<h2><small>GRATIS</small></h2>';
                        } else {
                            if ($value["oferta"] != 0) {
                                echo '<h2>
                                            <small><strong class="oferta">USD $ '.$value["precio"].'</strong></small>
                                            <small>$ '.$value["precioOferta"].'</small></h2>
                                        ';
                            } else {
                                echo'<h2><small>USD $ '.$value["precio"].'</small></h2>';
                            }

                        }
                        echo '</div>

                                <div class="col-xs-6 enlaces">
                                    <div class="btn-group pull-right">

                                        <button type="button" class="btn btn-default btn-xs deseos" idProducto="'.$value["id"].'"
                                                data-toggle="tooltip" title="Agregar a mi lista de deseos">
                                            <i class="fa fa-heart" aria-hidden="true"></i>
                                        </button>';

                        if ($value["tipo"] == "virtual" && $value["precio"] != 0) {

                            if ($value["oferta"] != 0) {
                                $precio = $value["precioOferta"];
                            } else {
                                $precio = $value["precio"];
                            }

                            echo '<button class="btn btn-default btn-xs agregarCarrito" type="button" idProducto="'.$value["id"].'"
                                                    imagen="backend/'.$value["portada"].'"
                                                    titulo="'.$value["titulo"].'" precio="'.$precio.'" tipo="'.$value["tipo"].'" peso="'.$value["peso"].'" data-toggle="tooltip"
                                                    title="Agregar al carrito de compras">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                            </button>';
                        }

                        echo'<a href="'.$value["ruta"].'" class="pixelProducto">
                                            <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                                    title="Ver producto">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                            </button>
                                        </a>

                                    </div>
                                </div>

                            </li>
                        ';
                    }

                    echo '
                    </ul>

                    <ul style="display: none" class="list0">';

                    foreach ($products as $key => $value) {

                        echo'  <li class="col-xs-12">
                            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
                                <figure>
                                    <a href="'.$value["ruta"].'" class="pixelProducto">
                                        <img src="backend/'.$value["portada"].'"
                                             class="img-responsive">
                                    </a>
                                </figure>
                            </div>

                            <div class="col-lg-10 col-md-7 col-sm-8 col-xs-12">
                                <h1>
                                    <small>
                                        <a href="'.$value["ruta"].'" class="pixelProducto">
                                            '.$value["titulo"].'<br>';

                        if ($value["nuevo"] != 0) {
                            echo '<span class="label label-warning">Nuevo</span> ';
                        }

                        if ($value["oferta"] != 0) {
                            echo '<span class="label label-warning">'.$value["descuentoOferta"].'% off</span>';
                        }

                        echo '</a>
                                    </small>
                                </h1>
                                <p class="text-muted">'.$value["titular"].'</p>';

                        if ($value["precio"] == 0) {
                            echo '<h2><small>GRATIS</small></h2>';
                        } else {
                            if ($value["oferta"] != 0) {
                                echo '<h2>
                                                        <small><strong class="oferta">USD $ '.$value["precio"].'</strong></small>
                                                        <small>$ '.$value["precioOferta"].'</small></h2>
                                                    ';
                            } else {
                                echo'<h2><small>USD $ '.$value["precio"].'</small></h2>';
                            }

                        }

                        echo '
                                <div class="btn-group pull-left enlaces">
                                    <button type="button" class="btn btn-default btn-xs deseos" idProducto="'.$value["id"].'" data-toggle="tooltip"
                                            title="Agregar a mi lista de deseos">
                                        <i class="fa fa-heart" aria-hidden="true"></i>
                                    </button>';

                        if ($value["tipo"] == "virtual" && $value["precio"] != 0) {

                            if ($value["oferta"] != 0) {
                                $precio = $value["precioOferta"];
                            } else {
                                $precio = $value["precio"];
                            }

                            echo '<button class="btn btn-default btn-xs agregarCarrito" type="button" idProducto="'.$value["id"].'"
                                                                    imagen="backend/'.$value["portada"].'"
                                                                    titulo="'.$value["titulo"].'" precio="'.$precio.'" tipo="'.$value["tipo"].'" peso="'.$value["peso"].'" data-toggle="tooltip"
                                                                    title="Agregar al carrito de compras">
                                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                            </button>';
                        }

                        echo '<a href="'.$value["ruta"].'" class="pixelProducto">
                                        <button type="button" class="btn btn-default btn-xs" data-toggle="tooltip"
                                                title="Ver producto">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xs-12"><hr></div>
                        </li>';
                    }
                    echo '</ul>';

                }
            ?>
        </div>
    </div>
</div>
