-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Abr-2022 às 18:38
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `quintanda_online`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `descricao` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------


--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `foto` varchar(150) NOT NULL,
  `produto` varchar(50) NOT NULL,
  `descricao` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `foto`, `produto`, `descricao`) VALUES
(2, 'img/produtos/000002.jpg', 'Abacaxi', 'Abacaxi da melhor qualidade possível, direto do produtor rural para a '),
(3, 'img/produtos/000003.jpg', 'Mamão', 'Mamão da melhor qualidade possível, direto do produtor rural para a su'),
(4, 'img/produtos/000004.jpg', 'maçã', 'maçã da melhor qualidade possível, direto do produtor rural para a sua'),
(5, 'img/produtos/000005.jpg', 'Goiaba', 'Goiaba da melhor qualidade possível, direto do produtor rural para a s'),
(6, 'img/produtos/000006.jpg', 'Laranja', 'Laranja da melhor qualidade possível, direto do produtor rural para a '),
(7, 'img/produtos/000007.jpg', 'Abacate', 'Abacate da melhor qualidade possível, direto do produtor rural para a '),
(8, 'img/produtos/000009.jpg', 'Abóbora', 'Abóbora da melhor qualidade possível, direto do produtor rural para a '),
(9, 'img/produtos/000010.jpg', 'Chuchu', 'Chuchu da melhor qualidade possível, direto do produtor rural para a s'),
(10, 'img/produtos/000011.jpg', 'Alface', 'Alface da melhor qualidade possível, direto do produtor rural para a s'),
(11, 'img/produtos/000012.jpg', 'Alho', 'Alho da melhor qualidade possível, direto do produtor rural para a sua'),
(12, 'img/produtos/melancia.webp', 'Melancia', 'Melancia da melhor qualidade possível, direto do produtor rural para a'),
(13, 'img/produtos/000001.jpg', 'banana', 'Banana prata da melhor qualidade possível, direto do produtor rural p');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'joseph robert ', 'admjoseph@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(2, 'brendo robert', 'admbrendo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'brendo robert', 'brendo@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'kayla geovanna', 'admkayla@gmail.com', '7a1b83882a2b4f1ae784ab992b315d01'),
(5, 'joseph robert ', 'josephboladao2018@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055'),
(6, 'joseph robert ', 'josephboladao2020@gmail.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'joseph robert ', 'joseph.robert.carvalho@gmail.com', 'e10adc3949ba59abbe56e057f20f883e');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);


--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;


--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
