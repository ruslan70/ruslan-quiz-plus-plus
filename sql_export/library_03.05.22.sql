-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Erstellungszeit: 03. Mai 2022 um 09:48
-- Server-Version: 8.0.28
-- PHP-Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `library`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Answers`
--

CREATE TABLE `Answers` (
  `ID` int NOT NULL,
  `Text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsCorrectAnswer` int NOT NULL,
  `QuestionId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `Answers`
--

INSERT INTO `Answers` (`ID`, `Text`, `IsCorrectAnswer`, `QuestionId`) VALUES
(20, 'Kamel', 1, 1),
(21, 'Elefant\r\n', 0, 1),
(22, 'Pferd', 0, 1),
(23, 'Nordpol', 0, 2),
(24, 'Südpol', 1, 2),
(25, 'Wal', 1, 3),
(26, 'Krokodil', 0, 3),
(27, 'Hund', 1, 3),
(28, 'Hase', 1, 3),
(29, 'Osterhase', 1, 3);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Books`
--

CREATE TABLE `Books` (
  `ID` int NOT NULL,
  `Title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Author` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Year` int NOT NULL,
  `Category` enum('HTML','CSS','JAVASCRIPT','PHP','MySQL') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `Books`
--

INSERT INTO `Books` (`ID`, `Title`, `Author`, `Year`, `Category`) VALUES
(1, 'Ikigai', 'Héctor García,\r\nFrancesc Miralles', 2017, 'HTML'),
(2, 'The Best Book Ever Written', 'Matthew Shallvey', 2022, 'CSS'),
(3, 'THE BOOK', 'Mata Hari\r\n\r\n\r\n ', 2005, 'MySQL'),
(4, 'THE COMFORT BOOK', 'Matt Haig\r\n\r\n\r\n ', 2021, 'JAVASCRIPT'),
(5, 'Afterlives', 'Abdulrazak Gurnah\r\n\r\n\r\n ', 2021, 'CSS'),
(6, 'The Book of Tehran', 'Atoosa Afshin-Navid\r\n\r\n\r\n ', 2022, 'MySQL'),
(7, '1984', 'George Orwell \r\n\r\n\r\n ', 1949, 'JAVASCRIPT'),
(8, 'Test2', 'Test2', 2022, 'HTML'),
(9, 'Space', 'Alien', 2022, 'MySQL'),
(10, 'Kosmos', 'Aussererdische', 2022, 'PHP');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Questions`
--

CREATE TABLE `Questions` (
  `ID` int NOT NULL,
  `Text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `Questions`
--

INSERT INTO `Questions` (`ID`, `Text`, `Image`, `Type`) VALUES
(1, 'Welches Tier hat zwei Höcker?', 'animal.jpg', 'SINGLE'),
(2, 'Wo leben Eisbären?', 'animal2.jpg', 'SINGLE'),
(3, 'Was ist ein Säugetier?', 'animal3.jpg', 'MULTIPLE');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `QuizAnswers`
--

