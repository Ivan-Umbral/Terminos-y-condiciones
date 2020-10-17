create database UTTT;
USE UTTT;
create table CONTACTO(
IDCONTACTO INT NOT NULL auto_increment,
NOMBRE varchar(100) NOT NULL,
DIRECCION VARCHAR(70)NOT NULL,
TELEFONO bigint NOT NULL,
EMAIL varchar(50)NOT null,
constraint PK_CON primary key(IDCONTACTO));
