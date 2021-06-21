-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 24 Maj 2020, 23:04
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `bilety`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `bilety`
--

CREATE TABLE `bilety` (
  `id` int(11) NOT NULL,
  `nazwa` text NOT NULL,
  `cena` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `bilety`
--

INSERT INTO `bilety` (`id`, `nazwa`, `cena`) VALUES
(0, 'Ulgowy', '50'),
(1, 'Normalny', '100'),
(2, 'Ulgowy', '50');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `formularz`
--

CREATE TABLE `formularz` (
  `ID` int(11) NOT NULL,
  `imie` text NOT NULL,
  `naziwsko` text NOT NULL,
  `email` text NOT NULL,
  `powod` text NOT NULL,
  `uwagi` text NOT NULL,
  `ID_klienta` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `formularz`
--

INSERT INTO `formularz` (`ID`, `imie`, `naziwsko`, `email`, `powod`, `uwagi`, `ID_klienta`) VALUES
(64, 'Lukasz', 'Wiśniewski', 'lukasz.wisniewski48@wp.pl', 'powod2', 'ajskdhfkjashdf', '0');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `kupno`
--

CREATE TABLE `kupno` (
  `id` int(11) NOT NULL,
  `użytkownicy_id` int(11) NOT NULL,
  `bilety_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `kupno`
--

INSERT INTO `kupno` (`id`, `użytkownicy_id`, `bilety_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `użytkownicy`
--

CREATE TABLE `użytkownicy` (
  `ID` int(11) NOT NULL,
  `Login` text NOT NULL,
  `Haslo` text NOT NULL,
  `Email` text NOT NULL,
  `test` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `użytkownicy`
--

INSERT INTO `użytkownicy` (`ID`, `Login`, `Haslo`, `Email`, `test`) VALUES
(1, 'Login', 'Haslo', 'Email.com', '100'),
(2, 'Login3', 'Haslo', 'Email3', '10');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `bilety`
--
ALTER TABLE `bilety`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `formularz`
--
ALTER TABLE `formularz`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `kupno`
--
ALTER TABLE `kupno`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kupno__idx` (`bilety_id`),
  ADD UNIQUE KEY `kupno__idxv1` (`użytkownicy_id`);

--
-- Indeksy dla tabeli `użytkownicy`
--
ALTER TABLE `użytkownicy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `formularz`
--
ALTER TABLE `formularz`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `kupno`
--
ALTER TABLE `kupno`
  ADD CONSTRAINT `kupno_bilety_fk` FOREIGN KEY (`bilety_id`) REFERENCES `bilety` (`id`),
  ADD CONSTRAINT `kupno_użytkownicy_fk` FOREIGN KEY (`użytkownicy_id`) REFERENCES `użytkownicy` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
