<?php

    namespace src\config;

    abstract class Connection {

        private static $conn;

        public static function getConn() {

            if(!self::$conn) {
                $envPath = realpath(dirname(__FILE__) . '/../env.ini');
                $env = parse_ini_file($envPath);
                self::$conn = new \PDO('mysql: host=' . $env['host'] . '; dbname=' . $env['database'] . ';', $env['username'], $env['password']);
            }
            
            return self::$conn;

        }

    }

?>