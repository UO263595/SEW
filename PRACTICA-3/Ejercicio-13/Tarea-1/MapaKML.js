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

			let parser = new DOMParser();
			let xmlDoc = parser.parseFromString(contenido, "text/xml");
			var polilinea = [];

			for (const item of xmlDoc.getElementsByTagName('coordinates')) {
				let coordinates = item.textContent.split("\n");
				for (const coordinatesPair of coordinates) {
					let coordinate = coordinatesPair.split(",");
					if (coordinate[0] != "") {
						let punto = {lat: parseFloat(coordinate[1]), lng: parseFloat(coordinate[0])};
						polilinea.push(punto);
						var marcador = new google.maps.Marker({position:punto,map:this.mapa});
					}
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