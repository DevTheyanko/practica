<?php
// C:\xampp\htdocs\practica\index.php
require 'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

use App\Controller\UsuarioController;

$controller = new UsuarioController();

$action = $_GET['action'] ?? 'index';
$id = $_GET['id'] ?? null;

switch ($action) {
    case 'index':
        $controller->index();
        break;
    case 'show':
        $controller->show($id);
        break;
    case 'create':
        $controller->create();
        break;
        
    case 'store':
        $controller->store($_POST);
        break;
       case 'delete':
        $controller->delete($id);
        break;
    case 'edit':
        $controller->edit($id);
        break;
        
    case 'update':
        $controller->update($id, $_POST);
        break;
    default:
        echo "Acción no válida";
        break;
}
