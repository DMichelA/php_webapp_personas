CREATE TABLE personas(
    id_persona integer PRIMARY KEY AUTOINCREMENT,
    nombre VARCHAR(50) NOT NULL,
    email VARCHAR(50) NOT NULL,
    telefono VARCHAR(20) NOT NULL
);

INSERT INTO personas(nombre, email, telefono)
VALUES
('Amairani Michel Duran Ibarra', 'michi_duran29@hotmail.com', 7751451919),
('Axel Omar Duran', 'axel02@hotmail.com', 7756621111),
('Jennyfer Duran Ibarra', 'jenny@gmail.com', 7751825687);