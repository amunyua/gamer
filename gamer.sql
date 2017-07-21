-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2017 at 01:31 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamer`
--

-- --------------------------------------------------------

--
-- Table structure for table `availablegames`
--

CREATE TABLE `availablegames` (
  `id` int(10) UNSIGNED NOT NULL,
  `game_id` int(10) UNSIGNED NOT NULL,
  `game_time` datetime NOT NULL,
  `available_time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `availablegames`
--

INSERT INTO `availablegames` (`id`, `game_id`, `game_time`, `available_time`, `created_at`, `updated_at`) VALUES
(1, 1, '2017-07-20 00:00:00', '2017-07-19 00:00:00', '2017-07-20 09:34:23', '2017-07-20 09:34:23');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE `games` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `Title`, `Description`) VALUES
(1, 'Chess', 'chess');

-- --------------------------------------------------------

--
-- Table structure for table `matches`
--

CREATE TABLE `matches` (
  `id` int(10) UNSIGNED NOT NULL,
  `game_id` int(10) UNSIGNED NOT NULL,
  `player_one` int(10) UNSIGNED NOT NULL,
  `player_two` int(10) UNSIGNED DEFAULT NULL,
  `winner` int(10) UNSIGNED DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `play_time` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `matches`
--

INSERT INTO `matches` (`id`, `game_id`, `player_one`, `player_two`, `winner`, `status`, `play_time`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL, 0, '2017-07-27', '2017-07-20 10:44:19', '2017-07-20 10:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(18, '2014_10_12_000000_create_users_table', 1),
(19, '2014_10_12_100000_create_password_resets_table', 1),
(20, '2015_10_31_162633_scaffoldinterfaces', 1),
(21, '2017_07_13_122110_create_permission_tables', 1),
(22, '2017_07_20_101327_games', 2),
(23, '2017_07_20_121557_availablegames', 3),
(24, '2017_07_20_010921_matches', 4),
(25, '2017_07_20_132722_add_role', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `relations`
--

CREATE TABLE `relations` (
  `id` int(10) UNSIGNED NOT NULL,
  `scaffoldinterface_id` int(10) UNSIGNED NOT NULL,
  `to` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `having` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scaffoldinterfaces`
--

CREATE TABLE `scaffoldinterfaces` (
  `id` int(10) UNSIGNED NOT NULL,
  `package` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tablename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scaffoldinterfaces`
--

INSERT INTO `scaffoldinterfaces` (`id`, `package`, `migration`, `model`, `controller`, `views`, `tablename`, `created_at`, `updated_at`) VALUES
(1, 'Laravel', 'C:\\xampp\\htdocs\\gamer\\database/migrations/2017_07_20_101327_games.php', 'C:\\xampp\\htdocs\\gamer\\app/Game.php', 'C:\\xampp\\htdocs\\gamer\\app/Http/Controllers/GameController.php', 'C:\\xampp\\htdocs\\gamer\\resources/views/game', 'games', '2017-07-20 07:13:27', '2017-07-20 07:13:27'),
(6, 'Laravel', 'C:\\xampp\\htdocs\\gamer\\database/migrations/2017_07_20_121557_availablegames.php', 'C:\\xampp\\htdocs\\gamer\\app/Availablegame.php', 'C:\\xampp\\htdocs\\gamer\\app/Http/Controllers/AvailablegameController.php', 'C:\\xampp\\htdocs\\gamer\\resources/views/availablegame', 'availablegames', '2017-07-20 09:15:57', '2017-07-20 09:15:57'),
(7, 'Laravel', 'C:\\xampp\\htdocs\\gamer\\database/migrations/2017_07_20_010921_matches.php', 'C:\\xampp\\htdocs\\gamer\\app/Match.php', 'C:\\xampp\\htdocs\\gamer\\app/Http/Controllers/MatchController.php', 'C:\\xampp\\htdocs\\gamer\\resources/views/match', 'matches', '2017-07-20 10:09:21', '2017-07-20 10:09:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Alex', 'a@x.com', '$2y$10$CSh3Go5rFiUb7xvwjIISeeEwTmgLEp4tsZ0Aw0/dWyqbq3FaBvHdC', 'h73OqHArrqlF0ftnSMf1O83LhcAt3EWQinb3Eam3bTLyLg1gdjVcBDNJ4lBB', '2017-07-20 07:11:21', '2017-07-20 07:11:21', 'ADMIN'),
(2, 'Jack Musibi', 'j@j.com', '$2y$10$clpqH01lPXiAuYLFlKvsXe4nEtI9wpxniEwLhh/vuiDQM0NRbfbh6', 'ooaxAltww0Hu6YthIgAUOZaHAkuliNV4jeRpynpSM8rbfieTJO041HPeUzvA', '2017-07-20 10:42:05', '2017-07-20 10:42:05', 'PLAYER'),
(3, 'Eliud kamau', 'e@k.com', '$2y$10$JD1cgPVa5ZsdSL6Ohy0Yd.PurmotYKLTy.KVusJr6sayCquRtaO5G', '9cOeRZrsCbZ89LB2ceJfWcxTkzRxbgcMEUhgv3s5SanEtMVnIvADLu7218fD', '2017-07-20 10:50:17', '2017-07-20 10:50:17', 'PLAYER');

-- --------------------------------------------------------

--
-- Table structure for table `user_has_permissions`
--

CREATE TABLE `user_has_permissions` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_has_roles`
--

CREATE TABLE `user_has_roles` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `availablegames`
--
ALTER TABLE `availablegames`
  ADD PRIMARY KEY (`id`),
  ADD KEY `availablegames_game_id_foreign` (`game_id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`),
  ADD KEY `matches_player_one_foreign` (`player_one`),
  ADD KEY `matches_player_two_foreign` (`player_two`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `relations`
--
ALTER TABLE `relations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `relations_scaffoldinterface_id_foreign` (`scaffoldinterface_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `scaffoldinterfaces`
--
ALTER TABLE `scaffoldinterfaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD PRIMARY KEY (`user_id`,`permission_id`),
  ADD KEY `user_has_permissions_permission_id_foreign` (`permission_id`);

--
-- Indexes for table `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD PRIMARY KEY (`role_id`,`user_id`),
  ADD KEY `user_has_roles_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `availablegames`
--
ALTER TABLE `availablegames`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `relations`
--
ALTER TABLE `relations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `scaffoldinterfaces`
--
ALTER TABLE `scaffoldinterfaces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `availablegames`
--
ALTER TABLE `availablegames`
  ADD CONSTRAINT `availablegames_game_id_foreign` FOREIGN KEY (`game_id`) REFERENCES `games` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `matches`
--
ALTER TABLE `matches`
  ADD CONSTRAINT `matches_player_one_foreign` FOREIGN KEY (`player_one`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `matches_player_two_foreign` FOREIGN KEY (`player_two`) REFERENCES `users` (`id`);

--
-- Constraints for table `relations`
--
ALTER TABLE `relations`
  ADD CONSTRAINT `relations_scaffoldinterface_id_foreign` FOREIGN KEY (`scaffoldinterface_id`) REFERENCES `scaffoldinterfaces` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_has_permissions`
--
ALTER TABLE `user_has_permissions`
  ADD CONSTRAINT `user_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_has_roles`
--
ALTER TABLE `user_has_roles`
  ADD CONSTRAINT `user_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_has_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
