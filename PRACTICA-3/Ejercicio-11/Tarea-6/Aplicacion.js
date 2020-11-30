"use strict";
class Aplicacion {
	constructor() {
		
	}
	initMap() {
		var oviedo = {lat: 43.3672702, lng: -5.8502461};
		var mapa = new google.maps.Map(document.getElementById('mapa'),{zoom: 8,center:oviedo});
		var marcador = new google.maps.Marker({position:oviedo,map:mapa});
	}
	buscar() {
		var ubicacion = {lat: parseFloat($("#inputLatitud").val()), lng: parseFloat($("#inputLongitud").val())};
		var mapa = new google.maps.Map(document.getElementById('mapa'),{zoom: 8,center:ubicacion});
		var marcador = new google.maps.Marker({position:ubicacion,map:mapa});
	}
}
var aplicacion = new Aplicacion();
var mapaDinamicoGoogle = new Object();
mapaDinamicoGoogle.initMap = aplicacion.initMap;
