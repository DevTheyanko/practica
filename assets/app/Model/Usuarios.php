<?php

namespace App\Model;

use App\Config\db_connect\connect;
use App\interface\IUsuarios;

class Usuarios implements IUsuarios {
    private $db;

    public function __construct() {
        $this->db = connect::connection();
    }

    public function getAll() {
        $sql = $this->db->prepare("SELECT * FROM usuario");
        $sql->execute();
        return $sql->fetchAll();
    }

    public function getById($id) {
        $sql = $this->db->prepare("SELECT * FROM usuario WHERE idusuario = ?");
        $sql->execute([$id]);
        return $sql->fetch();
    }

    public function save($data) {
        $sql = $this->db->prepare("INSERT INTO usuario (nombre, segundo_nombre, apellido, usuario, clave) VALUES (?, ?, ?, ?, ?)");
        return $sql->execute([
            $data['nombre'],
            $data['segundo_nombre'],
            $data['apellido'],
            $data['usuario'],
            sha1($data['clave'])
        ]);
    }
   public function delete($id) {
    $sql = $this->db->prepare("DELETE FROM usuario WHERE idusuario = ?");
    return $sql->execute([$id]);
}

    public function update($id, $data) {
        $sql = $this->db->prepare("UPDATE usuario SET nombre=?, segundo_nombre=?, apellido=?, usuario=? WHERE idusuario=?");
        return $sql->execute([
            $data['nombre'],
            $data['segundo_nombre'],
            $data['apellido'],
            $data['usuario'],
            $id
        ]);
    }
}
