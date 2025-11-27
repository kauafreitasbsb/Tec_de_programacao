-- CRIAÇÃO DO BANCO DE DADOS (Resolve erro #1046)
CREATE DATABASE IF NOT EXISTS `sapato` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `sapato`;

-- TABELA CLIENTE (Corrigida e limpa)
CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nome_cliente` varchar(100) DEFAULT NULL,
  `cpf_cliente` char(11) DEFAULT NULL,
  `telefone_cliente` varchar(20) DEFAULT NULL,
  `email_cliente` varchar(100) DEFAULT NULL,
  `endereco_cliente` varchar(100) DEFAULT NULL,
  `dt_nasc_cliente` date DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `cliente` (`id_cliente`, `nome_cliente`, `cpf_cliente`, `telefone_cliente`, `email_cliente`, `endereco_cliente`, `dt_nasc_cliente`) VALUES
(1, 'Kauã Victor Da Silva Freitas', '09181019300', '61994023503', 'kauavfreitas@gmail.com', 'Q 105 conj 10 lote 13', '2006-03-18');


-- TABELA MARCA
CREATE TABLE `marca` (
  `id_marca` int(10) UNSIGNED NOT NULL,
  `nome_marca` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id_marca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `marca` (`id_marca`, `nome_marca`) VALUES
(1, 'NIKE');


-- TABELA MODELO (Com as correções de 'preco_modelo' e 'tamanho_modelo')
CREATE TABLE `modelo` (
  `id_modelo` int(10) UNSIGNED NOT NULL,
  `marca_id_marca` int(10) UNSIGNED NOT NULL,
  `nome_modelo` varchar(45) DEFAULT NULL,
  `cor_modelo` varchar(20) DEFAULT NULL,
  `categoria_modelo` varchar(45) DEFAULT NULL,
  `genero_modelo` varchar(45) DEFAULT NULL,
  `preco_modelo` decimal(10,2) NOT NULL, 
  `tamanho_modelo` int(11) DEFAULT NULL, -- Agora pode ser NULL
  PRIMARY KEY (`id_modelo`),
  KEY `modelo_FKIndex1` (`marca_id_marca`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- TABELA VENDEDOR
CREATE TABLE `vendedor` (
  `id_vendedor` int(11) NOT NULL,
  `nome_vendedor` varchar(100) DEFAULT NULL,
  `telefone_vendedor` varchar(20) DEFAULT NULL,
  `email_vendedor` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_vendedor`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `vendedor` (`id_vendedor`, `nome_vendedor`, `telefone_vendedor`, `email_vendedor`) VALUES
(1, 'Alison Emanoel Pacheco', '61986440625', 'alisonfreitas.sk@hotmail.com');


-- TABELA VENDA
CREATE TABLE `venda` (
  `id_venda` int(11) NOT NULL,
  `data_venda` date DEFAULT NULL,
  `valor_venda` decimal(10,2) DEFAULT NULL,
  `vendedor_id_vendedor` int(11) DEFAULT NULL,
  `cliente_id_cliente` int(11) DEFAULT NULL,
  `modelo_id_modelo` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`id_venda`),
  KEY `vendedor_id_vendedor` (`vendedor_id_vendedor`),
  KEY `cliente_id_cliente` (`cliente_id_cliente`),
  KEY `modelo_id_modelo` (`modelo_id_modelo`),
  CONSTRAINT `venda_ibfk_1` FOREIGN KEY (`vendedor_id_vendedor`) REFERENCES `vendedor` (`id_vendedor`),
  CONSTRAINT `venda_ibfk_2` FOREIGN KEY (`cliente_id_cliente`) REFERENCES `cliente` (`id_cliente`),
  CONSTRAINT `venda_ibfk_3` FOREIGN KEY (`modelo_id_modelo`) REFERENCES `modelo` (`id_modelo`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- AUTO_INCREMENTS
ALTER TABLE `cliente` MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `marca` MODIFY `id_marca` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
ALTER TABLE `modelo` MODIFY `id_modelo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
ALTER TABLE `venda` MODIFY `id_venda` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `vendedor` MODIFY `id_vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

COMMIT;