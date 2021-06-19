/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100416
 Source Host           : localhost:3306
 Source Schema         : thuctaptotnghiep

 Target Server Type    : MySQL
 Target Server Version : 100416
 File Encoding         : 65001

 Date: 08/05/2021 11:44:45
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for category
-- ----------------------------
DROP TABLE IF EXISTS `category`;
CREATE TABLE `category`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(10) UNSIGNED NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `_lft` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `_rgt` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `category__lft__rgt_parent_id_index`(`_lft`, `_rgt`, `parent_id`) USING BTREE,
  INDEX `parent_id`(`parent_id`) USING BTREE,
  CONSTRAINT `category_ibfk_1` FOREIGN KEY (`parent_id`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 42 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of category
-- ----------------------------
INSERT INTO `category` VALUES (15, 'Nam', NULL, 1, 'nam', 1, 16, '2021-04-30 13:30:57', '2021-04-30 13:30:57');
INSERT INTO `category` VALUES (16, 'Nữ', NULL, 1, 'nu', 17, 30, '2021-04-30 13:31:01', '2021-04-30 13:31:01');
INSERT INTO `category` VALUES (17, 'Phụ kiện', NULL, 1, 'phu-kien', 31, 44, '2021-04-30 13:31:05', '2021-04-30 13:31:05');
INSERT INTO `category` VALUES (18, 'Trẻ em', NULL, 1, 'tre-em', 45, 52, '2021-04-30 13:31:20', '2021-04-30 13:31:20');
INSERT INTO `category` VALUES (19, 'Quần Nam', 15, 1, 'quan-nam', 2, 7, '2021-04-30 13:31:34', '2021-04-30 13:31:34');
INSERT INTO `category` VALUES (20, 'Áo Nam', 15, 1, 'ao-nam', 8, 15, '2021-04-30 13:31:41', '2021-04-30 13:31:41');
INSERT INTO `category` VALUES (21, 'Quần Nữ', 16, 1, 'quan-nu', 18, 23, '2021-04-30 13:31:48', '2021-04-30 13:31:48');
INSERT INTO `category` VALUES (22, 'Áo Nữ', 16, 1, 'ao-nu', 24, 29, '2021-04-30 13:31:58', '2021-04-30 13:31:58');
INSERT INTO `category` VALUES (23, 'Quần', 18, 1, 'quan', 46, 47, '2021-04-30 13:32:11', '2021-04-30 13:32:11');
INSERT INTO `category` VALUES (24, 'Áo', 18, 1, 'ao', 48, 49, '2021-04-30 13:32:15', '2021-04-30 13:32:15');
INSERT INTO `category` VALUES (25, 'Đồ bộ', 18, 1, 'do-bo', 50, 51, '2021-04-30 13:32:23', '2021-04-30 13:32:24');
INSERT INTO `category` VALUES (26, 'Quần Jeans Nam', 19, 1, 'quan-jeans', 3, 4, '2021-04-30 13:41:37', '2021-04-30 13:41:37');
INSERT INTO `category` VALUES (27, 'Quần Short Nam', 19, 1, 'quan-short', 5, 6, '2021-04-30 13:41:45', '2021-04-30 13:41:45');
INSERT INTO `category` VALUES (28, 'Áo Thun Nam', 20, 1, 'ao-thun', 9, 10, '2021-04-30 13:41:57', '2021-04-30 13:41:57');
INSERT INTO `category` VALUES (29, 'Áo Thun Nữ', 22, 1, 'ao-thun-2', 25, 26, '2021-04-30 13:42:09', '2021-04-30 13:42:09');
INSERT INTO `category` VALUES (30, 'Áo Khoác Nam', 20, 1, 'ao-khoac-nam', 11, 12, '2021-04-30 13:43:11', '2021-04-30 13:43:11');
INSERT INTO `category` VALUES (31, 'Áo Khoác Nữ', 22, 1, 'ao-khoac-nu', 27, 28, '2021-04-30 13:43:25', '2021-04-30 13:43:25');
INSERT INTO `category` VALUES (34, 'Phụ kiện Nam', 17, 1, 'nam-2', 36, 39, '2021-04-30 13:49:08', '2021-04-30 13:49:08');
INSERT INTO `category` VALUES (35, 'Ví', 34, 1, 'vi', 37, 38, '2021-04-30 13:49:22', '2021-04-30 13:49:22');
INSERT INTO `category` VALUES (36, 'Phụ kiện Nữ', 17, 1, 'phu-kien-nu', 40, 43, '2021-04-30 13:50:29', '2021-04-30 13:50:29');
INSERT INTO `category` VALUES (37, 'Váy', 21, 1, 'vay', 19, 20, '2021-05-01 07:50:47', '2021-05-01 07:50:47');
INSERT INTO `category` VALUES (38, 'Quần Jeans Nữ', 21, 1, 'quan-jeans-nu', 21, 22, '2021-05-01 07:51:00', '2021-05-01 07:51:00');
INSERT INTO `category` VALUES (39, 'Túi Sách', 36, 1, 'tui-sach', 41, 42, '2021-05-01 07:51:39', '2021-05-01 07:51:39');
INSERT INTO `category` VALUES (40, 'Áo Sơ mi Nam', 20, 1, 'ao-so-mi-nam', 13, 14, '2021-05-01 15:42:52', '2021-05-01 15:42:52');

-- ----------------------------
-- Table structure for color
-- ----------------------------
DROP TABLE IF EXISTS `color`;
CREATE TABLE `color`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `code` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `productid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `color_ibfk_1`(`productid`) USING BTREE,
  CONSTRAINT `color_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 105 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of color
-- ----------------------------
INSERT INTO `color` VALUES (96, 'Trắng', '#f2f2f2', 58, '2021-05-06 02:57:01', '2021-05-06 02:57:01');
INSERT INTO `color` VALUES (97, 'Xanh', '#9dc4dd', 59, '2021-05-06 02:57:45', '2021-05-06 02:57:45');
INSERT INTO `color` VALUES (98, 'Vàng', '#c2cf63', 60, '2021-05-06 02:58:59', '2021-05-06 02:58:59');
INSERT INTO `color` VALUES (99, 'Đen', '#1a1a19', 61, '2021-05-06 02:59:35', '2021-05-06 02:59:35');
INSERT INTO `color` VALUES (100, 'Trắng', '#e8e8e3', 62, '2021-05-06 03:00:22', '2021-05-06 03:00:22');
INSERT INTO `color` VALUES (101, 'Xanh', '#33d192', 63, '2021-05-06 03:04:39', '2021-05-06 03:04:39');
INSERT INTO `color` VALUES (102, 'Vàng', '#e3e63d', 64, '2021-05-06 03:09:10', '2021-05-06 03:09:10');
INSERT INTO `color` VALUES (103, 'Xanh nhạt', '#4f6d65', 65, '2021-05-06 03:09:46', '2021-05-06 03:09:46');
INSERT INTO `color` VALUES (104, 'Xanh nhạt', '#1e1f1f', 66, '2021-05-06 03:10:26', '2021-05-06 03:10:26');

-- ----------------------------
-- Table structure for comments
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `text` text CHARACTER SET utf8 COLLATE utf8_general_ci NULL,
  `usersid` int(10) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `FKcomments947971`(`usersid`) USING BTREE,
  CONSTRAINT `FKcomments947971` FOREIGN KEY (`usersid`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `usersid` int(10) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `FKCustomer288255`(`usersid`) USING BTREE,
  CONSTRAINT `FKCustomer288255` FOREIGN KEY (`usersid`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for employees
-- ----------------------------
DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `avatar` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `usersid` int(10) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `FKEmployees289058`(`usersid`) USING BTREE,
  CONSTRAINT `FKEmployees289058` FOREIGN KEY (`usersid`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for image
-- ----------------------------
DROP TABLE IF EXISTS `image`;
CREATE TABLE `image`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `imageable_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `imageable_id`(`imageable_id`) USING BTREE,
  CONSTRAINT `image_ibfk_1` FOREIGN KEY (`imageable_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 76 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of image
-- ----------------------------
INSERT INTO `image` VALUES (67, '[\"60935afe31fd3.jpg\",\"60935afe505f6.jpg\"]', 'http://127.0.0.18000/images/product/60935afe505f6.jpg', 58, '2021-05-06 02:57:02', '2021-05-06 02:57:02');
INSERT INTO `image` VALUES (68, '[\"60935b2a1fc4f.jpg\",\"60935b2a212c1.jpg\"]', 'http://127.0.0.18000/images/product/60935b2a212c1.jpg', 59, '2021-05-06 02:57:46', '2021-05-06 02:57:46');
INSERT INTO `image` VALUES (69, '[\"60935b745c247.jpg\"]', 'http://127.0.0.18000/images/product/60935b745c247.jpg', 60, '2021-05-06 02:59:00', '2021-05-06 02:59:00');
INSERT INTO `image` VALUES (70, '[\"60935b97bee6d.jpg\",\"60935b97c066b.jpg\"]', 'http://127.0.0.18000/images/product/60935b97c066b.jpg', 61, '2021-05-06 02:59:35', '2021-05-06 02:59:35');
INSERT INTO `image` VALUES (71, '[\"60935bc6e9c47.jpg\",\"60935bc6eb236.jpg\"]', 'http://127.0.0.18000/images/product/60935bc6eb236.jpg', 62, '2021-05-06 03:00:22', '2021-05-06 03:00:22');
INSERT INTO `image` VALUES (72, '[\"60935cc789b3f.jpg\",\"60935cc78bd52.jpg\"]', 'http://127.0.0.18000/images/product/60935cc78bd52.jpg', 63, '2021-05-06 03:04:39', '2021-05-06 03:04:39');
INSERT INTO `image` VALUES (73, '[\"60935dd642219.jpg\",\"60935dd64470e.jpg\"]', 'http://127.0.0.18000/images/product/60935dd64470e.jpg', 64, '2021-05-06 03:09:10', '2021-05-06 03:09:10');
INSERT INTO `image` VALUES (74, '[\"60935dfb233f1.jpg\",\"60935dfb254d6.gif\",\"60935dfb26de2.jpg\"]', 'http://127.0.0.18000/images/product/60935dfb26de2.jpg', 65, '2021-05-06 03:09:47', '2021-05-06 03:09:47');
INSERT INTO `image` VALUES (75, '[\"60935e2253832.jpg\"]', 'http://127.0.0.18000/images/product/60935e2253832.jpg', 66, '2021-05-06 03:10:26', '2021-05-06 03:10:26');

-- ----------------------------
-- Table structure for invoice
-- ----------------------------
DROP TABLE IF EXISTS `invoice`;
CREATE TABLE `invoice`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(11) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `supplierid` int(10) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `FKinvoice628448`(`supplierid`) USING BTREE,
  CONSTRAINT `FKinvoice628448` FOREIGN KEY (`supplierid`) REFERENCES `supplier` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for invoice_product
-- ----------------------------
DROP TABLE IF EXISTS `invoice_product`;
CREATE TABLE `invoice_product`  (
  `invoiceid` int(10) NOT NULL,
  `productid` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`invoiceid`, `productid`) USING BTREE,
  INDEX `productid`(`productid`) USING BTREE,
  CONSTRAINT `FKinvoice_pr324434` FOREIGN KEY (`invoiceid`) REFERENCES `invoice` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `invoice_product_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (1, '2021_04_28_093109_create_category_table', 1);
INSERT INTO `migrations` VALUES (2, '2021_04_30_161843_update_color_table', 2);
INSERT INTO `migrations` VALUES (3, '2021_04_30_183310_create_image_table', 3);
INSERT INTO `migrations` VALUES (4, '2021_04_30_191037_update_size_table', 4);
INSERT INTO `migrations` VALUES (5, '2021_05_01_024556_create_product_table', 5);
INSERT INTO `migrations` VALUES (6, '2021_05_01_030041_create_promote_table', 6);

-- ----------------------------
-- Table structure for order
-- ----------------------------
DROP TABLE IF EXISTS `order`;
CREATE TABLE `order`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `total` double NOT NULL,
  `Customerid` int(10) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `FKorder111461`(`Customerid`) USING BTREE,
  CONSTRAINT `FKorder111461` FOREIGN KEY (`Customerid`) REFERENCES `customer` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for order_product
-- ----------------------------
DROP TABLE IF EXISTS `order_product`;
CREATE TABLE `order_product`  (
  `orderid` int(10) NOT NULL,
  `productid` int(10) UNSIGNED NOT NULL,
  `single_price` double NOT NULL,
  `amount` int(10) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`orderid`, `productid`) USING BTREE,
  INDEX `productid`(`productid`) USING BTREE,
  CONSTRAINT `FKorder_prod668262` FOREIGN KEY (`orderid`) REFERENCES `order` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `order_product_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `discount` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `url` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoryid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  `shortdecription` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `name`(`name`) USING BTREE,
  INDEX `categoryid`(`categoryid`) USING BTREE,
  CONSTRAINT `product_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `category` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 67 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (58, 'Áo sơ mi phong cách mát mẻ  #01', 350000, '-10%', 'Đẹp mát mẻ phong cách', 1, 'ao-so-mi-phong-cach-mat-me-01', 40, '2021-05-06 02:57:01', '2021-05-06 02:57:01', NULL);
INSERT INTO `product` VALUES (59, 'Áo sơ mi phong cách mát mẻ  #02', 350000, '-10%', 'Đẹp mát mẻ phong cách', 1, 'ao-so-mi-phong-cach-mat-me-02', 40, '2021-05-06 02:57:45', '2021-05-06 02:57:45', NULL);
INSERT INTO `product` VALUES (60, 'Áo thun chào hè #01', 250000, '-10%', 'Mát mẻ', 1, 'ao-thun-chao-he-01', 28, '2021-05-06 02:58:59', '2021-05-06 02:58:59', NULL);
INSERT INTO `product` VALUES (61, 'Áo thun chào hè #02', 250000, '-10%', 'Mát mẻ', 1, 'ao-thun-chao-he-02', 28, '2021-05-06 02:59:35', '2021-05-06 02:59:35', NULL);
INSERT INTO `product` VALUES (62, 'Áo thun chào hè #03', 250000, '-10%', 'Mát mẻ', 1, 'ao-thun-chao-he-03', 28, '2021-05-06 03:00:22', '2021-05-06 03:00:22', NULL);
INSERT INTO `product` VALUES (63, 'Áo sơ mi phong cách #03', 350000, '-10%', 'Mát mẻ', 1, 'ao-so-mi-phong-cach-03', 40, '2021-05-06 03:04:39', '2021-05-06 03:04:39', NULL);
INSERT INTO `product` VALUES (64, 'Áo thun nữ #01', 150000, '-10%', 'Mát mẻ', 1, 'ao-thun-nu-01', 29, '2021-05-06 03:09:10', '2021-05-06 03:09:10', NULL);
INSERT INTO `product` VALUES (65, 'Áo thun nữ #02', 150000, '-10%', 'Mát mẻ', 1, 'ao-thun-nu-02', 29, '2021-05-06 03:09:46', '2021-05-06 03:09:46', NULL);
INSERT INTO `product` VALUES (66, 'Áo Khoác nam #01', 350000, '-20%', 'Mát mẻ', 1, 'ao-khoac-nam-01', 30, '2021-05-06 03:10:26', '2021-05-06 03:10:26', NULL);

-- ----------------------------
-- Table structure for promote
-- ----------------------------
DROP TABLE IF EXISTS `promote`;
CREATE TABLE `promote`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `promote_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `promote_id`(`promote_id`) USING BTREE,
  CONSTRAINT `promote_ibfk_2` FOREIGN KEY (`promote_id`) REFERENCES `product` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for role
-- ----------------------------
DROP TABLE IF EXISTS `role`;
CREATE TABLE `role`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for role_users
-- ----------------------------
DROP TABLE IF EXISTS `role_users`;
CREATE TABLE `role_users`  (
  `roleid` int(10) NOT NULL,
  `usersid` int(10) NOT NULL,
  PRIMARY KEY (`roleid`, `usersid`) USING BTREE,
  INDEX `FKrole_users646213`(`usersid`) USING BTREE,
  CONSTRAINT `FKrole_users271275` FOREIGN KEY (`roleid`) REFERENCES `role` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  CONSTRAINT `FKrole_users646213` FOREIGN KEY (`usersid`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for size
-- ----------------------------
DROP TABLE IF EXISTS `size`;
CREATE TABLE `size`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `amount` int(10) NOT NULL,
  `productid` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  INDEX `size_ibfk_1`(`productid`) USING BTREE,
  CONSTRAINT `size_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 86 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of size
-- ----------------------------
INSERT INTO `size` VALUES (77, 'XL', 10, 58, '2021-05-06 02:57:01', '2021-05-06 02:57:01');
INSERT INTO `size` VALUES (78, 'XL', 10, 59, '2021-05-06 02:57:46', '2021-05-06 02:57:46');
INSERT INTO `size` VALUES (79, 'XXL', 10, 60, '2021-05-06 02:58:59', '2021-05-06 02:58:59');
INSERT INTO `size` VALUES (80, 'XXL', 10, 61, '2021-05-06 02:59:35', '2021-05-06 02:59:35');
INSERT INTO `size` VALUES (81, 'XL', 10, 62, '2021-05-06 03:00:22', '2021-05-06 03:00:22');
INSERT INTO `size` VALUES (82, 'XL', 10, 63, '2021-05-06 03:04:39', '2021-05-06 03:04:39');
INSERT INTO `size` VALUES (83, 'L', 10, 64, '2021-05-06 03:09:10', '2021-05-06 03:09:10');
INSERT INTO `size` VALUES (84, 'L', 10, 65, '2021-05-06 03:09:47', '2021-05-06 03:09:47');
INSERT INTO `size` VALUES (85, 'XL', 10, 66, '2021-05-06 03:10:26', '2021-05-06 03:10:26');

-- ----------------------------
-- Table structure for slary
-- ----------------------------
DROP TABLE IF EXISTS `slary`;
CREATE TABLE `slary`  (
  `id` int(10) NULL DEFAULT NULL,
  `ngaycong` int(10) NULL DEFAULT NULL,
  `ungluong` int(10) NULL DEFAULT NULL,
  `luongcoban` int(10) NULL DEFAULT NULL,
  `luong` int(10) NULL DEFAULT NULL,
  `Employeesid` int(10) NOT NULL,
  INDEX `FKslary648633`(`Employeesid`) USING BTREE,
  CONSTRAINT `FKslary648633` FOREIGN KEY (`Employeesid`) REFERENCES `employees` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE = InnoDB CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for supplier
-- ----------------------------
DROP TABLE IF EXISTS `supplier`;
CREATE TABLE `supplier`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `city` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `email` varchar(55) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `phone` varchar(15) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `status` tinyint(4) NOT NULL,
  `birthday` int(10) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `email`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8 COLLATE = utf8_general_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
