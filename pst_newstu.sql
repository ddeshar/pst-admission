-- MySQL Script generated by MySQL Workbench
-- Mon Apr  2 11:56:03 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema pst_admission
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pst_admission
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pst_admission` DEFAULT CHARACTER SET utf8 ;
USE `pst_admission` ;

-- -----------------------------------------------------
-- Table `pst_admission`.`occupations`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`occupations` (
  `occupation_id` INT(10) NOT NULL AUTO_INCREMENT,
  `occupation_name` VARCHAR(45) NULL,
  PRIMARY KEY (`occupation_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pst_admission`.`parents_status`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`parents_status` (
  `par_status_id` INT(10) NOT NULL AUTO_INCREMENT,
  `par_status_des` VARCHAR(45) NULL COMMENT '1 = อยู่ด้ยกัน\n2 = แยกกันอยู่\n3 = หย่าร้าง\n4 = บิดาถึงแก่กรรม\n5 = มารดาถึงแก่กรรม',
  PRIMARY KEY (`par_status_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pst_admission`.`parents`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`parents` (
  `parent_id` INT(10) NOT NULL AUTO_INCREMENT,
  `parent_f_name` VARCHAR(45) NULL,
  `parent_f_income` VARCHAR(45) NULL,
  `parent_f_tel` VARCHAR(45) NULL,
  `parent_m_name` VARCHAR(45) NULL,
  `parent_m_income` VARCHAR(45) NULL,
  `parent_m_tel` VARCHAR(45) NULL,
  `parent_f_occupation` INT NOT NULL,
  `parent_m_occupation` INT NOT NULL,
  `parents_status` INT(10) NOT NULL,
  PRIMARY KEY (`parent_id`),
  INDEX `fk_parents_occupations1_idx` (`parent_f_occupation` ASC),
  INDEX `fk_parents_occupations2_idx` (`parent_m_occupation` ASC),
  INDEX `fk_parents_parents_status1_idx` (`parents_status` ASC),
  CONSTRAINT `fk_parents_occupations1`
    FOREIGN KEY (`parent_f_occupation`)
    REFERENCES `pst_admission`.`occupations` (`occupation_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_parents_occupations2`
    FOREIGN KEY (`parent_m_occupation`)
    REFERENCES `pst_admission`.`occupations` (`occupation_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_parents_parents_status1`
    FOREIGN KEY (`parents_status`)
    REFERENCES `pst_admission`.`parents_status` (`par_status_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
COMMENT = '			';


