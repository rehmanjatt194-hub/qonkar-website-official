-- =========================================================
-- DATABASE: qonkar_db
-- =========================================================
CREATE DATABASE IF NOT EXISTS qonkar_db;
USE qonkar_db;

-- =========================================================
-- CONTACT (MESSAGES) TABLE
-- =========================================================
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `full_name` VARCHAR(100) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `phone_number` VARCHAR(20) DEFAULT NULL,
  `subject` VARCHAR(200) DEFAULT NULL,
  `budget` VARCHAR(50) DEFAULT NULL,
  `message` TEXT NOT NULL,
  `status` ENUM('unread','read') NOT NULL DEFAULT 'unread',
  `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;



-- =========================================================
-- JOBS TABLE
-- =========================================================
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `job_id` INT(11) NOT NULL AUTO_INCREMENT,
  `job_title` VARCHAR(150) NOT NULL,
  `job_type` VARCHAR(100) NOT NULL,
  `job_description` TEXT NOT NULL,
  `job_status` ENUM('open','closed') DEFAULT 'open',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- =========================================================
-- JOB APPLICATIONS TABLE
-- =========================================================
DROP TABLE IF EXISTS `job_applications`;
CREATE TABLE `job_applications` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(150) NOT NULL,
  `email` VARCHAR(150) NOT NULL,
  `phone_number` VARCHAR(20) NOT NULL,
  `country` VARCHAR(100) DEFAULT NULL,
  `city` VARCHAR(100) DEFAULT NULL,
  `job_title` VARCHAR(150) NOT NULL,
  `resume` VARCHAR(255) NOT NULL,
  `portfolio_link` VARCHAR(255) DEFAULT NULL,
  `linkedin` VARCHAR(255) DEFAULT NULL,
  `message` TEXT DEFAULT NULL,
  `status` ENUM('shortlist','pending','reject') DEFAULT 'pending',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- =========================================================
-- USERS TABLE
-- =========================================================
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(100) NOT NULL UNIQUE,
  `email` VARCHAR(150) NOT NULL UNIQUE,
  `picture` VARCHAR(255) DEFAULT NULL,
  `password` VARCHAR(255) NOT NULL,
  `status` ENUM('active','inactive') DEFAULT 'active',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- =========================================================
-- BLOGS CATEGORY TABLE
-- =========================================================
DROP TABLE IF EXISTS `blogs_category`;
CREATE TABLE `blogs_category` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `blog_category_title` VARCHAR(150) NOT NULL,
  `status` ENUM('active','inactive') DEFAULT 'active',
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- =========================================================
-- BLOGS TABLE
-- =========================================================
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `blog_title` VARCHAR(200) NOT NULL,
  `blog_image` VARCHAR(255) DEFAULT NULL,
  `blog_description` TEXT NOT NULL,
  `status` ENUM('active','inactive') DEFAULT 'active',
  `is_comment_allowed` TINYINT(1) DEFAULT 1,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  `updated_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- =========================================================
-- BLOG ↔ BLOG CATEGORY BRIDGE TABLE
-- =========================================================
DROP TABLE IF EXISTS `blog_category_map`;
CREATE TABLE `blog_category_map` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `blog_id` INT(11) NOT NULL,
  `category_id` INT(11) NOT NULL,
  `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `fk_blog` (`blog_id`),
  KEY `fk_category` (`category_id`),
  CONSTRAINT `fk_blog` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `blogs_category` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;