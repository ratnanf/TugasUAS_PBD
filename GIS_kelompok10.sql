/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 100130
 Source Host           : localhost:3307
 Source Schema         : helehh

 Target Server Type    : MySQL
 Target Server Version : 100130
 File Encoding         : 65001

 Date: 13/04/2020 14:30:33
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for admin
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin`  (
  `id_admin` int(11) NOT NULL,
  `nama_admin` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username_admin` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password_admin` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_admin`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for kecamatan
-- ----------------------------
DROP TABLE IF EXISTS `kecamatan`;
CREATE TABLE `kecamatan`  (
  `id_kec` int(11) NOT NULL AUTO_INCREMENT,
  `kode_kec` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_kec` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jumlah_kel` int(11) NULL DEFAULT NULL,
  `jumlah_des` int(11) NULL DEFAULT NULL,
  `longitude` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `latitude` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kec`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kecamatan
-- ----------------------------
INSERT INTO `kecamatan` VALUES (3, '123', 'pedurungan update', 1, 2, '115.160065', '-8.12721');
INSERT INTO `kecamatan` VALUES (4, '13', 'hehe', 3, 2, '115.607758', '-8.469656');
INSERT INTO `kecamatan` VALUES (5, '132318300', 'opo hayo update', 132, 1, '115.18959', '-8.437055');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `produk_id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `product_description` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`produk_id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 22 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (1, 'product 1', 'keterangan product 1');
INSERT INTO `product` VALUES (3, 'eh product 3 udah diedit', 'keterangan product 3 udah diedit loo');
INSERT INTO `product` VALUES (4, 'product 4', 'keterangan product 4');
INSERT INTO `product` VALUES (5, 'product 5', 'keterangan product 5');
INSERT INTO `product` VALUES (6, 'product 6', 'keterangan product 6');
INSERT INTO `product` VALUES (7, 'product 7', 'keterangan product 7');
INSERT INTO `product` VALUES (8, 'product 8', 'keterangan product 8');
INSERT INTO `product` VALUES (9, 'product 9', 'keterangan product 9');
INSERT INTO `product` VALUES (10, 'product 10', 'keterangan product 10');
INSERT INTO `product` VALUES (11, 'product 11', 'keterangan product 11');
INSERT INTO `product` VALUES (12, 'product 12', 'keterangan product 12');
INSERT INTO `product` VALUES (13, 'product 13 lo', 'keterangan product 13 ini sudah diedit');
INSERT INTO `product` VALUES (14, 'product 14', 'keterangan product 14');
INSERT INTO `product` VALUES (15, 'product 15', 'keterangan product 15');
INSERT INTO `product` VALUES (16, 'product 16', 'keterangan product 16');
INSERT INTO `product` VALUES (17, 'product 17', 'keterangan product 17');
INSERT INTO `product` VALUES (18, 'product 18', 'keterangan product 18');
INSERT INTO `product` VALUES (19, 'ini produk', 'ini deskripsi produk');
INSERT INTO `product` VALUES (20, 'halah', 'heleh');
INSERT INTO `product` VALUES (21, 'po jal', 'jajal tok ki');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `username_user` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password_user` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_kec` int(11) NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE,
  INDEX `id_kec`(`id_kec`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Compact;

SET FOREIGN_KEY_CHECKS = 1;
