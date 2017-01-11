# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.6.21)
# Database: louvre
# Generation Time: 2016-12-16 03:14:42 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table albums
# ------------------------------------------------------------

DROP TABLE IF EXISTS `albums`;

CREATE TABLE `albums` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `artwork_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `albums_id_unique` (`id`),
  KEY `albums_user_id_foreign` (`user_id`),
  KEY `albums_artwork_id_foreign` (`artwork_id`),
  CONSTRAINT `albums_artwork_id_foreign` FOREIGN KEY (`artwork_id`) REFERENCES `artworks` (`id`),
  CONSTRAINT `albums_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `albums` WRITE;
/*!40000 ALTER TABLE `albums` DISABLE KEYS */;

INSERT INTO `albums` (`id`, `user_id`, `artwork_id`, `created_at`, `updated_at`)
VALUES
	(1,1,1,'2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(2,1,3,'2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(3,1,6,'2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(4,1,8,'2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(5,1,10,'2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(6,1,15,'2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(7,1,30,'2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(8,1,40,'2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(9,1,50,'2016-12-16 03:10:18','2016-12-16 03:10:18');

/*!40000 ALTER TABLE `albums` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table artwork_tag
# ------------------------------------------------------------

DROP TABLE IF EXISTS `artwork_tag`;

CREATE TABLE `artwork_tag` (
  `id` int(11) DEFAULT NULL,
  `artwork_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  KEY `artwork_tag_artwork_id_foreign` (`artwork_id`),
  KEY `artwork_tag_tag_id_foreign` (`tag_id`),
  CONSTRAINT `artwork_tag_artwork_id_foreign` FOREIGN KEY (`artwork_id`) REFERENCES `artworks` (`id`),
  CONSTRAINT `artwork_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `artwork_tag` WRITE;
/*!40000 ALTER TABLE `artwork_tag` DISABLE KEYS */;

INSERT INTO `artwork_tag` (`id`, `artwork_id`, `tag_id`)
VALUES
	(NULL,1,1),
	(NULL,2,2),
	(NULL,3,3),
	(NULL,4,4),
	(NULL,5,5),
	(NULL,6,6),
	(NULL,7,7),
	(NULL,8,8),
	(NULL,9,9),
	(NULL,10,1),
	(NULL,11,2),
	(NULL,12,3),
	(NULL,13,4),
	(NULL,14,5),
	(NULL,15,6),
	(NULL,16,7),
	(NULL,17,8),
	(NULL,18,9),
	(NULL,19,1),
	(NULL,20,2),
	(NULL,21,3),
	(NULL,22,4),
	(NULL,23,5),
	(NULL,24,6),
	(NULL,25,7),
	(NULL,26,8),
	(NULL,27,9),
	(NULL,28,1),
	(NULL,29,2),
	(NULL,30,3),
	(NULL,31,4),
	(NULL,32,5),
	(NULL,33,6),
	(NULL,34,7),
	(NULL,35,8),
	(NULL,36,9),
	(NULL,37,1),
	(NULL,38,2),
	(NULL,39,3),
	(NULL,40,4),
	(NULL,41,5),
	(NULL,42,6),
	(NULL,43,7),
	(NULL,44,8),
	(NULL,45,9),
	(NULL,46,1),
	(NULL,47,2),
	(NULL,48,3),
	(NULL,49,4),
	(NULL,50,5),
	(NULL,51,6),
	(NULL,52,7),
	(NULL,53,8),
	(NULL,54,9),
	(NULL,55,1),
	(NULL,56,2),
	(NULL,57,3),
	(NULL,58,4),
	(NULL,59,5),
	(NULL,60,6),
	(NULL,61,7),
	(NULL,62,8),
	(NULL,63,9),
	(NULL,64,1),
	(NULL,65,2),
	(NULL,66,3),
	(NULL,67,4),
	(NULL,68,5),
	(NULL,69,6),
	(NULL,70,7),
	(NULL,71,8),
	(NULL,72,9),
	(NULL,1,2),
	(NULL,2,3),
	(NULL,3,4),
	(NULL,4,5),
	(NULL,5,6),
	(NULL,6,7),
	(NULL,7,8),
	(NULL,8,9),
	(NULL,9,1),
	(NULL,10,2),
	(NULL,11,3),
	(NULL,12,4),
	(NULL,13,5),
	(NULL,14,6),
	(NULL,15,7),
	(NULL,16,8),
	(NULL,17,9),
	(NULL,18,1),
	(NULL,19,2),
	(NULL,20,3),
	(NULL,21,4),
	(NULL,22,5),
	(NULL,23,6),
	(NULL,24,7),
	(NULL,25,8),
	(NULL,26,9),
	(NULL,27,1),
	(NULL,28,2),
	(NULL,29,3),
	(NULL,30,4),
	(NULL,31,5),
	(NULL,32,6),
	(NULL,33,7),
	(NULL,34,8),
	(NULL,35,9),
	(NULL,36,1),
	(NULL,37,2),
	(NULL,38,3),
	(NULL,39,4),
	(NULL,40,5),
	(NULL,41,6),
	(NULL,42,7),
	(NULL,43,8),
	(NULL,44,9),
	(NULL,45,1),
	(NULL,46,2),
	(NULL,47,3),
	(NULL,48,4),
	(NULL,49,5),
	(NULL,50,6),
	(NULL,51,7),
	(NULL,52,8),
	(NULL,53,9),
	(NULL,54,1),
	(NULL,55,2),
	(NULL,56,3),
	(NULL,57,4),
	(NULL,58,5),
	(NULL,59,6),
	(NULL,60,7),
	(NULL,61,8),
	(NULL,62,9),
	(NULL,63,1),
	(NULL,64,2),
	(NULL,65,3),
	(NULL,66,4),
	(NULL,67,5),
	(NULL,68,6),
	(NULL,69,7),
	(NULL,70,8),
	(NULL,71,9),
	(NULL,72,1),
	(NULL,1,3),
	(NULL,2,4),
	(NULL,3,5),
	(NULL,4,6),
	(NULL,5,7),
	(NULL,6,8),
	(NULL,7,9),
	(NULL,8,1),
	(NULL,9,2),
	(NULL,10,3),
	(NULL,11,4),
	(NULL,12,5),
	(NULL,13,6),
	(NULL,14,7),
	(NULL,15,8),
	(NULL,16,9),
	(NULL,17,1),
	(NULL,18,2),
	(NULL,19,3),
	(NULL,20,4),
	(NULL,21,5),
	(NULL,22,6),
	(NULL,23,7),
	(NULL,24,8),
	(NULL,25,9),
	(NULL,26,1),
	(NULL,27,2),
	(NULL,28,3),
	(NULL,29,4),
	(NULL,30,5),
	(NULL,31,6),
	(NULL,32,7),
	(NULL,33,8),
	(NULL,34,9),
	(NULL,35,1),
	(NULL,36,2),
	(NULL,37,3),
	(NULL,38,4),
	(NULL,39,5),
	(NULL,40,6),
	(NULL,41,7),
	(NULL,42,8),
	(NULL,43,9),
	(NULL,44,1),
	(NULL,45,2),
	(NULL,46,3),
	(NULL,47,4),
	(NULL,48,5),
	(NULL,49,6),
	(NULL,50,7),
	(NULL,51,8),
	(NULL,52,9),
	(NULL,53,1),
	(NULL,54,2),
	(NULL,55,3),
	(NULL,56,4),
	(NULL,57,5),
	(NULL,58,6),
	(NULL,59,7),
	(NULL,60,8),
	(NULL,61,9),
	(NULL,62,1),
	(NULL,63,2),
	(NULL,64,3),
	(NULL,65,4),
	(NULL,66,5),
	(NULL,67,6),
	(NULL,68,7),
	(NULL,69,8),
	(NULL,70,9),
	(NULL,71,1),
	(NULL,72,2);

/*!40000 ALTER TABLE `artwork_tag` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table artworks
# ------------------------------------------------------------

DROP TABLE IF EXISTS `artworks`;

CREATE TABLE `artworks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `type_id` int(10) unsigned NOT NULL,
  `student_id` int(10) unsigned NOT NULL,
  `size` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `engagement` int(11) NOT NULL,
  `completeness` int(11) NOT NULL,
  `feedback` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `artworks_id_unique` (`id`),
  KEY `artworks_type_id_foreign` (`type_id`),
  KEY `artworks_student_id_foreign` (`student_id`),
  CONSTRAINT `artworks_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`),
  CONSTRAINT `artworks_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `artworks` WRITE;
/*!40000 ALTER TABLE `artworks` DISABLE KEYS */;

INSERT INTO `artworks` (`id`, `photo`, `name`, `date`, `type_id`, `student_id`, `size`, `engagement`, `completeness`, `feedback`, `created_at`, `updated_at`)
VALUES
	(1,'/files/s010001.jpg','붉은벽','2016-07-05',1,1,'10호',10,10,'정말 붉습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(2,'/files/s010002.jpg','뿔-1','2016-07-11',2,1,'10호',9,9,'잘 하고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(3,'/files/s010003.jpg','뿔-2','2016-08-12',2,1,'10호',9,8,'잘 하고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(4,'/files/s010004.jpg','우리는어디로가는가','2016-09-20',4,1,'10호',3,7,'색을 좀 더 강하게 쓰면 좋겠습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(5,'/files/s010005.jpg','영역표시','2016-10-14',5,1,'10호',5,6,'명확한 형태가 매력적인 그림입니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(6,'/files/s010006.jpg','뿔-3','2016-11-04',3,1,'10호',4,5,'전작에 비해 완성도가 떨어지고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(7,'/files/s010007.jpg','습작1','2016-12-11',5,1,'10호',2,4,'완성도도 떨어지고, 수업시간에 몰입을 못 하고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(8,'/files/s010008.jpg','습작2','2016-12-15',1,1,'10호',2,3,'완성도도 떨어지고, 수업시간에 몰입을 못 하고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(9,'/files/s020001.jpg','연습1','2016-09-17',2,2,'10호',1,1,'첫 작품입니다. 앞으로 많이 배워야 합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(10,'/files/s020002.jpg','시계에대한단상','2016-09-19',1,2,'10호',2,2,'형태를 더 명확하게 그려야합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(11,'/files/s020003.jpg','자화상','2016-09-24',1,2,'10호',4,3,'자신의 얼굴을 그린 그림입니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(12,'/files/s020004.jpg','우리엄마가너랑놀지말래','2016-10-10',3,2,'10호',5,4,'얼굴에 관심이 많은 것 같습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(13,'/files/s020005.jpg','닭의탈을쓴','2016-10-14',4,2,'10호',6,5,'몰입도와 완성도 모두 높아지고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(14,'/files/s020006.jpg','행렬이말한다','2016-10-19',5,2,'10호',6,6,'세계에 대한 고민을 담은 작품입니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(15,'/files/s020007.jpg','그래서우리는','2016-11-05',1,2,'10호',5,7,'관계에 대한 고민을 담은 작품입니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(16,'/files/s020008.jpg','푸른실내','2016-11-11',2,2,'10호',7,8,'색채가 강렬합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(17,'/files/s020007.jpg','그래서우리는','2016-11-05',1,2,'10호',5,7,'관계에 대한 고민을 담은 작품입니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(18,'/files/s020008.jpg','푸른실내','2016-11-11',2,2,'10호',7,8,'색채가 강렬합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(19,'/files/s020009.jpg','붉은야외','2016-11-20',4,2,'10호',8,9,'색채가 강렬합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(20,'/files/s020010.jpg','연습2','2016-11-28',3,2,'10호',9,10,'연습작품입니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(21,'/files/s020011.jpg','하하하하','2016-11-30',1,2,'10호',9,10,'훌륭합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(22,'/files/s020012.jpg','카프카','2016-12-02',1,2,'10호',10,9,'내면의 변화를 그렸다고합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(23,'/files/s020013.jpg','그녀의얼굴','2016-12-10',5,2,'10호',10,10,'초상화를 그리고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(24,'/files/s020014.jpg','그녀의얼굴2','2016-12-14',1,2,'10호',10,10,'초상화를 그리고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(25,'/files/s030001.jpg','공중정원','2016-03-04',1,3,'10호',8,9,'평화로운 분위기가 매력적입니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(26,'/files/s030002.jpg','어느더운날의제주도','2016-03-14',2,3,'10호',8,8,'여행의 스케치를 담고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(27,'/files/s030003.jpg','여행기3','2016-04-01',2,3,'10호',9,9,'여행의 스케치를 담고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(28,'/files/s030004.jpg','여행기4','2016-04-08',2,3,'10호',9,8,'여행의 스케치를 담고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(29,'/files/s030005.jpg','트럼프와느와르','2016-05-05',2,3,'10호',8,7,'인물의 구도가 인상적입니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(30,'/files/s030006.jpg','아맛있다','2016-05-20',2,3,'10호',9,8,'선을 잘 씁니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(31,'/files/s030007.jpg','땡글땡글','2016-05-30',3,3,'10호',7,9,'선을 잘 씁니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(32,'/files/s040001.jpg','시위의불길','2016-04-10',4,4,'10호',5,7,'구성이 매력적입니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(33,'/files/s040002.jpg','오늘의서울','2016-04-30',5,4,'10호',4,8,'색을 좀 더 강하게 쓰면 좋겠습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(34,'/files/s040003.jpg','야이거봐','2016-05-07',5,4,'10호',5,7,'몰입도와 완성도 모두 높아지고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(35,'/files/s040004.jpg','짐은세종이니라','2016-06-09',5,4,'10호',6,8,'세계에 대한 고민을 담은 작품입니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(36,'/files/s040005.jpg','선서','2016-07-18',4,4,'10호',5,9,'관계에 대한 고민을 담은 작품입니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(37,'/files/s040006.jpg','이게뭐야','2016-08-15',2,4,'10호',4,8,'색채가 강렬합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(38,'/files/s040007.jpg','어서옵쇼','2016-09-20',1,4,'10호',7,7,'색채가 강렬합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(39,'/files/s050001.jpg','사과1','2016-09-21',3,5,'10호',10,4,'잘 하고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(40,'/files/s050002.jpg','사과2','2016-09-30',4,5,'10호',10,5,'사물을 잘 뜯어봅니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(41,'/files/s050003.jpg','사과3','2016-10-08',5,5,'10호',10,5,'완성도는 좋으나 수업시간에 몰입을 못 하고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(42,'/files/s050004.jpg','색연습1','2016-10-14',4,5,'10호',10,8,'색을 헤아리는 능력이 뛰어납니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(43,'/files/s050005.jpg','사과4','2016-11-01',4,5,'10호',10,4,'사물을 잘 뜯어봅니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(44,'/files/s050006.jpg','세포1','2016-11-09',4,5,'10호',10,7,'랜덤한 형태에 관심이 많습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(45,'/files/s050007.jpg','세포2','2016-11-22',1,5,'10호',10,8,'랜덤한 형태에 관심이 많습니다. 몰입을 잘 합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(46,'/files/s050008.jpg','고기','2016-12-04',2,5,'10호',8,8,'고기를 좋아합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(47,'/files/s060001.jpg','풍경1','2016-03-25',3,6,'10호',9,6,'풍경 스케치를 담고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(48,'/files/s060002.jpg','풍경2','2016-04-04',1,6,'10호',8,5,'풍경 스케치를 담고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(49,'/files/s060003.jpg','풍경3','2016-05-09',2,6,'10호',7,6,'풍경 스케치를 담고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(50,'/files/s060004.jpg','풍경4','2016-06-17',2,6,'10호',5,7,'풍경 스케치를 담고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(51,'/files/s060005.jpg','풍경5','2016-07-09',1,6,'10호',7,4,'풍경 스케치를 담고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(52,'/files/s060006.jpg','황혼','2016-08-20',1,6,'10호',6,2,'풍경 스케치를 담고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(53,'/files/s060007.jpg','wave','2016-09-11',2,6,'10호',8,9,'풍경 스케치를 담고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(54,'/files/s060008.jpg','오지마','2016-11-05',2,6,'10호',9,10,'걱정이 많은 것 같습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(55,'/files/s070001.jpg','소폭발','2016-04-03',5,7,'10호',2,2,'색채가 강렬합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(56,'/files/s070002.jpg','멀리서가까이','2016-04-25',4,7,'10호',3,4,'색채가 강렬합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(57,'/files/s070003.jpg','seeing is believing','2016-05-30',3,7,'10호',4,3,'색채가 강렬합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(58,'/files/s070004.jpg','달과 그곳','2016-06-18',2,7,'10호',1,5,'우주에 대한 관심이 많습니다. 몰입은 잘 못 해서 주제를 바꿨습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(59,'/files/s070005.jpg','우투리','2016-07-27',4,7,'10호',2,4,'얼굴에 관심이 많은 것 같습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(60,'/files/s070006.jpg','흑, 점','2016-09-03',4,7,'10호',3,2,'몰입도와 완성도 모두 높아지고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(61,'/files/s080001.jpg','나의혁명1','2016-05-01',3,8,'10호',10,10,'세계에 대한 고민을 담은 작품입니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(62,'/files/s080002.jpg','나의혁명2','2016-05-19',2,8,'10호',9,10,'관계에 대한 고민을 담은 작품입니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(63,'/files/s080003.jpg','나의혁명3','2016-06-18',1,8,'10호',8,9,'색채가 강렬합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(64,'/files/s080004.jpg','인민재판','2016-07-15',2,8,'10호',9,8,'사물을 잘 뜯어봅니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(65,'/files/s080005.jpg','나의혁명4','2016-08-11',2,8,'10호',10,9,'완성도도 떨어지고, 수업시간에 몰입을 못 하고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(66,'/files/s080006.jpg','나의혁명5','2016-09-25',3,8,'10호',9,10,'첫 작품입니다. 앞으로 많이 배워야 합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(67,'/files/s080007.jpg','나의혁명6','2016-11-12',3,8,'10호',7,8,'표정을 잘 그립니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(68,'/files/s090001.jpg','한강대폭발','2016-05-08',3,9,'10호',10,6,'랜덤한 형태에 관심이 많습니다. 몰입을 잘 합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(69,'/files/s090002.jpg','단풍놀이','2016-05-30',4,9,'10호',9,7,'고기를 좋아합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(70,'/files/s090003.jpg','침몰','2016-07-02',4,9,'10호',8,8,'풍경 스케치를 담고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(71,'/files/s090004.jpg','밤의내역서','2016-08-18',4,9,'10호',6,9,'사물을 잘 뜯어봅니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(72,'/files/s090005.jpg','부활','2016-10-11',1,9,'10호',5,10,'완성도는 높으나수업시간에 몰입을 못 하고 있습니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(73,'/files/s090006.jpg','산의폭풍','2016-11-01',2,9,'10호',4,10,'잘 그립니다.','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(74,'/files/s090007.jpg','나, 소용돌이','2016-12-04',3,9,'10호',3,10,'훌륭합니다.','2016-12-16 03:10:18','2016-12-16 03:10:18');

/*!40000 ALTER TABLE `artworks` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table attendances
# ------------------------------------------------------------

DROP TABLE IF EXISTS `attendances`;

CREATE TABLE `attendances` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `student_id` int(10) unsigned NOT NULL,
  `mon` int(11) NOT NULL,
  `tue` int(11) NOT NULL,
  `wed` int(11) NOT NULL,
  `thu` int(11) NOT NULL,
  `fri` int(11) NOT NULL,
  `sat` int(11) NOT NULL,
  `sun` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `attendances_id_unique` (`id`),
  KEY `attendances_student_id_foreign` (`student_id`),
  CONSTRAINT `attendances_student_id_foreign` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `attendances` WRITE;
/*!40000 ALTER TABLE `attendances` DISABLE KEYS */;

INSERT INTO `attendances` (`id`, `student_id`, `mon`, `tue`, `wed`, `thu`, `fri`, `sat`, `sun`, `created_at`, `updated_at`)
VALUES
	(1,1,1,0,1,0,0,0,0,'2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(2,2,0,1,0,1,0,0,0,'2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(3,3,1,0,1,0,0,1,1,'2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(4,4,0,1,0,1,0,0,0,'2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(5,5,0,0,1,0,1,0,0,'2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(6,6,0,0,0,0,0,1,1,'2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(7,7,1,0,0,0,1,0,0,'2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(8,8,0,0,1,0,0,1,0,'2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(9,9,0,1,0,1,0,0,0,'2016-12-16 03:10:18','2016-12-16 03:10:18');

/*!40000 ALTER TABLE `attendances` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table courses
# ------------------------------------------------------------

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `courses_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `courses` WRITE;
/*!40000 ALTER TABLE `courses` DISABLE KEYS */;

INSERT INTO `courses` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'빠리지앵스튜디오','2016-12-16 03:10:18','2016-12-16 03:10:18');

/*!40000 ALTER TABLE `courses` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2016_12_07_052024_create_students_table',1),
	(4,'2016_12_07_054648_create_artworks_table',1),
	(5,'2016_12_07_061022_create_albums_table',1),
	(6,'2016_12_07_062808_create_attendances_table',1),
	(7,'2016_12_07_063412_create_courses_table',1),
	(8,'2016_12_07_064224_create_artwork_tag_table',1),
	(9,'2016_12_07_064641_create_tags_table',1),
	(10,'2016_12_07_080336_create_types_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table students
# ------------------------------------------------------------

DROP TABLE IF EXISTS `students`;

CREATE TABLE `students` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `profile_pic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `birth` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enroll_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `purpose` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `students_id_unique` (`id`),
  KEY `students_user_id_foreign` (`user_id`),
  KEY `students_course_id_foreign` (`course_id`),
  CONSTRAINT `students_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`),
  CONSTRAINT `students_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `students` WRITE;
/*!40000 ALTER TABLE `students` DISABLE KEYS */;

INSERT INTO `students` (`id`, `name`, `tel`, `email`, `user_id`, `profile_pic`, `birth`, `enroll_date`, `course_id`, `purpose`, `status`, `comment`, `created_at`, `updated_at`)
VALUES
	(1,'고영준','010-4451-3738','yjko@gmail.com',1,'/pfpic/s0001.jpg','1980-04-12','2016-07-03',1,'세계최고의 일러스트레이터 되기','재학','','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(2,'김미환','010-4451-3738','beautyhwani@gmail.com',1,'/pfpic/s0002.jpg','1985-03-28','2016-09-13',1,'여행다니며 스케치 하기','재학','','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(3,'김소희','010-4451-3738','sooohee2@gmail.com',1,'/pfpic/s0003.jpg','1987-09-11','2016-03-06',1,'원하는대로 표현하기','재학','','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(4,'김태현','010-4451-3738','xogusrla@gmail.com',1,'/pfpic/s0004.jpg','1979-12-16','2016-04-07',1,'유화를 잘 그리기','재학','','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(5,'민나림','010-4451-3738','naforrestmin@hanmail.net',1,'/pfpic/s0005.jpg','1983-02-18','2016-09-13',1,'전반적인 그림 실력 향상하기','재학','','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(6,'박원표','010-4451-3738','votemeplz@naver.com',1,'/pfpic/s0006.jpg','1984-12-19','2016-03-01',1,'그냥 재밌게 그리기','재학','','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(7,'손경환','010-4451-3738','handhand01@gmail.com',1,'/pfpic/s0007.jpg','1981-03-17','2016-03-17',1,'한 달에 작품 하나 만들기','재학','','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(8,'이희욱','010-4451-3738','happyday86@gmail.com',1,'/pfpic/s0008.jpg','1986-07-14','2016-04-19',1,'사람을 잘 그리기','재학','','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(9,'정석우','010-4451-3738','torrestantan@naver.com',1,'/pfpic/s0009.jpg','1982-03-03','2016-04-22',1,'미술이 어떤 건지 알아보기','재학','','2016-12-16 03:10:18','2016-12-16 03:10:18');

/*!40000 ALTER TABLE `students` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table tags
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tags`;

CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'정물화','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(2,'인물화','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(3,'풍경화','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(4,'드로잉','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(5,'에스키스','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(6,'모범작','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(7,'야외','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(8,'실내','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(9,'계절','2016-12-16 03:10:18','2016-12-16 03:10:18');

/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `types`;

CREATE TABLE `types` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `types_id_unique` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `types` WRITE;
/*!40000 ALTER TABLE `types` DISABLE KEYS */;

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`)
VALUES
	(1,'유화','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(2,'수채화','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(3,'판화','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(4,'수묵화','2016-12-16 03:10:18','2016-12-16 03:10:18'),
	(5,'목탄화','2016-12-16 03:10:18','2016-12-16 03:10:18');

/*!40000 ALTER TABLE `types` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `course_id` int(10) unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_id_unique` (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_course_id_foreign` (`course_id`),
  CONSTRAINT `users_course_id_foreign` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `uid`, `password`, `name`, `email`, `course_id`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'test','$2y$10$udWmFt77JvEVz7P.KujHRulQXoKIs3tL3neiGmEEkvhPLSRPT9lYu','피카소','test@test.com',1,'FwskhgaoYLOdAl08oIwqENGn61jjdVKLhzWoEmqDyBR8bSYfQRU3D9TyWOwc','2016-12-16 03:10:18','2016-12-16 03:13:09');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