CREATE TABLE `QuizAnswers` (
  `ID` int NOT NULL,
  `Text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `IsCorrectAnswer` int NOT NULL,
  `QuestionId` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `QuizAnswers`
--

INSERT INTO `QuizAnswers` (`ID`, `Text`, `IsCorrectAnswer`, `QuestionId`) VALUES
(1, 'Rot', 1, 1),
(2, 'Blau', 0, 1),
(3, 'Weiss', 1, 1),
(4, 'Grün', 0, 1),
(5, 'häuseln', 0, 2),
(6, 'zügeln', 1, 2),
(7, 'schleppeln', 0, 2),
(8, 'kisteln', 0, 2),
(9, 'Salut!', 0, 3),
(10, 'Grüss Gott!', 0, 3),
(11, 'Grüezi!', 1, 3),
(12, 'Alo!', 0, 3),
(13, 'Das Werkstättli', 0, 4),
(14, 'Die Garage', 1, 4),
(15, 'Die Cars', 0, 4),
(16, 'Das Atelier', 0, 4),
(17, 'angestellt', 0, 5),
(18, 'immatrikuliert', 1, 5),
(19, 'geparkt', 0, 5),
(20, 'geöffnet', 0, 5),
(21, 'posten', 1, 6),
(22, 'lädeln', 0, 6),
(23, 'sackerln', 0, 6),
(24, 'kursieren', 0, 6),
(25, 'Bici', 0, 7),
(26, 'Zweirad', 0, 7),
(27, 'Velo', 1, 7),
(28, 'Reine', 0, 7),
(29, 'eine Suppe', 0, 8),
(30, 'ein Brötchen', 1, 8),
(31, 'ein Müsliriegel', 0, 8),
(32, 'eine Brezel', 0, 8),
(33, 'Anke', 1, 9),
(34, 'Fetti', 0, 9),
(35, 'Glace', 0, 9),
(36, 'Frauke', 0, 9),
(37, 'Fleck', 0, 10),
(38, 'Rad', 0, 10),
(39, 'Quarkbällchen', 0, 10),
(40, 'Knoten', 1, 10),
(41, 'Nudeln', 0, 11),
(42, 'Knödel', 0, 11),
(43, 'Pellkartoffeln', 0, 11),
(44, 'Spätzle', 1, 11),
(45, 'Wann kann ich Ihnen ein Telefon geben?', 1, 12),
(46, 'Wann kann ich Sie phonieren?', 0, 12),
(47, 'Wann kann ich Sie telerufen?', 0, 12),
(48, 'Wann kann ich sie schnüren?', 0, 12),
(49, 'Hausschuhe', 1, 13),
(50, 'Kopfhörer', 0, 13),
(51, 'Handschuhe', 0, 13),
(52, 'Kontaktlinsen', 0, 13),
(53, 'Hör mir zu!', 1, 14),
(54, 'Schau dir das an!', 0, 14),
(55, 'Geh jetzt bitte!', 0, 14),
(56, 'Steh auf!', 0, 14),
(57, 'Arri!', 0, 15),
(58, 'Grüeza!', 0, 15),
(59, 'Ade!', 1, 15),
(60, 'Salut!', 0, 15);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `QuizQuestions`
--

CREATE TABLE `QuizQuestions` (
  `ID` int NOT NULL,
  `Text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `Image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ImageBlob` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `Type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `QuizQuestions`
--

INSERT INTO `QuizQuestions` (`ID`, `Text`, `Image`, `ImageBlob`, `Type`) VALUES
(1, 'Welche Farbe hat die Schweizer Flage?\"\r\n', 'question01.jpg', 'image01', 'MultiChoice'),
(2, 'So, Papierkram ist geschafft. Endlich kannst du umziehen! Aber Moment... was heisst \"umziehen\" eigentlich auf Schweizerdeutsch?\"\r\n', 'question02.jpg', 'image02', 'SINGLE'),
(3, 'Das erste Zusammentreffen mit den neuen Nachbarn steht an, da möchte man sich natürlich bloss nicht blamieren! Wie begrüsst du Familie Moser also?\"\r\n', 'question03.jpg', '', 'SINGLE'),
(4, 'Vor dem Treffen mit den Mosers willst du noch einige Einkäufe erledigen. Doch der Reifen deines Autos ist platt! Wen rufst du an?\"\r\n', 'question04.jpg', '', 'SINGLE'),
(5, 'Autos müssen in der Schweiz natürlich auch zugelassen sein. Welchen Status hat ein zugelassenes Auto in der Schweiz?\"\r\n', 'question05.jpg', '', 'SINGLE'),
(6, 'Schweizer sagen übrigens auch gar nicht \"einkaufen gehen\", sondern?\"\n', 'question06.jpg', '', 'SINGLE'),
(7, 'Das mit deinem Auto ist echt blöd gelaufen. Dann musst du eben auf das Fahrrad ausweichen! Wie nennt man das Fahrrad denn auf Schweizerdeutsch?\r\n', 'question07.jpg', '', 'SINGLE'),
(8, 'Nach dem Umtrunk mit deinen Nachbarn überkommt dich der Hunger – ein Glück: Hast du noch ein Mutschli Zuhause! Doch was ist das überhaupt?\r\n', 'question08.jpg', '', 'SINGLE'),
(9, 'Auf dein Brötchen schmierst du ein bisschen Butter. Was sagen die Schweizer dazu?\r\n', 'question09.jpg', '', 'SINGLE'),
(10, 'Am nächsten Tag fällt dir auf dem Weg zur Arbeit auf, dass dir ein Knopf an der Jacke fehlt. Welche Bedeutung hat Knopf im Schweizerdeutschen ausserdem?\r\n', 'question010.jpg', '', 'SINGLE'),
(11, 'Aber Obacht! \"Knöpfli\" sind keine kleinen Knöpfe oder gar keine kleinen Knoten - sondern?\r\n', 'question11.jpg', '', 'SINGLE'),
(12, 'Du bekommst eine E-Mail von deiner neuen Chefin, die fragt, wann sie dich anrufen kann - denn sie ist gerade auf Dienstreise. Was fragt sie im Wortlaut?\r\n', 'question12.jpg', '', 'SINGLE'),
(13, 'Nach Feierabend besuchst du deinen Freund Herrmann, der nach einiger Zeit schimpft: \"Wo sind denn schon wieder meine Finken?\" - Was wird gesucht?\r\n', 'question13.jpg', '', 'SINGLE'),
(14, 'Während des Gesprächs sagt dein Freund: \"Los emau!\" Wozu fordert Herrmann dich damit auf?\r\n', 'question14.jpg', '', 'SINGLE'),
(15, 'Zum Schluss verabschiedest du dich noch von Herrmann. Was sagst du?\r\n', 'question15.jpg', '', 'SINGLE');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `Answers`
--
ALTER TABLE `Answers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `QuestionId` (`QuestionId`);

--
-- Indizes für die Tabelle `Books`
--
ALTER TABLE `Books`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `Questions`
--
ALTER TABLE `Questions`
  ADD PRIMARY KEY (`ID`);

--
-- Indizes für die Tabelle `QuizAnswers`
--
ALTER TABLE `QuizAnswers`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `QuestionId` (`QuestionId`);

--
-- Indizes für die Tabelle `QuizQuestions`
--
ALTER TABLE `QuizQuestions`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `Answers`
--
ALTER TABLE `Answers`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT für Tabelle `Books`
--
ALTER TABLE `Books`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT für Tabelle `Questions`
--
ALTER TABLE `Questions`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT für Tabelle `QuizAnswers`
--
ALTER TABLE `QuizAnswers`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT für Tabelle `QuizQuestions`
--
ALTER TABLE `QuizQuestions`
  MODIFY `ID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints der exportierten Tabellen
--

--
-- Constraints der Tabelle `Answers`
--
ALTER TABLE `Answers`
  ADD CONSTRAINT `Answers_ibfk_1` FOREIGN KEY (`QuestionId`) REFERENCES `Questions` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints der Tabelle `QuizAnswers`
--
ALTER TABLE `QuizAnswers`
  ADD CONSTRAINT `QuizAnswers_ibfk_1` FOREIGN KEY (`QuestionId`) REFERENCES `QuizQuestions` (`ID`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
