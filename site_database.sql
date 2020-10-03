-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Gép: 127.0.0.1
-- Létrehozás ideje: 2020. Okt 03. 13:36
-- Kiszolgáló verziója: 10.4.14-MariaDB
-- PHP verzió: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Adatbázis: `site_database`
--
CREATE DATABASE IF NOT EXISTS `site_database` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `site_database`;

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `lists`
--

CREATE TABLE `lists` (
  `ID` int(10) NOT NULL,
  `userID` int(10) NOT NULL,
  `left_list` varchar(255) NOT NULL,
  `right_list` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `lists`
--

INSERT INTO `lists` (`ID`, `userID`, `left_list`, `right_list`) VALUES
(1, 1, 'DOG,LION,COW,FROG,SHEEP,CAT', 'POUND,MILK,FISH,FOOT,HEART,SUPER');

-- --------------------------------------------------------

--
-- Tábla szerkezet ehhez a táblához `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- A tábla adatainak kiíratása `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `email`) VALUES
(1, 'admin', '$2y$10$0f5jlwZbg9VW.IsiPtum8uHOpUKwLQgOYTHxmboKyCpdsT.z9bkhK', 'admin@admin.com');

--
-- Indexek a kiírt táblákhoz
--

--
-- A tábla indexei `lists`
--
ALTER TABLE `lists`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `userID` (`userID`);

--
-- A tábla indexei `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- A kiírt táblák AUTO_INCREMENT értéke
--

--
-- AUTO_INCREMENT a táblához `lists`
--
ALTER TABLE `lists`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT a táblához `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;
