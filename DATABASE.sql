-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Set-2018 às 20:05
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apartamentos`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `apartamento`
--

CREATE TABLE `apartamento` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `foto_destaque` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `apartamento`
--

INSERT INTO `apartamento` (`id`, `titulo`, `descricao`, `foto_destaque`) VALUES
(7, 'SunApartments T1 4 pessoas', 'Descrição sobre o SunApartments T1 4 pessoas', 'aps/127625_35d38418dc_1.jpg'),
(8, 'SunApartments T2 5 pessoas', 'Descrição sobre SunApartments T2 5 pessoas', 'aps/127846_8c014dd231_4.jpg'),
(11, 'SunApartments T2 6 pessoas', 'Descrição sobre SunApartments T2 6 pessoas', 'aps/127845_fe0a3c7741_4.jpg'),
(12, 'SunApartments T2 Duplex 7 pessoas', 'Descrição sobre SunApartments T2 Duplex 7 pessoas', 'aps/127843_e295b2c338_5.jpg'),
(13, 'SunApartments T2 Duplex 10 pessoas', 'Descrição sobre SunApartments T2 Duplex 10 pessoas', 'aps/127844_56474dfb83_1.jpg'),
(14, 'SunHostel', 'Descrição sobre SunHostel', 'aps/128003_1c0eaae9d8_3.jpg'),
(15, 'T0 Riviera Flat between beach and centre', 'Descrição sobre T0 Riviera Flat between beach and centre', 'aps/130114_0f8d6b41ba_6.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `galeria`
--

INSERT INTO `galeria` (`id`, `id_produto`, `imagem`) VALUES
(6, 7, 'aps/127625_0fe9ad2554_5.jpg'),
(7, 7, 'aps/127625_35d38418dc_1.jpg'),
(8, 7, 'aps/127625_c16ab2e8e8_3.jpg'),
(9, 7, 'aps/127625_ce09520894_2.jpg'),
(11, 7, 'aps/127625_dbf504f3ca_6.jpg'),
(12, 8, 'aps/127846_8c014dd231_4.jpg'),
(13, 8, 'aps/127846_26d3bde297_3.jpg'),
(14, 8, 'aps/127846_32a4bc8ee0_2.jpg'),
(15, 8, 'aps/127846_196ba8bf95_6.jpg'),
(16, 8, 'aps/127846_559470b7a7_5.jpg'),
(17, 8, 'aps/127846_6586010a07_1.jpg'),
(24, 11, 'aps/127845_1e0fee652e_6.jpg'),
(25, 11, 'aps/127845_3f1e9b71a8_2.jpg'),
(26, 11, 'aps/127845_6c901305eb_3.jpg'),
(27, 11, 'aps/127845_71cd861a71_1.jpg'),
(28, 11, 'aps/127845_9166a4331c_5.jpg'),
(29, 11, 'aps/127845_fe0a3c7741_4.jpg'),
(30, 12, 'aps/127843_0e2f522456_6.jpg'),
(31, 12, 'aps/127843_3fb1b4bd1a_4.jpg'),
(32, 12, 'aps/127843_7b2bef3566_1.jpg'),
(33, 12, 'aps/127843_56e5f2f3e1_3.jpg'),
(34, 12, 'aps/127843_be813b6835_2.jpg'),
(35, 12, 'aps/127843_e295b2c338_5.jpg'),
(36, 13, 'aps/127844_9df57aa627_2.jpg'),
(37, 13, 'aps/127844_56474dfb83_1.jpg'),
(38, 13, 'aps/127844_a604150fb9_3.jpg'),
(39, 13, 'aps/127844_ae204e6722_5.jpg'),
(40, 13, 'aps/127844_cc3136c9d1_6.jpg'),
(41, 13, 'aps/127844_cd6b7e673f_4.jpg'),
(42, 14, 'aps/128003_1c0eaae9d8_3.jpg'),
(43, 14, 'aps/128003_5a74846dc4_1.jpg'),
(44, 14, 'aps/128003_7b480eecf5_4.jpg'),
(45, 14, 'aps/128003_7c957f58de_2.jpg'),
(46, 15, 'aps/130114_0f8d6b41ba_6.jpg'),
(47, 15, 'aps/130114_9f19515679_2.jpg'),
(48, 15, 'aps/130114_165d77b169_5.jpg'),
(49, 15, 'aps/130114_420568f276_4.jpg'),
(50, 15, 'aps/130114_54029741b1_3.jpg'),
(51, 15, 'aps/130114_f19fb2e1a0_1.jpg');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `nome`, `username`, `password`) VALUES
(4, 'Gabriel', 'bakill3', '$2y$10$9ewHxFoU3.CfhpcomqsyIugneCIQ2bqdpdWxiHRx4BFnfrzwFlm.y');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apartamento`
--
ALTER TABLE `apartamento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `destaqu` (`foto_destaque`),
  ADD KEY `id_produto` (`id`);

--
-- Indexes for table `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_produto` (`id_produto`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apartamento`
--
ALTER TABLE `apartamento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `galeria`
--
ALTER TABLE `galeria`
  ADD CONSTRAINT `galeria_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `apartamento` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
