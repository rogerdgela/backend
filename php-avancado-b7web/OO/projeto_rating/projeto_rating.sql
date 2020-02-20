# ************************************************************
# Sequel Pro SQL dump
# Versão 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.5.42)
# Base de Dados: projeto_rating
# Tempo de Geração: 2017-08-03 12:54:11 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump da tabela filmes
# ------------------------------------------------------------

DROP TABLE IF EXISTS `filmes`;

CREATE TABLE `filmes` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) DEFAULT NULL,
  `media` float DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `filmes` WRITE;
/*!40000 ALTER TABLE `filmes` DISABLE KEYS */;

INSERT INTO `filmes` (`id`, `titulo`, `media`)
VALUES
	(1,'Esqueceram de Mim',2.75),
	(2,'Lost',3.33333),
	(3,'Suits',3.25);

/*!40000 ALTER TABLE `filmes` ENABLE KEYS */;
UNLOCK TABLES;


# Dump da tabela votos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `votos`;

CREATE TABLE `votos` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `id_filme` int(11) DEFAULT NULL,
  `nota` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `votos` WRITE;
/*!40000 ALTER TABLE `votos` DISABLE KEYS */;

INSERT INTO `votos` (`id`, `id_filme`, `nota`)
VALUES
	(1,1,3),
	(2,1,5),
	(3,1,1),
	(4,1,2),
	(5,2,5),
	(6,2,1),
	(7,2,4),
	(8,3,2),
	(9,3,4),
	(10,3,4),
	(11,3,3);

/*!40000 ALTER TABLE `votos` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
