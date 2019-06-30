-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2019 at 01:41 PM
-- Server version: 5.7.25-0ubuntu0.16.04.2
-- PHP Version: 7.2.13-1+ubuntu16.04.1+deb.sury.org+1

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
-- Table structure for table `assign_jobs`
--

CREATE TABLE `assign_jobs` (
  `id` int(11) NOT NULL,
  `job_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign_jobs`
--

INSERT INTO `assign_jobs` (`id`, `job_id`, `user_id`, `created_at`, `updated_at`) VALUES
(2, 1, 3, '2019-05-24 10:57:16', '2019-05-24 10:57:16'),
(3, 3, 3, '2019-05-24 11:52:25', '2019-05-24 11:52:25'),
(4, 3, 2, '2019-05-24 11:53:46', '2019-05-24 11:53:46'),
(5, 1, 2, '2019-05-30 07:32:44', '2019-05-30 07:32:44');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `id` int(11) NOT NULL,
  `filename` varchar(255) NOT NULL,
  `contents` longtext NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`id`, `filename`, `contents`, `status`, `created_at`, `updated_at`) VALUES
(11, 'Aashiq_Shanavas.doc', '2936 Swanson Pkwy 								                          (815) 997 4233 Rockford, IL 61109   						         	                           aashiq76@gmail.com www.linkedin.com/in/aashiqshanavas/ www.vizualize.me/AashiqShanavas/ CAREER SUMMARY Multi-Lingual High-performing Global Supply Chain Professional with diversified supply chain work history in Purchasing, Manufacturing, Inventory Planning, Logistics, Aftermarket, Distribution, Six Sigma --Global work experience including India, Saudi Arabia, USA, Asia, Europe and South America Background includes 15 years track record of generating significant bottom line contributions, and process improvements in discrete and continuous manufacturing / distribution environments Team builder that delivers results through a practical vision, by developing and implementing strategic and tactical solutions for positive change Extensive Technical and Computer/ ERP expertise  MSS, JD Edwards OneWorld, PeopleSoft, VAM, SolidWorks, AutoCAD, Visual Basic, Java, MS Office, MS Access, SAS EG, Data warehousing and reporting   PROFESSIONAL WORK HISTORY Parker Hannifin								                       2014 - Current Materials Manager Reported directly to the Divisional Supply Chain Manager Responsibilities included managing 95 Million spend comprising of the Direct and Indirect Spend Successfully designed and implemented an automated data mining application that provided part shortage information this initiative reduced the existing review time by 75 Lead the implementation of PFEP with an Access database that complied with the latest Parker guidelines this achieved a 50  reduction in part shortages Spearheaded several system and process changes including MRP report streamlining, production orders to the shop floor that resulted in greater efficiencies for the Supply Chain department   Carus Group Inc.								                        2013 - 2014 Purchasing Manager Reported directly to the Director of Procurement Responsibilities included managing 22 Million spend comprising of the MRO, Packaging and Distribution Chemicals Successfully implemented strategic sourcing initiatives that saved the company annually an overall 15 of its  20M MRO spend through new supplier sourcing, supplier consolidation and joint process improvement Led cross functional value teams in value added supplier selection and implementation Achieved an overall reduction of 10 of annual  2M packaging costs through supplier leverage and consolidation Successfully developed best in class policies in inventory  purchasing that streamlined warehouse inventory operations, optimized the procure-to-pay cycle and guidelines for outside contractor spend Assimilated data collection from multiple systems from the various acquisition companies and compiled a standalone database that was used to develop synergetic relations between various commodities and suppliers optimized Excel spreadsheet for raw material forecasting Ryder Systems Inc.								                          2009 - 2013 Inventory Planning Manager Reported directly to the Field Inventory Planning Manager Managed locations by the implementation and monitoring of company key performance indicators, process compliance and implementing best practices Trained and audited purchasing/inventory control functions across 22 locations (MN, SD, ND, IA and IL) Indirectly managed over 20 purchasing personnel Ryder Systems Inc.								                          2009 - 2013 Inventory Planning Manager (Cont.) Drove purchasing/inventory performance initiatives across multiple locations that included an 85 obsolescence reduction and a price variance reduction from 2 to 0.5, making the business unit score the highest in the regions purchasing scorecard for 2012  Established preferred vendors for various product lines for each location in alignment with national vendor programs as well as the companys target pricing improving the program compliance from 80 to 97 and exceeding the companys goal on target pricing without compromising the service level WW Grainger							   		                          2007  2009 Inventory Analyst Planner  Reported to the Demand Planning Manager, managed 20 million inventory, stocking levels and new product launching for multiple business units, supporting a team of 15 buyers, role focused on improving delivery performance, preventing stock outs, production planning for kitting operation and reducing obsolescence Designed, programmed and implemented automated MRP for planning and production control for light manufacturing business units of Lab Safety Supply improving the service level from 80 to 98 Developed the logic and programs to determine purchases needed to support direct marketing catalogs new products for multiple sites and business units This process helped reduce the inventory to optimum levels and removed errors due to the pre-existing manual process flow AxleTech International (formerly ArvinMeritor Inc)    Inventory Control  Logistics Mgr. (05-07) / AfterMarket Purchasing Mgr.(03  05)                   2003-2007 Reported directly to Director of Supply Chain North America, had various roles of increasing responsibility in the organization ranging from Aftermarket Purchasing Manager North America to Inventory Control  Logistics Manager focused on purchasing/stocking strategies to increase sales, global supply chain management, defense related logistics compliance, improving global transportation costs and transit times Developed strategic plans for purchasing and forecasting for a dynamic and fast paced Off Highway Automotive Heavy Equipment Aftermarket that supported a sales growth of over a 100  in two years, improved on-time delivery from 60 to 90 and lowered inventory levels Coordinated and executed a project transferring new product line including sales history analysis, developed stocking strategies and launched initial stocking orders Managed material supply from all the foreign suppliers in South America, Europe and Asia to ensure it met the production schedule requirements Worked in developing growth plans and implemented strategies for the business making it one of the most profitable ventures in the organization Milescraft						 Asst. Operations Manager									  2002-2003 	Reported to the Operations Manager- responsible for purchasing and production planning focused on reducing obsolescence, customer back orders and shop floor management. Directly managed a production crew of 10 or more personnel EDUCATION  TRAINING B.S. - Mechanical Engineering, Anjuman Engineering College Bhatkal, India				  2000 Rock Valley College Rockford, IL		 						                2004 APICS CPIM Modules - Strategic Management of Resources  Detailed Scheduling and Planning Y, XHQRgXv1NAm2qe8cGG7JcAxL KwG2B klYhl81m	GpWv\nv)\npV rkFOPJs.k/(mvyr(Zx ,\nYbJ\nRolu-cFVon(cuIzr1\nbA@pEXxg7ew.z/L__sAWo_yIwxX0FKRfqBl1qoOX1JxN,ctqg0iOMswPje7@EeE8Scb	6cjZ2s9z3ZuHx6ubj6JQBHf0qX5Kldy36(Ic@.u y@tJj4(ugURx8/GN8q/K,CsMQ\nuBAF0r xvCNAee1TO2LxU_9DirYf.xAFsqk	(0Il9H4H As-m@\nlNz 6Q', 1, '2019-05-22 14:00:17', '2019-05-22 14:00:17'),
(12, 'Holly-Ohrtman.pdf', 'Froos t\nMN\r&#x000E;&#x000F;jeMNanae9 @gMma&#x000F;i .mmamN&#x000E;&#x000F;NFrost\n MN\ro&#x000E;&#x000E;&#x000F;jean99@gmai&#x000E;.&#x001A;om - &#x001B;&#x001C;&#x001D;-&#x001B;&#x001E;&#x001C;-&#x001C;9&#x001F;8WORK EXPERIENCE&#x001A;j. &#x001A;eMmr&#x000F;&#x000E;o j&#x000E;Me .mmamN&#x000E;&#x000F;NMa&#x000F;o C&#x000E;ini&#x001A; - Man*ato\n MN-+e&#x001A;em,er &#x001E;&#x001C;-&#x001D; to .une &#x001E;&#x001C;-8jeMNanae9 @gMma&#x000F;i .mmamN&#x000E;&#x000F;NPar*view Care Center - We&#x000E;&#x000E;s\n MN-Ma&#x000F; &#x001E;&#x001C;-&#x001D; to Septem,er &#x001E;&#x001C;-&#x001D;jeMNanae9 @gMma&#x000F;i .mmamN&#x000E;&#x000F;NMap&#x000E;eton Communit&#x000F; Home - Map&#x000E;eton\n MN-+e&#x001A;em,er &#x001E;&#x001C;-6 to Ma&#x000F; &#x001E;&#x001C;-&#x001D;&#x001B;@&#x001C;&#x001D;@&#x001E;t&#x001F;8 W&#x001A;&#x001D;j&#x001B;.O&#x001B;W&#x001E;ANGIE&#x0027;S ARTISAN TREATS-Fe,ruar&#x000F; &#x001E;&#x001C;-6 to .une &#x001E;&#x001C;-6:eri;&#x000F; an< or<er materia&#x000E;s ;or pro<u&#x001A;tion\n ;or*&#x000E;i;t operation\n *ett&#x000E;e operation\n pa&#x001A;*agingo; ;inis\re< pro<u&#x001A;t\n wrap an< &#x000E;a,e&#x000E; ;inis\re< pa&#x000E;&#x000E;ets\n &#x001A;ommuni&#x001A;ate wit\r Pro&#x001A;urement an<Management to ensure a&#x001A;&#x001A;ura&#x001A;&#x000F; ,etween ware\rousest&#x001A;&#x001D;&#x001F;.&#x001E;&#x001B;t@W .R&#x001D;@&#x001E;GEEK S=>A+\n ?EST ?>Y-.une &#x001E;&#x001C;-&#x001B; to Fe,ruar&#x000F; &#x001E;&#x001C;-6Trou,&#x000E;es\root &#x001A;&#x000E;ient <evi&#x001A;es\n s\ripping an< re&#x001A;eiving\n <ai&#x000E;&#x000F; &#x001A;ommuni&#x001A;ations wit\r &#x001A;&#x000E;ients ;or servi&#x001A;e;o&#x000E;&#x000E;ow ups\n ;i&#x000E;ing\n new &#x001A;omputer set ups an< <ai&#x000E;&#x000F; report presentation to sta;;&#x001A;.jK.R&#x001D; E.&#x001E;. WX&#x001A;&#x001D;&#x001F;&#x001C;&#x001B;Wt&#x001F;-Novem,er &#x001E;&#x001C;-&#x001F; to .u&#x000E;&#x000F; &#x001E;&#x001C;-&#x001B;\nCoor<inate <rivers wit\r s&#x001A;\re<u&#x000E;e< pi&#x001A;*up an< <e&#x000E;iver&#x000F; vo&#x000E;ume ;or -&#x001E;--&#x001D; <ai&#x000E;&#x000F; routes\n veri;&#x000F;s&#x001A;\re<u&#x000E;es an< time &#x001A;ar<s ;or <rivers an< pa&#x001A;*age \ran<&#x000E;ers\n sa;et&#x000F; p&#x000E;an imp&#x000E;ementation\n newemp&#x000E;o&#x000F;ee trainingE+>CATIONjeMNanaP&#x000E;Ne a&#x000F; Fe&#x000E;oN\n X&#x000F;aN jrrM9a&#x000F;&#x000E;NrMHig\r Te&#x001A;\r Institute - ?roo*&#x000E;&#x000F;n Par*\n MNFe,ruar&#x000F; &#x001E;&#x001C;&#x001C;&#x001C; to +e&#x001A;em,er &#x001E;&#x001C;&#x001C;&#x001C;SKILLSMi&#x001A;roso;t O;;i&#x001A;e (-&#x001C;+ &#x000F;ears)\n For*&#x000E;i;t Operator (Less t\ran - &#x000F;ear)\n Pa&#x000E;&#x000E;et .a&#x001A;* (Less t\ran - &#x000F;ear)\nInventor&#x000F; Contro&#x000E; (- &#x000F;ear)\n Customer Servi&#x001A;e (6 &#x000F;ears)\n Me<i&#x001A;a&#x000E; Termino&#x000E;og&#x000F; (&#x001E; &#x000F;ears)CERTIFICATIONS/LICENSESjeMNanae9 @gMma&#x000F;i .mmamN&#x000E;&#x000F;N Ij@.CMar&#x001A;\r &#x001E;&#x001C;-&#x001D; to Present', 1, '2019-05-22 14:00:45', '2019-05-22 14:00:45'),
(13, 'Marcua_Campbell.pdf', 'Marcu\n &#x000B;a&#x000C;\r&#x000E;&#x000F;llMarcu\ncac&#x000B;\n &#x000C;\n&#x000B;\rcr&#x000B;rac - &#x000E;&#x000F; lua11rc4 84\nc&#x000B;0&#x000C;arcu\nca&#x000C;\r&#x000E;&#x000F;ll1480@g&#x000C;ail.co&#x000C;&#x001A;&#x001A;1-&#x001B;84-&#x001C;148&#x001D;illi&#x001E;g &#x001F;o r&#x000F;loca&#x001F;&#x000F;: A&#x001E;ywh&#x000F;r&#x000F; Au&#x001F;horiz&#x000F;d &#x001F;o work i&#x001E; &#x001F;h&#x000F; US *or a&#x001E;y &#x000F;&#x000C;\rloy&#x000F;r\n&#x001D;ork +,\r&#x000F;ri&#x000F;&#x001E;c&#x000F;Marcu\ncac&#x000B;\n &#x000C;\n&#x000B;\rcr&#x000B;rac-. S&#x001F;a**i&#x001E;g Ag&#x000F;&#x001E;cy - &#x000B;hicago/ ILJu&#x001E;&#x000F; 201&#x001B; &#x001F;o Pr&#x000F;\n&#x000F;&#x001E;&#x001F;Pr&#x000F;v&#x000F;&#x001E;&#x001F;a&#x001F;iv&#x000F; Mai&#x001E;&#x001F;&#x000F;&#x001E;a&#x001E;c&#x000F; Progra&#x000C;\n For HVA&#x000B; a&#x001E;d R&#x000F;*rig&#x000F;ra&#x001F;io&#x001E; :S\rli&#x001F; Sy\n&#x001F;&#x000F;&#x000C;\n :&#x000B;o&#x000C;&#x000C;&#x000F;rcial &#x000F;,hau\n&#x001F; *a&#x001E;\n :MUA Sy\n&#x001F;&#x000F;&#x000C;\n :&#x001D;alk i&#x001E; cool&#x000F;r\n;*r&#x000F;&#x000F;z&#x000F;r\n a&#x001E;d \n&#x000F;l*-co&#x001E;&#x001F;ai&#x001E;&#x000F;d r&#x000F;*rig&#x000F;ra&#x001F;io&#x001E; a&#x001E;d *r&#x000F;&#x000F;z&#x000F;r\n R&#x000F;\n\ro&#x001E;\ni&#x000E;ili&#x001F;i&#x000F;\n: &#x000B;olla&#x000E;ora&#x001F;&#x000F;\n wi&#x001F;h o&#x001F;h&#x000F;r *acili&#x001F;i&#x000F;\n \r&#x000F;r\no&#x001E;&#x001E;&#x000F;l o&#x001E; variou\n \rro<&#x000F;c&#x001F;\n. R&#x000F;\n\ro&#x001E;d\n &#x001F;o&#x000C;ai&#x001E;&#x001F;&#x000F;&#x001E;a&#x001E;c&#x000F; r&#x000F;=u&#x000F;\n&#x001F;\n *ro&#x000C; \n&#x001F;or&#x000F;\n i&#x001E; a &#x001F;i&#x000C;&#x000F;ly *a\nhio&#x001E;. P&#x000F;r*or&#x000C;\n r&#x000F;gular \rro\r&#x000F;r&#x001F;y i&#x001E;\n\r&#x000F;c&#x001F;io&#x001E;\n. Advi\n&#x000F;\n \n&#x001F;or&#x000F; &#x000C;a&#x001E;ag&#x000F;r\n o&#x001E; a vari&#x000F;&#x001F;y o* &#x001F;&#x000F;ch&#x001E;ical &#x000F;&#x001E;gi&#x001E;&#x000F;&#x000F;ri&#x001E;g i\n\nu&#x000F;\n.\n+duca&#x001F;io&#x001E;@g8i . @ao\n &#x000C;0&#x001A;\n &#x001B; &#x001C; &#x001D;&#x001E;8 &#x001F;cro\n:Aay&#x000B;oy&#x001E;&#x000F; &#x000B;oll&#x000F;g&#x000F; - &#x000B;hicago/ ILi\n:ur1r&#x000B;aurwc rc iwhhzcr&#x000B;aurwc&#x000B;oll&#x000F;g&#x000F; o* >uPag&#x000F; - >uPag&#x000F;/ IL/ US\nSkill\n&#x000B;??LIN./ &#x000B;>L/ HVA&#x000B;/ INV+NT?RY/ ?R>+RIN./ w&#x000F;ldi&#x001E;g/ &#x000F;l&#x000F;c&#x001F;rical/ \rai&#x001E;&#x001F;i&#x001E;g/ &#x000C;ai&#x001E;&#x001F;&#x000F;&#x001E;a&#x001E;c&#x000F;\nAddi&#x001F;io&#x001E;al I&#x001E;*or&#x000C;a&#x001F;io&#x001E;Skill\n &#x000B;la\n\n - &#x000B;>L ?v&#x000F;r\n&#x000F;&#x000F;i&#x001E;g ord&#x000F;ri&#x001E;g a&#x001E;d i&#x001E;v&#x000F;&#x001E;&#x001F;ory o* Su\r\rli&#x000F;\n Ma&#x001E;agi&#x001E;g &#x000E;udg&#x000F;&#x001F;: &#x000B;o\n&#x001F; &#x000F;**&#x000F;c&#x001F;iv&#x000F; d&#x000F;ci\nio&#x001E;\n Trai&#x001E;i&#x001E;g T&#x000F;a&#x000C; o* T&#x000F;ch\n Mai&#x001E;&#x001F;ai&#x001E; ?v&#x000F;r &#x001A;21 A\rar&#x001F;&#x000C;&#x000F;&#x001E;&#x001F; U&#x001E;i&#x001F;\n wi&#x001F;h HVA&#x000B; ;H&#x000F;a&#x001F;i&#x001E;g a&#x001E;d &#x000B;ooli&#x001E;g', 1, '2019-05-22 14:01:28', '2019-05-22 14:01:28');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `description` text,
  `detail` text,
  `post` varchar(255) DEFAULT NULL,
  `salary` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `title`, `description`, `detail`, `post`, `salary`, `location`, `created_at`, `updated_at`) VALUES
