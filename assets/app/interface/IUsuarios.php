<?php

namespace App\interface;

interface IUsuarios {
    public function getAll();
    public function getById($id);
    public function save($data);
    public function delete($id);
    public function update($id, $data);
}
