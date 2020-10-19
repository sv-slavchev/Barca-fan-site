-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barca_db`
--

-- --------------------------------------------------------

--
-- Структура на таблица `coaches`
--

CREATE TABLE `coaches` (
  `id` int(11) NOT NULL,
  `coach-age` int(2) NOT NULL,
  `coach-image` varchar(100) NOT NULL,
  `coach-name` varchar(100) NOT NULL,
  `coach-position` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `coaches`
--

INSERT INTO `coaches` (`id`, `coach-age`, `coach-image`, `coach-name`, `coach-position`) VALUES
(1, 48, 'img/squad/enrique.jpg', 'Luis Enrique Martinez', 'Senior coach'),
(2, 51, '', 'Juan Carlos Unzue', 'Assistant coach'),
(3, 32, '', 'Robert Moreno', 'Assistant coach'),
(4, 41, '', 'Joan Barbara', 'Technical assistant'),
(5, 36, '', 'Rafel Pol', 'Fitness trainer'),
(6, 33, '', 'Joaquin Valdes', 'Psychologist'),
(7, 44, '', 'Jose Ramon de la Fuente', 'Goalkeeper''s coach');

-- --------------------------------------------------------

--
-- Структура на таблица `orders`
--

CREATE TABLE `orders` (
  `ID` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(200) NOT NULL,
  `total` float(5,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `orders`
--

INSERT INTO `orders` (`ID`, `name`, `email`, `phone`, `address`, `total`) VALUES
(5, '', '', 0, '', 735.00),
(6, '', '', 0, '', 735.00);

-- --------------------------------------------------------

--
-- Структура на таблица `players`
--

CREATE TABLE `players` (
  `id` int(4) NOT NULL,
  `player-name` varchar(100) NOT NULL,
  `player-position` varchar(100) NOT NULL,
  `player-age` int(2) NOT NULL,
  `player-image` varchar(255) NOT NULL,
  `player-number` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `players`
--

INSERT INTO `players` (`id`, `player-name`, `player-position`, `player-age`, `player-image`, `player-number`) VALUES
(1, 'Marc-Andre ter Stegen', 'Goalkeeper', 26, 'img/squad/stegen.jpg', 1),
(2, 'Gerard Pique', 'Defender', 32, 'img/squad/pique.jpg', 3),
(3, 'Ivan Rakitic', 'Midfielder', 31, 'img/squad/rakitich.jpg', 4),
(4, 'Sergio Busquets', 'Midfielder', 30, 'img/squad/busquets.jpg', 5),
(5, 'Denis Suarez', 'Midfielder', 25, 'img/squad/dsuarez.jpg', 6),
(6, 'Arda Turan', 'Midfielder', 32, 'img/squad/arda.jpg', 7),
(7, 'Andres Iniesta', 'Midfielder', 34, 'img/squad/iniesta.jpg', 8),
(8, 'Luis Suarez', 'Forward', 32, 'img/squad/suarez.jpg', 9),
(9, 'Lionel Messi', 'Forward', 31, 'img/squad/messi.jpg', 10),
(10, 'Neymar da Silva', 'Forward', 27, 'img/squad/neymar.jpg', 11),
(11, 'Rafael Alcantara', 'Midfielder', 26, 'img/squad/rafinha.jpg', 12),
(12, 'Jasper Cillessen', 'Goalkeeper', 29, 'img/squad/cillessen.jpg', 13),
(13, 'Javier Mascherano', 'Defender', 34, 'img/squad/mascherano.jpg', 14),
(14, 'Paco Alcacer', 'Forward', 25, 'img/squad/alcacer.jpg', 17),
(15, 'Jordi Alba', 'Defender', 30, 'img/squad/alba.jpg', 18),
(16, 'Lucas Digne', 'Defender', 25, 'img/squad/digne.jpg', 19),
(17, 'Sergi Roberto', 'Midfielder', 27, 'img/squad/roberto.jpg', 20),
(18, 'Andre Gomes', 'Midfielder', 25, 'img/squad/gomes.jpg', 21),
(19, 'Aleix Vidal', 'Defender', 29, 'img/squad/vidal.jpg', 22),
(20, 'Samuel Umtiti', 'Defender', 25, 'img/squad/umtiti.jpg', 23),
(21, 'Jeremy Mathieu', 'Defender', 35, 'img/squad/mathieu.jpg', 24),
(22, 'Jordi Masip Lopez', 'Goalkeeper', 30, 'img/squad/masip.jpg', 25);

-- --------------------------------------------------------

--
-- Структура на таблица `reviews`
--

CREATE TABLE `reviews` (
  `id_review` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `review` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `reviews`
--

INSERT INTO `reviews` (`id_review`, `code`, `name`, `review`) VALUES
(1, 'Posterd08', 'Ivan Vankov', 'this is very good stuff'),
(2, 'Posterd08', 'Misho Shopov', 'I like it very much'),
(5, 'Posterd08', 'Misho Shopov', 'I like it very much'),
(9, 'Posterd08', 'Ivan Vankov', 'this is very good stuff'),
(17, 'Laptop_skin03', 'dsfg', ' sdf'),
(18, 'djaga02', 'dfgvfd', ' fdvfvf'),
(19, 'iphonecase01', 'aasdds', ' asdsadas'),
(20, 'iphonecase01', 'asdsad', ' asdasdas'),
(21, 'djaga02', 'sdf', ' sdfsdfsdf'),
(22, 'Posterd08', 'xzcxc', ' zxcxc');

-- --------------------------------------------------------

--
-- Структура на таблица `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL,
  `description` varchar(500) NOT NULL,
  `quantity` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`, `description`, `quantity`) VALUES
(1, '3D панел за Iphone 7', 'iphonecase01', 'img/product-images/iphone_case.png', 28.08, '- iPhone 7 панел <br>\n- 3D дълбочинна технология, която найстина изглежда невероятно на всеки ъгъл <br>\n- Предпазва от удари и надрасквания, тънък дизайн <br>\n- Достъп до всички входове и функции <br>\n- В официална прозрачна опаковка <br>\n- Официален лицензиран продукт <br>', 4),
(2, 'Джага', 'djaga02', 'img/product-images/djaga.png', 84.29, '- джага <br>									- 6 играчи в отбор <br>									- здрава конструкция, принт с ефект на трева <br>									- брояч на резултата от всяка страна <br>					- с две пластмасови топчета <br>						- реалистични графики като на стадион <br>									- стоманени пръчки с лесно завъртане и меки дръжки <br>								- 50.5cm x 37cm x 12cm <br>								- официален лицензиран продукт <br>', 2),
(3, 'Скин за лаптоп 14-17"', 'Laptop_skin03', 'img/product-images/laptop_skin.png', 40.00, '- скин за лаптоп <br>\r\n- съвместимо с 14-17 инчови екрани <br> 									- не избледнява <br> 									- водоустойчив, финиш без балончета <br> 									- против надраскване <br> 									- лесно приложение <br> 									- не оставя следи след премахване <br> 									- в прозрачна опаковка <br> 									- официален лицензиран продукт <br>', 5),
(4, 'Капитанска лента', 'Captainband04', 'img/product-images/capitanska_lenta.png', 20.00, '- капитанска лента за ръка <br>									- универсален размер <br>								- широчина: 9cm <br>									- върху картонена опаковка <br>									- официален лицензиран продукт <br>', 2),
(5, 'Керамична чаша', 'CeramicsCup05', 'img/product-images/keramichna_chasha.png', 25.00, '- керамична чаша <br>							- височина 9cm, 8cm диаметър <br>								- 295 мл <br>									- в прозрачна кутия <br>									- официален лицензиран продукт <br>', 9),
(6, 'Топка с автографи', 'Balld06', 'img/product-images/mini_ball.png', 50.00, '- синтетична футболна топка с металик покритие <br>									- официалните подписи на играчите <br>								- размер 5 <br>								- 31 панела <br>								- официален лицензиран продукт <br>', 12),
(7, 'Надуваемо кресло', 'Armchaird07', 'img/product-images/air_armchair.png', 150.00, 'Креслото BARCELONA Inflatable Football Chair е компактно надуваемо кресло с удобни поставки за напитки от двете страни. <br>					Лекото му тегло го прави лесен за пренос. <br>					Размери: 65/85/80см. <br>\r\nШирина на седалката: 33см. <br>							Официално лицензиран продукт. <br>', 10),
(8, 'Плакат Барселона', 'Posterd08', 'img/product-images/poster.png', 35.00, '- голям плакат <br>									- размер 61cm x 91cm <br>									- навит <br>									- официален лицензиран продукт <br>', 23),
(9, 'Плакат Меси', 'MessiPosterd09', 'img/product-images/messi_poster.png', 35.00, '- голям плакат <br>								- размер 61cm x 91cm <br>								- навит <br>								- официален лицензиран продукт <br>', 8),
(10, 'Футболни кори', 'Radioballd10', 'img/product-images/kori1.png', 70.00, '- футболни кори за младежи <br>								- дебела лята пластмасова кора, вътрешност с удобна подплънка <br>								- протектор за глезен с удобна подплънка, еластична самозалепваща връзка с велкро <br>									- размери 22cm <br>									- подходящи за 10-12 годишни <br>								- в цветен плик с цип <br>								- официален лицензиран продукт <br>', 4),
(11, 'Топка', 'topka2', 'img/product-images/topka2.jpg', 50.00, '- синтетична футболна топка <br>								- размер 5 <br>							- 26 панела <br>							- официален лицензиран продукт <br>', 6),
(12, 'Топка със снимки', 'topka3', 'img/product-images/topka3.jpg', 45.00, '- синтетична футболна топка с металик покритие <br>								- официалните подписи на играчите и снимки <br>								- размер 5 <br>						- 31 панела <br>						- официален лицензиран продукт <br>', 11),
(13, 'Messi Photo', 'MessiPhoto13', 'img/product-images/messi_photo.jpg', 15.00, '', 0),
(14, 'Bedroom set', 'BedroomSet14', 'img/product-images/bedroom_set.jpg', 80.00, '', 0),
(15, 'Wall watch', 'WallWatch15', 'img/product-images/wall_watch.jpg', 45.00, '', 0),
(16, 'Iniesta shirt', 'IniestaShirt16', 'img/product-images/Iniesta_shirt.jpg', 90.00, '', 0),
(17, 'Ball', 'Ball17', 'img/product-images/topka1.jpg', 65.00, '', 0),
(18, 'Radio', 'Radio18', 'img/product-images/radio.jpg', 90.00, '', 0),
(19, 'Glass', 'Glass19', 'img/product-images/visoka_chasha.jpg', 10.00, '', 0),
(20, 'Headphones', 'Headphones20', 'img/product-images/slushalki.jpg', 55.00, '', 0);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`username`, `password`, `email`) VALUES
('mshi_93', '202cb962ac59075b964b07152d234b70', 'mustafa_shabanov6@abv.bg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id_review`),
  ADD KEY `code` (`code`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coaches`
--
ALTER TABLE `coaches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id_review` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_ibfk_1` FOREIGN KEY (`code`) REFERENCES `tblproduct` (`code`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
