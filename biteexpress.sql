-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2024 at 06:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biteexpress`
--

-- --------------------------------------------------------

--
-- Table structure for table `baskin-robbins`
--

CREATE TABLE `baskin-robbins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `burger_king`
--

CREATE TABLE `burger_king` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `burger_king`
--

INSERT INTO `burger_king` (`id`, `item_name`, `item_price`, `item_picture`, `created_at`, `updated_at`) VALUES
(1, 'Whopper', '7.79', 'i6ck9xKQ2NspxFGl9puiVhnrwDy75ATohRw60N8m.png', NULL, NULL),
(2, 'Whopper Jr.', '6.39', 'M1Gu1mE7o45FMV19zUGWXkda0AH8KG1BM93klAuC.png', NULL, NULL),
(3, 'CheeseBurger', '3.49', 'GQYCszKi1nS7YSFzyYCKi5Rq5yPeap615O5xMeqt.png', NULL, NULL),
(4, 'Hamburger', '2.59', 'wbEw7h8osZLAQh76edVQS8riokyhyqg3Gxb7RTDo.png', NULL, NULL),
(5, 'Sandwich', '7.59', 'J1bHCMuWTA3iBXiCGREqr9D3aRrucmgCqoyMUyYv.png', NULL, NULL),
(6, '16 Nuggets', '7.49', '3xDWKEWNXkQd0Iqr5tIDU0IJl4KTxfnhBAUy66tQ.png', NULL, NULL),
(7, '8 Nuggets', '2.99', 'ZlN173do1sacoidqWOgz6zYhmqAvtWFQYra5LOND.png', NULL, NULL),
(8, 'Duo', '5.00', 'AGGcuOZYpYL5ojjz0H0nVsUTohyaGRTvzXEcDB6R.png', NULL, NULL),
(9, 'Duo', '5.00', '9N1LndI0Q3gZhUBQrFQAV7L8DvR0g5RnWLJSHTjV.png', NULL, NULL),
(10, 'Duo', '5.00', 'SPUHN7d5eHBNOsOjJqg6xZRnvjSPQlfYETvNK5kh.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `domino's`
--

CREATE TABLE `domino's` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `domino's`
--

INSERT INTO `domino's` (`id`, `item_name`, `item_price`, `item_picture`, `created_at`, `updated_at`) VALUES
(1, 'Margherita', '6.29', 'BHIftJH9pwrglwAA8Zm4EjKbsANTVcvXgaDWNGHC.png', NULL, NULL),
(2, 'Four Cheese', '7.99', '0R01NSDjRDDSaK0anqYGO4w3ShMPrnESI3KAOXVq.png', NULL, NULL),
(3, 'Picante pizza', '7.99', 'gvUP56HD04uegw5HQbgmu0yFU2f0Ajz06ZzN608f.png', NULL, NULL),
(4, 'Funghi pizza', '7.29', 'dvpl7pHEfZJg1273hY587R6bSrN6A0HhfEXCWaZ4.png', NULL, NULL),
(5, 'Chicken Feast', '8.79', 'ui3nqd4lBkYB3b8G3CaZkXa3DKOeqQ6tlpI9SbiV.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dunkin'_donuts`
--

CREATE TABLE `dunkin'_donuts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dunkin'_donuts`
--

INSERT INTO `dunkin'_donuts` (`id`, `item_name`, `item_price`, `item_picture`, `created_at`, `updated_at`) VALUES
(1, 'Chocolate', '0.49', 'DICFzQbUBl5RYxHhJ0Khn2EitjfWFLjxiMrHc5B3.png', NULL, NULL),
(2, 'Strawberry', '0.49', 'fg8j54mp5mH9xy8O3tcWmU4DeMTdwJNqBOHaKUiL.png', NULL, NULL),
(3, '3 piece', '1.39', 'ixHMChC2mN0TgIKRri6n2uaMrp3wexAXFQSEeHkb.png', NULL, NULL),
(4, '4pcs choco', '1.89', '0CyFMJ3doCZhXVKie3mnyAXaR4tm8ZZLGnm6g2nd.png', NULL, NULL),
(5, '6 strawberry', '2.49', 'SUwj3x8HMb2c49r9VI2obWK8m3z8dukSTglaUTGA.png', NULL, NULL),
(6, 'Wake-Up wrap', '0.69', 'DYRJn1TgA2Ew9Rxe6HH3mi1sXOb9PMk9YabqjUxw.png', NULL, NULL),
(7, 'Egg & Cheese', '1.29', 'd0cyJR4crogITCwQCTud3aGiKA3vZPKo3Ro00Qho.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enes`
--

CREATE TABLE `enes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hardee's`
--

CREATE TABLE `hardee's` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `in-n-out`
--

CREATE TABLE `in-n-out` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `restaurant_id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_image` varchar(255) DEFAULT NULL,
  `item_price` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kfc`
--

CREATE TABLE `kfc` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kfc`
--

INSERT INTO `kfc` (`id`, `item_name`, `item_price`, `item_picture`, `created_at`, `updated_at`) VALUES
(1, 'Twister Wrap', '2.49', 'K83hqEIcglTpTOWawV8oaCV7uN1XPYqVe1Oarn5r.png', NULL, NULL),
(2, 'Fillet Suprem', '4.99', 'v41YAPf6zGmZWfWShmv4LcwuIlYD8wAUejheb3hw.png', NULL, NULL),
(3, 'Zinger Meal', '7.89', 'f9zjPxADy5SBdJfEPFzjthcdKygAiEPTabiXCzgk.png', NULL, NULL),
(4, 'Twister Box', '7.39', '1KiVbgKr2XpgKMRGgaTPCQ0agqqpULxJqRo8rbNa.png', NULL, NULL),
(5, 'Mayo Crunch', '2.29', 'ZtSozaKZPPBVFGQoRMj88MOyG0Z344cxdP2SCeW3.png', NULL, NULL),
(6, 'Mighty Box', '11.39', 'ohJOhGkmzx55v0HMXUsZUeg1XQM4JHGPzA2CTnjV.png', NULL, NULL),
(7, '8 bucket', '19.99', 'Z61V3uFNQZ5cXhLu0nnUIEmU2MMXphwtz5OpEbnu.png', NULL, NULL),
(8, '12 bucket', '26.39', 'VHuLYXZv9H9TjNRus3Vsm6S3wAit1BOp9n8boJlM.png', NULL, NULL),
(9, '18 bucket', '35.19', 'ImTKcO7m35154sUtZxLxSmT1jYryo8BgKur4v93N.png', NULL, NULL),
(10, 'tomia sauce', '0.49', 'JH8MphvRrD1hJ6sqi6aBXDP4DyUuFIGPbNFucAMU.png', NULL, NULL),
(11, 'sweet sauce', '0.49', '4jzVBvbr6oDUPvzB7aRH2J6UH1kBd1e0ABHVMW7e.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `mcdonalds`
--

CREATE TABLE `mcdonalds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mcdonalds`
--

INSERT INTO `mcdonalds` (`id`, `item_name`, `item_price`, `item_picture`, `created_at`, `updated_at`) VALUES
(1, 'Breakfast', '8.19', 'BZT4YC1zjPo60YpkWcuj2jR0V1Tc6zumfNrvK5LE.png', NULL, NULL),
(2, 'Hotcakes', '4.49', 'AG0QGKgdjLYdLOzmSH7d8GPssvFp4FBhnttnkKKM.png', NULL, NULL),
(3, 'Hotcakes only', '3.69', '2FFiAo0367zXWFi1QvgEVqfBpF8uHGpYEKaXKD5S.png', NULL, NULL),
(4, 'McChicken', '3.49', 'fKqMRZ4jZenQVD7gCXqVl0TB82TcyqjlTcPHPThL.png', NULL, NULL),
(5, 'Large Fries', '3.19', 'meBiy0b9rrqiKmSkcA2GhvxH5hCuAh42kPO15kEC.png', NULL, NULL),
(6, 'Medium Fries', '2.79', 'HsbmWOOdLp8XbyQfa7GvxftERkBjWzBcTjMw7tOa.png', NULL, NULL),
(7, 'Small fries', '2.19', 'WGP6cbDuDYaTdPHOqbAXBQ1g3i9MDtbWfUKn4jtX.png', NULL, NULL),
(8, 'Burger', '1.99', 'iNavrnT4kr9l64BfGstSMSCBINWViO7t486B00FB.png', NULL, NULL),
(9, '10 McNuggets', '6.79', 'ZECf61Z9rJNyrgCB9PkozZbEMPLinlYrCxlnYu6D.png', NULL, NULL),
(10, 'McDouble', '3.19', '5tKRTyOof5JW4zmkaeucUUaIE9xAoKcfppZG1qja.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_01_19_124547_add_timestamps_to_restaurants_table', 2),
(6, '2024_01_19_141046_create_restaurants_table', 3),
(7, '2024_01_19_163433_create_users_table', 4),
(8, '2024_01_21_170527_locations_nr', 5),
(9, '2024_01_21_172748_add_restaurant_picture_to_restaurants', 6),
(10, '2024_01_25_165301_create_product2s_table', 7),
(11, '2024_01_25_165318_create_cart_items_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `panda_express`
--

CREATE TABLE `panda_express` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pizza_hut`
--

CREATE TABLE `pizza_hut` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pizza_hut`
--

INSERT INTO `pizza_hut` (`id`, `item_name`, `item_price`, `item_picture`, `created_at`, `updated_at`) VALUES
(1, 'Supreme pizza', '20.49', '78ugfodFbPwiee3VvwHPCIBNWYgGfOFHSpic1QVO.png', NULL, NULL),
(2, 'Veggie Pizza', '20.49', 't0hZLcNfRJNpAv1BHvoYvaKrWDc4XrYtugUcWvC0.png', NULL, NULL),
(3, 'Cheese Pizza', '15.49', 'ucYyY38qmEOCoFKMGSIbRfEBmPEqaCJ2mmZTz5rN.png', NULL, NULL),
(4, '6 Wings', '10.49', 'vDtPo1PIiAT1YNtLyq9S1CLbhuepBXuOfYesufUF.png', NULL, NULL),
(5, '12 Wings', '19.99', '6XRyUrUUTrFAtfEp3S2LAGwiA7CGwa51mwKc7seE.png', NULL, NULL),
(6, 'Chicken pizza', '20.49', 'R2ZOZdSu9jLOZoPaJ6CodTJVYrB1afMBrEJk154f.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `operating_cities` varchar(255) NOT NULL DEFAULT '1',
  `phone_nr` varchar(255) NOT NULL DEFAULT '1',
  `email` varchar(255) NOT NULL DEFAULT '1',
  `password` varchar(255) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `locations_nr` int(11) DEFAULT 0,
  `restaurant_picture` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`id`, `name`, `owner`, `operating_cities`, `phone_nr`, `email`, `password`, `created_at`, `updated_at`, `locations_nr`, `restaurant_picture`) VALUES
(33, 'Taco Bell', 'me', 'Fushë Kosova Peja Prishtina Prizren', '+38348298421', 'tacobell782@gmail.com', '$2y$12$bZgYhebHJXCsDo83gQNXYOs8VdXEIL3qPh5tn33gnmzoKqpXq3GhG', NULL, NULL, 0, 'tacoBell.jpg'),
(34, 'KFC', 'me', 'Ferizaj Fushë Kosova Gjakova Peja Prishtina Prizren', '+38349284293', 'kfc782@gmail.com', '$2y$12$mDqnx.hDVtyUgRLnAyMwa.T9XBIfwvlaNA5HRFTFwKwD7KHUANTxG', NULL, NULL, 0, NULL),
(35, 'Subway', 'me', 'Gjilan Obiliq Viti', '+38345973789', 'subway774@gmail.com', '$2y$12$3kek0uUNO9kCHgbzKg5ETeMsUkoe6ScGG11eZ6CM8YKjg9weObHmG', NULL, NULL, 0, NULL),
(36, 'Dunkin\' donuts', 'me', 'Dragash Ferizaj Fushë Kosova Prishtina Prizren', '+38345385233', 'dunkinDonuts287@gmail.com', '$2y$12$8k/DZxeDKxgZ5hXxC7ObG.WbS8BGn/Ske8HcVsXCRbpxbgyX2W9T6', NULL, NULL, 0, NULL),
(37, 'McDonalds', 'me', 'Deçan Dragash Ferizaj Fushë Kosova Gjakova Kaçanik Lipjan Peja Prishtina Prizren Vushtrri', '+38348329432', 'mcdonalds834@gmail.com', '$2y$12$uPOkFWCysWc7sNlCw7CpneQg0CE1PGiW5mVdhMkdrqy1sfYMfZxla', NULL, NULL, 0, NULL),
(38, 'Pizza Hut', 'me', 'Dragash Fushë Kosova Istog Lipjan Prizren Rahovec Skenderaj', '+38348498275', 'pizzahut834@gmail.com', '$2y$12$mC0Z1Dx23U/XtXCQeNugLu0jUxD3HmULEocLAg4p/22YsOg.gdNdu', NULL, NULL, 0, NULL),
(39, 'Domino\'s', 'me', 'Dragash Istog Lipjan Malisheva Obiliq Prishtina Prizren Shtërpca Viti Vushtrri', '+38348099765', 'dominos906@gmail.com', '$2y$12$Ywx2kyy7Z8hn4YcB3BS0f.67fBKEwSc4Y1p9UUJh4CFPf0hfIsz.O', NULL, NULL, 0, NULL),
(40, 'Burger King', 'me', 'Deçan Dragash Drenas Fushë Kosova Gjakova Kaçanik Lipjan Malisheva Peja Prishtina Prizren Shtërpca Shtime', '+38348984294', 'burgerking274@gmail.com', '$2y$12$Md5tjUVLrs92r3LmyG0dH.Txut3HXNvttMtjVWwjT5RaTYJ7m5tv2', NULL, NULL, 0, NULL),
(41, 'White Castle', 'me', 'Deçan Dragash Gjakova Gjilan Klina Lipjan Malisheva Obiliq Peja Rahovec Shtërpca Viti Vushtrri', '+38349083571', 'whiteCastle9274@gmail.com', '$2y$12$mH5MC4.0wxitl4bpPbJGTe0teAhNTx3KmOxhSA6gWWVEYrDSltWsC', NULL, NULL, 0, NULL),
(42, 'Hardee\'s', 'me', 'Dragash Ferizaj Fushë Kosova Gjilan Malisheva Mitrovica Peja Prishtina Skenderaj Suhareka Shtime', '+38349092394', 'hardees394@gmail.com', '$2y$12$WUYxhe1pDl58IgLSpZv90OLbY1db8wi7Dng/PXg2Te3E1JtyWOZGO', NULL, NULL, 0, NULL),
(43, 'Panda Express', 'me', 'Deçan Dragash Drenas Fushë Kosova Kaçanik Lipjan Malisheva Peja Podujeva Prizren Rahovec Skenderaj', '+38344185324', 'pandaexpress532@gmail.com', '$2y$12$3bDyCkOldElSPPVd4pRzTOxQp8E.mXb4a3tPGol35X3yzvr5A6hKS', NULL, NULL, 0, NULL),
(44, 'Starbucks', 'me', 'Deçan Dragash Drenas Ferizaj Fushë Kosova Gjilan Istog Kaçanik Lipjan Malisheva Peja Prishtina Prizren Rahovec', '+38344832784', 'starbucks9283@gmail.com', '$2y$12$hC.k1GvQFcafd7lo.Ia8kOU82Ls1UPZdzUDzYFG.l87mg9VSiv7d.', NULL, NULL, 0, NULL),
(45, 'In-N-Out', 'me', 'Deçan Drenas Fushë Kosova Gjakova Kaçanik Klina Mitrovica Peja Skenderaj Shtërpca Shtime Viti', '+38344286472', 'inNout324@gmail.com', '$2y$12$V71zav5pj1bp1RZKJKK5JuUpKApQC0IDeD.xXhNBkajT3tBe/BlPK', NULL, NULL, 0, NULL),
(46, 'Baskin-Robbins', 'me', 'Deçan Ferizaj Fushë Kosova Gjakova Gjilan Klina Lipjan Prishtina Prizren', '+38344932714', 'baskinrobbins283@gmail.com', '$2y$12$cyDwN0KxmnQyojFujQ5dLuVxS/LCTNheI8pjMGujJrUr0rPleM2tO', NULL, NULL, 0, NULL),
(48, 'Enes', 'Me', 'Dragash Drenas Ferizaj Fushë Kosova', '+38349608145', 'enesramani2323@gmail.com', '$2y$12$GuwBCT5HklDoC1F.szhCDOXFCkYO6826zY52MCZvAnz4H5EmdfgmK', NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `starbucks`
--

CREATE TABLE `starbucks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subway`
--

CREATE TABLE `subway` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subway`
--

INSERT INTO `subway` (`id`, `item_name`, `item_price`, `item_picture`, `created_at`, `updated_at`) VALUES
(1, 'Cut combo', '5.50', 'fDVHqsOYCjhRBKLdxoSwYjbtonvj4fzIqTOrqeYP.png', NULL, NULL),
(2, 'Italian BMT', '6.75', 'kaIXbQ0q0dNMuEu5Z626QzCWpAbSMrslDnKbdM9f.png', NULL, NULL),
(3, 'Spicy Italia', '5.50', 'yEJAcuQa3SuN70Vrj2qoRqUNKd5aMlezgXmiT0xQ.png', NULL, NULL),
(4, 'Tuna', '6.75', 'IO8llhamiR78mqQr4tZ3ADG9nJcHmoYEqdVo6z7Z.png', NULL, NULL),
(5, 'Veggie Patty', '6.75', '0JTxqQvhzkosnY5lvVQJG7GcBZnk6zmarU29gJbz.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `taco_bell`
--

CREATE TABLE `taco_bell` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `taco_bell`
--

INSERT INTO `taco_bell` (`id`, `item_name`, `item_price`, `item_picture`, `created_at`, `updated_at`) VALUES
(1, 'Double Stack', '1.99', 'dZr27GEH1rROnBcUoAl7wTN1r0tQKY2y46FUr7aL.png', NULL, NULL),
(2, 'Soft Taco2', '1.79', '4x79ULmnTjeYo5VzWlXYnnQcRxU5m9V185MbOkAl.png', NULL, NULL),
(3, 'Crunchy Taco2', '1.79', 'Es7bxLIhUU1wTwbmqCV8QyWDykTA2cXrTUDyS4Sk.png', NULL, NULL),
(4, 'Pizza Combo', '9.79', 'lcRgKSmEBmrnVVFbUAeWfkg6ZAgSWrPYHdTOBEtL.png', NULL, NULL),
(5, 'Crunchwrap', '8.59', 'quewjNmYeKTUCJyb1ysK8XQ0OpQDUzd28d90hI9g.png', NULL, NULL),
(6, 'Stacker', '2.19', 'mFo7Ouy1xczPh8QRbmrPh7qR8FVmEd8gkoQxtEK9.png', NULL, NULL),
(7, 'Bean Burrito', '1.79', 'DE91Iv1VemfLJTeuMkDY21gcYCag9HQg4vFZmJKd.png', NULL, NULL),
(8, 'Red Sauce', '0.45', 'fECJJsWSfBQEbNIZJM7qyd4s5oYRTrLT6pusOAfG.png', NULL, NULL),
(9, 'Hot Sauce', '1.60', '6bYu29nRTbQ2xlnVX4GqJLKOzbXme7xPZS4UTrpv.png', NULL, NULL),
(10, 'Chipotle', '2.70', 'Sw94p13xqTaAqf4jCOeVcx5fyHudVBKARStgMVrK.png', NULL, NULL),
(11, 'Veggie Patty', '6.75', 'YYww4j7d6BiaB0T1SCzbY0rwTPE5Q9pp6wkGAJ5K.png', NULL, NULL),
(12, 'Nacho Bell', '5.69', 'Goeq8Kxa7z3SWOqnp2y0TxrSgZt6v4A1SpNz2Y4W.png', NULL, NULL),
(13, 'Nacho taco', '5.69', '4rJuBQvtgsYm7k7XbaGlFcrLRmbnMiaNzAseIpWR.png', NULL, NULL),
(14, 'Nacho fjhb', '5.69', 'zBLwCiQAqJOQSVO2PbYFRcLaRelPtGL1Ocj2Mu5O.png', NULL, NULL),
(15, 'Nacho kuhg', '5.69', '4XsrHyJp0y6LfMKz0jAZGm6HdOI7YezO439LfniB.png', NULL, NULL),
(16, 'Nacho kjfh', '5.69', 'ifX0tHR7c8wqiFV1vxGTK0lYPa48rXn0S8359RgM.png', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `white_castle`
--

CREATE TABLE `white_castle` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_price` varchar(255) NOT NULL,
  `item_picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baskin-robbins`
--
ALTER TABLE `baskin-robbins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `burger_king`
--
ALTER TABLE `burger_king`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `domino's`
--
ALTER TABLE `domino's`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dunkin'_donuts`
--
ALTER TABLE `dunkin'_donuts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enes`
--
ALTER TABLE `enes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hardee's`
--
ALTER TABLE `hardee's`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `in-n-out`
--
ALTER TABLE `in-n-out`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kfc`
--
ALTER TABLE `kfc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mcdonalds`
--
ALTER TABLE `mcdonalds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `panda_express`
--
ALTER TABLE `panda_express`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pizza_hut`
--
ALTER TABLE `pizza_hut`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `starbucks`
--
ALTER TABLE `starbucks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subway`
--
ALTER TABLE `subway`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `taco_bell`
--
ALTER TABLE `taco_bell`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `white_castle`
--
ALTER TABLE `white_castle`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baskin-robbins`
--
ALTER TABLE `baskin-robbins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `burger_king`
--
ALTER TABLE `burger_king`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `domino's`
--
ALTER TABLE `domino's`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `dunkin'_donuts`
--
ALTER TABLE `dunkin'_donuts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `enes`
--
ALTER TABLE `enes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hardee's`
--
ALTER TABLE `hardee's`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `in-n-out`
--
ALTER TABLE `in-n-out`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kfc`
--
ALTER TABLE `kfc`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `mcdonalds`
--
ALTER TABLE `mcdonalds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `panda_express`
--
ALTER TABLE `panda_express`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pizza_hut`
--
ALTER TABLE `pizza_hut`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `starbucks`
--
ALTER TABLE `starbucks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subway`
--
ALTER TABLE `subway`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `taco_bell`
--
ALTER TABLE `taco_bell`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `white_castle`
--
ALTER TABLE `white_castle`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
