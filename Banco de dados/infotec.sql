-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Out-2020 às 20:11
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `infotec`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes e pedidos`
--

DROP TABLE IF EXISTS `clientes e pedidos`;
CREATE TABLE IF NOT EXISTS `clientes e pedidos` (
  `idcliente` int(11) NOT NULL AUTO_INCREMENT,
  `nomes` varchar(40) COLLATE utf8_bin NOT NULL,
  `endereço` varchar(40) COLLATE utf8_bin NOT NULL,
  `cidade` varchar(40) COLLATE utf8_bin NOT NULL,
  `telefone` varchar(40) COLLATE utf8_bin NOT NULL,
  `numero ou complemento` varchar(50) COLLATE utf8_bin NOT NULL,
  `categoria` varchar(30) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(200) COLLATE utf8_bin NOT NULL,
  `valor unitário em até 12X` decimal(8,2) NOT NULL,
  `Com desconto e a vista` decimal(8,2) NOT NULL,
  `quantidade` int(11) NOT NULL,
  `status` varchar(30) COLLATE utf8_bin DEFAULT NULL,
  PRIMARY KEY (`idcliente`,`descricao`),
  UNIQUE KEY `idcliente_UNIQUE` (`idcliente`),
  UNIQUE KEY `Endereço_UNIQUE` (`endereço`),
  UNIQUE KEY `Telefone_UNIQUE` (`telefone`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `clientes e pedidos`
--

INSERT INTO `clientes e pedidos` (`idcliente`, `nomes`, `endereço`, `cidade`, `telefone`, `numero ou complemento`, `categoria`, `descricao`, `valor unitário em até 12X`, `Com desconto e a vista`, `quantidade`, `status`) VALUES
(1, 'Felipe Alves ', 'Rua A', 'São Paulo', '1111-1111', 'Casa Nº 1', 'Notebook', 'Notebook Acer 15,6 A315-54-53M1 i5 10ª Gen 8GB 1TB+128SSD Linux', '4793.24', '4218.29', 1, 'Em estoque'),
(2, 'João Rodrigues', 'Rua B', 'Rio de Janeiro', '2222-2222', 'Casa Nº 2', 'Notebook', 'Notebook Dell Inspiron i15-3584-DS50P 8ª Geração Intel Core i3 4GB 256GB SSD Tela LED 15.6', '3502.32', '3323.63', 1, 'Em estoque'),
(3, 'Maria De Fátima', 'Rua C', 'São Paulo', '3333-3333', 'Apartamento 1 -  2º Andar', 'Processador Intel', 'Processador Intel Core i9-9900k Coffee Lake Refresh 9a Geração, 3.6GHz', '4235.18', '3882.24', 2, 'Em estoque'),
(4, 'Flávia Marques', 'Rua D', 'São Paulo', '4444-4444', 'Apartamento 2 -  3º Andar', 'Processador AMD', 'Processador AMD Ryzen 7 3800X Cache 32MB 3.9GHz (4.5GHz Max Turbo)', '2999.88', '2549.90', 1, 'Em estoque'),
(5, 'Rosana Silva', 'Rua E', 'Rio de Janeiro', '5555-5555', 'Apartamento 3 -  4º Andar', 'Notebook', 'Notebook Lenovo Ultrafino ideapad S145', '2999.00', '2754.00', 1, 'Em estoque'),
(6, 'Fábio Henrique', 'Rua F', 'Rio de Janeiro', '6666-6666', 'Casa Nº 3', 'Monitor', 'Monitor Gamer Curvo G-sync 34\" Alienware AW3420DW', '9769.00', '9089.00', 1, 'Em estoque'),
(7, 'Mariana Machado', 'Rua G', 'Rio de Janeiro', '7777-7777', 'Casa Nº 4', 'Memória RAM', 'Memória HyperX Predator RGB, 16GB (2x8GB), 2933MHz, DDR4, CL15', '1035.18', '879.90', 3, 'Em estoque');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto`
--

DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `idproduto` int(11) NOT NULL AUTO_INCREMENT,
  `data_inclusao` datetime DEFAULT NULL,
  `categoria` varchar(45) COLLATE utf8_bin NOT NULL,
  `descricao` varchar(200) COLLATE utf8_bin NOT NULL,
  `valor unitário em até 12X` decimal(8,2) NOT NULL,
  `Com desconto e a vista` decimal(8,2) NOT NULL,
  `imagem` varchar(400) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idproduto`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`idproduto`, `data_inclusao`, `categoria`, `descricao`, `valor unitário em até 12X`, `Com desconto e a vista`, `imagem`) VALUES
(1, NULL, 'Notebook', 'Notebook Acer 15,6 A315-54-53M1 i5 10ª Gen 8GB 1TB+128SSD Linux', '4793.24', '4218.29', 'Img/Notebook-Acer.png'),
(2, NULL, 'Notebook', 'Notebook Dell Inspiron i15-3584-DS50P 8ª Geração Intel Core i3 4GB 256GB SSD Tela LED 15.6', '3502.32', '3323.63', 'Img/Notebook-Dell.png'),
(3, NULL, 'Notebook', 'Notebook Lenovo Ultrafino ideapad S145', '2999.00', '2754.00', 'Img/Notebook-Lenovo.png'),
(4, NULL, 'Notebook', 'Notebook S51 NP730XBE-KP1BR Windows 10 Home Intel® Core™ i3-4GB-256GB de SSD-Tela 13.3', '5349.00', '4814.10', 'img/notebook_samsung_new.jpg'),
(5, NULL, 'Notebook', 'Notebook Samsung Book E30 Intel Core i3-10110U 10ª Geração 4GB 1TB 15.6\'\' Windows 10', '3299.00', '3099.00', 'Img/Notebook-Samsung-e30.png'),
(6, NULL, 'Notebook', 'Notebook Gamer Acer NVIDIA GeForce GTX 1650 Core i5-9300H 8GB 1TB 128GB', '5999.00', '5599.00', 'img/notebook_acer_gamer.jpg'),
(7, NULL, 'Notebook', 'Notebook Vaio FE15, Intel Core i5, 8GB RAM, HD 1TB, Tela LCD 15.6\" HD, Windows 10', '4128.00', '3849.00', 'Img/notebook-sony1.jpg'),
(8, NULL, 'Notebook', 'Notebook Samsung Book X50 Intel Core i7-10510U 10ª Geração 8GB, 1TB, Placa de Vídeo 2GB', '5899.00', '4999.00', 'Img/Notebook-Samsung-x50.png'),
(9, NULL, 'Processador', 'Processador Intel Core i9-9900k Coffee Lake Refresh 9a Geração, 3.6GHz', '4235.18', '3882.24', 'Img/core-i9.jpg'),
(10, NULL, 'Processador', 'Processador AMD Ryzen 7 3800X Cache 32MB 3.9GHz (4.5GHz Max Turbo)', '2999.88', '2549.90', 'Img/ryzen-7.jpg'),
(11, NULL, 'Placa de  Vídeo', 'Placa de Vídeo Gigabyte GTX 1660 Super OC NVIDIA Geforce 6G, GDDR6', '2352.82', '1882.24', 'Img/placa-de-video-gtx.jpg'),
(12, NULL, 'Placa de  Vídeo', 'Placa de Vídeo Gigabyte NVIDIA GeForce RTX 2060 OC, 6GB, GDDR6, REV 2.0', '3411.65', '2470.47', 'Img/gtx1660.jpg'),
(13, NULL, 'Placa de  Vídeo', 'Placa de Vídeo Gigabyte AMD Radeon RX 580 Gaming, 8GB, GDDR5', '1882.24', '1481.18', 'Img/amd-radeon.jpg'),
(14, NULL, 'Placa de  Vídeo', 'Placa de Vídeo Gigabyte AMD Radeon RX 5600 XT Gaming OC, 6GB, GDDR6', '2482.24', '2109.90', 'Img/radeon-rx.jpg'),
(15, NULL, 'Memória RAM', 'Memória HyperX Predator RGB, 16GB (2x8GB), 2933MHz, DDR4, CL15', '1035.18', '879.90', 'Img/memoria-ram.jpg'),
(16, NULL, 'Monitor', 'Monitor Gamer Curvo G-sync 34\" Alienware AW3420DW', '9769.00', '9089.00', 'img/monitor_novo.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
