-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 16, 2019 at 10:19 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sfm`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_en` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title_fa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body_fa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `brand`, `title_en`, `body_en`, `title_fa`, `body_fa`) VALUES
(1, 'about', 'test', 'Lorem ipsum is a pseudo-Latin text used in web design, typography, layout, and printing in place of English to emphasise design elements over content. It\'s also called placeholder (or filler) text. It\'s a convenient tool for mock-ups. It helps to outline the visual elements of a document or presentation, eg typography, font, or layout. Lorem ipsum is mostly a part of a Latin text by the classical author and philosopher Cicero. Its words and letters have been changed by addition or removal, so to deliberately render its content nonsensical; it\'s not genuine, correct, or comprehensible Latin anymore. While lorem ipsum\'s still resembles classical Latin, it actually has no meaning whatsoever. As Cicero\'s text doesn\'t contain the letters K, W, or Z, alien to latin, these, and others are often inserted randomly to mimic the typographic appearence of European languages, as are digraphs not to be found in the original', 'تست', 'متن تست'),
(2, 'brand-luxtai', 'Whats luxtai', 'I\'m luxtai', 'لوکستای چیست؟', 'من لوکستای هستم'),
(3, 'brand-expanse', 'Whats expanse', 'man expanse am', 'اکسپنس چیست', 'من اکسپنسم'),
(4, 'brand-komtai', 'Whats komtai', 'man komtaiam', 'کمتای چیست', 'من کمتای هستم');

-- --------------------------------------------------------

--
-- Table structure for table `blg_categories`
--

CREATE TABLE `blg_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blg_categories`
--

