-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para db_tai
CREATE DATABASE IF NOT EXISTS `db_tai` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;
USE `db_tai`;

-- Copiando estrutura para tabela db_tai.tb_alunos
CREATE TABLE IF NOT EXISTS `tb_alunos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `curso` varchar(100) COLLATE utf8mb4_bin NOT NULL,
  `turma` varchar(80) COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- Copiando dados para a tabela db_tai.tb_alunos: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `tb_alunos` DISABLE KEYS */;
INSERT INTO `tb_alunos` (`id`, `nome`, `curso`, `turma`) VALUES
	(1, 'MARCOS3', 'INFORMÁTICA - EMI', 'INFO14'),
	(3, 'Maria', 'INFORMÁTICA - TAI', 'INFO6'),
	(5, 'FABRICIO', 'TESTE CURSO ATIVIDADE DER', '11'),
	(9, 'Chiquinha', 'Técnico em informática', 'INFO02'),
	(10, 'kiko3', 'Redes2', 'INFO06_'),
	(13, 'fabricio2', 'Teste Curso Atividade DER', '11'),
	(14, 'teste2', 'Teste Curso Atividade DER2', '1122'),
	(16, 'MARCOS2', 'Redes2', '11'),
	(17, 'fabricio4', 'Teste Curso Atividade DER', 'INFO14');
/*!40000 ALTER TABLE `tb_alunos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
