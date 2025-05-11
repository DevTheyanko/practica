<?php

namespace App\helper;

class Encripter {
    public static function encrypt($password) {
        return password_hash($password, PASSWORD_BCRYPT);
    }
}
