-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2020 at 04:14 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instytut`
--

-- --------------------------------------------------------

--
-- Table structure for table `etaty`
--

CREATE TABLE `etaty` (
  `Nazwa` varchar(10) COLLATE utf8_polish_ci NOT NULL,
  `PLACA_OD` decimal(6,2) DEFAULT NULL,
  `PLACA_DO` decimal(6,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `etaty`
--

INSERT INTO `etaty` (`Nazwa`, `PLACA_OD`, `PLACA_DO`) VALUES
('ADIUNKT', '2510.00', '3000.00'),
('ASYSTENT', '1500.00', '2100.00'),
('DOKTORANT', '800.00', '1000.00'),
('DYREKTOR', '4280.00', '5100.00'),
('PROFESOR', '3000.00', '4000.00'),
('SEKRETARKA', '1470.00', '1650.00');

-- --------------------------------------------------------

--
-- Table structure for table `pracownicy`
--

CREATE TABLE `pracownicy` (
  `ID_PRAC` smallint(6) NOT NULL,
  `NAZWISKO` varchar(30) COLLATE utf8_polish_ci NOT NULL,
  `IMIE` varchar(15) COLLATE utf8_polish_ci DEFAULT NULL,
  `ETAT` varchar(10) COLLATE utf8_polish_ci DEFAULT NULL,
  `ID_SZEFA` smallint(6) DEFAULT NULL,
  `ZATRUDNIONY` date DEFAULT NULL,
  `PLACA_POD` decimal(6,2) DEFAULT NULL,
  `PLACA_DOD` decimal(6,2) DEFAULT NULL,
  `ID_ZESP` smallint(6) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `pracownicy`
--

INSERT INTO `pracownicy` (`ID_PRAC`, `NAZWISKO`, `IMIE`, `ETAT`, `ID_SZEFA`, `ZATRUDNIONY`, `PLACA_POD`, `PLACA_DOD`, `ID_ZESP`) VALUES
(100, 'Marecki', 'Jan', 'DYREKTOR', NULL, '1968-01-01', '4730.00', '980.50', 10),
(110, 'Janicki', 'Karol', 'PROFESOR', 100, '1973-05-01', '3350.00', '610.00', 40),
(120, 'Nowicki', 'Pawel', 'PROFESOR', 100, '1977-09-01', '3070.00', NULL, 30),
(130, 'Nowak', 'Piotr', 'PROFESOR', 100, '1968-07-01', '3960.00', NULL, 20),
(140, 'Kowalski', 'Adam', 'PROFESOR', 130, '1975-09-15', '3230.00', '805.00', 20),
(150, 'Grzybowska', 'Maria', 'ADIUNKT', 130, '1977-09-01', '2845.50', NULL, 20),
(160, 'Krakowska', 'Anna', 'SEKRETARKA', 130, '1985-03-01', '1590.00', NULL, 20),
(170, 'Opolski', 'Roman', 'ASYSTENT', 130, '1992-10-01', '1839.70', '480.50', 20),
(190, 'Kotarski', 'Konrad', 'ASYSTENT', 140, '1993-09-01', '1971.00', NULL, 20),
(180, 'Makowski', 'Marek', 'ADIUNKT', 100, '1985-02-20', '2610.20', NULL, 10),
(200, 'Przywarek', 'Leon', 'DOKTORANT', 140, '1994-07-15', '900.00', NULL, 30),
(210, 'Kotlarczyk', 'Jan', 'DOKTORANT', 130, '1993-10-15', '900.00', '570.60', 30),
(220, 'Siekierski', 'Jacek', 'ASYSTENT', 110, '1993-10-01', '1889.00', NULL, 20),
(230, 'Dolny', 'Tomasz', 'ASYSTENT', 120, '1992-09-01', '1850.00', '390.00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `zespoly`
--

CREATE TABLE `zespoly` (
  `ID_ZESP` smallint(6) NOT NULL,
  `Nazwa` varchar(20) COLLATE utf8_polish_ci DEFAULT NULL,
  `Adres` varchar(50) COLLATE utf8_polish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Dumping data for table `zespoly`
--

INSERT INTO `zespoly` (`ID_ZESP`, `Nazwa`, `Adres`) VALUES
(10, 'ADMINISTRACJA', 'PIOTROWO 2'),
(20, 'SYSTEMY ROZPROSZONE', 'PIOTROWO 3A'),
(30, 'SYSTEMY EKSPERCKIE', 'STRZELECKA 14'),
(40, 'ALGORYTMY', 'WIENIAWSKIEGO 16'),
(50, 'BADANIA OPERACYJNE', 'MIELZYNSKIEGO 30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etaty`
--
ALTER TABLE `etaty`
  ADD PRIMARY KEY (`Nazwa`);

--
-- Indexes for table `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`ID_PRAC`),
  ADD KEY `ID_SZEFA` (`ID_SZEFA`),
  ADD KEY `ID_ZESP` (`ID_ZESP`);

--
-- Indexes for table `zespoly`
--
ALTER TABLE `zespoly`
  ADD PRIMARY KEY (`ID_ZESP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
