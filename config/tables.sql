CREATE DATABASE IF NOT EXISTS matcha;

USE matcha;

CREATE TABLE IF NOT EXISTS `users` (
						    `id` INT NOT NULL AUTO_INCREMENT,
						    `login` VARCHAR(20) NOT NULL,
						    `email` VARCHAR(255) NOT NULL,
						    `password` VARCHAR(255) NOT NULL,
						    `name` VARCHAR(255),
						    `surnname` VARCHAR(255),
						    `rating` INT DEFAULT 0,
						    `gender` VARCHAR(6),
						    `preferences` VARCHAR(12) DEFAULT 'bisexual',
						    `bio` TEXT,
						    `tags` TEXT,
						    `confirmed` TINYINT(1) DEFAULT 0 NOT NULL,
						    `token` VARCHAR(32) DEFAULT '',
						    PRIMARY KEY (id)) ENGINE=InnoDB
						    CHARACTER SET utf8mb4;
						    