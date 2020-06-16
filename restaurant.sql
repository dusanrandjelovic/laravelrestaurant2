-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 07, 2020 at 07:35 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id12980824_restshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(4, 'Dusan Admin', 'dusanadmin@mail.com', '$2y$10$CjY/SURNyl5aMMMY.tcDD.PtApyQuGoZgW9JGP6SeH6WdaI5agKLu', NULL, '2020-02-20 17:00:29', '2020-02-20 17:00:29');

-- --------------------------------------------------------

--
-- Table structure for table `blogcomments`
--

CREATE TABLE `blogcomments` (
  `id` int(10) UNSIGNED NOT NULL,
  `blog_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `odobren` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogcomments`
--

INSERT INTO `blogcomments` (`id`, `blog_id`, `name`, `body`, `odobren`, `created_at`, `updated_at`) VALUES
(1, 6, 'Dule', 'Moj komentar je ovo.', 1, '2019-11-15 00:00:00', '2020-03-18 22:56:17'),
(2, 6, 'Janko', 'Retsd klkflf lfklfk jfj  dd.', 0, '2019-11-21 19:22:52', '2019-11-21 19:22:52'),
(3, 6, 'Perić', 'Hard core 6.', 0, '2019-11-21 20:36:51', '2019-11-21 20:36:51'),
(4, 6, 'Mile Ilic', 'Inkognito.', 0, '2019-11-21 20:50:28', '2019-11-21 20:50:28'),
(8, 1, 'ja', 'Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 0, '2019-11-22 12:12:56', '2019-11-22 12:12:56'),
(9, 7, 'Tara', 'Odlični ste! Najbolji restoran.', 0, '2019-11-30 14:35:37', '2019-11-30 14:35:37'),
(10, 7, 'Miki', 'Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.', 0, '2019-12-01 21:32:48', '2019-12-01 21:32:48'),
(11, 7, 'Lena', 'Bravo.', 0, '2019-12-02 12:10:11', '2019-12-02 12:10:11'),
(13, 7, 'Zoki Zo', 'Proba 1.', 1, '2020-03-18 20:03:05', '2020-03-18 21:03:33'),
(14, 7, 'Petar', 'Poruka 2. Ovo je.', 0, '2020-03-18 21:15:11', '2020-03-18 21:15:11'),
(15, 6, 'Ivan', 'Odlican sajt.', 0, '2020-03-19 14:49:18', '2020-03-19 14:49:18'),
(16, 7, 'Duan Tam eded', 'Neo. lriiiiiiiiiiiii.', 0, '2020-03-22 15:07:02', '2020-03-22 15:07:02'),
(17, 9, 'Dek Mops', 'Bolje opisi.', 1, '2020-03-24 12:10:40', '2020-03-24 12:12:17');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `admin_id` int(11) NOT NULL,
  `text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `due` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `admin_id`, `text`, `body`, `due`, `created_at`, `updated_at`) VALUES
(1, 1, 'Najnovija vest restorana Lara', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '20. Novembar 2019.', '2019-10-30 17:19:51', '2019-11-20 21:37:29'),
(2, 1, 'Duga tradicija', 'Nas restoran poseduje.', '23. Oktobar 2019.', '2019-10-30 17:23:26', '2019-12-02 02:26:57'),
(5, 2, 'Restoran Lara na novoj lokaciji', 'Cetiri tekst. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '16. Novembar', '2019-11-16 14:57:28', '2019-12-02 00:14:45'),
(6, 2, 'Stvarno nova vest', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing.\r\n\r\nFrwe.', '21. Novembar 2019.', '2019-11-21 10:21:53', '2019-11-21 10:21:53'),
(7, 2, 'Crni petak promocija', 'Svi posetioci dobijaju kupon za 50% popusta.', '28. Novembar, 2019.', '2019-11-28 18:00:04', '2019-11-28 18:00:04'),
(8, 2, 'Novogodišnja specijalna ponuda', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.', '1. Decembar 2019.', '2019-12-02 00:13:12', '2019-12-02 00:13:12'),
(9, 4, 'Opis sajta', 'Ovaj sajt sadrži kontakt formu, formu za rezervaciju, mogućnost ostavljanja komentara na vesti. Admin odobrava vesti koje će biti prikazane.', '23. Mart 2020.', '2020-03-23 17:07:09', '2020-03-23 17:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Zoki', 'zoki@mail.com', 'Zoki iz kontakta.', '2020-03-02 19:43:24', '2020-03-02 19:43:24'),
(2, 'Kin Tir', 'tir@mail.com', 'Porka je poslara 22 marta.', '2020-03-22 10:32:20', '2020-03-22 10:32:20');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ordered` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `ordered`, `created_at`, `updated_at`) VALUES
(1, 'Alonso Dejvis', '333345555', 'Cika Ljubina', 'Huawei Elate - 68.00\r\n                - 3,Apple iPhone X - 983.00\r\n                - 4', '2020-02-17 17:19:29', '2020-02-17 17:19:29'),
(2, 'Pera Peric', '034-222-1111', 'Mirisa 33', 'Portolio  - 100.00\r\n                - 1,Huawei Elate - 68.00\r\n                - 1,Apple iPhone X - 983.00\r\n                - 1', '2020-02-20 19:56:03', '2020-02-20 19:56:03'),
(3, 'Kijanu Rivs', '065/777-333', 'Cika Ljubina 954', 'Hotel - 140.00\r\n                - 3,Portolio  - 100.00\r\n                - 2', '2020-03-04 14:09:31', '2020-03-04 14:09:31'),
(4, 'Hocu Api', '065/777-333', 'Cika Ljubina 12/b-5', 'API - 10200\r\n                - 3', '2020-03-07 13:10:16', '2020-03-07 13:10:16'),
(5, 'Dusan Ra', '065/222-3335', 'Stojana Ilica 56', 'Galerija - 125\r\n                - 2', '2020-03-10 19:03:11', '2020-03-10 19:03:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('radonjicpetar3@gmail.com', '$2y$10$ps6FeUUhv.eGTd3mNc7w2e9MAyA8bJBsFVItyeSkQRwdYcHfh7A2K', '2020-05-04 19:06:46');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `longdesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `longdesc`, `details`, `code`, `photo`, `price`, `category`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Biftek', 'Biftek u sosu od pečuraka sa čeri paradajzom je pravi izbor za vas.', '- Pečurke\r\n- Paradajz\r\n- Zelena salata\r\n- Mleveno meso', 'Ne sadrži alergene.', 'Trenutno nema promocija za ovaj proizvod.\r\nSledeća promocija 20. maja 2020.', 'img/sl1.jpg', 120, 'Gotovajela', 'https://dusanrandjelovic.github.io/apis/', NULL, '2020-03-29 19:55:29'),
(2, 'Tortilja', 'Izuzetan predstavnik meksičke kuhinja je naša ukusna tortilja. ', '- Brašno\r\n- So, šećer\r\n- Paprika\r\n- Pavlaka\r\n- Slanina', 'Sadrži gluten.', 'Trenutno nema promocija za ovaj proizvod.', 'img/sl2.jpg', 200, 'Sendviči', 'https://authlara.000webhostapp.com', NULL, '2020-03-29 19:55:04'),
(3, 'Pomfrit i piletina', 'Pravo uživanje za vaša nepca sa ekstra sirom, slaninom i kulenom.', '- Krompir\r\n- Pileće belo meso\r\n- Kulen\r\n- Slanina\r\n- Sir\r\n- Pavlaka', 'Može da sadrži susam i kikiriki.\r\n', 'Trenutno nema promocija za ovaj proizvod.', 'img/sl3.jpg', 100, 'Gotovajela', 'https://dusanrandjelovicportfolio.000webhostapp.com', NULL, '2020-03-29 19:56:10'),
(4, 'Palačinke', 'Rapsodija ukusa sa ukusnim kakao kremom, jagodama i belom čokoladom.', '- Čokolada\r\n- Jagode\r\n- Lešnik\r\n- Kakao\r\n- Kikiriki\r\n', 'Ne sadrži alergene.', 'Uz dve porcije dobijate besplatno dupli burger.', 'img/sl4.jpg', 140, 'Poslastice', 'https://dusanrandjelovic.github.io/hotel/', NULL, '2020-03-29 19:56:18'),
(5, 'Dupli burger', 'Pravo uživanje za vaša nepca sa ekstra sirom i slaninom.', '- Mleveno meso\r\n- Sir\r\n- Slanina\r\n- Paradajz\r\n- Senf\r\n- Zelena salata\r\n- Pavlaka', 'Sadrži gluten i susam.', 'Trenutno nema promocija za ovaj proizvod.', 'img/sl5.jpg', 195, 'Sendviči', 'https://womensalon.000webhostapp.com/', NULL, '2020-03-29 19:56:31'),
(6, 'Pica sa kulenom', 'Idealno pečena pica sa kulenom i ekstra sirom.', '- Kulen\r\n- Sir\r\n- Kačkavalj\r\n- Kečap\r\n- Šunka\r\n- Brašno\r\n- Kvasac', 'Ne sadrži alergene.', 'Nema promocija.', 'img/sl6.jpg', 210, 'Pice', 'https://berbernica.000webhostapp.com/', NULL, '2020-03-29 19:56:41'),
(7, 'Galete sa medom', 'Tradicionalna poslastica sa medom i voćem.', '- Med\r\n- Jagode\r\n- Trešnje\r\n- Kakao\r\n- Jaja', 'Sadrži gluten.', 'Uz tri porcije dobijate vikend vaučer.', 'img/sl7.jpg', 250, 'Poslastice', 'https://13decverzija.000webhostapp.com/', NULL, '2020-03-29 19:56:50'),
(8, 'DC sendvič', 'Unikatan sendvič našeg restorana sa ekstra sirom.', '- Mleveno meso\r\n- Susam\r\n- Pomfrit\r\n- zelena salata\r\n- Kačkavalj', 'Ne sadrži alergene.', 'Trenutno nema promocija za ovaj proizvod.', 'img/sl8.jpg', 125, 'Sendviči', 'https://dusanrandjelovic.github.io/galerija/', NULL, '2020-03-29 19:57:55'),
(9, 'DC palačinke', 'Napravljena po tradicionalnom receptu, DC palačinka predstavlja eksploziju ukusa.', '- Džem od šipka\r\n- Kupina\r\n- Sirup od borovnice\r\n- Brašno\r\n- Jaja\r\n- Mleko', 'Ne sadrži alergene.', 'Uz dve porcije dobijate mesečni vaučer.', 'img/sl9.jpg', 150, 'Poslastice', 'https://hotelbrand.000webhostapp.com/', NULL, '2020-03-29 19:59:04'),
(10, 'DC Pica', 'Nastala pre 50 godina, DC pica je osnova našeg menija.', '- Šunka\r\n- Sir\r\n- Kačkavalj\r\n- Kiseli krastavci\r\n- Kečap', 'Sadrži gluten kao mogući alergen.', 'Nema trenutnih promocija.', 'img/sl10.jpg', 99, 'Pice', 'https://berbernica.000webhostapp.com/', NULL, '2020-03-29 19:59:15'),
(11, 'Lazanje', 'Jednostavno a ukusno jelo koje možete uvek poručiti.', '- Kečap\r\n- Hrenovka\r\n- Jogurt\r\n- Parmezan\r\n- Pileće belo meso', 'Ne sadrži alergene.', 'Nema promocija.', 'img/sl11.jpg', 80, 'Gotovajela', 'https://onlineprodavnica2.000webhostapp.com/', NULL, '2020-03-29 19:59:24'),
(12, 'Tartar biftek', 'Biftek sa sosom od kupine, ribizle i borovnice se prosto topi u ustima.', '- Mleveno meso\r\n- Ribizle\r\n- Borovnice\r\n- Kupine\r\n- Crni luk', 'Ne sadrži alergene.', 'Nema promocija.', 'img/sl12.jpg', 230, 'Gotovajela', 'https://jedantackasedam.000webhostapp.com/', NULL, '2020-03-29 19:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `recipes`
--

CREATE TABLE `recipes` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredients` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `odobren` tinyint(1) DEFAULT 0,
  `user_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `recipes`
--

INSERT INTO `recipes` (`id`, `title`, `ingredients`, `description`, `photo`, `odobren`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 'Mafin', '500g brašna\r\n 200g šećera\r\n 2 vanilin šećera\r\n 1 prašak za pecivo', 'Pomešati suve sastojke u jednoj posudi, a u drugoj tečne. \r\n \r\n Zatim uliti tečne u suve i izmešati. \r\n \r\n Na stranu odvojite 1/4 čokolade.', 'phpMlMoK6.jpg', 1, 1, '2020-03-26 21:38:00', '2020-03-26 21:41:44'),
(3, 'Bakin kolač', 'jajeta	4\r\nsecera	15 kasika\r\nvanilin secera	2\r\nprasak za pecivo	1\r\nmleka	1 solja (od bele kafe)\r\nulja	16 kasika\r\nbrasna (mekog)', 'Umutimo belanca sa secerom i vanil secerom, potom dodamo zumanca i preostale sastojke, muteci mikserom, dok ne dobijemo homogenu masu.\r\nSmesu vadimo kasikom i sipamo na zagrejanu presu, poklopimo je i pecemo ( vreme pecenja regulise presa).\r\nMogu se dekorisati i sa malo otopljene cokolade ili gotovim prelivom.', 'phpLDOiKI.jpg', 1, 1, '2020-03-27 20:58:58', '2020-03-27 21:02:08'),
(4, 'Krofne', 'brasno	800grama\r\nmleko	400ml\r\nulje	50 ml\r\nso	2 kasicice\r\nsecer	1 kasika\r\nkvasac	50 grama\r\njaja	2', 'Toplo mleko, izmrvljen kvasac i secer izmutiti. Dodati ostale sastojke ( 50 ml ulja, 2 cela jaja, so, brasno i umesiti testo. Prekriti i neka stoji na toplom dok ne nadodje. Premesiti i neka nadolazi ponovo.\r\nNa dasci za mesenje razviti testo na debljinu od 2cm vaditi kalupom ili casom krofne i staviti ih da odstoje bar pola sata jos. prekriti krpom.', 'phpREEw2L.jpg', 1, 1, '2020-04-05 10:34:19', '2020-04-05 19:03:42');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `ime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telefon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brmesta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sektor` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userorders`
--

CREATE TABLE `userorders` (
  `id` int(10) UNSIGNED NOT NULL,
  `ordered` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userorders`
--

INSERT INTO `userorders` (`id`, `ordered`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Portolio  - 100\r\n                - 2', 1, '2020-03-24 21:17:01', '2020-03-24 21:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `userreservations`
--

CREATE TABLE `userreservations` (
  `id` int(10) UNSIGNED NOT NULL,
  `brmesta` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datum` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userreservations`
--

INSERT INTO `userreservations` (`id`, `brmesta`, `datum`, `user_id`, `created_at`, `updated_at`) VALUES
(1, '3', '25. Mart 2020.', 1, '2020-03-24 16:48:32', '2020-03-24 16:48:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'duka silni', 'dukasilni@mail.com', NULL, '$2y$10$o.Y6Nz7hedYVrdOswpU4HuV1zt3BUW/AxHXLqAXWk9JgQdSLA0dvq', NULL, '2020-02-17 18:47:55', '2020-02-17 18:47:55'),
(2, 'Petar Radonjic', 'radonjicpetar3@gmail.com', NULL, '$2y$10$F6NDXrUENG2wdMDMLpgXfei1bzmnx.V6F/aeYAvfW4YfmTFGvfaO.', NULL, '2020-05-04 13:15:00', '2020-05-04 13:15:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `blogcomments`
--
ALTER TABLE `blogcomments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipes`
--
ALTER TABLE `recipes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userorders`
--
ALTER TABLE `userorders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userreservations`
--
ALTER TABLE `userreservations`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blogcomments`
--
ALTER TABLE `blogcomments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `recipes`
--
ALTER TABLE `recipes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userorders`
--
ALTER TABLE `userorders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `userreservations`
--
ALTER TABLE `userreservations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
