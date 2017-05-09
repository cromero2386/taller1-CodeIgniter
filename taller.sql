/*
	Crea tabla usuarios
*/
CREATE TABLE socios(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	nombre VARCHAR(50) NOT NULL,
	apellido VARCHAR(50) NOT NULL,
	dias_prestamos INT NOT NULL,
	usuario VARCHAR(10) NOT NULL,
	pass VARCHAR(100) NOT NULL,
	PRIMARY KEY(id)
);
/*
	Crea tabla libros
*/
CREATE TABLE libros(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	titulo VARCHAR(50) NOT NULL,
	edicion VARCHAR(15) NOT NULL,
	editorial VARCHAR(50) NOT NULL,
	anio INT UNSIGNED NOT NULL,
	imagen VARCHAR(50) NOT NULL,
	stock INT UNSIGNED NOT NULL,
	stock_minimo INT UNSIGNED  NOT NULL,
	PRIMARY KEY(id)
);
/*
	Crea tabla prestamos
*/
CREATE TABLE prestamos_cabecera(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	fecha_retiro DATE NOT NULL,
	fecha_devolucion DATE NOT NULL,
	socio_id INT UNSIGNED NOT NULL,
	PRIMARY KEY(id),
	CONSTRAINT FK_prestamo_socio FOREIGN KEY(socio_id) REFERENCES socios(id)
);
/*
	Crea tabla prestamos_detalle
*/
CREATE TABLE prestamos_detalle(
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	prestamo_id INT UNSIGNED NOT NULL,
	libro_id INT UNSIGNED NOT NULL,
	PRIMARY KEY(id),
	CONSTRAINT FK_detalle_cabecera FOREIGN KEY(prestamo_id) REFERENCES prestamos_cabecera(id),
	CONSTRAINT FK_detalle_libro FOREIGN KEY(libro_id) REFERENCES libros(id)
);