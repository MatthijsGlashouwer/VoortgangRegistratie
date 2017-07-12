-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 12 jul 2017 om 10:43
-- Serverversie: 10.1.21-MariaDB
-- PHP-versie: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voortgang`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblfeedback`
--

CREATE TABLE `tblfeedback` (
  `Id` int(11) NOT NULL,
  `UserProjectId` int(11) NOT NULL,
  `RoleId` int(11) NOT NULL,
  `AuthorUserId` int(11) NOT NULL,
  `Value` text NOT NULL,
  `Rating` int(11) NOT NULL,
  `DateStart` date NOT NULL,
  `DateUpdate` date NOT NULL,
  `UpdateUserId` int(11) NOT NULL,
  `DateEnd` date NOT NULL,
  `Done` tinyint(1) NOT NULL,
  `Checked` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblgroup`
--

CREATE TABLE `tblgroup` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbllearningunit`
--

CREATE TABLE `tbllearningunit` (
  `Id` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Link` varchar(150) NOT NULL,
  `NLQF` int(11) NOT NULL,
  `Cohort` int(11) NOT NULL,
  `Crebo` int(11) NOT NULL,
  `Status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblproject`
--

CREATE TABLE `tblproject` (
  `Id` int(11) NOT NULL,
  `Title` varchar(50) NOT NULL,
  `Description` text NOT NULL,
  `StatusId` int(11) NOT NULL,
  `StartDate` date NOT NULL,
  `UpdateDate` date NOT NULL,
  `UpdateUserId` int(11) NOT NULL,
  `EndDate` date NOT NULL,
  `Deadline` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblquestion`
--

CREATE TABLE `tblquestion` (
  `Id` int(11) NOT NULL,
  `LEId` int(11) NOT NULL,
  `Type` varchar(50) NOT NULL,
  `Value` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblrolefeedback`
--

CREATE TABLE `tblrolefeedback` (
  `Id` int(11) NOT NULL,
  `Role` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblroleuser`
--

CREATE TABLE `tblroleuser` (
  `Id` int(11) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblstatus`
--

CREATE TABLE `tblstatus` (
  `Id` int(11) NOT NULL,
  `Status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbluser`
--

CREATE TABLE `tbluser` (
  `Id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(100) NOT NULL,
  `StudentId` int(15) NOT NULL,
  `Crebo` int(11) NOT NULL,
  `Cohort` int(11) NOT NULL,
  `RoleUser` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tblusergroup`
--

CREATE TABLE `tblusergroup` (
  `Id` int(11) NOT NULL,
  `UserId` int(11) NOT NULL,
  `GroupId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbluserle`
--

CREATE TABLE `tbluserle` (
  `Id` int(11) NOT NULL,
  `LEId` int(11) NOT NULL,
  `UserProjectId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `tbluserproject`
--

CREATE TABLE `tbluserproject` (
  `Id` int(11) NOT NULL,
  `ProjectId` int(11) NOT NULL,
  `UserId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `Id` int(10) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `RememberToken` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `Password`, `RememberToken`, `created_at`, `updated_at`) VALUES
(1, 'matthijs', 'matthijsglashouwer@gmail.com', '$2y$10$HblzqqrTNkjnP3e1yzv1.uQ0aZ5hLuRHE4qqMBeixBTSUYO1TdTuS', 'fHrrtGrCUvWpvwYduEgYrcD9AbJcuYB7CmQDT0VKvPGnR8T7GuhqzdJmgUrt', '2017-05-02 07:28:45', '2017-05-02 07:28:45'),
(2, 'Matthijs', 'matthijsglashouwer@hotmail.com', '$2y$10$5fjNNWRj4mGjI7pye1cEQ.DtTyYbapzKq1XhSGa8ODJs4K2KtngcO', 'mlllLfdxnlabBaWAjmZdempDjl3nk4anGopIvBwGh8NJGi72uRjFlDETj3rb', '2017-05-09 05:18:34', '2017-05-09 05:18:34'),
(3, 'test', 'test@gmail.com', '$2y$10$Ujc.kwJdKXofOYl4NdyqYO2oXRuHD4F01KZvYwH1ajPHpv0mNUX9O', '55j32OCMcZijb0bBJU1WLgDd1UDuYBKwdsfiiPhp5KBMlJxPw4pkeWKUFg8u', '2017-05-09 05:26:49', '2017-05-09 05:26:49'),
(4, 'test', 'test2@testmail.com', '$2y$10$/29S7q9mJbp5dNQnCoag9.ee.HcgTq6xWEFPlLS9NXGmQwXbMUnM6', 'E2oSaBNnDXo07dJ5fSswmSgkci4bqGrtXsqmieBe1VGUbKwpIExe0amQin42', '2017-05-12 05:15:05', '2017-05-12 05:15:05');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `tblfeedback`
--
ALTER TABLE `tblfeedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `tblgroup`
--
ALTER TABLE `tblgroup`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `tbllearningunit`
--
ALTER TABLE `tbllearningunit`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `tblproject`
--
ALTER TABLE `tblproject`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `tblquestion`
--
ALTER TABLE `tblquestion`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `tblrolefeedback`
--
ALTER TABLE `tblrolefeedback`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `tblroleuser`
--
ALTER TABLE `tblroleuser`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `tblstatus`
--
ALTER TABLE `tblstatus`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `tbluser`
--
ALTER TABLE `tbluser`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `tblusergroup`
--
ALTER TABLE `tblusergroup`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `tbluserle`
--
ALTER TABLE `tbluserle`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `tbluserproject`
--
ALTER TABLE `tbluserproject`
  ADD PRIMARY KEY (`Id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tblfeedback`
--
ALTER TABLE `tblfeedback`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tblgroup`
--
ALTER TABLE `tblgroup`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbllearningunit`
--
ALTER TABLE `tbllearningunit`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tblproject`
--
ALTER TABLE `tblproject`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tblquestion`
--
ALTER TABLE `tblquestion`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tblrolefeedback`
--
ALTER TABLE `tblrolefeedback`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tblroleuser`
--
ALTER TABLE `tblroleuser`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tblstatus`
--
ALTER TABLE `tblstatus`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbluser`
--
ALTER TABLE `tbluser`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT voor een tabel `tblusergroup`
--
ALTER TABLE `tblusergroup`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbluserle`
--
ALTER TABLE `tbluserle`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `tbluserproject`
--
ALTER TABLE `tbluserproject`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT voor een tabel `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
