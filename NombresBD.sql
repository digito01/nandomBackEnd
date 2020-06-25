CREATE DATABASE NombresBD;

create table 	Pais (
IdPais int auto_increment primary key,
NombrePais Varchar(50)
);

Create table Nombre (
IdNombre int auto_increment primary key,
Nombre Varchar(50),
IdPais int,
FOREIGN KEY (IdPais) REFERENCES Pais(IdPais)
);

create table 	PaisX (
IdPais int auto_increment primary key,
SpanishN Varchar(50),
EnglishN Varchar(50),
GermanN Varchar(50),
ArabicN Varchar(50)
);

Create table NombreX (
IdNombre int auto_increment primary key,
Nombre Varchar(50)
);

Create table NombresP (
IdNombre int auto_increment primary key,
IdPais int,
Nombre Varchar(50)
);


insert into NombresP
(IdPais, Nombre)
values
(1,'Carlos'),
(1,'Javier'),
(1,'Fernando'),
(1,'Esteban'),
(1,'Karla'),
(1,'Diana'),
(1,'Gladys'),
(1,'Elena'),
(2,'John'),
(2,'Joseth'),
(2,'Charlie'),
(2,'Andrew'),
(2,'Amy'),
(2,'Alisa'),
(2,'Alanis'),
(2,'Betty'),
(3,'Bastian'),
(3,'Cedrik'),
(3,'Cort'),
(3,'Derek'),
(3,'Adler'),
(3,'Agatha'),
(3,'Emma'),
(3,'Erika'),
(4,'Rayan'),
(4,'Abdel'),
(4,'Kamal'),
(4,'Malih'),
(4,'Azahara'),
(4,'Abir'),
(4,'Hanane'),
(4,'Jelila');

SELECT SpanishN FROM PaisX ORDER BY RAND()
LIMIT 1;

SELECT EnglishN FROM PaisX ORDER BY RAND()
LIMIT 1;

SELECT GermanN FROM PaisX ORDER BY RAND()
LIMIT 1;

SELECT IdPais, Nombre FROM NP ORDER BY RAND()
LIMIT 1;

SELECT * FROM NombresP 




