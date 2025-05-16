<?php
// C:\xampp\htdocs\practica\assets\app\Controller\UsuarioController.php
namespace App\Controller;

use App\Model\Usuarios;
use App\Config\SysConfig;


class UsuarioController {
    public function index() {
        $usuarios = new Usuarios();
        $data = $usuarios->getAll();
        include './view/Usuario/Index.php';
    }

    public function show($id) {
        $usuarios = new Usuarios();
        $data = $usuarios->getById($id);
        include './view/Usuario/Show.php';
    }

    public function create() {
        include './view/Usuario/Create.php';
    }
   public function delete($id) {
    $usuarios = new Usuarios();
    $usuarios->delete($id);
    header("Location: ?controller=usuario&action=index");
    
}

    public function store()
{
    $usuario = new Usuarios();
    $usuario->save ([
        'nombre' => $_POST['nombre'],
        'segundo_nombre' => $_POST['segundo_nombre'],
        'apellido' => $_POST['apellido'],
        'usuario' => $_POST['usuario'],
    ]);
    header("Location: ?controller=usuario&action=index");
}

    public function edit($id) {
        $usuarios = new Usuarios();
        $data = $usuarios->getById($id);
        include './view/Usuario/Update.php';
    }

    public function update($id) {
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $datos = [
            'nombre' => $_POST['nombre'],
            'segundo_nombre' => $_POST['segundo_nombre'],
            'apellido' => $_POST['apellido'],
            'usuario' => $_POST['usuario'],
        ];

        $usuarios = new Usuarios();
        $usuarios->update($id, $datos);
        header("Location: ?controller=usuario&action=index");
       
        
        exit;
    }
}

}
