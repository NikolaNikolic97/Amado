-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2019 at 12:42 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amado`
--

-- --------------------------------------------------------

--
-- Table structure for table `action`
--

CREATE TABLE `action` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `action` varchar(255) NOT NULL,
  `date` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `action`
--

INSERT INTO `action` (`id`, `id_user`, `action`, `date`) VALUES
(1, 1, 'Logovanje', 1552679945),
(2, 14, 'Registracija', 1552680423),
(3, 2, 'Logovanje', 1552680562),
(4, 2, 'Odjava', 1552680569),
(5, 1, 'Logovanje', 1552682074),
(6, 1, 'Odjava', 1552691047),
(7, 1, 'Logovanje', 1552691280),
(8, 1, 'Odjava', 1552692037),
(9, 1, 'Logovanje', 1552741128),
(10, 1, 'Odjava', 1552749605),
(11, 2, 'Logovanje', 1552749621),
(12, 2, 'Odjava', 1552758274),
(13, 14, 'Logovanje', 1552758320),
(14, 14, 'Odjava', 1552759146),
(15, 2, 'Logovanje', 1552759158),
(16, 2, 'Odjava', 1552759329),
(17, 3, 'Logovanje', 1552759340),
(18, 1, 'Logovanje', 1552770890),
(19, 2, 'Logovanje', 1552823729),
(20, 2, 'Odjava', 1552823737),
(21, 1, 'Logovanje', 1552823751),
(22, 1, 'Odjava', 1552824154),
(23, 1, 'Logovanje', 1552825390),
(24, 1, 'Odjava', 1552830174),
(25, 15, 'Registracija', 1552830348),
(26, 1, 'Logovanje', 1552836769),
(27, 1, 'Logovanje', 1552895169),
(28, 1, 'Odjava', 1552896263),
(29, 1, 'Logovanje', 1552897866),
(30, 1, 'Odjava', 1552899528),
(31, 2, 'Logovanje', 1552899542);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `brand` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand`) VALUES
(1, 'Ashley Furniture'),
(2, 'IKEA'),
(3, 'Edra'),
(4, 'Kartell'),
(5, 'Poliform'),
(6, 'Henredon'),
(7, 'American Signature'),
(8, 'Crate & Barrel'),
(9, 'Ethan Allen');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category`) VALUES
(1, 'sofas'),
(2, 'shelves'),
(3, 'armchairs'),
(4, 'cabinet'),
(5, 'desk'),
(6, 'bed'),
(7, 'decoration'),
(8, 'wardrobe'),
(9, 'lighting'),
(10, 'bedclothes');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `id_post` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `date` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `id_post`, `id_user`, `date`, `quantity`) VALUES
(1, 11, 2, 1552757322, 2),
(2, 10, 2, 1552757322, 2),
(3, 18, 2, 1552757524, 1),
(4, 18, 2, 1552757859, 1),
(5, 18, 14, 1552758388, 1),
(6, 17, 14, 1552758388, 1),
(7, 21, 14, 1552758388, 1),
(8, 12, 14, 1552758388, 1),
(9, 21, 14, 1552758730, 1),
(10, 12, 14, 1552758730, 1),
(11, 12, 14, 1552758798, 1),
(12, 16, 2, 1552759180, 1),
(13, 10, 3, 1552759395, 1),
(14, 11, 3, 1552759395, 1),
(15, 19, 3, 1552759395, 1),
(16, 21, 3, 1552759395, 1),
(17, 10, 2, 1552899865, 1),
(18, 11, 2, 1552899865, 1);

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `src` varchar(255) NOT NULL,
  `alt` varchar(255) NOT NULL,
  `id_post` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `src`, `alt`, `id_post`) VALUES
(16, 'http://localhost:8000/img/product-img/1552431032_annie-spratt-40665-unsplash.jpg', '1552431032_annie-spratt-40665-unsplash.jpg', 10),
(17, 'http://localhost:8000/img/product-img/1552431305_annie-spratt-294447-unsplash.jpg', '1552431305_annie-spratt-294447-unsplash.jpg', 11),
(18, 'http://localhost:8000/img/product-img/1552431398_di_an_h-1369916-unsplash.jpg', '1552431398_di_an_h-1369916-unsplash.jpg', 12),
(19, 'http://localhost:8000/img/product-img/1552431469_samuel-zeller-106867-unsplash.jpg', '1552431469_samuel-zeller-106867-unsplash.jpg', 13),
(20, 'http://localhost:8000/img/product-img/1552431555_joshua-ness-189163-unsplash.jpg', '1552431555_joshua-ness-189163-unsplash.jpg', 14),
(21, 'http://localhost:8000/img/product-img/1552431629_nicola-nuttall-730567-unsplash.jpg', '1552431629_nicola-nuttall-730567-unsplash.jpg', 15),
(22, 'http://localhost:8000/img/product-img/1552431699_moriah-leynes-1298836-unsplash.jpg', '1552431699_moriah-leynes-1298836-unsplash.jpg', 16),
(23, 'http://localhost:8000/img/product-img/1552431791_toa-heftiba-644507-unsplash.jpg', '1552431791_toa-heftiba-644507-unsplash.jpg', 17),
(24, 'http://localhost:8000/img/product-img/1552431888_jason-abdilla-1272321-unsplash.jpg', '1552431888_jason-abdilla-1272321-unsplash.jpg', 18),
(25, 'http://localhost:8000/img/product-img/1552431974_becca-tapert-391584-unsplash.jpg', '1552431974_becca-tapert-391584-unsplash.jpg', 19),
(26, 'http://localhost:8000/img/product-img/1552432051_toa-heftiba-1203912-unsplash.jpg', '1552432051_toa-heftiba-1203912-unsplash.jpg', 20),
(27, 'http://localhost:8000/img/product-img/1552433518_benjamin-voros-310026-unsplash.jpg', '1552433518_benjamin-voros-310026-unsplash.jpg', 21),
(28, 'http://localhost:8000/img/product-img/1552439891_drew-coffman-211736-unsplash.jpg', 'Compact 2-seat sofa', 10),
(29, 'http://localhost:8000/img/product-img/1552824137_mathilde-merlin-1295743-unsplash.jpg', '1552824137_mathilde-merlin-1295743-unsplash.jpg', 22);

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `href` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `href`, `content`) VALUES
(1, 'home', 'home'),
(2, 'shop', 'shop'),
(3, 'contactUs', 'contact us'),
(4, 'author', 'Author');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `id_category` int(11) NOT NULL,
  `id_brand` int(11) NOT NULL,
  `quantity` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `description`, `name`, `price`, `id_category`, `id_brand`, `quantity`) VALUES
(10, 'This sofa quickly and easily transforms into a spacious bed – and turns the living room into a bedroom. The storage space under the seat is easy to access and has room for bedding, pillows and a good book.', 'HOLMSUND', 500, 1, 2, 200),
(11, 'After a good night’s sleep, you can effortlessly convert your bedroom or guest room into a living room again. The built-in storage is easy to access and spacious enough to store bedding, books and PJs.', 'FRIHETEN', 600, 6, 1, 150),
(12, 'Visitors this weekend? It’s easy to convert this corner sectional into a bed for overnight guests. There’s room for an extra comforter in the storage space under the footrest.', 'BRÅTHULT', 750, 3, 3, 100),
(13, 'Watch movies or talk to a friend. Read a book or take a break with the family. Email or sleep. Here’s space for everything in your life. Moveable cushions make the sofa comfy for sitting on and lying down.', 'FLOTTEBO', 400, 2, 4, 150),
(14, 'Adjustable shelves, so you can customize your storage as needed.', 'BRIMNES', 110, 4, 5, 100),
(15, 'A clean and simple look that fits just about anywhere. You can combine it with other desks or drawer units in the MICKE series to extend your work space. The clever design at the back hides messy cables.', 'MICKE', 300, 5, 6, 100),
(16, 'This bed gives you spacious storage without taking up any space in the room. Simply flip up the bed base and hide your things inside. Place it freestanding or with the headboard against a wall.', 'MALM', 700, 6, 6, 50),
(17, 'Nice as a table decoration, for example.', 'LINDRANDE', 100, 7, 7, 20),
(18, 'A clean look with sliding doors that don’t get in the way when you open them - a perfect solution when you need roomy storage in a tighter space. Combine two or more wardrobes for a larger solution. Psst! Please attach to the wall.', 'TRYSIL', 600, 8, 8, 50),
(19, 'A cabinet’s best friend – it lights things up inside and creates a cozy atmosphere in the room. Use it on top of a wardrobe in the bedroom, or together with storage in the living room, kitchen or hallway.', 'URSHULT', 25, 9, 9, 50),
(20, 'You can place the chaise section to the left or right of the sofa, and switch whenever you like.', 'EKTORP', 150, 1, 2, 100),
(21, 'Three different heights, a top that tilts and a holder for MÅLA drawing paper roll. The desk is as practical for arts and crafts as for homework. You might say it grows with the task. Just like your child.', 'FLISAT', 150, 5, 2, 50),
(22, 'Comfort bed', 'HERMES', 600, 6, 2, 50);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `id_role` int(255) NOT NULL,
  `activated` tinyint(1) NOT NULL,
  `token` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `user_name`, `email`, `password`, `id_role`, `activated`, `token`) VALUES
(1, 'Nikola Nikolic', 'nikola97', 'nikola@gmail.com', '25f9e794323b453885f5181f1b624d0b', 1, 1, ''),
(2, 'Ivana Lukic', 'ivana97', 'ivana@gmail.com', '25f9e794323b453885f5181f1b624d0b', 2, 1, ''),
(3, 'Nikola Nikolic', 'nikolanikolic997', 'nikolanikolic@gmail.com', '25f9e794323b453885f5181f1b624d0b', 2, 1, 'dbd2f25f11d7a3de96a73e5ea66fe653'),
(12, 'assdasdasdasdasdasddas', 'adsasdasddas', 'pera@gmail.com', '25f9e794323b453885f5181f1b624d0b', 2, 1, '3b79935e2b29a33d733f734d7248dd14'),
(14, 'Patak Daca', 'Daca123', 'daca@gmail.com', '25f9e794323b453885f5181f1b624d0b', 2, 1, 'cd86a8de58614bfbf62eca0e5c12e341'),
(15, 'Djordje Vujicic', 'vuja123', 'dzonzi97@gmail.com', '25f9e794323b453885f5181f1b624d0b', 2, 1, '17904acc501776eb495a1f0e9cccc0ca');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `action`
--
ALTER TABLE `action`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_post` (`id_post`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_category` (`id_category`),
  ADD KEY `id_brand` (`id_brand`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_name` (`user_name`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `action`
--
ALTER TABLE `action`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `action`
--
ALTER TABLE `action`
  ADD CONSTRAINT `action_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `checkout_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `images`
--
ALTER TABLE `images`
  ADD CONSTRAINT `images_ibfk_1` FOREIGN KEY (`id_post`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `posts_ibfk_2` FOREIGN KEY (`id_brand`) REFERENCES `brands` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
