-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 20 jan 2022 om 19:38
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
-- Tabelstructuur voor tabel `cars`
--

CREATE TABLE `cars` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `year_of_production` year(4) DEFAULT NULL,
  `model` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `price_per_day` decimal(11,0) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `cars`
--

INSERT INTO `cars` (`id`, `brand`, `year_of_production`, `model`, `amount`, `price_per_day`, `image`) VALUES
(1, 'BMW', 2022, 'X3 ( G01 ) xDrive30d', 100, '2570', 'https://media.autoweek.nl/m/f0cy19bbclrm.jpg'),
(2, 'Ferrari', 2021, 'F8 spider by Novitec N-Largo', 100, '3230', 'https://media.autoweek.nl/m/tityc1nbugqh_800.jpg'),
(3, 'Audi', 2022, 'R8 coupé V10 performance RWD', 100, '2730', 'https://media.autoweek.nl/m/8w5yz81boizq_800.jpg'),
(4, 'Jeep', 2021, 'Compass 80th Anniversary', 100, '2765', 'https://media2.autokopen.nl/afbeeldingen/jeep-compass-80th-anniversary-2021-304896-1920.jpg'),
(5, 'Toyota', 2022, 'Tundra 1794 Edition', 25, '2365', 'https://cdn.motor1.com/images/mgl/JYymE/s1/2019-toyota-tundra-1794-edition-review.jpg'),
(6, 'Porsche', 2022, '718 Cayman GT4 RS', 6, '3165', 'https://media.autoweek.nl/m/xy3y47rb1ye9_800.jpg'),
(7, 'Alfa Romeo', 2020, '4c spider', 24, '2985', 'https://www.autoscout24.nl/assets/auto/images/model/alfa-romeo/alfa-romeo-4c/alfa-romeo-4c-l-01.jpg');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `employees`
--

