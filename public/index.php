<?php
    require_once '../models/cites.php';

    $cites = obtenirCites();

    $titol = "Llistat de Cites";
    include '../templates/layout.php';
    include '../templates/llistat-cites.php';
