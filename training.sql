-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 17, 2024 at 03:40 PM
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
-- Database: `training`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `section_id` tinyint(4) NOT NULL,
  `title` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `section_id`, `title`, `video`, `image`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'আমাদের পরিচয়', 'C_OGuO-0uaA', 'public/uploads/about/1731376311-why-choose.webp', '<ul><li>ওয়েব সলিউশন আইটি হলো একটি প্রতিষ্ঠান যা উত্তরবঙ্গের আইটি খাতকে সমৃদ্ধ করার জন্য কাজ করছে। আমাদের মূল লক্ষ্য হলো দক্ষ জনবল তৈরি করা এবং বেকারত্ব দূর করার মাধ্যমে স্থানীয় যুবকদের জীবনে পরিবর্তন আনা। এই লক্ষ্য বাস্তবায়নের জন্য ওয়েব সলিউশন আইটি বিভিন্ন আইটি কোর্সের পাশাপাশি ফ্রিল্যান্সিংয়ের প্রশিক্ষণ প্রদান করে।&nbsp;</li><li><span style=\"background-color: var(--ct-card-bg); font-size: var(--ct-body-font-size); font-weight: var(--ct-body-font-weight); text-align: var(--ct-body-text-align);\">আমরা ওয়েব ডিজাইন , ওয়েব ডেভেলপমেন্ট, গ্রাফিক্স ডিজাইন , মোবাইল অ্যাপস ডেভেলপমেন্ট, ডিজিটাল মার্কেটিং সহ আরও অনেক গুরুত্বপূর্ণ আইটি সার্ভিস প্রদান করছি, যা দেশীয় এবং আন্তর্জাতিক পর্যায়ে গ্রাহকদের চাহিদা পূরণে সহায়ক। ওয়েব সলিউশন আইটি তরুণদের আইটি খাতে দক্ষ করে গড়ে তুলে তাদেরকে একটি সুনির্দিষ্ট পথে পরিচালিত করতে বদ্ধপরিকর।&nbsp;</span></li><li><span style=\"background-color: var(--ct-card-bg); font-size: var(--ct-body-font-size); font-weight: var(--ct-body-font-weight); text-align: var(--ct-body-text-align);\">ওয়েব সলিউশন আইটি বিশ্বাস করে যে, দক্ষ জনবল তৈরি ও ফ্রিল্যান্সিংয়ের মাধ্যমে তারা উত্তরবঙ্গের বেকারত্বের হার হ্রাস করা সম্ভব এবং একটি শক্তিশালী আইটি ভিত্তিক অর্থনৈতিক অবকাঠামো তৈরি করতে সক্ষম ।</span></li></ul>', 1, '2024-11-12 01:51:52', '2024-11-12 02:03:40'),
