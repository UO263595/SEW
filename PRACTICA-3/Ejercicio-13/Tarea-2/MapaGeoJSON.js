"use strict";
class Mapa {
	constructor() {
	}
	initMap() {
		var centro = {lat: 40.418889, lng: -3.691944};
		this.mapa = new google.maps.Map(document.getElementById('mapa'),{zoom: 5,center:centro});
	}
	cargarMapa(files) {
		var archivo = files[0];
		var nombre = document.getElementById("nombreArchivo");
		var areaVisualizacion = document.getElementById("areaTexto");
		nombre.innerText = "Nombre del archivo: " + archivo.name;
		
		var contenido = "";
		var lector = new FileReader();
		lector.onload = function (evento) {
			contenido = lector.result;

			var geoObject = JSON.parse(contenido);
			var features = geoObject.features;
			var polilinea = [];

			for (let i = 0; i < features.length; i++) {
				let coordenadas = features[i].geometry.coordinates;

				for (let j = 0; j < coordenadas.length; j++) {
					let parCoordenadas = coordenadas[j];
					let punto = {lat: parseFloat(parCoordenadas[1]), lng: parseFloat(parCoordenadas[0])};
					polilinea.push(punto);
				}

				var centro = {lat: 40.418889, lng: -3.691944};
				this.mapa = new google.maps.Map(document.getElementById('mapa'),{zoom: 4,center:centro});
				var dibujar = new google.maps.Polyline({
					path: polilinea,
					geodesic: true,
					strokeColor: "#FF0000",
					strokeOpacity: 1.0,
					strokeWeight: 2,
				});
				dibujar.setMap(this.mapa);
			}
		}      
		lector.readAsText(archivo);
	}
}
var mapa = new Mapa();
var mapaDinamicoGoogle = new Object();
mapaDinamicoGoogle.initMap = mapa.initMap;