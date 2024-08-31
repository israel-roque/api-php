<?php

namespace App\Models;

use PDO;

class Database
{
    public static function getConnection()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=api_php_puro', 'root', '');

        return $pdo;
    }
}