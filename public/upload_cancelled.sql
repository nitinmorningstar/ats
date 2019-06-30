-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2019 at 07:05 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ats`
--

-- --------------------------------------------------------

--
-- Table structure for table `upload_cancelled`
--

CREATE TABLE `upload_cancelled` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload_cancelled`
--

INSERT INTO `upload_cancelled` (`id`, `filename`, `created_at`, `updated_at`) VALUES
(1, 'Adam Miller.doc', NULL, NULL),
(2, 'Adonis R. Baybayan.pdf', NULL, NULL),
(3, 'Alanda R. White.pdf', NULL, NULL),
(4, 'alberto -WMS.doc', NULL, NULL),
(5, 'AmBargsley.pdf', NULL, NULL),
(6, 'Amino Trans Brandon.pdf', NULL, NULL),
(7, 'ArBorzillieri_Resume.pdf', NULL, NULL),
(8, 'arplana_resume.pdf', NULL, NULL),
(9, 'ArZabala_Soler-3.pdf', NULL, NULL),
(10, 'AsBurkhalter Resume.pdf', NULL, NULL),
(11, 'BCANNON.pdf', NULL, NULL),
(12, 'bChristina_.pdf', NULL, NULL),
(13, 'BGibbs 2019.pdf', NULL, NULL),
(14, 'Bo Yang.doc', NULL, NULL),
(15, 'brandon Abell.doc', NULL, NULL),
(16, 'Carl R. Foeller.doc', NULL, NULL),
(17, 'Carles Straughter.doc', NULL, NULL),
(18, 'CAuthement.pdf', NULL, NULL),
(19, 'CBurnellResume_2019.pdf', NULL, NULL),
(20, 'CDelgado - MBA 0519.pdf', NULL, NULL),
(21, 'CDHill.pdf', NULL, NULL),
(22, 'Cedric Campbell.doc', NULL, NULL),
(23, 'Charles Kodjo.doc', NULL, NULL),
(24, 'Charles L. Butler.doc', NULL, NULL),
(25, 'ChM. Baker.pdf', NULL, NULL),
(26, 'Christopher Lueder.pdf', NULL, NULL),
(27, 'Chuck Woods.doc', NULL, NULL),
(28, 'Cihan Topuz.pdf', NULL, NULL),
(29, 'coleman.pdf', NULL, NULL),
(30, 'CorettaResume2018Buffalo.rtf.pdf', NULL, NULL),
(31, 'Corey Fisher Resume.pdf', NULL, NULL),
(32, 'cquaken (1).pdf', NULL, NULL),
(33, 'Curtis Thurman.doc', NULL, NULL),
(34, 'CV Naresh Kumar[2].pdf', NULL, NULL),
(35, 'Dana J Gant Resume Mar 13 2019.pdf', NULL, NULL),
(36, 'daniellDaniels+resume10.dotx.pdf', NULL, NULL),
(37, 'DaPrim.pdf', NULL, NULL),
(38, 'DarSmith.pdf', NULL, NULL),
(39, 'DeFlynn.pdf', NULL, NULL),
(40, 'DerekEdited resume.doc', NULL, NULL),
(41, 'DKnapp_s_Resume.pdf', NULL, NULL),
(42, 'Donte’a Evans.pdf', NULL, NULL),
(43, 'duane.pdf', NULL, NULL),
(44, 'dwight randall.doc', NULL, NULL),
(45, 'EDaugherty1.pdf', NULL, NULL),
(46, 'EDLEVET__NEW.pdf', NULL, NULL),
(47, 'EEMILIO2019.pdf', NULL, NULL),
(48, 'Emmanuel I Gwee copy.doc', NULL, NULL),
(49, 'ender,qualiry manager copy.doc', NULL, NULL),
(50, 'Eric J. Peters.doc', NULL, NULL),
(51, 'ERIC L. RYANS.doc', NULL, NULL),
(52, 'Faith Westlake.doc', NULL, NULL),
(53, 'Felicia_J_Favila_Resume.pdf', NULL, NULL),
(54, 'Frank telschow.doc', NULL, NULL),
(55, 'GARGILL SUb.pdf', NULL, NULL),
(56, 'GBatista.pdf', NULL, NULL),
(57, 'George Poole.doc', NULL, NULL),
(58, 'George Zorrilla.pdf', NULL, NULL),
(59, 'GFrank Resume.pdf', NULL, NULL),
(60, 'GOneill_resume_2017_08+(1).pdf', NULL, NULL),
(61, 'ISRAEL VILLASEÑOR[2] copy.doc', NULL, NULL),
(62, 'J. Glenn Wrap.doc', NULL, NULL),
(63, 'Jacob Brown.doc', NULL, NULL),
(64, 'JAMAAL BAYLIS.pdf', NULL, NULL),
(65, 'james matthew ....docx', NULL, NULL),
(66, 'JaParker-Resume.pdf', NULL, NULL),
(67, 'Jawahington.pdf', NULL, NULL),
(68, 'Jawashington 2019.pdf', NULL, NULL),
(69, 'JBlevins.pdf', NULL, NULL),
(70, 'Jcampbellresume.pdf', NULL, NULL),
(71, 'Joe McCully.pdf', NULL, NULL),
(72, 'JOHN W. WELCH.doc', NULL, NULL),
(73, 'jon_hibbs@yahoo.com001.pdf', NULL, NULL),
(74, 'joshua johns  resume 2018.pdf', NULL, NULL),
(75, 'JUANCHAIDEZ+RESUME.doc.pdf', NULL, NULL),
(76, 'JulStinson.pdf', NULL, NULL),
(77, 'Justin L. Christian.pdf', NULL, NULL),
(78, 'Jwalteroyce Resume.pdf', NULL, NULL),
(79, 'Karla Hodges RN acute care (SF).pdf', NULL, NULL),
(80, 'KaThompson 052019.pdf', NULL, NULL),
(81, 'KeNolen Sr..pdf', NULL, NULL),
(82, 'KEVIN DUMAS.pdf', NULL, NULL),
(83, 'Kevin P Cooper Sr.pdf', NULL, NULL),
(84, 'Kevin_Scott.doc', NULL, NULL),
(85, 'KLaValle.pdf', NULL, NULL),
(86, 'km.pdf', NULL, NULL),
(87, 'Krouse.pdf', NULL, NULL),
(88, 'KThompson 052019.pdf', NULL, NULL),
(89, 'Kthoryle.pdf', NULL, NULL),
(90, 'LARRY J. HILL.doc', NULL, NULL),
(91, 'liliErguiza.docx', NULL, NULL),
(92, 'LuEguren_Resume_-_NC_-_CIO.pdf', NULL, NULL),
(93, 'MAHFUZ KABIR.doc', NULL, NULL),
(94, 'Manuel_Long.pdf', NULL, NULL),
(95, 'Marlon M. Mings.doc', NULL, NULL),
(96, 'MarWaring_s_Resume.pdf', NULL, NULL),
(97, 'Mek_s_resume doc.doc', NULL, NULL),
(98, 'MICHAEL MERKER.doc', NULL, NULL),
(99, 'mike french 15.doc', NULL, NULL),
(100, 'Mikhail Okhin.pdf', NULL, NULL),
(101, 'MKBA-2015.doc', NULL, NULL),
(102, 'Moises R Charles.doc', NULL, NULL),
(103, 'nadrew 15.doc', NULL, NULL),
(104, 'nathaniel,bakersfield,CA copy.doc', NULL, NULL),
(105, 'NELSON​ ​ROSARIO.pdf', NULL, NULL),
(106, 'Nickho.pdf', NULL, NULL),
(107, 'Nicole william.pdf', NULL, NULL),
(108, 'NurseMichelle+N+Esmer+LVN+Nursing+Resume+12-14-18.pdf', NULL, NULL),
(109, 'PandaMaheshResume May 2019.pdf', NULL, NULL),
(110, 'paul edited.doc', NULL, NULL),
(111, 'Paul Seebruck.doc', NULL, NULL),
(112, 'Pguageaul.pdf', NULL, NULL),
(113, 'PuneetRana.pdf', NULL, NULL),
(114, 'Qussay 2019.pdf', NULL, NULL),
(115, 'raw%3A%2Fstorage%2Femulated%2F0%2FDownload%2FResumeD.pdf', NULL, NULL),
(116, 'RenderImage.pdf', NULL, NULL),
(117, 'resumee.pdf', NULL, NULL),
(118, 'REWilliams_Resume.pdf', NULL, NULL),
(119, 'Rhonda.pdf', NULL, NULL),
(120, 'Robeen R Billings.pdf', NULL, NULL),
(121, 'Robert Littlejohn.pdf', NULL, NULL),
(122, 'Rodger A. Gilbert.doc', NULL, NULL),
(123, 'RodHanson.pdf', NULL, NULL),
(124, 'RoMelvin.pdf', NULL, NULL),
(125, 'Rona Taylor.doc', NULL, NULL),
(126, 'Ronald Pekar.pdf', NULL, NULL),
(127, 'SAFULLER(2).pdf', NULL, NULL),
(128, 'sandra.pdf', NULL, NULL),
(129, 'SANGJUN LEE.doc', NULL, NULL),
(130, 'ScStowe.pdf', NULL, NULL),
(131, 'SHONDRAY BURNS.pdf', NULL, NULL),
(132, 'SICHIMO_SCM[1] copy.doc', NULL, NULL),
(133, 'SmRonald - Senior Project Manager Resume 2019 05 03.pdf', NULL, NULL),
(134, 'SSisneros-Resume (1).pdf', NULL, NULL),
(135, 'Stacy Rakestraw.doc', NULL, NULL),
(136, 'steve hardin.doc', NULL, NULL),
(137, 'Steven D. Sellner.pdf', NULL, NULL),
(138, 'SUE_S_.pdf', NULL, NULL),
(139, 'Tania Nunez Resume\'s.pdf', NULL, NULL),
(140, 'Teresa A Bader Sub.pdf', NULL, NULL),
(141, 'Thomas R. Ward.doc', NULL, NULL),
(142, 'TrGivens 2019.pdf', NULL, NULL),
(143, 'TRoxas.pdf', NULL, NULL),
(144, 'Tsampsonom.pdf', NULL, NULL),
(145, 'TVukosavljevic.doc.pdf', NULL, NULL),
(146, 'twallaesume_revamped.pdf', NULL, NULL),
(147, 'Tye-edited 25.doc', NULL, NULL),
(148, 'Unique Brown\'s Resume.pdf', NULL, NULL),
(149, 'val yerman.pdf', NULL, NULL),
(150, 'Vernon Oliver+Resume copy.doc', NULL, NULL),
(151, 'ViPayne 2019.pdf', NULL, NULL),
(152, 'Waldemar Sauer.doc', NULL, NULL),
(153, 'Wayne Starron Resume Sept 2018.pdf', NULL, NULL),
(154, 'Wilkinson_Nadya_Resume (1) (1).pdf', NULL, NULL),
(155, 'William Rachburg.pdf', NULL, NULL),
(156, 'Wood S. Hargis.doc', NULL, NULL),
(157, 'Xiaolin_Liu.doc', NULL, NULL),
(158, 'Zurab Jacobi.doc', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `upload_cancelled`
--
ALTER TABLE `upload_cancelled`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `upload_cancelled`
--
ALTER TABLE `upload_cancelled`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
