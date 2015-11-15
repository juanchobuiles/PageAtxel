-- crear la base de datos
CREATE DATABASE atxel;
-- usar la base de datos
USE atxel;
-- crear la tablas
CREATE TABLE demoContactos(
	-- INGRESO LAS TIPOS QUE VAN A IR EN LA TABLE
	-- QUE ES UN TIPO DE DATO.
		email VARCHAR(50)  NOT NULL, 
		nombre VARCHAR(50)  NOT NULL,
		apellido VARCHAR(50)  NOT NULL,
		telefono VARCHAR(13),
		celular VARCHAR (13),
		ciudad VARCHAR(50) NOT NULL,
		asunto VARCHAR(50) NOT NULL,
		comentarios VARCHAR(50) NULL,
		PRIMARY KEY(email),
		FULLTEXT KEY buscador(email, nombre, apellido, telefono, celular, ciudad, asunto, comentarios)
		)ENGINE=MyISAM DEFAULT CHARSET=latin1;

