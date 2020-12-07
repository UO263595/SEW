<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, user-scalable-yes">
	<title>Calculadora RPN</title>
	<link rel="stylesheet" href="CalculadoraRPN.css"/>
</head>
<body>
	<header>
		<h1>Calculadora RPN</h1> 
	</header>
	<?php
		// iniciar SESSION
		session_start();
		
		class CalculadoraRPN {
			private $resultado;
			private $memoria;
			
			public function __construct() {
				$this->resultado = "";
				$this->memoria = 0;
			}
			public function getResultado() {
				return $this->resultado;
			}
			public function getMemoria() {
				return $this->memoria;
			}
			public function getPila() {
				$stringPila = "";
				foreach((array)$_SESSION['sessionPila'] as $elemento) {
					$stringPila .= $elemento . " ";
				}
				return $stringPila;
			}
			public function esValido($result) {
				if (!empty($result) && stripos($result,'undefined') === false && stripos($result,'NaN') === false && stripos($result,'error') === false) {
					return true;
				}
				return false;
			}
			public function apilar() {
				$elemento = $_SESSION['sessionResultado'];
				unset($_SESSION['sessionResultado']);
				if ($this->esValido($elemento)) {
					array_push($_SESSION['sessionPila'], $elemento);
				}
			}
			public function desapilar() {
				unset($_SESSION['sessionResultado']);
				if (!empty($_SESSION['sessionPila'])) {
					$this->resultado = array_pop($_SESSION['sessionPila']);
				}
			}
			public function mMenos() {
				if(isset($_SESSION['sessionResultado']) && isset($_SESSION['sessionMemoria']) && $this->esValido($_SESSION['sessionResultado'])) {
					try {
						$_SESSION['sessionMemoria'] = $_SESSION['sessionMemoria'] - $_SESSION['sessionResultado'];
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					} catch(ParseError $p){
						$_SESSION['sessionResultado'] = "Error: " .$p->getMessage();
					}
				}
			}
			public function mMas() {
				if(isset($_SESSION['sessionResultado']) && isset($_SESSION['sessionMemoria']) && $this->esValido($_SESSION['sessionResultado'])) {
					try {
						$_SESSION['sessionMemoria'] = $_SESSION['sessionMemoria'] + $_SESSION['sessionResultado'];
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					} catch(ParseError $p){
						$_SESSION['sessionResultado'] = "Error: " .$p->getMessage();
					}
				}
			}
			public function seno() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$_SESSION['sessionResultado'] = sin(array_pop($_SESSION['sessionPila']));
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function coseno() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$_SESSION['sessionResultado'] = cos(array_pop($_SESSION['sessionPila']));
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function tangente() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$_SESSION['sessionResultado'] = tan(array_pop($_SESSION['sessionPila']));
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function cuadrado() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$_SESSION['sessionResultado'] = pow(array_pop($_SESSION['sessionPila']),2);
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function potencia() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$op2 = array_pop($_SESSION['sessionPila']);
						$op1 = array_pop($_SESSION['sessionPila']);
						$_SESSION['sessionResultado'] = pow($op1,$op2);
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function cosecante() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$_SESSION['sessionResultado'] = 1/sin(array_pop($_SESSION['sessionPila']));
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function secante() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$_SESSION['sessionResultado'] = 1/cos(array_pop($_SESSION['sessionPila']));
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function cotangente() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$_SESSION['sessionResultado'] = 1/tan(array_pop($_SESSION['sessionPila']));
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function raiz() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$_SESSION['sessionResultado'] = sqrt(array_pop($_SESSION['sessionPila']));
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function potenciaDiez() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$_SESSION['sessionResultado'] = pow(10,array_pop($_SESSION['sessionPila']));
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function logaritmo() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$_SESSION['sessionResultado'] = log10(array_pop($_SESSION['sessionPila']));
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function exponencial() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$_SESSION['sessionResultado'] = exp(array_pop($_SESSION['sessionPila']));
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function modulo() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$op2 = array_pop($_SESSION['sessionPila']);
						$op1 = array_pop($_SESSION['sessionPila']);
						$_SESSION['sessionResultado'] = fmod($op1,$op2);
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function mrc() {
				if(isset($_SESSION['sessionMemoria'])) {
					$this->resultado = $_SESSION['sessionMemoria'];
				}
			}
			public function borrarTodo() {
				unset($_SESSION['sessionPila']);
				unset($_SESSION['sessionResultado']);
			}
			public function borrarDigito() {
				$expresion = $_SESSION['sessionResultado'];
				$_SESSION['sessionResultado'] = substr($expresion,0,strlen($expresion)-1);
			}
			public function division() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$op2 = array_pop($_SESSION['sessionPila']);
						$op1 = array_pop($_SESSION['sessionPila']);
						$_SESSION['sessionResultado'] = $op1/$op2;
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function teclaPi() {
				$this->resultado .= pi();
			}
			public function digitos($digito) {
				$this->resultado .= $digito;
			}
			public function multiplicacion() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$op2 = array_pop($_SESSION['sessionPila']);
						$op1 = array_pop($_SESSION['sessionPila']);
						$_SESSION['sessionResultado'] = $op1*$op2;
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function factorial() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$_SESSION['sessionResultado'] = $this->factorialR(array_pop($_SESSION['sessionPila']));
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function factorialR($n) {
				$total = 1; 
				for ($i=1; $i<=$n; $i++) {
					$total = $total * $i; 
				}
				return $total;
			}
			public function resta() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$op2 = array_pop($_SESSION['sessionPila']);
						$op1 = array_pop($_SESSION['sessionPila']);
						$_SESSION['sessionResultado'] = $op1-$op2;
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function absoluto() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$_SESSION['sessionResultado'] = abs(array_pop($_SESSION['sessionPila']));
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function suma() {
				if (isset($_SESSION['sessionPila']) && !empty($_SESSION['sessionPila'])) {
					try {
						$op2 = array_pop($_SESSION['sessionPila']);
						$op1 = array_pop($_SESSION['sessionPila']);
						$_SESSION['sessionResultado'] = $op1+$op2;
						$this->apilar();
					} catch (Exception $e) {
						$_SESSION['sessionResultado'] = "Error: " .$e->getMessage();
					}
				}
			}
			public function parentesis() {
				$this->resultado = '(' . $this->resultado . ')';
			}
			public function punto() {
				$this->resultado .= '.';
			}
		}
		
		$calculadoraRPN = new CalculadoraRPN();
		$miPila = "";
		$miResultado = "";
		if (count($_POST)>0) {
			if(isset($_POST['mMenos'])) $calculadoraRPN->mMenos();
			if(isset($_POST['mMas'])) $calculadoraRPN->mMas();
			if(isset($_POST['seno'])) $calculadoraRPN->seno();
			if(isset($_POST['coseno'])) $calculadoraRPN->coseno();
			if(isset($_POST['tangente'])) $calculadoraRPN->tangente();
			
			if(isset($_POST['cuadrado'])) $calculadoraRPN->cuadrado();
			if(isset($_POST['potencia'])) $calculadoraRPN->potencia();
			if(isset($_POST['cosecante'])) $calculadoraRPN->cosecante();
			if(isset($_POST['secante'])) $calculadoraRPN->secante();
			if(isset($_POST['cotangente'])) $calculadoraRPN->cotangente();
			
			if(isset($_POST['raiz'])) $calculadoraRPN->raiz();
			if(isset($_POST['potenciaDiez'])) $calculadoraRPN->potenciaDiez();
			if(isset($_POST['logaritmo'])) $calculadoraRPN->logaritmo();
			if(isset($_POST['exponencial'])) $calculadoraRPN->exponencial();
			if(isset($_POST['modulo'])) $calculadoraRPN->modulo();
			
			if(isset($_POST['mcr'])) $calculadoraRPN->mrc();
			if(isset($_POST['borrarCE'])) $calculadoraRPN->desapilar();
			if(isset($_POST['borrarC'])) $calculadoraRPN->borrarTodo();
			if(isset($_POST['borrarDigito'])) $calculadoraRPN->borrarDigito();
			if(isset($_POST['division'])) $calculadoraRPN->division();
			
			if(isset($_POST['pi'])) $calculadoraRPN->teclaPi();
			if(isset($_POST['siete'])) $calculadoraRPN->mMenos();
			if(isset($_POST['siete'])) $calculadoraRPN->digitos(7);
			if(isset($_POST['ocho'])) $calculadoraRPN->digitos(8);
			if(isset($_POST['nueve'])) $calculadoraRPN->digitos(9);
			if(isset($_POST['multiplicacion'])) $calculadoraRPN->multiplicacion();
			
			if(isset($_POST['factorial'])) $calculadoraRPN->factorial();
			if(isset($_POST['cuatro'])) $calculadoraRPN->digitos(4);
			if(isset($_POST['cinco'])) $calculadoraRPN->digitos(5);
			if(isset($_POST['seis'])) $calculadoraRPN->digitos(6);
			if(isset($_POST['resta'])) $calculadoraRPN->resta();
			
			if(isset($_POST['absoluto'])) $calculadoraRPN->absoluto();
			if(isset($_POST['uno'])) $calculadoraRPN->digitos(1);
			if(isset($_POST['dos'])) $calculadoraRPN->digitos(2);
			if(isset($_POST['tres'])) $calculadoraRPN->digitos(3);
			if(isset($_POST['suma'])) $calculadoraRPN->suma();
			
			if(isset($_POST['parentesis'])) $calculadoraRPN->parentesis();
			if(isset($_POST['igual'])) $calculadoraRPN->igual();
			if(isset($_POST['cero'])) $calculadoraRPN->digitos(0);
			if(isset($_POST['punto'])) $calculadoraRPN->punto();
			if(isset($_POST['enter'])) $calculadoraRPN->apilar();

			if(isset($_SESSION['sessionResultado'])) {
				$_SESSION['sessionResultado'] .= $calculadoraRPN->getResultado();
			} else {
				$_SESSION['sessionResultado'] = "";
				$_SESSION['sessionResultado'] .= $calculadoraRPN->getResultado();
			}
			if(!isset($_SESSION['sessionPila'])) {
				$_SESSION['sessionPila'] = array();
			}
			if(!isset($_SESSION['sessionMemoria'])) {
				$_SESSION['sessionMemoria'] = 0;
				$_SESSION['sessionMemoria'] .= $calculadoraRPN->getMemoria();
			} 
			$miPila = $calculadoraRPN->getPila();
			$miResultado = $_SESSION['sessionResultado'];
		}
	
		echo "
		<form action='#' method='post' name='calculadora'>
		<div class='cuerpo'>
			<label for='pila'>PILA</label>
			<input title='pila' type='text' id='pila' value='$miPila' readonly />
			<label for='pantalla'>RESULTADO</label>
			<input title='pantalla' type='text' id='pantalla' value='$miResultado' readonly />
			<div>
				<input class='darkGray' type='submit' name='mMenos' value='m-'/>
				<input class='darkGray' type='submit' name='mMas' value='m+'/>
				<input class='darkGray' type='submit' name='seno' value='sin'/>
				<input class='darkGray' type='submit' name='coseno' value='cos'/>
				<input class='darkGray' type='submit' name='tangente' value='tan'/>
			</div>
			<div>
				<input class='darkGray' type='submit' name='cuadrado' value='x&#178;'/>
				<input class='darkGray' type='submit' name='potencia' value='x&#696;'/>
				<input class='darkGray' type='submit' name='cosecante' value='csc'/>
				<input class='darkGray' type='submit' name='secante' value='sec'/>
				<input class='darkGray' type='submit' name='cotangente' value='cot'/>
			</div>
			<div>
				<input class='darkGray' type='submit' name='raiz' value='&#8730;'/>
				<input class='darkGray' type='submit' name='potenciaDiez' value='10&#829;'/>
				<input class='darkGray' type='submit' name='logaritmo' value='log'/>
				<input class='darkGray' type='submit' name='exponencial' value='Exp'/>
				<input class='darkGray' type='submit' name='modulo' value='Mod'/>
			</div>
			<div>
				<input class='darkGray' type='submit' name='mcr' value='mrc'/>
				<input class='darkGray' type='submit' name='borrarCE' value='CE'/>
				<input class='darkGray' type='submit' name='borrarC' value='C'/>
				<input class='darkGray' type='submit' name='borrarDigito' value='&#129092;'/>
				<input class='darkGray' type='submit' name='division' value='/'/>
			</div>
			<div>
				<input class='darkGray' type='submit' name='pi' value='&#120587;'/>
				<input class='lightGray' type='submit' name='siete' value='7'/>
				<input class='lightGray' type='submit' name='ocho' value='8'/>
				<input class='lightGray' type='submit' name='nueve' value='9'/>
				<input class='darkGray' type='submit' name='multiplicacion' value='*'/>
			</div>
			<div>
				<input class='darkGray' type='submit' name='factorial' value='n!'/>
				<input class='lightGray' type='submit' name='cuatro' value='4'/>
				<input class='lightGray' type='submit' name='cinco' value='5'/>
				<input class='lightGray' type='submit' name='seis' value='6'/>
				<input class='darkGray' type='submit' name='resta' value='-'/>
			</div>
			<div>
				<input class='darkGray' type='submit' name='absoluto' value='|x|'/>
				<input class='lightGray' type='submit' name='uno' value='1'/>
				<input class='lightGray' type='submit' name='dos' value='2'/>
				<input class='lightGray' type='submit' name='tres' value='3'/>
				<input class='darkGray' type='submit' name='suma' value='+'/>
			</div>
			<div>
				<input class='darkGray' type='submit' name='parentesis' value='( )'/>
				<input class='darkGray' type='submit' name='igual' value='='/>
				<input class='lightGray' type='submit' name='cero' value='0'/>
				<input class='lightGray' type='submit' name='punto' value='.'/>
				<input class='darkGray' type='submit' name='enter' value='enter'/>
			</div>
		</div>
		</form>
		"
	?>
</body>
</html>