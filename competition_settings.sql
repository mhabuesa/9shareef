-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 17, 2026 at 11:52 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `love9`
--

-- --------------------------------------------------------

--
-- Table structure for table `competition_settings`
--

CREATE TABLE `competition_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `info_details` json NOT NULL,
  `topics` json NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `competition_settings`
--

INSERT INTO `competition_settings` (`id`, `info_details`, `topics`, `created_at`, `updated_at`) VALUES
(1, '[{\"fee\": 200, \"age_to\": 11, \"age_from\": 1, \"waz_topic\": \"হযরত আবনাউ রসূলিল্লাহ ছল্লাল্লাহু আলাইহি ওয়া সাল্লাম ও হযরত বানাতু রসূলিল্লাহ ছল্লাল্লাহু আলাইহি ওয়া সাল্লাম উনাদের বেমেছাল মহাসম্মানিত বুলন্দী শান মুবারক।\", \"group_name\": \"শিশু\"}, {\"fee\": 300, \"age_to\": 18, \"age_from\": 12, \"waz_topic\": \"হযরত আহলু বাইত শরীফ আলাইহিমুস সালাম উনাদের বেমেছাল মহাসম্মানিত বুলন্দী শান মুবারক\", \"group_name\": \"কিশোর\"}, {\"fee\": 400, \"age_to\": 25, \"age_from\": 19, \"waz_topic\": \"নূরে মুজাসসাম হাবীবুল্লাহ হুযূর পাক ছল্লাল্লাহু আলাইহি ওয়া সাল্লাম উনার মহাসম্মানিত ও মহাপবিত্র আব্বা-আম্মা আলাইহিমাস সালাম উনাদের বেমেছাল মহাসম্মানিত বুলন্দী শান মুবারক\", \"group_name\": \"ছাত্র\"}, {\"fee\": 700, \"age_to\": 40, \"age_from\": 26, \"waz_topic\": \"হযরত উম্মাহাতুল মু\'মিনীন আলাইহিন্নাস সালাম উনাদের বেমেছাল মহাসম্মানিত বুলন্দী শান মুবারক\", \"group_name\": \"যুব\"}, {\"fee\": 1000, \"age_to\": 50, \"age_from\": 41, \"waz_topic\": \"ইলমে তাছাওউফ ও কামিল শায়েখ উনার ফযীলত ও গুরুত্ব, আদব এবং ক্বলবী যিকিরের আবশ্যকতা।\", \"group_name\": \"প্রৌঢ়\"}, {\"fee\": 1000, \"age_to\": null, \"age_from\": 51, \"waz_topic\": \"নূরে মুজাসসাম, হাবীবুল্লাহ হুযূর পাক ছল্লাল্লাহু আলাইহি ওয়া সাল্লাম উনার বেমেছাল মহাসম্মানিত বুলন্দী শান মুবারক।\", \"group_name\": \"বয়স্ক\"}]', '{\"1\": \"হিফযুল কুরআন শরীফ\", \"2\": \"হিফযুল হাদীছ শরীফ\", \"3\": \"হামদ শরীফ, না’ত শরীফ, ক্বাছীদাহ শরীফ, কবিতা আবৃতি\", \"4\": \"আযান ও ইক্বামত\", \"5\": \"জুমুয়া ও ঈদের খুতবা\", \"6\": \"মৌলিক আক্বীদাসমূহ\", \"7\": \"বিতির নামাযের তারতীব\", \"8\": \"মুনযিয়াত ও মুহলিকাতসমূহ\", \"9\": \"বিষয়ভিত্তিক ওয়াজ\", \"10\": \"উপস্থিত ওয়াজ\", \"11\": \"ভাষাভিত্তিক ওয়াজ (আরবী, উর্দু, ফারসী ও ইংরেজি)\", \"12\": \"বিষয়ভিত্তিক রচনা\", \"13\": \"উপস্থিত রচনা\"}', '2026-06-16 22:20:13', '2026-06-16 22:20:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `competition_settings`
--
ALTER TABLE `competition_settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `competition_settings`
--
ALTER TABLE `competition_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