-- -----------------------------------------------------
-- Table `pst_admission`.`siblings`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`siblings` (
  `sibling_id` INT(10) NOT NULL AUTO_INCREMENT,
  `sibling_total` VARCHAR(45) NULL COMMENT 'จำนวนพี่น้องทั้งหมด............คน',
  `sibling_o_bro` VARCHAR(45) NULL COMMENT ' พี่ชาย..........คน  ',
  `sibling_l_bro` VARCHAR(45) NULL COMMENT 'น้องชาย........คน ',
  `sibling_o_sis` VARCHAR(45) NULL COMMENT ' พี่สาว .........คน  ',
  `sibling_l_sis` VARCHAR(45) NULL COMMENT 'น้องสาว..........คน ',
  `newstut_status` VARCHAR(45) NULL COMMENT 'นักเรียนเป็นบุตรคนที่.........',
  PRIMARY KEY (`sibling_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pst_admission`.`wats`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`wats` (
  `wat_id` INT(10) NOT NULL AUTO_INCREMENT,
  `wat_name` VARCHAR(45) NULL,
  `wat_tambol` VARCHAR(45) NULL,
  `wat_district` VARCHAR(45) NULL,
  `wat_provience` VARCHAR(45) NULL,
  `wat_postal` VARCHAR(45) NULL,
  `wat_abbot` VARCHAR(45) NULL,
  `wat_tel` VARCHAR(45) NULL,
  PRIMARY KEY (`wat_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pst_admission`.`guardians`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`guardians` (
  `guardian_id` INT(10) NOT NULL AUTO_INCREMENT,
  `guardian_name` VARCHAR(45) NULL,
  `guardian_income` VARCHAR(45) NULL,
  `guardian_tel` VARCHAR(45) NULL,
  `guardian_occupation` INT NOT NULL,
  `guardian_national_id` VARCHAR(45) NULL,
  `guardian_relation` VARCHAR(45) NULL COMMENT 'father\nmother\nor other\n',
  PRIMARY KEY (`guardian_id`),
  INDEX `fk_guardians_occupations1_idx` (`guardian_occupation` ASC),
  CONSTRAINT `fk_guardians_occupations1`
    FOREIGN KEY (`guardian_occupation`)
    REFERENCES `pst_admission`.`occupations` (`occupation_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pst_admission`.`naktham_level`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`naktham_level` (
  `naktham_l_id` INT(10) NOT NULL AUTO_INCREMENT,
  `naktham_l_name` VARCHAR(45) NULL,
  PRIMARY KEY (`naktham_l_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pst_admission`.`naktham`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`naktham` (
  `naktham_id` INT(10) NOT NULL AUTO_INCREMENT,
  `naktham_school` VARCHAR(45) NULL,
  `naktham_tambol` VARCHAR(45) NULL,
  `naktham_district` VARCHAR(45) NULL,
  `naktham_provience` VARCHAR(45) NULL,
  `naktham_year` VARCHAR(45) NULL,
  `naktham_ref_id` VARCHAR(45) NULL,
  `naktham_level` INT NOT NULL,
  PRIMARY KEY (`naktham_id`),
  INDEX `fk_naktham_naktham_level1_idx` (`naktham_level` ASC),
  CONSTRAINT `fk_naktham_naktham_level1`
    FOREIGN KEY (`naktham_level`)
    REFERENCES `pst_admission`.`naktham_level` (`naktham_l_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pst_admission`.`pal_level`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`pal_level` (
  `pali_l_id` INT(10) NOT NULL AUTO_INCREMENT,
  `pali_l_name` VARCHAR(45) NULL,
  PRIMARY KEY (`pali_l_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pst_admission`.`pali`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`pali` (
  `pali_id` INT(10) NOT NULL AUTO_INCREMENT,
  `pali_school` VARCHAR(45) NULL,
  `pali_tambol` VARCHAR(45) NULL,
  `pali_district` VARCHAR(45) NULL,
  `pali_provience` VARCHAR(45) NULL,
  `pali_year` VARCHAR(45) NULL,
  `pali_ref_id` VARCHAR(45) NULL,
  `pali_level` INT NOT NULL,
  PRIMARY KEY (`pali_id`),
  INDEX `fk_naktham_copy1_naktham_level_copy11_idx` (`pali_level` ASC),
  CONSTRAINT `fk_naktham_copy1_naktham_level_copy11`
    FOREIGN KEY (`pali_level`)
    REFERENCES `pst_admission`.`pal_level` (`pali_l_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pst_admission`.`school`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`school` (
  `school_id` INT(10) NOT NULL AUTO_INCREMENT,
  `school_name` VARCHAR(45) NULL,
  `school_tambol` VARCHAR(45) NULL,
  `school_district` VARCHAR(45) NULL,
  `school_provience` VARCHAR(45) NULL,
  PRIMARY KEY (`school_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pst_admission`.`education`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`education` (
  `education_id` INT(10) NOT NULL AUTO_INCREMENT,
  `education_grade` VARCHAR(45) NULL,
  `education_school_id` INT NOT NULL,
  PRIMARY KEY (`education_id`),
  INDEX `fk_education_school1_idx` (`education_school_id` ASC),
  CONSTRAINT `fk_education_school1`
    FOREIGN KEY (`education_school_id`)
    REFERENCES `pst_admission`.`school` (`school_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pst_admission`.`address`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`address` (
  `address_id` INT(10) NOT NULL AUTO_INCREMENT,
  `address_no` VARCHAR(45) NULL,
  `address_moo` VARCHAR(45) NULL,
  `address_house` VARCHAR(45) NULL,
  `address_tambol` VARCHAR(45) NULL,
  `address_district` VARCHAR(45) NULL,
  `address_provience` VARCHAR(45) NULL,
  `address_zip` VARCHAR(45) NULL,
  `address_tel` VARCHAR(45) NULL,
  PRIMARY KEY (`address_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pst_admission`.`eviedence`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`eviedence` (
  `evi_id` INT(5) NOT NULL,
  `evi_1` INT(1) NULL DEFAULT 0 COMMENT 'วุฒิการศึกษา (ปพ.1)',
  `evi_2` INT(1) NULL DEFAULT 0 COMMENT 'ใบประกาศนียบัตรจบการศึกษา (ปพ.2)',
  `evi_3` INT(1) NULL DEFAULT 0 COMMENT 'ใบรับรองผลการศึกษา  (ปพ.7)',
  `evi_4` INT(1) NULL DEFAULT 0 COMMENT 'สำเนาทะเบียนบ้านบิดาผู้ให้กำเนิด',
  `evi_5` INT(1) NULL DEFAULT 0 COMMENT 'สำเนาหนังสือสุทธิแสดงสังกัดวัด',
  `evi_6` INT(1) NULL DEFAULT 0 COMMENT 'หนังสือรับรองจากวัดต้นสังกัด',
  `evi_7` INT(1) NULL DEFAULT 0 COMMENT 'สำเนาทะเบียนบ้านนักเรียน ',
  `evi_8` VARCHAR(20) NULL COMMENT 'สำเนาใบประกาศนียบัตร นักธรรมชั้น….',
  `evi_9` VARCHAR(20) NULL COMMENT 'สำเนาใบประกาศนียบัตร บาลีประโยค….',
  `evi_10` INT(1) NULL DEFAULT 0 COMMENT 'สำเนาทะเบียนบ้านมารดาผู้ให้กำเนิด  ',
  `evi_11` INT(1) NULL DEFAULT 0 COMMENT 'สำเนาใบเปลี่ยนชื่อ-นามสกุล',
  `evi_12` TEXT NULL COMMENT 'หลักฐานอื่น ๆ (ระบุ) ................',
  PRIMARY KEY (`evi_id`))
ENGINE = InnoDB
COMMENT = '	';


-- -----------------------------------------------------
-- Table `pst_admission`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`users` (
  `user_id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `firstname` VARCHAR(100) NOT NULL,
  `lastname` VARCHAR(100) NOT NULL,
  `username` VARCHAR(100) NOT NULL,
  `password` VARCHAR(255) NOT NULL,
  `email` VARCHAR(60) NOT NULL,
  `avatar` VARCHAR(100) NOT NULL,
  `status` ENUM('0', '100', '500') NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE INDEX `username` (`username` ASC),
  UNIQUE INDEX `email` (`email` ASC))
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `pst_admission`.`subjects`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`subjects` (
  `subject_id` INT(10) NOT NULL AUTO_INCREMENT,
  `subject_name` VARCHAR(45) NULL,
  PRIMARY KEY (`subject_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pst_admission`.`class`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`class` (
  `class_id` INT(1) NOT NULL AUTO_INCREMENT,
  `class_name` VARCHAR(45) NULL,
  PRIMARY KEY (`class_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pst_admission`.`notice`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`notice` (
  `notice_id` INT NOT NULL AUTO_INCREMENT,
  `notice_name` VARCHAR(45) NULL,
  PRIMARY KEY (`notice_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pst_admission`.`newstudent`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`newstudent` (
  `newstu_id` INT(13) NOT NULL AUTO_INCREMENT,
  `newstu_titlename` VARCHAR(45) NULL,
  `newstu_name` VARCHAR(45) NULL,
  `newstu_lastname` VARCHAR(45) NULL,
  `newstu_chaya` VARCHAR(45) NULL,
  `newstu_petname` VARCHAR(45) NULL,
  `newstu_dob` DATE NULL,
  `newstu_bgroup` VARCHAR(15) NULL,
  `newstu_weight` VARCHAR(10) NULL,
  `newstu_height` VARCHAR(3) NULL,
  `newstu_nationalid` CHAR(13) NULL,
  `newstu_houseno` CHAR(12) NULL,
  `newstu_photo` VARCHAR(45) NULL,
  `newstu_get_notice_from` INT NULL,
  `newstu_parents_id` INT NOT NULL,
  `newstu_sibling_id` INT NOT NULL,
  `newstu_wat_id` INT NOT NULL,
  `newstu_guardian_id` INT NOT NULL,
  `newstu_naktham_id` INT NOT NULL,
  `newstu_pali_id` INT NOT NULL,
  `newstu_education_id` INT NOT NULL,
  `newstu_address_id` INT NOT NULL,
  `newstu_evi_id` INT(10) NOT NULL,
  `newstu_user_id` INT(11) NOT NULL,
  `newstu_best_sub` INT NOT NULL,
  `newstu_worst_sub` INT NOT NULL,
  `created_at` TIMESTAMP NULL,
  `newstu_admit_class` INT(1) NOT NULL,
  PRIMARY KEY (`newstu_id`),
  INDEX `fk_newstudent_parents_idx` (`newstu_parents_id` ASC),
  INDEX `fk_newstudent_siblings1_idx` (`newstu_sibling_id` ASC),
  INDEX `fk_newstudent_wats1_idx` (`newstu_wat_id` ASC),
  INDEX `fk_newstudent_guardians1_idx` (`newstu_guardian_id` ASC),
  INDEX `fk_newstudent_naktham1_idx` (`newstu_naktham_id` ASC),
  INDEX `fk_newstudent_naktham_copy11_idx` (`newstu_pali_id` ASC),
  INDEX `fk_newstudent_education1_idx` (`newstu_education_id` ASC),
  INDEX `fk_newstudent_address1_idx` (`newstu_address_id` ASC),
  INDEX `fk_newstudent_eviedence1_idx` (`newstu_evi_id` ASC),
  INDEX `fk_newstudent_users1_idx` (`newstu_user_id` ASC),
  INDEX `fk_newstudent_subjects1_idx` (`newstu_best_sub` ASC),
  INDEX `fk_newstudent_subjects2_idx` (`newstu_worst_sub` ASC),
  INDEX `fk_newstudent_class1_idx` (`newstu_admit_class` ASC),
  INDEX `fk_newstudent_notice1_idx` (`newstu_get_notice_from` ASC),
  CONSTRAINT `fk_newstudent_parents`
    FOREIGN KEY (`newstu_parents_id`)
    REFERENCES `pst_admission`.`parents` (`parent_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_newstudent_siblings1`
    FOREIGN KEY (`newstu_sibling_id`)
    REFERENCES `pst_admission`.`siblings` (`sibling_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_newstudent_wats1`
    FOREIGN KEY (`newstu_wat_id`)
    REFERENCES `pst_admission`.`wats` (`wat_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_newstudent_guardians1`
    FOREIGN KEY (`newstu_guardian_id`)
    REFERENCES `pst_admission`.`guardians` (`guardian_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_newstudent_naktham1`
    FOREIGN KEY (`newstu_naktham_id`)
    REFERENCES `pst_admission`.`naktham` (`naktham_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_newstudent_naktham_copy11`
    FOREIGN KEY (`newstu_pali_id`)
    REFERENCES `pst_admission`.`pali` (`pali_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_newstudent_education1`
    FOREIGN KEY (`newstu_education_id`)
    REFERENCES `pst_admission`.`education` (`education_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_newstudent_address1`
    FOREIGN KEY (`newstu_address_id`)
    REFERENCES `pst_admission`.`address` (`address_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_newstudent_eviedence1`
    FOREIGN KEY (`newstu_evi_id`)
    REFERENCES `pst_admission`.`eviedence` (`evi_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_newstudent_users1`
    FOREIGN KEY (`newstu_user_id`)
    REFERENCES `pst_admission`.`users` (`user_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_newstudent_subjects1`
    FOREIGN KEY (`newstu_best_sub`)
    REFERENCES `pst_admission`.`subjects` (`subject_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_newstudent_subjects2`
    FOREIGN KEY (`newstu_worst_sub`)
    REFERENCES `pst_admission`.`subjects` (`subject_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_newstudent_class1`
    FOREIGN KEY (`newstu_admit_class`)
    REFERENCES `pst_admission`.`class` (`class_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_newstudent_notice1`
    FOREIGN KEY (`newstu_get_notice_from`)
    REFERENCES `pst_admission`.`notice` (`notice_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pst_admission`.`evid_detail`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pst_admission`.`evid_detail` (
  `evid_id` INT NOT NULL,
  `evid_detail` VARCHAR(45) NULL)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;