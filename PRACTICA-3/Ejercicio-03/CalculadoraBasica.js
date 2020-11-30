"use strict";
class CalculadoraBasica {
	constructor() {
		this.pantalla = "";
		this.memoria = 0;
	}
	digitos(digito) {
		this.pantalla += digito;
		document.getElementById("pantalla").value = this.pantalla;
	}
	punto() {
		this.pantalla += ".";
		document.getElementById("pantalla").value = this.pantalla;
	}
	suma() {
		this.pantalla += "+";
		document.getElementById("pantalla").value = this.pantalla;
	}
	resta() {
		this.pantalla += "-";
		document.getElementById("pantalla").value = this.pantalla;
	}
	multiplicacion() {
		this.pantalla += "*";
		document.getElementById("pantalla").value = this.pantalla;
	}
	division() {
		this.pantalla += "/";
		document.getElementById("pantalla").value = this.pantalla;
	}
	mrc() {
		this.pantalla += this.memoria;
		document.getElementById("pantalla").value = this.pantalla;
	}
	mMenos() {
		try {
			this.memoria = this.memoria - eval(this.pantalla);
		} catch (err) {
			document.getElementById("pantalla").value = "ERROR = " + err;
			this.pantalla = "";
		}
	}
	mMas() {
		try {
			this.memoria = this.memoria + eval(this.pantalla);
		} catch (err) {
			document.getElementById("pantalla").value = "ERROR = " + err;
			this.pantalla = "";
		}
	}
	borrar() {
		this.pantalla = "";
		document.getElementById("pantalla").value = this.pantalla;
	}
	igual() {
		try {
			this.pantalla = eval(this.pantalla);
			document.getElementById("pantalla").value = this.pantalla;
		} catch (err) {
			document.getElementById("pantalla").value = "ERROR = " + err;
			this.pantalla = "";
		}
	}
}
var calculadoraBasica = new CalculadoraBasica();