
CREATE DATABASE bootcamp2024;
USE bootcamp2024;

-- Creation des tables de la base de données

CREATE TABLE `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `login` VARCHAR(60) NOT NULL UNIQUE,
    `firstname` VARCHAR(255) NOT NULL,
    `lastname` VARCHAR(255) NOT NULL,
    `avatar` VARCHAR(255),
    `group_id` INT,
    `role_id` INT NOT NULL,
    `password` VARCHAR(255) NOT NULL
);

CREATE TABLE `groups` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(255) NOT NULL,
    `admin_group_id` INT NOT NULL,
    `description` TEXT
);

CREATE TABLE `roles` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(60) NOT NULL UNIQUE
);

CREATE TABLE `permissions` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `name` VARCHAR(60) NOT NULL UNIQUE,
    `description` TEXT
);

CREATE TABLE `permissions_roles` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `role_id` INT NOT NULL,
    `permission_id` INT NOT NULL
);

-- Creation des tables de jointures | contraintes

ALTER TABLE `users` 
    ADD CONSTRAINT `fk_group_id` FOREIGN KEY (`group_id`) REFERENCES `groups`(`id`);

ALTER TABLE `users`
    ADD CONSTRAINT `fk_role_id` FOREIGN KEY (`role_id`) REFERENCES `roles`(`id`);

ALTER TABLE `groups`
    ADD CONSTRAINT `fk_admin_group_id` FOREIGN KEY (`admin_group_id`) REFERENCES `users`(`id`);

ALTER TABLE `permissions_roles`
    ADD CONSTRAINT `fk_role_id` FOREIGN KEY (`role_id`) REFERENCES `roles`(`id`);

ALTER TABLE `permissions_roles`
    ADD CONSTRAINT `fk_permission_id` FOREIGN KEY (`permission_id`) REFERENCES permissions(`id`);

-- Insertion des données dans les tables

INSERT INTO `permissions` (`name`, `description`)
    VALUES  ('create_moderator', 'Créer un modérateur'), -- id 1 
            ('read_moderator', "Lire les informations d'un modérateur"), -- id 2
            ('update_moderator', 'Mettre à jour un modérateur'), -- id 3
            ('delete_moderator', 'Supprimer un modérateur'), -- id 4
            ('create_group', 'Créer un groupe'), -- id 5
            ('read_group', "Lister les informations d\'un groupe"), -- id 6
            ('update_group', 'Mettre à jour un groupe'), -- id 7
            ('delete_group', 'Supprimer un groupe'), -- id 8
            ('create_user', 'Créer un utilisateur'), -- id 9
            ('read_user', "Lire les informations d'un utilisateur"), -- id 10
            ('update_user', 'Mettre à jour un utilisateur'), -- id 11
            ('delete_user', 'Supprimer un utilisateur'); -- id 12

INSERT INTO `roles` (`name`) 
    VALUES ('admin'), -- id 1
           ('super_moderator'), -- id 2
           ('moderator'), -- id 3
           ('user'); -- id 4

INSERT INTO `permissions_roles` (`role_id`, `permission_id`)
    VALUES  
    -- Admin
            (1, 1), (1, 2), (1, 3),
            (1, 4), (1, 5), (1, 6),
            (1, 7), (1, 8), (1, 9),
            (1, 10), (1, 11), (1, 12);
    -- Super Moderator
            
    -- Moderator

    -- User

INSERT INTO `users` (`login`, `firstname`, `lastname`, `avatar`, `role_id`, `password`)  
    VALUES  ('admin', 'admin', 'admin', 'admin.jpg', 1, 'admin');

INSERT INTO `groups` (`name`, `admin_group_id`, `description`) 
    VALUES ('admin', 1, 'Groupe des administrateurs');

-- Update admin group_id
UPDATE `users` SET `group_id` = 1 WHERE login = 'admin';

INSERT INTO `groups` (`name`, `admin_group_id`, `description`) 
    VALUES ('moderator', 1, 'Groupe des modérateurs');
