drop database if exists surucu_kurs_proje;

create database surucu_kurs_proje character SET utf8 COLLATE utf8_general_ci;

use surucu_kurs_proje;

-- Tablolar oluşturuluyor

CREATE TABLE `surucu_kurs_proje`.`admins` (
	`id` INT NOT NULL AUTO_INCREMENT ,
	`username` VARCHAR(50) NOT NULL ,
	`email` VARCHAR(75) NOT NULL ,
	`password` VARCHAR(50) NOT NULL ,
	`createdAt` TIMESTAMP NOT NULL ,
	PRIMARY KEY (`id`),
	UNIQUE (`username`),
	UNIQUE (`email`)
) ENGINE = InnoDB;

CREATE TABLE `surucu_kurs_proje`.`users` (
	`id` INT NOT NULL AUTO_INCREMENT ,
	`firstname` VARCHAR(50) NOT NULL ,
	`lastname` VARCHAR(75) NOT NULL ,
	`telephone_number` VARCHAR(17) NOT NULL,
	`email` VARCHAR(50) NOT NULL,
	`password` VARCHAR(50) NOT NULL ,
	`createdAt` TIMESTAMP NOT NULL ,
	PRIMARY KEY (`id`)
) ENGINE = InnoDB;

CREATE TABLE `surucu_kurs_proje`.`appointments` (
	`id` INT NOT NULL AUTO_INCREMENT ,
	`user_id` INT NOT NULL ,
	`header` VARCHAR(75) NOT NULL ,
	`body` VARCHAR(50) NOT NULL ,
	`createdAt` TIMESTAMP NOT NULL ,
	PRIMARY KEY (`id`)
) ENGINE = InnoDB;

-- Kullanıcı adı = wormer
-- email = deneme@gmail.com
-- Şifre wormer ya da d29ybWVy

INSERT INTO `surucu_kurs_proje`.`admins` (`id`, `username`, `email`, `password`, `createdAt`) VALUES (
	NULL,
	'berat',
	'example@gmail.com',
	'YmVyYXQ=',
	current_timestamp()
);


INSERT INTO `users` (`id`, `firstname`, `lastname`, `telephone_number`, `email`, `password`, `createdAt`) VALUES (NULL, 'Berat', 'İpekçi', '+90 454 456 64 45', 'example@gmail.com', 'd29ybWVy', current_timestamp());
INSERT INTO `users` (`id`, `firstname`, `lastname`, `telephone_number`, `email`, `password`, `createdAt`) VALUES (NULL, 'Buse', 'Kutup', '+90 454 456 64 45', 'example@gmail.com', 'd29ybWVy', current_timestamp());
INSERT INTO `users` (`id`, `firstname`, `lastname`, `telephone_number`, `email`, `password`, `createdAt`) VALUES (NULL, 'Murat', 'Aazgan', '+90 454 456 64 45', 'example@gmail.com', 'd29ybWVy', current_timestamp());
INSERT INTO `users` (`id`, `firstname`, `lastname`, `telephone_number`, `email`, `password`, `createdAt`) VALUES (NULL, 'Elliot', 'Alderson', '+90 454 456 64 45', 'example@gmail.com', 'd29ybWVy', current_timestamp());


INSERT INTO `surucu_kurs_proje`.`appointments` (`id`, `user_id`, `header`, `body`, `createdAt`) VALUES (
	NULL,
	'1',
	'Deneme',
	'Bu bir denemedir',
	current_timestamp()
);
INSERT INTO `surucu_kurs_proje`.`appointments` (`id`, `user_id`, `header`, `body`, `createdAt`) VALUES (
	NULL,
	'2',
	'Deneme',
	'Bu bir denemedir',
	current_timestamp()
);
INSERT INTO `surucu_kurs_proje`.`appointments` (`id`, `user_id`, `header`, `body`, `createdAt`) VALUES (
	NULL,
	'3',
	'Deneme',
	'Bu bir denemedir',
	current_timestamp()
);
INSERT INTO `surucu_kurs_proje`.`appointments` (`id`, `user_id`, `header`, `body`, `createdAt`) VALUES (
	NULL,
	'4',
	'Deneme',
	'Bu bir denemedir',
	current_timestamp()
);