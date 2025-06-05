<?php
    function getConnection() {
        $dsn = 'mysql:host=localhost;port=3316;dbname=centre_medic;charset=utf8';
        $usuari = 'root';
        $contrasenya = '';
        try {
            return new PDO($dsn, $usuari, $contrasenya, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ]);
        } catch (PDOException $e) {
            die("Error de connexió: " . $e->getMessage());
        }
    }