(2, 2, 'আমাদের লক্ষ্য', 'z6llDxY5JFs', 'public/uploads/about/1731376438-mission.webp', '<ul><li>ওয়েব সলিউশন আইটি হলো একটি প্রতিষ্ঠান যা উত্তরবঙ্গের আইটি খাতকে সমৃদ্ধ করার জন্য কাজ করছে। আমাদের মূল লক্ষ্য হলো দক্ষ জনবল তৈরি করা এবং বেকারত্ব দূর করার মাধ্যমে স্থানীয় যুবকদের জীবনে পরিবর্তন আনা। এই লক্ষ্য বাস্তবায়নের জন্য ওয়েব সলিউশন আইটি বিভিন্ন আইটি কোর্সের পাশাপাশি ফ্রিল্যান্সিংয়ের প্রশিক্ষণ প্রদান করে।&nbsp;</li><li>আমরা ওয়েব ডিজাইন , ওয়েব ডেভেলপমেন্ট, গ্রাফিক্স ডিজাইন , মোবাইল অ্যাপস ডেভেলপমেন্ট, ডিজিটাল মার্কেটিং সহ আরও অনেক গুরুত্বপূর্ণ আইটি সার্ভিস প্রদান করছি, যা দেশীয় এবং আন্তর্জাতিক পর্যায়ে গ্রাহকদের চাহিদা পূরণে সহায়ক। ওয়েব সলিউশন আইটি তরুণদের আইটি খাতে দক্ষ করে গড়ে তুলে তাদেরকে একটি সুনির্দিষ্ট পথে পরিচালিত করতে বদ্ধপরিকর।&nbsp;</li><li>ওয়েব সলিউশন আইটি বিশ্বাস করে যে, দক্ষ জনবল তৈরি ও ফ্রিল্যান্সিংয়ের মাধ্যমে তারা উত্তরবঙ্গের বেকারত্বের হার হ্রাস করা সম্ভব এবং একটি শক্তিশালী আইটি ভিত্তিক অর্থনৈতিক অবকাঠামো তৈরি করতে সক্ষম ।</li></ul>', 1, '2024-11-12 01:54:02', '2024-11-12 01:59:53');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `category_id`, `image`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 'public/uploads/banner/1731059334slider-1-.jpg', '#', 1, '2024-11-08 09:48:54', '2024-11-08 09:48:54'),
(2, 1, 'public/uploads/banner/1731061399YT-size-2.jpg', '#', 1, '2024-11-08 10:23:19', '2024-11-08 10:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `banner_categories`
--

CREATE TABLE `banner_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banner_categories`
--

INSERT INTO `banner_categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Main Slider (775px x 400px)', 1, '2024-10-18 17:12:04', '2024-10-18 17:46:33'),
(2, 'Slider Bottom', 1, '2024-10-18 17:13:11', '2024-10-30 11:46:13');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT 'public/uploads/category/default.png',
  `meta_title` varchar(191) DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `front_view` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `meta_title`, `meta_description`, `front_view`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Men\'s Collection', 'men\'s-collection', 'public/uploads/category/1730349059-49f31863cc17d101.webp', NULL, NULL, 1, 1, '2024-10-25 14:41:05', '2024-10-31 04:39:51'),
(2, 'Womens Fashion', 'womens-fashion', 'public/uploads/category/1730349037-46de73feaefc28cd.webp', NULL, NULL, 1, 1, '2024-10-25 15:37:18', '2024-10-31 04:30:37'),
(3, 'Cosmetics', 'cosmetics', 'public/uploads/category/1730349028-800e00a6322c6985.webp', NULL, NULL, 0, 1, '2024-10-25 15:39:21', '2024-10-31 04:30:28'),
(4, 'Gadgets', 'gadgets', 'public/uploads/category/1730349017-2e30d5fac47eff64.webp', NULL, NULL, 0, 1, '2024-10-25 15:41:46', '2024-10-31 04:30:17'),
(5, 'Grocery', 'grocery', 'public/uploads/category/1730348993-1400d6186b839cde.webp', NULL, NULL, 1, 1, '2024-10-25 15:47:44', '2024-10-31 04:29:54'),
(6, 'Home & Lifestyle', 'home-&-lifestyle', 'public/uploads/category/1730349005-e7947cc0cc4a6b7c.webp', NULL, NULL, 0, 1, '2024-10-26 15:38:59', '2024-10-31 04:30:05'),
(7, 'Mobile & Tablets', 'mobile-&-tablets', 'public/uploads/category/1730349126-6c22d4999cdb4144.webp', NULL, '<p>Mobile &amp; Tablets</p>', 0, 1, '2024-10-31 04:32:06', '2024-10-31 04:32:06'),
(8, 'TVs & Appliences', 'tvs-&-appliences', 'public/uploads/category/1730349178-4a5fb0c8e0461335.webp', NULL, '<p>TVs &amp; Appliences</p>', 0, 1, '2024-10-31 04:32:58', '2024-10-31 04:32:58'),
(10, 'Home & Kitchen', 'home-&-kitchen', 'public/uploads/category/1730349406-8538d487cd2bc8b7.webp', 'Home & Kitchen', '<p>Home &amp; Kitchen</p>', 0, 1, '2024-10-31 04:36:47', '2024-10-31 04:36:47');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `hotline` varchar(50) DEFAULT NULL,
  `hotmail` varchar(50) DEFAULT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `whatsapp` varchar(255) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `hotline`, `hotmail`, `phone`, `email`, `address`, `whatsapp`, `status`, `created_at`, `updated_at`) VALUES
(1, '01766950986', 'info@websolutionit.com', 'info@websolutionit.com', 'info@websolutionit.com', 'Dinajpur City College, Balubari, Dinajpur', '8801766950986', 1, '2023-01-22 10:35:29', '2024-10-28 17:07:13');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(155) NOT NULL,
  `slug` varchar(99) NOT NULL,
  `subtitle` varchar(99) NOT NULL,
  `duration` varchar(99) NOT NULL,
  `lecture` varchar(99) NOT NULL,
  `schedule` varchar(99) NOT NULL,
  `course_fee` varchar(99) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `module` text NOT NULL,
  `meta_title` varchar(155) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `free_course` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `create_pages`
--

CREATE TABLE `create_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `create_pages`
--

INSERT INTO `create_pages` (`id`, `name`, `slug`, `title`, `description`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Refund & Return Policy', 'refund-&-return-policy', 'Refund & Return Policy', '<ul style=\"padding: 0px 0px 0px 20px; margin-right: 0px; margin-bottom: 0px; margin-left: 0px; border: 0px; list-style: none; color: rgb(33, 37, 41); font-family: Jost, sans-serif;\"><li style=\"margin: 0px; padding: 0px; border: 0px; list-style: initial;\">প্রোডাক্ট সফলভাবে ডেলিভারি করা হলে কোনো প্রকার রিফান্ড প্রযোজ্য হবে না।</li><li style=\"margin: 0px; padding: 0px; border: 0px; list-style: initial;\">প্রোডাক্ট সফলভাবে ডেলিভারি করতে না পারলে অবশ্যই ক্রেতা উক্ত পেমেন্ট ৫ মিনিট থেকে সর্বোচ্চ ১২ ঘন্টার ভিতর রিফান্ড পাবে।</li><li style=\"margin: 0px; padding: 0px; border: 0px; list-style: initial;\">প্রোডাক্ট সফলভাবে ডেলিভারি করতে না পারলে ক্রেতা চাইলে উক্ত পেমেন্টের সমপরিমাণ মূল্যের অন্য প্রোডাক্ট অর্ডার করতে পারবে।</li></ul>', 1, '2023-10-04 07:03:42', '2024-05-13 19:30:47'),
(6, 'Terms & Conditions', 'terms-&-conditions', 'Terms & Conditions', '<div>শপিং ঘরে আপনাকে স্বাগতম<span style=\"background-color: var(--ct-card-bg); font-size: var(--ct-body-font-size); font-weight: var(--ct-body-font-weight); text-align: var(--ct-body-text-align);\">!</span></div>', 1, '2023-10-04 07:04:05', '2024-05-13 18:57:37'),
(7, 'Privacy Policy', 'privacy-policy', 'Privacy Policy', '<div>শপিং ঘোর জন্য গোপনীয়তা নীতি</div><div><br></div><div>গোপনীয়তা নীতি</div><div>শেষ আপডেট: মে 08, 2024</div><div><br></div><div>এই গোপনীয়তা নীতি আপনার তথ্য সংগ্রহ, ব্যবহার এবং প্রকাশের বিষয়ে আমাদের নীতি এবং পদ্ধতিগুলি বর্ণনা করে যখন আপনি পরিষেবাটি ব্যবহার করেন এবং আপনাকে আপনার গোপনীয়তার অধিকার এবং আইন আপনাকে কীভাবে সুরক্ষা দেয় সে সম্পর্কে আপনাকে বলে৷</div><div><br></div><div>আমরা পরিষেবা প্রদান এবং উন্নত করতে আপনার ব্যক্তিগত ডেটা ব্যবহার করি। পরিষেবা ব্যবহার করে, আপনি এই গোপনীয়তা নীতি অনুসারে তথ্য সংগ্রহ এবং ব্যবহারে সম্মত হন। এই গোপনীয়তা নীতিটি গোপনীয়তা নীতি জেনারেটরের সাহায্যে তৈরি করা হয়েছে।</div><div><br></div><div>ব্যাখ্যা এবং সংজ্ঞা</div><div>ব্যাখ্যা</div><div>যে শব্দগুলির প্রাথমিক অক্ষর বড় আকারের হয় সেগুলির অর্থ নিম্নলিখিত শর্তে সংজ্ঞায়িত করা হয়েছে। একবচনে বা বহুবচনে প্রদর্শিত হোক না কেন নিম্নলিখিত সংজ্ঞাগুলির একই অর্থ থাকবে।</div><div><br></div><div>সংজ্ঞা</div><div>এই গোপনীয়তা নীতির উদ্দেশ্যে:</div><div><br></div><div>অ্যাকাউন্ট মানে আমাদের পরিষেবা বা আমাদের পরিষেবার অংশগুলি অ্যাক্সেস করার জন্য আপনার জন্য তৈরি করা একটি অনন্য অ্যাকাউন্ট।</div><div><br></div><div>অ্যাফিলিয়েট মানে এমন একটি সত্তা যা নিয়ন্ত্রণ করে, নিয়ন্ত্রিত হয় বা একটি পক্ষের সাথে সাধারণ নিয়ন্ত্রণে থাকে, যেখানে \"নিয়ন্ত্রণ\" মানে 50% বা তার বেশি শেয়ারের মালিকানা, ইক্যুইটি সুদ বা অন্যান্য সিকিউরিটিজের পরিচালক বা অন্য ব্যবস্থাপনা কর্তৃপক্ষের নির্বাচনের জন্য ভোট দেওয়ার অধিকার .</div><div><br></div><div>কোম্পানি (এই চুক্তিতে \"কোম্পানি\", \"আমরা\", \"আমাদের\" বা \"আমাদের\" হিসাবে উল্লেখ করা হয়েছে) কেনাকাটা ঘোরকে বোঝায়।</div><div><br></div><div>কুকিগুলি হল ছোট ফাইল যা আপনার কম্পিউটার, মোবাইল ডিভাইস বা অন্য কোনো ডিভাইসে ওয়েবসাইট দ্বারা স্থাপন করা হয়, যার অনেকগুলি ব্যবহারের মধ্যে সেই ওয়েবসাইটে আপনার ব্রাউজিং ইতিহাসের বিবরণ রয়েছে।</div><div><br></div><div>দেশ বলতে: বাংলাদেশ</div><div><div>ডিভাইস মানে যে কোনো ডিভাইস যা পরিষেবা অ্যাক্সেস করতে পারে যেমন একটি কম্পিউটার, একটি সেলফোন বা একটি ডিজিটাল ট্যাবলেট।</div><div><br></div><div>ব্যক্তিগত ডেটা হল এমন কোনো তথ্য যা একজন চিহ্নিত বা শনাক্তযোগ্য ব্যক্তির সাথে সম্পর্কিত।</div><div><br></div><div>পরিষেবা ওয়েবসাইট বোঝায়.</div><div><br></div><div>পরিষেবা প্রদানকারী মানে যে কোনও প্রাকৃতিক বা আইনি ব্যক্তি যিনি কোম্পানির পক্ষে ডেটা প্রক্রিয়া করেন। এটি পরিষেবার সুবিধার্থে, কোম্পানির পক্ষ থেকে পরিষেবা প্রদান করার জন্য, পরিষেবা সম্পর্কিত পরিষেবাগুলি সম্পাদন করতে বা পরিষেবাটি কীভাবে ব্যবহার করা হয় তা বিশ্লেষণে কোম্পানিকে সহায়তা করার জন্য কোম্পানির দ্বারা নিযুক্ত তৃতীয় পক্ষের কোম্পানি বা ব্যক্তিদের বোঝায়।</div><div><br></div><div>ব্যবহারের ডেটা স্বয়ংক্রিয়ভাবে সংগৃহীত ডেটা বোঝায়, হয় পরিষেবা ব্যবহার করে বা পরিষেবা পরিকাঠামো থেকে তৈরি হয় (উদাহরণস্বরূপ, একটি পৃষ্ঠা দেখার সময়কাল)।</div><div><br></div><div>ওয়েবসাইট শপিংঘর বোঝায়, shoppingghor.com থেকে অ্যাক্সেসযোগ্য</div><div><br></div><div>আপনি মানে সেই ব্যক্তি যিনি পরিষেবাটি অ্যাক্সেস করছেন বা ব্যবহার করছেন, বা কোম্পানি, বা অন্য আইনি সত্তা যার পক্ষে এই ধরনের ব্যক্তি পরিষেবাটি অ্যাক্সেস করছে বা ব্যবহার করছে, যেমন প্রযোজ্য।</div><div><br></div><div>আপনার ব্যক্তিগত ডেটা সংগ্রহ এবং ব্যবহার করা</div><div>সংগৃহীত ডেটার ধরন</div><div>ব্যক্তিগত তথ্য</div><div>আমাদের পরিষেবা ব্যবহার করার সময়, আমরা আপনাকে কিছু ব্যক্তিগতভাবে শনাক্তযোগ্য তথ্য প্রদান করতে বলতে পারি যা আপনার সাথে যোগাযোগ করতে বা সনাক্ত করতে ব্যবহার করা যেতে পারে। ব্যক্তিগতভাবে সনাক্তযোগ্য তথ্য অন্তর্ভুক্ত হতে পারে, কিন্তু সীমাবদ্ধ নয়:</div><div><br></div><div>ইমেইল ঠিকানা</div><div><br></div><div>ফোন নম্বর</div><div><br></div><div>ঠিকানা, রাজ্য, প্রদেশ, জিপ/পোস্টাল কোড, শহর</div><div><br></div><div>ব্যবহারের ডেটা</div><div><br></div><div>ব্যবহারের ডেটা</div><div>পরিষেবা ব্যবহার করার সময় ব্যবহারের ডেটা স্বয়ংক্রিয়ভাবে সংগ্রহ করা হয়।</div><div><div>ব্যবহারের ডেটাতে আপনার ডিভাইসের ইন্টারনেট প্রোটোকল ঠিকানা (যেমন আইপি ঠিকানা), ব্রাউজারের ধরন, ব্রাউজারের সংস্করণ, আপনি যে আমাদের পরিষেবার পৃষ্ঠাগুলি দেখেন, আপনার দেখার সময় এবং তারিখ, সেই পৃষ্ঠাগুলিতে ব্যয় করা সময়, অনন্য ডিভাইসের মতো তথ্য অন্তর্ভুক্ত থাকতে পারে। শনাক্তকারী এবং অন্যান্য ডায়গনিস্টিক ডেটা।</div><div><br></div><div>যখন আপনি একটি মোবাইল ডিভাইসের মাধ্যমে বা এর মাধ্যমে পরিষেবাটি অ্যাক্সেস করেন, তখন আমরা স্বয়ংক্রিয়ভাবে কিছু তথ্য সংগ্রহ করতে পারি, যার মধ্যে আপনি যে ধরনের মোবাইল ডিভাইস ব্যবহার করেন, আপনার মোবাইল ডিভাইসের অনন্য আইডি, আপনার মোবাইল ডিভাইসের আইপি ঠিকানা, আপনার মোবাইল সহ, কিন্তু সীমাবদ্ধ নয় অপারেটিং সিস্টেম, আপনি যে ধরনের মোবাইল ইন্টারনেট ব্রাউজার ব্যবহার করেন, অনন্য ডিভাইস শনাক্তকারী এবং অন্যান্য ডায়াগনস্টিক ডেটা।</div><div><br></div><div>আপনি যখনই আমাদের পরিষেবাতে যান বা যখন আপনি কোনও মোবাইল ডিভাইসের মাধ্যমে বা মাধ্যমে পরিষেবাটি অ্যাক্সেস করেন তখন আমরা আপনার ব্রাউজার যে তথ্য পাঠায় তা সংগ্রহ করতে পারি।</div><div><br></div><div>ট্র্যাকিং প্রযুক্তি এবং কুকিজ</div><div>আমরা আমাদের পরিষেবাতে কার্যকলাপ ট্র্যাক করতে এবং নির্দিষ্ট তথ্য সংরক্ষণ করতে কুকিজ এবং অনুরূপ ট্র্যাকিং প্রযুক্তি ব্যবহার করি। ট্র্যাকিং প্রযুক্তিগুলি হল বীকন, ট্যাগ এবং স্ক্রিপ্টগুলি তথ্য সংগ্রহ ও ট্র্যাক করতে এবং আমাদের পরিষেবার উন্নতি ও বিশ্লেষণ করতে। আমরা যে প্রযুক্তিগুলি ব্যবহার করি তাতে অন্তর্ভুক্ত থাকতে পারে:</div><div><br></div><div>কুকিজ বা ব্রাউজার কুকিজ। কুকি হল আপনার ডিভাইসে রাখা একটি ছোট ফাইল। আপনি আপনার ব্রাউজারকে সমস্ত কুকি প্রত্যাখ্যান করতে বা কখন একটি কুকি পাঠানো হচ্ছে তা নির্দেশ করতে পারেন। যাইহোক, আপনি যদি কুকিজ গ্রহণ না করেন, আপনি আমাদের পরিষেবার কিছু অংশ ব্যবহার করতে পারবেন না। যদি না আপনি আপনার ব্রাউজার সেটিং সামঞ্জস্য করেন যাতে এটি কুকিজ প্রত্যাখ্যান করে, আমাদের পরিষেবা কুকিজ ব্যবহার করতে পারে।</div><div>ওয়েব বীকন। আমাদের পরিষেবার কিছু বিভাগ এবং আমাদের ইমেলগুলিতে ওয়েব বীকন নামে পরিচিত ছোট ইলেকট্রনিক ফাইল থাকতে পারে (এছাড়াও পরিষ্কার gifs, পিক্সেল ট্যাগ এবং একক-পিক্সেল gif হিসাবে উল্লেখ করা হয়) যা কোম্পানিকে অনুমতি দেয়, উদাহরণস্বরূপ, সেই সমস্ত পৃষ্ঠাগুলি পরিদর্শন করা ব্যবহারকারীদের গণনা করার জন্য অথবা একটি ইমেল এবং অন্যান্য সম্পর্কিত ওয়েবসাইটের পরিসংখ্যানের জন্য (উদাহরণস্বরূপ, একটি নির্দিষ্ট বিভাগের জনপ্রিয়তা রেকর্ড করা এবং সিস্টেম এবং সার্ভারের অখণ্ডতা যাচাই করা)।</div><div>কুকিজ \"অস্থির\" বা \"সেশন\" কুকি হতে পারে। আপনি অফলাইনে গেলে আপনার ব্যক্তিগত কম্পিউটার বা মোবাইল ডিভাইসে স্থায়ী কুকিজ থাকে, যখন আপনি আপনার ওয়েব ব্রাউজার বন্ধ করার সাথে সাথে সেশন কুকিজ মুছে ফেলা হয়। আপনি TermsFeed ওয়েবসাইট নিবন্ধে কুকিজ সম্পর্কে আরও জানতে পারেন।</div><div><br></div><div>আমরা সেশন এবং ক্রমাগত কুকি উভয়ই ব্যবহার করি নিচের উদ্দেশ্যগুলির জন্য:</div><div><br></div><div>প্রয়োজনীয়/প্রয়োজনীয় কুকিজ</div><div><br></div><div>প্রকার: সেশন কুকিজ</div><div><div>দ্বারা পরিচালিত: আমাদের</div><div><br></div><div>উদ্দেশ্য: এই কুকিগুলি আপনাকে ওয়েবসাইটের মাধ্যমে উপলব্ধ পরিষেবাগুলি সরবরাহ করতে এবং এর কিছু বৈশিষ্ট্য ব্যবহার করতে সক্ষম করার জন্য অপরিহার্য৷ তারা ব্যবহারকারীদের প্রমাণীকরণ করতে এবং ব্যবহারকারীর অ্যাকাউন্টের প্রতারণামূলক ব্যবহার প্রতিরোধ করতে সহায়তা করে। এই কুকিজ ব্যতীত, আপনি যে পরিষেবাগুলির জন্য অনুরোধ করেছেন তা প্রদান করা যাবে না এবং আমরা কেবলমাত্র সেই পরিষেবাগুলি আপনাকে প্রদান করার জন্য এই কুকিগুলি ব্যবহার করি।</div><div><br></div><div>কুকিজ নীতি / বিজ্ঞপ্তি গ্রহণ কুকিজ</div><div><br></div><div>প্রকার: স্থায়ী কুকিজ</div><div><br></div><div>দ্বারা পরিচালিত: আমাদের</div><div><br></div><div>উদ্দেশ্য: এই কুকিগুলি চিহ্নিত করে যে ব্যবহারকারীরা ওয়েবসাইটে কুকির ব্যবহার স্বীকার করেছেন কিনা৷</div><div><br></div><div>কার্যকারিতা কুকিজ</div><div><br></div><div>প্রকার: স্থায়ী কুকিজ</div><div><br></div><div>দ্বারা পরিচালিত: আমাদের</div><div><br></div><div>উদ্দেশ্য: এই কুকিগুলি আমাদেরকে আপনি ওয়েবসাইট ব্যবহার করার সময় আপনার করা পছন্দগুলি মনে রাখার অনুমতি দেয়, যেমন আপনার লগইন বিবরণ বা ভাষা পছন্দ মনে রাখা। এই কুকিগুলির উদ্দেশ্য হল আপনাকে আরও ব্যক্তিগত অভিজ্ঞতা প্রদান করা এবং প্রতিবার আপনি ওয়েবসাইটটি ব্যবহার করার সময় আপনার পছন্দগুলি পুনরায় প্রবেশ করা এড়াতে।</div><div><br></div><div>আমরা যে কুকিগুলি ব্যবহার করি এবং কুকি সংক্রান্ত আপনার পছন্দগুলি সম্পর্কে আরও তথ্যের জন্য, অনুগ্রহ করে আমাদের কুকিজ নীতি বা আমাদের গোপনীয়তা নীতির কুকিজ বিভাগে যান৷</div><div><br></div><div>আপনার ব্যক্তিগত তথ্য ব্যবহার</div><div>কোম্পানি নিম্নলিখিত উদ্দেশ্যে ব্যক্তিগত ডেটা ব্যবহার করতে পারে:</div><div><br></div><div>আমাদের পরিষেবা প্রদান এবং বজায় রাখা, আমাদের পরিষেবার ব্যবহার নিরীক্ষণ সহ।</div><div><div>আপনার অ্যাকাউন্ট পরিচালনা করতে: পরিষেবার ব্যবহারকারী হিসাবে আপনার নিবন্ধন পরিচালনা করতে। আপনি যে ব্যক্তিগত ডেটা প্রদান করেন তা আপনাকে পরিষেবার বিভিন্ন কার্যকারিতাগুলিতে অ্যাক্সেস দিতে পারে যা একটি নিবন্ধিত ব্যবহারকারী হিসাবে আপনার কাছে উপলব্ধ।</div><div><br></div><div>একটি চুক্তি সম্পাদনের জন্য: পরিষেবার মাধ্যমে আপনি যে পণ্য, আইটেম বা পরিষেবাগুলি কিনেছেন বা আমাদের সাথে অন্য কোনও চুক্তি করেছেন তার জন্য ক্রয় চুক্তির বিকাশ, সম্মতি এবং উদ্যোগ।</div><div><br></div><div>আপনার সাথে যোগাযোগ করতে: ইমেল, টেলিফোন কল, এসএমএস বা অন্যান্য সমতুল্য বৈদ্যুতিন যোগাযোগের মাধ্যমে আপনার সাথে যোগাযোগ করতে, যেমন নিরাপত্তা আপডেট সহ কার্যকারিতা, পণ্য বা চুক্তিবদ্ধ পরিষেবাগুলির সাথে সম্পর্কিত আপডেট বা তথ্যমূলক যোগাযোগ সম্পর্কিত মোবাইল অ্যাপ্লিকেশনের পুশ বিজ্ঞপ্তি, যখন তাদের বাস্তবায়নের জন্য প্রয়োজন বা যুক্তিসঙ্গত।</div><div><br></div><div>আপনাকে খবর, বিশেষ অফার এবং অন্যান্য পণ্য, পরিষেবা এবং ইভেন্টগুলির বিষয়ে সাধারণ তথ্য সরবরাহ করতে যা আমরা অফার করি যা আপনি ইতিমধ্যেই কিনেছেন বা অনুসন্ধান করেছেন সেগুলির অনুরূপ যদি না আপনি এই ধরনের তথ্য না পাওয়ার সিদ্ধান্ত নেন৷</div><div><br></div><div>আপনার অনুরোধগুলি পরিচালনা করতে: আমাদের কাছে আপনার অনুরোধগুলি উপস্থিত এবং পরিচালনা করতে।</div><div><br></div><div>ব্যবসায়িক স্থানান্তরের জন্য: আমরা আপনার তথ্য মূল্যায়ন বা পরিচালনা করতে ব্যবহার করতে পারি একীভূতকরণ, বিভক্তকরণ, পুনর্গঠন, পুনর্গঠন, বিলুপ্তি, বা আমাদের কিছু বা সমস্ত সম্পত্তির অন্যান্য বিক্রয় বা স্থানান্তর, তা চলমান উদ্বেগ হিসাবে বা দেউলিয়া হওয়া, অবসানের অংশ হিসাবে, বা অনুরূপ প্রক্রিয়া, যেখানে আমাদের পরিষেবা ব্যবহারকারীদের সম্পর্কে আমাদের কাছে থাকা ব্যক্তিগত ডেটা স্থানান্তরিত সম্পদের মধ্যে রয়েছে।</div><div><br></div><div>অন্যান্য উদ্দেশ্যে: আমরা অন্যান্য উদ্দেশ্যে আপনার তথ্য ব্যবহার করতে পারি, যেমন ডেটা বিশ্লেষণ, ব্যবহারের প্রবণতা সনাক্ত করা, আমাদের প্রচারমূলক প্রচারণার কার্যকারিতা নির্ধারণ এবং আমাদের পরিষেবা, পণ্য, পরিষেবা, বিপণন এবং আপনার অভিজ্ঞতার মূল্যায়ন ও উন্নতি করতে।</div><div><br></div><div>আমরা নিম্নলিখিত পরিস্থিতিতে আপনার ব্যক্তিগত তথ্য শেয়ার করতে পারি:</div><div><div>পরিষেবা প্রদানকারীদের সাথে: আপনার সাথে যোগাযোগ করার জন্য আমরা আমাদের পরিষেবার ব্যবহার নিরীক্ষণ এবং বিশ্লেষণ করতে পরিষেবা প্রদানকারীদের সাথে আপনার ব্যক্তিগত তথ্য শেয়ার করতে পারি।</div><div>ব্যবসায়িক স্থানান্তরের জন্য: আমরা আপনার ব্যক্তিগত তথ্য শেয়ার বা হস্তান্তর করতে পারি যে কোনো একীভূতকরণ, কোম্পানির সম্পদ বিক্রি, অর্থায়ন, বা আমাদের ব্যবসার একটি অংশ অন্য কোম্পানিতে অধিগ্রহণের সাথে বা আলোচনার সময়।</div><div>অ্যাফিলিয়েটদের সাথে: আমরা আপনার তথ্য আমাদের সহযোগীদের সাথে শেয়ার করতে পারি, সেক্ষেত্রে আমরা সেই অ্যাফিলিয়েটদের এই গোপনীয়তা নীতি মেনে চলতে চাই। অ্যাফিলিয়েটদের মধ্যে রয়েছে আমাদের মূল কোম্পানি এবং অন্য কোনো সহযোগী, যৌথ উদ্যোগ অংশীদার বা অন্যান্য কোম্পানি যা আমরা নিয়ন্ত্রণ করি বা যেগুলি আমাদের সাথে সাধারণ নিয়ন্ত্রণে থাকে।</div><div>ব্যবসায়িক অংশীদারদের সাথে: আমরা আপনাকে কিছু পণ্য, পরিষেবা বা প্রচার অফার করার জন্য আমাদের ব্যবসায়িক অংশীদারদের সাথে আপনার তথ্য শেয়ার করতে পারি।</div><div>অন্যান্য ব্যবহারকারীদের সাথে: আপনি যখন ব্যক্তিগত তথ্য শেয়ার করেন বা অন্যথায় অন্যান্য ব্যবহারকারীদের সাথে পাবলিক এলাকায় ইন্টারঅ্যাক্ট করেন, তখন এই ধরনের তথ্য সমস্ত ব্যবহারকারীদের দ্বারা দেখা যেতে পারে এবং সর্বজনীনভাবে বাইরে বিতরণ করা হতে পারে।</div><div>আপনার সম্মতিতে: আমরা আপনার সম্মতিতে অন্য কোনো উদ্দেশ্যে আপনার ব্যক্তিগত তথ্য প্রকাশ করতে পারি।</div><div>আপনার ব্যক্তিগত তথ্য ধারণ</div><div>এই গোপনীয়তা নীতিতে নির্ধারিত উদ্দেশ্যগুলির জন্য যতক্ষণ প্রয়োজন ততক্ষণ কোম্পানি আপনার ব্যক্তিগত ডেটা সংরক্ষণ করবে। আমরা আমাদের আইনি বাধ্যবাধকতাগুলি মেনে চলার জন্য প্রয়োজনীয় পরিমাণে আপনার ব্যক্তিগত ডেটা বজায় রাখব এবং ব্যবহার করব (উদাহরণস্বরূপ, প্রযোজ্য আইন মেনে চলার জন্য যদি আমাদের আপনার ডেটা ধরে রাখতে হয়), বিরোধগুলি সমাধান করতে এবং আমাদের আইনি চুক্তি এবং নীতিগুলি প্রয়োগ করতে হয়।</div><div><br></div><div>কোম্পানি অভ্যন্তরীণ বিশ্লেষণের উদ্দেশ্যে ব্যবহারের ডেটাও ধরে রাখবে। ব্যবহারের ডেটা সাধারণত অল্প সময়ের জন্য ধরে রাখা হয়, যখন এই ডেটা নিরাপত্তা জোরদার করতে বা আমাদের পরিষেবার কার্যকারিতা উন্নত করতে ব্যবহার করা হয়, অথবা আমরা এই ডেটা দীর্ঘ সময়ের জন্য ধরে রাখতে আইনিভাবে বাধ্য।</div><div><br></div><div>আপনার ব্যক্তিগত তথ্য স্থানান্তর</div><div>আপনার তথ্য, ব্যক্তিগত ডেটা সহ, কোম্পানির অপারেটিং অফিসে এবং অন্য যেকোন জায়গায় যেখানে প্রক্রিয়াকরণের সাথে জড়িত দলগুলি অবস্থিত সেখানে প্রক্রিয়া করা হয়। এর মানে হল যে এই তথ্যগুলি আপনার রাজ্য, প্রদেশ, দেশ বা অন্যান্য সরকারী এখতিয়ারের বাইরে অবস্থিত কম্পিউটারগুলিতে — এবং রক্ষণাবেক্ষণ করা যেতে পারে যেখানে ডেটা সুরক্ষা আইনগুলি আপনার এখতিয়ারের থেকে আলাদা হতে পারে৷</div><div><br></div><div>এই গোপনীয়তা নীতিতে আপনার সম্মতি এবং এই ধরনের তথ্য আপনার জমা দেওয়ার পরে সেই স্থানান্তরের আপনার চুক্তির প্রতিনিধিত্ব করে।</div><div><div>আপনার ডেটা নিরাপদে এবং এই গোপনীয়তা নীতি অনুসারে ব্যবহার করা হয় তা নিশ্চিত করার জন্য কোম্পানি যুক্তিসঙ্গতভাবে প্রয়োজনীয় সমস্ত পদক্ষেপ নেবে এবং আপনার ব্যক্তিগত ডেটা কোনও সংস্থা বা কোনও দেশে স্থানান্তর করা হবে না যদি না নিরাপত্তা সহ পর্যাপ্ত নিয়ন্ত্রণ না থাকে। আপনার ডেটা এবং অন্যান্য ব্যক্তিগত তথ্য।</div><div><br></div><div>আপনার ব্যক্তিগত তথ্য মুছুন</div><div>আমরা আপনার সম্পর্কে যে ব্যক্তিগত ডেটা সংগ্রহ করেছি তা মুছে ফেলতে আমরা সাহায্য করি তা মুছে ফেলার বা অনুরোধ করার অধিকার আপনার আছে।</div><div><br></div><div>আমাদের পরিষেবা আপনাকে পরিষেবার মধ্যে থেকে আপনার সম্পর্কে কিছু তথ্য মুছে ফেলার ক্ষমতা দিতে পারে৷</div><div><br></div><div>আপনি আপনার অ্যাকাউন্টে সাইন ইন করে যেকোনো সময় আপনার তথ্য আপডেট করতে, সংশোধন করতে বা মুছে ফেলতে পারেন, যদি আপনার কাছে থাকে, এবং অ্যাকাউন্ট সেটিংস বিভাগে যান যা আপনাকে আপনার ব্যক্তিগত তথ্য পরিচালনা করতে দেয়। এছাড়াও আপনি আমাদের সাথে যোগাযোগ করতে পারেন অ্যাক্সেসের অনুরোধ করতে, সংশোধন করতে বা মুছে ফেলার জন্য যে কোনো ব্যক্তিগত তথ্য আপনি আমাদের প্রদান করেছেন।</div><div><br></div><div>অনুগ্রহ করে মনে রাখবেন, যাইহোক, যখন আমাদের আইনগত বাধ্যবাধকতা বা আইনগত ভিত্তি থাকে তখন আমাদের কিছু তথ্য ধরে রাখতে হবে।</div><div><br></div><div>আপনার ব্যক্তিগত তথ্য প্রকাশ</div><div>ব্যবসায়িক লেনদেন</div><div>কোম্পানি যদি একীভূতকরণ, অধিগ্রহণ বা সম্পদ বিক্রির সাথে জড়িত থাকে, তাহলে আপনার ব্যক্তিগত ডেটা স্থানান্তরিত হতে পারে। আপনার ব্যক্তিগত ডেটা স্থানান্তরিত হওয়ার আগে এবং একটি ভিন্ন গোপনীয়তা নীতির অধীন হওয়ার আগে আমরা বিজ্ঞপ্তি প্রদান করব।</div><div><br></div><div>আইন প্রয়োগকারী</div><div>কিছু নির্দিষ্ট পরিস্থিতিতে, আইন দ্বারা বা সরকারী কর্তৃপক্ষের (যেমন একটি আদালত বা সরকারী সংস্থা) দ্বারা বৈধ অনুরোধের প্রতিক্রিয়ায় এটি করার প্রয়োজন হলে কোম্পানিকে আপনার ব্যক্তিগত ডেটা প্রকাশ করতে হতে পারে।</div><div><br></div><div>অন্যান্য আইনি প্রয়োজনীয়তা</div><div>কোম্পানি আপনার ব্যক্তিগত ডেটা প্রকাশ করতে পারে এই বিশ্বাসে যে এই ধরনের পদক্ষেপের জন্য প্রয়োজনীয়:</div><div><div>একটি আইনি বাধ্যবাধকতা মেনে চলুন</div><div>কোম্পানির অধিকার বা সম্পত্তি রক্ষা ও রক্ষা করুন</div><div>পরিষেবার সাথে সম্পর্কিত সম্ভাব্য অন্যায় প্রতিরোধ বা তদন্ত</div><div>পরিষেবার ব্যবহারকারী বা জনসাধারণের ব্যক্তিগত নিরাপত্তা রক্ষা করুন</div><div>আইনি দায় থেকে রক্ষা করুন</div><div>আপনার ব্যক্তিগত তথ্য নিরাপত্তা</div><div>আপনার ব্যক্তিগত ডেটার নিরাপত্তা আমাদের কাছে গুরুত্বপূর্ণ, কিন্তু মনে রাখবেন যে ইন্টারনেটের মাধ্যমে সংক্রমণের কোনো পদ্ধতি বা ইলেকট্রনিক স্টোরেজ পদ্ধতি 100% নিরাপদ নয়। যদিও আমরা আপনার ব্যক্তিগত ডেটা সুরক্ষার জন্য বাণিজ্যিকভাবে গ্রহণযোগ্য উপায়গুলি ব্যবহার করার চেষ্টা করি, আমরা এর পরম নিরাপত্তার নিশ্চয়তা দিতে পারি না।</div><div><br></div><div>শিশুদের গোপনীয়তা</div><div>আমাদের পরিষেবা 13 বছরের কম বয়সী কাউকে সম্বোধন করে না। আমরা জেনেশুনে 13 বছরের কম বয়সী কারও কাছ থেকে ব্যক্তিগতভাবে শনাক্তযোগ্য তথ্য সংগ্রহ করি না। আপনি যদি একজন অভিভাবক বা অভিভাবক হন এবং আপনি সচেতন হন যে আপনার সন্তান আমাদের ব্যক্তিগত ডেটা সরবরাহ করেছে, অনুগ্রহ করে যোগাযোগ করুন. যদি আমরা সচেতন হই যে আমরা পিতামাতার সম্মতি যাচাই ছাড়াই 13 বছরের কম বয়সী কারও কাছ থেকে ব্যক্তিগত ডেটা সংগ্রহ করেছি, আমরা আমাদের সার্ভারগুলি থেকে সেই তথ্যগুলি সরানোর জন্য পদক্ষেপ নিই৷</div><div><br></div><div>যদি আমাদের আপনার তথ্য প্রক্রিয়াকরণের জন্য আইনি ভিত্তি হিসাবে সম্মতির উপর নির্ভর করতে হয় এবং আপনার দেশের অভিভাবকের কাছ থেকে সম্মতির প্রয়োজন হয়, আমরা সেই তথ্য সংগ্রহ ও ব্যবহার করার আগে আপনার পিতামাতার সম্মতির প্রয়োজন হতে পারে।</div><div><br></div><div>অন্যান্য ওয়েবসাইটের লিঙ্ক</div><div>আমাদের পরিষেবাতে অন্য ওয়েবসাইটগুলির লিঙ্ক থাকতে পারে যা আমাদের দ্বারা পরিচালিত হয় না। আপনি যদি তৃতীয় পক্ষের লিঙ্কে ক্লিক করেন, আপনাকে সেই তৃতীয় পক্ষের সাইটে নির্দেশিত করা হবে। আমরা আপনাকে দৃঢ়ভাবে পরামর্শ দিচ্ছি যে আপনি প্রতিটি সাইটের গোপনীয়তা নীতি পর্যালোচনা করুন।</div><div><br></div><div>আমাদের কোনো নিয়ন্ত্রণ নেই এবং কোনো তৃতীয় পক্ষের সাইট বা পরিষেবার বিষয়বস্তু, গোপনীয়তা নীতি বা অনুশীলনের জন্য কোনো দায়বদ্ধতা নেই।</div><div><br></div><div>এই গোপনীয়তা নীতি পরিবর্তন</div><div>আমরা সময়ে সময়ে আমাদের গোপনীয়তা নীতি আপডেট করতে পারি। আমরা এই পৃষ্ঠায় নতুন গোপনীয়তা নীতি পোস্ট করে কোনো পরিবর্তন সম্পর্কে আপনাকে অবহিত করব।</div><div><br></div><div>পরিবর্তনটি কার্যকর হওয়ার আগে আমরা আপনাকে ইমেল এবং/অথবা আমাদের পরিষেবাতে একটি বিশিষ্ট বিজ্ঞপ্তির মাধ্যমে জানাব এবং এই গোপনীয়তা নীতির শীর্ষে \"শেষ আপডেট করা\" তারিখটি আপডেট করব৷</div><div><br></div><div>যেকোনো পরিবর্তনের জন্য আপনাকে পর্যায়ক্রমে এই গোপনীয়তা নীতি পর্যালোচনা করার পরামর্শ দেওয়া হচ্ছে। এই গোপনীয়তা নীতিতে পরিবর্তনগুলি কার্যকর হয় যখন সেগুলি এই পৃষ্ঠায় পোস্ট করা হয়৷</div><div><br></div><div>যোগাযোগ করুন</div><div>এই গোপনীয়তা নীতি সম্পর্কে আপনার কোন প্রশ্ন থাকলে, আপনি আমাদের সাথে যোগাযোগ করতে পারেন:</div><div><br></div><div>ইমেল দ্বারা: info@shoppingghor.com</div><div><br></div><div>ফোন নম্বর দ্বারা: 01938282000</div></div></div></div></div></div></div></div>', 1, '2023-10-04 07:04:19', '2024-05-13 19:48:37'),
(8, 'Facebook', 'facebook', '#', '<p>Facebook Page</p>', 1, '2024-07-28 16:47:29', '2024-07-28 16:47:29'),
(9, 'Instagram', 'instagram', '#', '<p>Instagram&nbsp;</p>', 1, '2024-07-28 16:48:43', '2024-07-28 16:48:43'),
(10, 'YouTube', 'youtube', '#', '<p>You Tube</p>', 1, '2024-07-28 16:49:50', '2024-07-28 16:49:50');

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
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(55) NOT NULL,
  `white_logo` varchar(255) NOT NULL,
  `dark_logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `slider_title` varchar(155) DEFAULT NULL,
  `slider_details` varchar(255) DEFAULT NULL,
  `footer_details` varchar(255) DEFAULT NULL,
  `meta_description` longtext DEFAULT NULL,
  `meta_title` text DEFAULT NULL,
  `meta_keyword` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `name`, `white_logo`, `dark_logo`, `favicon`, `slider_title`, `slider_details`, `footer_details`, `meta_description`, `meta_title`, `meta_keyword`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Websolution IT', 'public/uploads/settings/1731047936-logo.webp', 'public/uploads/settings/1731047946-logo.webp', 'public/uploads/settings/1729703921-favicon.webp', 'উত্তরবঙ্গের সেরা আইটি প্রতিষ্ঠান', 'আপনার আইটি ও ফ্রিল্যান্সিং ক্যারিয়ার শুরু হোক ওয়েবসলিউশন আইটির দক্ষ ট্রেইনারের হাত ধরে', 'ওয়েব সলিউশন আইটি হলো একটি প্রতিষ্ঠান যা উত্তরবঙ্গের আইটি খাতকে সমৃদ্ধ করার জন্য কাজ করছে। আমাদের মূল লক্ষ্য হলো দক্ষ জনবল তৈরি করা এবং বেকারত্ব দূর করার মাধ্যমে স্থানীয় যুবকদের জীবনে পরিবর্তন আনা।', 'Best freelancing and IT Training Center In Dinajpur , Bangladesh', 'Websolution IT', 'websolutionit, webdesign, web development in dinajpur, graphic design in dinajpur', 1, '2023-01-21 12:01:07', '2024-11-11 02:31:39');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_01_21_150317_create_general_settings_table', 1),
(6, '2023_01_22_140830_create_social_media_table', 1),
(7, '2023_01_22_153053_create_contacts_table', 1),
(8, '2023_01_22_171430_create_categories_table', 1),
(9, '2023_02_21_083509_create_banners_table', 1),
(10, '2023_02_21_083647_create_banner_categories_table', 1),
(11, '2023_02_25_022224_create_create_pages_table', 1),
(12, '2023_01_11_113936_create_permission_tables', 1),
(13, '2024_11_12_072413_create_abouts_table', 2),
(14, '2024_11_12_080443_create_whychooses_table', 3),
(19, '2024_11_12_084516_create_services_table', 4),
(20, '2024_11_13_083756_create_courses_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `subtitle` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `meta_title` varchar(255) NOT NULL,
  `meta_keyword` varchar(255) NOT NULL,
  `meta_description` text NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `subtitle`, `image`, `description`, `meta_title`, `meta_keyword`, `meta_description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'ওয়েবসাইট ডিজাইন', 'website-design', 'Full Stack Web Development By Laravel Framework ( Online )', 'public/uploads/about/1731463918-website-design.webp', '<p>At Websolution IT, we don’t just design websites; we build experiences. Our team of skilled developers and designers creates websites that not only look stunning but also drive results. From e-commerce platforms to service-based websites, our solutions are customized to meet your business goals and engage your audience effectively.</p><p>Why Choose Websolution IT?</p><ul><li>Tailored Solutions: Every business is unique, and so are our web designs. We tailor each project to your specific needs, ensuring that your website reflects your brand’s personality and purpose.</li><li>Mobile-Responsive Design: With a mobile-first approach, we ensure that your website looks and functions perfectly on all devices—smartphones, tablets, and desktops.</li><li>SEO-Optimized: Our designs are optimized for search engines, giving your website the visibility it needs to reach a larger audience.</li><li>User-Centric Approach: We prioritize user experience, making navigation intuitive, layouts clean, and content accessible, which keeps visitors engaged and encourages conversions.</li><li>Secure &amp; Reliable: We build websites with the latest security protocols, keeping your data safe and ensuring a smooth, reliable experience for your users.</li></ul><p>Our Web Design Process</p><ul><li>Consultation &amp; Discovery: We start by understanding your brand, goals, and audience to create a design strategy tailored to your needs.</li><li>Planning &amp; Wireframing: After our initial consultation, we outline the website structure and flow, ensuring a user-friendly experience.</li><li>Custom Design &amp; Development: Our team designs a visually appealing, functional website, integrating the latest web technologies and design trends.</li><li>Quality Assurance Testing: Before launch, we conduct thorough testing to ensure that every part of your website functions smoothly.</li><li>Launch &amp; Support: After the successful launch, we provide ongoing support to help you maintain and optimize your website.</li></ul><p>Our Services</p><ul><li>Responsive Web Design</li><li>eCommerce Development</li><li>Content Management Systems (CMS)</li><li>Custom Web Applications</li><li>Website Maintenance &amp; Support</li><li>Ready to Build Your Online Presence?</li></ul><p>Let Websolution IT bring your ideas to life. Whether you\'re starting from scratch or looking to revamp an existing site, we’ll work with you every step of the way to build a website that grows with your business.</p>', 'Best website design company in dinajpur', 'websolutionit,websitedesign', 'Best website design company in dinajpur', 1, '2024-11-13 02:11:59', '2024-11-13 02:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `link` varchar(155) NOT NULL,
  `color` varchar(20) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `title`, `icon`, `link`, `color`, `status`, `created_at`, `updated_at`) VALUES
(2, 'facebook', 'fa-brands fa-facebook', 'https://www.facebook.com/websolutionittraining', '#2925f8', 1, '2023-02-12 11:32:20', '2024-11-13 02:20:37'),
(3, 'Youtube', 'fa-brands fa-youtube', '#', '#e13333', 1, '2023-02-14 03:29:41', '2024-11-13 02:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `image`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$NUTmZoutuuOliWdRlt/GhuCyFp4Cab6GdosfNeKf7pCp1mymJDpse', '', 1, NULL, '2024-10-29 02:01:47', '2024-10-29 03:15:10'),
(2, 'Editor', 'editor@gmail.com', NULL, '$2y$10$LQ6sazU8yAiJ/MxGxWS0reqf8/cNWYyJCyqzifYr9EjRE82xmwm2u', 'public/uploads/users/1730193421-favicon.webp', 1, NULL, '2024-10-29 03:17:01', '2024-10-29 03:17:01');

-- --------------------------------------------------------

--
-- Table structure for table `whychooses`
--

CREATE TABLE `whychooses` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `whychooses`
--

INSERT INTO `whychooses` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'দক্ষ প্রশিক্ষক', 'public/uploads/whychoose/1731377558-experts.webp', 1, '2024-11-12 02:12:38', '2024-11-12 02:12:38'),
(2, 'আপডেটেড সিলেবাস', 'public/uploads/whychoose/1731377586-syllabus.webp', 1, '2024-11-12 02:13:06', '2024-11-12 02:13:06'),
(3, 'প্রজেক্ট বেসড লার্নিং', 'public/uploads/whychoose/1731377596-project.webp', 1, '2024-11-12 02:13:16', '2024-11-12 02:13:16'),
(4, 'ল্যাব সুবিধা', 'public/uploads/whychoose/1731377610-elearning.webp', 1, '2024-11-12 02:13:30', '2024-11-12 02:13:30'),
(5, 'ভিডিও টিউটোরিয়াল', 'public/uploads/whychoose/1731377619-tutorial.webp', 1, '2024-11-12 02:13:39', '2024-11-12 02:13:39'),
(6, 'জব ও ফ্রিল্যান্সিং সাপোর্ট', 'public/uploads/whychoose/1731377632-24-7.webp', 1, '2024-11-12 02:13:52', '2024-11-12 02:13:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `whychooses`
--
ALTER TABLE `whychooses`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `whychooses`
--
ALTER TABLE `whychooses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