INSERT INTO `blg_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'test', 'test', '2019-02-26 02:47:47', '2019-02-26 02:47:47');

-- --------------------------------------------------------

--
-- Table structure for table `blg_comments`
--

CREATE TABLE `blg_comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `body` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blg_posts`
--

CREATE TABLE `blg_posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageUrl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `lang` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viewCount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blg_posts`
--

INSERT INTO `blg_posts` (`id`, `user_id`, `title`, `body`, `imageUrl`, `slug`, `active`, `lang`, `viewCount`, `created_at`, `updated_at`) VALUES
(1, 1, 'blog 1', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test', 1, 'en', 0, '2019-02-26 02:47:55', '2019-02-26 02:47:55'),
(2, 1, 'blog 2', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test-2', 1, 'en', 22, '2019-02-26 02:48:10', '2019-02-26 02:48:10'),
(3, 1, 'blog 3', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test-3', 1, 'en', 11, '2019-02-26 02:48:28', '2019-02-26 02:48:28'),
(13, 1, 'blog 4', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test23423', 1, 'en', 0, '2019-02-26 02:47:55', '2019-02-26 02:47:55'),
(14, 1, 'blog 5', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test-2234', 1, 'en', 1, '2019-02-26 02:48:10', '2019-03-16 04:29:31'),
(15, 1, 'blog 6', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test-3234vs', 1, 'en', 0, '2019-02-26 02:48:28', '2019-02-26 02:48:28'),
(16, 1, 'blog 7', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test345eyb', 1, 'en', 0, '2019-02-26 02:47:55', '2019-02-26 02:47:55'),
(17, 1, 'blog 8', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test-2bew', 1, 'en', 0, '2019-02-26 02:48:10', '2019-02-26 02:48:10'),
(18, 1, 'blog 9', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test-3webrart', 1, 'en', 0, '2019-02-26 02:48:28', '2019-02-26 02:48:28'),
(19, 1, 'blog 10', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test23423gfdhtyer', 1, 'en', 0, '2019-02-26 02:47:55', '2019-02-26 02:47:55'),
(20, 1, 'blog 11', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test-2234esrtbs 34', 1, 'en', 0, '2019-02-26 02:48:10', '2019-02-26 02:48:10'),
(21, 1, 'blog 12', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test-3234vsawgaw', 1, 'en', 0, '2019-02-26 02:48:28', '2019-02-26 02:48:28'),
(34, 1, 'blog 13', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'testasdaehetyytaytrasd', 1, 'en', 0, '2019-02-26 02:47:55', '2019-02-26 02:47:55'),
(35, 1, 'blog 14', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test-2asdfwvrcwerwrc234c23asd', 1, 'en', 0, '2019-02-26 02:48:10', '2019-02-26 02:48:10'),
(36, 1, 'بلاگ', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '/uploads/blog/no-image.png', 'test-32c3432c4q2c4asdz', 1, 'fa', 1, '2019-02-26 02:48:28', '2019-03-16 04:20:47'),
(37, 1, 'بلاگ', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '/uploads/blog/no-image.png', 'test23423q2c4zv', 1, 'fa', 0, '2019-02-26 02:47:55', '2019-02-26 02:47:55'),
(38, 1, 'بلاگ', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '/uploads/blog/no-image.png', 'test-2234qcr35534v652vz', 1, 'fa', 0, '2019-02-26 02:48:10', '2019-02-26 02:48:10'),
(39, 1, 'بلاگ', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '/uploads/blog/no-image.png', 'test-32342cq45cxvsva', 1, 'fa', 0, '2019-02-26 02:48:28', '2019-02-26 02:48:28'),
(40, 1, 'blog 19', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test345eyb2x3cq454vasda', 1, 'en', 0, '2019-02-26 02:47:55', '2019-02-26 02:47:55'),
(41, 1, 'blog 20', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test-2bew3qvtq365v34547', 1, 'en', 0, '2019-02-26 02:48:10', '2019-02-26 02:48:10'),
(42, 1, 'blog 21', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test-3webrart3v4545w745w', 1, 'en', 0, '2019-02-26 02:48:28', '2019-02-26 02:48:28'),
(43, 1, 'blog 22', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test23423gfdhty4w5754w74', 1, 'en', 0, '2019-02-26 02:47:55', '2019-02-26 02:47:55'),
(44, 1, 'blog 23', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test-2234esrtbc5q3v4wv74qv35', 1, 'en', 0, '2019-02-26 02:48:10', '2019-02-26 02:48:10'),
(45, 1, 'blog 24', 'Lorem ipsum dolor sit amet, et eam clita disputationi, falli harum tritani vis te. Ne vel elit novum graeci. Admodum accommodare ne nam. Vis ei augue melius iriure, ornatus ocurreret ex vel, has quem voluptua prodesset ne.\r\n\r\nIn his tantas iisque aperiam, has quot tacimates incorrupte in. Est propriae legendos intellegat eu, duo cetero detraxit consulatu ut. His ex esse deseruisse, enim graece sententiae cum ad. His ex ornatus argumentum. Diam forensibus ius eu. Eu has aperiri sanctus veritus, ei hinc vidisse vivendo vel.\r\n\r\nPrompta fastidii oporteat eam in. Mundi soluta necessitatibus usu no. Ad vis alienum tacimates gubergren, usu vidit invidunt argumentum te, vel ut facer scaevola gloriatur. Deleniti honestatis interesset no usu, cum feugiat sensibus facilisis et, exerci prompta vix at. Vel eu case nostrum, id his quodsi doctus minimum, sit ne quem dictas. Nam et tamquam scaevola erroribus, ne eos oportere adversarium, has ut magna adipisci.\r\n\r\nQui no dolor eripuit, usu cu vitae petentium. Quo ad zril aliquip, id quem aliquid duo, has at admodum electram. Ne libris invenire ius, cu qui autem impetus. Partem sanctus has eu, vix no eros semper iisque. Has ea case instructior, ullum labores ut ius, nec te euismod blandit. Id eligendi evertitur usu.\r\n\r\nHinc alterum pri te, velit consetetur eam id. Novum nostrud ne eum. Ei nec velit essent appareat. Ut nec utinam putent antiopam, mea an pertinax abhorreant. Repudiare neglegentur vix at, vim eu hinc malis utinam, idque discere offendit ei per.', '/uploads/blog/no-image.png', 'test-3234vsawgaw456serw', 1, 'en', 5, '2019-02-26 02:48:28', '2019-03-16 04:28:29'),
(48, 1, 'لورم ایپسوم متن ساختگی با ', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '/uploads/blog/no-image.png', 'asdaQEGwecwevvw', 1, 'fa', 0, NULL, NULL),
(49, 1, 'لورم ایپسوم متن ساختگی با ', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '/uploads/blog/no-image.png', 'retreter', 1, 'fa', 0, NULL, NULL),
(50, 1, 'لورم ایپسوم متن ساختگی با ', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '/uploads/blog/no-image.png', 'asdaQEGwecwevvwsevy5ewteg', 1, 'fa', 0, NULL, NULL),
(51, 1, 'لورم ایپسوم متن ساختگی با ', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '/uploads/blog/no-image.png', 'retreterasdavcacas', 1, 'fa', 0, NULL, NULL),
(52, 1, 'لورم ایپسوم متن ساختگی با ', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '/uploads/blog/no-image.png', 'asdaQEGwadqdecwevvw', 1, 'fa', 0, NULL, NULL),
(53, 1, 'شسی', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '/uploads/blog/no-image.png', 'revdvdddaatreter', 1, 'fa', 0, NULL, NULL),
(54, 1, 'لورم ایپسوم متن ساختگی با ', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '/uploads/blog/no-image.png', 'asdaQEGsadadsqqw3wecwevvwsevy5ewteg', 1, 'fa', 0, NULL, NULL),
(55, 1, 'لورم ایپسوم متن ساختگی با ', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '/uploads/blog/no-image.png', 'retretera3g465456sdavcacas', 1, 'fa', 0, NULL, NULL),
(56, 1, 'لورم ایپسوم متن ساختگی با ', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '/uploads/blog/no-image.png', 'asdaQEGweasdqfcwevvwsevy5ewteg', 1, 'fa', 0, NULL, NULL),
(57, 1, 'لورم ایپسوم متن ساختگی با ', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '/uploads/blog/no-image.png', 'retretera5g66g5sdavcacas', 1, 'fa', 0, NULL, NULL),
(58, 1, 'لورم ایپسوم متن ساختگی با ', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '/uploads/blog/no-image.png', 'asdaQEGwad4g64gqdecwevvw', 1, 'fa', 0, NULL, NULL),
(59, 1, 'شسی', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '/uploads/blog/no-image.png', 'revdvdd3g56346daatreter', 1, 'fa', 0, NULL, NULL),
(60, 1, 'لورم ایپسوم متن ساختگی با ', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '/uploads/blog/no-image.png', 'asdaQEGsadads4g6qqw3wecwevvwsevy5ewteg', 1, 'fa', 19, '2019-02-26 02:48:10', '2019-03-16 04:21:08'),
(61, 1, 'لورم ایپسوم متن ساختگی با ', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', '/uploads/blog/no-image.png', 'retretera3g4655g6456sdavcacas', 1, 'fa', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `post_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_post`
--

INSERT INTO `category_post` (`post_id`, `category_id`) VALUES
(1, 1),
(2, 1),
(3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `map_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `etc` text COLLATE utf8mb4_unicode_ci,
  `social_media` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `map_location`, `address`, `tel`, `email`, `etc`, `social_media`) VALUES
