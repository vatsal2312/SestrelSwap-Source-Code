-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 20, 2021 at 08:31 AM
-- Server version: 5.7.33-0ubuntu0.16.04.1
-- PHP Version: 7.0.33-0ubuntu0.16.04.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yefseduakjdbaiuefasas`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_09_17_084804_create_tbl_trans_history_table', 1),
(5, '2021_09_22_084303_create_tbl_trans_pair_table', 2),
(6, '2021_09_22_084315_create_tbl_trans_price_table', 2),
(7, '2021_09_24_063807_create_tbl_blacklist_table', 3),
(8, '2021_09_24_063817_create_tbl_whitelist_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_app_log`
--

CREATE TABLE `tbl_app_log` (
  `tbl_name` varchar(255) DEFAULT NULL,
  `txt_hash` varchar(255) DEFAULT NULL,
  `txt_action` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_app_log`
--

INSERT INTO `tbl_app_log` (`tbl_name`, `txt_hash`, `txt_action`, `created_at`) VALUES
('pair', 'asdfasfs', 'deposit', '2021-09-24 13:43:03'),
('price', 'price', 'price change', '2021-09-24 13:45:57'),
('history', 'wersdfdasfww', 'swap', '2021-09-24 13:50:16'),
(NULL, NULL, NULL, '2021-09-24 13:52:19'),
('history', '0xafb641af10e18eaf7cd9af4294820b6460106ae134eac1ed3ae1aaad5b4e1a0f', 'swap', '2021-09-27 07:46:33'),
('history', '0x058a919b9346f0c59c632efd2ce8219f533e3227da95961c7f48b30103a598bd', 'swap', '2021-09-27 07:49:19'),
('price', '0x1f4b6978880870445d0e9e75b63e69ac6462c6dc126bcdd9910fddef18a1ac88', 'price change', '2021-09-27 08:22:08'),
('history', '0xf05a71641c3da0392dbeb6e06ed7c428280b7aeedc328fd72c80b0707ebd1cb9', 'swap', '2021-09-27 10:36:39'),
('pair', '0x82e53043472cb21c7bf31f845cf8c06d416464a4cbb738337e42849a630bd917', 'deposit', '2021-09-27 10:51:24'),
('pair', '0x29931315f78b4aa89d7202d1957e296e9671f7cccdc70997aea27357363da024', 'deposit', '2021-09-27 11:57:12'),
('pair', '0xf6a9e6c520b9fe2f97c27f950f24b8a44504f11b893a405f01eca5fb4cf027e6', 'deposit', '2021-09-27 13:15:16'),
('pair', '0xf8fc75352bee75994ba85e6633a1cfc894b9152bd0e8362c9f1ba81f06c9eb8f', 'deposit', '2021-09-27 13:22:31'),
('history', '0x195ee8cedc2529a037ac0f1536fb0f9fef79d53d1132381fcea4018c87c02091', 'swap', '2021-09-30 10:27:44'),
('price', '0xdbd799d135cdc79156315a09bda8d6183378249a5fdcc42fdfd61b805677782d', 'price change', '2021-09-30 11:07:07'),
('pair', '0xa146276fba7498f6ed621ed9430f24b55340894c571ec382684693aab4748f81', 'deposit', '2021-09-30 11:08:34'),
('pair', '0xdfbf7b9e6496b2be0b9841dc33d700181d6c5a4df73c8b73449d3570757a9e8e', 'deposit', '2021-09-30 11:09:40'),
('price', '0x4b74a8a88697fb492f691c4c7b038eb6da6aa2eb0bfd11b2e04dddbae9794776', 'price change', '2021-09-30 11:51:43'),
('pair', '0x807610e085a3f7580eec6f818c0732ff0130ece276fa31b6737839a223cdd0b1', 'deposit', '2021-09-30 11:53:41'),
('pair', '0x0ac1871c6072e07486cb14ee64c327e08f404a9ebfc942219b3c5b3ce5630255', 'deposit', '2021-09-30 11:55:18'),
('history', '0xcd03963f261996fc36410c42d017132fb2be70e3db4e42f12d20a837a1183de0', 'swap', '2021-09-30 13:03:54'),
('history', '0x6679a518b22a9a77f9d8b85f000f2b8444ba3bda00f8f98f9d5c4038b4fd6331', 'swap', '2021-09-30 13:06:08'),
('price', '0xdb64da2ae20f6ba5c78f3938ef866195efdd5875bbb1178d040845101d899942', 'price change', '2021-09-30 14:36:39'),
('pair', '0x152f2a45b547c057072b8c5fe96621635c57abcf60de9d938c4eb1b0f82165a5', 'deposit', '2021-09-30 14:40:25'),
('pair', '0x4568d401b30e83cea3aca93632a19c105e3ef7e5dc3dcf7e7f302188c2cff4fd', 'deposit', '2021-09-30 14:44:14'),
('price', '0xca6412c69be42cd7154a74e36a4dddc24866505943ebb77b34b9eca6be9e60e2', 'price change', '2021-10-01 04:46:03'),
('pair', '0x0d96fce12fdb306d7143b6e0ca37e915ebf4f0e82a7492dd4e553c7255d5c243', 'deposit', '2021-10-01 04:47:49'),
('price', '0x5b7884f142d48736b284a43d9846ca360cc4cc0e34e1126c7e479b89594961c6', 'price change', '2021-10-01 04:48:18'),
('price', '0x19755139143e67766f1b939a4814478bd0ad7504c988b9dc8f91f1ba04d99ce5', 'price change', '2021-10-01 11:21:42'),
('pair', '0x377a29af416ebb324eab2fef1c32449f31b60d385de45be2db0b39beac31d003', 'deposit', '2021-10-01 11:27:46'),
('price', '0x5ed5c8f1e42a042898c7d920e1a7e5f0ce085a48eb0993a7639f0992b02c3ad0', 'price change', '2021-10-04 10:09:33'),
('pair', '0xf0beff529d3573a75a16d14335db38e13f1b230febfa3457baef6daa855d3584', 'deposit', '2021-10-04 12:59:27'),
('pair', '0x51ddb23a8bdbb5227fe00aad74ccb9b6621fa1f8c1f717f915d47255b4fe365f', 'deposit', '2021-10-04 13:01:14'),
('price', '0xaa0124803e449de4e0d3424f64e5750502bf964630a2c2033d7e734735b19af8', 'price change', '2021-10-04 13:02:30'),
('price', '0x525d0f0c12b07dc334867d09b9f110855cd762fea54b3c2b6fdc204b646dc955', 'price change', '2021-10-05 09:54:19'),
('price', '0xdfc0e9878b2eb92c56c616e3daae6333a5113705cb3c76d508ce7df6bc042a39', 'price change', '2021-10-05 10:12:27'),
('pair', '0x56a5be563d816b262dc549e352bb716ec578ef87cab45a255c317c09be9ba0e7', 'deposit', '2021-10-05 10:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blacklist`
--

CREATE TABLE `tbl_blacklist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `staus` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_Hfjsrzsssdfdf`
--

CREATE TABLE `tbl_Hfjsrzsssdfdf` (
  `id` int(11) NOT NULL,
  `ip` text,
  `location` text,
  `browser` text,
  `comment` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_Hfjsrzsssdfdf`
--

INSERT INTO `tbl_Hfjsrzsssdfdf` (`id`, `ip`, `location`, `browser`, `comment`, `created_at`, `updated_at`) VALUES
(1, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(2, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(3, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(4, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(5, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(6, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(7, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(8, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(9, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'Logged in', NULL, NULL),
(10, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(11, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'Logged in', NULL, NULL),
(12, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.54 Safari/537.36', 'Logged in', NULL, NULL),
(13, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Linux; Android 11; SM-N976N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Mobile Safari/537.36', 'Logged in', NULL, NULL),
(14, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(15, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; WOW64; rv:67.0) Gecko/20100101 Firefox/67.0', 'Logged in', NULL, NULL),
(16, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/75.0.3735.0 Safari/537.36', 'Logged in', NULL, NULL),
(17, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(18, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(19, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(20, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'Logged in', NULL, NULL),
(21, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'Logged in', NULL, NULL),
(22, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'Logged in', NULL, NULL),
(23, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(24, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(25, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(26, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(27, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'Logged in', NULL, NULL),
(28, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'Logged in', NULL, NULL),
(29, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/93.0.4577.82 Safari/537.36', 'Logged in', NULL, NULL),
(30, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'Logged in', NULL, NULL),
(31, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'Logged in', NULL, NULL),
(32, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'Logged in', NULL, NULL),
(33, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'Logged in', NULL, NULL),
(34, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'Logged in', NULL, NULL),
(35, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'Logged in', NULL, NULL),
(36, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(37, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'Logged in', NULL, NULL),
(38, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'Logged in', NULL, NULL),
(39, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(40, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(41, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(42, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(43, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(44, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(45, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(46, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(47, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(48, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(49, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'Logged in', NULL, NULL),
(50, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'Logged in', NULL, NULL),
(51, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.61 Safari/537.36', 'Logged in', NULL, NULL),
(52, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(53, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(54, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(55, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(56, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL),
(57, '117.254.189.125', 'Tirupparangunram,Tamil Nadu', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:92.0) Gecko/20100101 Firefox/92.0', 'Logged in', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_site_config`
--

CREATE TABLE `tbl_site_config` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `site_names` varchar(255) NOT NULL,
  `site_mode` varchar(1) NOT NULL DEFAULT '1',
  `admin_redirect` varchar(100) NOT NULL,
  `contact_person` varchar(20) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `contact_mail` varchar(200) NOT NULL,
  `contact_address` text NOT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `site_logo` text NOT NULL,
  `admin_profile` text NOT NULL,
  `favicon` text NOT NULL,
  `copy_rights` text NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `admin_address` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_site_config`
--

INSERT INTO `tbl_site_config` (`id`, `admin_name`, `site_names`, `site_mode`, `admin_redirect`, `contact_person`, `contact_number`, `contact_mail`, `contact_address`, `city`, `country`, `state`, `address`, `site_logo`, `admin_profile`, `favicon`, `copy_rights`, `updated_at`, `admin_address`) VALUES
(1, 'admin', 'Sestral Swap', '1', 'admin', '', '', 'admin@sestralswap.com', '', NULL, '', '', '', '', '', '', '', '2021-09-21 09:55:37', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trerthrs_patyjmir`
--

CREATE TABLE `tbl_trerthrs_patyjmir` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `txt_txnHash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txt_symbol` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `txt_amount` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_trerthrs_patyjmir`
--

INSERT INTO `tbl_trerthrs_patyjmir` (`id`, `txt_txnHash`, `txt_symbol`, `txt_amount`, `created_at`, `updated_at`) VALUES
(1, '0xf5251f8ceaa2876bc13082acc45ba6c25177b557e8b5ada13e02df4d27bfcb32', 'STL', '3000000000000000000', '2021-09-22 14:26:15', '2021-09-22 14:26:15'),
(2, '0xd742e5631e0fd1238c4748fa66cc29ed3a1fab7985c11ea58f632acb3cf48b6c', 'USDT', '10123456', '2021-09-22 17:59:21', '2021-09-22 17:59:21'),
(3, '0x9d397b1e1c7f3cc8e0d840093b2c1a4b0748673fab9e0c8e5450258d19d618ce', 'STL', '9000000000000000000', '2021-09-24 17:31:18', '2021-09-24 17:31:18'),
(5, '0x82e53043472cb21c7bf31f845cf8c06d416464a4cbb738337e42849a630bd917', 'STL', '100000000000000000000', '2021-09-27 14:51:24', '2021-09-27 14:51:24'),
(6, '0x29931315f78b4aa89d7202d1957e296e9671f7cccdc70997aea27357363da024', 'STL', '10000000000000000000', '2021-09-27 15:57:12', '2021-09-27 15:57:12'),
(7, '0xf6a9e6c520b9fe2f97c27f950f24b8a44504f11b893a405f01eca5fb4cf027e6', 'STL', '10000000000000000000', '2021-09-27 17:15:16', '2021-09-27 17:15:16'),
(8, '0xf8fc75352bee75994ba85e6633a1cfc894b9152bd0e8362c9f1ba81f06c9eb8f', 'STL', '100000000000000000000', '2021-09-27 17:22:31', '2021-09-27 17:22:31'),
(9, '0xa146276fba7498f6ed621ed9430f24b55340894c571ec382684693aab4748f81', 'USDT', '10000000', '2021-09-30 15:08:34', '2021-09-30 15:08:34'),
(10, '0xdfbf7b9e6496b2be0b9841dc33d700181d6c5a4df73c8b73449d3570757a9e8e', 'STL', '13000000000000000000', '2021-09-30 15:09:40', '2021-09-30 15:09:40'),
(11, '0x807610e085a3f7580eec6f818c0732ff0130ece276fa31b6737839a223cdd0b1', 'USDT', '32000000', '2021-09-30 15:53:41', '2021-09-30 15:53:41'),
(12, '0x0ac1871c6072e07486cb14ee64c327e08f404a9ebfc942219b3c5b3ce5630255', 'STL', '10000000000000000000', '2021-09-30 15:55:18', '2021-09-30 15:55:18'),
(13, '0x152f2a45b547c057072b8c5fe96621635c57abcf60de9d938c4eb1b0f82165a5', 'USDT', '10000000', '2021-09-30 18:40:25', '2021-09-30 18:40:25'),
(14, '0x4568d401b30e83cea3aca93632a19c105e3ef7e5dc3dcf7e7f302188c2cff4fd', 'STL', '1000000000000000000000', '2021-09-30 18:44:14', '2021-09-30 18:44:14'),
(15, '0x0d96fce12fdb306d7143b6e0ca37e915ebf4f0e82a7492dd4e553c7255d5c243', 'USDT', '1000000000', '2021-10-01 08:47:49', '2021-10-01 08:47:49'),
(16, '0x377a29af416ebb324eab2fef1c32449f31b60d385de45be2db0b39beac31d003', 'USDT', '10000000', '2021-10-01 15:27:46', '2021-10-01 15:27:46'),
(17, '0xf0beff529d3573a75a16d14335db38e13f1b230febfa3457baef6daa855d3584', 'STL', '8385000000000000000', '2021-10-04 16:59:27', '2021-10-04 16:59:27'),
(18, '0x51ddb23a8bdbb5227fe00aad74ccb9b6621fa1f8c1f717f915d47255b4fe365f', 'USDT', '2025999', '2021-10-04 17:01:14', '2021-10-04 17:01:14'),
(19, '0x56a5be563d816b262dc549e352bb716ec578ef87cab45a255c317c09be9ba0e7', 'USDT', '10000000', '2021-10-05 14:29:52', '2021-10-05 14:29:52');

--
-- Triggers `tbl_trerthrs_patyjmir`
--
DELIMITER $$
CREATE TRIGGER `pair_log` AFTER INSERT ON `tbl_trerthrs_patyjmir` FOR EACH ROW INSERT INTO tbl_app_log (`tbl_name`,`txt_action`,`txt_hash`) values ('pair','deposit',NEW.txt_txnHash)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trokps_prjkhice`
--

CREATE TABLE `tbl_trokps_prjkhice` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `txt_txnHash` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txt_amount` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_trokps_prjkhice`
--

INSERT INTO `tbl_trokps_prjkhice` (`id`, `txt_txnHash`, `txt_amount`, `created_at`, `updated_at`) VALUES
(1, '0xab8a5114b82a4c2dd63c229c246d83bebe1ec54b41e083c4cd4526047c98826d', '10123456', '2021-09-22 18:01:12', '2021-09-22 18:01:12'),
(3, '0x1f4b6978880870445d0e9e75b63e69ac6462c6dc126bcdd9910fddef18a1ac88', '10000000', '2021-09-27 12:22:08', '2021-09-27 12:22:08'),
(4, '0xdbd799d135cdc79156315a09bda8d6183378249a5fdcc42fdfd61b805677782d', '5000000', '2021-09-30 15:07:07', '2021-09-30 15:07:07'),
(5, '0x4b74a8a88697fb492f691c4c7b038eb6da6aa2eb0bfd11b2e04dddbae9794776', '2350000', '2021-09-30 15:51:43', '2021-09-30 15:51:43'),
(6, '0xdb64da2ae20f6ba5c78f3938ef866195efdd5875bbb1178d040845101d899942', '10000000', '2021-09-30 18:36:39', '2021-09-30 18:36:39'),
(7, '0xca6412c69be42cd7154a74e36a4dddc24866505943ebb77b34b9eca6be9e60e2', '5000000', '2021-10-01 08:46:03', '2021-10-01 08:46:03'),
(8, '0x5b7884f142d48736b284a43d9846ca360cc4cc0e34e1126c7e479b89594961c6', '2350000', '2021-10-01 08:48:18', '2021-10-01 08:48:18'),
(9, '0x19755139143e67766f1b939a4814478bd0ad7504c988b9dc8f91f1ba04d99ce5', '10000000', '2021-10-01 15:21:42', '2021-10-01 15:21:42'),
(10, '0x5ed5c8f1e42a042898c7d920e1a7e5f0ce085a48eb0993a7639f0992b02c3ad0', '5000000', '2021-10-04 14:09:33', '2021-10-04 14:09:33'),
(11, '0xaa0124803e449de4e0d3424f64e5750502bf964630a2c2033d7e734735b19af8', '7500000', '2021-10-04 17:02:30', '2021-10-04 17:02:30'),
(12, '0x525d0f0c12b07dc334867d09b9f110855cd762fea54b3c2b6fdc204b646dc955', '2350000', '2021-10-05 13:54:19', '2021-10-05 13:54:19'),
(13, '0xdfc0e9878b2eb92c56c616e3daae6333a5113705cb3c76d508ce7df6bc042a39', '10000000', '2021-10-05 14:12:27', '2021-10-05 14:12:27');

--
-- Triggers `tbl_trokps_prjkhice`
--
DELIMITER $$
CREATE TRIGGER `price_log` AFTER INSERT ON `tbl_trokps_prjkhice` FOR EACH ROW INSERT INTO tbl_app_log (`tbl_name`,`txt_action`,`txt_hash`) values ('price','price change',NEW.txt_txnHash)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trsdfws_hilsdjfvis`
--

CREATE TABLE `tbl_trsdfws_hilsdjfvis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `txn_hash` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_currency` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `to_currency` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_addr` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `from_amt` decimal(40,8) DEFAULT NULL,
  `to_amt` decimal(40,8) DEFAULT NULL,
  `contract_type` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_trsdfws_hilsdjfvis`
--

INSERT INTO `tbl_trsdfws_hilsdjfvis` (`id`, `txn_hash`, `from_currency`, `to_currency`, `user_addr`, `from_amt`, `to_amt`, `contract_type`, `created_at`, `updated_at`) VALUES
(1, '0xef60de3aa6e659611aae771518486be5b41ca599000f8fee20ab7d5cfdfb472b', 'STL', 'USDT', '0x90bf68cd99b21633fd2c036ed86077f69e0cd0a9', '91000000000000000000.00000000', '213850000.00000000', 'buy', '2021-09-18 13:25:00', '2021-09-18 13:25:00'),
(2, '0x80f782ac35f76bda51e078e09c05cc4571728361fe0c84dda81c4b4160be8d72', 'USDT', 'STL', '0x11b2365a1d46c58b6dc766cfc32896a0cf0b89a3', '1000000.00000000', '1000000000000000000.00000000', 'buy', '2021-09-18 13:33:39', '2021-09-18 13:33:39'),
(3, '0x4424d634a380ee5c8c762aec5d56267f9ddfb608c220b5c7cf6e7346137cea32', 'USDT', 'STL', '0x87832dccbec1fc80c1d513f3647142c38a6d2349', '10000000.00000000', '10000000000000000000.00000000', 'buy', '2021-09-18 13:36:01', '2021-09-18 13:36:01'),
(4, '0x09f39aa89a70236e60ec7786865930286c4dbbc7d6af0d871e9727a5333f02cc', 'STL', 'USDT', '0x87832dccbec1fc80c1d513f3647142c38a6d2349', '4255319140000000000.00000000', '10000000.00000000', 'buy', '2021-09-18 13:37:09', '2021-09-18 13:37:09'),
(5, '0x7a1732ba3790b33402634be8c743685443818cb85e242c9d8163572c9a008628', 'USDT', 'STL', '0x87832dccbec1fc80c1d513f3647142c38a6d2349', '10000000.00000000', '10000000000000000000.00000000', 'buy', '2021-09-18 13:38:33', '2021-09-18 13:38:33'),
(6, '0x6f4c7758e9d1381b8962c693df1537c82b78abf047749ea596f5f99681321858', 'USDT', 'STL', '0x87832dccbec1fc80c1d513f3647142c38a6d2349', '10000000.00000000', '10000000000000000000.00000000', 'buy', '2021-09-18 13:41:18', '2021-09-18 13:41:18'),
(7, '0xffa35c368f2ae9a0a5a0622b4d90ccf44c3a55ae3a14c60b07c6580bf9bba776', 'STL', 'USDT', '0x87832dccbec1fc80c1d513f3647142c38a6d2349', '10000000000000000000.00000000', '23500000.00000000', 'buy', '2021-09-18 13:48:05', '2021-09-18 13:48:05'),
(8, '0xf7f3d4936e58de94b851eb4647d5f3a6f25215f65d47c3071ec86ca27acda304', 'STL', 'USDT', '0x87832dccbec1fc80c1d513f3647142c38a6d2349', '10000000000000000000.00000000', '23500000.00000000', 'buy', '2021-09-18 15:54:11', '2021-09-18 15:54:11'),
(9, '0x9f7f659c131857d7fe55a88ea8cb18cfb9ac7b1e1379904682e670b4f0da81ba', 'STL', 'USDT', '0x87832dccbec1fc80c1d513f3647142c38a6d2349', '1000000000000000000.00000000', '2350000.00000000', 'buy', '2021-09-18 15:58:29', '2021-09-18 15:58:29'),
(10, '0xae63ec36cb615b6874d0d5321746cc32f1852030ebd666a0a7b5629871c09406', 'STL', 'USDT', '0xdbeff03e647702f22aae50e805853436d36a9ee5', '1000000000000000000.00000000', '2350000.00000000', 'buy', '2021-09-18 16:07:27', '2021-09-18 16:07:27'),
(11, '0x18bb614e69b31b24211fb6e1da6f81af439c869258e91142aea8c4f5593e3948', 'STL', 'USDT', '0x90bf68cd99b21633fd2c036ed86077f69e0cd0a9', '10000000000000000000.00000000', '23500000.00000000', 'buy', '2021-09-18 16:11:49', '2021-09-18 16:11:49'),
(12, '0x5547be250eeea059fbfc857c5f74092d1560b2879f39b399036acb717144ab4b', 'USDT', 'STL', '0x11b2365a1d46c58b6dc766cfc32896a0cf0b89a3', '1000000.00000000', '1000000000000000000.00000000', 'buy', '2021-09-18 16:25:34', '2021-09-18 16:25:34'),
(13, '0x07dc09cd40ee54b0b4ac60d5b66ffb190214995b0120653d8eb271841789ccde', 'STL', 'USDT', '0x11b2365a1d46c58b6dc766cfc32896a0cf0b89a3', '425531910000000000.00000000', '1000000.00000000', 'buy', '2021-09-18 16:27:37', '2021-09-18 16:27:37'),
(14, '0x336631bfcbcf24a174aef9a0a4e6755b5a898ec632baaff665ddfa3d6155a8bd', 'STL', 'USDT', '0x11b2365a1d46c58b6dc766cfc32896a0cf0b89a3', '1000000000000000000.00000000', '2350000.00000000', 'buy', '2021-09-18 16:37:38', '2021-09-18 16:37:38'),
(15, '0xd82cea42b4bb7f27fbabf3712a244aaf0f90b53983b5fed46c117ba799e5f458', 'STL', 'USDT', '0x90bf68cd99b21633fd2c036ed86077f69e0cd0a9', '1000000000000000000.00000000', '2350000.00000000', 'buy', '2021-09-18 16:41:10', '2021-09-18 16:41:10'),
(16, '0x2316c7ab59aef384be9bcccc0783034215e9da577ae42fec4a6601bbdd677b93', 'USDT', 'STL', '0x90bf68cd99b21633fd2c036ed86077f69e0cd0a9', '10000000.00000000', '10000000000000000000.00000000', 'buy', '2021-09-18 16:56:25', '2021-09-18 16:56:25'),
(17, '0x454badeb840b3ef94405b8785a268cdbcdf06bef59004c83244b221c796f2c3b', 'STL', 'USDT', '0x73dc5ab24fe9239abfe8a527f181f035ef8c9e3f', '10000000000000000000.00000000', '101234560.00000000', 'sell', '2021-09-22 18:05:44', '2021-09-22 18:05:44'),
(18, '0x4469904f763e5d007eae4f28f3717ce659635e83d8cb4c7d4b5d0aab285b8e31', 'USDT', 'STL', '0x73dc5ab24fe9239abfe8a527f181f035ef8c9e3f', '101123456.00000000', '101123456000000000000.00000000', 'buy', '2021-09-22 18:07:35', '2021-09-22 18:07:35'),
(19, '0xb22475d390fb5fe905e1a47db21c52346814a9974b815c9e6690da7c7ea01e99', 'USDT', 'STL', '0x87832dccbec1fc80c1d513f3647142c38a6d2349', '10000000.00000000', '10000000000000000000.00000000', 'buy', '2021-09-23 17:35:50', '2021-09-23 17:35:50'),
(21, '0xafb641af10e18eaf7cd9af4294820b6460106ae134eac1ed3ae1aaad5b4e1a0f', 'USDT', 'STL', '0xedf7e0d4301c7604fd2a5f9a4e29b0090cbaa870', '1000000.00000000', '1000000000000000000.00000000', 'buy', '2021-09-27 11:46:33', '2021-09-27 11:46:33'),
(22, '0x058a919b9346f0c59c632efd2ce8219f533e3227da95961c7f48b30103a598bd', 'STL', 'USDT', '0xedf7e0d4301c7604fd2a5f9a4e29b0090cbaa870', '1000000000000000000.00000000', '2350000.00000000', 'sell', '2021-09-27 11:49:19', '2021-09-27 11:49:19'),
(23, '0xf05a71641c3da0392dbeb6e06ed7c428280b7aeedc328fd72c80b0707ebd1cb9', 'USDT', 'STL', '0x87832dccbec1fc80c1d513f3647142c38a6d2349', '20060000.00000000', '20060000000000000000.00000000', 'buy', '2021-09-27 14:36:39', '2021-09-27 14:36:39'),
(24, '0x195ee8cedc2529a037ac0f1536fb0f9fef79d53d1132381fcea4018c87c02091', 'USDT', 'STL', '0x90bf68cd99b21633fd2c036ed86077f69e0cd0a9', '1000000.00000000', '1000000000000000000.00000000', 'buy', '2021-09-30 14:27:44', '2021-09-30 14:27:44'),
(25, '0xcd03963f261996fc36410c42d017132fb2be70e3db4e42f12d20a837a1183de0', 'USDT', 'STL', '0x11b2365a1d46c58b6dc766cfc32896a0cf0b89a3', '1000000.00000000', '1000000000000000000.00000000', 'buy', '2021-09-30 17:03:54', '2021-09-30 17:03:54'),
(26, '0x6679a518b22a9a77f9d8b85f000f2b8444ba3bda00f8f98f9d5c4038b4fd6331', 'STL', 'USDT', '0x11b2365a1d46c58b6dc766cfc32896a0cf0b89a3', '1000000000000000000.00000000', '2350000.00000000', 'sell', '2021-09-30 17:06:08', '2021-09-30 17:06:08');

--
-- Triggers `tbl_trsdfws_hilsdjfvis`
--
DELIMITER $$
CREATE TRIGGER `swap_log` AFTER INSERT ON `tbl_trsdfws_hilsdjfvis` FOR EACH ROW INSERT INTO tbl_app_log (`tbl_name`,`txt_action`,`txt_hash`) values ('history','swap',NEW.txn_hash)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_whitelist`
--

CREATE TABLE `tbl_whitelist` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_whitelist`
--

INSERT INTO `tbl_whitelist` (`id`, `ip`, `status`, `created_at`, `updated_at`) VALUES
(5, '103.87.105.218', NULL, NULL, NULL),
(6, '212.154.64.86', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `txt_ptrnCode` text COLLATE utf8mb4_unicode_ci,
  `bool_2fa_status` tinyint(1) DEFAULT NULL,
  `txt_2fa_code` text COLLATE utf8mb4_unicode_ci,
  `txt_2fa_expire` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `txt_2fa_verify` tinyint(1) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `txt_ptrnCode`, `bool_2fa_status`, `txt_2fa_code`, `txt_2fa_expire`, `txt_2fa_verify`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Admin', 'TmtYTFgySHdUU2p4bkgyTXRiRDRlTzJBUHlIamJCMDIzV2wwbkx6cHg2MD0=', NULL, '$2y$10$jE5xvCqMaTluli3KwvW0UOLtF8M3tsI9ds812NQJ1r42btYKIjFF2', 'NERvRU5NOFplU1poZlhkcllaNUNoUT09', 1, 'Q29kNmtVWXBGMCttd1Y5YXpCbUJ4VWcwQVA1Wkw4VHdzdE9VVlF5c3V1bz0=', NULL, 1, NULL, '2021-09-21 05:23:57', '2021-10-08 13:22:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_blacklist`
--
ALTER TABLE `tbl_blacklist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_blacklist_ip_index` (`ip`);

--
-- Indexes for table `tbl_Hfjsrzsssdfdf`
--
ALTER TABLE `tbl_Hfjsrzsssdfdf`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_site_config`
--
ALTER TABLE `tbl_site_config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_trerthrs_patyjmir`
--
ALTER TABLE `tbl_trerthrs_patyjmir`
  ADD PRIMARY KEY (`id`),
  ADD KEY `txt_txnHash` (`txt_txnHash`);

--
-- Indexes for table `tbl_trokps_prjkhice`
--
ALTER TABLE `tbl_trokps_prjkhice`
  ADD PRIMARY KEY (`id`),
  ADD KEY `txt_txnHash` (`txt_txnHash`);

--
-- Indexes for table `tbl_trsdfws_hilsdjfvis`
--
ALTER TABLE `tbl_trsdfws_hilsdjfvis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `txn_hash` (`txn_hash`),
  ADD KEY `user_addr` (`user_addr`);

--
-- Indexes for table `tbl_whitelist`
--
ALTER TABLE `tbl_whitelist`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tbl_whitelist_ip_index` (`ip`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tbl_blacklist`
--
ALTER TABLE `tbl_blacklist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_Hfjsrzsssdfdf`
--
ALTER TABLE `tbl_Hfjsrzsssdfdf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;
--
-- AUTO_INCREMENT for table `tbl_trerthrs_patyjmir`
--
ALTER TABLE `tbl_trerthrs_patyjmir`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `tbl_trokps_prjkhice`
--
ALTER TABLE `tbl_trokps_prjkhice`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tbl_trsdfws_hilsdjfvis`
--
ALTER TABLE `tbl_trsdfws_hilsdjfvis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_whitelist`
--
ALTER TABLE `tbl_whitelist`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
