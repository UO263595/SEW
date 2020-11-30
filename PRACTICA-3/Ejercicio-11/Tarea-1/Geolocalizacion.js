"use strict";
class Geolocalizacion {
    constructor() {
        navigator.geolocation.getCurrentPosition(this.getPosicion.bind(this));
    }
    getPosicion(posicion) {
		this.mensaje = "Se ha realizado correctamente la petición de geolocalización";
        this.longitud = posicion.coords.longitude; 
        this.latitud = posicion.coords.latitude;  
        this.precision = posicion.coords.accuracy;
        this.altitud = posicion.coords.altitude;
        this.precisionAltitud = posicion.coords.altitudeAccuracy;
        this.rumbo = posicion.coords.heading;
        this.velocidad = posicion.coords.speed;       
    }
    getLongitud() {
        return this.longitud;
    }
    getLatitud() {
        return this.latitud;
    }
    getAltitud() {
        return this.altitud;
    }
    verTodo(dondeVerlo) {
        var ubicacion=document.getElementById(dondeVerlo);
        var datos='<h2>' + this.mensaje + '</h2>'; 
        datos+='<p>Longitud (grados): ' + this.checkParam(this.longitud) + '</p>'; 
        datos+='<p>Latitud (grados): ' + this.checkParam(this.latitud) + '</p>';
        datos+='<p>Precisión de la latitud y longitud (metros): ' + this.checkParam(this.precision) + '</p>';
        datos+='<p>Altitud (metros): ' + this.checkParam(this.altitude) + '</p>';
        datos+='<p>Precisión de la altitud (metros): ' + this.checkParam(this.precisionAltitud) + '</p>'; 
        datos+='<p>Rumbo (grados): ' + this.checkParam(this.rumbo) + '</p>'; 
        datos+='<p>Velocidad (m/seg): ' + this.checkParam(this.velocidad) + '</p>';
        ubicacion.innerHTML = datos;
    }
	checkParam(param) {
		if (param == null || param == "undefined") {
			return "NO DISPONIBLE";
		}
		return param;
	}
}
var miPosicion = new Geolocalizacion();