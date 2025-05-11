<?php
// view/Usuario/Update.php
?>
<!DOCTYPE html>
<html><head><meta charset="UTF-8"><title>Editar Usuario</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <h1>Editar Usuario</h1>
  
<form method="POST" action="?controller=usuario&action=update&id=<?= $data['idusuario'] ?>">

    <input type="text" name="nombre" value="<?= $data['nombre'] ?>" required><br>
    <input type="text" name="segundo_nombre" value="<?= $data['segundo_nombre'] ?>" required><br>
    <input type="text" name="apellido" value="<?= $data['apellido'] ?>" required><br>
    <input type="text" name="usuario" value="<?= $data['usuario'] ?>" required><br>
    <button type="submit">Actualizar</button>
    
</form>


</body></html>
