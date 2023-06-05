-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 05 juin 2023 à 19:39
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `carrental`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `updationDate`) VALUES
(1, 'admin', 'e10adc3949ba59abbe56e057f20f883e', '2022-09-14 06:23:17');

-- --------------------------------------------------------

--
-- Structure de la table `tbcomplaint`
--

DROP TABLE IF EXISTS `tbcomplaint`;
CREATE TABLE IF NOT EXISTS `tbcomplaint` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Out_ND` int(11) DEFAULT NULL,
  `Useremail` varchar(100) DEFAULT NULL,
  `G_T` int(100) DEFAULT NULL,
  `messag` varchar(100) DEFAULT NULL,
  `Tvehicle` varchar(150) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbcomplaint`
--

INSERT INTO `tbcomplaint` (`id`, `Out_ND`, `Useremail`, `G_T`, `messag`, `Tvehicle`) VALUES
(1, 12, 'HALIMA@gmail.com', 122, 'CCCC', 'BMW'),
(2, 12, 'HALIMAHAL12@gmail.com', 12222, 'efsDFse', 'BMW'),
(3, 12, 'rajaerezougui125@gmail.com', 1222, 'XFDFGDFGDFG', 'BMW');

-- --------------------------------------------------------

--
-- Structure de la table `tblbooking`
--

DROP TABLE IF EXISTS `tblbooking`;
CREATE TABLE IF NOT EXISTS `tblbooking` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BookingNumber` bigint(12) DEFAULT NULL,
  `userEmail` varchar(100) DEFAULT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `FromDate` varchar(20) DEFAULT NULL,
  `ToDate` varchar(20) DEFAULT NULL,
  `message` varchar(255) DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `LastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblbooking`
--

INSERT INTO `tblbooking` (`id`, `BookingNumber`, `userEmail`, `VehicleId`, `FromDate`, `ToDate`, `message`, `Status`, `PostingDate`, `LastUpdationDate`) VALUES
(1, 245268634, 'KARIM123@gmail.com', 2, '2022-08-11', '2022-08-07', 'I WANNA THIS NOW', 1, '2022-08-06 11:26:46', '2022-08-06 11:27:39'),
(2, 658410531, 'rajaerezougui123@gmail.com', 2, '2022-08-11', '2022-08-03', 'RRRRR', 1, '2022-08-10 08:28:46', '2022-08-10 08:30:43'),
(3, 619457175, 'rajaerezougui13@gmail.com', 2, '2022-09-16', '2022-09-18', 'hello', 1, '2022-09-13 17:41:29', '2022-09-13 17:42:34'),
(4, 517612797, 'rajaerezougui13@gmail.com', 4, '2022-09-09', '2022-09-05', 'DWE', 1, '2022-09-14 10:41:27', '2022-09-14 10:44:37'),
(5, 328390871, 'rajaerezougui13@gmail.com', 4, '2022-09-09', '2022-09-05', 'DWE', 1, '2022-09-14 10:42:20', '2022-09-26 23:20:25'),
(6, 315907465, 'rajaerezougui13@gmail.com', 5, '2022-10-31', '2022-11-03', 'HDFGSGR', 1, '2022-10-31 22:50:51', '2022-10-31 22:54:15');

-- --------------------------------------------------------

--
-- Structure de la table `tblbrands`
--

DROP TABLE IF EXISTS `tblbrands`;
CREATE TABLE IF NOT EXISTS `tblbrands` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BrandName` varchar(120) NOT NULL,
  `CreationDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblbrands`
--

INSERT INTO `tblbrands` (`id`, `BrandName`, `CreationDate`, `UpdationDate`) VALUES
(2, 'BMW', '2022-08-03 16:24:50', NULL),
(3, 'Audi', '2022-08-03 13:25:03', NULL),
(4, 'Nissan', '2022-08-03 16:25:13', NULL),
(5, 'Toyota', '2022-08-03 16:25:24', NULL),
(8, 'Dacia', '2022-08-03 12:22:29', '2022-08-03 12:30:29');

-- --------------------------------------------------------

--
-- Structure de la table `tblcontactusinfo`
--

