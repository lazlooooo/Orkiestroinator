-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Sty 2020, 18:50
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `orkiestroinator`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `id` int(11) NOT NULL,
  `imie` varchar(15) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` varchar(20) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `login` varchar(25) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `haslo` varchar(25) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `admin` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`id`, `imie`, `nazwisko`, `login`, `haslo`, `email`, `admin`) VALUES
(1, 'Jakub', 'Lenart', 'jakub.lenart', '123', 'jaku.lenart@gmail.com', 1),
(2, 'Adrianna', 'Kurzawa', 'adrianna.kurzawa', '321', 'adrianna.kurzawa@gmail.com', 0),
(3, 'Jakub', 'Lazar', 'jakub.lazar', '12345', 'jakub.lazar@gmail.com', 1),
(4, '', '', '', '', '', 0),
(5, '', '', '', '', '', 0),
(6, '', '', '', '', '', 0),
(7, '', '', '', '', '', 0),
(8, '', '', '', '', '', 0),
(9, '', '', '', '', '', 0),
(10, '', '', '', '', '', 0),
(11, '', '', '', '', '', 0),
(12, '', '', '', '', '', 0),
(13, '', '', '', '', '', 0),
(14, '', '', '', '', '', 0),
(15, '', '', '', '', '', 0),
(16, '', '', '', '', '', 0),
(17, '', '', '', '', '', 0),
(18, '', '', '', '', '', 0),
(19, '', '', '', '', '', NULL),
(20, '', '', '', '', '', 0),
(21, '', '', '', '', '', NULL),
(22, '', '', '', '', '', 0),
(23, '', '', '', '', '', NULL),
(24, '', '', '', '', '', 0),
(25, 'asd', 'asd', 'asd', 'asd', 'asd', NULL),
(26, 'asd', 'asd', 'asd', 'asd', 'asd', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
