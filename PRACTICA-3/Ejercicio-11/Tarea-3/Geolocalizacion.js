"use strict";
class Geolocalizacion {
    constructor() {
        navigator.geolocation.getCurrentPosition(this.getPosicion.bind(this), this.verErrores.bind(this));
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
	verErrores(error){
		switch(error.code) {
			case error.PERMISSION_DENIED:
				this.mensaje = "El usuario no permite la petición de geolocalización"
				break;
			case error.POSITION_UNAVAILABLE:
				this.mensaje = "Información de geolocalización no disponible"
				break;
			case error.TIMEOUT:
				this.mensaje = "La petición de geolocalización ha caducado"
				break;
			case error.UNKNOWN_ERROR:
				this.mensaje = "Se ha producido un error desconocido"
				break;
		}
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
	getMapaEstaticoGoogle(dondeVerlo){
        var ubicacion=document.getElementById(dondeVerlo);

        var apiKey = "&key=AIzaSyC6j4mF6blrc4kZ54S6vYZ2_FpMY9VzyRU";
        var url = "https://maps.googleapis.com/maps/api/staticmap?";
        var centro = "center=" + this.latitud + "," + this.longitud;
        var zoom ="&zoom=15";
        var tamano= "&size=800x600";
        var marcador = "&markers=color:red%7Clabel:S%7C" + this.latitud + "," + this.longitud;
        var sensor = "&sensor=false"; 
        
        this.imagenMapa = url + centro + zoom + tamano + marcador + sensor + apiKey;
        ubicacion.innerHTML = "<h2>" + this.mensaje + "</h2><img src='" + this.imagenMapa + "'/>";
    }
}
var miPosicion = new Geolocalizacion();