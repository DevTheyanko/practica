<?php
// view/Usuario/Create.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Crear Usuario</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
  
</head>
<body>

  <form method="POST" action="?controller=usuario&action=store">
    <h1>Crear Usuario</h1>
    <input type="text" name="nombre" placeholder="Nombre" required>
    <input type="text" name="segundo_nombre" placeholder="Segundo Nombre" required>
    <input type="text" name="apellido" placeholder="Apellido" required>
    <input type="text" name="usuario" placeholder="Usuario" required>
    <input type="password" name="clave" placeholder="Clave" required>
    <button type="submit">Guardar</button>
  </form>

</body>
</html>
