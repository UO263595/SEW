<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, user-scalable-yes">
	<title>Calculadora Científica</title>
	<link rel="stylesheet" href="CalculadoraCientifica.css"/>
</head>
<body>
	<header>
		<h1>Calculadora Científica</h1> 
	</header>
	<?php	
		// iniciar SESSION
		session_start();
		
		class CalculadoraBasica {
			protected $pantalla;
			protected $memoria;
			
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
				if(isset($_SESSION['sessionPantalla']) && isset($_SESSION['sessionMemoria'])) {
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
			}
			public function mMas() {
				if(isset($_SESSION['sessionPantalla']) && isset($_SESSION['sessionMemoria'])) {
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
		class CalculadoraCientifica extends CalculadoraBasica {
			public function __construct(){
				parent::__construct();
			}
			public function cosecante() {
				if(isset($_SESSION['sessionPantalla'])) {
					$expresion = $_SESSION['sessionPantalla'];
					try {
						$_SESSION['sessionPantalla'] = 1/sin(eval("return $expresion ;")); 
					} catch (Exception $e) {
						$_SESSION['sessionPantalla'] = "Error: " .$e->getMessage();
					} catch(ParseError $p){
						$_SESSION['sessionPantalla'] = "Error: " .$p->getMessage();
					}
				}
			}
			public function secante() {
				if(isset($_SESSION['sessionPantalla'])) {
					$expresion = $_SESSION['sessionPantalla'];
					try {
						$_SESSION['sessionPantalla'] = 1/cos(eval("return $expresion ;")); 
					} catch (Exception $e) {
						$_SESSION['sessionPantalla'] = "Error: " .$e->getMessage();
					} catch(ParseError $p){
						$_SESSION['sessionPantalla'] = "Error: " .$p->getMessage();
					}
				}
			}
			public function cotangente() {
				if(isset($_SESSION['sessionPantalla'])) {
					$expresion = $_SESSION['sessionPantalla'];
					try {
						$_SESSION['sessionPantalla'] = 1/tan(eval("return $expresion ;")); 
					} catch (Exception $e) {
						$_SESSION['sessionPantalla'] = "Error: " .$e->getMessage();
					} catch(ParseError $p){
						$_SESSION['sessionPantalla'] = "Error: " .$p->getMessage();
					}
				}
			}
			public function cuadrado() {
				if(isset($_SESSION['sessionPantalla'])) {
					$expresion = $_SESSION['sessionPantalla'];
					try {
						$_SESSION['sessionPantalla'] = pow((eval("return $expresion ;")),2); 
					} catch (Exception $e) {
						$_SESSION['sessionPantalla'] = "Error: " .$e->getMessage();
					} catch(ParseError $p){
						$_SESSION['sessionPantalla'] = "Error: " .$p->getMessage();
					}
				}
			}
			public function potencia() {
				$this->pantalla .= '**';
			}
			public function seno() {
				if(isset($_SESSION['sessionPantalla'])) {
					$expresion = $_SESSION['sessionPantalla'];
					try {
						$_SESSION['sessionPantalla'] = sin(eval("return $expresion ;")); 
					} catch (Exception $e) {
						$_SESSION['sessionPantalla'] = "Error: " .$e->getMessage();
					} catch(ParseError $p){
						$_SESSION['sessionPantalla'] = "Error: " .$p->getMessage();
					}
				}
			}
			public function coseno() {
				if(isset($_SESSION['sessionPantalla'])) {
					$expresion = $_SESSION['sessionPantalla'];
					try {
						$_SESSION['sessionPantalla'] = cos(eval("return $expresion ;")); 
					} catch (Exception $e) {
						$_SESSION['sessionPantalla'] = "Error: " .$e->getMessage();
					} catch(ParseError $p){
						$_SESSION['sessionPantalla'] = "Error: " .$p->getMessage();
					}
				}
			}
			public function tangente() {
				if(isset($_SESSION['sessionPantalla'])) {
					$expresion = $_SESSION['sessionPantalla'];
					try {
						$_SESSION['sessionPantalla'] = tan(eval("return $expresion ;")); 
					} catch (Exception $e) {
						$_SESSION['sessionPantalla'] = "Error: " .$e->getMessage();
					} catch(ParseError $p){
						$_SESSION['sessionPantalla'] = "Error: " .$p->getMessage();
					}
				}
			}
			public function raiz() {
				if(isset($_SESSION['sessionPantalla'])) {
					$expresion = $_SESSION['sessionPantalla'];
					try {
						$_SESSION['sessionPantalla'] = sqrt(eval("return $expresion ;")); 
					} catch (Exception $e) {
						$_SESSION['sessionPantalla'] = "Error: " .$e->getMessage();
					} catch(ParseError $p){
						$_SESSION['sessionPantalla'] = "Error: " .$p->getMessage();
					}
				}
			}
			public function potenciaDiez() {
				if(isset($_SESSION['sessionPantalla'])) {
					$expresion = $_SESSION['sessionPantalla'];
					try {
						$_SESSION['sessionPantalla'] = pow(10,(eval("return $expresion ;"))); 
					} catch (Exception $e) {
						$_SESSION['sessionPantalla'] = "Error: " .$e->getMessage();
					} catch(ParseError $p){
						$_SESSION['sessionPantalla'] = "Error: " .$p->getMessage();
					}
				}
			}
			public function logaritmo() {
				if(isset($_SESSION['sessionPantalla'])) {
					$expresion = $_SESSION['sessionPantalla'];
					try {
						$_SESSION['sessionPantalla'] = log10(eval("return $expresion ;")); 
					} catch (Exception $e) {
						$_SESSION['sessionPantalla'] = "Error: " .$e->getMessage();
					} catch(ParseError $p){
						$_SESSION['sessionPantalla'] = "Error: " .$p->getMessage();
					}
				}
			}
			public function exponencial() {
				if(isset($_SESSION['sessionPantalla'])) {
					$expresion = $_SESSION['sessionPantalla'];
					try {
						$_SESSION['sessionPantalla'] = exp(eval("return $expresion ;")); 
					} catch (Exception $e) {
						$_SESSION['sessionPantalla'] = "Error: " .$e->getMessage();
					} catch(ParseError $p){
						$_SESSION['sessionPantalla'] = "Error: " .$p->getMessage();
					}
				}
			}
			public function modulo() {
				$this->pantalla .= '%';
			}
			public function borrarDigito() {
				$expresion = $_SESSION['sessionPantalla'];
				$_SESSION['sessionPantalla'] = substr($expresion,0,strlen($expresion)-1);
			}
			public function teclaPi() {
				$this->pantalla .= pi();
			}
			public function factorial() {
				if(isset($_SESSION['sessionPantalla'])) {
					$expresion = $_SESSION['sessionPantalla'];
					try {
						$_SESSION['sessionPantalla'] = $this->factorialR(eval("return $expresion ;")); 
					} catch (Exception $e) {
						$_SESSION['sessionPantalla'] = "Error: " .$e->getMessage();
					} catch(ParseError $p){
						$_SESSION['sessionPantalla'] = "Error: " .$p->getMessage();
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
			public function absoluto() {
				if(isset($_SESSION['sessionPantalla'])) {
					$expresion = $_SESSION['sessionPantalla'];
					try {
						$_SESSION['sessionPantalla'] = abs(eval("return $expresion ;")); 
					} catch (Exception $e) {
						$_SESSION['sessionPantalla'] = "Error: " .$e->getMessage();
					} catch(ParseError $p){
						$_SESSION['sessionPantalla'] = "Error: " .$p->getMessage();
					}
				}
			}
			public function parentesisIzquierdo() {
				$this->pantalla .= '(';
			}
			public function parentesisDerecho() {
				$this->pantalla .= ')';
			}
		}
	
		$calculadoraCientifica = new CalculadoraCientifica();
		$miPantalla = "";
		if (count($_POST)>0) {
			if(isset($_POST['mMenos'])) $calculadoraCientifica->mMenos();
			if(isset($_POST['mMas'])) $calculadoraCientifica->mMas();
			if(isset($_POST['seno'])) $calculadoraCientifica->seno();
			if(isset($_POST['coseno'])) $calculadoraCientifica->coseno();
			if(isset($_POST['tangente'])) $calculadoraCientifica->tangente();
			
			if(isset($_POST['cuadrado'])) $calculadoraCientifica->cuadrado();
			if(isset($_POST['potencia'])) $calculadoraCientifica->potencia();
			if(isset($_POST['cosecante'])) $calculadoraCientifica->cosecante();
			if(isset($_POST['secante'])) $calculadoraCientifica->secante();
			if(isset($_POST['cotangente'])) $calculadoraCientifica->cotangente();
			
			if(isset($_POST['raiz'])) $calculadoraCientifica->raiz();
			if(isset($_POST['potenciaDiez'])) $calculadoraCientifica->potenciaDiez();
			if(isset($_POST['logaritmo'])) $calculadoraCientifica->logaritmo();
			if(isset($_POST['exponencial'])) $calculadoraCientifica->exponencial();
			if(isset($_POST['modulo'])) $calculadoraCientifica->modulo();
			
			if(isset($_POST['mcr'])) $calculadoraCientifica->mcr();
			if(isset($_POST['borrarCE'])) $calculadoraCientifica->borrar();
			if(isset($_POST['borrarC'])) $calculadoraCientifica->borrar();
			if(isset($_POST['borrarDigito'])) $calculadoraCientifica->borrarDigito();
			if(isset($_POST['division'])) $calculadoraCientifica->division();
			
			if(isset($_POST['pi'])) $calculadoraCientifica->teclaPi();
			if(isset($_POST['siete'])) $calculadoraCientifica->mMenos();
			if(isset($_POST['siete'])) $calculadoraCientifica->digitos(7);
			if(isset($_POST['ocho'])) $calculadoraCientifica->digitos(8);
			if(isset($_POST['nueve'])) $calculadoraCientifica->digitos(9);
			if(isset($_POST['multiplicacion'])) $calculadoraCientifica->multiplicacion();
			
			if(isset($_POST['factorial'])) $calculadoraCientifica->factorial();
			if(isset($_POST['cuatro'])) $calculadoraCientifica->digitos(4);
			if(isset($_POST['cinco'])) $calculadoraCientifica->digitos(5);
			if(isset($_POST['seis'])) $calculadoraCientifica->digitos(6);
			if(isset($_POST['resta'])) $calculadoraCientifica->resta();
			
			if(isset($_POST['absoluto'])) $calculadoraCientifica->absoluto();
			if(isset($_POST['uno'])) $calculadoraCientifica->digitos(1);
			if(isset($_POST['dos'])) $calculadoraCientifica->digitos(2);
			if(isset($_POST['tres'])) $calculadoraCientifica->digitos(3);
			if(isset($_POST['suma'])) $calculadoraCientifica->suma();
			
			if(isset($_POST['parentesisIzquierdo'])) $calculadoraCientifica->parentesisIzquierdo();
			if(isset($_POST['parentesisDerecho'])) $calculadoraCientifica->parentesisDerecho();
			if(isset($_POST['cero'])) $calculadoraCientifica->digitos(0);
			if(isset($_POST['punto'])) $calculadoraCientifica->punto();
			if(isset($_POST['igual'])) $calculadoraCientifica->igual();

			if(isset($_SESSION['sessionPantalla'])) {
				$_SESSION['sessionPantalla'] .= $calculadoraCientifica->getPantalla();
			} else {
				$_SESSION['sessionPantalla'] = "";
				$_SESSION['sessionPantalla'] .= $calculadoraCientifica->getPantalla();
			}
			if(!isset($_SESSION['sessionMemoria'])) {
				$_SESSION['sessionMemoria'] = 0;
				$_SESSION['sessionMemoria'] .= $calculadoraCientifica->getMemoria();
			} 
			$miPantalla = $_SESSION['sessionPantalla'];
		}
		echo "
		<form action='#' method='post' name='calculadora'>
		<div class='cuerpo'>
			<label for='pantalla'>CALCULADORA</label>
			<input title='pantalla' type='text' id='pantalla' value='$miPantalla' readonly />
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
				<input class='darkGray' type='submit' name='parentesisIzquierdo' value='('/>
				<input class='darkGray' type='submit' name='parentesisDerecho' value=')'/>
				<input class='lightGray' type='submit' name='cero' value='0'/>
				<input class='lightGray' type='submit' name='punto' value='.'/>
				<input class='darkGray' type='submit' name='igual' value='='/>
			</div>
		</div>
		</form>
		"
	?>
</body>
</html>