
CREATE DATABASE web18100166;

USE web18100166;

CREATE TABLE DatosUs(

    idUsuario int PRIMARY KEY NOT NULL AUTO_INCREMENT,

    Nombre VARCHAR (40) NOT NULL,

    Correo VARCHAR (40) NOT NULL,

    PSWD VARCHAR (40) NOT NULL,

    CalleP VARCHAR (40) NOT NULL,

    NumExt INT NOT NULL,

    NumInt INT NULL,

    Carrera VARCHAR (40) NOT NULL
);

USE web18100166;

CREATE TABLE Usuarios(
    idUsuario int PRIMARY KEY NOT NULL AUTO_INCREMENT,

    Correo VARCHAR (40) NOT NULL,

    PSWD VARCHAR (40) NOT NULL
);
USE web18100166;
INSERT INTO DatosUs (Nombre, Correo, PSWD, CalleP, NumExt, Carrera)
VALUES ('Jose', 'Jose_1@****.com', '7b9effe1370190e99bde819ec5cbf8f2', 'Gonzalez', 2020, 'Agricultura');
INSERT INTO DatosUs (Nombre, Correo, PSWD, CalleP, NumExt, Carrera)
VALUES ('Jose1', 'Jose_11@****.com', '2d59be5b10488b7890ff9b9e5581c5ee', 'Gonzalez1', 20201, 'Agricultura1');
INSERT INTO DatosUs (Nombre, Correo, PSDW, CalleP, NumExt, Carrera)
VALUES ('Jose2', 'Jose_12@****.com', 'f5f0c2bf5c25777b202af646b9ba97e7', 'Gonzalez2', 20202, 'Agricultura2');
INSERT INTO DatosUs (Nombre, Correo, PSDW, CalleP, NumExt, Carrera)
VALUES ('Jose3', 'Jose_13@****.com', 'ead27b446bfb14434fd6b0efcc6768bb', 'Gonzalez3', 20203, 'Agricultura3');

USE web18100166;
INSERT INTO Usuarios (Correo, PSWD)
VALUES('Jose_1@****.com', '7b9effe1370190e99bde819ec5cbf8f2');
INSERT INTO Usuarios (Correo, PSWD)
VALUES('Jose_11@****.com', '2d59be5b10488b7890ff9b9e5581c5ee');
INSERT INTO Usuarios (Correo, PSWD)
VALUES('Jose_12@****.com', 'f5f0c2bf5c25777b202af646b9ba97e7');
INSERT INTO Usuarios (Correo, PSWD)
VALUES('Jose_13@****.com', 'ead27b446bfb14434fd6b0efcc6768bb');

USE web18100166;
SELECT * FROM DatosUs;

USE web18100166;
SELECT * FROM Usuarios;

USE web18100166;
DROP TABLE Usuarios;
Use web18100166
DROP TABLE DatosUs;