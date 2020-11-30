"use strict";
class CalculadoraDietetica {
	constructor() {
		this.modos = ["Índice de masa corporal", "Metabolismo basal", "Calorías de alimentos (x100gr)", "Gasto de actividades"];
		this.actividades = ["Caminar", "Correr", "Ciclismo", "Tenis"];
		this.sexo = ["Mujer", "Hombre"];
		this.indiceModos = 0;
		this.indiceActividades = 0;
		this.indiceSexo = 0;
		this.indicePantallas = 0;
		this.modo();
	}
	modo() {
		document.getElementById("modo").value = this.modos[this.indiceModos];
		if (this.indiceModos == 0) {
			document.getElementById("labelPantalla1").innerHTML= "Sexo: ";
			document.getElementById("labelPantalla2").innerHTML= "Altura (m): ";
			document.getElementById("labelPantalla3").innerHTML= "Peso (kg): ";
		}
		if (this.indiceModos == 1) {
			document.getElementById("labelPantalla1").innerHTML= "Edad: ";
			document.getElementById("labelPantalla2").innerHTML= "Altura (cm): ";
			document.getElementById("labelPantalla3").innerHTML= "Peso (kg): ";
		}
		if (this.indiceModos == 2) {
			document.getElementById("labelPantalla1").innerHTML= "Carbohidratos: ";
			document.getElementById("labelPantalla2").innerHTML= "Proteínas: ";
			document.getElementById("labelPantalla3").innerHTML= "Grasas: ";
		}
		if (this.indiceModos == 3) {
			document.getElementById("labelPantalla1").innerHTML= "Actividad: ";
			document.getElementById("labelPantalla2").innerHTML= "Tiempo (min): ";
			document.getElementById("labelPantalla3").innerHTML= "Peso (kg): ";
		}
		document.getElementById("labelResultado").innerHTML= "Resultado: ";
	}
	selector() {
		if (this.indiceModos == 0) {
			document.getElementById("pantalla1").value = this.sexo[this.indiceSexo];
		}
		if (this.indiceModos == 3) {
			document.getElementById("pantalla1").value = this.actividades[this.indiceActividades];
		}
	}
	result() {
		if (document.getElementById("pantalla1").value == "" || document.getElementById("pantalla2").value == "" || document.getElementById("pantalla3").value == "") {
			document.getElementById("resultado").value = "ERROR";
		} else {
			if (this.indiceModos == 0) {
				var peso = parseFloat(document.getElementById("pantalla3").value);
				var altura = parseFloat(document.getElementById("pantalla2").value);
				var resultado = peso/Math.pow(altura,2);
				document.getElementById("resultado").value = resultado;
			}
			if (this.indiceModos == 1) {
				var edad = parseFloat(document.getElementById("pantalla1").value);
				var altura = parseFloat(document.getElementById("pantalla2").value);
				var peso = parseFloat(document.getElementById("pantalla3").value);
				var resultado = (10*peso)+(6.25*altura)-(5*edad);
				document.getElementById("resultado").value = resultado;
			}
			if (this.indiceModos == 2) {
				var carbohidratos = parseFloat(document.getElementById("pantalla1").value);
				var proteinas = parseFloat(document.getElementById("pantalla2").value);
				var grasas = parseFloat(document.getElementById("pantalla3").value);
				var resultado = carbohidratos*4+proteinas*4+grasas*9;
				document.getElementById("resultado").value = resultado;
			}
			if (this.indiceModos == 3) {
				if (this.indiceActividades == 0) {
					var factor = 0.051;
				}
				if (this.indiceActividades == 1) {
					var factor = 0.151;
				}
				if (this.indiceActividades == 2) {
					var factor = 0.1;
				}
				if (this.indiceActividades == 3) {
					var factor = 0.109;
				}
				var tiempo = parseFloat(document.getElementById("pantalla2").value);
				var peso = parseFloat(document.getElementById("pantalla3").value);
				var resultado = factor*peso*tiempo;
				document.getElementById("resultado").value = resultado;
			}
		}
	}
	borrar() {
		this.indicePantallas = 0;
		this.indiceActividades = 0;
		this.indiceSexo = 0;
		document.getElementById("pantalla1").value = "";
		document.getElementById("pantalla2").value = "";
		document.getElementById("pantalla3").value = "";
		document.getElementById("resultado").value = "";
	}
	derecha() {
		this.indicePantallas = 0;
		this.indiceModos = (this.indiceModos+1)%this.modos.length;
		this.borrar();
		this.modo();
	}
	izquierda() {
		this.indicePantallas = 0;
		this.indiceModos--;
		if (this.indiceModos<0) {
			this.indiceModos=this.modos.length-1;
		}
		this.borrar();
		this.modo();
	}
	digitos(digito) {
		if (!(this.indiceModos == 0 || this.indiceModos == 3) && this.indicePantallas == 0) {
			document.getElementById("pantalla1").value = document.getElementById("pantalla1").value+digito;
		}
		if (this.indicePantallas == 1) {
			document.getElementById("pantalla2").value = document.getElementById("pantalla2").value+digito;
		}
		if (this.indicePantallas == 2) {
			document.getElementById("pantalla3").value = document.getElementById("pantalla3").value+digito;
		}
	}
	punto() {
		if (!(this.indiceModos == 0 || this.indiceModos == 3) && this.indicePantallas == 0) {
			document.getElementById("pantalla1").value = document.getElementById("pantalla1").value+".";
		}
		if (this.indicePantallas == 1) {
			document.getElementById("pantalla2").value = document.getElementById("pantalla2").value+".";
		}
		if (this.indicePantallas == 2) {
			document.getElementById("pantalla3").value = document.getElementById("pantalla3").value+".";
		}
	}
	arriba() {
		if (this.indiceModos == 0 && this.indicePantallas == 0) {
			this.indiceSexo--;
			if (this.indiceSexo<0) {
				this.indiceSexo=this.sexo.length-1;
			}
		}
		if (this.indiceModos == 3 && this.indicePantallas == 0) {
			this.indiceActividades--;
			if (this.indiceActividades<0) {
				this.indiceActividades=this.actividades.length-1;
			}
		}
		this.selector();
	}
	enter() {
		this.indicePantallas = this.indicePantallas+1;
		if (this.indicePantallas == 3) {
			this.indicePantallas = 0;
			this.result();
		}
		
	}
	abajo() {
		if ((this.indiceModos == 0) && this.indicePantallas == 0) {
			this.indiceSexo = (this.indiceSexo+1)%this.sexo.length;
		}
		if ((this.indiceModos == 3) && this.indicePantallas == 0) {
			this.indiceActividades = (this.indiceActividades+1)%this.actividades.length;
		}
		this.selector();
	}
}
var calculadoraDietetica = new CalculadoraDietetica();