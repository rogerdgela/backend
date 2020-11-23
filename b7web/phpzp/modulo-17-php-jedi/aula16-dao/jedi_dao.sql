/*
 Navicat Premium Data Transfer

 Source Server         : LocalMysql
 Source Server Type    : MySQL
 Source Server Version : 80018
 Source Host           : localhost:3306
 Source Schema         : jedi_dao

 Target Server Type    : MySQL
 Target Server Version : 80018
 File Encoding         : 65001

 Date: 23/11/2020 19:15:24
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for usuario
-- ----------------------------
DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  `pass` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuario
-- ----------------------------
INSERT INTO `usuario` VALUES (1, 'teste', 'tete', '12365');
INSERT INTO `usuario` VALUES (2, 'Teste de rogerio', 'dgeka@gmail.com', '202cb962ac59075b964b07152d234b70');
INSERT INTO `usuario` VALUES (3, 'Teste de rogerio', 'dgeka@gmail.com', '202cb962ac59075b964b07152d234b70');
INSERT INTO `usuario` VALUES (4, 'Teste de rogerio', 'dgeka@gmail.com', '202cb962ac59075b964b07152d234b70');
INSERT INTO `usuario` VALUES (5, 'Teste', 'dge@gmail.com', '202cb962ac59075b964b07152d234b70');

SET FOREIGN_KEY_CHECKS = 1;
