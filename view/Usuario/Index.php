<?php
// view/Usuario/Index.php
?>
<!DOCTYPE html>
<html><head><meta charset="UTF-8"><title>Editar Usuario</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <div class="container">
    <h1>Listado de Usuarios</h1>
    <a href="?action=create" class="button button-add">Nuevo Usuario</a>

    <table>
      <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Segundo Nombre</th>
        <th>Apellido</th>
        <th>Usuario</th>
        <th>Clave encriptada</th>
        <th>Acciones</th>
      </tr>
      <?php foreach($data as $u): ?>
      <tr>
        <td><?= $u['idusuario'] ?></td>
        <td><?= $u['nombre'] ?></td>
        <td><?= $u['segundo_nombre'] ?></td>
        <td><?= $u['apellido'] ?></td>
        <td><?= $u['usuario'] ?></td>
        <td><?= $u['clave'] ?></td>
        <td>
          <a href="?action=show&id=<?= $u['idusuario'] ?>">Ver</a> |
          <a href="?action=edit&id=<?= $u['idusuario'] ?>">Editar</a>|
          <a href="?controller=usuario&action=delete&id=<?= $u['idusuario'] ?>"  onclick="return confirm('¿Estás seguro de eliminar este usuario?');">Eliminar</a>
           
            


        </td>
      </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body></html>


