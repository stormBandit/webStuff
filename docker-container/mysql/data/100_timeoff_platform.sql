-- MySQL Script generated by MySQL Workbench
-- Fri 11 Jan 2019 03:04:09 PM EST
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema timeoff_platform
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `timeoff_platform` ;

-- -----------------------------------------------------
-- Schema timeoff_platform
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `timeoff_platform` DEFAULT CHARACTER SET utf8 ;
USE `timeoff_platform` ;

-- -----------------------------------------------------
-- Table `timeoff_platform`.`role_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `timeoff_platform`.`role_types` ;

CREATE TABLE IF NOT EXISTS `timeoff_platform`.`role_types` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(45) NOT NULL COMMENT 'Type of roles (fte, manager)',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `timeoff_platform`.`teams`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `timeoff_platform`.`teams` ;

CREATE TABLE IF NOT EXISTS `timeoff_platform`.`teams` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '	',
  `team_name` VARCHAR(45) NOT NULL COMMENT 'This will indicate the team names ',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `timeoff_platform`.`users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `timeoff_platform`.`users` ;

CREATE TABLE IF NOT EXISTS `timeoff_platform`.`users` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `first_name` VARCHAR(45) NOT NULL,
  `last_name` VARCHAR(45) NOT NULL,
  `role_id` INT UNSIGNED NOT NULL DEFAULT 2,
  `team_id` INT UNSIGNED NOT NULL,
  `creation_datetime` DATETIME NOT NULL,
  `last_login` DATETIME NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `FK_role_idx` (`role_id` ASC),
  INDEX `FK_team_idx` (`team_id` ASC),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC),
  CONSTRAINT `FK_users_rt_role`
    FOREIGN KEY (`role_id`)
    REFERENCES `timeoff_platform`.`role_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_users_teams_team`
    FOREIGN KEY (`team_id`)
    REFERENCES `timeoff_platform`.`teams` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `timeoff_platform`.`request_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `timeoff_platform`.`request_types` ;

CREATE TABLE IF NOT EXISTS `timeoff_platform`.`request_types` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(45) NOT NULL COMMENT 'The type of the request (timeoff, sick, PEL, PFL, etc)',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `timeoff_platform`.`status_types`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `timeoff_platform`.`status_types` ;

CREATE TABLE IF NOT EXISTS `timeoff_platform`.`status_types` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `type` VARCHAR(45) NOT NULL COMMENT 'The type of status that the request can be in (pending, approved, denied...)',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `timeoff_platform`.`requests`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `timeoff_platform`.`requests` ;

CREATE TABLE IF NOT EXISTS `timeoff_platform`.`requests` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `request_type_id` INT UNSIGNED NOT NULL COMMENT 'The type of the request (timeoff, sick, PEL, PFL, etc)',
  `start_datetime` DATETIME NOT NULL COMMENT 'The day (YYYY-MM-DD) which the user is requesting their time off to begin.',
  `end_datetime` DATETIME NOT NULL COMMENT 'The day (YYYY-MM-DD) which the user is requesting their time off to begin.',
  `user_id` INT UNSIGNED NOT NULL COMMENT 'The user who created the request',
  `status_type_id` INT UNSIGNED NOT NULL COMMENT 'The status of the request (pending, approved, denied, etc)',
  `user_comment` VARCHAR(500) NOT NULL COMMENT 'Users comments they can optionally provide when requesting time off, they can be seen by the manager during the approval process',
  `manager_comment` VARCHAR(500) NOT NULL COMMENT 'Comments written by the manager during the approval/denial process to let the user know why a decision was made',
  `creation_datetime` DATETIME NOT NULL COMMENT 'The date which the user submitted the request',
  `reviewed_datetime` DATETIME NULL COMMENT 'The date which the manager reviewed the request',
  PRIMARY KEY (`id`),
  UNIQUE INDEX `id_UNIQUE` (`id` ASC),
  INDEX `FK_type_idx` (`request_type_id` ASC),
  INDEX `FK_status_idx` (`status_type_id` ASC),
  INDEX `FK_requests_users_user_id_idx` (`user_id` ASC),
  INDEX `idx_start_datetime` (`start_datetime` ASC),
  INDEX `idx_end_datetime` (`end_datetime` ASC),
  CONSTRAINT `FK_requests_rt_type`
    FOREIGN KEY (`request_type_id`)
    REFERENCES `timeoff_platform`.`request_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_requests_users_user_id`
    FOREIGN KEY (`user_id`)
    REFERENCES `timeoff_platform`.`users` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `FK_requests_st_status`
    FOREIGN KEY (`status_type_id`)
    REFERENCES `timeoff_platform`.`status_types` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
