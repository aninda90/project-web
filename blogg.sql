-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 18, 2023 at 05:21 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogg`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `image`, `body`, `published`, `created_at`) VALUES
(16, 10, 2, 'Bertemu bunga matahari', '1687056237_113-1136170_aesthetic-vintage-flower-png-transparent-png.png', '&lt;p&gt;Berwarna kuning, dan indah untuk dipandang, kemarin Haikal baru saja membawakanku bucket bunga berisi bunga matahari, dia indah dan bersinar. Aku sangat suka dengan bunga matahari. &amp;nbsp;Walaupun aku agak gasuka si sama warna kuning, tapi kuning bunga ini berbeda, aku takjub.&lt;/p&gt;', 1, '2023-06-18 02:43:57'),
(17, 15, 8, 'Kenalan dengan Jaehyun', '1687056503_jeyun1.JPG', '&lt;p&gt;Siapa yang tak kenal Jaehyun dari NCT? Sini mampir! Diberi julukan sultan di grupnya, baik pula. Memiliki nama asli dan nama panggung yang sama, Jung Jaehyun ternyata sempat mengganti nama saat SMA karena saran dari nenek yang namanya tidak memiliki karakter Hanja &ldquo;Hyun&rdquo;. Sebab itulah Jaehyun mengubah nama legalnya menjadi Jung Yoon Oh. Nama asli ini tidak mengubah nama panggung Jaehyun dan membuatnya tetap sukses.&lt;/p&gt;', 1, '2023-06-18 02:48:23'),
(18, 15, 8, 'Ramyeon, makanan asal korea yang enak!', '1687056638_250px-Ramyeon.jpg', '&lt;p&gt;&lt;strong&gt;Ramyun&lt;/strong&gt; (&lt;a href=&quot;https://id.wikipedia.org/wiki/Bahasa_Korea&quot;&gt;Hangul&lt;/a&gt;:&amp;nbsp;라면; &lt;a href=&quot;https://id.wikipedia.org/wiki/Hanja&quot;&gt;Hanja&lt;/a&gt;:&amp;nbsp;Ramyeon) adalah &lt;a href=&quot;https://id.wikipedia.org/wiki/Hidangan&quot;&gt;hidangan&lt;/a&gt; &lt;a href=&quot;https://id.wikipedia.org/wiki/Mi_kuah&quot;&gt;mi kuah&lt;/a&gt; &lt;a href=&quot;https://id.wikipedia.org/wiki/Masakan_Korea&quot;&gt;ala Korea&lt;/a&gt;. Ramyun dapat dibuat dari mi basah atau &lt;a href=&quot;https://id.wikipedia.org/wiki/Mi_instan&quot;&gt;mi instan&lt;/a&gt;. Beberapa merek ramyun instan selain dikonsumsi di &lt;a href=&quot;https://id.wikipedia.org/wiki/Korea_Selatan&quot;&gt;Korea Selatan&lt;/a&gt;, ada juga yang diekspor ke &lt;a href=&quot;https://id.wikipedia.org/wiki/Luar_negeri&quot;&gt;luar negeri&lt;/a&gt;, seperti ke &lt;a href=&quot;https://id.wikipedia.org/wiki/Tiongkok&quot;&gt;Tiongkok&lt;/a&gt;, &lt;a href=&quot;https://id.wikipedia.org/wiki/Hong_Kong&quot;&gt;Hong Kong&lt;/a&gt;, &lt;a href=&quot;https://id.wikipedia.org/wiki/Makau&quot;&gt;Makau&lt;/a&gt;, &lt;a href=&quot;https://id.wikipedia.org/wiki/Jepang&quot;&gt;Jepang&lt;/a&gt;, dan &lt;a href=&quot;https://id.wikipedia.org/wiki/Indonesia&quot;&gt;Indonesia&lt;/a&gt;. Ramyun Korea umumnya bercita rasa &lt;a href=&quot;https://id.wikipedia.org/wiki/Pedas&quot;&gt;pedas&lt;/a&gt;. Di &lt;a href=&quot;https://id.wikipedia.org/wiki/Korea_Selatan&quot;&gt;Korea Selatan&lt;/a&gt;, merek yang menguasai pasar adalah &lt;a href=&quot;https://id.wikipedia.org/wiki/Shin_Ramyun&quot;&gt;Shin Ramyun&lt;/a&gt;.&lt;a href=&quot;https://id.wikipedia.org/wiki/Ramyeon#cite_note-1&quot;&gt;[1]&lt;/a&gt;&lt;/p&gt;', 1, '2023-06-18 02:50:38'),
(19, 8, 8, 'NCT DOJAEJUNG - Perfume ', '1687056810_images.jpeg', '&lt;p&gt;&lt;strong&gt;&quot;Perfume&quot;&lt;/strong&gt;&lt;br&gt;&lt;br&gt;&amp;nbsp;&lt;/p&gt;&lt;p&gt;&lt;i&gt;[Romanized:]&lt;/i&gt;&lt;br&gt;&lt;br&gt;Perfume ooh ooh yeah&lt;br&gt;&lt;br&gt;Ay neoye harul&lt;br&gt;Hyanggiropge kkumyeo julge&lt;br&gt;Georeum kkeute&lt;br&gt;Nae ireumi tteooreuge&lt;br&gt;Ne sumgyeore seumigo&lt;br&gt;Ko kkeuteseo maemdolge hae&lt;br&gt;Ne mame gagindwege&lt;br&gt;Janhyangkkaji orae&lt;br&gt;&lt;br&gt;Dara neol saenggakhaneun naye hyangeun&lt;br&gt;Dama seonmyeonghan nae heunjeokdeuleul&lt;br&gt;&lt;br&gt;Sonmok wie nan&lt;br&gt;Osgis wie nan&lt;br&gt;Namgyeoduryeo hae&lt;br&gt;Nareul ijeul su eopge&lt;br&gt;Jageun sumgyeolkkaji&lt;br&gt;Pagodeureo nan&lt;br&gt;&lt;br&gt;Ay bangane gonggiedo&lt;br&gt;Neol wihan nae mameul punggyeo&lt;br&gt;Ne ongin nae geoshi dwae&lt;br&gt;Every time is paradise yeah&lt;br&gt;Gin shigani heulleodo&lt;br&gt;Jillil suga eopseunikka&lt;br&gt;Cheoeum neukkin gyeongheomil geol&lt;br&gt;Soljikhaejyeo baby&lt;br&gt;&lt;br&gt;Joa nae sungandeule inneun nega&lt;br&gt;Tonight binteum eopshi ppajyeodeureo&lt;br&gt;&lt;br&gt;Sonmok wie nan&lt;br&gt;Osgis wie nan&lt;br&gt;Namgyeoduryeo hae&lt;br&gt;Nareul ijeul su eopge&lt;br&gt;Jageun sumgyeolkkaji&lt;br&gt;Pagodeureo nan&lt;br&gt;&lt;br&gt;(Baby I\'m baby I\'m)&lt;br&gt;Baby I\'m comfortable with you&lt;br&gt;(You know that I\'m)&lt;br&gt;And you\'re comfortable with me&lt;br&gt;(I know that you are)&lt;br&gt;Du nuneul matchumyeon (matchumyeon)&lt;br&gt;Deo seonmyeonghaejil teni&lt;br&gt;&lt;br&gt;Yeah yeah that\'s me&lt;br&gt;Jiteun nongdoe (oh yeah)&lt;br&gt;Jeongshini honmihae (Love yeah)&lt;br&gt;Uh hoheummajeo hyanggiroweo&lt;br&gt;Neoreul bomyeon moduga da&lt;br&gt;Nareul tteoollyeo&lt;br&gt;&lt;br&gt;Yeah han bangul&lt;br&gt;Drip Drop (Drip Drop)&lt;br&gt;Neoye gieok soge&lt;br&gt;Heunjeogeul namgyeo (namgyeo)&lt;br&gt;Shigan jinalsurok&lt;br&gt;Deo tturyeoshaejyeo&lt;br&gt;Ne juwireul maemdora&lt;br&gt;24 hour whoa whoa!&lt;br&gt;&lt;br&gt;Hold tight&lt;br&gt;Seoroye mameul hwakinhan bam&lt;br&gt;Oh nan imi seumyeodeun geot gata&lt;br&gt;Ijen hwakshilhi ara&lt;br&gt;Nan gamgagi kkaeeona&lt;br&gt;Dashi hanbeon gipi saegyeo&lt;br&gt;&lt;br&gt;Sonmok wie nan&lt;br&gt;Osgis wie nan&lt;br&gt;Namgyeoduryeo hae&lt;br&gt;Nareul ijeul su eopge&lt;br&gt;Modeun sungan soge&lt;br&gt;Pagodeureo nan&lt;br&gt;&amp;nbsp;&lt;/p&gt;', 1, '2023-06-18 02:53:30'),
(20, 8, 13, 'Belajar Pomodoro', '1687057455_podomoro.jpeg', '&lt;p&gt;Teknik Pomodoro merupakan sistem manajemen waktu yang menggugah orang untuk bekerja secara fokus dalam rentang waktu yang mereka miliki. Secara singkat, dengan menggunakan sistem ini kita akan membagi pekerjaan kita menjadi 25 menit per kegiatan dengan bekerja secara fokus terhadap satu tugas, kemudian 5 menit istirahat total, setiap jeda istirahat ini disebut sebagai &ldquo;pomodoro&rdquo;. Kemudian&lt;i&gt; &lt;/i&gt;setelah melakukan 4 kali pomodoro, kita mengambil istirahat yang lebih lama lagi, yakni sekitar 15 sampai 20 menit.&amp;nbsp;&lt;/p&gt;', 0, '2023-06-18 03:07:25');

-- --------------------------------------------------------

--
-- Table structure for table `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(2, 'Slice of Life', '<p>Kumpulan cerita tentang potongan kehidupan</p>'),
(8, 'Korea', '<p>Semua tentang korea, ada disini</p>'),
(13, 'Study Life', '<p>Kehidupan pelajar, mahasiswa, dan tips seputar pendidikan</p>');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(8, 1, 'ami', 'amii@gmail.com', '$2y$10$B4NPOb26vq/IssNsKZxn6OeMnr2JPptFt2AqVETz/Do3BPeLhpq4C', '2023-06-17 11:14:54'),
(9, 0, 'heci', 'heci@gmail.com', '$2y$10$uogGXxm74uSdcrVKwLvWCOlXZvcUX0dtOU1h7MPaIbfsX/cfNyM2i', '2023-06-17 11:18:17'),
(10, 1, 'admin', 'admin@admin.com', '$2y$10$C2EkWMoHICOCBvN6xZ4qI.ccRXmfM3mDzT1pg95hEZItA7X5zn1xq', '2023-06-17 21:54:47'),
(15, 1, 'Luna', 'luna@gmail.com', '$2y$10$rSb1HPctZOymNLmRQotmD.uSFQsmHB0THYwNg0ePVJZkDuT.xAkiK', '2023-06-18 02:39:12'),
(16, 1, 'mahenn_', 'mahen@gmail.com', '$2y$10$RWQpUR.dqcD2QgSpU0cr/e5fR0rAmgYFWooJTNOj5t5FN8JuRSDIa', '2023-06-18 02:39:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_id_2` (`user_id`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
