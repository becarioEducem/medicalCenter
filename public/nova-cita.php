<?php
require_once '../models/pacients.php';
require_once '../models/metges.php';
require_once '../models/cites.php';

$titol = "New Appointment";
$errors = [];
$missatge = "";

// TODO: If the request method is POST:
// - Retrieve form data from $_POST
// - Check that patient, doctor and date/time are not empty
// - If valid, call inserirCita()
// - Set $missatge or add to $errors accordingly
// - Also check for duplicate appointments using citaJaExisteix()

$pacients = obtenirPacients();
$metges = obtenirMetges();

include '../templates/layout.php';
include '../templates/formulari-cita.php';
