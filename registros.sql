-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 26-Set-2018 às 05:26
-- Versão do servidor: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registros`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sexo` enum('M','F') NOT NULL,
  `morada` varchar(50) NOT NULL,
  `nacionalidade` varchar(50) NOT NULL,
  `contacto` int(12) NOT NULL,
  `senha` varchar(20) NOT NULL,
  `resposta` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `aluno`
--

INSERT INTO `aluno` (`id`, `email`, `nome`, `sexo`, `morada`, `nacionalidade`, `contacto`, `senha`, `resposta`) VALUES
(1, 'gouveiamartins6@gmail.com', 'Martins', 'M', 'Fortaleza', 'Angola', 940386895, '1234', 'Massa');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) DEFAULT NULL,
  `nomeDoTutor` varchar(100) DEFAULT NULL,
  `link` varchar(20000) DEFAULT NULL,
  `imagem` mediumtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `nomeDoTutor`, `link`, `imagem`) VALUES
(1, 'Banco de dados com MySQL', 'Afonso Digimo', 'bd.php', 'Base.jpg'),
(2, 'Algoritmo', 'Carlos Martins', 'bd.php', 'algoritmo.jpg'),
(3, 'Linguagem C', 'Alessandro Diogo', 'bd.php', 'C.jpg'),
(4, 'CorelDraw', 'Issac Baptista', 'bd.php', 'corel.jpg'),
(5, 'Java', 'Martinho Dala', 'bd.php', 'Java.jpg'),
(6, 'Lógica de Programação', 'Afonso Digimo', 'bd.php', 'Logica.jpg'),
(7, 'Hardware', 'Afonso Digimo e Issac Baptista', 'bd.php', 'Hard.jpg'),
(8, 'Photoshop', 'Ander Baptista', 'bd.php', 'photoshop.jpg'),
(9, 'Contablidade Geral', 'Naomi Joaquim', 'bd.php', 'contab.jpg'),
(10, 'Excell', 'Domingos Manuel', 'bd.php', 'Excell.jpg'),
(11, 'Língua Portuguesa', 'Martins Gouveia e Carlos Martins', 'bd.php', 'Lp.jpg'),
(12, 'Informática Básica', 'Martinho Dala', 'bd.php', 'info.jpg'),
(13, 'Recursos Humanos', 'Maria Manuela', 'bd.php', 'Rh.jpg'),
(14, 'Inglês ', 'Ander Baptista e Carlos Martins', 'bd.php', 'Ing.jpg'),
(15, 'Secretariado Executivo', 'Maria Tavares', 'bd.php', 'secretariado.jpg'),
(16, 'Contablidade Informatizada', 'Issac Baptista', 'bd.php', 'contabilidade .jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
