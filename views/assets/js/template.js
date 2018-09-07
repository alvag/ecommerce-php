/*herramienta tooltip*/
$("[data-toggle='tooltip']").tooltip();


$.ajax({
    url: "ajax/template.ajax.php",
    success: function (respuesta) {
        var colorFondo = JSON.parse(respuesta).colorFondo;
        var colorTexto = JSON.parse(respuesta).colorTexto;
        var barraSuperior = JSON.parse(respuesta).barraSuperior;
        var textoSuperior = JSON.parse(respuesta).textoSuperior;

        $(".backColor, .backColor a").css({"background": colorFondo, "color": colorTexto});
        $(".barraSuperior, .barraSuperior a").css({"background": barraSuperior, "color": textoSuperior});
    }
});

/*Cuadricula o lista*/

var btnList = $(".btnList");

for (var i = 0; i < btnList.length; i++) {

    $("#btnGrid" + i).click(function () {
        var index = $(this).attr("id").substr(-1);
        $(".list" + index).hide();
        $(".grid" + index).show();

        $("#btnGrid" + index).addClass("backColor");
        $("#btnList" + index).removeClass("backColor");
    });

    $("#btnList" + i).click(function () {
        var index = $(this).attr("id").substr(-1);
        $(".grid" + index).hide();
        $(".list" + index).show();

        $("#btnGrid" + index).removeClass("backColor");
        $("#btnList" + index).addClass("backColor");
    });

}

/* Efectos con el scroll */

$(window).scroll(function () {
    var scrollY = window.pageYOffset;

    if (window.matchMedia("(min-width:768px)").matches) {
        if (scrollY < ($(".banner").offset().top) - 150) {
            $(".banner img").css({"margin-top": -scrollY / 3 + "px"})
        } else {
            scrollY = 0;
        }
    }
});

$.scrollUp({
    scrollText: "",
    scrollSpeed: 2000,
    easingType: "easeOutQuint"
});