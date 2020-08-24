/*
 Navicat Premium Data Transfer

 Source Server         : LocalMysql
 Source Server Type    : MySQL
 Source Server Version : 80018
 Source Host           : localhost:3306
 Source Schema         : classificados

 Target Server Type    : MySQL
 Target Server Version : 80018
 File Encoding         : 65001

 Date: 24/08/2020 14:45:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for anuncios
-- ----------------------------
DROP TABLE IF EXISTS `anuncios`;
CREATE TABLE `anuncios`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `titulo` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `descricao` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `valor` float NULL DEFAULT NULL,
  `estado` int(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of anuncios
-- ----------------------------
INSERT INTO `anuncios` VALUES (2, 1, 3, 'Tênis Adicas Run falcon', 'foda em puts', 30, 1);
INSERT INTO `anuncios` VALUES (3, 1, 5, 'Porcshe', 'Que carro em', 100, 1);
INSERT INTO `anuncios` VALUES (4, 1, 4, 'Blusa de Moleton DGK', 'blusa em moleton', 150, 2);

-- ----------------------------
-- Table structure for anuncios_imagens
-- ----------------------------
DROP TABLE IF EXISTS `anuncios_imagens`;
CREATE TABLE `anuncios_imagens`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_anuncio` int(11) NOT NULL,
  `url` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 9 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of anuncios_imagens
-- ----------------------------
INSERT INTO `anuncios_imagens` VALUES (3, 2, 'aeceab6988cbef9f1d48ee05c9b083f8.jpg');
INSERT INTO `anuncios_imagens` VALUES (4, 2, '3ab6d2a07e3c11c5a0b9efa0bfc41dc6.jpg');
INSERT INTO `anuncios_imagens` VALUES (6, 3, 'd694e67228f31eea729ce571c567525f.jpg');
INSERT INTO `anuncios_imagens` VALUES (7, 3, '09a3c74fe92fe7b4a457e383e8d4d5b6.jpg');
INSERT INTO `anuncios_imagens` VALUES (8, 4, '5524f7b24c014071a73c3b68c91248d9.jpg');

-- ----------------------------
-- Table structure for categorias
-- ----------------------------
DROP TABLE IF EXISTS `categorias`;
CREATE TABLE `categorias`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of categorias
-- ----------------------------
INSERT INTO `categorias` VALUES (1, 'Rélogios');
INSERT INTO `categorias` VALUES (2, 'Eletrônicos');
INSERT INTO `categorias` VALUES (3, 'Calçados');
INSERT INTO `categorias` VALUES (4, 'Roupas');
INSERT INTO `categorias` VALUES (5, 'Carros');

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `senha` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telefone` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'rogerio', 'dgelask8@gmail.com', '202cb962ac59075b964b07152d234b70', '999999');

SET FOREIGN_KEY_CHECKS = 1;
