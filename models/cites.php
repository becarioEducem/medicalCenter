<?php
    require_once 'db.php';

    function obtenirCites(){
        $pdo = getConnection();
        $stmt = $pdo->query("
            SELECT c.id, p.nom AS pacient_nom, p.telefon,
                m.nom AS metge_nom, m.especialitat,
                c.data_hora, c.observacions
            FROM cites c
            JOIN pacients p ON c.pacient_id = p.id
            JOIN metges m ON c.metge_id = m.id
            ORDER BY c.data_hora ASC
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }


    /**
     * Inserts a new medical appointment into the database.
     */
    function inserirCita($pacient_id, $metge_id, $data_hora, $observacions) {
        // TODO: Create a PDO connection using getConnection()
        // TODO: Prepare and execute an INSERT INTO query to add the appointment
        // TODO: Return true if successful, false otherwise
    }

    /**
     * Checks whether an appointment already exists for the same patient at the same date and time.
     *
     * @param int $pacient_id   The ID of the patient
     * @param string $data_hora The date and time of the appointment (YYYY-MM-DD HH:MM:SS)
     * @return bool             True if a duplicate exists, false otherwise
     */
    function citaJaExisteix($pacient_id, $data_hora) {
        // TODO: Create a PDO connection using getConnection()
        // TODO: Prepare a SELECT COUNT(*) query from the 'cites' table
        //       where pacient_id = ? and data_hora = ?
        
        // TODO: Execute the query with the provided parameters
        // TODO: Fetch the result and return true if count > 0, otherwise false
    }
