-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Ago-2024 às 11:50
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `cad5`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nome` varchar(45) DEFAULT NULL,
  `sobrenome` varchar(45) DEFAULT NULL,
  `sexo` varchar(20) DEFAULT NULL,
  `cpf` bigint(11) DEFAULT NULL,
  `telefone` bigint(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `senha` varchar(255) DEFAULT NULL,
  `endereco` varchar(100) DEFAULT NULL,
  `bairro` varchar(60) DEFAULT NULL,
  `uf` varchar(50) DEFAULT NULL,
  `cep` bigint(8) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `user`
--

INSERT INTO `user` (`id`, `nome`, `sobrenome`, `sexo`, `cpf`, `telefone`, `email`, `senha`, `endereco`, `bairro`, `uf`, `cep`) VALUES
(1, 'João Pedro Poncio de Oliveira Gatti', 'oliveira', '', 0, 0, 'guilhermecarlin51@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'GUIDO BRANDT', 'SÃO MIGUEL', 'santa catarina', 89580000),
(2, 'João Pedro Poncio de Oliveira Gatti', 'oliveira', 'masculino', 0, 0, 'guilhermecarlin51@gmail.com', '25f9e794323b453885f5181f1b624d0b', 'GUIDO BRANDT', 'SÃO MIGUEL', 'santa catarina', 89580000);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;