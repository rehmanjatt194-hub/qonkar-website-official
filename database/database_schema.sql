-- Table structure for `blog_category_map` --
DROP TABLE IF EXISTS `blog_category_map`;
CREATE TABLE `blog_category_map` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `fk_blog` (`blog_id`),
  KEY `fk_category` (`category_id`),
  CONSTRAINT `fk_blog` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  CONSTRAINT `fk_category` FOREIGN KEY (`category_id`) REFERENCES `blogs_category` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=140 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for `blogs` --
DROP TABLE IF EXISTS `blogs`;
CREATE TABLE `blogs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_title` varchar(200) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `blog_image` varchar(255) DEFAULT NULL,
  `blog_description` text NOT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `is_comment_allowed` tinyint(1) DEFAULT 1,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for `blogs_category` --
DROP TABLE IF EXISTS `blogs_category`;
CREATE TABLE `blogs_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blog_category_title` varchar(150) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for `case_studies` --
DROP TABLE IF EXISTS `case_studies`;
CREATE TABLE `case_studies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mockup_image` varchar(255) NOT NULL,
  `background_image` varchar(255) DEFAULT 'images/case-studies/background.png',
  `brand_name` varchar(150) NOT NULL,
  `short_description` text NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `link_of_case_study` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("1", "images/case-studies/centra.webp", "images/case-studies/background/the_centra (Done).webp", "The Centara", "A luxury hotel in Doha offering premium comfort and world-class hospitality.", "active", "https://www.centarahotelsresorts.com/centara/cwq", "2025-10-09 13:00:20", "2025-12-17 15:29:22");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("2", "images/case-studies/carsound.webp", "images/case-studies/background/carsound(Done).webp", "Carsound", "Specialists in high-quality car audio systems for an enhanced driving experience", "active", "https://carsound.dk/", "2025-10-09 13:00:20", "2025-12-09 16:03:54");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("3", "images/case-studies/power_culture.webp", "images/case-studies/background/powerculture(Done).webp", "PowerCulture", "Performance-focused sportswear designed for style, comfort, and active living.", "active", "https://www.powerculture.dk/", "2025-10-09 13:00:20", "2025-12-09 16:03:59");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("4", "images/case-studies/dermaspace.webp", "images/case-studies/background/dermaspace (Done).webp", "Derma Space", "Premium skincare and cosmetics that nourish and enhance natural beauty.", "active", "https://dermaspace.dk/", "2025-10-09 13:00:20", "2025-12-09 16:04:03");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("5", "images/case-studies/CAINTE.webp", "images/case-studies/background/cainte (Done).webp", "CAINTE", "Elegant, timeless jewelry crafted to elevate your everyday style.", "active", "https://cainte.com/", "2025-10-09 13:00:20", "2025-12-09 16:04:12");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("6", "images/case-studies/BarkDNA.webp", "images/case-studies/background/barkdna (Done).webp", "Bark DNA", "Natural beauty products that boost your look with confidence and power.", "active", "https://barkdna.com/", "2025-10-09 13:00:20", "2025-12-09 16:04:25");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("7", "images/case-studies/phenumb.webp", "images/case-studies/background/phenumb(Done).webp", "Phenumb", "Handcrafted Scandinavian footwear blending quality, style, and attitude.", "active", "https://phenumb.com/", "2025-10-04 13:27:23", "2025-12-09 16:04:34");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("8", "images/case-studies/gelzone.webp", "images/case-studies/background/gel_zone(Done).webp", "Gel Zone", "Action-packed gel blasters and fun gear for all ages.", "active", "https://gelzone.dk/", "2025-10-04 13:41:19", "2025-12-09 16:04:39");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("9", "images/case-studies/velohouse.webp", "images/case-studies/background/velohouse (Done).webp", "VeloHouse", "Premium bicycles built for top performance, comfort, and style.\r\n", "active", "https://velohouse.dk/ ", "2025-10-04 13:42:07", "2025-12-09 16:04:44");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("10", "images/case-studies/pasteelo.webp", "images/case-studies/background/pasteelo(Done).webp", "Pasteelo", "Urban streetwear and skate gear inspired by creative street culture.\r\n", "active", "https://pasteelo.com/", "2025-10-04 13:43:46", "2025-12-09 16:04:48");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("11", "images/case-studies/Eventyr_Cykler.webp", "images/case-studies/background/eventycykler(Done).webp", "Eventyr Cykler", "Stylish and versatile clothing and bags for everyday wear.", "active", "https://eventyrcykler.dk/", "2025-10-04 13:44:28", "2025-12-09 16:04:53");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("12", "images/case-studies/Number_nine.webp", "images/case-studies/background/number_nine(Done).webp", "Number Nine", "Stylish and versatile clothing and bags for everyday wear.\r\n", "active", "https://number-nineshop.com/", "2025-10-04 13:45:39", "2025-12-09 16:04:58");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("13", "images/case-studies/edie.webp", "images/case-studies/background/edie(Done).webp", "Edie ", "Cozy, stylish winter clothing and accessories to keep you warm.", "active", "https://edie.dk/", "2025-10-04 13:46:41", "2025-12-09 16:05:01");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("14", "images/case-studies/QUEST_Mockup.webp", "images/case-studies/background/after_quest.webp", "Redeisgn & Develop Quest  Website", " Transform the platform into a modern, responsive, and user-focused website that better represents the university’s identity and serves the needs of students, faculty, and visitors.", "active", "https://qonkar.com/case-studies/quest-official", "2025-10-09 13:00:24", "2025-12-18 17:00:13");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("15", "images/case-studies/ERP_Software.webp", "images/case-studies/background.webp", "ERP Solutions", "All-in-one ERP software that unifies operations, boosts efficiency, and simplifies business management.", "active", "", "2025-10-09 12:39:00", "2025-12-09 16:03:27");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("16", "images/case-studies/CRM_MOCKUP.webp", "images/case-studies/background.webp", "CRM Soutions", "A smart system that helps manage customer relationships, track sales, and improve communication to boost customer satisfaction and business growth.", "active", "", "2025-10-04 13:13:07", "2025-12-09 16:05:12");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("17", "images/case-studies/CMS.webp", "images/case-studies/background.webp", "CMS Solutions", "A powerful platform that enables easy content creation, management, and publishing without coding, ensuring full control over your website.", "active", "", "2025-10-04 13:13:07", "2025-12-09 16:05:16");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("18", "images/case-studies/SAAS.webp", "images/case-studies/background.webp", "Digital Product (Saas)", "A scalable solution that delivers software online, offering seamless access, automatic updates, and efficient performance without installation.", "active", "", "2025-10-04 13:13:07", "2025-12-09 16:05:20");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("19", "images/case-studies/homalix_mockup.png", "images/case-studies/background/homalix_bg.webp", "Homalix", "A unified, secure, and highly scalable Hospital Management System centralizing electronic medical records, patient flow triage, and diagnostics across healthcare networks.", "active", "/case-studies/homalix", "2026-06-18 15:26:07", "2026-06-29 17:29:56");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("20", "images/case-studies/schoolian_dashboard.png", "images/case-studies/schoolian_bg.webp", "Schoolian", "A premium, multi-portal EdTech platform built to centralize school administration, streamline teacher registers, automate dynamic grading workflows, and simplify parent billing.", "active", "/case-studies/schoolian", "2026-06-18 15:26:07", "2026-06-29 17:29:56");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("21", "images/case-studies/craveeo_order_pic.webp", "images/case-studies/careevo_bg.webp", "Careevo", "An intelligent, high-performance Restaurant Management OS linking table QR ordering, real-time kitchen queues, inventory control, and multi-outlet analytics.", "active", "/case-studies/careevo", "2026-06-22 11:38:03", "2026-06-29 17:29:56");