DROP TABLE IF EXISTS `tblcontactusinfo`;
CREATE TABLE IF NOT EXISTS `tblcontactusinfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Address` tinytext,
  `EmailId` varchar(255) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblcontactusinfo`
--

INSERT INTO `tblcontactusinfo` (`id`, `Address`, `EmailId`, `ContactNo`) VALUES
(1, 'ERRACHIDIA', 'rajaerezougui34@gmail.com', '0622345172');

-- --------------------------------------------------------

--
-- Structure de la table `tblsubscribers`
--

DROP TABLE IF EXISTS `tblsubscribers`;
CREATE TABLE IF NOT EXISTS `tblsubscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `SubscriberEmail` varchar(120) DEFAULT NULL,
  `PostingDate` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblsubscribers`
--

INSERT INTO `tblsubscribers` (`id`, `SubscriberEmail`, `PostingDate`) VALUES
(6, 'rajaerezougui22@gmail.com', '2022-08-03 12:39:00');

-- --------------------------------------------------------

--
-- Structure de la table `tbltestimonial`
--

DROP TABLE IF EXISTS `tbltestimonial`;
CREATE TABLE IF NOT EXISTS `tbltestimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `UserEmail` varchar(100) NOT NULL,
  `Testimonial` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tbltestimonial`
--

INSERT INTO `tbltestimonial` (`id`, `UserEmail`, `Testimonial`, `PostingDate`, `status`) VALUES
(1, 'HALIMAHAL12@gmail.com', 'SALUT A LIKE THIS CAR', '2022-08-08 13:28:56', 0),
(2, 'rajaerezougui13@gmail.com', 'hello', '2022-10-02 14:56:58', 1),
(3, 'rajaerezougui13@gmail.com', 'tesst', '2022-10-02 14:57:09', 0);

-- --------------------------------------------------------

--
-- Structure de la table `tblusers`
--

DROP TABLE IF EXISTS `tblusers`;
CREATE TABLE IF NOT EXISTS `tblusers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `FullName` varchar(120) DEFAULT NULL,
  `EmailId` varchar(100) DEFAULT NULL,
  `Password` varchar(100) DEFAULT NULL,
  `ContactNo` char(11) DEFAULT NULL,
  `dob` varchar(100) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `City` varchar(100) DEFAULT NULL,
  `Country` varchar(100) DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT NULL,
  `UpdationDate` datetime DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblusers`
--

INSERT INTO `tblusers` (`id`, `FullName`, `EmailId`, `Password`, `ContactNo`, `dob`, `Address`, `City`, `Country`, `RegDate`, `UpdationDate`) VALUES
(1, 'KARIM', 'KARIM123@gmail.com', '00d2c8cbc82a7bb56b05060e4c4dea11', '0622570179', NULL, NULL, NULL, NULL, NULL, '2022-08-08 14:34:20'),
(2, 'HALIMA', 'HALIMAHAL12@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0622570170', NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'RAJAE', 'rajaerezougui12@gmail.com', '26963a2f0a229990c311f2bff5d15dce', '0622570177', NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'RAJAE', 'rajaerezougui123@gmail.com', '00d2c8cbc82a7bb56b05060e4c4dea11', '0622570177', NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'SALIMA', 'rajaerezougui125@gmail.com', '00d2c8cbc82a7bb56b05060e4c4dea11', '0622570176', NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'RAJAE', 'rajaerezougui13@gmail.com', '25f9e794323b453885f5181f1b624d0b', '0644337755', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `tblvehicles`
--

DROP TABLE IF EXISTS `tblvehicles`;
CREATE TABLE IF NOT EXISTS `tblvehicles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `VehiclesTitle` varchar(150) DEFAULT NULL,
  `VehiclesBrand` int(11) DEFAULT NULL,
  `VehiclesOverview` longtext,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `SeatingCapacity` int(11) DEFAULT NULL,
  `Vimage1` varchar(120) DEFAULT NULL,
  `Vimage2` varchar(120) DEFAULT NULL,
  `Vimage3` varchar(120) DEFAULT NULL,
  `Vimage4` varchar(120) DEFAULT NULL,
  `Vimage5` varchar(120) DEFAULT NULL,
  `AirConditioner` int(11) DEFAULT NULL,
  `PowerDoorLocks` int(11) DEFAULT NULL,
  `AntiLockBrakingSystem` int(11) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `PowerSteering` int(11) DEFAULT NULL,
  `DriverAirbag` int(11) DEFAULT NULL,
  `PassengerAirbag` int(11) DEFAULT NULL,
  `PowerWindows` int(11) DEFAULT NULL,
  `CDPlayer` int(11) DEFAULT NULL,
  `CentralLocking` int(11) DEFAULT NULL,
  `CrashSensor` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `tblvehicles`
--

