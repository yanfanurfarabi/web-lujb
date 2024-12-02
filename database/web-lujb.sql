-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 02, 2024 at 04:33 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web-lujb`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BannerCategory` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `image`, `BannerCategory`, `created_at`, `updated_at`) VALUES
(1, 'Banner Service', '1728545168.jpg', 'Service', NULL, '2024-10-10 00:26:09'),
(5, 'Banner About Us', '1729504690.jpg', 'About Us', '2024-10-21 02:58:10', '2024-10-21 02:58:10'),
(6, 'Banner Contact Us', '1729504764.jpg', 'Contact Us', '2024-10-21 02:59:24', '2024-10-21 02:59:24'),
(7, 'Banner Products', '1731305726.jpg', 'Product', '2024-11-10 23:15:26', '2024-11-10 23:15:26'),
(8, 'Banner Contact Us Mobile', '1731912305.jpg', 'Contact Us', '2024-11-17 23:45:06', '2024-11-17 23:45:06'),
(9, 'Banner Service Mobile', '1731912560.jpg', 'Service', '2024-11-17 23:49:20', '2024-11-17 23:49:20'),
(10, 'Banner Products Mobile', '1731912582.jpg', 'Product', '2024-11-17 23:49:42', '2024-11-17 23:49:42'),
(11, 'Banner About Us Mobile', '1731912609.jpg', 'About Us', '2024-11-17 23:50:09', '2024-11-17 23:50:09'),
(12, 'Banner ISO', '1731986052.jpg', 'WBS', '2024-11-18 20:09:53', '2024-11-18 20:14:12'),
(13, 'Banner ISO Mobile', '1731988871.jpg', 'WBS', '2024-11-18 20:44:38', '2024-11-18 21:01:11');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `name`, `image`, `isActive`, `created_at`, `updated_at`) VALUES
(1, 'Pertamina', '1731921562.png', 1, '2024-11-18 02:19:22', '2024-11-18 02:19:22'),
(2, 'Pertamina Patra Niaga', '1731921901.png', 1, '2024-11-18 02:25:01', '2024-11-18 02:25:01'),
(3, 'Pertamina Retail', '1731921921.png', 1, '2024-11-18 02:25:21', '2024-11-18 02:25:21'),
(4, 'PERTAMINA Energy Terminal', '1731921967.png', 1, '2024-11-18 02:26:07', '2024-11-18 02:26:07'),
(5, 'Peteka Karya Jala', '1731921990.png', 1, '2024-11-18 02:26:30', '2024-11-18 02:26:30'),
(6, 'Star Energy Geothermal', '1731922004.png', 1, '2024-11-18 02:26:44', '2024-11-18 02:26:44'),
(7, 'PT Barata', '1731922017.png', 1, '2024-11-18 02:26:57', '2024-11-18 02:26:57'),
(8, 'PT Berca Hardayaperkasa', '1731922035.png', 1, '2024-11-18 02:27:15', '2024-11-18 02:27:15'),
(9, 'Pt Elnusa', '1731922049.png', 1, '2024-11-18 02:27:29', '2024-11-18 02:27:29'),
(10, 'PT Wika', '1731922064.png', 1, '2024-11-18 02:27:44', '2024-11-18 02:27:44'),
(11, 'PT Ganda alam Makmur', '1731922125.png', 1, '2024-11-18 02:28:45', '2024-11-18 02:28:45'),
(12, 'Polda Metro Jaya', '1731922139.png', 1, '2024-11-18 02:28:59', '2024-11-18 02:28:59'),
(13, 'pt Maspion energy', '1731922155.png', 1, '2024-11-18 02:29:16', '2024-11-18 02:29:16'),
(14, 'Bukaka', '1731922167.png', 1, '2024-11-18 02:29:27', '2024-11-18 02:29:27'),
(15, 'INDOMOBIL', '1731922182.png', 1, '2024-11-18 02:29:42', '2024-11-18 02:29:42'),
(16, 'Pelindo', '1731922205.png', 1, '2024-11-18 02:30:05', '2024-11-18 02:30:05'),
(17, 'PT PP', '1731922337.png', 1, '2024-11-18 02:32:17', '2024-11-18 02:32:17');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Kontak', 'Phone : (021) 6530 1482Fax : (021) 6530 2313Email : LUJB_indo@hotmail.com', NULL, '2024-11-07 23:58:33'),
(2, 'Address', 'Jl. Gunung Sahari Raya 1,<br>\r\nBlok A-13 Jakarta Pusat 10720, Indonesia', '2024-11-19 03:04:29', '2024-11-19 03:04:29'),
(3, 'Short Description', 'Specialized in Petrol Station Equipment Products and Installation.', '2024-11-19 03:05:13', '2024-11-19 03:05:13');

-- --------------------------------------------------------

--
-- Table structure for table `generaldata`
--

