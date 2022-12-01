CREATE SCHEMA `bd_paises`;

CREATE TABLE `paises`.`t_paisesMundo` (
  `id_pais` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(145) NULL,
  `continente` VARCHAR(145) NULL,
  `bandera` LONGBLOB NULL,
  PRIMARY KEY (`id_pais`));