INSERT INTO `tblvehicles` (`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `SeatingCapacity`, `Vimage1`, `Vimage2`, `Vimage3`, `Vimage4`, `Vimage5`, `AirConditioner`, `PowerDoorLocks`, `AntiLockBrakingSystem`, `BrakeAssist`, `PowerSteering`, `DriverAirbag`, `PassengerAirbag`, `PowerWindows`, `CDPlayer`, `CentralLocking`, `CrashSensor`, `LeatherSeats`, `RegDate`, `UpdationDate`) VALUES
(2, 'BMW-Serie5', 2, 'Louez une BMW S&eacute;rie 5 au Maroc . le prix commence &agrave; 1 794DH. Solide et garantit des mouvements de haute qualit&eacute;.', 1794, 'Petrol', 2018, 5, 'BMW1.jpg', 'BMW2.jpg', 'BMW3.png', 'BMW4.png', 'BMW5.jpg', 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1, 1, 1, '2022-08-03 09:01:02', '2022-08-08 12:56:47'),
(3, 'Audi Q8', 3, 'Instantanément reconnaissable, la Audi Q8 à empattement long  offre une conception et un niveau d’équipement futuriste & exceptionnels, ainsi que des caractéristiques uniques comme les feu arriérées attachés. Malgré; une longueur allongée de 200mm, sa silhouette semble très avancée par rapport aux autres modèles chez les constructeurs du même segment.\r\n\r\nLa location Audi Q8 est proposée chez le leader de la VLocation a au prix de 2100 DH par jour.', 2100, 'Petrol', 2017, 5, 'AudiQ81.jpg', 'AudiQ82.jpg', 'AudiQ83.jpg', 'AudiQ84.jpg', 'AudiQ85.jpg', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2022-08-03 09:45:21', '2022-08-08 12:57:05'),
(4, 'Nissan QASHQAI', 4, 'cette nouvelle génération de Qashqai fait l’impasse sur la version longue à 7 places.', 800, 'Petrol', 2022, 5, 'NissanQ1.jpg', 'NissanQ2.jpg', 'NissanQ3.jpg', 'NissanQ4.jpg', 'NissanQ5', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2022-08-03 10:23:00', '2022-08-08 12:57:23'),
(5, 'Nissan GT-R', 4, ' La GT-R ne fait pas dans la sobriété, notamment depuis sa refonte de l’année dernière. L’allure du bolide est accentuée par sa calandre encore plus imposante et son capot qui plonge beaucoup moins dans le pare-chocs. On retrouve de nouvelles prises d’air pour les freins, tout en carbone, alors que sa ceinture de caisse élevée et son large aileron complètent l’effet. L’arrière est aussi impressionnant avec ses larges feux ronds, on a surélevé légèrement le béquet pour plus d’appui et ajouté un diffuseur d’air en l’échappement quadruple.', 2000, 'Petrol', 2018, 5, 'NissanGTR1.jpg', 'NissanGTR2.jpg', 'NissanGTR3.jpg', 'NissanGTR4.jpg', 'NissanGTR5.jpg', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2022-08-03 10:34:17', '2022-08-08 12:57:41'),
(6, 'Nissan Ariya', 4, 'Nissan Ariya – Si la révolution électrique est en marche, certains ont su prendre une belle longueur d’avance, à l’image de Nissan qui fut leader du marché mondial durant la dernière décennie. Mais cet état de grâce est terminé, car la concurrence s’intensifie, poussant le constructeur japonais à développer une véritable gamme 100% électrique.', 400, 'Electric', 2021, 5, 'Nissanariya1.jpeg', 'Nissanariya2.jpeg', 'Nissanariya3.jpg', 'Nissanariya4.jpg', 'Nissanariya5.jpg', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2022-08-03 11:00:49', '2022-08-08 12:59:13'),
(7, 'Toyota Fortuner ', 5, 'Le Toyota Fortuner est une version fermée du Toyota Hilux vendue dans de nombreux pays à travers le monde. Il est disponible avec des moteurs 4 cylindres ou V8 carburant à l\'essence ou au Diesel', 500, 'Petrol', 2020, 5, 'ToyotaFortuner1.jpg', 'ToyotaFortuner2.jfif', 'ToyotaFortner3.jpg', 'ToyotaFortner4.jpg', 'ToyotaFortner5.jpg', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2022-08-03 11:17:46', '2022-08-08 12:58:16'),
(9, 'Dacia Logan', 8, NULL, 500, 'Petrol', 2021, 7, 'DaciaD1.jpg', 'DaciaD2.jpg', 'DaciaD3.jpg', 'DaciaD4.jpg', 'DaciaD5.jpeg', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2022-08-03 12:23:43', '2022-08-08 12:58:32');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