(1, 'Chaitanya Projects Consultecny private limited', 'web Developer', 'Software developer. Becoming a software developer, also known as a computer programmer, you\'ll be playing a key role in the design, installation, testing and maintenance of software systems. The programs you create are likely to help businesses be more efficient and provide a better service.', 'web developer', '50000k', 'noida', '2019-05-23 12:04:44', '2019-05-23 12:04:44'),
(2, 'Delaine Technology Private Limited', 'ios/Mobile developer', 'Software developer. Becoming a software developer, also known as a computer programmer, you\'ll be playing a key role in the design, installation, testing and maintenance of software systems. The programs you create are likely to help businesses be more efficient and provide a better service.', 'web developer', '20000', 'noida', '2019-05-23 12:04:55', '2019-05-23 12:04:55'),
(3, 'Bank Of America', 'Merril Edge Financial SOlutions Advisor Development Program-Chicopee/Memorial,Ma', 'Software developer. Becoming a software developer, also known as a computer programmer, you\'ll be playing a key role in the design, installation, testing and maintenance of software systems. The programs you create are likely to help businesses be more efficient and provide a better service.', 'software engg.', '60000', 'noida', '2019-05-23 12:05:26', '2019-05-23 12:05:26'),
(4, 'Amcor Rigid Plastics', 'Sr. Supply Chain Operators Managers', 'Software developer. Becoming a software developer, also known as a computer programmer, you\'ll be playing a key role in the design, installation, testing and maintenance of software systems. The programs you create are likely to help businesses be more efficient and provide a better service.', 'web', '900000', 'noida', '2019-05-23 12:05:43', '2019-05-23 12:05:43'),
(5, 'MasterMind Network Technology', 'Design and implement machine learning, information technology', 'Software developer. Becoming a software developer, also known as a computer programmer, you\'ll be playing a key role in the design, installation, testing and maintenance of software systems. The programs you create are likely to help businesses be more efficient and provide a better service.', 'finance', '48397', 'delhi', '2019-05-23 12:07:03', '2019-05-23 12:07:03');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resumes`
--

CREATE TABLE `resumes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `assign_id` int(11) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `summery` varchar(255) DEFAULT NULL,
  `job_id` int(11) DEFAULT NULL,
  `resumes` varchar(255) DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resumes`
--

INSERT INTO `resumes` (`id`, `user_id`, `assign_id`, `first_name`, `last_name`, `email`, `summery`, `job_id`, `resumes`, `status`, `created_at`, `updated_at`) VALUES
(19, 3, 2, 'kirti', 'patni', 'kirti1@gmail.com', 'software engg', 1, 'learning_sample_resume.pdf', 1, '2019-05-30 06:11:56', '2019-05-30 06:11:56'),
(20, 2, 5, 'kittu', 'verma', 'kittu@gmail.com', 'web developer', 1, 'sample-smart-and-balanced-resume.pdf', 2, '2019-05-30 07:38:35', '2019-05-30 07:38:35'),
(21, 2, 4, 'kittu', 'verma', 'kittu@gmail.com', 'web developer', 3, 'sample-modern-contemporary-resume.pdf', 3, '2019-05-30 07:59:02', '2019-05-30 07:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-05-23 07:14:36', '2019-05-23 07:14:36'),
(2, 'user', '2019-05-23 07:14:43', '2019-05-23 07:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `status`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'aarti', 'aarti@gmail.com', NULL, 0, '$2y$10$ctjUQndL0.t0V/X6gwNatuq/eLJ.EvxuHz7YAXvHsFD1wvZvGeulO', NULL, '2019-05-22 06:02:02', '2019-05-22 06:02:02'),
(2, 2, 'kittu', 'kittu@gmail.com', NULL, 0, '$2y$10$NRUajoCP5PQvRsw4T0FXJ.r4weGELiyc3ykaKDrdmxHz8sHyawJRy', NULL, '2019-05-22 06:17:55', '2019-05-22 06:17:55'),
(3, 2, 'kirti', 'kirti1@gmail.com', NULL, 0, '$2y$10$JwykBdNG987SEYjjsK4yRuXgp1ruFBUCWSRrvDdoCdFbuQNsSnwVK', NULL, '2019-05-22 06:40:00', '2019-05-22 06:40:00'),
(4, 2, 'abc', 'abc@gmail.com', NULL, 0, '$2y$10$dAXrV..W4aytwKzYlXJ/Le0RedOuh0yTpfGYUzkxndvuDCoYVjznu', NULL, '2019-05-22 06:42:31', '2019-05-22 06:42:31'),
(5, 2, 'xyz', 'xyz@gmail.com', NULL, 0, '$2y$10$qZMe6SRoDTkmfP1SX.TVIu.PTuCNzYcyUJolowAkIAM/pJZ2zZbP6', NULL, '2019-05-22 06:43:17', '2019-05-22 06:43:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign_jobs`
--
ALTER TABLE `assign_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `documents` ADD FULLTEXT KEY `search_index (contects)` (`contents`);
ALTER TABLE `documents` ADD FULLTEXT KEY `search_index (contents)` (`contents`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `resumes`
--
ALTER TABLE `resumes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
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
-- AUTO_INCREMENT for table `assign_jobs`
--
ALTER TABLE `assign_jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resumes`
--
ALTER TABLE `resumes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
