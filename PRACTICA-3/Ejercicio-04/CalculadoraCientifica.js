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
class CalculadoraCientifica extends CalculadoraBasica {
	constructor() {
		super();
	}
	cosecante() {
		try {
			this.pantalla = 1/Math.sin(eval(this.pantalla));
			document.getElementById("pantalla").value = this.pantalla;
		} catch (err) {
			document.getElementById("pantalla").value = "ERROR = " + err;
			this.pantalla = "";
		}
	}
	secante() {
		try {
			this.pantalla = 1/Math.cos(eval(this.pantalla));
			document.getElementById("pantalla").value = this.pantalla;
		} catch (err) {
			document.getElementById("pantalla").value = "ERROR = " + err;
			this.pantalla = "";
		}
	}
	cotangente() {
		try {
			this.pantalla = 1/Math.tan(eval(this.pantalla));
			document.getElementById("pantalla").value = this.pantalla;
		} catch (err) {
			document.getElementById("pantalla").value = "ERROR = " + err;
			this.pantalla = "";
		}
	}
	cuadrado() {
		try {
			this.pantalla = Math.pow(eval(this.pantalla),2);
			document.getElementById("pantalla").value = this.pantalla;
		} catch (err) {
			document.getElementById("pantalla").value = "ERROR = " + err;
			this.pantalla = "";
		}
	}
	potencia() {
		this.pantalla += "**";
		document.getElementById("pantalla").value = this.pantalla;
	}
	seno() {
		try {
			this.pantalla = Math.sin(eval(this.pantalla));
			document.getElementById("pantalla").value = this.pantalla;
		} catch (err) {
			document.getElementById("pantalla").value = "ERROR = " + err;
			this.pantalla = "";
		}
	}
	coseno() {
		try {
			this.pantalla = Math.cos(eval(this.pantalla));
			document.getElementById("pantalla").value = this.pantalla;
		} catch (err) {
			document.getElementById("pantalla").value = "ERROR = " + err;
			this.pantalla = "";
		}
	}
	tangente() {
		try {
			this.pantalla = Math.tan(eval(this.pantalla));
			document.getElementById("pantalla").value = this.pantalla;
		} catch (err) {
			document.getElementById("pantalla").value = "ERROR = " + err;
			this.pantalla = "";
		}
	}
	raiz() {
		try {
			this.pantalla = Math.sqrt(eval(this.pantalla));
			document.getElementById("pantalla").value = this.pantalla;
		} catch (err) {
			document.getElementById("pantalla").value = "ERROR = " + err;
			this.pantalla = "";
		}
	}
	potenciaDiez() {
		try {
			this.pantalla = Math.pow(10,eval(this.pantalla));
			document.getElementById("pantalla").value = this.pantalla;
		} catch (err) {
			document.getElementById("pantalla").value = "ERROR = " + err;
			this.pantalla = "";
		}
	}
	logaritmo() {
		try {
			this.pantalla = Math.log(eval(this.pantalla));
			document.getElementById("pantalla").value = this.pantalla;
		} catch (err) {
			document.getElementById("pantalla").value = "ERROR = " + err;
			this.pantalla = "";
		}
	}
	exponencial() {
		try {
			this.pantalla = Math.exp(eval(this.pantalla));
			document.getElementById("pantalla").value = this.pantalla;
		} catch (err) {
			document.getElementById("pantalla").value = "ERROR = " + err;
			this.pantalla = "";
		}
	}
	modulo() {
		this.pantalla += "%";
		document.getElementById("pantalla").value = this.pantalla;
	}
	borrarDigito() {
		this.pantalla = this.pantalla.substring(0, this.pantalla.length-1);
		document.getElementById("pantalla").value = this.pantalla;
	}
	pi() {
		this.pantalla += Math.PI;
		document.getElementById("pantalla").value = this.pantalla;
	}
	factorial() {
		try {
			this.pantalla = this.factorialR(eval(this.pantalla));
			document.getElementById("pantalla").value = this.pantalla;
		} catch (err) {
			document.getElementById("pantalla").value = "ERROR = " + err;
			this.pantalla = "";
		}
	}
	factorialR(n) {
		var i, total = 1; 
		for (i=1; i<=n; i++) {
			total = total * i; 
		}
		return total;
	}
	absoluto() {
		try {
			this.pantalla = Math.abs(eval(this.pantalla));
			document.getElementById("pantalla").value = this.pantalla;
		} catch (err) {
			document.getElementById("pantalla").value = "ERROR = " + err;
			this.pantalla = "";
		}
	}
	parentesisIzquierdo() {
		this.pantalla += "(";
		document.getElementById("pantalla").value = this.pantalla;
	}
	parentesisDerecho() {
		this.pantalla += ")";
		document.getElementById("pantalla").value = this.pantalla;
	}
}
var calculadoraCientifica = new CalculadoraCientifica();