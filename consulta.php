<?php
$tipo_consulta = $_POST['tipo_consulta'];

// Conexión a la base de datos
$mysqli = new mysqli("localhost", "root", "", "formulario");

switch ($tipo_consulta) {
  case 1:
    // Consultar el nombre completo de todas las personas 
    $sql = "SELECT CONCAT(primer_nombre, ' ', segundo_nombre, ' ', primer_apellido, ' ', segundo_apellido) AS nombre_completo FROM usuarios";
    break;
  case 2:
    // Cuántas mujeres hay?
    $sql = "SELECT COUNT(*) AS total_mujeres FROM usuarios WHERE genero = 'femenino'";
    break;
  case 3:
    // Cuántos hombres hay?
    $sql = "SELECT COUNT(*) AS total_hombres FROM usuarios WHERE genero = 'masculino'";
    break;
  case 4:
    //  mayor edad
    $sql = "SELECT CONCAT(primer_nombre, ' ', segundo_nombre, ' ', primer_apellido, ' ', segundo_apellido) AS mayor_edad FROM usuarios ORDER BY edad DESC LIMIT 1"; 
    break;
  case 5:
    // El promedio de la edad.
    $sql = "SELECT AVG(edad) AS promedio_edad FROM usuarios";
    break;
  default:
    // Consulta no válida.
    echo "Consulta no válida.";
    exit;
}
//CONCAT(primer_nombre, ' ', segundo_nombre, ' ', primer_apellido, ' ', segundo_apellido) AS nombre_completo ,
// Preparar la consulta SQL
$stmt = $mysqli->prepare($sql);

// Ejecutar la consulta SQL
$stmt->execute();

// Obtener los resultados de la consulta SQL
$resultados = $stmt->get_result();

// Imprimir los resultados de la consulta SQL
if ($resultados->num_rows > 0) {
  switch ($tipo_consulta) {
    case 1:
      // Consultar el nombre completo de todas las personas que fueron insertadas
      while ($registro = $resultados->fetch_assoc()) {
        echo $registro['nombre_completo'] . "<br>";
      }
      break;
    case 2:
      
      $total_mujeres = $resultados->fetch_assoc()['total_mujeres'];
      echo "Hay $total_mujeres mujeres.";
      break;
    case 3:
      
      $total_hombres = $resultados->fetch_assoc()['total_hombres'];
      echo "Hay $total_hombres hombres.";
      break;
    case 4:
      //  persona con mayor edad
      $mayor_edad = $resultados->fetch_assoc()['mayor_edad'];
      echo "La persona con mayor edad es $mayor_edad.";
      break;
    case 5:
      // El promedio de la edad
      $promedio_edad = $resultados->fetch_assoc()['promedio_edad'];
      echo "El promedio de edad es $promedio_edad años.";
      break;
  }
} else {
  echo "No se encontraron resultados.";
}
// Cerrar
$mysqli->close();
?>