<?php
    require_once 'db.php';

    function obtenirPacients() {
        $pdo = getConnection();
        $stmt = $pdo->query("SELECT id, nom FROM pacients ORDER BY nom ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
