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
-- Table structure for table `competition_topics`
--

CREATE TABLE `competition_topics` (
  `id` bigint UNSIGNED NOT NULL,
  `bn_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `competition_topics`
--

INSERT INTO `competition_topics` (`id`, `bn_no`, `topic`, `created_at`, `updated_at`) VALUES
(1, '১', 'হিফযুল কুরআন শরীফ', NULL, NULL),
(2, '২', 'হিফযুল হাদীছ শরীফ', NULL, NULL),
(3, '৩', 'হামদ শরীফ, না’ত শরীফ, ক্বাছীদাহ শরীফ, কবিতা আবৃতি', NULL, NULL),
(4, '৪', 'আযান ও ইক্বামত', NULL, NULL),
(5, '৫', 'জুমুয়া ও ঈদের খুতবা', NULL, NULL),
(6, '৬', 'মৌলিক আক্বীদাসমূহ', NULL, NULL),
(7, '৭', 'বিতির নামাযের তারতীব', NULL, NULL),
(8, '৮', 'মুনযিয়াত ও মুহলিকাতসমূহ', NULL, NULL),
(9, '৯', 'বিষয়ভিত্তিক ওয়াজ', NULL, NULL),
(10, '১০', 'উপস্থিত ওয়াজ', NULL, NULL),
(11, '১১', 'ভাষাভিত্তিক ওয়াজ (আরবী, উর্দু, ফারসী ও ইংরেজি)', NULL, NULL),
(12, '১২', 'বিষয়ভিত্তিক রচনা', NULL, NULL),
(13, '১৩', 'উপস্থিত রচনা', NULL, NULL),
(14, '১৪', 'বিষয় ভিত্তিক ওয়াজ ও বিষয় ভিত্তিক রচনার বিষয়সমূহ', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `competition_topics`
--
ALTER TABLE `competition_topics`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `competition_topics`
--
ALTER TABLE `competition_topics`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
