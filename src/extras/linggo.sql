-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17-Jun-2021 às 01:19
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `linggo`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `colunas_tarefas`
--

CREATE TABLE `colunas_tarefas` (
  `ID_USUARIO` int(11) NOT NULL,
  `ID_ROTINA` int(11) NOT NULL,
  `ID_COLUNA` int(11) NOT NULL,
  `ID_TAREFA` int(11) NOT NULL,
  `DESCRICAO_TAREFA` varchar(125) COLLATE utf8_bin NOT NULL,
  `HORARIO_TAREFA` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `colunas_tarefas`
--

INSERT INTO `colunas_tarefas` (`ID_USUARIO`, `ID_ROTINA`, `ID_COLUNA`, `ID_TAREFA`, `DESCRICAO_TAREFA`, `HORARIO_TAREFA`) VALUES
(7, 11, 1, 2, 'eee', '22:54'),
(7, 11, 2, 3, 'teste', '00:20'),
(7, 12, 9, 4, 'teste 3', '23:22'),
(4, 13, 12, 9, 'Algebra', '08:30'),
(7, 11, 1, 6, 'teste', '14:23'),
(7, 11, 1, 7, 'dar o cu', '00:30'),
(7, 11, 1, 8, 'tomar cafÃ©', '08:00'),
(4, 13, 12, 10, 'equaÃ§Ã£o 1 grau', '10:30'),
(10, 29, 25, 29, 'tarefa_rename', '06:10'),
(3, 1, 21, 27, 'ddd', '11:00'),
(4, 14, 16, 22, 'teste1', '09:23'),
(4, 13, 12, 16, 'teste 2', '12:00'),
(4, 13, 14, 17, 'rename', '11:00'),
(3, 1, 22, 28, 'xxx', '12:44'),
(4, 15, 17, 24, 'Rename', '21:00'),
(4, 15, 19, 25, 'CafÃ© da manhÃ£', '06:01'),
(3, 1, 21, 30, 'rrrr', '12:00'),
(3, 1, 21, 31, 'ssss', '18:55'),
(3, 1, 21, 32, 'sds', '17:55'),
(3, 1, 21, 33, 'sddfds', '18:03'),
(3, 1, 21, 34, 'dfsdf', '16:56'),
(3, 1, 21, 35, 'sdfsdf', '19:55'),
(3, 1, 21, 36, 'dsdf', '21:56'),
(3, 1, 21, 37, 'ultimo', '19:56'),
(3, 1, 21, 38, 'aaaa', '06:57'),
(3, 1, 21, 39, 'dd', '07:57'),
(3, 1, 21, 40, 'ddddddddd', '09:57');

-- --------------------------------------------------------

--
-- Estrutura da tabela `rotina_colunas`
--

CREATE TABLE `rotina_colunas` (
  `ID_USUARIO` int(11) NOT NULL,
  `ID_ROTINA` int(11) NOT NULL,
  `ID_COLUNA` int(11) NOT NULL,
  `TITULO_COLUNA` varchar(25) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `rotina_colunas`
--

INSERT INTO `rotina_colunas` (`ID_USUARIO`, `ID_ROTINA`, `ID_COLUNA`, `TITULO_COLUNA`) VALUES
(7, 11, 1, 'Rename'),
(7, 11, 2, 'Rename 2'),
(7, 11, 10, 'teste 3'),
(7, 12, 9, 'teste 1'),
(4, 13, 12, '1 dia'),
(4, 15, 17, 'Coluna 1'),
(4, 13, 14, '3 dia'),
(4, 14, 16, 'teste'),
(4, 15, 19, 'Segunda'),
(3, 1, 21, 'teste'),
(3, 1, 22, 'dddda'),
(10, 29, 25, 'rename column');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_USUARIO` int(11) NOT NULL,
  `APELIDO` varchar(30) COLLATE utf8_bin NOT NULL,
  `EMAIL` varchar(50) COLLATE utf8_bin NOT NULL,
  `SENHA` varchar(50) COLLATE utf8_bin NOT NULL,
  `FIRST_SCHOOL` varchar(30) COLLATE utf8_bin NOT NULL,
  `BEST_FRIEND` varchar(30) COLLATE utf8_bin NOT NULL,
  `MOM` varchar(30) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`ID_USUARIO`, `APELIDO`, `EMAIL`, `SENHA`, `FIRST_SCHOOL`, `BEST_FRIEND`, `MOM`) VALUES
(1, 'testeeeeee', 'teste', '698dc19d489c4e4db73e28a713eab07b', 'teste', 'teste', 'teste'),
(2, 'testeeeeee', 'teste', '698dc19d489c4e4db73e28a713eab07b', 'teste', 'teste', 'teste'),
(3, 'Rafael Sa', 'rafa_gc123@hotmail.com', '202cb962ac59075b964b07152d234b70', 'teste', 'teste', 'teste'),
(4, 'Rafa do DogÃ£o', 'rafaelcachorroquentefoda@gmail.com', 'c2e897ae535d74f6add0c2c4da921406', 'teste', 'teste', 'teste'),
(5, 'Testeeeee', 'cleit@gmail.com', '202cb962ac59075b964b07152d234b70', 'teste', 'teste', 'teste'),
(6, 'Pipocado', 'Panda@gmail.com', '202cb962ac59075b964b07152d234b70', 'teste', 'teste', 'teste'),
(7, 'Teste1234', 'j@hotmail.com', '202cb962ac59075b964b07152d234b70', 'teste', 'teste', 'teste'),
(9, 'Teste_covid', 'ra@gmail.com', '202cb962ac59075b964b07152d234b70', 'teste', 'teste', 'teste'),
(10, 'ceniasmidt_rename', 'ceniasmidt@gmail.com', '202cb962ac59075b964b07152d234b70', 'teste', 'teste', 'teste'),
(11, 'Teste123', 'aaa@hotmail.com', 'c2e897ae535d74f6add0c2c4da921406', 'Massei', 'Thiago', 'Ione');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios_rotinas`
--

CREATE TABLE `usuarios_rotinas` (
  `ID_USUARIO` int(11) NOT NULL,
  `ID_ROTINA` int(11) NOT NULL,
  `TITULO_ROTINA` varchar(36) COLLATE utf8_bin NOT NULL,
  `ROTINA_COR` varchar(12) COLLATE utf8_bin NOT NULL,
  `STATUS` varchar(15) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuarios_rotinas`
--

INSERT INTO `usuarios_rotinas` (`ID_USUARIO`, `ID_ROTINA`, `TITULO_ROTINA`, `ROTINA_COR`, `STATUS`) VALUES
(3, 1, 'CaiÃ£o God', '#5FC2D9', 'active'),
(3, 2, 'Tela 3', '#D91818', 'active'),
(3, 3, 'Tela 3', '#fff', 'disabled'),
(2, 5, 'kgjjh', '#D93B3B', 'active'),
(2, 6, 'asdfasd', '#BF544B', 'active'),
(7, 11, '      Teste 3', '#5FC2D9', 'active'),
(3, 8, 'teste4', '#BF544B', 'disabled'),
(6, 9, 'Matematica', '#F24B59', 'active'),
(6, 10, 'adsfad', '#666CD9', 'active'),
(7, 12, '  Teste 7', '#D91818', 'active'),
(4, 13, ' Teste', '#242259', 'active'),
(4, 14, 'teste2', '#23518C', 'disabled'),
(4, 15, 'matematica', '#D91818', 'active'),
(4, 17, 'ddddddddddddddd', '#fff', 'active'),
(4, 18, 'aaaaaaaaaaaaaaa', '#02734A', 'active'),
(3, 19, 'Teste', '#F24B59', 'disabled'),
(3, 20, 'Teste', '#5FC2D9', 'disabled'),
(3, 21, 'Novo', '#F2AE30', 'active'),
(10, 29, 'rename', '#18D97F', 'active'),
(3, 22, 'sssss', '#242259', 'disabled'),
(3, 23, 'sssss', '#F2AE30', 'disabled'),
(3, 24, 'sssss', '#5FC2D9', 'disabled'),
(3, 25, 'dddddddddddd', '#242259', 'active'),
(3, 26, 'dddddddddd', '#23518C', 'active'),
(3, 27, 'ddddddddddddddd', '#F2AE30', 'disabled'),
(3, 28, 'ddddddddddddddd', '#666CD9', 'disabled');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `colunas_tarefas`
--
ALTER TABLE `colunas_tarefas`
  ADD PRIMARY KEY (`ID_TAREFA`);

--
-- Indexes for table `rotina_colunas`
--
ALTER TABLE `rotina_colunas`
  ADD PRIMARY KEY (`ID_COLUNA`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_USUARIO`);

--
-- Indexes for table `usuarios_rotinas`
--
ALTER TABLE `usuarios_rotinas`
  ADD PRIMARY KEY (`ID_ROTINA`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `colunas_tarefas`
--
ALTER TABLE `colunas_tarefas`
  MODIFY `ID_TAREFA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `rotina_colunas`
--
ALTER TABLE `rotina_colunas`
  MODIFY `ID_COLUNA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID_USUARIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usuarios_rotinas`
--
ALTER TABLE `usuarios_rotinas`
  MODIFY `ID_ROTINA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