(1, NULL, '{   \"addr1\":\"test\",  \"addr2\":\"test2\",  \"addr3\":\"test3\" }', '{   \"tel1\":\"+98 <em>21</em> 8821 1110\",  \"tel2\":\"22222222\",  \"tel3\":\"77777777\" }', '{   \"email1\":\"INFO@<em>LUXTAI</em>.COM\",  \"email2\":\"22222222\",  \"email3\":\"77777777\" }', 'UNIT 144,FL 14, <span>SADAF TOWER</span>, SHEIKHBAHAEE SQ, TEHRAN, IRAN', NULL),
(2, NULL, '{   \"addr1\":\"تهران، میدان شیخ بهایی\",  \"addr2\":\"ساحل عاج\",  \"addr3\":\"آلمان، بلوار امام\" }', '{   \"tel1\":\"۹۸+ <em>۲۱</em> ۱۱۱۰ ۸۸۲۱\",  \"tel2\":\"22222222\",  \"tel3\":\"77777777\" }', '{   \"email1\":\"INFO@<em>LUXTAI</em>.COM\",  \"email2\":\"22222222\",  \"email3\":\"77777777\" }', 'ایران، تهران، میدان شیخ بهائی، <em>برج صدف</em> ، طبقه ۱۴، واحد ۱۴۴', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `crd_cards`
--

CREATE TABLE `crd_cards` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imgUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crd_cards`
--

INSERT INTO `crd_cards` (`id`, `page_id`, `title`, `body`, `slug`, `imgUrl`, `active`, `created_at`, `updated_at`) VALUES
(2, 2, '8080', 'aaa', '/en/product/show/8080', '/sfm/assets/images/product-2.png', 1, NULL, NULL),
(3, 3, 'NEW PRODUCTS\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua …\r\n\r\n', '', '/sfm/assets/images/newsthumb.png', 1, NULL, NULL),
(4, 2, '9090', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua …\r\n', '/en/product/show/9090', '/sfm/assets/images/product-3.png', 1, NULL, NULL),
(5, 3, 'NEW PRODUCTS\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua …\r\n\r\n', '', '/sfm/assets/images/newsthumb.png', 1, NULL, NULL),
(6, 3, 'NEW PRODUCTS\r\n', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua …\r\n\r\n', '', '/sfm/assets/images/newsthumb.png', 1, NULL, NULL),
(7, 4, '<span>لوکستای</span> چیست ؟', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.', '/fa/about-us/brand-luxtai', '', 1, NULL, NULL),
(8, 5, '<span>اکسپنس</span> چیست ؟', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.', '/fa/about-us/brand-expanse', '', 1, NULL, NULL),
(9, 6, '<span>کمتای</span> چیست ؟', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد.', '/fa/about-us/brand-komtai', '', 1, NULL, NULL),
(10, 7, 'WHAT IS <span>LUXTAI</span>?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lore.\r\n\r\n', '/en/about-us/brand-luxtai', '/sfm/assets/images/main-product.png', 1, NULL, NULL),
(11, 8, 'WHAT IS <span>EXPANSE</span>?', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua …\r\n', '/en/about-us/brand-expanse', '/sfm/assets/images/main-product.png', 1, NULL, NULL),
(12, 9, 'WHAT IS <span>KOMTAI</span>?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lore.\r\n\r\n', '/en/about-us/brand-komtai', '/sfm/assets/images/main-product.png', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `crd_pages`
--

CREATE TABLE `crd_pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `crd_pages`
--

INSERT INTO `crd_pages` (`id`, `page`) VALUES
(1, 'first'),
(2, 'second\r\n'),
(3, 'news\r\n'),
(4, 'luxtai_fa'),
(5, 'expanse_fa'),
(6, 'komtai_fa'),
(7, 'luxtai_en'),
(8, 'expanse_en'),
(9, 'komtai_en');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(11) NOT NULL,
  `question` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `page_id`, `question`, `answer`, `lang`) VALUES
(1, 0, 'asdasd', 'asdasdasd', 'en'),
(2, 0, 'asdasdasd', 'asd', 'en'),
(3, 0, 'چرا شرکت فرسار بزرگترین تولید کننده در کل خاورمیانه می باشد ؟', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 'fa'),
(4, 0, 'چرا شرکت فرسار بزرگترین تولید کننده در کل خاورمیانه می باشد ؟', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 'fa'),
(5, 0, 'چرا شرکت فرسار بزرگترین تولید کننده در کل خاورمیانه می باشد ؟', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 'fa'),
(6, 0, 'چرا شرکت فرسار بزرگترین تولید کننده در کل خاورمیانه می باشد ؟', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 'fa');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_27_062352_create_modules_table', 1),
(4, '2019_02_05_143046_create_contacts_table', 1),
(5, '2019_02_10_122710_create_test_table', 1),
(6, '2019_02_12_094334_create_abouts_table', 1),
(7, '2019_02_06_132302_create_projects_table', 2),
(8, '2019_01_28_080511_create_blog_table', 3),
(9, '2019_01_30_092049_create_pages_table', 4),
(10, '2019_01_30_092103_create_cards_table', 4),
(11, '2019_02_06_084940_create_faq_table', 5),
(12, '2019_02_05_125015_create_news_table', 6),
(13, '2019_02_10_113851_create_products_table', 7),
(14, '2019_03_11_192211_create_tags_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `modules`
--

CREATE TABLE `modules` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'dev',
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `modules`
--

INSERT INTO `modules` (`id`, `name`, `alias`, `type`, `description`, `active`, `created_at`, `updated_at`) VALUES
(1, 'Product', 'Product', 'dev', 'product', 1, '2019-03-09 01:33:02', '2019-03-09 01:33:02'),
(2, 'Faq', 'Faq', 'dev', 'faq', 1, '2019-03-09 01:34:14', '2019-03-09 01:34:14'),
(3, 'News', 'News', 'dev', 'news', 1, '2019-03-09 01:34:20', '2019-03-09 01:34:20'),
(4, 'Card', 'Card', 'dev', 'card', 1, '2019-03-09 01:34:37', '2019-03-09 01:34:37'),
(5, 'Blog', 'Blog', 'dev', 'blog', 1, '2019-03-09 01:35:26', '2019-03-09 01:35:26'),
(6, 'Project', 'Project', 'dev', 'project', 1, '2019-03-09 01:35:43', '2019-03-09 01:35:43');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageUrl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `viewCount` int(10) UNSIGNED NOT NULL,
  `brand` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `slug`, `imageUrl`, `lang`, `active`, `viewCount`, `brand`, `created_at`, `updated_at`) VALUES
