"use strict";
class Meteo {
	constructor(){
		this.apikey = "c466e9dc4977aa2024fc0b588cbfe164";
		this.codigoPais = "ES";
		this.unidades = "&units=metric";
		this.idioma = "&lang=es";
	}
	cargarDatos(){
		$.ajax({
			dataType: "json",
			url: this.url,
			method: 'GET',
			success: function(datos){
				var stringDatos = "<ul><li>Ciudad: " + datos.name + "</li>";
					stringDatos += "<li>País: " + datos.sys.country + "</li>";
					stringDatos += "<li>Latitud: " + datos.coord.lat + " grados</li>";
					stringDatos += "<li>Longitud: " + datos.coord.lon + " grados</li>";
					stringDatos += "<li>Temperatura: " + datos.main.temp + " grados Celsius</li>";
					stringDatos += "<li>Temperatura máxima: " + datos.main.temp_max + " grados Celsius</li>";
					stringDatos += "<li>Temperatura mínima: " + datos.main.temp_min + " grados Celsius</li>";
					stringDatos += "<li>Presión: " + datos.main.pressure + " milibares</li>";
					stringDatos += "<li>Humedad: " + datos.main.humidity + " %</li>";
					stringDatos += "<li>Amanece a las: " + new Date(datos.sys.sunrise *1000).toLocaleTimeString() + "</li>";
					stringDatos += "<li>Oscurece a las: " + new Date(datos.sys.sunset *1000).toLocaleTimeString() + "</li>";
					stringDatos += "<li>Dirección del viento: " + datos.wind.deg + " grados</li>";
					stringDatos += "<li>Velocidad del viento: " + datos.wind.speed + " metros/segundo</li>";
					stringDatos += "<li>Hora de la medida: " + new Date(datos.dt *1000).toLocaleTimeString() + "</li>";
					stringDatos += "<li>Fecha de la medida: " + new Date(datos.dt *1000).toLocaleDateString() + "</li>";
					stringDatos += "<li>Descripción: " + datos.weather[0].description + "</li>";
					stringDatos += "<li>Visibilidad: " + datos.visibility + " metros</li>";
					stringDatos += "<li>Nubosidad: " + datos.clouds.all + " %</li></ul>";
                    console.log("El valor actual de los datos es " + stringDatos);
					
				var icono = "https://openweathermap.org/img/w/" + datos.weather[0].icon + ".png";
				console.log("El valor actual del icono es " + icono);	
				$("p").html(stringDatos);
				$("<img>").attr("src",icono).appendTo("div");
			},
			error:function(){
				$("h3").html("¡Tenemos problemas! No puedo obtener JSON de <a href='https://openweathermap.org'>OpenWeatherMap</a>"); 
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
		this.url = "https://api.openweathermap.org/data/2.5/weather?q=" + this.ciudad + "," + this.codigoPais + this.unidades + this.idioma + "&APPID=" + this.apikey;
		this.correcto = "¡Todo correcto! JSON recibido de <a href='https://openweathermap.org'>OpenWeatherMap</a>"
		this.crearElemento("h2","Datos de Madrid desde <a href='https://openweathermap.org'>OpenWeatherMap</a>","#bMadrid"); 
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
		this.url = "https://api.openweathermap.org/data/2.5/weather?q=" + this.ciudad + "," + this.codigoPais + this.unidades + this.idioma + "&APPID=" + this.apikey;
		this.correcto = "¡Todo correcto! JSON recibido de <a href='https://openweathermap.org'>OpenWeatherMap</a>"
		this.crearElemento("h2","Datos de Santa Cruz de Tenerife desde <a href='https://openweathermap.org'>OpenWeatherMap</a>","#bMadrid"); 
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
		this.url = "https://api.openweathermap.org/data/2.5/weather?q=" + this.ciudad + "," + this.codigoPais + this.unidades + this.idioma + "&APPID=" + this.apikey;
		this.correcto = "¡Todo correcto! JSON recibido de <a href='https://openweathermap.org'>OpenWeatherMap</a>"
		this.crearElemento("h2","Datos de Santiago de Compostela desde <a href='https://openweathermap.org'>OpenWeatherMap</a>","#bMadrid"); 
		this.crearElemento("h3",this.correcto,"#bMadrid");
		this.crearElemento("div","","#bMadrid");
		this.crearElemento("h4","Datos","#bMadrid");
		this.crearElemento("p","","#bMadrid");
		this.cargarDatos();
	}
}
var meteo = new Meteo();