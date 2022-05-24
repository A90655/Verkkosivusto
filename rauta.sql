-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24.05.2022 klo 13:10
-- Palvelimen versio: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rauta`
--

-- --------------------------------------------------------

--
-- Rakenne taululle `addnews`
--

CREATE TABLE `addnews` (
  `id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `p1` varchar(255) NOT NULL,
  `p2` varchar(255) NOT NULL,
  `p3` varchar(255) NOT NULL,
  `dateadded` date NOT NULL DEFAULT current_timestamp(),
  `imagepath` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vedos taulusta `addnews`
--

INSERT INTO `addnews` (`id`, `header`, `p1`, `p2`, `p3`, `dateadded`, `imagepath`) VALUES
(0, 'Ensimmäinen uutinen', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu elementum felis. Quisque id nisi ut ipsum blandit blandit. Ut blandit imperdiet quam, volutpat sollicitudin dolor pellentesque sed. Aliquam ac quam a ex dignissim euismod vel condimentum e', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu elementum felis. Quisque id nisi ut ipsum blandit blandit. Ut blandit imperdiet quam, volutpat sollicitudin dolor pellentesque sed. Aliquam ac quam a ex dignissim euismod.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu elementum felis. Quisque id nisi ut ipsum blandit blandit. Ut blandit imperdiet quam.', '2022-05-10', 'uploads/news/d0abc4815a994cee8729bcc620ffaa2f (1).png'),
(0, 'Toinen uutinen', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu elementum felis. Quisque id nisi ut ipsum blandit blandit. Ut blandit imperdiet quam, volutpat sollicitudin dolor pellentesque sed. Aliquam ac quam a ex dignissim euismod vel condimentum e', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu elementum felis. Quisque id nisi ut ipsum blandit blandit. Ut blandit imperdiet quam, volutpat sollicitudin dolor pellentesque sed. Aliquam ac quam a ex dignissim euismod vel condimentum e', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu elementum felis. Quisque id nisi ut ipsum blandit blandit. Ut blandit imperdiet quam, volutpat sollicitudin dolor pellentesque sed. Aliquam ac quam a ex dignissim euismod vel condimentum e', '2022-05-10', 'uploads/news/dcd6my9-fef1a36d-6945-4eca-91bb-59cd8bfac0e0.png'),
(0, 'Kolmas uutinen', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu elementum felis. Quisque id nisi ut ipsum blandit blandit. Ut blandit imperdiet quam, volutpat sollicitudin dolor pellentesque sed. Aliquam ac quam a ex dignissim euismod vel condimentum e', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu elementum felis. Quisque id nisi ut ipsum blandit blandit. Ut blandit imperdiet quam, volutpat sollicitudin dolor pellentesque sed. Aliquam ac quam a ex dignissim euismod vel condimentum e', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu elementum felis. Quisque id nisi ut ipsum blandit blandit. Ut blandit imperdiet quam, volutpat sollicitudin dolor pellentesque sed. Aliquam ac quam a ex dignissim euismod vel condimentum e', '2022-05-10', 'uploads/news/mountain.jpg'),
(0, 'xx x ', 'xxx', '', '', '2022-05-24', 'uploads/news/wolfwall.jpg');

-- --------------------------------------------------------

--
-- Rakenne taululle `instructions`
--

CREATE TABLE `instructions` (
  `id` int(11) NOT NULL,
  `header` varchar(255) NOT NULL,
  `p1` varchar(2000) NOT NULL,
  `p2` varchar(2000) NOT NULL,
  `p3` varchar(2000) NOT NULL,
  `dateadded` date NOT NULL DEFAULT current_timestamp(),
  `imagepath` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vedos taulusta `instructions`
--

INSERT INTO `instructions` (`id`, `header`, `p1`, `p2`, `p3`, `dateadded`, `imagepath`) VALUES
(3, 'Ohje 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed nulla non velit semper euismod. Nunc mi orci, egestas non tincidunt et, efficitur vel mi. Aenean imperdiet urna non turpis elementum efficitur. Duis id erat aliquet, aliquet felis vel, condimentum lectus. Nullam vulputate viverra faucibus. Vivamus sagittis vestibulum justo, et luctus diam pharetra vel. Nam fermentum elit efficitur leo luctus pellentesque pharetra vitae odio. Vivamus nec ornare massa. Maecenas quis faucibus risus, id rhoncus nisl. Ut vel augue ligula. Vivamus maximus fringilla sodales.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed nulla non velit semper euismod. Nunc mi orci, egestas non tincidunt et, efficitur vel mi. Aenean imperdiet urna non turpis elementum efficitur. Duis id erat aliquet, aliquet felis vel, condimentum lectus.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed nulla non velit semper euismod. Nunc mi orci, egestas non tincidunt et, efficitur vel mi. Aenean imperdiet urna non turpis elementum efficitur. Duis id erat aliquet, aliquet felis vel, condimentum lectus. Nullam vulputate viverra faucibus. Vivamus sagittis vestibulum justo, et luctus diam pharetra vel. Nam fermentum elit efficitur leo luctus pellentesque pharetra vitae odio. Vivamus nec ornare massa. Maecenas quis faucibus risus, id rhoncus nisl. Ut vel augue ligula. Vivamus maximus fringilla sodales.\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus sed nulla non velit semper euismod. Nunc mi orci, egestas non tincidunt et, efficitur vel mi. Aenean imperdiet urna non turpis elementum efficitur. Duis id erat aliquet, aliquet felis vel, condimentum lectus. Nullam vulputate viverra faucibus. Vivamus sagittis vestibulum justo, et luctus diam pharetra vel. Nam fermentum elit efficitur leo luctus pellentesque pharetra vitae odio. Vivamus nec ornare massa. Maecenas quis faucibus risus, id rhoncus nisl. Ut vel augue ligula. Vivamus maximus fringilla sodales.', '2022-05-02', 'uploads/news/Teht 3.PNG'),
(0, 'Ohje 2', 'egerqgbqerqgregerg', 'rgerg', 'rqegerqqgeqr', '2022-05-10', 'uploads/news/ZvXPJO.jpg'),
(0, 'Ohje 3', 'garrgawera', 'gawergeraeragearggearg', 'ergergrgge', '2022-05-10', 'uploads/news/lataus (1).png');

-- --------------------------------------------------------

--
-- Rakenne taululle `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(128) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vedos taulusta `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '21232F297A57A5A743894A0E4A801FC3', 'admin'),
(2, 'kaapo', 'kaapo', 'user'),
(3, 'pinja', 'pinja', 'user');

-- --------------------------------------------------------

--
-- Rakenne taululle `welcome`
--

CREATE TABLE `welcome` (
  `welcometext` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vedos taulusta `welcome`
--

INSERT INTO `welcome` (`welcometext`) VALUES
('Oikein rakentaminen onnistuu hyvillä ratkaisuilla - Tervetuloa asioimaan Ruosteiseen Rautaan!');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
