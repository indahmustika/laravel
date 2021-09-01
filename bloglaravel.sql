-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 07 Agu 2020 pada 20.15
-- Versi Server: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloglaravel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `thumbnail` text NOT NULL,
  `title` text NOT NULL,
  `excerpt` text NOT NULL,
  `content` text NOT NULL,
  `status` char(1) NOT NULL,
  `author` varchar(50) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `article`
--

INSERT INTO `article` (`id`, `thumbnail`, `title`, `excerpt`, `content`, `status`, `author`, `updated_at`, `created_at`) VALUES
(3, 'https://i.gadgets360cdn.com/large/Animal_Crossing_Switch_1596705549629.jpeg?output-quality=80&output-format=webp', 'Nintendo Profit Jumps 423 Percent Thanks to Animal Crossing: New Horizons', 'Nintendo had a terrific lockdown-hit quarter — that\'s April through June — thanks to Animal Crossing: New Horizons, with operating profit jumping 428 percent year-on-year to nearly JPY 145 billion (roughly Rs. 10,290 crores) off total revenue of JPY 358 billion (roughly Rs. 25,400 crores).', '<p>Nintendo had a terrific lockdown-hit quarter &mdash; that&#39;s April through June &mdash; thanks to Animal Crossing: New Horizons, with operating profit jumping 428 percent year-on-year to nearly JPY 145 billion (roughly Rs. 10,290 crores) off total revenue of JPY 358 billion (roughly Rs. 25,400 crores). The new Animal Crossing title &mdash; released last quarter in March &mdash; sold over 10 million copies and took its cumulative total to 22.4 million units in less than five months, second only to Mario Kart 8 Deluxe (26.74 million) that has taken three years to achieve that number.</p>\r\n\r\n<p>It&#39;s evident that&nbsp;<a href=\"https://gadgets.ndtv.com/tags/animal-crossing\" target=\"_self\">Animal Crossing: New Horizons</a>&nbsp;directly contributed to&nbsp;<a href=\"https://gadgets.ndtv.com/nintendo-switch-11991\" target=\"_self\">Nintendo Switch</a>&nbsp;sales. The Japanese gaming giant&nbsp;<a href=\"https://www.nintendo.co.jp/ir/pdf/2020/200806_2e.pdf\" target=\"_blank\">noted</a>&nbsp;[PDF] that out of all the new Switch units that were played on for the first time during this quarter, more than half played New Horizons on the first day. In doing so, Animal Crossing: New Horizons contributed to a 167 percent year-on-year increase in new members joining the Nintendo Switch family, with 5.68 million Switch consoles &mdash; including 2.62 million&nbsp;<a href=\"https://gadgets.ndtv.com/tags/nintendo-switch-lite\" target=\"_self\">Switch Lite</a>&nbsp;units, and 3.05 million of the regular Switch &mdash; being sold during the quarter.</p>\r\n\r\n<p>Thanks to that,&nbsp;<a href=\"https://gadgets.ndtv.com/tags/nintendo\" target=\"_self\">Nintendo</a>&nbsp;has now shipped&nbsp;<a href=\"https://www.nintendo.co.jp/ir/en/finance/hard_soft/index.html\" target=\"_blank\">61.44 million</a>&nbsp;Switch units in total, despite stock shortages created by the ongoing coronavirus pandemic. Nintendo said it&#39;s working hard to deliver more units &ldquo;as quickly as possible&rdquo; but admitted that manufacturing could be affected if COVID-19 continues to expand. The shortage hit was much bigger with the Ring Fit Adventure game, an exercising adventure that many stuck-at-home folks opted for.</p>\r\n\r\n<p>&ldquo;Demand for this new proposal from Nintendo of exercising by playing an adventure game was so much higher than our forecasts that the global supply has been unable to keep up since release,&rdquo; Nintendo&nbsp;<a href=\"https://www.nintendo.co.jp/ir/pdf/2020/200806_2e.pdf\" target=\"_blank\">said</a>&nbsp;[PDF] in a statement. &ldquo;We saw a temporary drop in sell-through due to product shortages, especially in March through May, but we have since increased production [&hellip;] which has helped sell-through to recover. The lingering effects of this product shortage in the market are still an inconvenience to a large number of consumers, but as with the Nintendo Switch family of systems, we will continue to work to ensure a sufficient amount of shipments for the holiday season.&rdquo;</p>\r\n\r\n<p>Source:&nbsp;<a href=\"https://gadgets.ndtv.com/games/news/nintendo-q1-2020-earnings-animal-crossing-new-horizons-switch-units-sales-revenue-coronavirus-pandemic-2275204\" target=\"_blank\">Gadgets 360</a></p>', '1', 'indahmustika', '2020-08-06 03:44:27', '2020-08-06 02:44:50'),
(4, 'https://i.gadgets360cdn.com/large/galaxy_s10_corrective_update_1559194728393.jpg?output-quality=80&output-format=webp', 'Samsung Galaxy Note 20, Other Galaxy Flagships to Get Three Years of Android OS Updates', 'Samsung announced during its Galaxy Unpacked event yesterday, August 5, that it will be delivering three years of Android updates for its flagship smartphones. Initially, the company had stated that it would offer two years of updates to its phones, causing outrage among its customers.', '<p>Samsung announced during its Galaxy Unpacked event yesterday, August 5, that it will be delivering three years of Android updates for its flagship smartphones. Initially, the company had stated that it would offer two years of updates to its phones, causing outrage among its customers. Now, starting with the Samsung Galaxy S10 and beyond, Samsung flagship owners will get new Android versions for three years after launch. This is limited to the company&#39;s smartphones for now and the update situation with its tablets is still unclear.</p>\r\n\r\n<p>During the Galaxy Unpacked event&nbsp;<a href=\"https://www.youtube.com/watch?v=CmS5rlX9cDA\" target=\"_blank\">livestreamed</a>&nbsp;on August 5, a&nbsp;<a href=\"https://gadgets.ndtv.com/mobiles/samsung-phones\">Samsung</a>&nbsp;executive announced OS updates for up to three generations, or years, with latest features and security patches. At the time of announcement, a barely legible disclaimer on the bottom stated: &ldquo;Availability of feature and security updates may vary by device and country. Update supported for flagship models from&nbsp;<a href=\"https://gadgets.ndtv.com/samsung-galaxy-s10-8940\">Galaxy S10</a>&nbsp;(Android 9) or later.&rdquo; This tells us that Samsung&#39;s flagships starting with the Galaxy S10 and beyond will now get three years of Android updates. This comes as great news to all Samsung customers, especially the Galaxy S10 owners who were initially promised only two years of updates. Of course, this applies to the newly announced&nbsp;<a href=\"https://gadgets.ndtv.com/samsung-galaxy-note-20-5g-price-in-india-96369\">Samsung Galaxy Note 20</a>&nbsp;series as well.</p>\r\n\r\n<p>At the Galaxy Unpacked event, Samsung announced the Galaxy Note 20 series that includes the Samsung Galaxy Note 20 and its Ultra variant. The Galaxy Note 20 is priced at Rs. 77,999 in India, while the&nbsp;<a href=\"https://gadgets.ndtv.com/samsung-galaxy-note-20-ultra-5g-price-in-india-96370\">Galaxy Note 20 Ultra 5G</a>&nbsp;carries a price tag of Rs. 1,04,999.</p>\r\n\r\n<p>Further, the company also unveiled the&nbsp;<a href=\"https://gadgets.ndtv.com/samsung-galaxy-watch-3-41mm-price-in-india-96366\">Samsung Galaxy Watch 3</a>&nbsp;and all its variants, starting at $399 (roughly Rs. 30,000), the Galaxy Buds Live priced at $169.99 (roughly Rs. 12,700), the&nbsp;<a href=\"https://gadgets.ndtv.com/samsung-galaxy-tab-s7-price-in-india-96365\">Galaxy Tab S7</a>&nbsp;series starting at EUR 699 (roughly Rs. 62,000), and lastly, the&nbsp;<a href=\"https://gadgets.ndtv.com/samsung-galaxy-z-fold-2-price-in-india-96373\">Galaxy Z Fold 2</a>. As of now, the company has not shared pricing and availability for the Indian market for any new product apart from Galaxy Note 20 series.</p>\r\n\r\n<p>Source :&nbsp;<a href=\"https://gadgets.ndtv.com/mobiles/news/samsung-note-20-s10-android-update-three-years-unpacked-2020-flagship-smartphones-2275173\" target=\"_blank\">Gadgets 360</a></p>', '1', 'indahmustika', '2020-08-06 03:44:41', '2020-08-06 02:48:44'),
(5, 'https://i.gadgets360cdn.com/large/boult_audio_tws_earbuds_gadgets360_1596801314281.jpg?output-quality=80&output-format=webp', 'Boult Audio FreePods, ProPods, MuseBuds, PowerBuds TWS Earbuds Launched in India: All Details', 'Boult Audio FreePods, ProPods, MuseBuds and PowerBuds are the four new True Wireless earbuds launched by the company in India. These TWS earbuds target different price ranges and different set of consumers.', '<p>Boult Audio FreePods, ProPods, MuseBuds and PowerBuds are the four new True Wireless earbuds launched by the company in India. These TWS earbuds target different price ranges and different set of consumers. The Boult FreePods are the most affordable TWS earbuds out of these four headphones, and are exclusive to Flipkart. The ProPods, on the other hand, are exclusive to Amazon. The Boult Audio MuseBuds and PowerBuds are aimed at fitness enthusiasts and offer better IP ratings.</p>\r\n\r\n<p>The Boult Audio FreePods are exclusive to Flipkart and are priced at Rs. 1,799. These TWS earbuds have a stem style design and are available in three colour options, Red, White and Black. These TWS earbuds have a battery life of 15 hours and a charging time of 2 hours. These are also IPX7-rated for water-resistance.</p>\r\n\r\n<p>The&nbsp;<a href=\"https://gadgets.ndtv.com/tags/boult-audio\" target=\"_self\">Boult Audio</a>&nbsp;ProPods are exclusive to Amazon and are priced at Rs. 2,499. These earbuds also have a stem style design and are IPX5 water-resistant. These come with a Wake up and Pair feature, touch controls, and low-latency for lag-free audio especially while gaming. The ProPods are capable of 5.5 hours of playback and the case is capable of charging the earbuds 4 times completely. The ProPods are available in Black and White colour options.</p>\r\n\r\n<p>Source:&nbsp;<a href=\"https://gadgets.ndtv.com/audio/news/boult-audio-freepods-propods-musebuds-powerbuds-price-in-india-1799-launch-features-2275923\" target=\"_blank\">Gadgets 360</a></p>', '1', 'admin', '2020-08-07 06:41:00', '2020-08-07 01:19:40'),
(7, 'https://i.gadgets360cdn.com/large/mac_os_big_sur_theverge_1596805046990.jpg?output-quality=80&output-format=webp', 'macOS Big Sur Public Beta Now Available for Download, Brings Design Changes, New Control Center, More', 'macOS Big Sur public beta has now been made available for all members of the Apple Beta Software Program. Unveiled during the keynote at WWDC 2020 in June, macOS Big Sur is set to bring several design changes and updates to Safari and messages.', '<p>macOS Big Sur public beta has now been made available for all members of the Apple Beta Software Program. Unveiled during the keynote at WWDC 2020 in June, macOS Big Sur is set to bring several design changes and updates to Safari, Messages, and Maps. It is said to be a noteworthy redesign of the desktop operating system - the brand&#39;s biggest since the introduction of OS X. Since this is a beta version, it could be laden with bugs that may hamper the performance of your Mac device. Hence, we recommend you to not install it if the desktop or laptop you use is your daily driver.</p>\r\n\r\n<p>In a&nbsp;<a href=\"https://www.theverge.com/2020/8/6/21356413/apple-macos-big-sur-public-beta-now-available\" target=\"_blank\">report</a>, The Verge states that the update comes with &lsquo;significant design changes across the entire operating system&#39;. The app icons seem to have been redesigned to look more like the ones on iOS platform. The menu bar at the bottom has a new translucent finish, and there is a new dedicated Control Center at the top to manage things like Bluetooth, AirDrop, Wi-Fi, display brightness, and sound level. The Control Center, too, has a very iOS-like design aesthetic to it. The Notification Center has also been redesigned to offer notifications and widgets in one single panel.</p>\r\n\r\n<p>In Safari,&nbsp;<a href=\"https://gadgets.ndtv.com/tags/macos\">macOS</a>&nbsp;Big Sur brings some customisations to the start page, including the additions of favourites and frequently visited websites. Users can also add their favourite background image in the updated browser. A new Privacy Report feature was spotted in Safari that essentially shows all the blocked trackers.</p>\r\n\r\n<p>Source:&nbsp;<a href=\"https://gadgets.ndtv.com/laptops/news/macos-big-sur-public-beta-now-available-for-download-design-changes-control-center-icons-apple-chime-2275971\">Gadgets 360</a></p>', '0', 'admin', '2020-08-07 07:05:46', '2020-08-07 07:03:23');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(500) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `email`, `updated_at`, `created_at`) VALUES
(1, 'admin', 'admin', 'admin@admin', '2020-08-07 11:40:27', '0000-00-00 00:00:00'),
(2, 'indahmustika', '12345', 'indah@indah', '2020-08-07 11:48:25', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
