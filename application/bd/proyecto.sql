CREATE SCHEMA IF NOT EXISTS `bdproyecto777` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `bdproyecto777` ;


CREATE TABLE IF NOT EXISTS `producto` (
  `idproducto` INT(11) NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(30) NOT NULL,
  `precio` DECIMAL(5,2) NOT NULL,
  `stock` INT(11) NOT NULL,
  `habilitado` TINYINT(4) NOT NULL DEFAULT '1',
  `creado` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `imagen` BLOB NULL DEFAULT NULL,
  PRIMARY KEY (`idproducto`))
ENGINE = InnoDB;

INSERT INTO producto(nombre,precio,stock)
VALUES ("Coca Cola - 2 Litros",15,100);

insert into producto(nombre,precio,stock)
values ("Cerveza Taquiña - 620 ml",15,70);

SELECT * FROM producto;


CREATE TABLE IF NOT EXISTS `venta` (
  `idventa` INT NOT NULL AUTO_INCREMENT,
  `fecha` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`idventa`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `detalle` (
  `iddetalle` INT NOT NULL AUTO_INCREMENT,
  `idventa` INT NOT NULL,
  `idproducto` INT(11) NOT NULL,
  `cantidad` INT NOT NULL,
  `precio` DECIMAL(5,2) NOT NULL,
  PRIMARY KEY (`iddetalle`),
  INDEX `fk_detalle_venta2_idx` (`idventa` ASC),
  INDEX `fk_detalle_producto1_idx` (`idproducto` ASC),
  CONSTRAINT `fk_detalle_venta2`
    FOREIGN KEY (`idventa`)
    REFERENCES `venta` (`idventa`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_detalle_producto1`
    FOREIGN KEY (`idproducto`)
    REFERENCES `producto` (`idproducto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `cliente` (
  `idcliente` INT(11) NOT NULL AUTO_INCREMENT,
  `nombres` VARCHAR(45) NOT NULL,
  `apellidoMaterno` VARCHAR(45) NOT NULL,
  `apellidoPaterno` VARCHAR(45) NOT NULL,
  `habilitado` TINYINT(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`idcliente`))
ENGINE = InnoDB;

CREATE TABLE IF NOT EXISTS `user` (
  `iduser` INT(11) NOT NULL AUTO_INCREMENT,
  `login` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `nombres` VARCHAR(100) NOT NULL,
  `primerApellido` VARCHAR(100) NOT NULL,
  `segundoApellido` VARCHAR(100) NULL DEFAULT NULL,
  `edad` INT(11) NOT NULL,
  `tipo` VARCHAR(45) NOT NULL,
  `habilitado` TINYINT(2) NOT NULL DEFAULT '1',
  `imagen` BLOB NULL DEFAULT NULL,
  PRIMARY KEY (`iduser`))
ENGINE = InnoDB;

INSERT INTO user (login,  password, nombres, primerApellido, segundoApellido, edad, tipo) VALUES 
('amendez', 'bolivia1234', 'ALVARO', 'MENDEZ', 'ROCA' , 34, 'Admin'); 
INSERT INTO user (login,  password, nombres, primerApellido, segundoApellido, edad, tipo) VALUES 
('ajose', 'cbba456', 'JOSE', 'VARGAS', 'LINARES' , 28, 'Guest'); 

SELECT * FROM user;
