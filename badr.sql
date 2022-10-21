-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 20, 2022 at 05:40 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `badr`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bg_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `img`, `bg_color`, `created_at`, `updated_at`) VALUES
(1, 'beauty', 'assets/images/shop/category/4.webp', '#dcffd2', NULL, NULL),
(2, 'cosmitic', 'assets/images/shop/category/1.webp', '#FFEDB4', NULL, NULL),
(3, 'health', 'assets/images/shop/category/6.webp', '#DFE4FF', NULL, NULL),
(4, 'makeup', 'assets/images/shop/category/3.webp', '#FFEACC', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_12_194920_create_products_table', 1),
(6, '2022_10_12_194947_create_categories_table', 1),
(7, '2022_10_12_195026_create_reservations_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `view_count` double NOT NULL DEFAULT '0',
  `category_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `slug`, `img`, `description`, `view_count`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'tissus', 69.00, 'tissus-214981', '/img/tissus.png', ' ', 1, 1, NULL, '2022-10-16 19:21:10'),
(4, 'hair brush', 79.00, 'hair-brush-21840128', '/img/hair brush.png', ' ', 1, 2, NULL, '2022-10-20 15:30:07'),
(5, 'hair-drayer', 219.00, 'hair-drayer-238120', '/img/hair drayer.png', ' ', 0, 2, NULL, '2022-10-16 12:07:27'),
(6, '3x1', 239.00, '3x1-123129', '/img/3x1.png', ' ', 0, 3, NULL, NULL),
(7, 'back', 219.00, 'back-12312', '/img/back.png', ' ', 0, 3, NULL, NULL),
(8, 'steamer', 369.00, 'steamer-1231', '/img/steamer.png', ' ', 0, 3, NULL, NULL),
(9, 'tapis', 199.00, 'tapis-123812', '/img/tapis.jpg', ' ', 0, 3, NULL, NULL),
(10, 'TOPFACE PRIMER BASE MATTE TRANSPARENT 02', 99.00, 'TOPFACE PRIMER BASE MATTE TRANSPARENT 02-12312', '/img/TOPFACE PRIMER BASE MATTE TRANSPARENT 02.jpg', 'L’extrait de blé et l’huile de jojoba dans son contenu enrichi nourrissent et hydratent la peau tout en aidant à égaliser le teint.', 2, 4, NULL, '2022-10-20 13:51:23'),
(11, 'TOPFACE MATTE LIPSTICK', 69.00, 'TOPFACE MATTE LIPSTICK-589034', '/img/TOPFACE MATTE LIPSTICK.jpg', 'L’huile de coco dans son contenu; Tout en aidant à hydrater et nourrir les lèvres, sa texture douce offre un confort d’application facile.', 5, 4, NULL, '2022-10-20 13:53:34'),
(12, 'TOPFACE EXTREME MATTE LIP PAINT\r\n', 79.00, 'TOPFACE EXTREME MATTE LIP PAINT-589039', '/img/TOPFACE EXTREME MATTE LIP PAINT\r\n.jpg', 'Huile de macadamia et vitamine E dans sa formule; tout en hydratant vos lèvres, il donne une apparence lisse.\r\nIl offre une apparence mate et permanente qui dure jusqu’à 12 heures sans sensation de sécheresse sur vos lèvres.', 6, 4, NULL, '2022-10-20 13:54:22'),
(13, 'L’OREAL ACCORD PARFAIT CORRECTEUR', 69.00, 'L’OREAL ACCORD PARFAIT CORRECTEUR-589633', '/img/L’OREAL ACCORD PARFAIT CORRECTEUR\r\n.jpg', 'Texture fine et couvrance parfaite : sa formule hydratante camoufle cernes et imperfections sans marquer et sans effet matière. Elle s’estompe facilement pour une couvrance confortable et lumineuse toute la journée.', 7, 4, NULL, '2022-10-20 13:59:43'),
(14, 'Topface Sensitive 3in1 Concealer Contour Foundation (Vitamin & Prebiotic Complex)', 89.00, 'Topface Sensitive 3in1 Concealer Contour Foundation (Vitamin & Prebiotic Complex)-589633', '/img/Topface Sensitive 3in1 Concealer Contour Foundation (Vitamin & Prebiotic Complex)\r\n.jpg', 'Un fond de teint anti-cernes qui minimise l’apparence des ridules, aide à hydrater la peau contre le dessèchement.', 8, 4, NULL, '2022-10-20 14:03:35'),
(15, 'TOPFACE Skin Editor Visible Age Reset Concealer', 79.00, 'TOPFACE Skin Editor Visible Age Reset Concealer-589633', '/img/TOPFACE Skin Editor Visible Age Reset Concealer.jpg', 'Bien qu’il masque les cercles de couleur foncée grâce à ses excellentes capacités de dissimulation, il donne un aspect éclairant et rafraîchissant à la peau toute la journée. Sa formule spéciale contrôlant l’éclat donne un fini mat à votre peau.', 10, 4, NULL, '2022-10-20 14:11:46'),
(16, 'TOPFACE MAKE-UP STYLE SENSITIVE PRIMER SMOOTH PROTECT 001', 79.00, 'TOPFACE MAKE-UP STYLE SENSITIVE PRIMER SMOOTH PROTECT 001-589633', '/img/TOPFACE MAKE-UP STYLE SENSITIVE PRIMER SMOOTH PROTECT 001.jpg', 'Bien qu’il masque les cercles de couleur foncée A une teinte verte et vise spécifiquement à neutraliser les rougeurs de la peau.\r\n', 9, 4, NULL, '2022-10-20 14:05:42'),
(17, 'TOPFACE BB SKIN EDITOR MATTE FINISH FOUNDATION', 89.00, 'TOPFACE BB SKIN EDITOR MATTE FINISH FOUNDATION-589633', '/img/TOPFACE BB SKIN EDITOR MATTE FINISH FOUNDATION.jpg', 'La permanence jusqu’à 12 heures, la texture légèrement soyeuse et le contenu enrichi en taurine végétale fournissent 7 caractéristiques distinctes ensemble.\r\n', 9, 4, NULL, '2022-10-20 14:05:42'),
(18, 'CATRICE – POUDRE « HIGHLIGHTING HIGH GLOW »', 89.00, 'CATRICE – POUDRE « HIGHLIGHTING HIGH GLOW »-589633', '/img/CATRICE – POUDRE « HIGHLIGHTING HIGH GLOW ».jpg', 'Pour un look radieux,\r\nTexture cuite douce,\r\nAvec des pigments ultra fins réflecteurs de lumière.\r\n', 9, 4, NULL, '2022-10-20 14:05:42'),
(19, 'TOPFACE HIGHLIGHTER POWDER INSTYLE', 89.00, 'TOPFACE HIGHLIGHTER POWDER INSTYLE-539633', '/img/TOPFACE HIGHLIGHTER POWDER INSTYLE.jpg', 'USING: With a highlighter brush or your fingertips you can apply to your cheekbones, on the lips, eye springs, under eyebrows, nose bone, jaw and decollete with slight touch.', 10, 4, NULL, '2022-10-20 14:17:32'),
(20, 'TOPFACE SKINWEAR MATTE EFFECT POWDER', 89.00, 'TOPFACE SKINWEAR MATTE EFFECT POWDER-589034', '/img/TOPFACE SKINWEAR MATTE EFFECT POWDER.jpg', 'Alors que la vitamine E dans sa formule aide votre peau à protéger son hydratation, sa forme parfaite offre une persistance toute la journée sans avoir besoin d’une sensation rafraîchissante.', 1, 4, NULL, '2022-10-20 13:41:04'),
(21, 'CATRICE – FARD À JOUE BLUSH BOX MULTICOLOUR', 89.00, 'CATRICE – FARD À JOUE BLUSH BOX MULTICOLOUR-580633', '/img/CATRICE – FARD À JOUE BLUSH BOX MULTICOLOUR.jpg', 'Ce blush poudre multicolore met en valeur le visage avec un scintillement subtile superbe,\r\nAppliquez-le simplement sur les pommettes avec un pinceau poudre ou blush puis estompez le délicatement vers les tempes.', 10, 4, NULL, '2022-10-20 14:17:32'),
(22, 'TOPFACE Skin Editor Matte Longlasting Foundation', 89.00, 'TOPFACE Skin Editor Matte Longlasting Foundation-580633', '/img/TOPFACE Skin Editor Matte Longlasting Foundation.jpg', 'La structure parfaite se dispersant facilement sur la peau offre un aspect mat et velouté. Ses capacités anti-cernes du moyen au haut s’intègrent à votre peau sans provoquer de sensation de lourdeur.', 10, 4, NULL, '2022-10-20 14:17:32'),
(24, 'TOPFACE BAKED CHOICE RICH TOUCH POWDER', 89.00, 'TOPFACE BAKED CHOICE RICH TOUCH POWDER-580633', '/img/TOPFACE BAKED CHOICE RICH TOUCH POWDER.jpg', 'Avec sa formule unique et ses couleurs vives, il donne un aspect lisse et attrayant.\r\nLe contenu enrichi en complexe minéral et en vitamine E donne à la peau un aspect sain et énergique.', 10, 4, NULL, '2022-10-20 14:17:32'),
(25, 'TOPFACE COLOR REVELATION NAIM ENAMEL', 25.00, 'TOPFACE COLOR REVELATION NAIM ENAMEL-580633', '/img/TOPFACE COLOR REVELATION NAIM ENAMEL.jpg', 'Appliquer directement avec le pinceau applicateur.', 11, 4, NULL, '2022-10-20 14:28:10'),
(26, 'TOPFACE LASTING COLOR NAIL ENAMEL', 30.00, 'TOPFACE LASTING COLOR NAIL ENAMEL-580633', '/img/TOPFACE LASTING COLOR NAIL ENAMEL.jpg', 'Topface présente sa nouvelle série «Topface Lasting Color» avec 95 couleurs superbes et saturées et durables! Avec ses couleurs intenses, sa couverture longue durée, il offre une manucure soignée.', 12, 4, NULL, '2022-10-20 14:30:34'),
(27, 'organiser', 69.00, 'organiser-21348921', '/img/organiser.png', NULL, 0, 2, NULL, NULL),
(28, 'pack', 129.00, 'pack-1230912', '/img/pack.png', NULL, 0, 2, NULL, NULL),
(29, 'push', 59.00, 'push-213120', '/img/push.png', NULL, 0, 2, NULL, NULL),
(30, 'socks', 49.00, 'socks-4812904', '/img/socks.png', NULL, 0, 2, NULL, NULL),
(31, 'TOPFACE NAIL THERAPY RIDGE ERASER', 49.00, 'TOPFACE NAIL THERAPY RIDGE ERASER-580633', '/img/TOPFACE NAIL THERAPY RIDGE ERASER.jpg', 'La formule du vernis est conçue pour lisser les rugosités et les imperfections à la surface des ongles,\r\nAide à prévenir le jaunissement et le fendillement des ongles. La vitamine E dans la composition nourrit la surface de l’ongle.', 12, 4, NULL, '2022-10-20 14:30:34'),
(32, 'TOPFACE NAIL THERAPY MATTE APPEARENCE', 49.00, 'TOPFACE NAIL THERAPY MATTE APPEARENCE-580633', '/img/TOPFACE NAIL THERAPY MATTE APPEARENCE.jpg', 'La formule spécialement développée offre un effet velouté lisse sur les ongles,\r\nAprès avoir attendu 1 minute, appliquez le produit sur le vernis coloré.', 12, 4, NULL, '2022-10-20 14:30:34'),
(33, 'TOPFACE NAIL THERAPY HARDENER COMPLEX', 49.00, 'TOPFACE NAIL THERAPY HARDENER COMPLEX-580633', '/img/TOPFACE NAIL THERAPY HARDENER COMPLEX.jpg', 'La vitamine B5 dans la composition hydrate la surface de l’ongle, le rendant sain, et la vitamine C nourrit et aide à prévenir les ongles cassants,\r\nVous pouvez l’appliquer seul ou sous votre vernis à ongles.', 12, 4, NULL, '2022-10-20 14:30:34'),
(34, 'TOPFACE SERUM SKINGLOW VEGAN COLLAGEN', 99.00, 'TOPFACE SERUM SKINGLOW VEGAN COLLAGEN-580633', '/img/TOPFACE SERUM SKINGLOW VEGAN COLLAGEN.jpg', 'il a été spécialement développé avec la molécule de collagène véritable d’origine végétale qui a un effet restructurant et revitalisant sur la peau.', 13, 4, NULL, '2022-10-20 15:11:00'),
(35, 'TOPFACE SERUM SKINGLOW HYALURONIC ACID', 99.00, 'TOPFACE SERUM SKINGLOW HYALURONIC ACID-580633', '/img/TOPFACE SERUM SKINGLOW HYALURONIC ACID.jpg', 'Topface Hyaluronic Acid Serum was developed for you to discover for you to discover the unique plumping power of pure hyaluronic acid.', 12, 4, NULL, '2022-10-20 14:30:34'),
(41, 'TOPFACE SERUM SKINGLOW VITAMIN C', 99.00, 'TOPFACE SERUM SKINGLOW VITAMIN C-580633', '/img/TOPFACE SERUM SKINGLOW VITAMIN C.jpg', 'Le sérum Topface Vitamine C exploite les incroyables pouvoirs nourrissants de la nature pour apporter les bienfaits des ingrédients actifs directement sur votre peau.', 12, 4, NULL, '2022-10-20 14:30:34'),
(42, 'Base de teint Hydratante effet Repulpant', 129.00, 'Base de teint Hydratante effet Repulpant-780633', '/img/Base de teint Hydratante effet Repulpant.jpg', 'votre peau est à tendance sèche ou sujette aux tiraillements, vous voulez empêcher votre fond de teint de migrer ou de pelucher en cours de journée.', 12, 4, NULL, '2022-10-20 14:30:34'),
(43, 'Luxe Lips Ultra Matte Lipstick BYS', 99.00, 'Luxe Lips Ultra Matte Lipstick BYS-780633', '/img/Luxe Lips Ultra Matte Lipstick BYS.jpg', 'The creamy and long-lasting formula does not flake, fade or feather after application. Available in 12 wearable shades that flatters all skin types.', 14, 4, NULL, '2022-10-20 15:24:49');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `qte` double NOT NULL,
  `price_total` double NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `client` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `product_id`, `qte`, `price_total`, `email`, `client`, `tel`, `adress`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 297, NULL, 'mjVvDiLaPu 78YCtRFCvR', '0808850001', 'krOSA6Oarm', '2022-10-14 18:24:04', '2022-10-14 18:24:04'),
(6, 1, 3, 297, NULL, 'mjVvDiLaPu 78YCtRFCvR', '0808850001', 'krOSA6Oarm', '2022-10-14 18:28:49', '2022-10-14 18:28:49'),
(7, 2, 1, 56, NULL, 'ZFOWMsbwlF PFCw1YNFoB', '3796459494', 'KmoQcBnnh1', '2022-10-14 19:41:17', '2022-10-14 19:41:17'),
(8, 4, 5, 1110, NULL, 'VACrcGCson BfcEizbooh', '2225098477', 'GDrlcyivkW', '2022-10-14 22:17:25', '2022-10-14 22:17:25'),
(9, 4, 5, 1110, NULL, 'VACrcGCson BfcEizbooh', '2225098477', 'GDrlcyivkW', '2022-10-14 22:18:02', '2022-10-14 22:18:02'),
(13, 3, 1, 129, NULL, 'WV6Ffejxay GCkUChSM2a', '8172066231', 'b4Ye0IrDne', '2022-10-14 22:22:27', '2022-10-14 22:22:27'),
(14, 1, 3, 297, NULL, 'adnane adnane', '1279837129379', 'adqwkjd;lqwkdlwq', '2022-10-16 10:26:36', '2022-10-16 10:26:36'),
(15, 2, 1, 69, NULL, 'ben adnae', '89068960', 'tanger', '2022-10-20 15:16:47', '2022-10-20 15:16:47'),
(16, 2, 1, 69, NULL, 'ben adnae', '89068960', 'tanger', '2022-10-20 15:18:32', '2022-10-20 15:18:32'),
(17, 2, 1, 69, NULL, 'ben adnae', '89068960', 'tanger', '2022-10-20 15:21:27', '2022-10-20 15:21:27'),
(18, 2, 1, 69, NULL, 'ben adnae', '89068960', 'tanger', '2022-10-20 15:22:25', '2022-10-20 15:22:25'),
(19, 2, 1, 69, NULL, 'ben adnae', '89068960', 'tanger', '2022-10-20 15:23:43', '2022-10-20 15:23:43'),
(20, 2, 1, 69, NULL, 'ben adnae', '89068960', 'tanger', '2022-10-20 15:24:28', '2022-10-20 15:24:28'),
(21, 43, 1, 99, NULL, 'lo omar', '869076', 'asdfaf', '2022-10-20 15:25:07', '2022-10-20 15:25:07'),
(22, 4, 1, 79, NULL, 'sefaes faewfeaf', '457u45754', 'sgseg', '2022-10-20 15:30:22', '2022-10-20 15:30:22');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$kk5eEAzdaZh.8hA1UgXQTeSWZP4CYBxqEE5ivw.piR.g/mvo6VgJG', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