INSERT INTO `case_studies` (`id`, `mockup_image`, `background_image`, `brand_name`, `short_description`, `status`, `link_of_case_study`, `created_at`, `updated_at`) VALUES ("22", "images/case-studies/sellvixa_dashboard.png", "", "Sellvixa", "A next-generation Retail ERP and POS System featuring live checkouts, multi-branch control, and visual analytics.", "active", "/case-studies/sellvixa", "2026-06-29 17:29:56", "2026-06-29 17:29:56");

-- Table structure for `case_study_categories` --
DROP TABLE IF EXISTS `case_study_categories`;
CREATE TABLE `case_study_categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(100) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for `case_study_category_bridge` --
DROP TABLE IF EXISTS `case_study_category_bridge`;
CREATE TABLE `case_study_category_bridge` (
  `id` int(11) NOT NULL,
  `case_study_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "1", "1", "2025-10-04 13:13:07");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "2", "1", "2025-10-04 13:14:10");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "3", "1", "2025-10-04 13:14:58");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "4", "1", "2025-10-04 13:16:35");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "5", "1", "2025-10-04 13:17:36");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "6", "1", "2025-10-04 13:25:52");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "7", "1", "2025-10-04 13:27:23");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "8", "1", "2025-10-04 13:41:19");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "9", "1", "2025-10-04 13:42:07");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "10", "1", "2025-10-04 13:43:46");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "11", "1", "2025-10-04 13:44:28");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "12", "1", "2025-10-04 13:45:39");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "13", "1", "2025-10-04 13:46:41");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "14", "2", "2025-10-09 12:29:14");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "15", "2", "2025-10-09 12:39:00");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "16", "2", "2025-10-09 12:51:53");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "17", "2", "2025-10-09 12:56:36");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "18", "2", "2025-10-09 13:00:20");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "19", "2", "2026-06-18 15:26:07");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "20", "2", "2026-06-18 15:26:07");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "21", "2", "2026-06-22 11:38:03");
INSERT INTO `case_study_category_bridge` (`id`, `case_study_id`, `category_id`, `created_at`) VALUES ("0", "22", "2", "2026-06-29 17:29:56");

-- Table structure for `job_applications` --
DROP TABLE IF EXISTS `job_applications`;
CREATE TABLE `job_applications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `country` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `job_id` int(11) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `transaction_slip` varchar(255) DEFAULT NULL,
  `portfolio_link` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `status` enum('shortlist','pending','reject') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for `jobs` --
DROP TABLE IF EXISTS `jobs`;
CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(150) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `job_type` varchar(100) NOT NULL,
  `location` varchar(150) NOT NULL,
  `job_description` text NOT NULL,
  `job_status` enum('open','closed') DEFAULT 'open',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`job_id`),
  UNIQUE KEY `slug` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for `messages` --
DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone_number` varchar(20) DEFAULT NULL,
  `subject` varchar(200) DEFAULT NULL,
  `budget` varchar(50) DEFAULT NULL,
  `message` text NOT NULL,
  `status` enum('unread','read') NOT NULL DEFAULT 'unread',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Table structure for `users` --
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `status` enum('active','inactive') DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
