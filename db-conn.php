<?php

//соединение с БД
class Conn
{

    public static function connectToDB(){

        $host = 'localhost:3308';
        $db   = 'my_db';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
     return $pdo = new PDO($dsn, $user, $pass, $opt);




    }
}