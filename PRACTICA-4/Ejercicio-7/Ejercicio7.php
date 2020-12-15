<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width-device-width, user-scalable-yes">
	<title>Ejercicio 7</title>
	<link rel="stylesheet" href="Ejercicio7.css"/>
</head>
<body>
	<header>
		<h1>Ejercicio 7</h1>
	</header>
	<p>Sistema de gestión de una flota de tiendas.</p>
	<form action='#' method='post' name='formulario' enctype='multipart/form-data'>
	<h2>Tiendas</h2>
	<h3>Añadir tienda</h3>
	<label for="inputInsetarTienda">Código: </label><input type="text" class="littleInput" id="inputInsetarTienda" name="inputInsetarTienda" placeholder="Inserta código..."/>
	<label for="inputInsetarDireccion">Dirección: </label><input type="text" class="littleInput" id="inputInsetarDireccion" name="inputInsetarDireccion" placeholder="Inserta dirección..."/>
	<button id='bInsertarTienda' type='submit' name='bInsertarTienda'>Insertar tienda</button>
	<h3>Cargar tiendas desde archivo</h3>
	<label for='archivoTiendas'>Selecciona un archivo: </label><input type='file' id='archivoTiendas' name='archivoTiendas'/>
	<button id='bCargarTiendas' type='submit' name='bCargarTiendas'>Cargar tiendas</button>
	<h3>Exportar tiendas</h3>
	<button id='bExportarTiendas' type='submit' name='bExportarTiendas'>Exportar tiendas</button>
	<h2>Personal</h2>
	<h3>Contratar personal</h3>
	<label for="inputDNI">DNI: </label><input type="text" class="littleInput" id="inputDNI" name="inputDNI" placeholder="Inserta DNI..."/>
	<label for="inputNombre">Nombre: </label><input type="text" class="littleInput" id="inputNombre" name="inputNombre" placeholder="Inserta nombre..."/>
	<label for="inputApellidos">Apellidos: </label><input type="text" class="littleInput" id="inputApellidos" name="inputApellidos" placeholder="Inserta apellidos..."/>
	<label for="inputTelefono">Teléfono: </label><input type="text" class="littleInput" id="inputTelefono" name="inputTelefono" placeholder="Inserta teléfono..."/>
	<label for="inputCargo">Cargo: </label><input type="text" class="littleInput" id="inputCargo" name="inputCargo" placeholder="Inserta cargo..."/>
	<label for="inputSueldo">Sueldo (euros): </label><input type="text" class="littleInput" id="inputSueldo" name="inputSueldo" placeholder="Inserta sueldo..."/>
	<label for="inputExperiencia">Experiencia (años): </label><input type="text" class="littleInput" id="inputExperiencia" name="inputExperiencia" placeholder="Inserta experiencia..."/>
	<label for="inputTiendaPersonal">Tienda: </label><input type="text" class="littleInput" id="inputTiendaPersonal" name="inputTiendaPersonal" placeholder="Inserta tienda..."/>
	<p>*Se deben rellenar todos los campos</p>
	<button id='bContratar' type='submit' name='bContratar'>Contratar</button>
	<h3>Despedir</h3>
	<label for="inputDespedirDNI">DNI: </label><input type="text" class="littleInput" id="inputDespedirDNI" name="inputDespedirDNI" placeholder="Inserta DNI..."/>
	<button id='bDespedir' type='submit' name='bDespedir'>Despedir</button>
	<h3>Actualizar datos</h3>
	<p>Se introduce el DNI de la persona de la que se quieren actualizar los datos y se rellenan los campos que se quieren modificar.
	<label for="inputModificarDNI">DNI: </label><input type="text" class="littleInput" id="inputModificarDNI" name="inputModificarDNI" placeholder="Inserta DNI..."/>
	<label for="inputModificarTelefono">Teléfono: </label><input type="text" class="littleInput" id="inputModificarTelefono" name="inputModificarTelefono" placeholder="Inserta teléfono..."/>
	<label for="inputModificarCargo">Cargo: </label><input type="text" class="littleInput" id="inputModificarCargo" name="inputModificarCargo" placeholder="Inserta cargo..."/>
	<label for="inputModificarSueldo">Sueldo (euros): </label><input type="text" class="littleInput" id="inputModificarSueldo" name="inputModificarSueldo" placeholder="Inserta sueldo..."/>
	<button id='bActualizar' type='submit' name='bActualizar'>Actualizar</button>
	<h3>Cargar personal desde archivo</h3>
	<label for='archivoPersonal'>Selecciona un archivo: </label><input type='file' id='archivoPersonal' name='archivoPersonal'/>
	<button id='bCargarPersonal' type='submit' name='bCargarPersonal'>Cargar personal</button>
	<h3>Exportar personal</h3>
	<button id='bExportarPersonal' type='submit' name='bExportarPersonal'>Exportar personal</button>
	<h3>Buscar personal por cargo</h3>
	<label for="inputBuscarCargo">Cargo: </label><input type="text" class="littleInput" id="inputBuscarCargo" name="inputBuscarCargo" placeholder="Inserta cargo..."/>
	<button id='bBuscarCargo' type='submit' name='bBuscarCargo'>Busca por cargo</button>
	<h2>Stock</h2>
	<h3>Añadir nuevo producto</h3>
	<label for="inputProducto">Producto: </label><input type="text" class="littleInput" id="inputProducto" name="inputProducto" placeholder="Inserta producto..."/>
	<label for="inputCantidad">Cantidad: </label><input type="text" class="littleInput" id="inputCantidad" name="inputCantidad" placeholder="Inserta cantidad..."/>
	<label for="inputPrecio">Precio (euros): </label><input type="text" class="littleInput" id="inputPrecio" name="inputPrecio" placeholder="Inserta precio..."/>
	<label for="inputTiendaProducto">Tienda: </label><input type="text" class="littleInput" id="inputTiendaProducto" name="inputTiendaProducto" placeholder="Inserta tienda..."/>
	<p>*Se deben rellenar todos los campos</p>
	<button id='bInsertarProducto' type='submit' name='bInsertarProducto'>Insertar producto</button>
	<h3>Cambiar la cantidad de un producto</h3>
	<label for="inputProductoCantidad">Producto: </label><input type="text" class="littleInput" id="inputProductoCantidad" name="inputProductoCantidad" placeholder="Inserta producto..."/>
	<label for="inputCantidadProducto">Cantidad: </label><input type="text" class="littleInput" id="inputCantidadProducto" name="inputCantidadProducto" placeholder="Inserta cantidad..."/>
	<button id='bCantidadProducto' type='submit' name='bCantidadProducto'>Cambiar cantidad producto</button>
	<h3>Cambiar el precio de un producto</h3>
	<label for="inputProductoPrecio">Producto: </label><input type="text" class="littleInput" id="inputProductoPrecio" name="inputProductoPrecio" placeholder="Inserta producto..."/>
	<label for="inputPrecioProducto">Precio (euros): </label><input type="text" class="littleInput" id="inputPrecioProducto" name="inputPrecioProducto" placeholder="Inserta precio..."/>
	<button id='bPrecioProducto' type='submit' name='bPrecioProducto'>Cambiar precio producto</button>
	<h3>Cargar productos desde archivo</h3>
	<label for='archivoProductos'>Selecciona un archivo: </label><input type='file' id='archivoProductos' name='archivoProductos'/>
	<button id='bCargarProductos' type='submit' name='bCargarProductos'>Cargar productos</button>
	<h3>Exportar productos</h3>
	<button id='bExportarProductos' type='submit' name='bExportarProductos'>Exportar productos</button>
	<h2>Pedidos</h2>
	<h3>Añadir nuevo pedido</h3>
	<label for="inputPedido">Producto: </label><input type="text" class="littleInput" id="inputPedido" name="inputPedido" placeholder="Inserta producto..."/>
	<label for="inputPedidoCantidad">Cantidad: </label><input type="text" class="littleInput" id="inputPedidoCantidad" name="inputPedidoCantidad" placeholder="Inserta cantidad..."/>
	<label for="inputPedidoPrioridad">Prioridad (1 || 2 || 3): </label><input type="text" class="littleInput" id="inputPedidoPrioridad" name="inputPedidoPrioridad" placeholder="Inserta prioridad..."/>
	<p>Prioridad: 1=Mucha || 2=Media || 3=Poca</p>
	<label for="inputTiendaPedido">Tienda: </label><input type="text" class="littleInput" id="inputTiendaPedido" name="inputTiendaPedido" placeholder="Inserta tienda..."/>
	<p>*Se deben rellenar todos los campos</p>
	<button id='bInsertarPedido' type='submit' name='bInsertarPedido'>Insertar pedido</button>
	<h3>Cambiar la cantidad de un pedido</h3>
	<label for="inputCantidadPedido">Producto: </label><input type="text" class="littleInput" id="inputCantidadPedido" name="inputCantidadPedido" placeholder="Inserta producto..."/>
	<label for="inputCambiarCantidadPedido">Cantidad: </label><input type="text" class="littleInput" id="inputCambiarCantidadPedido" name="inputCambiarCantidadPedido" placeholder="Inserta cantidad..."/>
	<button id='bCantidadPedido' type='submit' name='bCantidadPedido'>Cambiar cantidad pedido</button>
	<h3>Cambiar la prioridad de un pedido</h3>
	<label for="inputPrioridadPedido">Producto: </label><input type="text" class="littleInput" id="inputPrioridadPedido" name="inputPrioridadPedido" placeholder="Inserta producto..."/>
	<label for="inputCambiarPrioridadPedido">Prioridad (1 || 2 || 3): </label><input type="text" class="littleInput" id="inputCambiarPrioridadPedido" name="inputCambiarPrioridadPedido" placeholder="Inserta prioridad..."/>
	<button id='bPrioridadPedido' type='submit' name='bPrioridadPedido'>Cambiar prioridad producto</button>
	<h3>Cargar pedidos desde archivo</h3>
	<label for='archivoPedidos'>Selecciona un archivo: </label><input type='file' id='archivoPedidos' name='archivoPedidos'/>
	<button id='bCargarPedidos' type='submit' name='bCargarPedidos'>Cargar pedidos</button>
	<h3>Exportar pedidos</h3>
	<button id='bExportarPedidos' type='submit' name='bExportarPedidos'>Exportar pedidos</button>
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
				
				$this->crearTablas();
			}
			
			public function crearTablas() {
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				
				$tablaTienda = "CREATE TABLE IF NOT EXISTS Tiendas (
						codigo VARCHAR(32) NOT NULL, 
                        direccion VARCHAR(32) UNIQUE NOT NULL,
						
                        PRIMARY KEY (codigo))";
                      
				if($this->db->query($tablaTienda) === TRUE){
					echo "<p>Tabla 'Tiendas' creada con éxito </p>";
				} else { 
					echo "<p>ERROR en la creación de la tabla 'Tiendas'. Error : ". $this->db->error . "</p>";
					exit();
				}
				
				$tablaPersonal = "CREATE TABLE IF NOT EXISTS Personal (
						codigo VARCHAR(9) NOT NULL, 
                        nombre VARCHAR(32) NOT NULL,
                        apellidos VARCHAR(255) NOT NULL, 
						telefono DOUBLE NOT NULL,
						cargo VARCHAR(32) NOT NULL,
						sueldo INT NOT NULL,
						experiencia INT NOT NULL,
						tienda VARCHAR(32) NOT NULL,
						
                        PRIMARY KEY (codigo),
						FOREIGN KEY (tienda) REFERENCES Tiendas(codigo))";
                      
				if($this->db->query($tablaPersonal) === TRUE){
					echo "<p>Tabla 'Personal' creada con éxito </p>";
				} else { 
					echo "<p>ERROR en la creación de la tabla 'Personal'. Error : ". $this->db->error . "</p>";
					exit();
				}
				
				$tablaStock = "CREATE TABLE IF NOT EXISTS Stock (
						producto VARCHAR(32) NOT NULL, 
                        cantidad INT NOT NULL,
                        precio INT NOT NULL,
						tienda VARCHAR(32) NOT NULL,
						
                        PRIMARY KEY (producto),
						FOREIGN KEY (tienda) REFERENCES Tiendas(codigo))";
                      
				if($this->db->query($tablaStock) === TRUE){
					echo "<p>Tabla 'Stock' creada con éxito </p>";
				} else { 
					echo "<p>ERROR en la creación de la tabla 'Stock'. Error : ". $this->db->error . "</p>";
					exit();
				}
				
				$tablaPedidos = "CREATE TABLE IF NOT EXISTS Pedidos (
						producto VARCHAR(32) NOT NULL, 
                        cantidad INT NOT NULL,
                        prioridad INT NOT NULL,
						tienda VARCHAR(32) NOT NULL,
						
                        PRIMARY KEY (producto),
						CHECK (prioridad>=1 && prioridad<=3),
						FOREIGN KEY (tienda) REFERENCES Tiendas(codigo))";
                      
				if($this->db->query($tablaPedidos) === TRUE){
					echo "<p>Tabla 'Pedidos' creada con éxito </p>";
				} else { 
					echo "<p>ERROR en la creación de la tabla 'Pedidos'. Error : ". $this->db->error . "</p>";
					exit();
				}
				
				$this->db->close();
			}
			
			public function contratar() {
				if ($_POST["inputDNI"]=="" || $_POST["inputNombre"]=="" || $_POST["inputApellidos"]=="" || $_POST["inputTelefono"]=="" ||
					$_POST["inputExperiencia"]=="" || $_POST["inputCargo"]=="" || $_POST["inputSueldo"]=="" || $_POST["inputTiendaPersonal"]=="") {
						echo "<p>Debes rellenar todos los campos.</p>";
						return;
				}
				
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				try {
					$consultaPre = $this->db->prepare("INSERT INTO Personal (codigo,nombre,apellidos,telefono,cargo,sueldo,experiencia,tienda) VALUES (?,?,?,?,?,?,?,?)");
					$consultaPre->bind_param('sssisiis', 
						$_POST["inputDNI"],
						$_POST["inputNombre"],
						$_POST["inputApellidos"],
						$_POST["inputTelefono"],
						$_POST["inputCargo"],
						$_POST["inputSueldo"],
						$_POST["inputExperiencia"],
						$_POST["inputTiendaPersonal"]);  
					
					$consultaPre->execute();
					if ($consultaPre->affected_rows == -1) echo "<p>No se han podido insertar los datos.</p>";
					else echo "<p>Los datos se han insertado con éxito.</p>";
					$consultaPre->close();
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
				$this->db->close();
			}
			
			public function despedir() {
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				
				try {
					$consultaPre = $this->db->prepare("SELECT * FROM Personal WHERE codigo = ?");   
					$consultaPre->bind_param('s', $_POST["inputDespedirDNI"]);   	
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
						echo "<p>teléfono = ". $fila['telefono'] . "</p>";
						echo "<p>experiencia = ". $fila['experiencia'] . "</p>";
						echo "<p>cargo = ". $fila['cargo'] . "</p>";
						echo "<p>sueldo = ". $fila['sueldo'] . "</p>";

						$consultaPre = $this->db->prepare("DELETE FROM Personal WHERE codigo = ?");   
						$consultaPre->bind_param('s', $_POST["inputDespedirDNI"]);   	
						$consultaPre->execute();
						$consultaPre->close();
						
						echo "<p>Se han borrado los datos con éxito.</p>";
					} else { echo "<p>Búsqueda sin resultados. No se ha borrado nada.</p>"; }
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
				$this->db->close();
			}
			
			public function modificarPersonal() {
				if ($_POST["inputModificarTelefono"]=="" && $_POST["inputModificarCargo"]=="" && $_POST["inputModificarSueldo"]=="") {
						echo "<p>Debes especificar al menos uno de los campos a modificar.</p>";
						return;
				}
				
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				try {
					$consultaPre = $this->db->prepare("SELECT telefono,cargo,sueldo FROM Personal WHERE codigo = ?");   
					$consultaPre->bind_param('s', $_POST["inputModificarDNI"]);   	
					$consultaPre->execute();
					$resultado = $consultaPre->get_result();
					$consultaPre->close();
					if ($resultado->fetch_assoc()!=NULL) {
						$resultado->data_seek(0);
						$fila = $resultado->fetch_assoc();
						if ($_POST['inputModificarTelefono'] == "") { $telefono = $fila['telefono']; }
						else { $telefono = $_POST['inputModificarTelefono']; }
						if ($_POST['inputModificarCargo'] == "") { $cargo = $fila['cargo']; }
						else { $cargo = $_POST['inputModificarCargo']; }
						if ($_POST['inputModificarSueldo'] == "") { $sueldo = $fila['sueldo']; }
						else { $sueldo = $_POST['inputModificarSueldo']; }
					
						$consultaPre = $this->db->prepare("UPDATE Personal SET telefono=?,cargo=?,sueldo=? WHERE codigo=?");
						
						$consultaPre->bind_param('isis', 
						$telefono,
						$cargo,
						$sueldo,
						$_POST["inputModificarDNI"]);  
						
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
			
			public function insertarProducto() {
				if ($_POST["inputProducto"]=="" || $_POST["inputCantidad"]=="" || $_POST["inputPrecio"]=="" || $_POST["inputTiendaProducto"]=="") {
						echo "<p>Debes rellenar todos los campos.</p>";
						return;
				}
				
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				try {
					$consultaPre = $this->db->prepare("INSERT INTO Stock (producto,cantidad,precio,tienda) VALUES (?,?,?,?)");
					$consultaPre->bind_param('siis', 
						$_POST["inputProducto"],
						$_POST["inputCantidad"],
						$_POST["inputPrecio"],
						$_POST["inputTiendaProducto"]);  
					
					$consultaPre->execute();
					if ($consultaPre->affected_rows == -1) echo "<p>No se han podido insertar los datos.</p>";
					else echo "<p>Los datos se han insertado con éxito.</p>";
					$consultaPre->close();
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
				$this->db->close();
			}
			
			public function modificarCantidadProducto() {
				if ($_POST["inputCantidadProducto"]=="") {
						echo "<p>Debes introducir una nueva cantidad.</p>";
						return;
				}
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				try {
					$consultaPre = $this->db->prepare("SELECT * FROM Stock WHERE producto=?");   
					$consultaPre->bind_param('s', $_POST["inputProductoCantidad"]);   	
					$consultaPre->execute();
					$resultado = $consultaPre->get_result();
					$consultaPre->close();
					if ($resultado->fetch_assoc()!=NULL) {
						$consultaPre = $this->db->prepare("UPDATE Stock SET cantidad=? WHERE producto=?");
							
						$consultaPre->bind_param('is', 
						$_POST['inputCantidadProducto'],
						$_POST['inputProductoCantidad']);  
							
						$consultaPre->execute();
						if ($consultaPre->affected_rows == -1) echo "<p>No se han podido modificar los datos.</p>";
						else echo "<p>Los datos se han modificado con éxito.</p>";
						$consultaPre->close();
					} else {echo "<p>No se encuentra el producto a modificar.</p>";}
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
				$this->db->close();
			}

			public function modificarPrecioProducto() {
				if ($_POST["inputPrecioProducto"]=="") {
						echo "<p>Debes introducir una nueva cantidad.</p>";
						return;
				}
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				try {
					$consultaPre = $this->db->prepare("SELECT * FROM Stock WHERE producto=?");   
					$consultaPre->bind_param('s', $_POST["inputProductoPrecio"]);   	
					$consultaPre->execute();
					$resultado = $consultaPre->get_result();
					$consultaPre->close();
					if ($resultado->fetch_assoc()!=NULL) {
						$consultaPre = $this->db->prepare("UPDATE Stock SET precio=? WHERE producto=?");
							
						$consultaPre->bind_param('is', 
						$_POST['inputPrecioProducto'],
						$_POST['inputProductoPrecio']);  
							
						$consultaPre->execute();
						if ($consultaPre->affected_rows == -1) echo "<p>No se han podido modificar los datos.</p>";
						else echo "<p>Los datos se han modificado con éxito.</p>";
						$consultaPre->close();
					} else {echo "<p>No se encuentra el producto a modificar.</p>";}
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
				$this->db->close();
			}
			
			public function insertarPedido() {
				if ($_POST["inputPedido"]=="" || $_POST["inputPedidoCantidad"]=="" || $_POST["inputPedidoPrioridad"]=="" || $_POST["inputTiendaPedido"]=="") {
						echo "<p>Debes rellenar todos los campos.</p>";
						return;
				}
				if ($_POST["inputPedidoPrioridad"]!="1" && $_POST["inputPedidoPrioridad"]!="2" && $_POST["inputPedidoPrioridad"]!="3") {
						echo "<p>La prioridad de un pedido debe ser 1, 2 o 3.</p>";
						return;
				}
				
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				try {
					$consultaPre = $this->db->prepare("INSERT INTO Pedidos (producto,cantidad,prioridad,tienda) VALUES (?,?,?,?)");
					$consultaPre->bind_param('siis', 
						$_POST["inputPedido"],
						$_POST["inputPedidoCantidad"],
						$_POST["inputPedidoPrioridad"],
						$_POST["inputTiendaPedido"]);  
					
					$consultaPre->execute();
					if ($consultaPre->affected_rows == -1) echo "<p>No se han podido insertar los datos.</p>";
					else echo "<p>Los datos se han insertado con éxito.</p>";
					$consultaPre->close();
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
				$this->db->close();
			}

			public function modificarCantidadPedido() {
				if ($_POST["inputCambiarCantidadPedido"]=="") {
						echo "<p>Debes introducir una nueva cantidad.</p>";
						return;
				}
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				try {
					$consultaPre = $this->db->prepare("SELECT * FROM Pedidos WHERE producto=?");   
					$consultaPre->bind_param('s', $_POST["inputCantidadPedido"]);   	
					$consultaPre->execute();
					$resultado = $consultaPre->get_result();
					$consultaPre->close();
					if ($resultado->fetch_assoc()!=NULL) {
						$consultaPre = $this->db->prepare("UPDATE Pedidos SET cantidad=? WHERE producto=?");
							
						$consultaPre->bind_param('is', 
						$_POST['inputCambiarCantidadPedido'],
						$_POST['inputCantidadPedido']);  
							
						$consultaPre->execute();
						if ($consultaPre->affected_rows == -1) echo "<p>No se han podido modificar los datos.</p>";
						else echo "<p>Los datos se han modificado con éxito.</p>";
						$consultaPre->close();
					} else {echo "<p>No se encuentra el pedido a modificar.</p>";}
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
				$this->db->close();
			}

			public function modificarPrioridadPedido() {
				if ($_POST["inputCambiarPrioridadPedido"]=="") {
						echo "<p>Debes introducir una nueva prioridad.</p>";
						return;
				}
				if ($_POST["inputCambiarPrioridadPedido"]!="1" && $_POST["inputCambiarPrioridadPedido"]!="2" && $_POST["inputCambiarPrioridadPedido"]!="3") {
						echo "<p>La prioridad de un pedido debe ser 1, 2 o 3.</p>";
						return;
				}
				
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				try {
					$consultaPre = $this->db->prepare("SELECT * FROM Pedidos WHERE producto=?");   
					$consultaPre->bind_param('s', $_POST["inputPrioridadPedido"]);   	
					$consultaPre->execute();
					$resultado = $consultaPre->get_result();
					$consultaPre->close();
					if ($resultado->fetch_assoc()!=NULL) {
						$consultaPre = $this->db->prepare("UPDATE Pedidos SET prioridad=? WHERE producto=?");
							
						$consultaPre->bind_param('is', 
						$_POST['inputCambiarPrioridadPedido'],
						$_POST['inputPrioridadPedido']);  
							
						$consultaPre->execute();
						if ($consultaPre->affected_rows == -1) echo "<p>No se han podido modificar los datos.</p>";
						else echo "<p>Los datos se han modificado con éxito.</p>";
						$consultaPre->close();
					} else {echo "<p>No se encuentra el pedido a modificar.</p>";}
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
				$this->db->close();
			}

			public function cargarPersonal() {
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}

				try {
					if (!(isset($_FILES['archivoPersonal']) && $_FILES['archivoPersonal']['error'] === UPLOAD_ERR_OK)) { 
						echo "<p>Debes seleccionar un archivo.</p>"; 
						return;
					}
					if ($_FILES['archivoPersonal']['type'] != 'application/vnd.ms-excel') { 
						echo "<p>Formato de archivo no válido.</p>"; 
						return;
					}
					$archivo = fopen($_FILES['archivoPersonal']['tmp_name'],"r"); 
					$first = true;
					while(($datos=fgetcsv($archivo, 1000, ";")) !== FALSE) {
						if ($first) { $first = false; continue; }
						$consultaPre = $this->db->prepare("INSERT INTO Personal (codigo,nombre,apellidos,telefono,cargo,sueldo,experiencia,tienda) VALUES (?,?,?,?,?,?,?,?)");
						$consultaPre->bind_param('sssdsiis', 
						$datos[0],
						$datos[1],
						$datos[2],
						$datos[3],
						$datos[4],
						$datos[5],
						$datos[6],
						$datos[7]);
					
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
			
			public function exportarPersonal() {
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				
				try {
					$consultaPre = $this->db->prepare("SELECT * FROM Personal");    	
					$consultaPre->execute();
					$resultado = $consultaPre->get_result();
					$consultaPre->close();
					$this->db->close();
				
					$archivo = fopen("personal.csv","w"); 
					$campos = array('Codigo (DNI)', 'Nombre', 'Apellidos', 'Telefono', 'Cargo', 'Sueldo', 'Experiencia', 'Tienda');
					fputcsv($archivo, $campos, ";");
					if ($resultado->fetch_assoc()!=NULL) {
						$resultado->data_seek(0);
						while($fila = $resultado->fetch_assoc()) {
							$fila = array($fila['codigo'],$fila['nombre'],$fila['apellidos'],$fila['telefono'],$fila['cargo'], 
								$fila['sueldo'],$fila['experiencia'],$fila['tienda']);
							fputcsv($archivo, $fila, ";");
						}
					}
					fclose($archivo);
					echo "<p>Los datos se han exportado con éxito.</p>";
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
			}
			
			public function cargarProductos() {
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}

				try {
					if (!(isset($_FILES['archivoProductos']) && $_FILES['archivoProductos']['error'] === UPLOAD_ERR_OK)) { 
						echo "<p>Debes seleccionar un archivo.</p>"; 
						return;
					}
					if ($_FILES['archivoProductos']['type'] != 'application/vnd.ms-excel') { 
						echo "<p>Formato de archivo no válido.</p>"; 
						return;
					}
					$archivo = fopen($_FILES['archivoProductos']['tmp_name'],"r"); 
					$first = true;
					while(($datos=fgetcsv($archivo, 1000, ";")) !== FALSE) {
						if ($first) { $first = false; continue; }
						$consultaPre = $this->db->prepare("INSERT INTO Stock (producto,cantidad,precio,tienda) VALUES (?,?,?,?)");
						$consultaPre->bind_param('siis', 
						$datos[0],
						$datos[1],
						$datos[2],
						$datos[3]);
					
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
			
			public function exportarProductos() {
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				
				try {
					$consultaPre = $this->db->prepare("SELECT * FROM Stock");    	
					$consultaPre->execute();
					$resultado = $consultaPre->get_result();
					$consultaPre->close();
					$this->db->close();
				
					$archivo = fopen("stock.csv","w"); 
					$campos = array('Producto','Cantidad','Precio','Tienda');
					fputcsv($archivo, $campos, ";");
					if ($resultado->fetch_assoc()!=NULL) {
						$resultado->data_seek(0);
						while($fila = $resultado->fetch_assoc()) {
							$fila = array($fila['producto'],$fila['cantidad'],$fila['precio'],$fila['tienda']);
							fputcsv($archivo, $fila, ";");
						}
					}
					fclose($archivo);
					echo "<p>Los datos se han exportado con éxito.</p>";
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
			}
			
			public function cargarPedidos() {
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}

				try {
					if (!(isset($_FILES['archivoPedidos']) && $_FILES['archivoPedidos']['error'] === UPLOAD_ERR_OK)) { 
						echo "<p>Debes seleccionar un archivo.</p>"; 
						return;
					}
					if ($_FILES['archivoPedidos']['type'] != 'application/vnd.ms-excel') { 
						echo "<p>Formato de archivo no válido.</p>"; 
						return;
					}
					$archivo = fopen($_FILES['archivoPedidos']['tmp_name'],"r"); 
					$first = true;
					while(($datos=fgetcsv($archivo, 1000, ";")) !== FALSE) {
						if ($first) { $first = false; continue; }
						$consultaPre = $this->db->prepare("INSERT INTO Pedidos (producto,cantidad,prioridad,tienda) VALUES (?,?,?,?)");
						$consultaPre->bind_param('siis', 
						$datos[0],
						$datos[1],
						$datos[2],
						$datos[3]);
					
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
			
			public function exportarPedidos() {
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				
				try {
					$consultaPre = $this->db->prepare("SELECT * FROM Pedidos");    	
					$consultaPre->execute();
					$resultado = $consultaPre->get_result();
					$consultaPre->close();
					$this->db->close();
				
					$archivo = fopen("pedidos.csv","w"); 
					$campos = array('Producto','Cantidad','Prioridad','Tienda');
					fputcsv($archivo, $campos, ";");
					if ($resultado->fetch_assoc()!=NULL) {
						$resultado->data_seek(0);
						while($fila = $resultado->fetch_assoc()) {
							$fila = array($fila['producto'],$fila['cantidad'],$fila['prioridad'],$fila['tienda']);
							fputcsv($archivo, $fila, ";");
						}
					}
					fclose($archivo);
					echo "<p>Los datos se han exportado con éxito.</p>";
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
			}
			
			public function buscarCargo() {
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				
				try {
					$consultaPre = $this->db->prepare("SELECT * FROM Personal WHERE cargo = ?");   
					$consultaPre->bind_param('s', $_POST["inputBuscarCargo"]);   	
					$consultaPre->execute();
				
					$resultado = $consultaPre->get_result();
					if ($resultado->fetch_assoc()!=NULL) {
						echo "<p>Los datos del personal que coinciden con la búsqueda son:</p>";
						$resultado->data_seek(0);
						while($fila = $resultado->fetch_assoc()) {
							echo "<p>--------------------------------------</p>";
							echo "<p>DNI = " . $fila['codigo'] . "</p>";
							echo "<p>nombre = " . $fila['nombre'] . "</p>";
							echo "<p>apellidos = " . $fila['apellidos'] . "</p>";
							echo "<p>teléfono = ". $fila['telefono'] . "</p>";
							echo "<p>experiencia = ". $fila['experiencia'] . "</p>";
							echo "<p>cargo = ". $fila['cargo'] . "</p>";
							echo "<p>sueldo = ". $fila['sueldo'] . "</p>";
							echo "<p>tienda = ". $fila['tienda'] . "</p>";
							echo "<p>--------------------------------------</p>";
						}
					} else {echo "<p>Búsqueda sin resultados.</p>";}
					$consultaPre->close();
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
				$this->db->close();
			}
			
			public function insertarTienda() {
				if ($_POST["inputInsetarTienda"]=="" || $_POST["inputInsetarDireccion"]=="") {
						echo "<p>Debes rellenar todos los campos.</p>";
						return;
				}
				
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				try {
					$consultaPre = $this->db->prepare("INSERT INTO Tiendas (codigo,direccion) VALUES (?,?)");
					$consultaPre->bind_param('ss', 
						$_POST["inputInsetarTienda"],
						$_POST["inputInsetarDireccion"]);  
					
					$consultaPre->execute();
					if ($consultaPre->affected_rows == -1) echo "<p>No se han podido insertar los datos.</p>";
					else echo "<p>Los datos se han insertado con éxito.</p>";
					$consultaPre->close();
				} catch (Error $e) {
					echo "<p>ERROR: " . $e->getMessage() . "</p>";
				}
				$this->db->close();
			}
			
			public function cargarTiendas() {
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}

				try {
					if (!(isset($_FILES['archivoTiendas']) && $_FILES['archivoTiendas']['error'] === UPLOAD_ERR_OK)) { 
						echo "<p>Debes seleccionar un archivo.</p>"; 
						return;
					}
					if ($_FILES['archivoTiendas']['type'] != 'application/vnd.ms-excel') { 
						echo "<p>Formato de archivo no válido.</p>"; 
						return;
					}
					$archivo = fopen($_FILES['archivoTiendas']['tmp_name'],"r"); 
					$first = true;
					while(($datos=fgetcsv($archivo, 1000, ";")) !== FALSE) {
						if ($first) { $first = false; continue; }
						$consultaPre = $this->db->prepare("INSERT INTO Tiendas (codigo,direccion) VALUES (?,?)");
						$consultaPre->bind_param('ss', 
						$datos[0],
						$datos[1]);
					
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
			
			public function exportarTiendas() {
				$this->db = new mysqli($this->servername,$this->username,$this->password,$this->dbName);
				if($this->db->connect_error) {
					exit ("<p>ERROR de conexión:" . $this->db->connect_error . "</p>");  
				} else {echo "<p>Conexión establecida</p>";}
				
				try {
					$consultaPre = $this->db->prepare("SELECT * FROM Tiendas");    	
					$consultaPre->execute();
					$resultado = $consultaPre->get_result();
					$consultaPre->close();
					$this->db->close();
				
					$archivo = fopen("tiendas.csv","w"); 
					$campos = array('Codigo','Direccion');
					fputcsv($archivo, $campos, ";");
					if ($resultado->fetch_assoc()!=NULL) {
						$resultado->data_seek(0);
						while($fila = $resultado->fetch_assoc()) {
							$fila = array($fila['codigo'],$fila['direccion']);
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
			if(isset($_POST['bContratar'])) $baseDatos->contratar();
			if(isset($_POST['bDespedir'])) $baseDatos->despedir();
			if(isset($_POST['bActualizar'])) $baseDatos->modificarPersonal();
			if(isset($_POST['bInsertarProducto'])) $baseDatos->insertarProducto();
			if(isset($_POST['bCantidadProducto'])) $baseDatos->modificarCantidadProducto();
			if(isset($_POST['bPrecioProducto'])) $baseDatos->modificarPrecioProducto();
			if(isset($_POST['bInsertarPedido'])) $baseDatos->insertarPedido();
			if(isset($_POST['bCantidadPedido'])) $baseDatos->modificarCantidadPedido();
			if(isset($_POST['bPrioridadPedido'])) $baseDatos->modificarPrioridadPedido();
			if(isset($_POST['bCargarPersonal'])) $baseDatos->cargarPersonal();
			if(isset($_POST['bExportarPersonal'])) $baseDatos->exportarPersonal();
			if(isset($_POST['bCargarProductos'])) $baseDatos->cargarProductos();
			if(isset($_POST['bExportarProductos'])) $baseDatos->exportarProductos();
			if(isset($_POST['bCargarPedidos'])) $baseDatos->cargarPedidos();
			if(isset($_POST['bExportarPedidos'])) $baseDatos->exportarPedidos();
			if(isset($_POST['bBuscarCargo'])) $baseDatos->buscarCargo();
			if(isset($_POST['bInsertarTienda'])) $baseDatos->insertarTienda();
			if(isset($_POST['bCargarTiendas'])) $baseDatos->cargarTiendas();
			if(isset($_POST['bExportarTiendas'])) $baseDatos->exportarTiendas();
		}
	?>
	</body>
</html>