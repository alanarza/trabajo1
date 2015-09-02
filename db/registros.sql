SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `registros` DEFAULT CHARACTER SET latin1 ;
USE `registros` ;

-- -----------------------------------------------------
-- Table `registros`.`imagenes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `registros`.`imagenes` (
  `id` INT(255) NOT NULL AUTO_INCREMENT,
  `imagen` LONGBLOB NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `registros`.`nacionalidad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `registros`.`nacionalidad` (
  `id` INT(255) NOT NULL AUTO_INCREMENT,
  `pais` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `registros`.`provincia`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `registros`.`provincia` (
  `id` INT(255) NOT NULL AUTO_INCREMENT,
  `provincia` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `registros`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `registros`.`usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `apellido` VARCHAR(300) NOT NULL,
  `nombre` VARCHAR(300) NOT NULL,
  `dni` INT(11) NOT NULL,
  `nacimiento` VARCHAR(255) NOT NULL,
  `sexo` VARCHAR(300) NOT NULL,
  `nacionalidad` INT(255) NOT NULL,
  `provincia` INT(255) NOT NULL,
  `domicilio` VARCHAR(255) NOT NULL,
  `user` VARCHAR(255) NULL DEFAULT NULL,
  `pass` VARCHAR(255) NULL DEFAULT NULL,
  `fecha_expedicion` DATE NOT NULL,
  `fecha_vencimiento` DATE NOT NULL,
  `donante` TINYINT(1) NOT NULL,
  `num_tramite` INT(255) NOT NULL,
  `imagen` INT(255) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_usuarios_imagenes_idx` (`imagen` ASC),
  INDEX `fk_usuarios_nacionalidad1_idx` (`nacionalidad` ASC),
  INDEX `fk_usuarios_provincia1_idx` (`provincia` ASC),
  CONSTRAINT `fk_usuarios_imagenes`
    FOREIGN KEY (`imagen`)
    REFERENCES `registros`.`imagenes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_nacionalidad1`
    FOREIGN KEY (`nacionalidad`)
    REFERENCES `registros`.`nacionalidad` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuarios_provincia1`
    FOREIGN KEY (`provincia`)
    REFERENCES `registros`.`provincia` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 6
DEFAULT CHARACTER SET = latin1;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
