-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 19 jan 2022 om 23:54
-- Serverversie: 10.4.21-MariaDB
-- PHP-versie: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `netland`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `users`
--

CREATE TABLE `users` (
  `id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`) VALUES
('a', 'harmon', '$2y$10$CWPppChjNodStq2I0w9i1.tSW/3GSXzxF.6481Fze07Qv2lSPEhV.', 'yes@yahoo.com'),
('f is for family', 'Manboy Slim', '$2y$10$FQ742KY04dnbq9mXaffTceJTpKanTcS3aqyP8XDlKMxjAtPmjXRfu', 'aztech@gmail.com'),
('kaaris', 'french rap', '$2y$10$/.Aw7WDxPymatSy4jJyB.OgJTnTMONS0FdWftkSGBmKNXW8v/P82e', 'hi@yahoo.com'),
('f is for family', 'hello me', '$2y$10$5sgK2UybNZKnJfdVAgCPPufnyuyfb.zWQMpDTdnMcjmbL8cm946YC', 'FU@gmail.com'),
('f is for family', 'hello me', '$2y$10$/VusE4k7xwhKvqMmuEWkXeBUv3sYEw3O7gVt0Gkp0qa62IQk/uURG', 'FU@gmail.com'),
('f is for family', 'Drake', '$2y$10$zfRgw0ca6tMK80oxSOw45.MXd54fliRTLbgaMJMaqnpLXy4TvVlCG', 'FU@gmail.com'),
('f is for family', 'Drake Josh', '$2y$10$gKDTrJWF.4k.25If.FYdneCPz0G7ycN6u1zd6mf3pxE8BqKseG.IO', 'FU@gmail.com'),
('f is for family', 'Drake Josh', '$2y$10$O2QkfL4EeBS1jL6WdCUDPeAoUUysqT30oaPaA.ozzq5VCqnAXyi0.', 'FU@gmail.com'),
('f is for family', 'Drake Josh', '$2y$10$DPide4QN4IHZ2fhlFVnMOeuiQ6CrBEQ0ME6HAVUoWCSQEycv43TnW', 'FU@gmail.com'),
('Know Name', 'Skippin\' Out On Skag', '$2y$10$92NC2BQzUeLNaWunkE612us4BZP7rowIdEUxCppTMrazg1A722yMO', 'dragonhunter@hotmeal.com'),
('RedFountain', 'douchebag', '$2y$10$XoCyfmw0If2W2LI5.Vi9/e9SFZeOtLDsRUDqW5BF1YjgGcUd25mNe', 'boxmailShite@email.com'),
('Jack 5', 'Drake Josh', '$2y$10$kkg42.IkjKxQWZep5rOiZOIbmK4BM3xgH.Xs7GOtZzCxxGaTcFJYe', 'dragonhunter@hotmeal.com'),
('Macedonian King', 'Alexander The Great', '$2y$10$9DTQKNBrQI509ftRM6iol.z3/GTGkFuMoFAZzg8wU3T/t/LNHRAlS', 'freebactria@macedon.com');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
