"use strict";
class Visualizador {
	constructor() {
		var soportaAPI = document.getElementById("soportaAPI");
		if (!(window.File && window.FileReader && window.FileList && window.Blob)) { 
			soportaAPI.innerText = "¡¡¡Este navegador NO soporta el API File y este programa puede no funcionar correctamente!!!"
		}
		
		var canvas = document.getElementById("canvas");
		var ctx = canvas.getContext("2d");
		ctx.strokeStyle = "#000";
		ctx.lineWidth = 5;
		ctx.lineJoin = "round";
		ctx.lineCap = "round";
		
		this.isDrawing = false;
		this.ultimaX = 0;
		this.ultimaY = 0;
	}
	cargarArchivo(files) {
		var archivo = files[0];
		
		var img = new Image();
		var reader = new FileReader();
		reader.onload = function(event) {
			img.src = event.target.result;
		}
		reader.readAsDataURL(archivo);
		
		var canvas = document.getElementById("canvas");
		var ctx = canvas.getContext("2d");
		img.onload = function(){
			ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
		}		
	}
	fullscreen() {
		var elem = document.getElementById("canvas");
		if (elem.requestFullscreen) {
			elem.requestFullscreen();
		} 
	}
	dibujar(e) {
		if (!this.isDrawing) return;
		console.log(e);
		var ultimaX = e.offsetX;
		var ultimaY = e.offsetY;
		var canvas = document.getElementById("canvas");
		var ctx = canvas.getContext("2d");
		ctx.beginPath();
		ctx.moveTo(ultimaX, ultimaY);
		ctx.lineTo(ultimaX, ultimaY);
		ctx.stroke();
		[ultimaX, ultimaY] = [e.offsetX, e.offsetY];
	}
	empezarADibujar() {
		this.isDrawing = true;
	}
	pararDeDibujar() {
		this.isDrawing = false;
	}
	borrar() {
		var canvas = document.getElementById("canvas");
		canvas.width=canvas.width;
		var ctx = canvas.getContext("2d");
		ctx.strokeStyle = "#000";
		ctx.lineWidth = 5;
		ctx.lineJoin = "round";
		ctx.lineCap = "round";
	}
}
var visualizador = new Visualizador();

var canvas = document.getElementById("canvas");
canvas.addEventListener('mousemove', visualizador.dibujar);
canvas.addEventListener('mousedown', visualizador.empezarADibujar);
canvas.addEventListener('mouseup', visualizador.pararDeDibujar);
canvas.addEventListener('mouseout', visualizador.pararDeDibujar);