-- --------------------------------------------------------
-- 主机:                           127.0.0.1
-- 服务器版本:                        5.5.47 - MySQL Community Server (GPL)
-- 服务器操作系统:                      Win32
-- HeidiSQL 版本:                  9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 导出  表 laravel.articles 结构
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `intro` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  laravel.articles 的数据：10 rows
DELETE FROM `articles`;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` (`id`, `title`, `content`, `published_at`, `created_at`, `updated_at`, `intro`, `user_id`) VALUES
	(1, 'TEST', '23333333333333333333333333333', '2016-04-08 14:59:56', '2016-04-08 14:59:56', '2016-04-08 14:59:56', '', 1),
	(2, 'HELLO WORLD', 'HELLO WORLD', '2016-04-08 15:00:32', '2016-04-08 15:00:32', '2016-04-08 15:00:32', '', 2),
	(3, '啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊', '啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊啊', '2016-04-08 15:09:09', '2016-04-08 15:09:09', '2016-04-08 15:09:09', '', 5),
	(4, '割鸡割鸡割鸡割鸡割鸡割鸡', '割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡割鸡', '2016-04-09 11:30:07', '2016-04-09 11:30:07', '2016-04-09 11:30:07', '', 2),
	(5, '在下坂本，有何贵干？', '于日本县立学文高中之中，有一名叫坂本的全能高中生，平常总是用著各种超乎常理的无厘头行为来完成各种琐事，导致周遭所有女性同学都对他钦佩绝倒，同时也引起所有男性同学的无限嫉妒。但不管面对其他人如何刁难，坂本总是能用各种帅气方式来让他人甘拜下风。', '2016-04-09 11:32:50', '2016-04-09 11:32:50', '2016-04-09 11:32:50', '', 2),
	(6, '线上游戏的老婆不可能是女生？', '西村英骑曾经有过一段“在网游里跟女性角色告白，结果发现对方是假冒女生的人妖”这样的黑历史，结果突然有一天他又被一个女性角色告白了。正在英骑怀疑历史重演的时候，却发现线上的“老婆”玉置亚子居然是一个真正的美少女，并且竟然还不懂得区分现实与游戏……？她不但在别人面前直呼英骑的游戏名，并且各种倒贴。而为了“纠正”她的行为，英骑和公会同伴们挺身而出…', '2016-04-10 02:38:55', '2016-04-09 11:39:02', '2016-04-10 02:38:55', '', 5),
	(7, '和田光司，不熄的歌声回荡', '据所属事务所SOLID VOX讣告，歌手和田光司因咽喉淋巴癌于2016年4月3日早晨逝世，年仅42岁。  \r\n"无限大な梦のあとの 何もない世の中じゃ"  \r\n脑海中，你的歌声不会息止。  \r\n谨此悼念，带给大家希望与梦想的、永不放弃的光叔[蜡烛]', '2016-04-09 12:23:59', '2016-04-09 12:23:59', '2016-04-09 12:23:59', '', 6),
	(8, '唱见甜心召集令', '传说bilibili建站之初的有一只基兽，基兽调皮可爱，喜欢听美妙的歌声，最喜欢和可爱的萌妹子聊天，一直是大家的好朋友。但是最近基兽开始失眠了，整日郁郁寡欢，于是一大波拥有动人歌喉的唱见和可爱的萌妹子集体应援收集“元气玉”来帮助基兽。', '2016-04-09 12:52:16', '2016-04-09 12:52:16', '2016-04-09 12:52:16', '', 7),
	(9, 'BML2016正式公布！', 'Bilibili Macro Link（BML）是由bilibili弹幕视频网创造的大型同好线下聚会品牌。从2013年开始到现在已举办了3届 ，从最初的上海梅赛德斯奔驰文化中心Mixing Room 800人的规模，发展到现在奔驰中心主场馆超过万人的超大型Live，BML已经成为了宅文化中知名度最高的线下活动。\r\nBilibili Macro Link 2016延续了之前几届的传统，邀请日本当红一线歌手、人气唱见舞见、国内网络年轻文化代表人物、还有从开始到现在一直陪伴着bilibili一路走来的UP主们一起，和所有心中有爱、因bilibili而相聚的小伙伴们一起愉快的playplay。\r\nBML的举办场地，每年在规模上都有一次质的飞跃，今年的BML，又回到了第一届的举办地，梅赛德斯奔驰文化中心。还记得第一届BML的时候，主持人曾和到场的800位观众有过一个约定，总有一天，BML会回到奔驰中心，但是却会开到可以容纳一万两千人的主场馆去。这个约定终于实现了！\r\n地点：上海梅赛德斯奔驰文化中心主场馆 \r\n日期：2016年7月23日 \r\n活动主页：http://bml.bilibili.com', '2016-04-05 22:39:12', '2016-04-24 22:37:11', '2016-04-24 22:39:12', '', 8),
	(10, '宫崎步助力BML将为和田光司准备特别节目', '《数码宝贝》插曲《BRAVE HEART》主唱宫崎步确定将作为BML嘉宾为观众献唱！这也是宫崎步第一次来到中国。 宫崎步表示，为了去年就想来到上海，但因病没有办法前来，于前不久去世的《数码宝贝》主题曲《butterfly》的演唱者和田光司而准备了一个特别的节目。', '2016-04-24 22:41:02', '2016-04-24 22:40:33', '2016-04-24 22:41:02', '', 8);
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;


-- 导出  表 laravel.migrations 结构
CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  laravel.migrations 的数据：5 rows
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`migration`, `batch`) VALUES
	('2014_10_12_000000_create_users_table', 1),
	('2014_10_12_100000_create_password_resets_table', 1),
	('2016_03_23_061304_create_articles_table', 2),
	('2016_03_23_062049_add_intro_column_to_articles', 3),
	('2016_03_24_214149_add_user_id_column_to_articles', 4);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;


-- 导出  表 laravel.password_resets 结构
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  laravel.password_resets 的数据：3 rows
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('admin2@qq.com', 'c27bd6e1c3c7dc9fb42e6ca025d9c3859fab2938038b0a86fb0619b2cd148c6c', '2016-03-25 12:23:57'),
	('admin@qq.com', '879f0f65c1844169516fd641657180d9f3c21af8440a36c54f944b52ec25a7b7', '2016-03-25 13:30:34'),
	('maizhenying09@gmail.com', 'b08992e65b759fd8447ca2965e1cdc75a11f49f8f0c868c72f83f720d361080f', '2016-05-13 20:01:19');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;


-- 导出  表 laravel.users 结构
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `weibo_id` int(15) unsigned DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 正在导出表  laravel.users 的数据：6 rows
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `weibo_id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 0, 'admin', 'admin@qq.com', '$2y$10$iBe7ToMu74/iyY8TumdOdOIUWnN2P224Z0xThaeoGEpNiDnyVX.K.', 'pAaFZBwZ8tRFTK5mG67gB8kyUNh7Dxd0A7U5QGuCW9GJVC7p5qtbrrIvMEc2', '2016-03-25 03:43:16', '2016-04-08 15:00:05'),
	(2, 0, 'admin2', 'admin2@qq.com', '$2y$10$550MbQ/DtCLfdXfb3g5v4u4NDfABT1l12G3PZtK5rWu.VIS4UOGo6', 'FGR0OFa39gmdBFrEafqWmxzGXOBQ4f07L7hQnpesGOItsay7D6n3InTimX2u', '2016-03-25 10:29:34', '2016-04-09 11:37:55'),
	(6, 0, 'NICONICONI', 'niconiconi@nico.com', '$2y$10$0tifvrSOxiC8M4GWVsChDeLkS/HTIq/rRIW0zeKOMCQMfVnCLUMw6', '0SN9PX1y73e9Wbtr5J69zj8UND3NyT6Yvlx5v3r0dXkrNX4vALf6W5mvtReQ', '2016-04-09 11:59:25', '2016-04-09 12:48:26'),
	(5, 0, 'DOMEIGANBATTE', 'maizhenying09@gmail.com', '$2y$10$vwirPEn4SUExkzvKGJlzDOFWlONyLsCM6bJSzzamKOm3KQYFLkUeW', 'DbnBnbQ53In3OVsTEz1Gc69kQxqmyKyTxqAx4OY2od1andAwCScGJMWy4bSE', '2016-04-08 15:02:02', '2016-05-13 19:59:31'),
	(7, 0, 'm9kun', 'm9kun@qq.com', '$2y$10$0gviM4Y.ivjqWMe4Lg5j3.SNqwwSH1XyONV55lLp0bG.Ix8jY/2ja', 'NNLDa1iLd4dOv4OcSE2qXn159vlKFB1Wi2pboHQzBGhjVGwBbPn7a88FDlWd', '2016-04-09 12:49:13', '2016-04-09 12:54:32'),
	(8, 0, 'BiliBili-Live-Tour', 'live@bilibili.com', '$2y$10$XJz/iNG74nn.8rhERnHEWOGSdz72F4ypGLAbkoe8LKZsFbg.3dgAC', 'wnyHkzy0Rs1GA28oQdIHP00EitxSf8kmTTFPlFC5ukiSYkMUbGmjGV1KDy5d', '2016-04-24 22:35:07', '2016-04-24 22:44:03');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
