/*
 Navicat Premium Data Transfer

 Source Server         : Localhost
 Source Server Type    : MySQL
 Source Server Version : 80018
 Source Host           : localhost:3306
 Source Schema         : twitter

 Target Server Type    : MySQL
 Target Server Version : 80018
 File Encoding         : 65001

 Date: 21/06/2021 20:21:05
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `data_post` datetime(0) NOT NULL,
  `mensagem` text CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 2 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES (1, 1, '2021-06-21 19:36:25', 'Teste de mensagem');
INSERT INTO `posts` VALUES (2, 1, '2021-06-21 19:47:33', 'Teste de mensagem');
INSERT INTO `posts` VALUES (3, 2, '2021-06-21 19:48:18', 'Teste de mensagem');
INSERT INTO `posts` VALUES (41, 2, '2021-06-21 20:17:47', 'foda');
INSERT INTO `posts` VALUES (40, 1, '2021-06-21 20:15:45', 'foda');
INSERT INTO `posts` VALUES (39, 3, '2021-06-21 20:15:33', 'Rogeri');
INSERT INTO `posts` VALUES (38, 3, '2021-06-21 20:11:49', 'Rogeri');

-- ----------------------------
-- Table structure for relacionamentos
-- ----------------------------
DROP TABLE IF EXISTS `relacionamentos`;
CREATE TABLE `relacionamentos`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_seguidor` int(11) NOT NULL,
  `id_seguido` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 6 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Fixed;

-- ----------------------------
-- Records of relacionamentos
-- ----------------------------
INSERT INTO `relacionamentos` VALUES (4, 2, 1);
INSERT INTO `relacionamentos` VALUES (3, 1, 3);
INSERT INTO `relacionamentos` VALUES (5, 2, 3);
INSERT INTO `relacionamentos` VALUES (6, 1, 2);

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `senha` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 4 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'rogerio', 'rogerio@gmail.com', 'e206a54e97690cce50cc872dd70ee896');
INSERT INTO `usuarios` VALUES (2, 'Teste', 'dgelacc@gmail.com', '2510547bee6db5d7a54ac18f49ba20a6');
INSERT INTO `usuarios` VALUES (3, 'teste04', 'teste04@gmail.com', '2510547bee6db5d7a54ac18f49ba20a6');

SET FOREIGN_KEY_CHECKS = 1;
