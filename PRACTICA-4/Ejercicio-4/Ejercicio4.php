<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Ejercicio 4</title>
	<link rel="stylesheet" href="Ejercicio4.css"/>
</head>
<body>
	<header>
		<h1>Ejercicio 4</h1>
	</header>
	<h2>Buscador de noticias por palabras clave</h2>
	<form action='#' method='post' name='buscador'>
		<label for='inputBusqueda'>Realiza una búsqueda: </label>
		<input title='inputBusqueda' type='text' id='inputBusqueda' name='inputBusqueda' placeholder='Busca noticias...'/>
		<button id='bBuscar' type='submit' name='bBuscar'>Buscar</button>
	</form>
	<?php
		class BuscadorNoticias {
			private $apikey;
			private $idioma;
			private $orden;
			private $url;
			
			public function __construct(){
				$this->apikey = "ac89e850d0fce1d544cba3aa5f886995";
				$this->idioma = "&lang=es";
				$this->orden = "&sortBy=publishedAt"; // ordena las noticias por fecha de publicación
				$this->url = "";
			}
			public function cargarDatos() {
				$datos = file_get_contents($this->url);
				$json = json_decode($datos);
				
				if($json==null) {
					echo "<h3>¡Se ha producido un error!</h3>";
				} else {
					foreach($json->articles as $elemento) {
						$source = $elemento->source;
						echo "<h3>$elemento->title - $source->name</h3>";
						echo "<img src='$elemento->image'/>";
						echo "<p>$elemento->description</p>";
						echo "<a href='$elemento->url'>Ver noticia</a>";
					}
				}
				echo "<pre>";
				$jsonMaquetado = json_decode($datos, JSON_PRETTY_PRINT);
				print_r($jsonMaquetado);
				echo "</pre>";
			}
			public function buscar() {
				$busqueda = $_REQUEST['inputBusqueda'];
				if (!empty($busqueda)) {
					// https://gnews.io/api/v4/search?q=example&token=API-Token
					$this->url = "https://gnews.io/api/v4/search?q=" . $busqueda . $this->idioma . $this->orden . "&token=" . $this->apikey;
					$this->cargarDatos();
				}
			}
		}
	
		$buscadorNoticias = new BuscadorNoticias();
		if (count($_POST)>0) {
			if(isset($_POST['bBuscar'])) $buscadorNoticias->buscar();
		}
	?>
</body>
</html>