<?php
$numero_documento = $_POST['numero_documento']; 
$primer_nombre = $_POST['primer_nombre'];
$segundo_nombre = $_POST['segundo_nombre'];
$primer_apellido = $_POST['primer_apellido'];
$segundo_apellido = $_POST['segundo_apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$direccion = $_POST['direccion'];
$edad = $_POST['edad'];
$genero = $_POST['genero'];
// Validar los datos ingresados
if (empty($numero_documento) || !is_numeric($numero_documento)) {
  echo "El número de documento es obligatorio y debe ser un número.";
  exit;
}
if (empty($primer_nombre) || !preg_match('/^[a-zA-Z]+$/', $primer_nombre)) {
  echo "El primer nombre es obligatorio y solo puede contener letras.";
  exit;
}
if (!empty($segundo_nombre) && !preg_match('/^[a-zA-Z]+$/', $segundo_nombre)) {
  echo "El segundo nombre solo puede contener letras.";
  exit;
}
if (empty($primer_apellido) || !preg_match('/^[a-zA-Z]+$/', $primer_apellido)) {
  echo "El primer apellido es obligatorio y solo puede contener letras.";
  exit;
}
if (!empty($segundo_apellido) && !preg_match('/^[a-zA-Z]+$/', $segundo_apellido)) {
  echo "El segundo apellido solo puede contener letras.";
  exit;
}
if (!empty($telefono) && !preg_match('/^[0-9]+$/', $telefono)) {
  echo "El teléfono solo puede contener números.";
  exit;
}
if (!empty($correo) && !filter_var($correo, FILTER_VALIDATE_EMAIL)) {
  echo "El correo electrónico no es válido.";
  exit;
}
if (empty($direccion)) {
  echo "La dirección es obligatoria.";
  exit;
}
if (empty($edad) || !is_numeric($edad)) {
  echo "La edad es obligatoria y debe ser un número.";
  exit;
}
if (!in_array($genero, array('masculino', 'femenino', 'otro'))) {
  echo "El género debe ser masculino, femenino u otro.";
  exit;
}
// Crear una conexión a la base de datos
$mysqli = new mysqli("localhost", "root", "", "formulario");
// Preparar la consulta SQL
$stmt = $mysqli->prepare("INSERT INTO usuarios (numero_documento, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, telefono, correo, direccion, edad, genero) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
// Enlazar los parámetros a la consulta SQL
$stmt->bind_param("ssssssssss", $numero_documento, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $telefono, $correo, $direccion, $edad, $genero);
// Ejecutar la consulta SQL
$stmt->execute();
// Consulta SQL
$sql = "SELECT * FROM usuarios WHERE numero_documento = ? OR primer_nombre = ? OR segundo_nombre = ? OR primer_apellido = ? OR segundo_apellido = ? OR edad = ? OR genero = ?";
// Preparar la consulta SQL
$stmt = $mysqli->prepare($sql);
// Enlazar los parámetros a la consulta SQL
//$stmt->bind_param("sssssss", $numero_documento, $primer_nombre, $segundo_nombre, $primer_apellido, $segundo_apellido, $edad, $genero);
// Ejecutar la consulta SQL

// Cerrar la conexión a la base de datos
$mysqli->close();
// Redireccionar al usuario a la página de inicio
header("Location: index.php");
?>