<?php
// view/Usuario/Show.php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Ver Usuario</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <h1>Detalles del Usuario</h1>
  
  <!-- Formulario con los detalles del usuario -->
  <form>
    <div>
      <label for="idusuario">ID</label>
      <input type="text" id="idusuario" value="<?= $data['idusuario'] ?>" disabled>
    </div>
    <div>
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" value="<?= $data['nombre'] ?>" disabled>
    </div>
    <div>
      <label for="segundo_nombre">Segundo Nombre</label>
      <input type="text" id="segundo_nombre" value="<?= $data['segundo_nombre'] ?>" disabled>
    </div>
    <div>
      <label for="apellido">Apellido</label>
      <input type="text" id="apellido" value="<?= $data['apellido'] ?>" disabled>
    </div>
    <div>
      <label for="usuario">Usuario</label>
      <input type="text" id="usuario" value="<?= $data['usuario'] ?>" disabled>
    </div>
     <!-- Enlace para volver -->
  <a  class="button button-add" href="./">Volver</a>
  </form>

 

</body>
</html>
