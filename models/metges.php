<?php
    require_once 'db.php';

    function obtenirMetges() {
        $pdo = getConnection();
        $stmt = $pdo->query("SELECT id, nom FROM metges ORDER BY nom ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
