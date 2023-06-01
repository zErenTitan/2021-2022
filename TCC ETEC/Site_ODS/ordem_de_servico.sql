-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 01-Fev-2021 às 19:06
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
-- Banco de dados: `ordem_de_servico`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `administrador`
--

DROP TABLE IF EXISTS `administrador`;
CREATE TABLE IF NOT EXISTS `administrador` (
  `cod_adm` int(11) NOT NULL AUTO_INCREMENT,
  `adm_email` varchar(50) DEFAULT NULL,
  `adm_senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`cod_adm`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `administrador`
--

INSERT INTO `administrador` (`cod_adm`, `adm_email`, `adm_senha`) VALUES
(1, 'eduardo@eduardo.com', 'eduardo1234');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `cli_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `cli_nome` varchar(12) NOT NULL,
  `cli_nascimento` date NOT NULL,
  `cpf` varchar(14) NOT NULL DEFAULT '###.###.###-##',
  `cli_rg` varchar(12) NOT NULL,
  `cli_cnpj` varchar(18) DEFAULT NULL,
  `cli_cel` varchar(13) NOT NULL,
  `cli_tel_fixo` varchar(12) DEFAULT NULL,
  `cep` varchar(9) NOT NULL,
  `cli_rua` varchar(50) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `cli_numero_casa` varchar(5) NOT NULL,
  `cli_bairro` varchar(100) NOT NULL,
  `cidade` varchar(50) NOT NULL,
  PRIMARY KEY (`cli_codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`cli_codigo`, `cli_nome`, `cli_nascimento`, `cpf`, `cli_rg`, `cli_cnpj`, `cli_cel`, `cli_tel_fixo`, `cep`, `cli_rua`, `uf`, `cli_numero_casa`, `cli_bairro`, `cidade`) VALUES
(1, 'Eduardo', '2003-03-18', '1', ' 1', '', '1699999999', '1632323232', '18978652', 'Avenida Joao Batista ', 'SP', '123', 'Centro', 'Jaboticabal'),
(2, 'Pablo', '1993-04-28', '2', '  000000000', '', '1699999999', '1633333333', '15930000', 'Rua Alagoas  ', 'SP', '253', 'Centro', 'Cândido Rodrigues'),
(4, 'Lúcia', '1967-05-02', '4', ' 556541349', '', '16965874563', '1632031587', '14887008', 'Avenida Capitão Alberto Mendes Júnior ', 'SP', '789', 'Nova Jaboticabal', 'Jaboticabal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `entrada`
--

DROP TABLE IF EXISTS `entrada`;
CREATE TABLE IF NOT EXISTS `entrada` (
  `entrada_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `entrada_data` date DEFAULT NULL,
  `entrada_valor` decimal(6,2) DEFAULT NULL,
  PRIMARY KEY (`entrada_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

DROP TABLE IF EXISTS `funcionario`;
CREATE TABLE IF NOT EXISTS `funcionario` (
  `funci_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `funci_nome` varchar(50) DEFAULT NULL,
  `funci_rg` varchar(12) DEFAULT NULL,
  `funci_cpf` varchar(14) DEFAULT NULL,
  `funci_email` varchar(25) DEFAULT NULL,
  PRIMARY KEY (`funci_codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`funci_codigo`, `funci_nome`, `funci_rg`, `funci_cpf`, `funci_email`) VALUES
(1, 'Eduardo', '554202487', '37800368866', 'eduardo18330@gmail.com'),
(2, 'Pablo', '34555555555', '31231231200', 'pablo@pablo.com'),
(3, 'Luís da Silva', '9999999999', '99999999999', 'luis_da_silva@gmail.com');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ord_de_serv`
--

DROP TABLE IF EXISTS `ord_de_serv`;
CREATE TABLE IF NOT EXISTS `ord_de_serv` (
  `ord_de_serv_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `ord_de_serv_cli_codigo` int(11) DEFAULT NULL,
  `ord_de_serv_funci_codigo` int(11) DEFAULT NULL,
  `ord_de_serv_cod_entrada` int(11) DEFAULT NULL,
  `ord_de_serv_data` varchar(10) DEFAULT NULL,
  `ord_de_serv_data_saida` varchar(10) DEFAULT NULL,
  `placa_veiculo1` varchar(3) DEFAULT NULL,
  `placa_veiculo2` varchar(4) DEFAULT NULL,
  `modelo` varchar(15) DEFAULT NULL,
  `marca` varchar(40) DEFAULT NULL,
  `ano` varchar(4) DEFAULT NULL,
  `ana_mec` varchar(500) DEFAULT NULL,
  `garantia` varchar(500) DEFAULT NULL,
  `observacoes` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`ord_de_serv_codigo`),
  KEY `ord_de_serv_cli_codigo` (`ord_de_serv_cli_codigo`),
  KEY `ord_de_serv_funci_codigo` (`ord_de_serv_funci_codigo`),
  KEY `ord_de_serv_cod_entrada` (`ord_de_serv_cod_entrada`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ord_de_serv`
--

INSERT INTO `ord_de_serv` (`ord_de_serv_codigo`, `ord_de_serv_cli_codigo`, `ord_de_serv_funci_codigo`, `ord_de_serv_cod_entrada`, `ord_de_serv_data`, `ord_de_serv_data_saida`, `placa_veiculo1`, `placa_veiculo2`, `modelo`, `marca`, `ano`, `ana_mec`, `garantia`, `observacoes`) VALUES
(1, 1, 3, 469, '03/12/2020', '', 'BRA', '2070', 'Biz', 'Honda', '2012', 'Colisão', '3 meses', ''),
(2, 4, NULL, NULL, '03/12/2020', NULL, 'BRA', '2070', 'Biz', 'Honda', '2020', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `ord_de_serv_produtos`
--

DROP TABLE IF EXISTS `ord_de_serv_produtos`;
CREATE TABLE IF NOT EXISTS `ord_de_serv_produtos` (
  `prod_codigo` int(11) NOT NULL,
  `ord_de_serv_codigo` int(11) NOT NULL,
  `quantidade` int(3) NOT NULL,
  PRIMARY KEY (`prod_codigo`,`ord_de_serv_codigo`),
  KEY `ord_de_serv_codigo` (`ord_de_serv_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ord_de_serv_servicos`
--

DROP TABLE IF EXISTS `ord_de_serv_servicos`;
CREATE TABLE IF NOT EXISTS `ord_de_serv_servicos` (
  `ord_de_serv_codigo` int(11) NOT NULL,
  `serv_codigo` int(11) NOT NULL,
  PRIMARY KEY (`ord_de_serv_codigo`,`serv_codigo`),
  KEY `serv_codigo` (`serv_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `prod_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `prod_nome` varchar(40) DEFAULT NULL,
  `prod_descricao` varchar(20) DEFAULT NULL,
  `prod_valor_unit` decimal(5,2) DEFAULT NULL,
  `prod_qtd` int(11) DEFAULT NULL,
  PRIMARY KEY (`prod_codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`prod_codigo`, `prod_nome`, `prod_descricao`, `prod_valor_unit`, `prod_qtd`) VALUES
(1, 'Pneu Aro 14', 'Pirelli', '280.00', 20),
(2, 'Escapamento Original', 'Honda', '147.00', NULL),
(3, 'Guidão ', 'Honda', '242.00', NULL),
(4, 'Capinha de Celular', 'AAA', '10.00', 50);

-- --------------------------------------------------------

--
-- Estrutura da tabela `saida`
--

DROP TABLE IF EXISTS `saida`;
CREATE TABLE IF NOT EXISTS `saida` (
  `saida_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `funci_codigo` int(11) NOT NULL,
  `saida_valor` decimal(5,2) DEFAULT NULL,
  `saida_data` date DEFAULT NULL,
  PRIMARY KEY (`saida_codigo`),
  KEY `funci_codigo` (`funci_codigo`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `servicos`
--

DROP TABLE IF EXISTS `servicos`;
CREATE TABLE IF NOT EXISTS `servicos` (
  `serv_codigo` int(11) NOT NULL AUTO_INCREMENT,
  `serv_nome` varchar(20) DEFAULT NULL,
  `serv_descricao` varchar(100) DEFAULT NULL,
  `serv_valor` decimal(4,2) DEFAULT NULL,
  PRIMARY KEY (`serv_codigo`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `servicos`
--

INSERT INTO `servicos` (`serv_codigo`, `serv_nome`, `serv_descricao`, `serv_valor`) VALUES
(1, 'Troca de Óleo', NULL, '50.25'),
(2, 'Troca / Substituição', 'Escapamento', '79.90'),
(3, 'Troca / Substituição', 'Guidão', '69.90');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
