-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2023 at 08:11 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `key_checker`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` varchar(10) NOT NULL,
  `last_login` varchar(100) NOT NULL,
  `session_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`id`, `name`, `email`, `password`, `role_id`, `last_login`, `session_id`) VALUES
(1, 'Afolayan Oladimeji', 'olatundeafolayan163@gmail.com', 'Adebimpe1*', '1', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `song_key`
--

CREATE TABLE `song_key` (
  `id` int(11) NOT NULL,
  `artist` varchar(200) NOT NULL,
  `song_title` varchar(200) NOT NULL,
  `song_key` varchar(200) NOT NULL,
  `key_verified` varchar(10) NOT NULL,
  `date_posted` varchar(200) NOT NULL,
  `time_now` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `song_key`
--

INSERT INTO `song_key` (`id`, `artist`, `song_title`, `song_key`, `key_verified`, `date_posted`, `time_now`) VALUES
(2, 'Loveworld Singers', 'Song of Heaven', 'E', '1', '24-04-2023 13:06:38PM ', ''),
(3, 'Sayra and Loveworld singers', 'You are the Lord', 'E', '', '24-04-2023 13:10:16PM ', ''),
(6, 'Loveworld Singers', 'Great is thy faithfulness', 'F', '0', '24-04-2023 13:17:04PM ', ''),
(7, 'Loveworld Singers', 'Lord Of All', 'G', '0', '24-04-2023 13:19:56PM ', ''),
(8, 'Simeon Rich And Loveworld Singers', 'Everyday', 'A', '0', '25-04-2023 11:15:27AM ', ''),
(9, 'Chooker And Loveworld Singers', 'Forever Oh Lord', 'G#', '0', '26-04-2023 07:15:17AM ', ''),
(10, 'Maya And Loveworld Singers', 'Light And Salvation', 'Gb', '0', '26-04-2023 10:36:31AM ', ''),
(11, 'Simeon Rich And Loveworld Singers', 'Unending Praise', 'E', '0', '26-04-2023 10:38:22AM ', ''),
(12, 'Loveworld Singers', 'Creator That Was Never Created', 'Gb', '0', '26-04-2023 10:39:00AM ', ''),
(13, 'Loveworld Singers', 'God Of Heaven And Earth', 'F', '0', '26-04-2023 10:40:45AM ', ''),
(14, 'Eli J And Loveworld Singers', 'Unending Reign', 'Gb', '0', '26-04-2023 10:41:41AM ', ''),
(15, 'Pastor Zaki And Loveworld Singers', 'Oh Wise God', 'Eb', '0', '26-04-2023 10:42:30AM ', ''),
(16, 'Eniola And Loveworld Singers', 'Praise The Lord', 'C#', '0', '26-04-2023 10:43:36AM ', ''),
(17, 'Loveworld Singers', 'Your Word Is Truth And Life', 'F#', '0', '26-04-2023 10:44:27AM ', ''),
(18, 'Obi Shine And Loveworld Singers', 'Lord Jesus', 'F#', '0', '26-04-2023 10:44:58AM ', ''),
(19, 'Loveworld Singers', 'Imperial Majesty', 'A', '0', '26-04-2023 10:45:23AM ', ''),
(20, 'Loveworld Singers', 'Unrivaled Authority', 'Eb', '0', '26-04-2023 10:45:56AM ', ''),
(21, 'Loveworld Singers', 'Splendor Of Your Majesty', 'A', '0', '26-04-2023 10:46:27AM ', ''),
(22, 'Loveworld Singers', 'Holy Is The Lamb', 'E', '0', '26-04-2023 10:46:49AM ', ''),
(23, 'Vashaun And Loveworld Singers', 'Precious Lord Jesus', 'B', '0', '27-04-2023 08:57:08AM ', ''),
(24, 'MAYA & LOVEWORLD SINGERS', 'YOU SIT ABOVE THE CHERUBIM', 'G', '0', '27-04-2023 09:04:17AM ', ''),
(25, 'ELI-J & LOVEWORLD SINGER', 'THANK YOU FOR THE HEALINGS', 'A', '0', '27-04-2023 09:05:15AM ', ''),
(26, 'RURO LEVI & LOVEWORLD SINGERS', 'NO GOD GREATER THAN YOU', 'G', '0', '27-04-2023 09:06:39AM ', ''),
(27, 'ELI-J, DSA, LOVEWORLD SINGERS', 'FOREVER YOU ARE GOD', 'Eb', '0', '27-04-2023 09:08:59AM ', ''),
(28, 'LEENA GREEN AND LOVEWORLD SINGERS', 'WORTHY IS THE LAMB', 'Bb', '0', '27-04-2023 09:09:47AM ', ''),
(29, 'RITASOUL, PASTOR SAKI, LOVEWORLD SINGERS', 'THE ONLY SOVEREIGN GOD', 'C', '0', '27-04-2023 09:11:09AM ', ''),
(30, 'OGE AND LOVEWORLD SINGERS', 'YOU WILL BE HEALED', 'F', '0', '27-04-2023 09:12:44AM ', ''),
(31, 'PASTOR SAKI', 'RISE AND BE HEALED', 'F#', '0', '27-04-2023 09:13:51AM ', ''),
(32, 'PASTOR SAKI AND LOVEWORLD SINGERS', 'EVERLASTING KING', 'G#', '0', '27-04-2023 09:16:22AM ', ''),
(33, ' SOPHIYA AND LOVEWORLD SINGERS', 'GOD ALMIGHTY ', 'G', '0', '27-04-2023 09:17:36AM ', ''),
(34, 'Maya And Loveworld Singers', 'MORNING DEW', 'F', '0', '27-04-2023 09:19:31AM ', ''),
(35, 'FAITH & LOVEWORLD SINGERS LYRICS', 'LOVE UNFORGETTABLE', 'C', '0', '27-04-2023 09:20:36AM ', ''),
(36, 'BLESSING,DAVEROCK And Loveworld Singers', 'HIS NAME IS JESUS', 'Bb', '0', '27-04-2023 09:22:09AM ', ''),
(37, 'BLESSING and LOVEWORLD SINGERS', 'YOUR WORD IS ETERNAL', 'C#', '0', '27-04-2023 09:23:30AM ', ''),
(38, 'BLESSING AND LOVEWORLD SINGERS', 'GRATEFUL', 'C', '0', '27-04-2023', ''),
(39, 'MAYA AND LOVEWORLD SINGERS', 'GLORY TO LORD JESUS OUR SAVIOUR', 'F', '0', '27-04-2023', '1682593054'),
(40, 'PASTOR RUTHNEY AND LOverworld Singers', 'I AM SATISFIED IN YOUR LOVE', 'G#', '0', '27-04-2023', '1682593082'),
(41, 'LOVEWORLD SINGERS', 'PRAISE GOD', 'C', '0', '28-04-2023', '1682657880'),
(42, 'LOVEWORLD SINGERS', 'All the trees', 'E', '0', '28-04-2023', '1682657967'),
(43, 'LOVEWORLD SINGERS', 'All of my days', 'Bb', '0', '28-04-2023', '1682658005'),
(44, 'ELI J AND LOVEWORLD SINGERS', 'Your miracle is now', 'G#', '0', '28-04-2023', '1682658069'),
(45, 'LOVEWORLD SINGERS', 'Tomorrow', 'F', '0', '28-04-2023', '1682658123'),
(46, 'LOVEWORLD SINGERS', 'WORTHY IS THE LAMB', 'Bb', '0', '28-04-2023', '1682658158'),
(47, 'LOVEWORLD SINGERS', 'All my attention', 'A', '0', '28-04-2023', '1682658286'),
(48, 'LOVEWORLD SINGERS', 'Praises from my heart to you', 'C#', '0', '28-04-2023', '1682658384'),
(49, 'LOVEWORLD SINGERS', 'Riding with the lord', 'Eb', '0', '28-04-2023', '1682658463'),
(50, 'LOVEWORLD SINGERS', 'Self existing God', 'F', '0', '28-04-2023', '1682658510'),
(51, 'LOVEWORLD SINGERS', 'I will never stop praising you', 'F', '0', '28-04-2023', '1682658567'),
(52, 'LOVEWORLD SINGERS', 'Nobody like you', 'Bb', '0', '28-04-2023', '1682658603'),
(53, 'OBI SHINE AND LOVEWORLD SINGERS', 'Most high God', 'Eb', '0', '28-04-2023', '1682658650'),
(54, 'LOVEWORLD SINGERS', 'You commanded praise', 'Bb', '0', '28-04-2023', '1682658697'),
(55, 'LOVEWORLD SINGERS', 'I rejoice', 'G', '0', '28-04-2023', '1682658722'),
(56, 'LOVEWORLD SINGERS', 'You are a wonder', 'A', '0', '28-04-2023', '1682658744'),
(57, 'LOVEWORLD SINGERS', 'To you be praise', 'B', '0', '28-04-2023', '1682658782'),
(58, 'KOREDE AND LOVEWORLD SINGERS', 'Glorious in all your ways', 'C', '0', '28-04-2023', '1682658861'),
(59, 'LOVEWORLD SINGERS', 'I hear the sound', 'Eb', '0', '28-04-2023', '1682658971'),
(60, 'LOVEWORLD SINGERS', 'You are amazing', 'G', '0', '28-04-2023', '1682659053'),
(61, 'SYLVIA AND LOVEWORLD SINGERS', 'Never enough', 'B', '0', '28-04-2023', '1682659104'),
(62, 'LOVEWORLD SINGERS', 'Your name is higher', 'C#', '0', '28-04-2023', '1682659151'),
(63, 'LOVEWORLD SINGERS', 'Lord of host', 'F', '0', '28-04-2023', '1682659206'),
(64, 'LOVEWORLD SINGERS', 'Holy Nissi', 'E', '0', '28-04-2023', '1682659243'),
(65, 'LOVEWORLD SINGERS', 'Holy and Righteous', 'F', '0', '28-04-2023', '1682659295'),
(66, 'LOVEWORLD SINGERS', 'With just one word', 'E', '0', '28-04-2023', '1682659331'),
(67, 'LOVEWORLD SINGERS', 'You will have your miracle today', 'F', '0', '28-04-2023', '1682659392'),
(68, 'LOVEWORLD SINGERS', 'God really Cares for you', 'Eb', '0', '28-04-2023', '1682659450'),
(69, 'LOVEWORLD SINGERS', 'King of kings', 'G', '0', '28-04-2023', '1682659506'),
(70, 'PASTOR SAKI AND LOVEWORLD SINGERS', 'Unto You we lift our voice', 'F#', '0', '28-04-2023', '1682659561'),
(71, 'MAYA & LOVEWORLD SINGERS', 'To the ends of the Earth', 'Bb', '0', '28-04-2023', '1682659636'),
(72, 'KOREDE, SYLVIA AND LOVEWORLD SINGERS', 'Matchless Name', 'C#', '0', '28-04-2023', '1682659708'),
(73, 'OGE AND LOVEWORLD SINGERS', 'Lord you are beautiful', 'Eb', '0', '28-04-2023', '1682659751'),
(74, 'OGE AND LOVEWORLD SINGERS', 'I hear the sound ', 'Eb', '0', '28-04-2023', '1682659811'),
(75, 'NISSA AND LOVEWORLD SINGERS', 'Holy', 'E', '0', '28-04-2023', '1682659904'),
(76, 'PASTOR SAKI AND LOVEWORLD SINGERS', 'Heavely Father', 'Eb', '0', '28-04-2023', '1682659951'),
(77, 'KOREDE AND LOVEWORLD SINGERS', 'Great King of All', 'D', '0', '28-04-2023', '1682660027'),
(78, 'ENIOLA AND LOVEWORLD SINGERS', 'Sovereign God', 'C#', '0', '28-04-2023', '1682660143'),
(79, 'CHOOKAR AND LOVEWORLD SINGERS', 'Lord we Praise', 'C#', '0', '28-04-2023', '1682660197');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `song_key`
--
ALTER TABLE `song_key`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `song_key`
--
ALTER TABLE `song_key`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
