-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `galleries`;
CREATE TABLE `galleries` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `travel_packages_id` int(11) NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `galleries` (`id`, `travel_packages_id`, `image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(9,	10,	'assets/gallery/XOtZyVH4vASTj1WCbt44KWshI1vF25GuDO5pxv8E.png',	'2021-03-23 22:13:16',	'2021-03-23 22:12:17',	'2021-03-23 22:13:16'),
(10,	10,	'assets/gallery/tKoNztnvglsVFJdfabsHEmHuqTe7KGYFtdhclEL5.png',	'2021-03-23 22:15:50',	'2021-03-23 22:14:16',	'2021-03-23 22:15:50'),
(11,	11,	'assets/gallery/QmVRUl2bGVLaOp8ppSET7tscCzkyTV7YDtucJrCo.png',	'2021-03-23 23:00:35',	'2021-03-23 22:59:54',	'2021-03-23 23:00:35'),
(12,	12,	'assets/gallery/dZH02kNUae0GJIVDV4CTSqDOlp1UNehJvifSj10d.png',	'2021-03-24 02:05:54',	'2021-03-23 23:00:00',	'2021-03-24 02:05:54'),
(13,	11,	'assets/gallery/hfjt8tX3h1r6f2SGSz5w6lkTc5DafL1UbKjWD1RV.png',	'2021-03-24 02:06:43',	'2021-03-23 23:00:45',	'2021-03-24 02:06:43'),
(14,	11,	'assets/gallery/nxM7mOA7aPLMJ6At4EWTWmMY7jVSycBn0g6wzbHt.png',	'2021-03-26 04:01:04',	'2021-03-24 02:06:59',	'2021-03-26 04:01:04'),
(15,	11,	'assets/gallery/NDgkIprQ2R3GyivLIHduHkpqfkipCe6cZ29IQdxW.png',	'2021-03-26 04:01:05',	'2021-03-24 02:07:08',	'2021-03-26 04:01:05'),
(16,	14,	'assets/gallery/BpkRRPsNzGuLzQhydaI5r4IjpOhucoDl8MRR4lWs.jpg',	NULL,	'2021-03-26 04:01:53',	'2021-03-26 04:04:56'),
(17,	15,	'assets/gallery/mOJJMaNpa64No9YJokAaJryW7j2T749q4nmS6cMK.jpg',	NULL,	'2021-03-26 04:07:57',	'2021-03-26 04:07:57'),
(18,	16,	'assets/gallery/mJZLikR8FVFmE4hQblCzIUHx9K6EarwAcOeqxe0Y.jpg',	NULL,	'2021-03-26 04:09:42',	'2021-03-26 04:09:42'),
(19,	17,	'assets/gallery/6v4IIz3B4Vi9eZCQP5KNKZhyw8Wxnec0eYqyKxQg.jpg',	'2021-03-26 04:30:11',	'2021-03-26 04:29:47',	'2021-03-26 04:30:11'),
(20,	17,	'assets/gallery/24nS3eB4cdMV8OZjlC3fFcYfqvXCjUxvsAzamlAH.jpg',	NULL,	'2021-03-26 04:31:38',	'2021-03-26 04:31:38');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4,	'2014_10_12_000000_create_users_table',	1),
(5,	'2014_10_12_100000_create_password_resets_table',	1),
(6,	'2019_08_19_000000_create_failed_jobs_table',	1),
(7,	'2021_03_18_130503_create_travel_packages_table',	1),
(8,	'2021_03_18_131350_create_galleries_table',	2),
(9,	'2021_03_18_131601_create_transaction_table',	3),
(10,	'2021_03_18_131828_create_transaction-details_table',	4),
(11,	'2021_03_19_130330_add_roles_field',	5);

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `transaction`;
CREATE TABLE `transaction` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `travel_packages_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  `addtional_visa` int(11) NOT NULL,
  `transaction_total` int(11) NOT NULL,
  `transaction_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `transaction` (`id`, `travel_packages_id`, `users_id`, `addtional_visa`, `transaction_total`, `transaction_status`, `deleted_at`, `created_at`, `updated_at`) VALUES
(24,	14,	2,	0,	15000000,	'IN_CART',	NULL,	'2021-04-02 00:29:54',	'2021-04-02 00:33:30');

DROP TABLE IF EXISTS `transaction_details`;
CREATE TABLE `transaction_details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `transaction_id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_visa` tinyint(1) NOT NULL,
  `doe_passport` date NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `transaction_details` (`id`, `transaction_id`, `username`, `nationality`, `is_visa`, `doe_passport`, `deleted_at`, `created_at`, `updated_at`) VALUES
(21,	24,	'Rifqy Adli Damhuri',	'ID',	0,	'2026-04-02',	NULL,	'2021-04-02 00:29:54',	'2021-04-02 00:29:54'),
(23,	24,	'Minami',	'JP',	1,	'2021-04-22',	'2021-04-02 00:33:30',	'2021-04-02 00:33:26',	'2021-04-02 00:33:30');

DROP TABLE IF EXISTS `travel_packages`;
CREATE TABLE `travel_packages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `featured_event` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foods` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `departure_date` date NOT NULL,
  `duration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `travel_packages` (`id`, `title`, `slug`, `location`, `about`, `featured_event`, `language`, `foods`, `departure_date`, `duration`, `type`, `price`, `deleted_at`, `created_at`, `updated_at`) VALUES
(14,	'Pulau Komodo',	'pulau-komodo',	'Indonesia',	'Pulau Komodo, NTT',	'Jalan Jalan',	'Indonesia',	'Hamburger',	'2021-03-18',	'3 Days',	'Open Trip',	15000000,	NULL,	'2021-03-26 04:01:40',	'2021-03-26 04:01:40'),
(15,	'Raja Ampat',	'raja-ampat',	'Indonesia',	'Raja Ampat, Papua Barat',	'Jalan Jalan',	'Indonesia',	'Hamburger',	'2021-03-18',	'3 Days',	'Open Trip',	18000000,	NULL,	'2021-03-26 04:07:03',	'2021-03-26 04:07:03'),
(16,	'Kawah Putih',	'kawah-putih',	'Indonesia',	'Kawah Putih, Jawa Barat',	'Jalan Jalan',	'Indonesia',	'Hamburger',	'2021-03-27',	'3 Days',	'Open Trip',	500000,	NULL,	'2021-03-26 04:09:31',	'2021-03-26 04:09:31'),
(17,	'Monas',	'monas',	'Indonesia',	'Monas, Jakarta',	'Jalan Jalan',	'Indonesia',	'Hamburger',	'2021-03-25',	'3 Days',	'Open Trip',	500000,	NULL,	'2021-03-26 04:26:42',	'2021-03-26 04:35:12');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES
(2,	'Rifqy Adli Damhuri',	'rifqy.adli@gmail.com',	NULL,	'$2y$10$enOJmm6Hg3YB3jqVs6F8OOQ3USazq1VGH/KQ.zTXoJ3XG0uoLXed2',	NULL,	'2021-03-19 06:40:02',	'2021-03-19 06:40:02',	'ADMIN'),
(3,	'Hoshino Minami',	'Minami@gmail.com',	NULL,	'$2y$10$JLeO4tqYJEwgsDHDqY6VuOAELne3vnbobsbBhI0wQxkuQ9SbH/c4C',	NULL,	'2021-03-26 23:12:28',	'2021-03-26 23:12:28',	'USER');

-- 2021-04-18 13:27:27
