-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 16-Mar-2023 às 21:28
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
-- Estrutura da tabela `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `news`
--

INSERT INTO `news` (`id`, `title`, `link`, `description`) VALUES
(1, 'Teste 01', 'Teste01.com', 'Teste 01'),
(2, 'teste 02', 'https://www.google.com', 'teste02'),
(3, 'TESTE 03', 'GOOGLE.COM', 'teste'),
(4, '70% das lideranças públicas não têm agenda de debate sobre tecnologia, diz estudo', 'https://exame.com/brasil/liderancas-publicas-nao-tem-agenda-voltada-para-tecnologia-mostra-estudo/', 'A maior parte dos gestores públicos em cargos de liderança, como prefeitos, governadores ou ministros, não tem uma agenda voltada para assuntos relacionados à tecnologia. '),
(5, '', '', ''),
(6, 'Testando noticias', 'http://localhost/phpmyadmin/index.php?route=/sql&pos=0&db=portfolio_victor&table=users', 'dasdadadsa');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telephone` varchar(25) NOT NULL,
  `address` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `appointment_date` date NOT NULL DEFAULT current_timestamp(),
  `services` varchar(50) NOT NULL,
  `nivel` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `telephone`, `address`, `password`, `appointment_date`, `services`, `nivel`) VALUES
(1, 'Teste01', 'teste11@gmail.com', '000333222', 'teste01', '0102e9826d6e14ee5e167f18159aa728', '2023-03-31', 'Backend Services', 1),
(2, 'teste02', 'teste02@gmail.com', '999333222', 'Teste 02', '5b7eeb0f73d615ce8889977b480ab674', '2023-03-01', '', 0),
(3, 'Teste03', 'teste03@gmail.com', '333000222', 'Teste 03', '96722d1c17abb7452a88c3accc0c160d', '2023-03-01', '', 0),
(4, 'Victor Lima', 'victor@gmail.com', '999333222', 'Victor Teste', '310dcbbf4cce62f762a2aaa148d556bd', '2023-03-04', '', 0),
(5, 'Victor Lima dos Santos', 'vitor@gmail.com', '333999222', 'rua teste 321', '310dcbbf4cce62f762a2aaa148d556bd', '2023-03-04', '', 0),
(6, 'teste10', 'teste10@gmail.com', '999333222', 'rua teste10', '$2y$10$5.98N8m.f3VgtYEzq01qYuK5fpauFlyPvLl1lmA5fEu', '2023-03-05', '', 0);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