CREATE TABLE `generaldata` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generaldata`
--

INSERT INTO `generaldata` (`id`, `name`, `value`, `created_at`, `updated_at`) VALUES
(1, 'Home Headline', 'Specialized  in Petrol Station <br>\r\nEquipment Products and Installation', NULL, '2024-10-08 03:26:45'),
(14, 'Home Product Title', 'Our Core Products', '2024-11-10 20:57:35', '2024-11-10 20:57:35'),
(15, 'Home Content Title', 'Why Us', '2024-11-10 20:57:46', '2024-11-10 20:57:46'),
(16, 'Home Content Body', 'Years of experience in the field of gas stations, we ensure you will be satisfied with the services we provide.\r\n<br><br>\r\nWe provide the best quality gas station equipment that has certainly been tested. Our professional team is always ready to help you for maintenance or ask questions about products and others.', '2024-11-10 20:58:00', '2024-11-10 21:03:02'),
(17, 'Home Slider', 'Trusted By', '2024-11-10 20:58:26', '2024-11-10 20:58:26'),
(18, 'Home Contact Text', 'Interested With Our Product and Services?', '2024-11-10 20:58:40', '2024-11-12 02:30:15'),
(19, 'Services Section 1 Title', 'Maintenance', '2024-11-10 21:07:02', '2024-11-10 21:07:02'),
(20, 'Services Section 1 Body', 'We all want our gas station equipment to remain in optimal condition. Also, to reduce the cost of replacing parts is more expensive than maintaining them, hence maintenance is important.\r\n<br><br>\r\nGas station equipment has different durability, to stay in the best condition and not disrupt operations, or even worse is the occurrence of accidents.\r\n\r\nOur team of experts is ready to serve for the maintenance of gas station equipment such as :\r\n<li>fuel dispensers</li>\r\n<li>hoses</li>\r\n<li>nozzles, and others.</li>', '2024-11-10 21:14:30', '2024-11-10 23:55:54'),
(21, 'Services Section 1 Title', 'Construction', '2024-11-10 21:14:58', '2024-11-10 21:14:58'),
(22, 'Services Section 2 Body', 'Not only maintenance and installation, we are also willing to help you realize your dream of building a gas station. We are ready to listen to your wishes or aspirations. Discuss to our team to realize your dream.', '2024-11-10 21:15:12', '2024-11-10 21:15:12'),
(23, 'Services Section 3 Title', 'Equipment Installation', '2024-11-10 21:15:33', '2024-11-10 21:15:33'),
(24, 'Services Section 3 Body', 'For more than 15 years in the field of supplying and installing gas station parts, we have been trusted by several companies and state-owned enterprises (BUMN) to be a vendor for providing and installing gas station equipment in Indonesia.\r\n<br><br>\r\nWe ensure precise and accurate installation of gas station equipment for safe and comfortable operations. We guarantee security and safety for the installation of gas station equipment.', '2024-11-10 21:15:53', '2024-11-10 21:15:53'),
(25, 'Services Section 4 Title', 'Hydrostatic Test', '2024-11-10 21:16:09', '2024-11-10 21:16:09'),
(26, 'Services Section 4 Body', 'To keep your gas station equipment in optimal condition, our expert team is ready to serve you for maintenance of gas station parts such as fuel dispensers, atgs, and others.', '2024-11-10 21:16:22', '2024-11-10 21:16:22'),
(27, 'Profile Section 1 Title', 'PT LADANG USAHA JAYA BERSAMA', '2024-11-10 21:19:00', '2024-11-10 21:19:00'),
(28, 'Profile Section 1 Body', 'PT Ladang Usaha Jaya Bersama has been serving the Indonesia market since 2007. We specialize in Petrol Station Equipment Products and Installation. Our team offers quality and reliable service you can count on. In addition, our friendly and professional team is here to answer any questions you may have about our company or our services. Whether you need Dispensing Pump, Underground Piping system, Submersible Turbine Pump, Automatic Tank Gauging, or even Aluminum Composite Panel, we have what you need at prices you can afford. At PT Ladang Usaha Jaya Bersama, our goal is to provide you with courteous, expedient, professional service of the highest caliber.', '2024-11-10 21:19:15', '2024-11-10 21:19:15'),
(29, 'Profile Section 2 Title', 'Exellence and reliability', '2024-11-10 21:19:52', '2024-11-10 21:19:52'),
(30, 'Profile Section 2 Body', 'PT Ladang Usaha Jaya Bersama is a leading provider of Fuel Dispensing Equipment Established in 2007, we have built a reputation for excellence and reliability in supporting gas stations across Indonesia. Our commitment to quality and innovation ensures that our clients benefit from top-notch solutions designed to enhance operational efficiency and customer satisfaction.', '2024-11-10 21:20:10', '2024-11-10 21:20:10'),
(31, 'Vision', 'Vision', '2024-11-10 21:20:26', '2024-11-10 21:20:26'),
(32, 'Vision Body', 'Our mission is to deliver exceptional value to the gas station industry by providing high-quality products and services that meet the evolving needs of our clients. We are dedicated to innovation, customer excellence, operational integrity, and sustainability in all our endeavors.', '2024-11-10 21:20:39', '2024-11-10 21:20:39'),
(33, 'Mission', 'Mission', '2024-11-10 21:20:47', '2024-11-10 21:20:47'),
(34, 'Mission Body', 'To be the premier partner in the gas station industry, leading through innovation, sustainability, and unparalleled service. We envision a future where our contributions drive industry standards, enhance operational efficiencies, and support a sustainable energy future.', '2024-11-10 21:20:56', '2024-11-10 21:20:56'),
(35, 'Profile Section 3 Title', 'Message from our Director', '2024-11-10 21:21:11', '2024-11-10 21:21:11'),
(36, 'Profile Section 3 Body', 'From the beginning, our mission has been to provide not just fuel, but also exceptional service and a reliable experience for our customers. As we continue to grow and evolve, your dedication plays a pivotal role in helping us achieve this mission. Each of you contributes to creating a welcoming environment, ensuring that every interaction with our brand is marked by excellence and trust.\r\n<br><br>\r\nThe energy sector is dynamic and challenging, yet it is your hard work and resilience that help us meet these challenges head-on. Your commitment to upholding our high standards and your proactive approach to addressing the needs of our customers make all the difference.\r\n<br><br>\r\nLooking ahead, we are excited about the future and the opportunities it holds. We are committed to investing in new technologies and practices that will enhance our service offerings and support your efforts in delivering top-notch customer experiences.\r\n<br><br>\r\nThank you for your unwavering support and dedication. Together, we will continue to drive success and make a positive impact in the communities we serve.', '2024-11-10 21:22:36', '2024-11-10 21:22:36'),
(37, 'Profile Slider Title', 'Our Clients', '2024-11-10 21:22:55', '2024-11-10 21:22:55'),
(38, 'Contact Text', 'Phone: (021) 65301482\r\n<br>\r\nFax Number: (021) 65302313\r\n<br>\r\nEmail: LUJB_indo@hotmail.com', '2024-11-10 21:23:27', '2024-11-11 00:06:07'),
(39, 'Contact Message Text', 'We welcome your value and feedback', '2024-11-11 00:06:40', '2024-11-11 00:06:40'),
(40, 'WBS Page Title', 'Whistleblowing System', '2024-11-18 23:41:28', '2024-11-18 23:41:28'),
(41, 'WBS Page Body', 'The Whistleblowing Management System aims to create a comfortable working environment, by managing complaints or disclosures of events that can cause financial and non-financial losses, including a decline in the Company’s image.\r\n                <br><br>\r\n                This system is designed to ensure that any violations found in the Company, both external and internal, can be followed up immediately without disrupting the stability of ongoing business, without affecting the Company’s image and reputation, and creating a climate of openness to all available resources.\r\n                <br><br>All problems and violations are followed up while ensuring that the whistleblower, whether a private person or a company, can be protected in line with the Company’s commitment to uphold ethics, morals and the law.\r\n                The explanation of the rights attached to the Whistleblower can be explained in more detail as follows:\r\n                <br><br>\r\n                <ul class=\"text-black list-disc list-inside\">\r\n                    <li>\r\n                    The right to be protected from violence and or threats of violence both physically and psychologically means security and escort, including but not limited to the right to maintain the confidentiality of his identity both by the reported party, as well as other people who do not have the basic right to know his identity.\r\n                    </li>\r\n                    <li>\r\n                        The right to obtain access to the procedural handling of reports/complaints in the form of information on the progress of the reported case, access to making reports of alleged bribery crimes cheaply, easily, and quickly from the Anti-Bribery Management System implementer.\r\n                    </li>\r\n                    <li>\r\n                        The right not to be prosecuted legally for reports or complaints made means the right to be protected from retaliation by the reported party and / or other affiliated parties both in civil law, as well as criminal law that applies in the company environment in particular and applies in the Unitary State of the Republic of Indonesia in general.\r\n                    </li>\r\n                    <li>\r\n                        The right to medical, psychological and psychosocial assistance means the right to rehabilitation from the company in the event of violence committed by the reported party or other affiliated parties in the form of medical rehabilitation, psychological rehabilitation and psychosocial rehabilitation.\r\n                    </li>\r\n                    <li>\r\n                        The right to compensation facilities is the right in the form of gifts and / or merit in the event that the reporting made by the Whistleblower is able to expose the crime of bribery within the company and ends up saving the continuity and sustainability of the company’s business.\r\n                    </li>\r\n                </ul>', '2024-11-18 23:42:51', '2024-11-18 23:44:33');

-- --------------------------------------------------------

--
-- Table structure for table `generalimage`
--

CREATE TABLE `generalimage` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generalimage`
--

