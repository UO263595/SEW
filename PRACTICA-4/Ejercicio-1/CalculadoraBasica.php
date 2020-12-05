<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, user-scalable-yes">
	<title>Calculadora Básica</title>
	<link rel="stylesheet" href="CalculadoraBasica.css"/>
</head>
<body>
	<header>
		<h1>Calculadora Básica</h1> 
	</header>
	<?php
		// iniciar SESSION
		session_start();
		
		class CalculadoraBasica {
			private $pantalla;
			private $memoria;
			
			public function __construct(){
				$this->pantalla = "";
				$this->memoria = 0;
			}
			public function getPantalla() {
				return $this->pantalla;
			}
			public function getMemoria() {
				return $this->memoria;
			}
			public function digitos($digito) {
				$this->pantalla .= $digito;
			}
			public function punto() {
				$this->pantalla .= '.';
			}
			public function suma() {
				$this->pantalla .= '+';
			}
			public function resta() {
				$this->pantalla .= '-';
			}
			public function multiplicacion() {
				$this->pantalla .= '*';
			}
			public function division() {
				$this->pantalla .= '/';
			}
			public function mrc() {
				if(isset($_SESSION['sessionMemoria'])) {
					$this->pantalla = $_SESSION['sessionMemoria'];
				}
			}
			public function mMenos() {
				$expresion = $_SESSION['sessionMemoria'] . '-' . $_SESSION['sessionPantalla'];
				try {
					$_SESSION['sessionMemoria'] = eval("return $expresion ;"); 
					$expresion = $_SESSION['sessionMemoria'];
				} catch (Exception $e) {
					$_SESSION['sessionPantalla'] = "Error: " .$e->getMessage();
				} catch(ParseError $p){
					$_SESSION['sessionPantalla'] = "Error: " .$p->getMessage();
				}
			}
			public function mMas() {
				$expresion = $_SESSION['sessionMemoria'] . '+' . $_SESSION['sessionPantalla'];
				try {
					$_SESSION['sessionMemoria'] = eval("return $expresion ;"); 
					$expresion = $_SESSION['sessionMemoria'];
				} catch (Exception $e) {
					$_SESSION['sessionPantalla'] = "Error: " .$e->getMessage();
				} catch(ParseError $p){
					$_SESSION['sessionPantalla'] = "Error: " .$p->getMessage();
				}
			}
			public function borrar() {
				unset($_SESSION['sessionPantalla']);
			}
			public function igual() {
				if(isset($_SESSION['sessionPantalla'])) {
					$expresion = $_SESSION['sessionPantalla'];
					try {
						$_SESSION['sessionPantalla'] = eval("return $expresion ;"); 
					} catch (Exception $e) {
						$_SESSION['sessionPantalla'] = "Error: " .$e->getMessage();
					} catch(ParseError $p){
						$_SESSION['sessionPantalla'] = "Error: " .$p->getMessage();
					}
				}
			}
		}
	
		$calculadoraBasica = new CalculadoraBasica();
		$miPantalla = "";
		if (count($_POST)>0) {
			if(isset($_POST['mcr'])) $calculadoraBasica->mrc();
			if(isset($_POST['mMenos'])) $calculadoraBasica->mMenos();
			if(isset($_POST['mMas'])) $calculadoraBasica->mMas();
			if(isset($_POST['division'])) $calculadoraBasica->division();
			
			if(isset($_POST['siete'])) $calculadoraBasica->digitos(7);
			if(isset($_POST['ocho'])) $calculadoraBasica->digitos(8);
			if(isset($_POST['nueve'])) $calculadoraBasica->digitos(9);
			if(isset($_POST['multiplicacion'])) $calculadoraBasica->multiplicacion();
		
			if(isset($_POST['cuatro'])) $calculadoraBasica->digitos(4);
			if(isset($_POST['cinco'])) $calculadoraBasica->digitos(5);
			if(isset($_POST['seis'])) $calculadoraBasica->digitos(6);
			if(isset($_POST['resta'])) $calculadoraBasica->resta();
			
			if(isset($_POST['uno'])) $calculadoraBasica->digitos(1);
			if(isset($_POST['dos'])) $calculadoraBasica->digitos(2);
			if(isset($_POST['tres'])) $calculadoraBasica->digitos(3);
			if(isset($_POST['suma'])) $calculadoraBasica->suma();
			
			if(isset($_POST['cero'])) $calculadoraBasica->digitos(0);
			if(isset($_POST['punto'])) $calculadoraBasica->punto();
			if(isset($_POST['borrar'])) $calculadoraBasica->borrar();
			if(isset($_POST['igual'])) $calculadoraBasica->igual();
        
			if(isset($_SESSION['sessionPantalla'])) {
				$_SESSION['sessionPantalla'] .= $calculadoraBasica->getPantalla();
			} else {
				$_SESSION['sessionPantalla'] = "";
				$_SESSION['sessionPantalla'] .= $calculadoraBasica->getPantalla();
			}
			if(!isset($_SESSION['sessionMemoria'])) {
				$_SESSION['sessionMemoria'] = 0;
				$_SESSION['sessionMemoria'] .= $calculadoraBasica->getMemoria();
			} 
			$miPantalla = $_SESSION['sessionPantalla'];
		}
	
		echo "
		<form action='#' method='post' name='calculadora'>
		<div class='cuerpo'>
			<label for='pantalla'>CALCULADORA</label>
			<input title='pantalla' type='text' id='pantalla' value='$miPantalla' readonly />
			<div>
				<input class='darkGray' type='submit' name='mcr' value='mrc'/>
				<input class='darkGray' type='submit' name='mMenos' value='m-'/>
				<input class='darkGray' type='submit' name='mMas' value='m+'/>
				<input class='red' type='submit' name='division' value='/'/>
			</div>
			<div>
				<input class='lightGray' type='submit' name='siete' value='7'/>
				<input class='lightGray' type='submit' name='ocho' value='8'/>
				<input class='lightGray' type='submit' name='nueve' value='9'/>
				<input class='red' type='submit' name='multiplicacion' value='*'/>
			</div>
			<div>
				<input class='lightGray' type='submit' name='cuatro' value='4'/>
				<input class='lightGray' type='submit' name='cinco' value='5'/>
				<input class='lightGray' type='submit' name='seis' value='6'/>
				<input class='red' type='submit' name='resta' value='-'/>
			</div>
			<div>
				<input class='lightGray' type='submit' name='uno' value='1'/>
				<input class='lightGray' type='submit' name='dos' value='2'/>
				<input class='lightGray' type='submit' name='tres' value='3'/>
				<input class='red' type='submit' name='suma' value='+'/>
			</div>
			<div>
				<input class='lightGray' type='submit' name='cero' value='0'/>
				<input class='lightGray' type='submit' name='punto' value='.'/>
				<input class='lightGray' type='submit' name='borrar' value='C'/>
				<input class='lightGray' type='submit' name='igual' value='='/>
			</div>
		</div>
		</form>
		"
	?>
</body>
</html>