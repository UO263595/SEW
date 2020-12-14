<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, user-scalable-yes">
	<title>Ejercicio 6</title>
	<link rel="stylesheet" href="Ejercicio6.css"/>
</head>
<body>
	<header>
		<h1>Ejercicio 6</h1>
	</header>
	<form action='#' method='post' name='formulario' enctype='multipart/form-data'>
	<h2>Crear Base de Datos</h2>
	<button id='bCrearBD' type='submit' name='bCrearBD'>Crear Base de datos</button>
	<h2>Crear una tabla</h2>
	<p>¡¡Es IMPORTANTE crear la tabla antes de realizar operaciones en ella!!</p>
	<button id='bCrearTabla' type='submit' name='bCrearTabla'>Crear tabla PruebasUsabilidad</button>
	<h2>Insertar datos en una tabla</h2>
	<p>Se deben rellenar todos los campos marcados con *.</p>
	<label for="inputDNI">DNI*: </label><input type="text" class="littleInput" id="inputDNI" name="inputDNI" placeholder="Inserta DNI..."/>
	<label for="inputNombre">Nombre*: </label><input type="text" class="littleInput" id="inputNombre" name="inputNombre" placeholder="Inserta nombre..."/>
	<label for="inputApellidos">Apellidos*: </label><input type="text" class="littleInput" id="inputApellidos" name="inputApellidos" placeholder="Inserta apellidos..."/>
	<label for="inputEmail">E-mail*: </label><input type="text" class="littleInput" id="inputEmail" name="inputEmail" placeholder="Inserta e-mail..."/>
	<label for="inputTelefono">Teléfono*: </label><input type="text" class="littleInput" id="inputTelefono" name="inputTelefono" placeholder="Inserta teléfono..."/>
	<label for="inputEdad">Edad*: </label><input type="text" class="littleInput" id="inputEdad" name="inputEdad" placeholder="Inserta edad..."/>
	<label for="inputSexo">Sexo (Hombre='H' || Mujer='M')*: </label><input type="text" class="littleInput" id="inputSexo" name="inputSexo" placeholder="Inserta sexo..."/>
	<label for="inputNivel">Nivel o pericia informática (0 a 10)*: </label><input type="text" class="littleInput" id="inputNivel" name="inputNivel" placeholder="Inserta nivel..."/>
	<label for="inputTiempo">Tiempo que ha tardado en hacer la tarea (segundos)*: </label><input type="text" class="littleInput" id="inputTiempo" name="inputTiempo" placeholder="Inserta tiempo..."/>
	<label for="inputCorrecto">¿La tarea se ha realizado correctamente?*: </label><input type="text" class="littleInput" id="inputCorrecto" name="inputCorrecto" placeholder="Inserta sí o no..."/>
	<label for="inputComentarios">Comentarios: </label><input type="text" class="bigInput" id="inputComentarios" name="inputComentarios" placeholder="Inserta comentarios..."/>
	<label for="inputPropuestas">Propuestas: </label><input type="text" class="bigInput" id="inputPropuestas" name="inputPropuestas" placeholder="Inserta propuestas..."/>
	<label for="inputValoracion">Valoración de la aplicación (0 a 10)*: </label><input type="text" class="littleInput" id="inputValoracion" name="inputValoracion" placeholder="Inserta valoración..."/>
	<button id='bInsertarDatos' type='submit' name='bInsertarDatos'>Insertar datos</button>
	<h2>Buscar datos en una tabla</h2>
	<label for="inputBuscarDNI">Realiza una búsqueda por DNI: </label><input type="text" class="littleInput" id="inputBuscarDNI" name="inputBuscarDNI" placeholder="Inserta DNI..."/>
	<button id='bBuscar' type='submit' name='bBuscar'>Buscar datos</button>
	<h2>Modificar datos en una tabla</h2>
	<p>Se inserta el DNI para identificar el usuario del que se quieren modificar los datos y los campos que se desean actualizar de la tabla PruebasUsabilidad.</p>
	<label for="inputModificarDNI">DNI: </label><input type="text" class="littleInput" id="inputModificarDNI" name="inputModificarDNI" placeholder="Inserta DNI..."/>
	<label for="inputModificarNombre">Nombre: </label><input type="text" class="littleInput" id="inputModificarNombre" name="inputModificarNombre" placeholder="Inserta nuevo nombre..."/>
	<label for="inputModificarApellidos">Apellidos: </label><input type="text" class="littleInput" id="inputModificarApellidos" name="inputModificarApellidos" placeholder="Inserta nuevos apellidos..."/>
	<label for="inputModificarEmail">E-mail: </label><input type="text" class="littleInput" id="inputModificarEmail" name="inputModificarEmail" placeholder="Inserta nuevo e-mail..."/>
	<label for="inputModificarTelefono">Teléfono: </label><input type="text" class="littleInput" id="inputModificarTelefono" name="inputModificarTelefono" placeholder="Inserta nuevo teléfono..."/>
	<label for="inputModificarEdad">Edad: </label><input type="text" class="littleInput" id="inputModificarEdad" name="inputModificarEdad" placeholder="Inserta nueva edad..."/>
	<label for="inputModificarSexo">Sexo (Hombre='H' || Mujer='M'): </label><input type="text" class="littleInput" id="inputModificarSexo" name="inputModificarSexo" placeholder="Inserta nuevo sexo..."/>
	<label for="inputModificarNivel">Nivel o pericia informática (0 a 10): </label><input type="text" class="littleInput" id="inputModificarNivel" name="inputModificarNivel" placeholder="Inserta nuevo nivel..."/>
	<label for="inputModificarTiempo">Tiempo que ha tardado en hacer la tarea (segundos): </label><input type="text" class="littleInput" id="inputModificarTiempo" name="inputModificarTiempo" placeholder="Inserta nuevo tiempo..."/>
	<label for="inputModificarCorrecto">¿La tarea se ha realizado correctamente?: </label><input type="text" class="littleInput" id="inputModificarCorrecto" name="inputModificarCorrecto" placeholder="Inserta sí o no..."/>
	<label for="inputModificarComentarios">Comentarios: </label><input type="text" class="bigInput" id="inputModificarComentarios" name="inputModificarComentarios" placeholder="Inserta nuevos comentarios..."/>
	<label for="inputModificarPropuestas">Propuestas: </label><input type="text" class="bigInput" id="inputModificarPropuestas" name="inputModificarPropuestas" placeholder="Inserta nuevas propuestas..."/>
	<label for="inputModificarValoracion">Valoración de la aplicación (0 a 10): </label><input type="text" class="littleInput" id="inputModificarValoracion" name="inputModificarValoracion" placeholder="Inserta nueva valoración..."/>
	<button id='bModificarDatos' type='submit' name='bModificarDatos'>Modificar datos</button>
	<h2>Eliminar datos en una tabla</h2>
	<p>Se inserta el DNI para identificar el usuario que se quiere eliminar de la tabla PruebasUsabilidad.</p>
	<label for="inputEliminarDNI">DNI: </label><input type="text" class="littleInput" id="inputEliminarDNI" name="inputEliminarDNI" placeholder="Inserta DNI..."/>
	<button id='bEliminarDatos' type='submit' name='bEliminarDatos'>Eliminar datos</button>
	<h2>Generar informe</h2>
	<button id='bGenerarInforme' type='submit' name='bGenerarInforme'>Generar informe</button>
	<h2>Cargar datos desde un archivo en una tabla de la Base de Datos</h2>
	<input type='file' name='archivoSubido'/>
	<button id='bCargarDatos' type='submit' name='bCargarDatos'>Cargar datos</button>
	<h2>Exportar datos a un archivo los datos desde una tabla de la Base de Datos</h2>
	<button id='bExportarDatos' type='submit' name='bExportarDatos'>Exportar datos</button>
	<h2>Resultado de las operaciones:</h2>
	</form>
	<?php
		class BaseDatos {
			private $servername;
			private $username;
			private $password;
			private $db;
			private $dbName;
			
			public function __construct(){
				$this->servername = "localhost";
				$this->username = "DBUSER2020";
				$this->password = "DBPSWD2020";
				$this->db = new mysqli($this->servername,$this->username,$this->password);
				$this->dbName = "BD";
				
				//comprobamos conexión
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida con " . $this->db->host_info . "</p>";}
				// Se crea la base de datos de trabajo "BD" utilizando ordenación en español
				$cadenaSQL = "CREATE DATABASE IF NOT EXISTS BD COLLATE utf8_spanish_ci";
				if($this->db->query($cadenaSQL) === TRUE){
					echo "<p>Base de datos 'BD' creada con éxito</p>";
				} else { 
					echo "<p>ERROR en la creación de la Base de Datos 'BD'. Error: " . $this->db->error . "</p>";
					exit();
				}   
				//cerrar la conexión
				$this->db->close();
			}
			
			public function crearBD() {
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				
				$crearTabla = "CREATE TABLE IF NOT EXISTS PruebasUsabilidad (
						codigo VARCHAR(9) NOT NULL, 
                        nombre VARCHAR(32) NOT NULL,
                        apellidos VARCHAR(255) NOT NULL, 
                        email VARCHAR(255) NOT NULL, 
						telefono DOUBLE NOT NULL,
						edad INT NOT NULL,
						sexo VARCHAR(1) NOT NULL,
						nivel INT NOT NULL,
						tiempo DOUBLE NOT NULL,
						correcto VARCHAR(9) NOT NULL,
						comentarios VARCHAR(255) NOT NULL,
						propuestas VARCHAR(255) NOT NULL,
						valoracion INT NOT NULL,
						
                        PRIMARY KEY (codigo),
						CHECK (nivel>=0 && nivel<=10),
						CHECK (valoracion>=0 && valoracion<=10))";
                      
				if($this->db->query($crearTabla) === TRUE){
					echo "<p>Tabla 'PruebasUsabilidad' creada con éxito </p>";
				} else { 
					echo "<p>ERROR en la creación de la tabla PruebasUsabilidad. Error : ". $this->db->error . "</p>";
					exit();
				}
				$this->db->close(); 
			}
			
			public function insertarDatos() {
				if ($_POST["inputDNI"]=="" || $_POST["inputNombre"]=="" || $_POST["inputApellidos"]=="" || $_POST["inputEmail"]=="" ||
					$_POST["inputTelefono"]=="" || $_POST["inputEdad"]=="" || $_POST["inputSexo"]=="" || $_POST["inputNivel"]=="" || $_POST["inputTiempo"]=="" ||
					$_POST["inputCorrecto"]=="" || $_POST["inputValoracion"]=="") {
						echo "<p>Debes rellenar todos los campos marcados con *.</p>";
						return;
				}
				if (strcasecmp($_POST["inputSexo"],"h")!=0 && strcasecmp($_POST["inputSexo"],"m")!=0) {
						echo "<p>El sexo debe ser 'H' o 'M'.</p>";
						return;
				}
				if (strcasecmp($_POST["inputCorrecto"],"sí")!=0 && strcasecmp($_POST["inputCorrecto"],"si")!=0 && strcasecmp($_POST["inputCorrecto"],"no")!=0) {
						echo "<p>La respuesta a '¿La tarea se ha realizado correctamente?' debe ser 'sí' o 'no'.</p>";
						return;
				}
				
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}

				try {
					$consultaPre = $this->db->prepare("INSERT INTO PruebasUsabilidad (codigo,nombre,apellidos,email,telefono,edad,sexo,nivel,tiempo,correcto,comentarios,propuestas,valoracion) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
					$consultaPre->bind_param('ssssdisidsssi', 
						$_POST["inputDNI"],
						$_POST["inputNombre"],
						$_POST["inputApellidos"],
						$_POST["inputEmail"],
						$_POST["inputTelefono"],
						$_POST["inputEdad"],
						$_POST["inputSexo"],
						$_POST["inputNivel"],
						$_POST["inputTiempo"],
						$_POST["inputCorrecto"],
						$_POST["inputComentarios"],
						$_POST["inputPropuestas"],
						$_POST["inputValoracion"]);  
					
					$consultaPre->execute();
					if ($consultaPre->affected_rows == -1) echo "<p>No se han podido insertar los datos.</p>";
					else echo "<p>Los datos se han insertado con éxito.</p>";
					$consultaPre->close();
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
				$this->db->close();
			}
			
			public function buscar() {
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				
				try {
					$consultaPre = $this->db->prepare("SELECT * FROM PruebasUsabilidad WHERE codigo = ?");   
					$consultaPre->bind_param('s', $_POST["inputBuscarDNI"]);   	
					$consultaPre->execute();
				
					$resultado = $consultaPre->get_result();
					if ($resultado->fetch_assoc()!=NULL) {
						echo "<p>Los datos del usuario de la tabla 'PruebasUsabilidad' que coinciden con la búsqueda son:</p>";
						$resultado->data_seek(0);
						$fila = $resultado->fetch_assoc();
						echo "<p>DNI = " . $fila['codigo'] . "</p>";
						echo "<p>nombre = " . $fila['nombre'] . "</p>";
						echo "<p>apellidos = " . $fila['apellidos'] . "</p>";
						echo "<p>email = ". $fila['email'] . "</p>";
						echo "<p>telefono = ". $fila['telefono'] . "</p>";
						echo "<p>edad = ". $fila['edad'] . "</p>";
						echo "<p>sexo = ". $fila['sexo'] . "</p>";
						echo "<p>nivel = ". $fila['nivel'] . "</p>";
						echo "<p>tiempo = ". $fila['tiempo'] . "</p>";
						echo "<p>correcto = ". $fila['correcto'] . "</p>";
						echo "<p>comentarios = ". $fila['comentarios'] . "</p>";
						echo "<p>propuestas = ". $fila['propuestas'] . "</p>";
						echo "<p>valoración = ". $fila['valoracion'] . "</p>";       
					} else {echo "<p>Búsqueda sin resultados.</p>";}
					$consultaPre->close();
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
				$this->db->close();
			}
			
			public function modificar() {
				if ($_POST["inputModificarSexo"] != "" && strcasecmp($_POST["inputModificarSexo"],"h")!=0 && strcasecmp($_POST["inputModificarSexo"],"m")!=0) {
						echo "<p>El sexo debe ser 'H' o 'M'.</p>";
						return;
				}
				if ($_POST["inputModificarCorrecto"] != "" && strcasecmp($_POST["inputModificarCorrecto"],"sí")!=0 && strcasecmp($_POST["inputModificarCorrecto"],"si")!=0 && strcasecmp($_POST["inputModificarCorrecto"],"no")!=0) {
						echo "<p>La respuesta a '¿La tarea se ha realizado correctamente?' debe ser 'sí' o 'no'.</p>";
						return;
				}
				
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				try {
					$consultaPre = $this->db->prepare("SELECT * FROM PruebasUsabilidad WHERE codigo = ?");   
					$consultaPre->bind_param('s', $_POST["inputModificarDNI"]);   	
					$consultaPre->execute();
					$resultado = $consultaPre->get_result();
					$consultaPre->close();
					if ($resultado->fetch_assoc()!=NULL) {
						$resultado->data_seek(0);
						$fila = $resultado->fetch_assoc();
						$dni = $fila['codigo'];
						if ($_POST['inputModificarNombre'] == "") { $nombre = $fila['nombre']; }
						else { $nombre = $_POST['inputModificarNombre']; }
						if ($_POST['inputModificarApellidos'] == "") { $apellidos = $fila['apellidos']; }
						else { $apellidos = $_POST['inputModificarApellidos']; }
						if ($_POST['inputModificarEmail'] == "") { $email = $fila['email']; }
						else { $email = $_POST['inputModificarEmail']; }
						if ($_POST['inputModificarTelefono'] == "") { $telefono = $fila['telefono']; }
						else { $telefono = $_POST['inputModificarTelefono']; }
						if ($_POST['inputModificarEdad'] == "") { $edad = $fila['edad']; }
						else { $edad = $_POST['inputModificarEdad']; }
						if ($_POST['inputModificarSexo'] == "") { $sexo = $fila['sexo']; }
						else { $sexo = $_POST['inputModificarSexo']; }
						if ($_POST['inputModificarNivel'] == "") { $nivel = $fila['nivel']; }
						else { $nivel = $_POST['inputModificarNivel']; }
						if ($_POST['inputModificarTiempo'] == "") { $tiempo = $fila['tiempo']; }
						else { $tiempo = $_POST['inputModificarTiempo']; }
						if ($_POST['inputModificarCorrecto'] == "") { $correcto = $fila['correcto']; }
						else { $correcto = $_POST['inputModificarCorrecto']; }
						if ($_POST['inputModificarComentarios'] == "") { $comentarios = $fila['comentarios']; }
						else { $comentarios = $_POST['inputModificarComentarios']; }
						if ($_POST['inputModificarPropuestas'] == "") { $propuestas = $fila['propuestas']; }
						else { $propuestas = $_POST['inputModificarPropuestas']; }
						if ($_POST['inputModificarValoracion'] == "") { $valoracion = $fila['valoracion']; }
						else { $valoracion = $_POST['inputModificarValoracion']; }
					
					
						$consultaPre = $this->db->prepare("UPDATE PruebasUsabilidad SET nombre=?,apellidos=?,email=?,telefono=?,edad=?,
							sexo=?,nivel=?,tiempo=?,correcto=?,comentarios=?,propuestas=?,valoracion=? WHERE codigo=?");
						
						$consultaPre->bind_param('sssdisidsssis', 
						$nombre,
						$apellidos,
						$email,
						$telefono,
						$edad,
						$sexo,
						$nivel,
						$tiempo,
						$correcto,
						$comentarios,
						$propuestas,
						$valoracion,
						$dni);  
						
						$consultaPre->execute();
						if ($consultaPre->affected_rows == -1) echo "<p>No se han podido modificar los datos.</p>";
						else echo "<p>Los datos se han modificado con éxito.</p>";
						$consultaPre->close();
					} else {echo "<p>No se encuentra el usuario a modificar.</p>";}
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
				$this->db->close();
			}
			
			public function eliminar() {
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				
				try {
					$consultaPre = $this->db->prepare("SELECT * FROM PruebasUsabilidad WHERE codigo = ?");   
					$consultaPre->bind_param('s', $_POST["inputEliminarDNI"]);   	
					$consultaPre->execute();
					$resultado = $consultaPre->get_result();
					$consultaPre->close();
					if ($resultado->fetch_assoc()!=NULL) {
						echo "<p>Los datos de la tabla 'PruebasUsabilidad' que van a ser eliminados son:</p>";
						$resultado->data_seek(0);
						$fila = $resultado->fetch_assoc();
						echo "<p>DNI = " . $fila['codigo'] . "</p>";
						echo "<p>nombre = " . $fila['nombre'] . "</p>";
						echo "<p>apellidos = " . $fila['apellidos'] . "</p>";
						echo "<p>email = ". $fila['email'] . "</p>";
						echo "<p>telefono = ". $fila['telefono'] . "</p>";
						echo "<p>edad = ". $fila['edad'] . "</p>";
						echo "<p>sexo = ". $fila['sexo'] . "</p>";
						echo "<p>nivel = ". $fila['nivel'] . "</p>";
						echo "<p>tiempo = ". $fila['tiempo'] . "</p>";
						echo "<p>correcto = ". $fila['correcto'] . "</p>";
						echo "<p>comentarios = ". $fila['comentarios'] . "</p>";
						echo "<p>propuestas = ". $fila['propuestas'] . "</p>";
						echo "<p>valoración = ". $fila['valoracion'] . "</p>";

						$consultaPre = $this->db->prepare("DELETE FROM PruebasUsabilidad WHERE codigo = ?");   
						$consultaPre->bind_param('s', $_POST["inputEliminarDNI"]);   	
						$consultaPre->execute();
						$consultaPre->close();
						
						echo "<p>Se han borrado los datos con éxito.</p>";
					} else { echo "<p>Búsqueda sin resultados. No se ha borrado nada.</p>"; }
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
				$this->db->close();
			}
			
			public function generarInforme() {
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
					
				try {
					$consultaPre = $this->db->prepare("SELECT * FROM PruebasUsabilidad");   
					$consultaPre->execute();
					$resultado = $consultaPre->get_result();
					if ($resultado->fetch_assoc()!=NULL) {
						echo "<p>Informe de la tabla 'PruebasUsabilidad':</p>";
						$resultado->data_seek(0);
						$muestras = 0;
						$edadMedia = 0;
						$hombres = 0;
						$mujeres = 0;
						$pericia = 0;
						$tiempo = 0;
						$correcto = 0;
						$puntuacion = 0;
						while($fila = $resultado->fetch_assoc()) {
							$muestras++;
							$edadMedia += $fila["edad"];
							if (strcasecmp($fila["sexo"],"h") == 0) $hombres++;
							if (strcasecmp($fila["sexo"],"m") == 0) $mujeres++;
							$pericia += $fila["nivel"];
							$tiempo += $fila["tiempo"];
							if ($fila["correcto"] == "sí" || $fila["correcto"] == "si") $correcto++;
							$puntuacion += $fila["valoracion"];
						}
						echo "<p>Edad media de los usuarios = " . $edadMedia/$muestras . "</p>";
						echo "<p>Frecuencia del % de cada tipo de sexo entre los usuarios = porcentaje de hombres:" . $hombres/$muestras*100 . "% porcentaje de mujeres:" . $mujeres/$muestras*100 . "%</p>";
						echo "<p>Valor medio del nivel o pericia informática de los usuarios = " . $pericia/$muestras . "</p>";
						echo "<p>Tiempo medio para la tarea = ". $tiempo/$muestras . "</p>";
						echo "<p>Porcentaje de usuarios que han realizado la tarea correctamente = ". $correcto/$muestras*100 . "%</p>";
						echo "<p>Valor medio de la puntuación de los usuarios sobre la aplicación = ". $puntuacion/$muestras . "</p>"; 
					} else {echo "<p>No hay datos en la tabla.</p>";}
					$consultaPre->close();
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
				$this->db->close();
			}
			
			public function cargarDatos() {
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}

				try {
					if (!(isset($_FILES['archivoSubido']) && $_FILES['archivoSubido']['error'] === UPLOAD_ERR_OK)) { 
						echo "<p>Debes seleccionar un archivo.</p>"; 
						return;
					}
					if ($_FILES['archivoSubido']['type'] != 'application/vnd.ms-excel') { 
						echo "<p>Formato de archivo no válido.</p>"; 
						return;
					}
					$archivo = fopen($_FILES['archivoSubido']['tmp_name'],"r"); 
					while(($datos=fgetcsv($archivo, 1000, ";")) !== FALSE) {						
						$consultaPre = $this->db->prepare("INSERT INTO PruebasUsabilidad (codigo,nombre,apellidos,email,telefono,edad,sexo,nivel,tiempo,correcto,comentarios,propuestas,valoracion) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?)");
						$consultaPre->bind_param('ssssdisidsssi', 
						$datos[0],
						$datos[1],
						$datos[2],
						$datos[3],
						$datos[4],
						$datos[5],
						$datos[6],
						$datos[7],
						$datos[8],
						$datos[9],
						$datos[10],
						$datos[11],
						$datos[12]);
					
						$consultaPre->execute();
						$consultaPre->close();
					}
					fclose($archivo);
					echo "<p>Los datos se han importado con éxito.</p>";
				
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
				$this->db->close();
			}
			
			public function exportarDatos() {
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				
				try {
					$consultaPre = $this->db->prepare("SELECT * FROM PruebasUsabilidad");    	
					$consultaPre->execute();
					$resultado = $consultaPre->get_result();
					$consultaPre->close();
					$this->db->close();
				
					$archivo = fopen("datos.csv","w"); 
					$campos = array('Codigo (DNI)', 'Nombre', 'Apellidos', 'Email', 'Telefono', 'Edad', 'Sexo', 'Nivel', 'Tiempo', 'Correcto', 'Comentarios', 'Propuestas', 'Valoracion');
					fputcsv($archivo, $campos, ";");
					if ($resultado->fetch_assoc()!=NULL) {
						$resultado->data_seek(0);
						while($fila = $resultado->fetch_assoc()) {
							$fila = array($fila['codigo'],$fila['nombre'],$fila['apellidos'],$fila['email'],$fila['telefono'], 
								$fila['edad'],$fila['sexo'],$fila['nivel'],$fila['tiempo'],$fila['correcto'], 
								$fila['comentarios'],$fila['propuestas'],$fila['valoracion']);
							fputcsv($archivo, $fila, ";");
						}
					}
					fclose($archivo);
					echo "<p>Los datos se han exportado con éxito.</p>";
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
			}
		}
		
		$baseDatos = new BaseDatos();
		if (count($_POST)>0) {
			if(isset($_POST['bCrearBD'])) $baseDatos=new BaseDatos();
			if(isset($_POST['bCrearTabla'])) $baseDatos->crearBD();
			if(isset($_POST['bInsertarDatos'])) $baseDatos->insertarDatos();
			if(isset($_POST['bBuscar'])) $baseDatos->buscar();
			if(isset($_POST['bModificarDatos'])) $baseDatos->modificar();
			if(isset($_POST['bEliminarDatos'])) $baseDatos->eliminar();
			if(isset($_POST['bGenerarInforme'])) $baseDatos->generarInforme();
			if(isset($_POST['bCargarDatos'])) $baseDatos->cargarDatos();
			if(isset($_POST['bExportarDatos'])) $baseDatos->exportarDatos();
		}
	?>
	</body>
</html>