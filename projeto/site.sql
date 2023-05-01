SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

CREATE SCHEMA IF NOT EXISTS `site` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `site` ;
-- -----------------------------------------------------
-- Table `site`.`Cliente`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `site`.`Cliente` (
  `idCliente` INT NOT NULL AUTO_INCREMENT ,
  `nome` VARCHAR(45) NOT NULL ,
  `endereco` VARCHAR(155) NOT NULL ,
  `cpf` VARCHAR(45) NOT NULL ,
  `rg` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`idCliente`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `site`.`Usuario`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `site`.`Usuario` (
  `idUsuario` INT NOT NULL ,
  `login` VARCHAR(45) NOT NULL ,
  `senha` VARCHAR(8) NOT NULL ,
  `id_cliente` INT NOT NULL ,
  PRIMARY KEY (`idUsuario`) ,
  INDEX `fk_Usuario_Cliente` (`id_cliente` ASC) ,
  CONSTRAINT `fk_Usuario_Cliente`
    FOREIGN KEY (`id_cliente` )
    REFERENCES `site`.`Cliente` (`idCliente` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
