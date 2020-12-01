"use strict";
class Meteo {
	constructor(){
		this.apikey = "c466e9dc4977aa2024fc0b588cbfe164";
		this.tipo = "&mode=xml";
		this.unidades = "&units=metric";
		this.idioma = "&lang=es";
	}
	cargarDatos(){
		$.ajax({
			dataType: "xml",
			url: this.url,
			method: 'GET',
			success: function(datos){

				$("h5").text((new XMLSerializer()).serializeToString(datos));
                
				var totalNodos = $('*',datos).length;
				var ciudad = $('city',datos).attr("name");
				var longitud = $('coord',datos).attr("lon");
				var latitud = $('coord',datos).attr("lat");
				var pais = $('country',datos).text();
				var amanecer = $('sun',datos).attr("rise");
				var minutosZonaHoraria = new Date().getTimezoneOffset();
				var amanecerMiliSeg1970 = Date.parse(amanecer);
					amanecerMiliSeg1970 -= minutosZonaHoraria * 60 * 1000;
				var amanecerLocal = (new Date(amanecerMiliSeg1970)).toLocaleTimeString("es-ES");
				var oscurecer = $('sun',datos).attr("set");          
				var oscurecerMiliSeg1970 = Date.parse(oscurecer);
					oscurecerMiliSeg1970 -= minutosZonaHoraria * 60 * 1000;
				var oscurecerLocal = (new Date(oscurecerMiliSeg1970)).toLocaleTimeString("es-ES");
				var temperatura = $('temperature',datos).attr("value");
				var temperaturaMin = $('temperature',datos).attr("min");
				var temperaturaMax = $('temperature',datos).attr("max");
				var temperaturaUnit = $('temperature',datos).attr("unit");
				var humedad = $('humidity',datos).attr("value");
				var humedadUnit = $('humidity',datos).attr("unit");
				var presion = $('pressure',datos).attr("value");
				var presionUnit = $('pressure',datos).attr("unit");
				var velocidadViento = $('speed',datos).attr("value");
				var nombreViento = $('speed',datos).attr("name");
				var direccionViento = $('direction',datos).attr("value");
				var codigoViento = $('direction',datos).attr("code");
				var nombreDireccionViento = $('direction',datos).attr("name");
				var nubosidad = $('clouds',datos).attr("value");
				var nombreNubosidad = $('clouds',datos).attr("name");
				var visibilidad = $('visibility',datos).attr("value");
				var precipitacionValue = $('precipitation',datos).attr("value");
				var precipitacionMode = $('precipitation',datos).attr("mode");
				var descripcion = $('weather',datos).attr("value");
				var horaMedida = $('lastupdate',datos).attr("value");
				var horaMedidaMiliSeg1970 = Date.parse(horaMedida);
					horaMedidaMiliSeg1970 -= minutosZonaHoraria * 60 * 1000;
				var horaMedidaLocal = (new Date(horaMedidaMiliSeg1970)).toLocaleTimeString("es-ES");
				var fechaMedidaLocal = (new Date(horaMedidaMiliSeg1970)).toLocaleDateString("es-ES");
				var icono = "https://openweathermap.org/img/w/" + $('weather',datos).attr("icon") + ".png";
                    
				var stringDatos =  "<ul><li>Número de elementos del XML: " + totalNodos + "</li>";
					stringDatos += "<li>Ciudad: " + ciudad + "</li>";
					stringDatos += "<li>Longitud: " + longitud + " grados</li>";
					stringDatos += "<li>Latitud: " + latitud + " grados</li>";
					stringDatos += "<li>País: " + pais + "</li>";
					stringDatos += "<li>Amanece a las: " + amanecerLocal + "</li>";
					stringDatos += "<li>Oscurece a las: " + oscurecerLocal + "</li>";
					stringDatos += "<li>Temperatura: " + temperatura + " grados Celsius</li>";
					stringDatos += "<li>Temperatura mínima: " + temperaturaMin + " grados Celsius</li>";
					stringDatos += "<li>Temperatura máxima: " + temperaturaMax + " grados Celsius</li>";
					stringDatos += "<li>Temperatura (unidades): " + temperaturaUnit + "</li>";
					stringDatos += "<li>Humedad: " + humedad + " " + humedadUnit + "</li>";
					stringDatos += "<li>Presión: " + presion + " " + presionUnit + "</li>";
					stringDatos += "<li>Velocidad del viento: " + velocidadViento + " metros/segundo</li>";
					stringDatos += "<li>Nombre del viento: " + nombreViento + "</li>";
					stringDatos += "<li>Dirección del viento: " + direccionViento + " grados</li>";
					stringDatos += "<li>Código del viento: " + codigoViento + "</li>";
					stringDatos += "<li>Nombre del viento: " + nombreDireccionViento + "</li>";
					stringDatos += "<li>Nubosidad: " + nubosidad + "</li>";
					stringDatos += "<li>Nombre nubosidad: " + nombreNubosidad + "</li>";
					stringDatos += "<li>Visibilidad: " + visibilidad + " metros</li>";
					stringDatos += "<li>Precipitación valor: " + precipitacionValue + "</li>";
					stringDatos += "<li>Precipitación modo: " + precipitacionMode + "</li>";
					stringDatos += "<li>Descripción: " + descripcion + "</li>";
					stringDatos += "<li>Hora de la medida: " + horaMedidaLocal + "</li>";
					stringDatos += "<li>Fecha de la medida: " + fechaMedidaLocal + "</li>";
                    console.log("El valor actual de los datos es " + stringDatos);
				
				console.log("El valor actual del icono es " + icono);	
				$("p").html(stringDatos);       
				$("<img>").attr("src",icono).appendTo("div");				
			},
			error:function(){
				$("h3").html("¡Tenemos problemas! No puedo obtener XML de <a href='https://openweathermap.org'>OpenWeatherMap</a>"); 
				$("div").remove();
				$("h4").remove();
				$("p").remove();
			}
		});
	}
	crearElemento(tipoElemento, texto, insertarAntesDe){
		var elemento = document.createElement(tipoElemento); 
		elemento.innerHTML = texto;
		$(insertarAntesDe).before(elemento);
	}
	verMadrid(){
		$("h2").remove();
		$("h3").remove();
		$("div").remove();
		$("h4").remove();
		$("p").remove();
		this.ciudad = "Madrid";
		this.url = "https://api.openweathermap.org/data/2.5/weather?q=" + this.ciudad + this.tipo + this.unidades + this.idioma + "&APPID=" + this.apikey;
		this.correcto = "¡Todo correcto! XML recibido de <a href='https://openweathermap.org/'>OpenWeatherMap</a>"
		this.crearElemento("h2","Datos en XML desde <a href='https://openweathermap.org'>OpenWeatherMap</a>","#bMadrid"); 
		this.crearElemento("h3",this.correcto,"#bMadrid");
		this.crearElemento("div","","#bMadrid");
		this.crearElemento("h4","Datos","#bMadrid");
		this.crearElemento("p","","#bMadrid");
		this.cargarDatos();
	}
	verTenerife(){
		$("h2").remove();
		$("h3").remove();
		$("div").remove();
		$("h4").remove();
		$("p").remove();
		this.ciudad = "Santa Cruz de Tenerife";
		this.url = "https://api.openweathermap.org/data/2.5/weather?q=" + this.ciudad + this.tipo + this.unidades + this.idioma + "&APPID=" + this.apikey;
		this.correcto = "¡Todo correcto! XML recibido de <a href='https://openweathermap.org/'>OpenWeatherMap</a>"
		this.crearElemento("h2","Datos en XML desde <a href='https://openweathermap.org'>OpenWeatherMap</a>","#bMadrid"); 
		this.crearElemento("h3",this.correcto,"#bMadrid");
		this.crearElemento("div","","#bMadrid");
		this.crearElemento("h4","Datos","#bMadrid");
		this.crearElemento("p","","#bMadrid");
		this.cargarDatos();
	}
	verSantiago(){
		$("h2").remove();
		$("h3").remove();
		$("div").remove();
		$("h4").remove();
		$("p").remove();
		this.ciudad = "Santiago de Compostela";
		this.url = "https://api.openweathermap.org/data/2.5/weather?q=" + this.ciudad + this.tipo + this.unidades + this.idioma + "&APPID=" + this.apikey;
		this.correcto = "¡Todo correcto! XML recibido de <a href='https://openweathermap.org/'>OpenWeatherMap</a>"
		this.crearElemento("h2","Datos en XML desde <a href='https://openweathermap.org'>OpenWeatherMap</a>","#bMadrid"); 
		this.crearElemento("h3",this.correcto,"#bMadrid");
		this.crearElemento("div","","#bMadrid");
		this.crearElemento("h4","Datos","#bMadrid");
		this.crearElemento("p","","#bMadrid");
		this.cargarDatos();
	}
	verBarcelona(){
		$("h2").remove();
		$("h3").remove();
		$("div").remove();
		$("h4").remove();
		$("p").remove();
		this.ciudad = "Barcelona";
		this.url = "https://api.openweathermap.org/data/2.5/weather?q=" + this.ciudad + this.tipo + this.unidades + this.idioma + "&APPID=" + this.apikey;
		this.correcto = "¡Todo correcto! XML recibido de <a href='https://openweathermap.org/'>OpenWeatherMap</a>"
		this.crearElemento("h2","Datos en XML desde <a href='https://openweathermap.org'>OpenWeatherMap</a>","#bMadrid"); 
		this.crearElemento("h3",this.correcto,"#bMadrid");
		this.crearElemento("div","","#bMadrid");
		this.crearElemento("h4","Datos","#bMadrid");
		this.crearElemento("p","","#bMadrid");
		this.cargarDatos();
	}
	verLasPalmas(){
		$("h2").remove();
		$("h3").remove();
		$("div").remove();
		$("h4").remove();
		$("p").remove();
		this.ciudad = "Las Palmas de Gran Canaria";
		this.url = "https://api.openweathermap.org/data/2.5/weather?q=" + this.ciudad + this.tipo + this.unidades + this.idioma + "&APPID=" + this.apikey;
		this.correcto = "¡Todo correcto! XML recibido de <a href='https://openweathermap.org/'>OpenWeatherMap</a>"
		this.crearElemento("h2","Datos en XML desde <a href='https://openweathermap.org'>OpenWeatherMap</a>","#bMadrid"); 
		this.crearElemento("h3",this.correcto,"#bMadrid");
		this.crearElemento("div","","#bMadrid");
		this.crearElemento("h4","Datos","#bMadrid");
		this.crearElemento("p","","#bMadrid");
		this.cargarDatos();
	}
}
var meteo = new Meteo();
