CREATE DATABASE alumnos;
CREATE TABLE Alumnos (
    ID INT NOT NULL AUTO-INCREMENT PRIMARY KEY,
    Nombre TEXT,
    Apellidos TEXT,
    Nacimiento DATE,
    Email TEXT
);
/*insertando datos */
INSERT INTO Alumnos  (Nombre, Apellidos, Nacimiento, Email) VALUES ('SORTO', 'ORTEGA', '1995-06-06','ramonsorto1@gmail.com');
/* seleccionando los datos de la tabla*/
SELECT * FROM Alumnos;
SELECT ID, Nombre FROM Alumnos;
UPDATE Alumnos SET Email = ’romeobuscajulieta@hotmail.com’ WHERE ID ='3';