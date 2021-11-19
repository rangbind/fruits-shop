
--create database
create database fruit_shop

--create fruit_master table
CREATE TABLE `fruit_master` (
  `id` int NOT NULL AUTO_INCREMENT,
  `fruit_name` varchar(20) NOT NULL,
  `price` int NOT NULL,
  `quantity` int NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci



CREATE TABLE `registration_page` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `phone_no` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `address` varchar(60) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `confirmed_password` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci |

  
  user  | CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `names` varchar(20) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `role` int DEFAULT NULL,
  `last_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci |


<<<<<<< HEAD
ALTER TABLE `user` CHANGE `role` `role` TINYINT(11) NULL DEFAULT '1';
=======

  user  | CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `phone_no` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `Address` varchar(80) DEFAULT NULL,
  `role` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci 


>>>>>>> 0fe43e5727470b5f2f6ad76447f71b6cfb7b2fe6

  vijay ka table
  user  | CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `names` varchar(20) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `address` varchar(80) DEFAULT NULL,
  `role` int DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `last_updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci |


ALTER TABLE `fruit_master` ADD `image` VARCHAR(250) NOT NULL AFTER `quantity`;








