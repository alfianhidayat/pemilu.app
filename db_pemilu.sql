-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Des 2015 pada 01.39
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_pemilu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `candidates`
--

CREATE TABLE IF NOT EXISTS `candidates` (
`id` int(11) NOT NULL,
  `no_urut` int(5) DEFAULT NULL,
  `tagline` varchar(20) DEFAULT NULL,
  `ketua` varchar(30) DEFAULT NULL,
  `wakil` varchar(30) DEFAULT '1',
  `visi` text NOT NULL,
  `misi` longtext NOT NULL,
  `photos` varchar(50) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `candidates`
--

INSERT INTO `candidates` (`id`, `no_urut`, `tagline`, `ketua`, `wakil`, `visi`, `misi`, `photos`, `status`, `created_at`, `updated_at`) VALUES
(30, 1, '#BERCANDA', 'GRE', 'MAN', 'Visi Sayaaaaaaaaaaaaaaaa', 'Misi Sayaaaaaaaaaaaaa', '36167.png', 0, '2015-12-01 19:06:53', '2015-12-02 07:49:28'),
(32, 2, '#MENLANGKAHBERSAMA', 'Miko', 'Haekal', 'Visi Kitaaaa', 'Misi Kita', '91086.png', 0, '2015-12-02 03:23:41', '2015-12-02 07:49:35'),
(34, 3, '#PASTI', 'Ari', 'Oji', 'Visi', 'Misi', '52696.png', 0, '2015-12-02 07:39:43', '2015-12-02 07:49:42');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `id_number` varchar(20) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`username`, `password`, `remember_token`, `id_number`, `name`, `status`, `created_at`, `updated_at`) VALUES
('ABF', '$2y$10$ZgDMfXK4W7UbHkKTWhglU.mwTgoVhJqZtWhZYGUxpVqMDpOpqz9KS', NULL, '1106122109', 'Adnan Baharrudin Fanani', 1, '2015-11-28 18:15:05', '2015-11-28 18:15:05'),
('ABG', '$2y$10$NpWaa3TRkKH8QIrP8pfIwuboWEPxtzkx2VAIwZkJHLARZM.ysraZ6', NULL, '1202144098', 'Muhammad Abidghozi Gerungan', 1, '2015-11-28 18:09:55', '2015-11-28 18:10:40'),
('ADI', '$2y$10$IWjH7eAhnCJsoD1EkMlxoOfJ.5.gtgKOg/tP6/l3GQ1O1cj3A2Ojm', NULL, '1202140247', 'Muhammad Widyan Riadhi Fakhrun', 1, '2015-11-28 18:09:52', '2015-11-28 18:09:52'),
('ADP', '$2y$10$sC.SA5HgYG4Is1ko16lbuO0w0HlXGvONtiOt8hX3kozFtAFOGGO4y', NULL, '1106120111', 'Adi Putro', 1, '2015-11-28 18:15:06', '2015-11-28 18:15:06'),
('ADT', '$2y$10$.Qa5Nl/3addm1/D63ls0fuinhTTl/JLb.WbyUCvX6DDPxuwu7PbfG', 'JAGZYe13TV5KlvMnB1bgm6xOkxP8MeYaK9Mm1qCpBCUjsvygdiZLHyniET6E', '1106130020', 'Alfian Hidayat', 1, '2015-11-28 18:12:58', '2015-12-02 10:30:10'),
('AFN', '$2y$10$D1PHal9Uz7ZML5/zJRY55eAhgBCpwi7NKpXWCUNR4lyOHH1xjhYVW', NULL, '1202144037', 'Arief Rachman Hartadi', 1, '2015-11-28 17:58:10', '2015-11-28 17:58:10'),
('AKA', '$2y$10$OPgOeuyCZGFIBTJ1.d.lYukrwx4MkCMDl/Qb61txY/YI0RQJIRftq', NULL, '1106132005', 'Aulia Kurnia Andana Warih', 1, '2015-11-28 18:12:58', '2015-11-28 18:12:58'),
('ALF', '$2y$10$rJHiQ4JUc7WeLeOCnK0r8eAE/RoeBciKQbIApC9DrQOZi2cYjkLYy', NULL, '1106130073', 'Alfi Nuri Khoirunisa', 1, '2015-11-28 18:12:59', '2015-11-28 18:12:59'),
('ANG', '$2y$10$7c6Ieq3MZbapKR4Bmo4hauMhWqNrGyzoBs/G53BMRPLqF1Fe3ooVS', 'kwqnr62dWwFsgz025HJcYsnzOuFHXTKSfV3AOeJPdJJhPuNZQ619xGrbmP4j', '1106124202', 'Agung Candra Dutiya Purwanta', 1, '2015-11-28 18:15:03', '2015-11-28 18:23:44'),
('ANS', '$2y$10$B6neEXuI4vR/ODi9qqnXt.VBowKJgTFLRgE6dZF6MSqVacjmo9R5q', NULL, '1106124198', 'Anisatun Nafi''ah', 1, '2015-11-28 18:15:02', '2015-11-28 18:15:02'),
('ASR', '$2y$10$.CWvTCQtDxq4kuqBni717OF3fwdA7nugatgMFM/pdA0mPw4drL0JC', NULL, '1106132112', 'Asri Putri Lailatul Fajria', 1, '2015-11-28 18:12:59', '2015-11-28 18:12:59'),
('AZI', '$2y$10$6tNrVk/jSErpgjgrTiHG4.fLgahn39Qrx7nHPxRfCPJjhhJ2BNNdm', NULL, '1202144079', 'Abdul Aziz', 1, '2015-11-28 18:09:53', '2015-11-28 18:09:53'),
('BBM', '$2y$10$fgn/Yzti3W85GChiqVIcYeglr8XUrjiBin.EEePWzzhfzv89G4OKi', NULL, '1106120053', 'Basworo Bawiso Muhammad', 1, '2015-11-28 18:15:03', '2015-11-28 18:15:03'),
('CNP', '$2y$10$FAHGLX65GbstPmA2Es0qoeXcnhPtJIUGIul3ibgsic214iZPfTK6m', NULL, '1106122108', 'Cahya Nofandiyan Putra', 1, '2015-11-28 18:15:06', '2015-11-28 18:15:06'),
('CWS', '$2y$10$VV.GE7tKyfNrCQA8y1cDJucCtu5ikdPNTu8IOLRV7fGTI7zehD9kG', NULL, '1106120099', 'Chatur Wahyu Syahputra', 1, '2015-11-28 18:15:07', '2015-11-28 18:15:07'),
('DYP', '$2y$10$jfa5nIyzOa66Oy9qeDBMSOAy5MbqdcCXadD21WDUOLWmM7.AvYRcK', NULL, '1202144005', 'Dela Youlina Putri', 1, '2015-11-28 18:09:53', '2015-11-28 18:09:53'),
('FAE', '$2y$10$QazUR7bk8VOtoTRDz83By.p6SdJv6xo4pC6I51AyNbzyjX.WUJzF6', NULL, '1106130151', 'Fadli Anugrah Emas', 1, '2015-11-28 18:12:57', '2015-11-28 18:12:57'),
('FEB', '$2y$10$wjjcflrc.NqT3G.qYYK0Venhu6BIQ5fPboMYZ3.IFULUmE2PZGPAW', NULL, '1106130110', 'Febri Dwiandriani', 1, '2015-11-28 18:12:58', '2015-11-28 18:12:58'),
('FIK', '$2y$10$VsJHkiYJQ6dPSoOzK.1JsuAy0BkXpZHFmVeALKRmVlBFruhZj4tii', NULL, '1202144145', 'Fikli Perdana Kusuma', 1, '2015-11-28 18:09:53', '2015-11-28 18:09:53'),
('FJP', '$2y$10$BF3SZoWDZA5i2Eg0C0Mjv.ApCA1wNRG7yzC0pgUBM8RY2e9hnlzAi', NULL, '1202144218', 'Fransiska Jesinta Pinem', 1, '2015-11-28 18:09:53', '2015-11-28 18:09:53'),
('FRQ', '$2y$10$gM9Wu5U.Ywe4X7Pqk.X9ZucP3behVFqkK0/K6egWVTzJWdWdKfktm', NULL, '1106130081', 'Ikhsan Ahmad Faruqi', 1, '2015-11-28 18:13:00', '2015-11-28 18:13:00'),
('GFN', '$2y$10$0NMGdkCXrfQg4GB8PVK0UOUPf5FU69IY3oZh9DDvizk5MlAXxGyhO', NULL, '1201144040', 'Ghina Fauziyyah Nur Azizah', 1, '2015-11-28 18:09:54', '2015-11-28 18:09:54'),
('GRE', '$2y$10$Lf6iXglwDxBI/HSI9OnxN.QHehXR3PbwB5mVXu6GzoC0xAi0yz.CC', NULL, '1106134207', 'Gredy Ramadhany', 1, '2015-11-28 18:12:57', '2015-11-28 18:12:57'),
('IFR', '$2y$10$X824XSb.nI.At2u5Q0JPr.GgyuXTY9.efSDJ0vOcv3bymGhUffzAu', NULL, '1106132004', 'Ilham Farobi', 1, '2015-11-28 18:12:57', '2015-11-28 18:12:57'),
('INT', '$2y$10$cohrOxQGzFYq1Xgx2cx2BOe.lTxoMQObrrkP9/nHMPkm4iS3./o7u', NULL, '1106122050', 'Nur Intan Paramanisa', 1, '2015-11-28 18:15:02', '2015-11-28 18:15:02'),
('IRS', '$2y$10$NlukoXjqgaPL0doAufsWAOcOO.6ZaO1rXBK4SmCLmsXVQ16ANgIT.', NULL, '1201140153', 'Feritsa Iris Zativita', 1, '2015-11-28 18:09:55', '2015-11-28 18:09:55'),
('JCS', '$2y$10$n0AqM/yL6qNoPuDeHSFaV.osGpLz8uAXMq8zFlZiXKxNFjvyqA4zy', NULL, '1106134178', 'Josua Clement Sembiring', 1, '2015-11-28 18:12:58', '2015-11-28 18:12:58'),
('JEK', '$2y$10$4x1/6qpYlfLw2rE7sAj6M.b46OUhTED1uIKYULfVp.Sip7dpEgeUW', NULL, '1106120068', 'I Komang Jaka Aksara Wiguna', 1, '2015-11-28 18:15:02', '2015-11-28 18:15:02'),
('JFS', '$2y$10$pE.vvOEcddCrVyPAXNPtx.BCMy4dsK7M/VxsUiPpWchiTFpIfs6Oe', NULL, '1106120078', 'Jan Fandro Siahaan', 1, '2015-11-28 18:15:02', '2015-11-28 18:15:02'),
('JNR', '$2y$10$R3O483Qjb9QAUNsW2K4R4OQoPMhPhbOs7HlxNYasZ0RvZ4v4u5Zg.', NULL, '1106120083', 'Mochamad Thariq Januar', 1, '2015-11-28 18:15:03', '2015-11-28 18:15:03'),
('KKN', '$2y$10$71rooJwB6f8PdcXjyqvwAughV3IVGtw6x7Yif3b0xyI0UDG4fAE5u', NULL, '1106132031', 'Kurnia Kusumandari', 1, '2015-11-28 18:12:59', '2015-11-28 18:12:59'),
('KVN', '$2y$10$S7XJi6fh3WWXXENZR/7uRuhgyvbJx0FQkyveHPzI/.hAUyOlgWXaW', NULL, '1106120110', 'Kevin Rohni Goklas Sinaga', 1, '2015-11-28 18:15:04', '2015-11-28 18:15:04'),
('LOP', '$2y$10$aOMz3znzXde27v0ryA8JbuesNzNMrwFhyBuBmSA3yX6EyBjVTPbny', NULL, '1106120162', 'Victor Marolop Patriasi Siregar', 1, '2015-11-28 18:15:06', '2015-11-28 18:15:06'),
('MAN', '$2y$10$4IZzzUSkf/w2R4BvO0M21.h5pXR3SUSBkcktVrWvPNdxHfllH/eAC', NULL, '1106130127', 'Muhammad Abdurrahman Lathief Pratama', 1, '2015-11-28 18:12:58', '2015-11-28 18:12:58'),
('MIN', '$2y$10$moDtw2cNi9iDMSy8Oxv3JOzpdRf5A3ysIsSbwXy6TlecTQc8BXd8W', NULL, '1202144099', 'Mindha Ningrum', 1, '2015-11-28 18:09:52', '2015-11-28 18:09:52'),
('MRG', '$2y$10$kivyQ5o3albunOSV3ZzucefsPILJ2eaKpL6SUdu8RQlx3gfAQoHyK', NULL, '1202140109', 'Margo Gunatama', 1, '2015-11-28 18:09:52', '2015-11-28 18:09:52'),
('MRJ', '$2y$10$HDAJxaLPgV1BfMYNm86x8e5gpjz32vuSyxijSuU8p9vvVhq7yUfam', NULL, '1106120057', 'Muchamad Reza Juliansyah', 1, '2015-11-28 18:15:06', '2015-11-28 18:15:06'),
('MYL', '$2y$10$bw64HVHStHcLcSNDLy1M5On1C3iktqOhgt9k8PsoL/NN4AtpE5KtG', NULL, '1106134177', 'Maylantino Surya Siswanto', 1, '2015-11-28 18:12:58', '2015-11-28 18:12:58'),
('PGP', '$2y$10$kEDgkqThTJRoXnCpf0UcEubcCpJH0IraSg1/NZeEL5TrGluc/Wm3K', NULL, '1106124197', 'Pratiwi Galuh Putri', 1, '2015-11-28 18:15:02', '2015-11-28 18:15:02'),
('QNS', '$2y$10$l5ngpO4IfBBpj4DQUD2bNepAZfMs.ObAcqDJdOt/BGxobbNsHhkBu', NULL, '1202144192', 'Qalbinuril Setyani', 1, '2015-11-28 18:09:53', '2015-11-28 18:09:53'),
('RAD', '$2y$10$VVHthPgb/4mfZZUg0ZgrRu5vaSB7znvXEqWMtn8HDgekzarAETeru', NULL, '1106120097', 'Aditya Pratama Nugraha Rahmayadi', 1, '2015-11-28 18:15:07', '2015-11-28 18:15:07'),
('RDN', '$2y$10$wu.dK74pvF0XfL/i5d5pp.nWLP/RM6LsqlE9Q5uUytvXQ6n6cuFi.', NULL, '1106120064', 'Nana Ramadhewi', 1, '2015-11-28 18:15:03', '2015-11-28 18:15:03'),
('RHS', '$2y$10$lQXYAbzZ/DlKnQI5smGdl.loHdBbOz4sake4qtffLqfjtJuAUjIOy', NULL, '1106122133', 'Reza Harli Saputra', 1, '2015-11-28 18:15:04', '2015-11-28 18:15:04'),
('RID', '$2y$10$3deUBYRBmY/b3/idSegpHu.OOqBAU9VHyxm4wkhjBpnPKRaAjci1G', NULL, '1106124204', 'Nurrida Aini Zuhroh', 1, '2015-11-28 18:15:02', '2015-11-28 18:15:02'),
('RIP', '$2y$10$qsUZiG8fuK2LScPjJZ6OYOFIaSv.suGRmHP04h1/hACQaF5Winj9q', NULL, '1202144073', 'Arief Rahman Hakim', 1, '2015-11-28 18:09:52', '2015-11-28 18:09:52'),
('SAT', '$2y$10$xbtBNwrtcOc7eKDB9Wv/3.vxVcMZeqA27OkGKCiacoHdXedSWoM2C', NULL, '1202144179', 'Satrio Wibowo', 1, '2015-11-28 18:09:54', '2015-11-28 18:09:54'),
('SLR', '$2y$10$xor5m1nO1M/UiDlEE3qPIu4BOLxkQqCYDu4lkww/G6eozwjRZAPIG', NULL, '1106120077', 'Slamet Mamat Rachmat', 1, '2015-11-28 18:15:03', '2015-11-28 18:15:03'),
('SNI', '$2y$10$2tsZsD.nTbA4msSuwcfSLuKSCz/0Yfkxhko4KXRaD43HPNE8N3Jqq', NULL, '1106130009', 'Yuliansari Nur Islami', 1, '2015-11-28 18:12:58', '2015-11-28 18:12:58'),
('TPG', '$2y$10$LRwaNx0k8aSBVwIpx9NrtebWk8ZWeuc2/rOKzk7naWhN7xndtyWAW', NULL, '1106121188', 'Timbul Prawira Gultom', 1, '2015-11-28 18:15:05', '2015-11-28 18:15:05'),
('ZAL', '$2y$10$PdXZllVz47zWv0wyL3vNJ.oqko.5zxSoNBCiyqsk9glIWNhGaAXS6', NULL, '1202144097', 'Amrizal Nurrachman Syahid', 1, '2015-11-28 18:09:52', '2015-11-28 18:09:52');

-- --------------------------------------------------------

--
-- Struktur dari tabel `votes`
--

CREATE TABLE IF NOT EXISTS `votes` (
  `username` varchar(20) DEFAULT NULL,
  `candidate_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`username`);

--
-- Indexes for table `votes`
--
ALTER TABLE `votes`
 ADD KEY `username` (`username`), ADD KEY `candidate_id` (`candidate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=35;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `votes`
--
ALTER TABLE `votes`
ADD CONSTRAINT `votes_ibfk_1` FOREIGN KEY (`username`) REFERENCES `users` (`username`),
ADD CONSTRAINT `votes_ibfk_2` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
