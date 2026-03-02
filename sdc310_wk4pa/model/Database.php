<?php

class Database
{
    private const DB_HOST = '127.0.0.1';
    private const DB_NAME = 'sdc310_wk4pa';  
    private const DB_USER = 'root';
    private const DB_PASS = '';

    public static function getConnection(): PDO
    {
        $dsn = 'mysql:host=' . self::DB_HOST . ';dbname=' . self::DB_NAME . ';charset=utf8mb4';

        return new PDO($dsn, self::DB_USER, self::DB_PASS, [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]);
    }
}