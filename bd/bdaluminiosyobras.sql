create database bdaluminiosyobras;
use bdaluminiosyobras;

create table login
(
  idusuarios INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  correoElectronico VARCHAR(45) NOT NULL,
  contrasena VARCHAR(200) NOT NULL
);

create table bienvenida
(
  idbienvenidos INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  mensajewelcome VARCHAR(40) NOT NULL,
  subtitulo VARCHAR(60) NOT NULL,
  descripcion VARCHAR(200) NOT NULL
);

create table logo
(
  idlogo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  rutalogo VARCHAR(100) NOT NULL
);

create table modulo
(
  idmodulo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
  rutamodulo VARCHAR(100) NOT NULL,
  numeroresaltador int,
  descripciondelnumero varchar (50)
);

create table caracteristicasmodulo
(
idcaracteristicasmodulo INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
caracteristica varchar (70),
fkidmodulo int,
FOREIGN KEY(fkidmodulo) REFERENCES modulo (idmodulo)
ON DELETE CASCADE 
ON UPDATE CASCADE
);

create table galeria
(
idgaleria INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
nombreproyecto varchar (40),
rutafotoprincipal  varchar(100),
descripcionbreve varchar (70),
descripcionlarga varchar (200),
fkidmodulo int,
FOREIGN KEY(fkidmodulo) REFERENCES modulo (idmodulo)
ON DELETE CASCADE 
ON UPDATE CASCADE
);

create table fotogaleria
(
idfotogaleria INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
fotos varchar (100),
descripción varchar (100),
fkgaleria int,
FOREIGN KEY(fkgaleria) REFERENCES galeria (idgaleria)
ON DELETE CASCADE 
ON UPDATE CASCADE
)




