"use strict";
class Funciones {
	ocultar() {
		$("p").hide();
	}
	mostrar() {
		$("p").show();
	}
	modificaColor() {
		$("#pColor").css({left:0, backgroundColor:'yellow'});
	}
	opcion1() {
		$("#pModificar").text("Opción 1 (pulsa los botones para cambiar de opción)");
	}
	opcion2() {
		$("#pModificar").text("Opción 2 (pulsa los botones para cambiar de opción)");
	}
	insertar() {
		$("#bInsertar").before("<p>Nuevo párrafo.</p>");
	}
	eliminar() {
		$("#pEliminar").remove();
	}
	recorrer() {
		$("*", document.body).each(function() {
			var etiquetaPadre = $(this).parent().get(0).tagName;
			$(this).prepend(document.createTextNode( "Etiqueta padre: <"  + etiquetaPadre + "> elemento: <" + $(this).get(0).tagName +"> valor: "));
		});
	}
	sumar() {
		var resultado = 0;
		$("table tr td").each(function() {
            var celda = parseInt($(this).text());
            resultado += celda;
        });
        $("#bSumar").before("<p>Resultado: " + resultado + "</p>");
		$("#bSumar").attr("disabled","disabled");
	}
	verNombre() {
		alert("Valor del campo Nombre: " + $("#campoNombre").val()); 
	}
	verApellidos() {
		alert( "Valor del campo Apellidos: " + $("#campoApellidos").val());
	}
}
var funciones = new Funciones();