INSERT INTO `generalimage` (`id`, `name`, `image`, `isActive`, `created_at`, `updated_at`, `category`) VALUES
(4, 'Dispensing Pump Banner', '1732156831.jpg', 1, '2024-11-10 20:24:11', '2024-11-20 19:40:31', 'Home'),
(5, 'Turbine Pump', '1731295598.jpg', 1, '2024-11-10 20:26:38', '2024-11-18 00:12:36', 'Home'),
(6, 'Guihe ATG', '1731295628.jpg', 1, '2024-11-10 20:27:08', '2024-11-18 00:12:55', 'Home'),
(7, 'Dantec Hose', '1731295651.jpg', 1, '2024-11-10 20:27:31', '2024-11-18 00:12:59', 'Home'),
(8, 'LC Flowmeter', '1731295696.jpg', 1, '2024-11-10 20:28:16', '2024-11-18 00:13:04', 'Home'),
(9, 'Halock Hose', '1731295717.jpg', 1, '2024-11-10 20:28:37', '2024-11-18 00:13:09', 'Home'),
(10, 'Home_Content', '1731296188.jpeg', 1, '2024-11-10 20:36:28', '2024-11-18 00:13:14', 'Home'),
(11, 'Services_Maintenance', '1731296227.jpg', 1, '2024-11-10 20:37:07', '2024-11-18 00:13:23', 'Service'),
(12, 'Services_Installation', '1731296258.jpg', 1, '2024-11-10 20:37:38', '2024-11-18 00:13:28', 'Service'),
(13, 'Services_Hydrotest', '1731296414.jpeg', 1, '2024-11-10 20:40:14', '2024-11-18 00:13:34', 'Service'),
(14, 'Our_Team', '1731296484.jpg', 1, '2024-11-10 20:41:24', '2024-11-18 00:13:43', 'About Us'),
(15, 'Profile_Section2', '1731296556.jpeg', 1, '2024-11-10 20:42:36', '2024-11-18 00:13:50', 'About Us'),
(16, 'Director', '1731296607.jpg', 1, '2024-11-10 20:43:27', '2024-11-18 00:13:55', 'About Us'),
(17, 'Construction Banner', '1731484147.jpg', 1, '2024-11-13 00:49:08', '2024-11-18 00:14:05', 'Service'),
(18, 'Banner Inquiry', '1731490799.jpg', 1, '2024-11-13 02:37:56', '2024-11-18 00:16:56', 'General'),
(19, 'Vision Image', '1732007415.png', 1, '2024-11-19 02:10:15', '2024-11-19 02:10:15', 'About Us'),
(20, 'Mission Image', '1732007432.png', 1, '2024-11-19 02:10:32', '2024-11-19 02:10:32', 'About Us'),
(21, 'BG Visi Misi', '1732008439.jpg', 1, '2024-11-19 02:27:19', '2024-11-19 02:27:19', 'About Us'),
(23, 'Sanki Banner Mobile', '1733107806.jpg', 1, '2024-12-01 19:50:07', '2024-12-01 19:50:07', 'Home'),
(24, 'Guihe Banner Mobile', '1733107850.jpg', 1, '2024-12-01 19:50:50', '2024-12-01 19:50:50', 'Home'),
(25, 'Dantec Banner Mobile', '1733107867.jpg', 1, '2024-12-01 19:51:07', '2024-12-01 19:51:07', 'Home'),
(26, 'LC Meter Banner Mobile', '1733107885.jpg', 1, '2024-12-01 19:51:25', '2024-12-01 19:51:25', 'Home'),
(27, 'Halock Banner Mobile', '1733107901.jpg', 1, '2024-12-01 19:51:41', '2024-12-01 19:51:41', 'Home');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2024_09_05_093846_create_banners', 1),
(2, '2024_09_05_093911_create_products', 1),
(3, '2024_09_05_094006_create_footers', 1),
(4, '2024_10_03_023238_create_generaldatas_table', 1),
(5, '2024_10_03_024333_create_cache_table', 1),
(6, '2024_10_03_033201_create_sessions_table', 1),
(7, '2024_11_12_100438_add_category_to_table_name', 2),
(8, '2024_11_14_021048_drop_product_category_table', 3),
(9, '2024_11_18_070052_add_column_category_to_generalimage', 4),
(10, '2024_11_18_070508_remove_status_from_generalimage', 5),
(11, '2024_11_18_070603_add_column_category_to_generalimage', 6),
(12, '2024_11_19_100323_remove_column_is_active_from_footer', 7),
(13, '2024_11_20_034239_create_user_table', 8),
(14, '2024_11_20_062334_create_users_table', 9),
(15, '2024_11_20_062418_drop_table_user', 9),
(16, '2024_11_20_064245_add_role_to_users_table', 10),
(17, '2024_11_20_073645_create_personal_access_tokens_table', 11),
(18, '2024_11_21_080801_create_mails_table', 12),
(19, '2024_11_22_091711_create_contacts_table', 13),
(20, '2024_11_22_092028_drop_table_mails', 13);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `spec` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bannerimage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sortOrder` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isActive` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `desc`, `spec`, `bannerimage`, `sortOrder`, `isActive`, `created_at`, `updated_at`, `category`) VALUES
(1, 'Sanki 1 Nozzle Fuel Dispenser', 'Affordable 1 nozzle high speed fuel dispenser.', '1 Nozzle\r\n1 Product\r\n1 LCD Display\r\n1 Vane Pump\r\n1 Motor\r\nEmergency Stop\r\nBreakaway', '1731382337.png', '3', 1, '2024-10-22 00:01:57', '2024-11-12 03:25:34', 'Fuel Pump'),
(2, 'Sanki Multimedia Dispenser 4 Nozzle', 'A Fuel Dispenser Multimedia is a fuel dispenser equipped with a digital screen that displays ads,', '4 Nozzle\r\n2 Product\r\n4 LCD Display\r\n 2 touch screen 32” (Android 12 4/16)\r\n 2 printer\r\n 2 NFC/QR scanner\r\n Hose Retractor\r\n Breakaway', '1731317095.png', '2', 1, '2024-11-11 01:46:05', '2024-11-12 03:25:40', 'Fuel Pump'),
(3, 'Multimedia Dispenser 6 Nozzle', 'A Fuel Dispenser Multimedia is a fuel dispenser equipped with a digital screen that displays ads.', '6 Nozzle\r\n 3 Product\r\n 4 LCD Display\r\n 2 touch screen 32” (Android 12 4/16)\r\n 2 printer\r\n 2 NFC/QR scanner\r\n Hose Retractor\r\n Breakaway', '1731317256.png', '4', 1, '2024-11-11 02:09:22', '2024-11-12 03:25:47', 'Fuel Pump'),
(4, 'Sanki Multimedia Dispenser 8 Nozzle', 'A Fuel Dispenser Multimedia is a fuel dispenser equipped with a digital screen that displays ads.', '8 Nozzle\r\n 4 Product\r\n 4 LCD Display\r\n 2 touch screen 32” (Android 12 4/16)\r\n 2 printer\r\n 2 NFC/QR scanner\r\n Breakaway', '1731317180.png', '5', 1, '2024-11-11 02:26:20', '2024-11-12 03:26:02', 'Fuel Pump'),
(5, 'Sanki Pressure Type 2 Front Nozzle Fuel Dispenser', 'In this type, the pressure pump is typically installed inside the storage tank, not within the dispenser. This pump pushes the fuel from the storage tank to the dispenser using pressure. Because the fuel is driven by pressure, this system tends to be more efficient and provides a stronger flow, making it suitable for fuel stations with high sales volumes or locations requiring longer fuel delivery distances.', '<ul>\r\n<li>2 Nozzle</li>\r\n <li>2 Product</li>\r\n <li>2 LCD Display (Nozzle depan)</li>\r\n <li>4 LCD Display (Nozzle samping)</li>\r\n <li>1 Biult-in Printer</li>\r\n <li>Oil cap tray</li>\r\n <li>Emergency Stop</li>\r\n<li>Emergency Shut Off Valve</li>\r\n</ul>', '1731317364.png', '6', 1, '2024-11-11 02:29:24', '2024-11-13 00:27:56', 'Fuel Pump'),
(6, 'Sanki Pressure Type 2 Side Nozzle Fuel Dispenser', 'In this type, the pressure pump is typically installed inside the storage tank, not within the dispenser. This pump pushes the fuel from the storage tank to the dispenser using pressure. Because the fuel is driven by pressure, this system tends to be more efficient and provides a stronger flow, making it suitable for fuel stations with high sales volumes or locations requiring longer fuel delivery distances.', '○ 2 Nozzle\r\n ○ 2 Product\r\n ○ 2 LCD Display (Nozzle depan)\r\n ○ 4 LCD Display (Nozzle samping)\r\n ○ 1 Biult-in Printer\r\n ○ Oil cap tray\r\n ○ Emergency Stop\r\n ○ Emergency Shut Off Valve', '1731317461.png', '7', 1, '2024-11-11 02:31:01', '2024-11-14 02:38:45', 'Fuel Pump'),
(7, 'Sanki 4 Nozzle Fuel Dispenser', 'In this type, the pressure pump is typically installed inside the storage tank, not within the dispenser. This pump pushes the fuel from the storage tank to the dispenser using pressure. Because the fuel is driven by pressure, this system tends to be more efficient and provides a stronger flow, making it suitable for fuel stations with high sales volumes or locations requiring longer fuel delivery distances.', '○ 4 Nozzle\r\n ○ 2 Product\r\n ○ 4 LCD Display\r\n ○ 2 Built-in Printer\r\n ○ Oil cap tray\r\n ○ Emergency Stop\r\n ○ Emergency Shut Off Valve', '1731318150.png', '7', 1, '2024-11-11 02:42:30', '2024-11-14 02:38:53', 'Fuel Pump'),
(8, 'Sanki 6 Nozzle Fuel Dispenser Built-in Printer', 'In this type, the pressure pump is typically installed inside the storage tank, not within the dispenser. This pump pushes the fuel from the storage tank to the dispenser using pressure. Because the fuel is driven by pressure, this system tends to be more efficient and provides a stronger flow, making it suitable for fuel stations with high sales volumes or locations requiring longer fuel delivery distances.', '○ 6 Nozzle\r\n ○ 3 Product\r\n ○ 4 LCD Display\r\n ○ 2 Built-in Printer\r\n ○ Oil cap tray\r\n ○ Emergency Stop\r\n ○ Emergency Shut Off Valve', '1731318298.png', '8', 1, '2024-11-11 02:44:58', '2024-11-14 02:38:58', 'Fuel Pump'),
(9, 'Sanki 4 Nozzle Pressure Type Fuel Dispenser', 'In this type, the pressure pump is typically installed inside the storage tank, not within the dispenser. This pump pushes the fuel from the storage tank to the dispenser using pressure. Because the fuel is driven by pressure, this system tends to be more efficient and provides a stronger flow, making it suitable for fuel stations with high sales volumes or locations requiring longer fuel delivery distances.', '○ 4 Nozzle\r\n ○ 2 Product\r\n ○ 2 LCD Display\r\n ○ Emergency Stop\r\n ○ Breakaway\r\n ○ Without Printer\r\n ○ Emergency Shut Off Valve', '1731318369.png', '9', 1, '2024-11-11 02:46:09', '2024-11-14 02:39:05', 'Fuel Pump'),
(10, 'Sanki 6 Nozzle Pressure Type Fuel Dispenser', 'In this type, the pressure pump is typically installed inside the storage tank, not within the dispenser. This pump pushes the fuel from the storage tank to the dispenser using pressure. Because the fuel is driven by pressure, this system tends to be more efficient and provides a stronger flow, making it suitable for fuel stations with high sales volumes or locations requiring longer fuel delivery distances.', '○ 6 Nozzle\r\n ○ 3 Product\r\n ○ 2 LCD Display\r\n ○ Emergency Stop\r\n ○ Breakaway\r\n ○ Without Printer\r\n ○ Emergency Shut Off Valve', '1731318604.png', '10', 1, '2024-11-11 02:50:04', '2024-11-14 02:39:12', 'Fuel Pump'),
(11, 'Sanki 4 Nozzle Pressure Type Fuel Dispenser', 'In this type, the pressure pump is typically installed inside the storage tank, not within the dispenser. This pump pushes the fuel from the storage tank to the dispenser using pressure. Because the fuel is driven by pressure, this system tends to be more efficient and provides a stronger flow, making it suitable for fuel stations with high sales volumes or locations requiring longer fuel delivery distances.', '○ 8 Nozzle\r\n ○ 4 Product\r\n ○ 2 LCD Display\r\n ○ Emergency Stop\r\n ○ Breakaway\r\n ○ Without Printer\r\n ○ Emergency Shut Off Valve', '1731318661.png', '12', 1, '2024-11-11 02:51:01', '2024-11-14 02:39:20', 'Fuel Pump'),
(12, 'Sanki Fuel Dispenser 2 Nozzle 1 Product', 'Affordable, high durability, and easy maintenance fuel dispenser.', '○ 2 Nozzle\r\n ○ 1 Product\r\n ○ 2 LCD Display\r\n ○ 1 Vane Pump\r\n ○ 1 Motor\r\n ○ Emergency Stop\r\n ○ Breakaway', '1731391991.png', '15', 1, '2024-11-11 02:53:04', '2024-11-14 02:39:28', 'Fuel Pump'),
(13, 'Sanki 2 Nozzle 2 Product Fuel Dispenser', 'Affordable, easy maintenance and high technology', '○ 2 Nozzle\r\n ○ 2 Product\r\n ○ 2 LCD Display\r\n ○ 1 Vane Pump\r\n ○ 1 Motor\r\n ○ Emergency Stop\r\n ○ Breakaway', '1731392001.png', '16', 1, '2024-11-11 02:53:57', '2024-11-14 02:39:35', 'Fuel Pump'),
(14, 'Dantec Danchem Composite Hose', 'The Danchem range of composite hoses is manufactured from multiple layers of polypropylene fabrics and films. The inner wire helix is available in 316 stainless steel and polypropylene coated steel. The outer wire helix is available in 316 stainless steel and galvanised steel. The hose is typically manufactured with a PVC coated cover; however, PU coated cover and Polypropylene chemical resistant covers are available on request.\r\n\r\nHose is available in Standard Duty and Heavy Duty.\r\n\r\nStandard duty is used in applications such as plant transfers, road tanker use and rail tanker unloading.\r\n\r\nHeavy duty version is available for ship to shore and marine applications.', 'SIZES AVAILABLE:\r\nSTANDARD DUTY:\r\n1” – 4” (25MM – 100MM)\r\nHEAVY DUTY:\r\n4” – 10” (100MM – 250MM)\r\nTEMPERATURE RANGE:\r\n-30°C TO + 100°C\r\nMAXIMUM WORKING PRESSURE:\r\n14 BAR*\r\n\r\nVACUUM RANGE:\r\n0.9 BAR', '1731576810.png', '11', 1, '2024-11-14 02:33:30', '2024-11-14 02:33:30', 'Dantec Composite Hose'),
(15, 'Dantec Danoil Composite Hose', 'Danoil family of Dantec composite hoses come in 3 grades; Danoil 3 (light hydrocarbons) Danoil 7 (Heavier hydrocarbons) Danoil 9 (Biofuel, Aromatics, Solvents).\r\n\r\nBoth the Danoil 3 and Danoil 7 hoses, which are Dantec’s recommended hydrocarbon transfer hoses, are manufactured from multiple layers of polypropylene fabrics and films.\r\n\r\nThe inner helix is available in galvanised steel and aluminium. The outer wire is available in galvanised steel, and only in the case of the Danoil 3 is also available in aluminium.\r\n\r\nDanoil 9 range is a polyamide (nylon) lined version of the Danoil 7; This hose is used for products with high aromatic content and biofuels. The inner helix is available in 316 stainless steel, galvanised steel and aluminium, with the outer wire available in 316 stainless steel and galvanised steel.\r\n\r\nDanoil 3 range is a robust but light weight hose, which is only available as a 10.5 bar standard duty hose and is mainly used in gravity to low pressure applications, such as road tanker deliveries.\r\n\r\nDanoil 7 and Danoil 9 range are both 14 bar, tough high strength transfer hose and they are available in both standard and heavy duty.\r\n\r\nStandard duty version is used in rail car unloading and in plant transfers. Heavy duty is available for ship to shore and marine applications.', 'STANDARD DUTY:\r\n1” – 4” (25MM – 100MM)\r\nHEAVY DUTY:\r\n4” – 10” (100MM – 250MM)\r\nTEMPERATURE RANGE:\r\n-30°C TO + 100°C\r\nMAXIMUM WORKING PRESSURE:\r\n7 BAR (DANOIL 3AA)\r\n10.5 BAR (DANOIL 3AG, DANOIL 3GG)\r\n14 BAR (DANOIL 7, DANOIL 9)*\r\n\r\nVACUUM RANGE:\r\n0.9 BAR', '1731577089.png', '12', 1, '2024-11-14 02:38:09', '2024-11-14 02:38:09', 'Dantec Composite Hose'),
(16, 'Red Robe Standard Submersible Pump (STP)', 'The red robe was founded in 1983.In 1995 in response to the requirements of China\'s petroleum industry China successfully developed the first self-developed oil pump in China.The submarine oil pump has revolutionized the oil delivery technology of the gas station. It is changed from the negative pressure oil to the positive pressure oil which has brought great convenience to the design and operation of the gas station.Currently hongpao oil pump has applied for various certifications and patents such as UL and invention patent.', 'Certificate	EX NEPSI/UL\r\nPower	0.75 HP(0.55KW)Single Phase\r\n1.5HP(1.10KW)Single Phase\r\nSiphon 1pc	3/8 \"NPT vacuum degree reaches 635mmHG. Applicable dielectric standard steam diesel oil; gasoline and 15% formaldehyde or ethanol and 20% TAME ETBE MTBE mixture\r\nPressure Port 2pcs	1/4\"NPT\r\nVent 1pc	2\"NPT\r\nCE	ExdsⅡAT4\r\nQuick-Set	T1=75\"-102\"=1.91m-2.59m\r\nT2=98\"-132\"=2.49m-3.35m\r\nT3=132\"-199\"=3.35m-5.05m\r\n（1.5HP）', '1731577300.png', '17', 1, '2024-11-14 02:41:40', '2024-11-14 02:41:40', 'Red Robe'),
(17, 'Red Robe Hi Flow Submersible Pump (High Flow STP)', 'Introductions：\r\nRed-Robe Hi-flow submersible pump is in order to meet the large and medium-sized oil depot high flow oil unloading platform and the water gas station specially customized demand for oil is higher using industry leading technology excellent performance. It has been widely used in domestic petroleum products. Red-Robe Hi-flow submersible pump is designed and produced according to the needs of international oil companies and is widely concerned in the whole international market. Red-Robe Hi-flow submersible pump suitable for large flow to refuel in the oil wholesale center underground caverns hair oil platform water stations and the need for rapid refueling it can cooperate with hi-flow pumps in oil transportation.\r\n\r\nProduct functions:\r\nRed-Robe submersible pump with 3 HP and 5 HP different power for gasoline diesel and kerosene.\r\nIt has compact structure convenient installation and maintenance low noise smooth operation low failure rate and long service life.\r\nThe maximum flow rate is 1000 litres/min.\r\nA mechanical leak detection device can be selected for the oil pipeline and the accuracy of the test is 11.4 liters per hour in 69KPa condition.\r\nAbsorption component design supporting the design of a connected tank.\r\nThe pump head is equipped with a one-way valve to make the pipeline pressure detection simple.\r\nApplicable to standard gasoline and gasoline and 15% methanol or ethanol as well as with 20% TAME ETBE MTBE.\r\n \r\nStructural features:\r\nA flexible pump head with flexible structure\r\nFlange connection installation is convenient\r\nA sensor port check valve device\r\n6 inch support pipe 3 inch oil outlet\r\nEasy to repair quickly\r\nThe siphon generator oil pump recovery oil and gas port', 'Certification	EX NEPSI/ UL」\r\nPower	3 HP(2.20Kw)3Phase\r\n 	5 HP(3.67Kw)3Phase\r\n2 Siphon Port	3/8 \"NPT vacuum up to 635mm Hg suitable medium standard: gasoline dieselmixture of gasoline with 15% methanol or ethanol and with 20% TAME ETBEMTBE\r\n1 Pressure Test	1/4\"NPT\r\n1 Vent	1/4\"NPT\r\nEx-mark	ExdsII AT4 \r\nKeep-up Pressure	0-276Kpa\r\n\r\nPower	3HP 5HP	Outlet Pressuring Setting	160Kpa ~195Kpa\r\nWorking Voltage Range	380V/3P/50HZ	Pressure Differential	> 34Kpa\r\n380V-415V/3P/50HZ	Dimensions	Fixed length of tubeaccording to data from user\r\nMax. Flow Rate	600L/min (3HP) 1000L/min (5HP)	Fuel Compatibility	gasoline diesel mixture of gasoline with 15% methanol or ethanol and with 20% TAMEETBE MTBE\r\nProtection	Motor overheating protection with motor automatic power off function	Fixed Mode	Fixed by using 6\" supporting tube\r\nPressure Adjustable Range	0Kpa~276Kpa(Power of pipeline system when closing submersible pump)	Pipeline Leak Detection	11.4L/h(Mechanical leak detector and high flow diaphragm valve)', '1731577353.png', '18', 1, '2024-11-14 02:42:33', '2024-11-14 02:42:33', 'Red Robe'),
(18, 'Red Robe Smart Frequence Submersible Pump (Smart Frequence STP)', 'Introductions：\r\nVariable Speed Submersible Pump has brought benefits to the gas station at the peak time and Red-Robe intelligent variable frequency submersible pump can provide up to eight refueling guns at the same time. Constant flow rate ensures faster gas speed during rush hour improving daily sales volume and economic benefits.\r\n\r\nFunctions：\r\nThe intelligent Red-Robe submersible pump for gasoline diesel and kerosene\r\nConstant flow saves energy\r\nConvenient installation and maintenance services\r\nExcellent environmental protection features\r\nMore reliable safety performance', 'Power	2HP(1.5Kw)220V/50Hz Variable Speed\r\nSiphon 1pc	3/8”NPT Vaccum635mm Hg。\r\nPressure Port 1pc	1/4”NPT\r\nVent 1pc	1/4”NPT\r\nPressure	0-320KPa\r\n \r\nWorking voltage range	220-240V/Single Phase/50Hz	Factory pressure setting value	180Kpa～200 KPa\r\nMax Flow Rate	380L/min	Operating Pressure Differential	＞34 KPa\r\nProtection	Motor overheat protector with motor automatic power failure function	Size	The fixed length pump pipe is determined according to the user data\r\nPressure Range	0 Kpa～320 Kpa（Pipeline system pressure in closing oil pump）	Fixed Mode	Adopt a standard 4-inch support tube\r\nPipeline leak detection	11.4L/hour\r\n（Mechanical Leak Detector）	Fuel compatibility	Applicable media standard steam and diesel;Gasoline and 15% methanol or ethanol as well as a mixture of 20% TAME ETBE MTBE', '1731577408.png', '19', 1, '2024-11-14 02:43:28', '2024-11-14 02:43:28', 'Red Robe');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'admin', 'admin@example.com', NULL, '$2y$12$TIcj27LqgYcrXLQ9ucGXTudFVzgQVGpgPzCaAoF33vs5.fjAhxuGG', NULL, '2024-11-19 23:27:26', '2024-11-19 23:27:26', 'user'),
(2, 'Admin', 'ICCMadmin@lujb.com', NULL, '$2y$12$a07XF.jk53rSwB78qx8hmOLeuG1fhrKkOghP1oVqis8yqphvLJT/u', NULL, '2024-11-20 21:05:58', '2024-11-20 23:34:27', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generaldata`
--
ALTER TABLE `generaldata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generalimage`
--
ALTER TABLE `generalimage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `generaldata`
--
ALTER TABLE `generaldata`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `generalimage`
--
ALTER TABLE `generalimage`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
