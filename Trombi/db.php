<?php
require_once __DIR__ . './config/params.php';

function db_connect()
{
    try {
        $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];
        $dsn = 'mysql:host=' . HOST . ';dbname=' . DB_NAME . ';charset=utf8';
        $dbh = new PDO($dsn, USER, PWD, $options);
        return $dbh;
    } catch (PDOException $ex) {
        printf('La connexion à la base de donnée a échouée avec le code "%s"', $ex->getCode());
        die();
    }
}