CREATE TABLE `coiffure`.`users` (`id` INT(255) NOT NULL AUTO_INCREMENT , `nom` VARCHAR(255) NOT NULL , `prenom` VARCHAR(255) NOT NULL , `mail` VARCHAR(255) NOT NULL , `password` VARCHAR(255) NOT NULL , `cpassword` VARCHAR(255) NOT NULL , `imgPprofil` VARCHAR(255) NOT NULL , PRIMARY KEY (`id`), UNIQUE `mail` (`mail`)) ENGINE = InnoDB;