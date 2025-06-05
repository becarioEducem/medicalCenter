// --- FITXER: create.sql ---
DROP DATABASE IF EXISTS centre_medic;
CREATE DATABASE IF NOT EXISTS centre_medic;
USE centre_medic;

CREATE TABLE metges (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  especialitat VARCHAR(100) NOT NULL
);

CREATE TABLE pacients (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nom VARCHAR(100) NOT NULL,
  telefon VARCHAR(20) NOT NULL
);

CREATE TABLE cites (
  id INT AUTO_INCREMENT PRIMARY KEY,
  pacient_id INT NOT NULL,
  metge_id INT NOT NULL,
  data_hora DATETIME NOT NULL,
  observacions TEXT,
  FOREIGN KEY (pacient_id) REFERENCES pacients(id),
  FOREIGN KEY (metge_id) REFERENCES metges(id)
);

INSERT INTO metges (nom, especialitat) VALUES
('Dra. Clara Puig', 'Pediatria'),
('Dr. Josep Vidal', 'Medicina General'),
('Dra. Laia Roca', 'Dermatologia'),
('Dr. Marc Ferrer', 'Traumatologia');

INSERT INTO pacients (nom, telefon) VALUES
('Anna Garcia', '600123456'),
('Jordi López', '615987321'),
('Marta Pujol', '622456789'),
('Pere Requena', '699112233'),
('Laura Soler', '688334455');

-- Sample appointments
INSERT INTO cites (pacient_id, metge_id, data_hora, observacions) VALUES
(1, 2, '2025-06-10 10:00:00', 'Routine check-up'),
(2, 1, '2025-06-11 15:30:00', 'Follow-up on blood test'),
(3, 3, '2025-06-12 09:00:00', 'Dermatology consultation'),
(4, 2, '2025-06-13 11:15:00', 'Back pain consultation');
