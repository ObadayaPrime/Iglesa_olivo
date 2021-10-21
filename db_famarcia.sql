DROP DATABASE IF EXISTS db_sistema_farmacia;
create database db_sistema_farmacia  CHARACTER SET 'UTF8' COLLATE 'utf8_general_ci';
use db_sistema_farmacia;
CREATE TABLE rol(
  rolId INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(100) NOT NULL,
  estado tinyint(1) NOT NULL
);
CREATE TABLE persona(
  personaId INT AUTO_INCREMENT PRIMARY KEY,
  CI VARCHAR(10) NOT NULL,
  nombre VARCHAR(50) NOT NULL,
  apellido VARCHAR(50) NOT NULl,
  fechaNac DATE NOT NULL,
  dirrecion VARCHAR(350) NULL,
  telefono VARCHAR(15) NULL,
  celular VARCHAR(15)  NULL,
  estado tinyint(1) NOT NULL,
  correoPersonal VARCHAR(250) NULL
);
CREATE TABLE usuario(
  userId INT AUTO_INCREMENT PRIMARY KEY,
  personaId INT NOT NULL,
  rolId INT NOT NULL,
  nickname VARCHAR(100) NOT NULL,
  username VARCHAR(100) NOT NULL,
  password text NOT NULL,
  estado tinyint(1) NOT NULL,
  FOREIGN KEY (personaId) REFERENCES persona(personaId),
  FOREIGN KEY (rolId) REFERENCES rol(rolId)
);

/*insert rapidos*/
INSERT INTO `persona`(`CI`, `nombre`, `apellido`, `fechaNac`, `dirrecion`, `telefono`, `celular`, `estado`, `correoPersonal`) VALUES ('8963497','ali stiven','lovera','1991-09-01','no hay wey','','75679775','1','stivenlovera@gmail.com');
INSERT INTO `rol`(`nombre`, `estado`) VALUES ('Administrador','1');
INSERT INTO `usuario`(`personaId`,`rolId`, `nickname`, `username`, `password`, `estado`) VALUES ('1','1','stiven :v','admin','admin','1');