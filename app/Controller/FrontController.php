<?php
// C:\xampp\htdocs\practica\assets\app\Controller\FrontController.php
namespace App\Controller;

use App\Controller\UsuarioController;

class FrontController {
    public function index() {
        $controller = new UsuarioController();
        $controller->index();
    }
}