CREATE TABLE `employees` (
  `id` varchar(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `employees`
--

INSERT INTO `employees` (`id`, `name`, `password`, `email`) VALUES
('f is for family', 'douchebag', '$2y$10$llHak8GvyIe3ySwxN9zijuj4ExT9txCzThJvLifzIyIfFcby1F79q', 'g@t.com'),
('Kater', 'drunk AF', '$2y$10$sOfJQjon/FJLViYJSW50sOo.Mhkv4NQeFU7Ls77BYeArcrooT6N8K', 'mail@hotmeal.com');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `movies`
--

CREATE TABLE `movies` (
  `id` mediumint(9) NOT NULL,
  `title` varchar(100) NOT NULL,
  `length_in_minutes` int(11) NOT NULL,
  `released_at` date DEFAULT NULL,
  `country_of_origin` varchar(2) DEFAULT NULL,
  `summary` text NOT NULL,
  `youtube_trailer_id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `movies`
--

INSERT INTO `movies` (`id`, `title`, `length_in_minutes`, `released_at`, `country_of_origin`, `summary`, `youtube_trailer_id`) VALUES
(1, 'Black Panther', 134, '2018-02-14', 'VS', 'Duizenden jaren geleden stortte er in Afrika een meteoriet neer op aarde, vol met het metaal vibranium. Vijf stammen trokken ten strijde om dit als hun bezit te claimen. Tijdens de oorlog nam één krijger een paars, hartvormig kruid in dat was aangetast door het vibranium. Dit maakte hem de eerste Black Panther. Hij verenigde vier van vijf stammen en vormde het land Wakanda. Alleen de Jabari-stam bleef autonoom. In de eeuwen die volgden, gebruikten de Wakandanen het vibranium om een technologisch extreem gevorderde beschaving op te bouwen, zich intussen voordoend als een derdewereldland om hun geïsoleerde positie in de wereld te behouden.', 'xjDjIWPwcPU'),
(2, 'John Wick', 110, '2014-11-20', 'VS', 'John Wick is een legende in het misdaadcircuit als voormalige huurmoordenaar voor de Russische maffia. Hij trok zich terug uit deze wereld om te trouwen met zijn geliefde Helen. Wanneer zij vijf jaar later overlijdt aan kanker, krijgt hij in haar opdracht een puppy met de naam Daisy thuisbezorgd. Bij het cadeau zit een brief van Helen waarin ze hem vertelt dat ze hem het hondje geeft omdat ze wil dat hij iets heeft om van te houden. Wick weet niet meteen wat hij met Daisy aan moet, maar het beestje is zo speels, af- en aanhankelijk dat hij van haar gaat houden.', '2AUmvWm5ZDQ'),
(3, 'Frozen', 102, '2013-12-11', 'VS', 'Er zijn twee prinsessen in het koninkrijk Arendelle: Elsa (Idina Menzel), de troonopvolgster, en haar jongere zus Anna (Kristen Bell). Elsa heeft magische krachten, waarmee ze sneeuw en ijs kan creëren. Als kleine meisjes spelen ze samen met Elsa\'s krachten. Het spel loopt uit de hand, wanneer Elsa per ongeluk Anna\'s hoofd raakt. Anna raakt hierdoor bewusteloos. Elsa roept haar ouders en die weten hoe ze het leven van Anna kunnen redden. Ze brengen een bezoek aan de trollen die Anna kunnen helpen. Ze wissen haar geheugen gedeeltelijk waardoor ze niet meer weet dat Elsa magische krachten heeft. De trol vraagt de koning en koningin om de krachten van Elsa te verbergen voor de buitenwereld en ook voor haar zusje. Hierdoor leven ze voortaan allebei een apart bestaan in hetzelfde gesloten kasteel.', '5ddmISZWTAA'),
(4, 'Moana', 103, '2016-11-30', 'VS', 'De tiener Vaiana, dochter van een opperhoofd gaat op zoek naar de halfgod Maui. Samen met Maui vertrekt ze op een avontuurlijke reis over de oceaan op zoek naar het legendarisch eiland Te Fiti om haar volk van de ondergang te redden.', 'FpNcGOB_qVQ'),
(5, 'Sint', 85, '2010-11-11', 'NL', 'In de 15e eeuw leefde St. Niklas, een in ongenade gevallen bisschop die met een bende rovers plunderend en moordend door de straten trok. Wanneer hij eraan kwam, riepen de dorpsmensen hun families naar binnen en barricadeerden ze hun huizen. De knechten van Niklas trapten de gesloten deuren niettemin in en klommen ook via de schoorstenen naar binnen. Nadat Niklas op 5 december 1492 weer nietsontziend had toegeslagen, sloegen de dorpelingen terug. Zodra Niklas en zijn trawanten zich in hun boot bevonden, stak de woedende menigte die in brand. De bisschop en zijn handlangers kwamen om in de vlammen.', 'Xv3G70mm18k');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `receipt`
--

CREATE TABLE `receipt` (
  `id` int(11) NOT NULL,
  `customer_id` varchar(50) NOT NULL,
  `cars_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `series`
--

CREATE TABLE `series` (
  `id` mediumint(9) NOT NULL,
  `title` varchar(100) NOT NULL,
  `rating` decimal(2,1) DEFAULT NULL,
  `summary` text NOT NULL,
  `has_won_awards` int(11) NOT NULL,
  `seasons` int(11) NOT NULL,
  `country` enum('NL','UK') NOT NULL,
  `spoken_in_language` enum('NL','EN') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `series`
--

INSERT INTO `series` (`id`, `title`, `rating`, `summary`, `has_won_awards`, `seasons`, `country`, `spoken_in_language`) VALUES
(1, 'The good place', '4.5', 'De serie gaat over een vrouw, Eleanor Shellstrop, die zich in het hiernamaals bevindt. Ze wordt verwelkomd door Michael, de \'architect\' van het utopische dorpje waar ze voor eeuwig gaat wonen. Er zijn twee delen in het hiernamaals, The Good Place (\'goede plek\') en The Bad Place (\'slechte plek\'); welke wordt bepaald door ethische punten voor elke handeling op aarde.', 0, 4, 'UK', 'EN'),
(2, 'Game of Thrones', '5.0', 'Op het continent Westeros regeert koning Robert Baratheon al meer dan zeventien jaar lang over de Zeven Koninkrijken, na zijn opstand tegen koning Aerys II Targaryen \"De Krankzinnige\". Als zijn adviseur Jon Arryn wordt vermoord, vraagt hij zijn oude vriend Eddard Stark, de Heer van Winterfell en Landvoogd van het Noorden, om zijn plaats in te nemen. Eddard gaat met tegenzin akkoord, en trekt met zijn twee dochters, Sansa en Arya (Maisie Williams), naar de hoofdstad in het zuiden. Vlak voor hun vertrek wordt een van zijn jongste zonen, Bran Stark, uit een van de torens van Winterfell geduwd, na getuige te zijn geweest van de incestueuze affaire tussen koningin Cersei en haar tweelingbroer, Jaime Lannister.', 1, 7, 'UK', 'EN'),
(3, 'Breaking Bad', '2.0', 'Walter White is in 2008 een overgekwalificeerde scheikundeleraar op een middelbare school in Albuquerque. Op het moment dat zijn vrouw onverwacht zwanger is van hun tweede kind, stort Walters wereld in. De dokter heeft vastgesteld dat hij terminaal ziek is. Walter heeft longkanker en lijkt niet lang meer te zullen leven. Om ervoor te zorgen dat zijn gezin na zijn dood niet in een financiële crisis belandt en tevens om zijn eigen behandelingen te betalen, besluit Walter over te schakelen op een leven als misdadiger. Met de hulp van Jesse Pinkman, een uitgevallen leerling die hij nog scheikunde gegeven heeft, maakt en verkoopt hij de drug crystal meth. Terwijl hij doorgaat met lesgeven, komt het belang van scheikunde in de moderne maatschappij prangend in zijn lessen naar voren. Zijn product is meer dan 99% zuiver en dit feit loopt als een rode draad door de hele serie heen.', 1, 3, 'UK', 'EN'),
(4, 'Penoza', '3.2', 'Hoofdrolspeelster Carmen van Walraven (Monic Hendrickx) ontdekt dat haar man Frans (Thomas Acda) een veel belangrijker rol in de onderwereld speelt dan ze dacht. Ze dwingt hem dan ook ermee te stoppen. Net wanneer alles weer goed lijkt te gaan, wordt haar man voor de ogen van hun jongste zoon Boris (Stijn Taverne) geliquideerd. Carmen krijgt last van schuldeisers en bedreigingen. Ook justitie zit achter haar aan omdat die wil dat zij gaat getuigen tegen de compagnons van haar man.Carmen wil niet als beschermd getuige door het leven gaan en kiest voor een moeilijk alternatief: ze werkt zich naar de top van de georganiseerde misdaad, waar niemand nog aan haar of haar gezin durft te komen. In het vervolg daarop weet ze al snel niet meer wie ze moet vertrouwen, en worden de grenzen tussen goed en kwaad steeds onduidelijker.', 0, 3, 'NL', 'NL'),
(5, 'De luizenmoeder', '4.8', 'Het verhaal speelt zich af op de fictieve basisschool De Klimop in Dokkum. De school heeft een zwaar jaar achter de rug, waarin enkele leraren en de conciërge ontslagen zijn. Het is nu aan de schoolleiding om in het nieuwe schooljaar een frisse start te maken. Centraal staan Hannah (Jennifer Hoffman), de moeder van Floor, de \'luizenmoeder\', en juf Ank (Ilse Warringa), de kordate onderwijzeres. Als moeder van een nieuwe leerling moet Hannah zich staande houden in een absurdistische wereld van hangouders, moedermaffia, schoolpleinregels, rigide verjaardagsprotocollen, verantwoorde traktaties, parkeerbeleid, appgroepjes, ouderparticipatie en ander leed. Ook worden de belevenissen van de andere ouders en de schoolleiding gevolgd. De ouders (moeders) worden geacht het onderwijs te ondersteunen als vrijwilligers en de onderste tree in de bijbehorende hiërarchie die tot de ouderraad loopt is die van luizenmoeder, de moeder die schoolkinderen met een luizenkam controleert op luizen in het haar en deze verwijdert.', 1, 2, 'NL', 'NL'),
(6, 'My little pony', '1.0', 'De serie begint met een eenhoorn genaamd Twilight Sparkle, een student van Equestria\'s heerser, prinses Celestia. Nadat ze ziet hoe haar student zich alleen maar bezighoudt met boeken, stuurt prinses Celestia haar naar Ponyville met de opdracht een paar vrienden te maken. Twilight Sparkle, samen met haar assistent, een babydraak genaamd Spike, raakt bevriend met de pony\'s Pinkie Pie, Applejack, Rainbow Dash, Rarity en Fluttershy. Samen beleven ze avonturen binnen en buiten de stad en lossen ze diverse problemen op. De meeste afleveringen eindigen met Twilight Sparkle of iemand anders die een brief schrijft aan de prinses over wat ze die aflevering geleerd heeft over de magie van de vriendschap. Ook zit er in iedere aflevering een belangrijke les over vriendschap.', 0, 25, 'UK', 'NL');

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
('ass', 'ass', '$2y$10$.wKTa/vv.1tKpkVe87Fee.hh3/FJOTX4FZ6ZxDNAFaoFi6XIGpg5i', 'email@email.com'),
('Customer and shit', 'ass', '$2y$10$vxHCqZZNG2ib9c6hRCr/bONHNTOVh7roLm4vmc6eGVu5.ByQGP2nC', 'mail@hotmeal.com'),
('f is for family', 'Drake Josh', '$2y$10$XvpIrFw3yS5UDTAqW.bpwO8biAmbhchRz62Ja/gnz3HwBgUvcHEFO', 'dragonhunter@hotmeal.com'),
('Jack 5', 'Alexander The Great', '$2y$10$4WzJ/rWX/fdtIcbchkgEe.3yss5x0n6TE4qAUhCCg1i2M93dwQ.qq', 'email@email.com');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `receipt`
--
ALTER TABLE `receipt`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `cars_id` (`cars_id`);

--
-- Indexen voor tabel `series`
--
ALTER TABLE `series`
  ADD PRIMARY KEY (`id`);

--
-- Indexen voor tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `cars`
--
ALTER TABLE `cars`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT voor een tabel `movies`
--
ALTER TABLE `movies`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT voor een tabel `receipt`
--
ALTER TABLE `receipt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `series`
--
ALTER TABLE `series`
  MODIFY `id` mediumint(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `receipt`
--
ALTER TABLE `receipt`
  ADD CONSTRAINT `receipt_ibfk_1` FOREIGN KEY (`cars_id`) REFERENCES `cars` (`id`),
  ADD CONSTRAINT `receipt_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
