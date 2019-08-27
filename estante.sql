-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.1.38-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para acervo
CREATE DATABASE IF NOT EXISTS `acervo` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `acervo`;

-- Copiando estrutura para tabela acervo.livros
CREATE TABLE IF NOT EXISTS `livros` (
  `CODIGO` int(10) NOT NULL AUTO_INCREMENT,
  `TITULO` varchar(200) NOT NULL DEFAULT '0',
  `AUTOR` varchar(50) NOT NULL DEFAULT '0',
  `EDITORA` varchar(50) NOT NULL DEFAULT '0',
  `EDICAO` varchar(50) NOT NULL DEFAULT '0',
  `INFORMACAO` varchar(1024) NOT NULL DEFAULT '0',
  `ANO` date DEFAULT NULL,
  `LINK` varchar(50) NOT NULL,
  PRIMARY KEY (`CODIGO`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

-- Exportação de dados foi desmarcado.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
