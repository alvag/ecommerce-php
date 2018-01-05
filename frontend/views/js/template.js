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

// Cuadricula o lista

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