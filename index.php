<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de registro</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <header>
      <h1>Formulario de registro</h1>
    </header>
    <main>
      <form action="submit.php" method="post" class="form">
        <div class="field">
          <label for="numero_documento">Número de documento:</label>
          <input type="text" id="numero_documento" name="numero_documento" required>
        </div>
        <div class="field">
          <label for="primer_nombre">Primer nombre:</label>
          <input type="text" id="primer_nombre" name="primer_nombre" required>
        </div>
        <div class="field">
          <label for="segundo_nombre">Segundo nombre:</label>
          <input type="text" id="segundo_nombre" name="segundo_nombre">
        </div>
        <div class="field">
          <label for="primer_apellido">Primer apellido:</label>
          <input type="text" id="primer_apellido" name="primer_apellido" required>
        </div>
        <div class="field">
          <label for="segundo_apellido">Segundo apellido:</label>
          <input type="text" id="segundo_apellido" name="segundo_apellido">
        </div>
        <div class="field">
          <label for="telefono">Teléfono:</label>
          <input type="tel" id="telefono" name="telefono">
        </div>
        <div class="field">
          <label for="correo">Correo:</label>
          <input type="email" id="correo" name="correo">
        </div>
        <div class="field">
          <label for="direccion">Dirección:</label>
          <input type="text" id="direccion" name="direccion" required>
        </div>
        <div class="field">
          <label for="edad">Edad:</label>
          <input type="number" id="edad" name="edad" required>
        </div>
        <div class="field">
          <label for="genero">Género:</label>
          <select id="genero" name="genero">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
          </select>
        </div>
        <div class="actions">
          <button type="submit" class="button">Enviar</button>
        </div>
      </form>
    </main>
  </div>
</body>
<style>
  body {
    background-color: #ffffff;
    font-family: sans-serif;
  }

  .container {
    width: 500px;
    margin: 0 auto;
  }

  header {
    text-align: center;
  }

  main {
    padding: 20px;
    border-radius: 5px;
    background-color: #f2f2f2;
  }

  .field {
    display: flex;
    margin-bottom: 10px;
  }

  .field label {
    font-weight: bold;
  }

  .field input {
    width: 100%;
  }

  .actions {
    text-align: center;
  }

  .button {
    background-color: #000;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }
</style>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de consulta</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <header>
      <h1>Formulario de consulta</h1>
    </header>
    <main>
      <form action="consulta.php" method="post" class="form">
        <div class="field">
          <label for="tipo_consulta">Tipo de consulta:</label>
          <select id="tipo_consulta" name="tipo_consulta" class="select">
            <option value="1">Consultar el nombre completo de todas las personas que fueron insertadas.</option>
            <option value="2">Cuántas mujeres hay?</option>
            <option value="3">Cuántos hombres hay?</option>
            <option value="4">El nombre completo de la persona con mayor edad.</option>
            <option value="5">El promedio de la edad.</option>
          </select>
        </div>
        <div class="actions">
          <button type="submit" class="button">Consultar</button>
        </div>
      </form>
    </main>
  </div>
</body>
<style>
  body {
    background-color: #ffffff;
    font-family: sans-serif;
  }

  .container {
    width: 500px;
    margin: 0 auto;
  }

  header {
    text-align: center;
  }

  main {
    padding: 20px;
    border-radius: 5px;
    background-color: #f2f2f2;
  }

  .field {
    display: flex;
    margin-bottom: 10px;
  }

  .field label {
    font-weight: bold;
  }

  .field select {
    width: 100%;
  }

  .actions {
    text-align: center;
  }

  .button {
    background-color: #000;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
  }
</style>


