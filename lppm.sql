/*
 Navicat Premium Data Transfer

 Source Server         : mom
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : lppm

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 11/05/2023 09:13:54
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tb_anggota_mahasiswa
-- ----------------------------
DROP TABLE IF EXISTS `tb_anggota_mahasiswa`;
CREATE TABLE `tb_anggota_mahasiswa`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nim` decimal(15, 0) NULL DEFAULT NULL,
  `id_surat` int NULL DEFAULT NULL,
  `user_create` int NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_anggota_mahasiswa
-- ----------------------------
INSERT INTO `tb_anggota_mahasiswa` VALUES (3, 'Afika', 1904411209, 22, 1, '2023-04-25 18:20:26', '2023-04-25 18:20:26');
INSERT INTO `tb_anggota_mahasiswa` VALUES (4, 'Khairul', 1904411306, 22, 1, '2023-04-25 18:20:26', '2023-04-25 18:20:26');
INSERT INTO `tb_anggota_mahasiswa` VALUES (5, 'Puput Febrianti', 190441306, 23, 2, '2023-05-01 08:38:53', '2023-05-01 08:38:53');
INSERT INTO `tb_anggota_mahasiswa` VALUES (6, 'Puput Febrianti', 1904411306, 23, 2, '2023-05-02 15:10:56', '2023-05-02 15:10:56');
INSERT INTO `tb_anggota_mahasiswa` VALUES (7, 'Fajar Alfianra Dewangga', 1904411306, 24, 2, '2023-05-05 03:36:09', '2023-05-05 03:36:09');
INSERT INTO `tb_anggota_mahasiswa` VALUES (8, 'Puput Febrianti', 1904411306, 25, 2, '2023-05-05 06:36:00', '2023-05-05 06:36:00');

-- ----------------------------
-- Table structure for tb_anggota_tim
-- ----------------------------
DROP TABLE IF EXISTS `tb_anggota_tim`;
CREATE TABLE `tb_anggota_tim`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `id_surat` int NULL DEFAULT NULL,
  `nama` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomor_induk` decimal(20, 0) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_create` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_anggota_tim
-- ----------------------------
INSERT INTO `tb_anggota_tim` VALUES (9, 13, 'Siti Nurwahida', 2121, '2023-04-25 18:20:26', '2023-04-25 18:20:26', 1);
INSERT INTO `tb_anggota_tim` VALUES (10, 13, 'Khairul', 1212, '2023-04-25 18:20:26', '2023-04-25 18:20:26', 1);
INSERT INTO `tb_anggota_tim` VALUES (11, 14, 'ida', 2121, '2023-04-27 18:22:23', '2023-04-27 18:22:23', 1);
INSERT INTO `tb_anggota_tim` VALUES (12, 15, 'Inyomang', 90282937, '2023-04-28 14:41:20', '2023-04-28 14:41:20', 1);
INSERT INTO `tb_anggota_tim` VALUES (13, 16, 'Igede', 90282937, '2023-04-28 14:46:26', '2023-04-28 14:46:26', 1);
INSERT INTO `tb_anggota_tim` VALUES (14, 17, 'Irenkirana', 90282937, '2023-04-28 14:55:00', '2023-04-28 14:55:00', 1);
INSERT INTO `tb_anggota_tim` VALUES (15, 18, 'Dana', 90282937, '2023-05-01 05:34:49', '2023-05-01 05:34:49', 2);
INSERT INTO `tb_anggota_tim` VALUES (16, 17, 'Febrianti', 90282937, '2023-05-01 08:38:53', '2023-05-01 08:38:53', 2);
INSERT INTO `tb_anggota_tim` VALUES (17, 17, 'Khairul Ahyar', 343656567, '2023-05-01 08:38:53', '2023-05-01 08:38:53', 2);
INSERT INTO `tb_anggota_tim` VALUES (18, 20, 'Afika Firanti', 90282937, '2023-05-01 08:51:16', '2023-05-01 08:51:16', 2);
INSERT INTO `tb_anggota_tim` VALUES (19, 21, 'Afika Firanti', 90282937, '2023-05-02 15:10:56', '2023-05-02 15:10:56', 2);
INSERT INTO `tb_anggota_tim` VALUES (20, 22, 'Afika Firanti', 90282937, '2023-05-02 17:05:14', '2023-05-02 17:05:14', 2);
INSERT INTO `tb_anggota_tim` VALUES (21, 23, 'Afika Firanti', 90282937, '2023-05-02 17:23:41', '2023-05-02 17:23:41', 2);
INSERT INTO `tb_anggota_tim` VALUES (22, 24, 'Afika Firanti', 90282937, '2023-05-05 03:36:08', '2023-05-05 03:36:08', 2);
INSERT INTO `tb_anggota_tim` VALUES (23, 24, 'Puput', 998978787, '2023-05-05 03:36:09', '2023-05-05 03:36:09', 2);
INSERT INTO `tb_anggota_tim` VALUES (24, 25, 'Afika Firanti', 90282937, '2023-05-05 06:36:00', '2023-05-05 06:36:00', 2);
INSERT INTO `tb_anggota_tim` VALUES (25, 25, 'Puput', 998978787, '2023-05-05 06:36:00', '2023-05-05 06:36:00', 2);

-- ----------------------------
-- Table structure for tb_detail_surat
-- ----------------------------
DROP TABLE IF EXISTS `tb_detail_surat`;
CREATE TABLE `tb_detail_surat`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `jangka_waktu` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `tanggal_mulai` date NULL DEFAULT NULL,
  `tanggal_selesai` date NULL DEFAULT NULL,
  `sumber_dana` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `mitra` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `biaya_penelitian_pengabdian` decimal(10, 0) NULL DEFAULT NULL,
  `terbilang` varchar(150) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jarak_lokasi_mitra` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `produk` varchar(80) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `publikasi_ilmiah` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `user_create` int NULL DEFAULT NULL,
  `user_update` int NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_detail_surat
-- ----------------------------
INSERT INTO `tb_detail_surat` VALUES (12, '5 (Lima) Bulan', '2023-04-28', '2023-04-28', 'DR', 'PT Bumi Jati', 3000000, 'Tuga juta rupiah', '5 km', 'Prototype', 'JB', 1, NULL, '2023-04-27 18:22:22', '2023-04-27 18:22:22');
INSERT INTO `tb_detail_surat` VALUES (13, '2 Bulan', '2023-04-28', '2023-04-28', 'DR', 'PT BUMI RAHARJA', 2000000, 'dua juta rupiah', '5 km', 'Produk', 'JT', 1, NULL, '2023-04-28 14:37:48', '2023-04-28 14:37:48');
INSERT INTO `tb_detail_surat` VALUES (14, '2 Bulan', '2023-04-07', '2023-04-28', 'DR', 'PT BUMI RAHARJA', 2000000, 'dua juta rupiah', '5 km', 'Produk', 'JB', 1, NULL, '2023-04-28 14:41:20', '2023-04-28 14:41:20');
INSERT INTO `tb_detail_surat` VALUES (15, '2 Bulan', '2023-04-14', '2023-05-05', 'DR', 'PT BUMI RAHARJA', 2000000, 'dua juta rupiah', '5 km', 'Prototype', 'JI', 1, NULL, '2023-04-28 14:46:26', '2023-04-28 14:46:26');
INSERT INTO `tb_detail_surat` VALUES (16, '2 Bulan', '2023-04-28', '2023-04-28', 'DR', 'PT BUMI RAHARJA', 2000000, 'dua juta rupiah', '5 km', 'Produk', 'JT', 1, NULL, '2023-04-28 14:55:00', '2023-04-28 14:55:00');
INSERT INTO `tb_detail_surat` VALUES (17, '2 Bulan', '2023-05-01', '2023-06-02', 'PD', 'PT BUMI RAHARJA', 2000000, 'dua juta rupiah', '5 km', 'Desain', 'JB', 2, NULL, '2023-05-01 05:34:48', '2023-05-01 05:34:48');
INSERT INTO `tb_detail_surat` VALUES (18, '2 Bulan', '2023-05-01', '2023-06-07', 'DR', 'PT BUMI RAHARJA', 3500000, 'dua juta rupiah', '5 km', 'Prototype', 'JT', 2, NULL, '2023-05-01 08:38:53', '2023-05-01 08:38:53');
INSERT INTO `tb_detail_surat` VALUES (19, '2 Bulan', '2023-05-01', '2023-05-01', 'DR', 'PT BUMI RAHARJA', 5500000, 'dua juta rupiah', '5 km', 'Produk', 'JT', 2, NULL, '2023-05-01 08:51:15', '2023-05-01 08:51:15');
INSERT INTO `tb_detail_surat` VALUES (20, '2 Bulan', '2023-05-02', '2023-05-02', 'DR', 'PT BUMI RAHARJA', 2000000, 'dua juta rupiah', '5 km', 'Prototype', 'JT', 2, NULL, '2023-05-02 15:10:55', '2023-05-02 15:10:55');
INSERT INTO `tb_detail_surat` VALUES (21, '2 Bulan', '2023-05-03', '2023-05-03', 'IU', 'PT BUMI RAHARJA', 2000000, 'dua juta rupiah', '5 km', 'Desain', 'Jurnal Internasional Bereputasi', 2, NULL, '2023-05-02 17:05:14', '2023-05-02 17:05:14');
INSERT INTO `tb_detail_surat` VALUES (22, '2 Bulan', '2023-05-03', '2023-05-03', 'DRPTM', 'PT BUMI RAHARJA', 2000000, 'dua juta rupiah', '5 km', 'Desain', 'Jurnal Nasional Terakreditasi', 2, NULL, '2023-05-02 17:23:41', '2023-05-02 17:23:41');
INSERT INTO `tb_detail_surat` VALUES (23, '2 Bulan', '2023-05-05', '2023-06-05', 'Internal UNCP', 'PT BUMI RAHARJA', 2000000, 'dua juta rupiah', '10 km', 'Prototype', 'Jurnal Nasional Terakreditasi', 2, NULL, '2023-05-05 03:36:08', '2023-05-11 00:40:09');
INSERT INTO `tb_detail_surat` VALUES (24, '2 Bulan', '2023-05-05', '2023-06-05', 'Internal UNCP', 'PT BUMI RAHARJA', 2000000, 'dua juta rupiah', '5 km', 'Prototype', 'Jurnal Internasional Bereputasi', 2, NULL, '2023-05-05 06:35:59', '2023-05-05 06:35:59');

-- ----------------------------
-- Table structure for tb_fakultas
-- ----------------------------
DROP TABLE IF EXISTS `tb_fakultas`;
CREATE TABLE `tb_fakultas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_fakultas` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nama_dekan` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomor_induk_dekan` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_fakultas
-- ----------------------------
INSERT INTO `tb_fakultas` VALUES (1, 'Teknik Komputer', 'Nirsal', '090823898238', '2023-05-02 00:18:20', '2023-06-09 00:18:24');
INSERT INTO `tb_fakultas` VALUES (2, 'FKIP', 'Khairul Ahyar', '089823929392', '2023-05-01 00:18:58', '2023-06-09 00:19:02');

-- ----------------------------
-- Table structure for tb_ketua_tim
-- ----------------------------
DROP TABLE IF EXISTS `tb_ketua_tim`;
CREATE TABLE `tb_ketua_tim`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomor_induk` decimal(20, 0) NULL DEFAULT NULL,
  `prodi` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jabatan_fungsional` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `telepon` decimal(15, 0) NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_create` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 21 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_ketua_tim
-- ----------------------------
INSERT INTO `tb_ketua_tim` VALUES (8, 'Siti Nurwahida', 190889938431, '1', NULL, 'siti@gmail.com', 82194947882, '2023-04-25 18:20:26', '2023-04-25 18:20:26', 1);
INSERT INTO `tb_ketua_tim` VALUES (9, 'Siti Nurwahida', 190889938431, '1', 'LK', 'choirulahyar123@gmail.com', 82194947882, '2023-04-27 18:22:22', '2023-04-27 18:22:22', 1);
INSERT INTO `tb_ketua_tim` VALUES (10, 'Rusli Rusli', 901282827, '1', 'LK', 'choirulahyar123@gmail.com', 82194947882, '2023-04-28 14:41:20', '2023-04-28 14:41:20', 1);
INSERT INTO `tb_ketua_tim` VALUES (11, 'Rusli Rusli', 901282827, '2', 'LK', 'puput@gmail.com', 82194947882, '2023-04-28 14:46:26', '2023-04-28 14:46:26', 1);
INSERT INTO `tb_ketua_tim` VALUES (12, 'Rusli Rusli', 901282827, '2', 'LK', 'ahyarkh129@gmail.com', 8219398101, '2023-04-28 14:55:00', '2023-04-28 14:55:00', 1);
INSERT INTO `tb_ketua_tim` VALUES (13, 'Rusli Rusli', 901282827, '3', 'LK', 'puput@gmail.com', 82194947882, '2023-05-01 05:34:48', '2023-05-01 05:34:48', 2);
INSERT INTO `tb_ketua_tim` VALUES (14, 'Rusli Rusli', 901282827, '3', 'GB', 'ahyarkh129@gmail.com', 87448934983, '2023-05-01 08:38:53', '2023-05-01 08:38:53', 2);
INSERT INTO `tb_ketua_tim` VALUES (15, 'Rusli Rusli', 901282827, '3', 'GB', 'choirulahyar123@gmail.com', 9849839483, '2023-05-01 08:51:15', '2023-05-01 08:51:15', 2);
INSERT INTO `tb_ketua_tim` VALUES (16, 'Rusli Rusli', 901282827, '3', 'LK', 'choirulahyar123@gmail.com', 9098394394, '2023-05-02 15:10:56', '2023-05-02 15:10:56', 2);
INSERT INTO `tb_ketua_tim` VALUES (17, 'Khairul Ahyar', 901282827, '1', 'Lektor Kepala', 'admin@admin.com', 82194947882, '2023-05-02 17:05:14', '2023-05-02 17:05:14', 2);
INSERT INTO `tb_ketua_tim` VALUES (18, 'Khairul Ahyar', 901282827, '3', 'Lektor', 'admin@admin.com', 82194947882, '2023-05-02 17:23:41', '2023-05-02 17:23:41', 2);
INSERT INTO `tb_ketua_tim` VALUES (19, 'Khairul Ahyar', 901282827, '2', 'Lektor', 'ahyarkh129@gmail.com', 82194947882, '2023-05-05 03:36:08', '2023-05-05 03:36:08', 2);
INSERT INTO `tb_ketua_tim` VALUES (20, 'Khairul Ahyar', 901282827, '1', 'Lektor Kepala', 'ahyarkh129@gmail.com', 82194947882, '2023-05-05 06:35:59', '2023-05-05 06:35:59', 2);

-- ----------------------------
-- Table structure for tb_prodi
-- ----------------------------
DROP TABLE IF EXISTS `tb_prodi`;
CREATE TABLE `tb_prodi`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_prodi` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `fakultas` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `ketua_prodi` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomor_induk_kaprodi` bigint NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_prodi
-- ----------------------------
INSERT INTO `tb_prodi` VALUES (1, 'Informatika', '1', 'Vicky Bin Djusmin, S.Kom.,M.kom', 1908280, '2023-04-28 16:33:52', '2023-04-28 11:24:47');
INSERT INTO `tb_prodi` VALUES (2, 'Pertanian', '2', 'Afika Firanti', 90808090, '2023-05-02 00:00:26', '2023-05-02 00:00:30');
INSERT INTO `tb_prodi` VALUES (3, 'PGSD', '2', 'Siti Nurwahida', 9083939, '2023-04-28 11:25:08', '2023-04-28 11:25:08');
INSERT INTO `tb_prodi` VALUES (5, 'PPKN', '2', 'Khairul Ahyar', 989898, '2023-05-03 00:57:06', '2023-05-03 00:57:09');

-- ----------------------------
-- Table structure for tb_semester
-- ----------------------------
DROP TABLE IF EXISTS `tb_semester`;
CREATE TABLE `tb_semester`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `tahun_semester` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomor_semester` int NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_semester
-- ----------------------------
INSERT INTO `tb_semester` VALUES (1, '2022', 20221, '2023-05-05 03:45:07', '2023-05-05 03:45:09');
INSERT INTO `tb_semester` VALUES (2, '2022', 20222, '2023-05-05 03:45:12', '2023-05-05 03:45:15');
INSERT INTO `tb_semester` VALUES (3, '2023', 20231, '2023-05-05 03:45:18', '2023-05-05 03:45:21');
INSERT INTO `tb_semester` VALUES (4, '2023', 20232, '2023-05-05 03:45:23', '2023-05-05 03:45:27');

-- ----------------------------
-- Table structure for tb_stakeholder
-- ----------------------------
DROP TABLE IF EXISTS `tb_stakeholder`;
CREATE TABLE `tb_stakeholder`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama` varchar(40) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nomor_induk` decimal(20, 0) NULL DEFAULT NULL,
  `jabatan` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_stakeholder
-- ----------------------------
INSERT INTO `tb_stakeholder` VALUES (1, 'Rusli Rusli', 909028, 'Ketua LPPM', '2023-04-28 16:26:04', '2023-04-28 16:26:07');

-- ----------------------------
-- Table structure for tb_surat
-- ----------------------------
DROP TABLE IF EXISTS `tb_surat`;
CREATE TABLE `tb_surat`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `judul_surat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL,
  `nomor_surat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `semester` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `jenis_surat` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `id_detail_surat` int NULL DEFAULT NULL,
  `id_ketua` int NULL DEFAULT NULL,
  `user_create` int NULL DEFAULT NULL,
  `user_update` int NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of tb_surat
-- ----------------------------
INSERT INTO `tb_surat` VALUES (13, 'Judul Ini', '001/ST/LPPM-UNCP/V/2023', '20222', 'penelitian', 'terbuat', 11, 8, 1, NULL, '2023-04-25 18:20:26', '2023-04-25 18:20:26');
INSERT INTO `tb_surat` VALUES (14, 'Judul Pengabdian 1', '002/ST/LPPM-UNCP/V/2023', '20222', 'pengabdian', 'terbuat', 12, 9, 1, NULL, '2023-04-27 18:22:22', '2023-04-27 18:22:22');
INSERT INTO `tb_surat` VALUES (15, 'Judul Penelitian 2', '003/ST/LPPM-UNCP/V/2023', '20221', 'penelitian', 'terbuat', 14, 10, 1, NULL, '2023-04-28 14:41:20', '2023-04-28 14:41:20');
INSERT INTO `tb_surat` VALUES (16, 'Judul Penelitian 4', '004/ST/LPPM-UNCP/V/2023', '20222', 'penelitian', 'terbuat', 15, 11, 1, NULL, '2023-04-28 14:46:26', '2023-04-28 14:46:26');
INSERT INTO `tb_surat` VALUES (17, 'Judul Pengabdian', '005/ST/LPPM-UNCP/V/2023', '20221', 'pengabdian', 'terbuat', 16, 12, 2, NULL, '2023-04-28 14:55:00', '2023-04-28 14:55:00');
INSERT INTO `tb_surat` VALUES (18, 'Bismillah', '006/ST/LPPM-UNCP/V/2023', '20222', 'penelitian', 'terbuat', 17, 13, 2, NULL, '2023-05-01 05:34:49', '2023-05-01 05:34:49');
INSERT INTO `tb_surat` VALUES (19, 'Surat peng_ap_di_an', '007/ST/LPPM-UNCP/V/2023', '20231', 'pengabdian', 'terbuat', 18, 14, 2, NULL, '2023-05-01 08:38:53', '2023-05-01 08:38:53');
INSERT INTO `tb_surat` VALUES (20, 'Ju_dul Peng_abdian', '008/ST/LPPM-UNCP/V/2023', '20232', 'pengabdian', 'terbuat', 19, 15, 2, NULL, '2023-05-01 08:51:16', '2023-05-01 08:51:16');
INSERT INTO `tb_surat` VALUES (21, 'KJKBIUBDWB jhB', '009/ST/LPPM-UNCP/V/2023', '20231', 'penelitian', 'terbuat', 20, 16, 2, NULL, '2023-05-02 15:10:56', '2023-05-02 15:10:56');
INSERT INTO `tb_surat` VALUES (22, 'Bismillah Testing Nih Gais', '010/ST/LPPM-UNCP/V/2023', '20222', 'penelitian', 'terbuat', 21, 17, 2, NULL, '2023-05-02 17:05:14', '2023-05-02 17:05:14');
INSERT INTO `tb_surat` VALUES (23, 'Bismillah Lagi Biar Paten', '011/ST/LPPM-UNCP/V/2023', '20231', 'pengabdian', 'terbuat', 22, 18, 2, NULL, '2023-05-02 17:23:41', '2023-05-02 17:23:41');
INSERT INTO `tb_surat` VALUES (24, 'Notifikasi Aplikasi Web', '012/ST/LPPM-UNCP/V/2023', '2022', 'penelitian', 'terbuat', 23, 19, 2, NULL, '2023-05-05 03:36:08', '2023-05-11 00:40:09');
INSERT INTO `tb_surat` VALUES (25, 'Pengabdian Mansyarakat Berikutnya', '013/ST/LPPM-UNCP/V/2023', '20222', 'pengabdian', 'terbuat', 24, 20, 2, NULL, '2023-05-05 06:36:00', '2023-05-05 06:36:00');

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `nidn` decimal(20, 0) NULL DEFAULT NULL,
  `level` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `confirm_password` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 4 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES (2, 'Siti', 'siti@gmail.com', 1904411309, 'dosen', '$2y$10$pFhGNOoCw1emo9AnbPSbNOjY.MWMnqsUaPE3K/OUG22H7BdZnJWLG', '12345', NULL, '2023-04-27 13:29:46', '2023-04-27 13:29:46');
INSERT INTO `user` VALUES (3, 'Adminadmin', 'admin@gmail.com', 909028, 'admin', '$2y$10$ifDyNmXyvQc0zy20OiFMce7IcSMra6MEV0dlz8VkyIw.S4o6fzYi2', 'password', NULL, '2023-04-28 06:35:40', '2023-04-28 06:35:40');

SET FOREIGN_KEY_CHECKS = 1;