(1, 'News 1', 'Lorem ipsum dolor sit amet, mel putant sententiae ne, euismod omnesque quaestio ex quo. Reque indoctum an mel. Eos cu dicta tempor apeirian. Usu at probo gubergren neglegentur, ei voluptua conceptam quo.\r\n\r\nAn lorem voluptua interesset eum, luptatum maluisset est at. Ex his quas malis, scripta molestiae usu at. Ei animal singulis mei. Te his habeo minim referrentur. Eum ut cetero prodesset voluptatum, an mutat ludus persecuti vim.\r\n\r\nLegere feugiat reformidans eu eos, et iudico decore copiosae eos. Ei quod commodo ius. Doming possim vituperata mei ne, id mucius audiam mea, vim putent propriae similique ex. Falli oratio abhorreant no vix.\r\n\r\nTe qui magna lorem dignissim, debet choro id vis, te qui eripuit expetenda. Eam sale sapientem te, minimum persecuti et has. No eum oratio propriae. Ut nec purto rebum constituam. Et nec vidisse percipit ocurreret, graeco deserunt vix at.\r\n\r\nEst iudico ceteros definiebas et. An impedit legendos reprehendunt ius. Et nam autem nemore consequuntur, vix ea quidam virtute, in mea assum fierent definitionem. Quando cotidieque suscipiantur no cum. Ea admodum postulant nam, scaevola consequuntur vel in, elit dolore atomorum id nec.', 'news-1', '/uploads/news/news.jpg', 'en', 1, 5, '', NULL, '2019-03-16 05:04:22'),
(2, 'News 2', 'Lorem ipsum dolor sit amet, mel putant sententiae ne, euismod omnesque quaestio ex quo. Reque indoctum an mel. Eos cu dicta tempor apeirian. Usu at probo gubergren neglegentur, ei voluptua conceptam quo.\r\n\r\nAn lorem voluptua interesset eum, luptatum maluisset est at. Ex his quas malis, scripta molestiae usu at. Ei animal singulis mei. Te his habeo minim referrentur. Eum ut cetero prodesset voluptatum, an mutat ludus persecuti vim.\r\n\r\nLegere feugiat reformidans eu eos, et iudico decore copiosae eos. Ei quod commodo ius. Doming possim vituperata mei ne, id mucius audiam mea, vim putent propriae similique ex. Falli oratio abhorreant no vix.\r\n\r\nTe qui magna lorem dignissim, debet choro id vis, te qui eripuit expetenda. Eam sale sapientem te, minimum persecuti et has. No eum oratio propriae. Ut nec purto rebum constituam. Et nec vidisse percipit ocurreret, graeco deserunt vix at.\r\n\r\nEst iudico ceteros definiebas et. An impedit legendos reprehendunt ius. Et nam autem nemore consequuntur, vix ea quidam virtute, in mea assum fierent definitionem. Quando cotidieque suscipiantur no cum. Ea admodum postulant nam, scaevola consequuntur vel in, elit dolore atomorum id nec.', 'news-2', '/uploads/news/news.jpg', 'en', 1, 2, '', NULL, '2019-03-07 22:55:13'),
(3, 'News 3', 'Lorem ipsum dolor sit amet, mel putant sententiae ne, euismod omnesque quaestio ex quo. Reque indoctum an mel. Eos cu dicta tempor apeirian. Usu at probo gubergren neglegentur, ei voluptua conceptam quo.\r\n\r\nAn lorem voluptua interesset eum, luptatum maluisset est at. Ex his quas malis, scripta molestiae usu at. Ei animal singulis mei. Te his habeo minim referrentur. Eum ut cetero prodesset voluptatum, an mutat ludus persecuti vim.\r\n\r\nLegere feugiat reformidans eu eos, et iudico decore copiosae eos. Ei quod commodo ius. Doming possim vituperata mei ne, id mucius audiam mea, vim putent propriae similique ex. Falli oratio abhorreant no vix.\r\n\r\nTe qui magna lorem dignissim, debet choro id vis, te qui eripuit expetenda. Eam sale sapientem te, minimum persecuti et has. No eum oratio propriae. Ut nec purto rebum constituam. Et nec vidisse percipit ocurreret, graeco deserunt vix at.\r\n\r\nEst iudico ceteros definiebas et. An impedit legendos reprehendunt ius. Et nam autem nemore consequuntur, vix ea quidam virtute, in mea assum fierent definitionem. Quando cotidieque suscipiantur no cum. Ea admodum postulant nam, scaevola consequuntur vel in, elit dolore atomorum id nec.', 'news-3', '/uploads/news/news.jpg', 'en', 1, 5, '', NULL, '2019-03-16 05:17:20'),
(4, 'News 4', 'Lorem ipsum dolor sit amet, mel putant sententiae ne, euismod omnesque quaestio ex quo. Reque indoctum an mel. Eos cu dicta tempor apeirian. Usu at probo gubergren neglegentur, ei voluptua conceptam quo.\r\n\r\nAn lorem voluptua interesset eum, luptatum maluisset est at. Ex his quas malis, scripta molestiae usu at. Ei animal singulis mei. Te his habeo minim referrentur. Eum ut cetero prodesset voluptatum, an mutat ludus persecuti vim.\r\n\r\nLegere feugiat reformidans eu eos, et iudico decore copiosae eos. Ei quod commodo ius. Doming possim vituperata mei ne, id mucius audiam mea, vim putent propriae similique ex. Falli oratio abhorreant no vix.\r\n\r\nTe qui magna lorem dignissim, debet choro id vis, te qui eripuit expetenda. Eam sale sapientem te, minimum persecuti et has. No eum oratio propriae. Ut nec purto rebum constituam. Et nec vidisse percipit ocurreret, graeco deserunt vix at.\r\n\r\nEst iudico ceteros definiebas et. An impedit legendos reprehendunt ius. Et nam autem nemore consequuntur, vix ea quidam virtute, in mea assum fierent definitionem. Quando cotidieque suscipiantur no cum. Ea admodum postulant nam, scaevola consequuntur vel in, elit dolore atomorum id nec.', 'news-4', '/uploads/news/news.jpg', 'en', 1, 3, '', NULL, '2019-03-13 05:16:58'),
(5, 'News 5', 'Lorem ipsum dolor sit amet, mel putant sententiae ne, euismod omnesque quaestio ex quo. Reque indoctum an mel. Eos cu dicta tempor apeirian. Usu at probo gubergren neglegentur, ei voluptua conceptam quo.\r\n\r\nAn lorem voluptua interesset eum, luptatum maluisset est at. Ex his quas malis, scripta molestiae usu at. Ei animal singulis mei. Te his habeo minim referrentur. Eum ut cetero prodesset voluptatum, an mutat ludus persecuti vim.\r\n\r\nLegere feugiat reformidans eu eos, et iudico decore copiosae eos. Ei quod commodo ius. Doming possim vituperata mei ne, id mucius audiam mea, vim putent propriae similique ex. Falli oratio abhorreant no vix.\r\n\r\nTe qui magna lorem dignissim, debet choro id vis, te qui eripuit expetenda. Eam sale sapientem te, minimum persecuti et has. No eum oratio propriae. Ut nec purto rebum constituam. Et nec vidisse percipit ocurreret, graeco deserunt vix at.\r\n\r\nEst iudico ceteros definiebas et. An impedit legendos reprehendunt ius. Et nam autem nemore consequuntur, vix ea quidam virtute, in mea assum fierent definitionem. Quando cotidieque suscipiantur no cum. Ea admodum postulant nam, scaevola consequuntur vel in, elit dolore atomorum id nec.', 'news-5', '/uploads/news/news.jpg', 'en', 1, 33, '', NULL, '2019-03-16 05:19:57'),
(6, 'News 6', 'Lorem ipsum dolor sit amet, mel putant sententiae ne, euismod omnesque quaestio ex quo. Reque indoctum an mel. Eos cu dicta tempor apeirian. Usu at probo gubergren neglegentur, ei voluptua conceptam quo.\r\n\r\nAn lorem voluptua interesset eum, luptatum maluisset est at. Ex his quas malis, scripta molestiae usu at. Ei animal singulis mei. Te his habeo minim referrentur. Eum ut cetero prodesset voluptatum, an mutat ludus persecuti vim.\r\n\r\nLegere feugiat reformidans eu eos, et iudico decore copiosae eos. Ei quod commodo ius. Doming possim vituperata mei ne, id mucius audiam mea, vim putent propriae similique ex. Falli oratio abhorreant no vix.\r\n\r\nTe qui magna lorem dignissim, debet choro id vis, te qui eripuit expetenda. Eam sale sapientem te, minimum persecuti et has. No eum oratio propriae. Ut nec purto rebum constituam. Et nec vidisse percipit ocurreret, graeco deserunt vix at.\r\n\r\nEst iudico ceteros definiebas et. An impedit legendos reprehendunt ius. Et nam autem nemore consequuntur, vix ea quidam virtute, in mea assum fierent definitionem. Quando cotidieque suscipiantur no cum. Ea admodum postulant nam, scaevola consequuntur vel in, elit dolore atomorum id nec.', 'news-5', '/uploads/news/news.jpg', 'en', 1, 23, '', NULL, '2019-03-13 05:38:05'),
(7, 'News 7', 'Lorem ipsum dolor sit amet, mel putant sententiae ne, euismod omnesque quaestio ex quo. Reque indoctum an mel. Eos cu dicta tempor apeirian. Usu at probo gubergren neglegentur, ei voluptua conceptam quo.\r\n\r\nAn lorem voluptua interesset eum, luptatum maluisset est at. Ex his quas malis, scripta molestiae usu at. Ei animal singulis mei. Te his habeo minim referrentur. Eum ut cetero prodesset voluptatum, an mutat ludus persecuti vim.\r\n\r\nLegere feugiat reformidans eu eos, et iudico decore copiosae eos. Ei quod commodo ius. Doming possim vituperata mei ne, id mucius audiam mea, vim putent propriae similique ex. Falli oratio abhorreant no vix.\r\n\r\nTe qui magna lorem dignissim, debet choro id vis, te qui eripuit expetenda. Eam sale sapientem te, minimum persecuti et has. No eum oratio propriae. Ut nec purto rebum constituam. Et nec vidisse percipit ocurreret, graeco deserunt vix at.\r\n\r\nEst iudico ceteros definiebas et. An impedit legendos reprehendunt ius. Et nam autem nemore consequuntur, vix ea quidam virtute, in mea assum fierent definitionem. Quando cotidieque suscipiantur no cum. Ea admodum postulant nam, scaevola consequuntur vel in, elit dolore atomorum id nec.', 'news-6', '/uploads/news/news.jpg', 'en', 1, 14, '', '2019-02-26 02:20:52', '2019-03-16 05:17:26'),
(8, 'اخبار یک', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 'akhbar-1', '/uploads/news/news.jpg', 'fa', 1, 2, '', '2019-02-26 02:20:52', '2019-03-13 08:58:24'),
(9, 'اخبار دو', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 'akhbar-2', '/uploads/news/news.jpg', 'fa', 1, 13, '', '2019-02-26 02:20:52', '2019-03-06 06:02:41'),
(10, 'اخبار سه', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 'akhbar-3', '/uploads/news/news.jpg', 'fa', 1, 2, '', '2019-02-26 02:20:52', '2019-03-09 10:03:05'),
(11, 'اخبار چهار', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 'akhbar-4', '/uploads/news/news.jpg', 'fa', 1, 27, '', '2019-02-26 02:20:52', '2019-03-13 04:54:20'),
(12, 'اخبار تست 1', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 'akhbar-9', '/uploads/news/news.jpg', 'fa', 1, 48, '', '2019-02-26 02:20:52', '2019-03-16 04:12:40'),
(13, 'اخبار تست 2', 'لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.', 'akhbar-10', '/uploads/news/news.jpg', 'fa', 1, 26, '', '2019-02-26 02:20:52', '2019-03-16 05:21:28');

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
('hadi.abedzadeh@hotmail.com', '$2y$10$rOrduKybXgCYV.BSeGISuuVtA1d4QghN26fHgDhONEsQ7XTCYNiLi', '2019-03-11 06:22:19');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`post_id`, `tag_id`) VALUES
(42, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageUrl` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `slug`, `imageUrl`, `body`, `lang`, `brand`, `created_at`, `updated_at`) VALUES
(1, 'macrofer', 'microfer1', '/uploads/blog/no-image.png', 'qwe', 'en', 'luxtai', NULL, NULL),
(2, 'bed', 'takht', '/uploads/blog/no-image.png', 'zxc', 'en', 'komtai', NULL, NULL),
(3, 'آبمیوه گیری', 'juicer', '/uploads/blog/no-image.png', 'zxc', 'fa', 'expanse', NULL, NULL),
(4, 'ماکروفر', 'microwave', '/uploads/product/product-1.png', 'qwe', 'fa', 'luxtai', NULL, NULL),
(5, 'آبمیوه گیری', 'Juicer', '/uploads/product/juicer.png', 'qwe', 'fa', 'luxtai', NULL, NULL),
(6, 'گرمایش', 'heater', '/uploads/product/heater.png', 'qwe', 'fa', 'luxtai', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products_lists`
--

CREATE TABLE `products_lists` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageUrls` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_url` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_lists`
--

INSERT INTO `products_lists` (`id`, `product_id`, `title`, `slug`, `imageUrls`, `body`, `lang`, `brand`, `category`, `file_url`, `created_at`, `updated_at`) VALUES
(2, 1, '8080', '8080', '{ \"img1\":\"/sfm-fa/assets/images/sample/product-1.png\",\r\n \"img2\":\"/images/Product2.png\", \"img3\":\"/images/Product3.png\", \"img4\":\"/images/Product4.png\" }', 'Lorem ipsum dolor sit amet mel putant sententiae ne, euismod omnesque quaestio ex quo. Reque indoctum an mel. Eos cu dicta tempor apeirian. Usu at probo gubergren neglegentur, ei voluptua conceptam quo.\r\n\r\nAn lorem voluptua interesset eum, luptatum maluisset est at. Ex his quas malis, scripta molestiae usu at. Ei animal singulis mei. Te his habeo minim referrentur. Eum ut cetero prodesset voluptatum, an mutat ludus persecuti vim.\r\n\r\nLegere feugiat reformidans eu eos, et iudico decore copiosae eos. Ei quod commodo ius. Doming possim vituperata mei ne, id mucius audiam mea, vim putent propriae similique ex. Falli oratio abhorreant no vix.\r\n\r\nTe qui magna lorem dignissim, debet choro id vis, te qui eripuit expetenda. Eam sale sapientem te, minimum persecuti et has. No eum oratio propriae. Ut nec purto rebum constituam. Et nec vidisse percipit ocurreret, graeco deserunt vix at.\r\n\r\nEst iudico ceteros definiebas et. An impedit legendos reprehendunt ius. Et nam autem nemore consequuntur, vix ea quidam virtute, in mea assum fierent definitionem. Quando cotidieque suscipiantur no cum. Ea admodum postulant nam, scaevola consequuntur vel in, elit dolore atomorum id nec.', 'en', 'luxtai', 'juicer', '/test.zip', NULL, NULL),
(3, 2, '9090', '9090', '{ \"img1\":\"/sfm-fa/assets/images/sample/product-1.png\",\r\n \"img2\":\"/images/Product2.png\", \"img3\":\"/images/Product3.png\", \"img4\":\"/images/Product4.png\" }', 'Lorem ipsum dolor sit amet mel putant sententiae ne, euismod omnesque quaestio ex quo. Reque indoctum an mel. Eos cu dicta tempor apeirian. Usu at probo gubergren neglegentur, ei voluptua conceptam quo.\r\n\r\nAn lorem voluptua interesset eum, luptatum maluisset est at. Ex his quas malis, scripta molestiae usu at. Ei animal singulis mei. Te his habeo minim referrentur. Eum ut cetero prodesset voluptatum, an mutat ludus persecuti vim.\r\n\r\nLegere feugiat reformidans eu eos, et iudico decore copiosae eos. Ei quod commodo ius. Doming possim vituperata mei ne, id mucius audiam mea, vim putent propriae similique ex. Falli oratio abhorreant no vix.\r\n\r\nTe qui magna lorem dignissim, debet choro id vis, te qui eripuit expetenda. Eam sale sapientem te, minimum persecuti et has. No eum oratio propriae. Ut nec purto rebum constituam. Et nec vidisse percipit ocurreret, graeco deserunt vix at.\r\n\r\nEst iudico ceteros definiebas et. An impedit legendos reprehendunt ius. Et nam autem nemore consequuntur, vix ea quidam virtute, in mea assum fierent definitionem. Quando cotidieque suscipiantur no cum. Ea admodum postulant nam, scaevola consequuntur vel in, elit dolore atomorum id nec.', 'en', 'luxtai', 'microwave', '/test.zip', NULL, NULL),
(4, 3, '5050', '5050', '{ \"img1\":\"/uploads/product/juicer-2.png\",\r\n \"img2\":\"/images/Product2.png\", \"img3\":\"/images/Product3.png\", \"img4\":\"/images/Product4.png\" }', 'Lorem ipsum dolor sit amet mel putant sententiae ne, euismod omnesque quaestio ex quo. Reque indoctum an mel. Eos cu dicta tempor apeirian. Usu at probo gubergren neglegentur, ei voluptua conceptam quo.\r\n\r\nAn lorem voluptua interesset eum, luptatum maluisset est at. Ex his quas malis, scripta molestiae usu at. Ei animal singulis mei. Te his habeo minim referrentur. Eum ut cetero prodesset voluptatum, an mutat ludus persecuti vim.\r\n\r\nLegere feugiat reformidans eu eos, et iudico decore copiosae eos. Ei quod commodo ius. Doming possim vituperata mei ne, id mucius audiam mea, vim putent propriae similique ex. Falli oratio abhorreant no vix.\r\n\r\nTe qui magna lorem dignissim, debet choro id vis, te qui eripuit expetenda. Eam sale sapientem te, minimum persecuti et has. No eum oratio propriae. Ut nec purto rebum constituam. Et nec vidisse percipit ocurreret, graeco deserunt vix at.\r\n\r\nEst iudico ceteros definiebas et. An impedit legendos reprehendunt ius. Et nam autem nemore consequuntur, vix ea quidam virtute, in mea assum fierent definitionem. Quando cotidieque suscipiantur no cum. Ea admodum postulant nam, scaevola consequuntur vel in, elit dolore atomorum id nec.', 'en', 'luxtai', 'juicer', '/test.zip', NULL, NULL),
(5, 4, '1213', '1213', '{ \"img1\":\"/sfm-fa/assets/images/sample/product-1.png\",\r\n \"img2\":\"/images/Product2.png\", \"img3\":\"/images/Product3.png\", \"img4\":\"/images/Product4.png\" }', 'سشیشسیشسیشسی', 'fa', 'luxtai', 'microwave', '/test.zip', NULL, NULL),
(6, 4, '1314', '1314', '{ \"img1\":\"/sfm-fa/assets/images/sample/product-1.png\",\r\n \"img2\":\"/images/Product2.png\", \"img3\":\"/images/Product3.png\", \"img4\":\"/images/Product4.png\" }', 'سشیشسیشسیشسیf', 'fa', 'luxtai', 'juicer', '/test.zip', NULL, NULL),
(7, 4, '5040', '5040', '{ \"img1\":\"/sfm-fa/assets/images/sample/product-1.png\",\r\n \"img2\":\"/images/Product2.png\", \"img3\":\"/images/Product3.png\", \"img4\":\"/images/Product4.png\" }', 'سشیشسیشسیشسیf', 'fa', 'luxtai', 'juicer', '/test.zip', NULL, NULL),
(8, 4, '1617', '1617', '{ \"img1\":\"/sfm-fa/assets/images/sample/product-1.png\",\r\n \"img2\":\"/images/Product2.png\", \"img3\":\"/images/Product3.png\", \"img4\":\"/images/Product4.png\" }', 'سشیشسیشسیشسیf', 'fa', 'komtai', 'microwave', '/test.zip', NULL, NULL),
(9, 4, '1718', '1718', '{ \"img1\":\"/sfm-fa/assets/images/sample/product-1.png\",\r\n \"img2\":\"/images/Product2.png\", \"img3\":\"/images/Product3.png\", \"img4\":\"/images/Product4.png\" }', 'سشیشسیشسیشسیf', 'fa', 'komtai', 'juicer', '/test.zip', NULL, NULL),
(10, 4, '1819', '1819', '{ \"img1\":\"/sfm-fa/assets/images/sample/product-1.png\",\r\n \"img2\":\"/images/Product2.png\", \"img3\":\"/images/Product3.png\", \"img4\":\"/images/Product4.png\" }', 'سشیشسیشسیشسی', 'fa', 'komtai', 'microwave', '/test.zip', NULL, NULL),
(11, 4, '2020', '2020', '{ \"img1\":\"/sfm-fa/assets/images/sample/product-1.png\",\r\n \"img2\":\"/images/Product2.png\", \"img3\":\"/images/Product3.png\", \"img4\":\"/images/Product4.png\" }', 'سشیشسیشسیشسیf', 'fa', '', 'microwave', '/test.zip', NULL, NULL),
(12, 4, '2123', '2123', '{ \"img1\":\"/sfm-fa/assets/images/sample/product-1.png\",\r\n \"img2\":\"/images/Product2.png\", \"img3\":\"/images/Product3.png\", \"img4\":\"/images/Product4.png\" }', 'سشیشسیشسیشسیf', 'fa', '', 'heater', '/test.zip', NULL, NULL),
(13, 4, '2121', '2121', '{ \"img1\":\"/sfm-fa/assets/images/sample/product-1.png\",\r\n \"img2\":\"/images/Product2.png\", \"img3\":\"/images/Product3.png\", \"img4\":\"/images/Product4.png\" }', 'سشیشسیشسیشسیf', 'fa', 'expanse', 'microwave', '/test.zip', NULL, NULL),
(14, 4, '2222', '2222', '{ \"img1\":\"/sfm-fa/assets/images/sample/product-1.png\",\r\n \"img2\":\"/images/Product2.png\", \"img3\":\"/images/Product3.png\", \"img4\":\"/images/Product4.png\" }', 'سشیشسیشسیشسیf', 'fa', '', 'microwave', '/test.zip', NULL, NULL),
(15, 4, '989', '989', '{ \"img1\":\"/sfm-fa/assets/images/sample/product-1.png\",\r\n \"img2\":\"/images/Product2.png\", \"img3\":\"/images/Product3.png\", \"img4\":\"/images/Product4.png\" }', 'سشیشسیشسیشسی', 'en', 'komtai', 'juicer', '/test.zip', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageUrls` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supports`
--

CREATE TABLE `supports` (
  `id` int(11) NOT NULL,
  `code` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `name` varchar(50) COLLATE utf8_persian_ci NOT NULL,
  `email` varchar(80) COLLATE utf8_persian_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_persian_ci NOT NULL,
  `message` text COLLATE utf8_persian_ci NOT NULL,
  `lang` varchar(15) COLLATE utf8_persian_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;

--
-- Dumping data for table `supports`
--

INSERT INTO `supports` (`id`, `code`, `name`, `email`, `tel`, `message`, `lang`, `updated_at`, `created_at`) VALUES
(1, 'UGHYIZXYZDISPXN8B4IFCV', 'wer', 'wer@gmail.com', 'wer', 'wer', '', '2019-03-10 04:05:40', '2019-03-10 04:05:40'),
(2, 'PNHCBGFJE054SD43CLRVAN', 'sadsad', 'asd@gmail.com', 'asd', 'asd', 'en', '2019-03-10 05:51:14', '2019-03-10 05:51:14'),
(5, 'ORNT7TUTMU90UUY5BAX9VC', 'sadd', 'asds@gmail.com', 'asda', 'da', 'en', '2019-03-10 05:52:20', '2019-03-10 05:52:20'),
(6, 'JGSEKXR0GNXET6AZBSWULL', 'ali hajizadeh', 'info@cafelead.agency', 'asd', 'kl', 'fa', '2019-03-11 05:06:48', '2019-03-11 05:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'ماشین', 'salam', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
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
(1, 'hadi', 'hadi.abedzadeh@hotmail.com', NULL, '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', 'sQaxEXxRGOON1SK3m9U1eQPfe7kPc9iMJs258EIRdyjeGmd1Zh7pu2reu20s', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blg_categories`
--
ALTER TABLE `blg_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blg_comments`
--
ALTER TABLE `blg_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blg_comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `blg_posts`
--
ALTER TABLE `blg_posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blg_posts_slug_unique` (`slug`),
  ADD KEY `blg_posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`post_id`,`category_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `crd_cards`
--
ALTER TABLE `crd_cards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `crd_cards_page_id_foreign` (`page_id`);

--
-- Indexes for table `crd_pages`
--
ALTER TABLE `crd_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `modules`
--
ALTER TABLE `modules`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `modules_name_unique` (`name`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`post_id`,`tag_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products_lists`
--
ALTER TABLE `products_lists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_lists_product_id_foreign` (`product_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supports`
--
ALTER TABLE `supports`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
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
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `blg_categories`
--
ALTER TABLE `blg_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blg_comments`
--
ALTER TABLE `blg_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blg_posts`
--
ALTER TABLE `blg_posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `crd_cards`
--
ALTER TABLE `crd_cards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `crd_pages`
--
ALTER TABLE `crd_pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `modules`
--
ALTER TABLE `modules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products_lists`
--
ALTER TABLE `products_lists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supports`
--
ALTER TABLE `supports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blg_comments`
--
ALTER TABLE `blg_comments`
  ADD CONSTRAINT `blg_comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `blg_posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blg_posts`
--
ALTER TABLE `blg_posts`
  ADD CONSTRAINT `blg_posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `crd_cards`
--
ALTER TABLE `crd_cards`
  ADD CONSTRAINT `crd_cards_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `crd_pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products_lists`
--
ALTER TABLE `products_lists`
  ADD CONSTRAINT `products_lists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
