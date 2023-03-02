-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Mar-2023 às 22:42
-- Versão do servidor: 10.4.25-MariaDB
-- versão do PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `portfolio_victor`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `portfolio`
--

CREATE TABLE `portfolio` (
  `ID` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title_portfolio` varchar(255) NOT NULL,
  `description_portfolio` varchar(255) NOT NULL,
  `github` varchar(255) NOT NULL,
  `technologies` varchar(255) NOT NULL,
  `image_portfolio` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `portfolio`
--

INSERT INTO `portfolio` (`ID`, `author`, `title_portfolio`, `description_portfolio`, `github`, `technologies`, `image_portfolio`) VALUES
(1, 'Victor Lima dos Santos', 'Landing Page', 'dasdasjdhujasd abshdbahsbdhasbdha bshdb ashbdhasbdhabsh dbahsbdhasbdhabshdbashbdhas', 'https://github.com/VictorLSantos', 'JS - HTML - CSS - PHP', ''),
(2, 'asdasdsad', 'dsadasd', 'asdsadasdsasd', 'asdasdasdasdas', 'asdasdasdasd', ''),
(3, 'dddddddddddd', 'ddddddddddddddd', 'dddddddddddddddddd', 'ddddddddddddddd', 'dddddddddddddddddddddd', ''),
(5, 'DASDASDSAD', 'DASDASDASDASDAS', 'ASDASDASDASDASDAS', 'DASDASDASDAS', 'DASDASDAS', ''),
(6, 'testando', 'testando', 'testando', 'testando.com', 'testando', ''),
(7, 'testando1', 'testando1', 'testando1', 'testando1.com', 'testando1', ''),
(8, 'teste02', 'teste02', 'teste02', 'teste02.com', 'teste02', 0x566963746f725f50657266696c2e6a706567),
(9, 'teste03', 'teste03', 'teste03', 'teste03.com', 'teste03', 0x566963746f725f50657266696c2e6a706567),
(10, 'teste04', 'teste04', 'teste04', 'teste04.com', 'teste04', 0x566963746f725f50657266696c2e6a706567),
(11, 'teste05', 'teste05', 'teste05', 'teste05.com', 'teste05', 0x566963746f725f50657266696c2e6a706567),
(12, 'teste06', 'teste06', 'teste06', 'teste06.com', 'teste06', ''),
(13, 'Teste07', 'Teste07', 'Teste07', 'Teste07.com', 'Teste07', 0x566963746f725f50657266696c2e6a706567),
(14, 'Teste08', 'Teste08', 'Teste08', 'Teste08.com', 'Teste08', 0x637562655f6669677572655f6461726b5f3134323135375f3139323078313038302e6a7067),
(15, 'teste09', 'teste09', 'teste09', 'https://github.com', 'teste09', 0x617374726f6e6175745f73696c686f75657474655f676c6f775f3135313331385f3139323078313038302e6a7067);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
