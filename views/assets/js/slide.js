// paginación

var slide = $("#slide");
var itemPaginacion = $("#paginacion-slide").find("li");
var imgProducto = $(".imgProducto");
var titulos1 = slide.find("h1");
var titulos2 = slide.find("h2");
var titulos3 = slide.find("h3");
var btnVerProducto = slide.find("button");
var flechaRetroceder = slide.find("#retroceder");
var flechaAvanzar = slide.find("#avanzar");
var item = 0;
var interrumpirIntervalo = false;
var detenerIntervalo = false;
var toogle = false;
var cantItems = slide.find("ul li").length;

slide.find("ul li").css({ "width": 100 / cantItems + "%" });
slide.find("ul").css({ "width": cantItems * 100 + "%" });

setAnimations(item);

itemPaginacion.click(function () {
    item = $(this).attr("item") - 1;
    moverSlide(item);
});

// avanzar
flechaAvanzar.click(function () {
    avanzar();
});

function avanzar() {
    if (item === cantItems - 1) {
        item = 0;
    } else {
        item++;
    }

    interrumpirIntervalo = true;
    moverSlide(item)
}

flechaRetroceder.click(function () {
    if (item === 0) {
        item = cantItems - 1;
    } else {
        item--;
    }
    moverSlide(item);
});

setInterval(function () {
    if (interrumpirIntervalo) {
        interrumpirIntervalo = false;
    } else {
        if (!detenerIntervalo) {
            avanzar();
        }
    }

}, 3000);

function moverSlide(item) {
    slide.find("ul").animate({ "left": item * -100 + "%" }, 1000, "easeOutQuart");
    itemPaginacion.css({ "opacity": 0.5 });
    $(itemPaginacion[item]).css({ "opacity": 1 });
    interrumpirIntervalo = true;

    setAnimations(item);

}

function setAnimations(item) {
    $(imgProducto[item]).animate({ "top": -10 + "%", "opacity": 0 }, 100);
    $(imgProducto[item]).animate({ "top": 30 + "px", "opacity": 1 }, 600);

    $(titulos1[item]).animate({ "top": -10 + "%", "opacity": 0 }, 100);
    $(titulos1[item]).animate({ "top": 30 + "px", "opacity": 1 }, 100);

    $(titulos2[item]).animate({ "top": -10 + "%", "opacity": 0 }, 100);
    $(titulos2[item]).animate({ "top": 30 + "px", "opacity": 1 }, 100);

    $(titulos3[item]).animate({ "top": -10 + "%", "opacity": 0 }, 100);
    $(titulos3[item]).animate({ "top": 30 + "px", "opacity": 1 }, 100);

    $(btnVerProducto[item]).animate({ "top": -10 + "%", "opacity": 0 }, 100);
    $(btnVerProducto[item]).animate({ "top": 30 + "px", "opacity": 1 }, 100);
}

// mostrar / ocultar flecas

slide.mouseover(function () {
    flechaRetroceder.css({ "opacity": 1 });
    flechaAvanzar.css({ "opacity": 1 });
    detenerIntervalo = true;
});

slide.mouseout(function () {
    flechaRetroceder.css({ "opacity": 0 });
    flechaAvanzar.css({ "opacity": 0 });
    detenerIntervalo = false;
});

// ocultar slide
$("#btnSlide").click(function () {

    if (!toogle) {
        slide.slideUp("fast");
        $("#btnSlide").html('<i class="fa fa-angle-down"></i>');
    } else {
        $("#btnSlide").html('<i class="fa fa-angle-up"></i>');
        slide.slideDown("fast");
    }
    toogle = !toogle;
});
