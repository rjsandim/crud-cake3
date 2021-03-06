-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: 01-Maio-2016 �s 16:07
-- Vers�o do servidor: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `crud-exemplo`
--
CREATE DATABASE IF NOT EXISTS `crud-exemplo` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `crud-exemplo`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinhos`
--

DROP TABLE IF EXISTS `carrinhos`;
CREATE TABLE `carrinhos` (
  `id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `carrinhos`
--

INSERT INTO `carrinhos` (`id`, `total`, `created`, `user_id`) VALUES
(6, 25780, '2016-05-01 20:00:32', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id`, `nome`) VALUES
(30, 'rafael'),
(31, 'rafael sandim'),
(32, 'joao'),
(33, 'samara'),
(34, 'mateus'),
(35, 'Cristian');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compras`
--

DROP TABLE IF EXISTS `compras`;
CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `valor_total` decimal(10,0) NOT NULL,
  `created` datetime NOT NULL,
  `vendedor_id` int(11) NOT NULL,
  `cliente_id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `imagem_dir` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `compras`
--

INSERT INTO `compras` (`id`, `valor_total`, `created`, `vendedor_id`, `cliente_id`, `imagem`, `imagem_dir`) VALUES
(8, '0', '2016-04-27 04:02:17', 1, 1, '9.jpeg', '044634ba-031c-48a4-a311-6686bfabad9a'),
(9, '0', '2016-04-27 04:11:44', 1, 1, '1.jpg', '0e719453-d1c8-4d68-8622-176abb2a7421'),
(10, '0', '2016-04-28 01:21:53', 1, 27, '2.jpg', '1e0fb5bc-eb2e-4611-96c0-ac36254582a9');

-- --------------------------------------------------------

--
-- Estrutura da tabela `itens`
--

DROP TABLE IF EXISTS `itens`;
CREATE TABLE `itens` (
  `id` int(11) NOT NULL,
  `carrinho_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL,
  `preco` int(11) NOT NULL,
  `quantidade` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `itens`
--

INSERT INTO `itens` (`id`, `carrinho_id`, `produto_id`, `preco`, `quantidade`) VALUES
(16, 6, 1, 12344, 2),
(17, 6, 3, 1223, 1),
(18, 6, 4, 12213, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL,
  `preco` int(11) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `preco`, `created`) VALUES
(1, 'produto 1', 12344, '0000-00-00 00:00:00'),
(3, 'novo produto', 1223, '0000-00-00 00:00:00'),
(4, 'produto 2', 12213, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `email`, `senha`) VALUES
(5, 'rjsandim@gmail.com', '$2y$10$hRyVIrsl.9dO.SvwsveNWunz6hojiVhSI6beK5GxPwiUOFy0wcA/K'),
(6, 'teste', '$2y$10$hRyVIrsl.9dO.SvwsveNWunz6hojiVhSI6beK5GxPwiUOFy0wcA/K'),
(7, 'a@a.com', '$2y$10$CMhZCz5UESvwoZbeN3mpUuNGSx/.Z/6Ss6P/RBGvvDlvRRW4obudm');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendedores`
--

DROP TABLE IF EXISTS `vendedores`;
CREATE TABLE `vendedores` (
  `id` int(11) NOT NULL,
  `nome` varchar(40) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendedores`
--

INSERT INTO `vendedores` (`id`, `nome`) VALUES
(1, 'Samara'),
(2, 'Cristian');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `carrinhos`
--
ALTER TABLE `carrinhos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itens`
--
ALTER TABLE `itens`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vendedores`
--
ALTER TABLE `vendedores`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `carrinhos`
--
ALTER TABLE `carrinhos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `itens`
--
ALTER TABLE `itens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `vendedores`
--
ALTER TABLE `vendedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;