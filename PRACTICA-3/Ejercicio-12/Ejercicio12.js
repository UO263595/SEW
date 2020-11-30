"use strict";
class Archivos {
	constructor() {
		var soportaAPI = document.getElementById("soportaAPI");
		if (window.File && window.FileReader && window.FileList && window.Blob) { 
			soportaAPI.innerText = "Este navegador soporta el API File"
		}
		else soportaAPI.innerText = "¡¡¡Este navegador NO soporta el API File y este programa puede no funcionar correctamente!!!"
	}
	leerArchivoTexto(files) {
		var archivo = files[0];
		var nombre = document.getElementById("nombreArchivo");
		var tamano = document.getElementById("tamanoArchivo");
		var tipo = document.getElementById("tipoArchivo");
		var ultima = document.getElementById("ultimaModificacion");
		var contenido = document.getElementById("contenidoArchivo");
		var areaVisualizacion = document.getElementById("areaTexto");
		var errorArchivo = document.getElementById("errorLectura");

		nombre.innerText = "Nombre del archivo: " + archivo.name;
		tamano.innerText = "Tamaño del archivo: " + archivo.size + " bytes"; 
		tipo.innerText = "Tipo del archivo: " + archivo.type;
		ultima.innerText = "Fecha de la última modificación: " + archivo.lastModifiedDate;
		contenido.innerText="Contenido del archivo:"
		areaVisualizacion.innerText = "";
		
		var lector = new FileReader();
		lector.onload = function (evento) {
			areaVisualizacion.innerText = lector.result;
		}      
		lector.readAsText(archivo);
	}
	leerVariosArchivoTexto() {
		var nBytes = 0,
			archivos = document.getElementById("variosArchivosTexto").files,
			nArchivos = archivos.length;
		for (var i = 0; i < nArchivos; i++) {
			nBytes += archivos[i].size;
		}
		var cadena="";
		for (var i = 0; i < nArchivos; i++) {
			cadena += "<p><strong>Archivo [" + i +"]</strong></p>";
			cadena += "<p>Nombre del archivo: " + archivos[i].name + "</p>";
			cadena += "<p>Tamaño del archivo: " + archivos[i].size + " bytes</p>";
			cadena += "<p>Tipo del archivo: " + archivos[i].type + "</p>";
			cadena += "<p>Fecha de la última modificación: " + archivos[i].lastModifiedDate + "</p>";
		}
		document.getElementById("numero").innerHTML = nArchivos;
		document.getElementById("tamano").innerHTML = nBytes + " bytes";
		document.getElementById("todo").innerHTML = cadena;
	}
}
var archivos = new Archivos();