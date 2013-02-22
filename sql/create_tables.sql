CREATE  TABLE IF NOT EXISTS `cumulus`.`Laws` (
  `law_id` INT NOT NULL ,
  `law_name` VARCHAR(45) NULL ,
  `law_code` VARCHAR(45) NULL ,
  `Lawscol` VARCHAR(45) NULL ,
  PRIMARY KEY (`law_id`) )
ENGINE = InnoDB;

CREATE  TABLE IF NOT EXISTS `cumulus`.`books` (
  `book_id` INT NOT NULL ,
  `law_id` INT NOT NULL ,
  `book_title` VARCHAR(45) NULL ,
  PRIMARY KEY (`book_id`) )
ENGINE = InnoDB;

CREATE  TABLE IF NOT EXISTS `cumulus`.`titles` (
  `title_id` INT NOT NULL ,
  `title_num` VARCHAR(45) NULL ,
  `title_title` VARCHAR(45) NULL ,
  `book_id` INT NOT NULL ,
  PRIMARY KEY (`title_id`) )
ENGINE = InnoDB;

CREATE  TABLE IF NOT EXISTS `cumulus`.`chapters` (
  `ch_id` INT NOT NULL ,
  `ch_num` VARCHAR(45) NULL ,
  `ch_title` VARCHAR(45) NULL ,
  `title_id` INT NULL ,
  PRIMARY KEY (`ch_id`) )
ENGINE = InnoDB;

CREATE  TABLE IF NOT EXISTS `cumulus`.`divisions` (
  `div_id` INT NOT NULL ,
  `div_num` VARCHAR(45) NULL ,
  `div_title` VARCHAR(45) NULL ,
  `ch_id` INT NULL ,
  PRIMARY KEY (`div_id`) )
ENGINE = InnoDB;

CREATE  TABLE IF NOT EXISTS `cumulus`.`sections` (
  `sec_id` INT(11) NOT NULL ,
  `sec_num` INT(4) NOT NULL ,
  `sec_title` VARCHAR(100) NOT NULL ,
  `sec_txt` VARCHAR(45) NOT NULL ,
  `enact_yr` INT(4) NULL ,
  `enact_bill` VARCHAR(100) NULL ,
  `enact_sec` INT(5) NULL ,
  `law_id` VARCHAR(45) NULL ,
  `book_id` VARCHAR(45) NULL ,
  `title_id` VARCHAR(45) NULL ,
  `div_id` VARCHAR(45) NULL ,
  `ch_id` VARCHAR(45) NULL ,
  PRIMARY KEY (`sec_id`) ,
  INDEX `index_sec` (`sec_num` ASC, `sec_title` ASC, `sec_txt` ASC, `enact_yr` ASC, `enact_bill` ASC, `enact_sec` ASC) ,
  INDEX `index_law` (`law_id` ASC) ,
  INDEX `index_books` (`book_id` ASC) ,
  INDEX `index_titles` (`title_id` ASC) ,
  INDEX `index_div` (`div_id` ASC) ,
  INDEX `index_ch` (`ch_id` ASC) ,
  CONSTRAINT `fk_sections_Laws`
    FOREIGN KEY (`law_id` )
    REFERENCES `cumulus`.`Laws` (`law_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_sections_books`
    FOREIGN KEY (`book_id` )
    REFERENCES `cumulus`.`books` (`book_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_sections_titles`
    FOREIGN KEY (`title_id` )
    REFERENCES `cumulus`.`titles` (`title_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_sections_divisions`
    FOREIGN KEY (`div_id` )
    REFERENCES `cumulus`.`divisions` (`div_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_sections_chapters`
    FOREIGN KEY (`ch_id` )
    REFERENCES `cumulus`.`chapters` (`ch_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

