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
		this.lastX = 0;
		this.lastY = 0;
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
		var lastX = e.offsetX;
		var lastY = e.offsetY;
		var canvas = document.getElementById("canvas");
		var ctx = canvas.getContext("2d");
		ctx.beginPath();
		ctx.moveTo(lastX, lastY);
		ctx.lineTo(e.offsetX, e.offsetY);
		ctx.stroke();
		[lastX, lastY] = [e.offsetX, e.offsetY];
	}
	empezarADibujar() {
		this.isDrawing = true;
	}
	pararDeDibujar() {
		this.isDrawing = false;
	}
}
var visualizador = new Visualizador();

var canvas = document.getElementById("canvas");
canvas.addEventListener('mousemove', visualizador.dibujar);
canvas.addEventListener('mousedown', visualizador.empezarADibujar);
canvas.addEventListener('mouseup', visualizador.pararDeDibujar);
canvas.addEventListener('mouseout', visualizador.pararDeDibujar);