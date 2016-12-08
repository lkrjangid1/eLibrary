# ************************************************************
# Sequel Pro SQL dump
# Version 4499
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: localhost (MySQL 5.6.24)
# Database: digilib_db
# Generation Time: 2015-11-18 07:56:19 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table author_book_rel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `author_book_rel`;

CREATE TABLE `author_book_rel` (
  `author_id` int(8) unsigned zerofill NOT NULL COMMENT 'author id-> author\nname',
  `book_id` int(8) unsigned zerofill NOT NULL COMMENT 'book id-> book',
  `context` tinyint(1) NOT NULL COMMENT 'context:elib[1],ncert[2]',
  KEY `fk_author_id2` (`author_id`),
  KEY `context` (`context`),
  KEY `book_id` (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `author_book_rel` WRITE;
/*!40000 ALTER TABLE `author_book_rel` DISABLE KEYS */;

INSERT INTO `author_book_rel` (`author_id`, `book_id`, `context`)
VALUES
	(00000002,00000002,1);

/*!40000 ALTER TABLE `author_book_rel` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table author_dinfo
# ------------------------------------------------------------

DROP TABLE IF EXISTS `author_dinfo`;

CREATE TABLE `author_dinfo` (
  `author_id` int(8) unsigned zerofill NOT NULL COMMENT 'author id->author name',
  `life` varchar(32) NOT NULL COMMENT 'life:lived from date to date',
  `bio` text NOT NULL COMMENT 'full bio of author',
  `rating` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'popular rating',
  `img` tinyint(1) NOT NULL,
  KEY `fk_author_id` (`author_id`),
  KEY `rating` (`rating`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `author_dinfo` WRITE;
/*!40000 ALTER TABLE `author_dinfo` DISABLE KEYS */;

INSERT INTO `author_dinfo` (`author_id`, `life`, `bio`, `rating`, `img`)
VALUES
	(00000002,'1812 to 1870','<p>Charles John Huffam Dickens was an English writer and social critic. He created some of the world\'s best-known fictional characters and is regarded as the greatest novelist of the Victorian era. His works enjoyed unprecedented popularity during his lifetime, and by the twentieth century critics and scholars had recognised him as a literary genius. His novels and short stories enjoy lasting popularity.</p>\r\n\r\n<p>Born in Portsmouth, Dickens left school to work in a factory when his father was incarcerated in a debtors\' prison. Despite his lack of formal education, he edited a weekly journal for 20 years, wrote 15 novels, five novellas, hundreds of short stories and non-fiction articles, lectured and performed extensively, was an indefatigable letter writer, and campaigned vigorously for children\'s rights, education, and other social reforms.</p>\r\n\r\n<p>Dickens\'s literary success began with the 1836 serial publication of The Pickwick Papers. Within a few years he had become an international literary celebrity, famous for his humour, satire, and keen observation of character and society. His novels, most published in monthly or weekly instalments, pioneered the serial publication of narrative fiction, which became the dominant Victorian mode for novel publication. The instalment format allowed Dickens to evaluate his audience\'s reaction, and he often modified his plot and character development based on such feedback. For example, when his wife\'s chiropodist expressed distress at the way Miss Mowcher in David Copperfield seemed to reflect her disabilities, Dickens improved the character with positive features. His plots were carefully constructed, and he often wove elements from topical events into his narratives. Masses of the illiterate poor chipped in ha\'pennies to have each new monthly episode read to them, opening up and inspiring a new class of readers.</p>\r\n\r\n<p>Dickens was regarded as the literary colossus of his age. His 1843 novella, A Christmas Carol, remains popular and continues to inspire adaptations in every artistic genre. Oliver Twist and Great Expectations are also frequently adapted, and, like many of his novels, evoke images of early Victorian London. His 1859 novel, A Tale of Two Cities, set in London and Paris, is his best-known work of historical fiction. Dickens\'s creative genius has been praised by fellow writers—from Leo Tolstoy to George Orwell and G. K. Chesterton—for its realism, comedy, prose style, unique characterisations, and social criticism. On the other hand, Oscar Wilde, Henry James, and Virginia Woolf complained of a lack of psychological depth, loose writing, and a vein of saccharine sentimentalism. The term Dickensian is used to describe something that is reminiscent of Dickens and his writings, such as poor social conditions or comically repulsive characters</p>',8,1);

/*!40000 ALTER TABLE `author_dinfo` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table author_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `author_info`;

CREATE TABLE `author_info` (
  `author_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique\nauthor id',
  `author_name` varchar(128) NOT NULL DEFAULT '' COMMENT 'unique author name',
  `is_detailed` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'has detailed info',
  PRIMARY KEY (`author_id`),
  KEY `author_name` (`author_name`),
  KEY `is_detailed` (`is_detailed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `author_info` WRITE;
/*!40000 ALTER TABLE `author_info` DISABLE KEYS */;

INSERT INTO `author_info` (`author_id`, `author_name`, `is_detailed`)
VALUES
	(00000002,'Charles Dickens',1);

/*!40000 ALTER TABLE `author_info` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table bcat_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `bcat_info`;

CREATE TABLE `bcat_info` (
  `bcat_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique id to broad category ',
  `bcat_name` varchar(32) NOT NULL DEFAULT '' COMMENT 'name of broad category',
  `description` varchar(128) DEFAULT NULL COMMENT 'small decription of it',
  PRIMARY KEY (`bcat_id`),
  KEY `bcat_name` (`bcat_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table blog_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `blog_info`;

CREATE TABLE `blog_info` (
  `blog_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique id to blog',
  `blog_title` varchar(128) DEFAULT NULL COMMENT 'title of blog',
  `user_id` int(8) unsigned zerofill NOT NULL COMMENT 'user_id->name of author',
  `is_student` tinyint(1) unsigned zerofill NOT NULL COMMENT 'is student or teacher',
  `description` varchar(256) DEFAULT '' COMMENT 'small description',
  `blog` text COMMENT 'blog',
  `published` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT 'time of publishing',
  `cont_to` int(8) DEFAULT NULL COMMENT 'if in continuty then previous blog_id ',
  `rating` tinyint(1) unsigned zerofill NOT NULL DEFAULT '0' COMMENT 'popular rating',
  `scat_id` int(8) unsigned zerofill NOT NULL COMMENT 'small cat id-> category',
  PRIMARY KEY (`blog_id`),
  KEY `fk_scat_id` (`scat_id`),
  KEY `blog_title` (`blog_title`),
  KEY `user_id` (`user_id`),
  KEY `is_student` (`is_student`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table career_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `career_info`;

CREATE TABLE `career_info` (
  `career_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique\ncareer id',
  `career_name` varchar(128) NOT NULL DEFAULT '' COMMENT 'name of the career',
  `description` text NOT NULL COMMENT 'decription of the career',
  `reference_links` text COMMENT 'links for further reference',
  PRIMARY KEY (`career_id`),
  KEY `career_name` (`career_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table class_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `class_info`;

CREATE TABLE `class_info` (
  `class_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique class id',
  `grade` tinyint(1) unsigned zerofill DEFAULT '0' COMMENT 'grade 1-12',
  `section` tinyint(1) unsigned zerofill NOT NULL DEFAULT '0' COMMENT 'sections A-H',
  `class_time_table` text COMMENT 'time table of the whole class',
  `thread` mediumtext COMMENT 'class thread',
  `history` longtext COMMENT 'history of classs thread',
  `rating` tinyint(1) unsigned zerofill NOT NULL DEFAULT '0' COMMENT 'popular rating of class',
  PRIMARY KEY (`class_id`),
  UNIQUE KEY `class_id` (`class_id`),
  KEY `section` (`section`),
  KEY `grade` (`grade`),
  KEY `rating` (`rating`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table dcq_cat_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dcq_cat_info`;

CREATE TABLE `dcq_cat_info` (
  `dcqcat_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique dcqcat_id',
  `dcq_cat` varchar(16) DEFAULT NULL COMMENT 'name of the page: eg elibrary, author, ncert',
  PRIMARY KEY (`dcqcat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table dcq_thread_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `dcq_thread_info`;

CREATE TABLE `dcq_thread_info` (
  `dcq_id` int(8) unsigned zerofill NOT NULL COMMENT 'dcq id',
  `context_id` int(8) unsigned zerofill NOT NULL COMMENT 'context of the page eg author_id',
  `dcqcat_id` int(8) unsigned zerofill NOT NULL COMMENT 'dcq cat of the page',
  PRIMARY KEY (`dcq_id`),
  KEY `fk_dcqid` (`dcqcat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table devlop_authors_userid_rel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `devlop_authors_userid_rel`;

CREATE TABLE `devlop_authors_userid_rel` (
  `user_id` int(8) unsigned zerofill NOT NULL COMMENT 'user_id->user name',
  `is_student` tinyint(1) NOT NULL COMMENT 'is user student or teacher',
  `devlop_id` int(8) unsigned zerofill NOT NULL COMMENT 'devlop_id->devlop page',
  `post` varchar(32) DEFAULT '' COMMENT 'post of the mod user added',
  KEY `fk_devlop_id2` (`devlop_id`),
  KEY `user_id` (`user_id`),
  KEY `is_student` (`is_student`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table devlop_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `devlop_info`;

CREATE TABLE `devlop_info` (
  `devlop_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'unique app id',
  `devlop_title` varchar(64) NOT NULL DEFAULT '' COMMENT 'title of app',
  `devlop_description` text COMMENT 'description of the app',
  `published` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT 'time of publishing',
  `user_id` int(8) unsigned zerofill NOT NULL COMMENT 'user id->of publisher',
  `is_student` tinyint(1) unsigned zerofill NOT NULL DEFAULT '1' COMMENT 'is student or teacher',
  `thread_id` int(8) unsigned zerofill NOT NULL COMMENT 'thread_id->thread related',
  `status` tinyint(1) unsigned zerofill NOT NULL COMMENT 'status:open or closed',
  `rating` tinyint(1) unsigned zerofill NOT NULL COMMENT 'popular rating',
  `scat_id` int(8) unsigned zerofill NOT NULL COMMENT 'scat_id->small cat of app',
  PRIMARY KEY (`devlop_id`),
  KEY `fk_scat_id3` (`scat_id`),
  KEY `fk_thread_id2` (`thread_id`),
  KEY `devlop_title` (`devlop_title`),
  KEY `rating` (`rating`),
  KEY `status` (`status`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table devlop_links
# ------------------------------------------------------------

DROP TABLE IF EXISTS `devlop_links`;

CREATE TABLE `devlop_links` (
  `href` text NOT NULL COMMENT 'link to the file',
  `devlop_id` int(8) unsigned zerofill NOT NULL COMMENT 'devlop id-> app',
  `server_id` int(4) unsigned zerofill NOT NULL COMMENT 'server id->server',
  KEY `fk_server_id3` (`server_id`),
  KEY `fk_devlop_id` (`devlop_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table devlop_server_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `devlop_server_info`;

CREATE TABLE `devlop_server_info` (
  `server_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique server id',
  `server_name` varchar(32) NOT NULL DEFAULT '' COMMENT 'name of the server',
  `server_url` varchar(128) NOT NULL DEFAULT '' COMMENT 'address of server',
  `server_description` tinytext COMMENT 'description of server',
  PRIMARY KEY (`server_id`),
  KEY `server_name` (`server_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table exam_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `exam_info`;

CREATE TABLE `exam_info` (
  `exam_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique exam id',
  `exam_name` varchar(128) NOT NULL DEFAULT '' COMMENT 'name of exam',
  `description` text NOT NULL COMMENT 'description of exam: requirements and all',
  `reference_links` text COMMENT 'links to refer further',
  PRIMARY KEY (`exam_id`),
  KEY `exam_name` (`exam_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table genre_book_rel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `genre_book_rel`;

CREATE TABLE `genre_book_rel` (
  `book_id` int(8) unsigned zerofill NOT NULL COMMENT 'book_id->name of lib book',
  `genre_id` int(8) unsigned zerofill NOT NULL COMMENT 'genre id-> genre of book',
  KEY `fk_book_id2` (`book_id`),
  KEY `fk_genre_id` (`genre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `genre_book_rel` WRITE;
/*!40000 ALTER TABLE `genre_book_rel` DISABLE KEYS */;

INSERT INTO `genre_book_rel` (`book_id`, `genre_id`)
VALUES
	(00000002,00000001),
	(00000002,00000010),
	(00000002,00000009),
	(00000002,00000008),
	(00000002,00000007),
	(00000002,00000006);

/*!40000 ALTER TABLE `genre_book_rel` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table genre_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `genre_info`;

CREATE TABLE `genre_info` (
  `genre_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique id to genre',
  `genre` varchar(32) NOT NULL DEFAULT '' COMMENT 'name of genre',
  PRIMARY KEY (`genre_id`),
  KEY `genre` (`genre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `genre_info` WRITE;
/*!40000 ALTER TABLE `genre_info` DISABLE KEYS */;

INSERT INTO `genre_info` (`genre_id`, `genre`)
VALUES
	(00000004,'fantasy'),
	(00000001,'fiction'),
	(00000009,'Gothic'),
	(00000010,'melodrama'),
	(00000003,'mystery'),
	(00000002,'non-fiction'),
	(00000005,'romance'),
	(00000008,'satire'),
	(00000006,'science fiction'),
	(00000007,'thriller');

/*!40000 ALTER TABLE `genre_info` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table keyword_blog_rel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `keyword_blog_rel`;

CREATE TABLE `keyword_blog_rel` (
  `blog_id` int(8) unsigned zerofill NOT NULL COMMENT 'blog_id->blog',
  `key_id` int(8) unsigned zerofill NOT NULL COMMENT 'key_id->keyword',
  KEY `fk_blog_id` (`blog_id`),
  KEY `fk_key_id4` (`key_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table keyword_book_rel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `keyword_book_rel`;

CREATE TABLE `keyword_book_rel` (
  `book_id` int(8) unsigned zerofill NOT NULL COMMENT 'book_id->name of lib book',
  `key_id` int(8) unsigned zerofill NOT NULL COMMENT 'key_id-> keyword for the book',
  KEY `fk_book_id3` (`book_id`),
  KEY `fk_key_id2` (`key_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table keyword_ncert_rel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `keyword_ncert_rel`;

CREATE TABLE `keyword_ncert_rel` (
  `book_id` int(8) unsigned zerofill NOT NULL COMMENT 'book id->ncert book name',
  `key_id` int(8) unsigned zerofill NOT NULL COMMENT 'key_id->keyword',
  KEY `fk_ncert_book_id` (`book_id`),
  KEY `fk_key_id` (`key_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table keyword_showcase_rel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `keyword_showcase_rel`;

CREATE TABLE `keyword_showcase_rel` (
  `media_id` int(8) unsigned zerofill NOT NULL COMMENT 'media_id->media',
  `key_id` int(8) unsigned zerofill NOT NULL COMMENT 'key_id->keyword',
  KEY `fk_media_id` (`media_id`),
  KEY `fk_key_id3` (`key_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table keyword_thread_rel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `keyword_thread_rel`;

CREATE TABLE `keyword_thread_rel` (
  `thread_id` int(8) unsigned zerofill NOT NULL COMMENT 'thread_id->thread',
  `key_id` int(8) unsigned zerofill NOT NULL COMMENT 'key_id->keyword',
  KEY `fk_thread_id` (`thread_id`),
  KEY `fk_key_id5` (`key_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table keywords_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `keywords_info`;

CREATE TABLE `keywords_info` (
  `key_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique id to keyword',
  `keyword` varchar(32) NOT NULL DEFAULT '' COMMENT 'a keyword',
  PRIMARY KEY (`key_id`),
  KEY `keyword` (`keyword`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table lib_book_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `lib_book_info`;

CREATE TABLE `lib_book_info` (
  `book_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique book id',
  `book_title` varchar(128) NOT NULL DEFAULT '' COMMENT 'name of the book',
  `published` int(2) unsigned zerofill DEFAULT NULL COMMENT 'year of publication',
  `rating` tinyint(1) unsigned zerofill DEFAULT NULL COMMENT 'popular rating',
  `chapters` int(4) DEFAULT NULL COMMENT 'no of chapters',
  `pages` int(4) DEFAULT NULL COMMENT 'no of pages',
  `isAvailLib` tinyint(1) NOT NULL COMMENT 'available in library',
  `isAvailDown` tinyint(1) NOT NULL COMMENT 'available as ebook',
  `download_link` text,
  `size` float DEFAULT NULL COMMENT 'Size of book',
  `buy_link` text,
  `quote` text,
  `description` text COMMENT 'description of the book',
  `characters` text,
  `img` tinyint(4) NOT NULL COMMENT 'Bool value specifies if cover image exists',
  `author_list` text NOT NULL COMMENT 'list of authors',
  `genre_list` text NOT NULL COMMENT 'list of genres',
  `age_restrict` tinyint(1) NOT NULL COMMENT '+16 age restriction on book',
  PRIMARY KEY (`book_id`),
  KEY `book_title` (`book_title`),
  KEY `is_soft` (`isAvailDown`),
  KEY `is_hard` (`isAvailLib`),
  KEY `rating` (`rating`),
  KEY `published` (`published`),
  KEY `size` (`size`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `lib_book_info` WRITE;
/*!40000 ALTER TABLE `lib_book_info` DISABLE KEYS */;

INSERT INTO `lib_book_info` (`book_id`, `book_title`, `published`, `rating`, `chapters`, `pages`, `isAvailLib`, `isAvailDown`, `download_link`, `size`, `buy_link`, `quote`, `description`, `characters`, `img`, `author_list`, `genre_list`, `age_restrict`)
VALUES
	(00000002,'The Old Curiosity Shop',1841,7,73,467,0,1,'http://localhost/digilib_admin/admin_Acctool.php?navi=1&amp;tab=1',1.6,NULL,'\"It is a pleasant world we live in, sir, a very pleasant world. There are bad people in it, Mr. Richard, but if there were no bad people, there would be no good lawyers.\"','<p>The Old Curiosity Shop certainly displays the hallmarks of the unstructured, free-flowing make-it-up-as-you-go-along type of story characteristic of Dickens\'s early novels. Indeed, it is rather generous to call it a story, and it\'s difficult now to understand the sensation it caused when it was first published. However, if a page-turning plot was all there was to it, very few of Dickens\'s novels would be readable at all. As ever with Dickens, the pleasure in reading this book comes from the comedy, diversity and richness of the characters, as well as the sheer mastery of the English language which came so naturally to him.</p>\r\n\r\n<p>The central characters are old Trent, his granddaughter Nell, the moneylender Daniel Quilp, young Kit and the wonderful Richard Swiveller. Of these, the spotlessly pure Nell and the irredeemably evil Quilp are the moral opposites around which the book revolves, old Trent is rather a pathetic figure, while Kit\'s sturdy progress from poverty to respectability makes for happier reading. However, it is the moral journey of Swiveller, which perhaps reflects the geographic journey undertaken by Nell and her grandfather, which is the real joy of this book. \r\n</p>\r\n\r\n<p>He enters the book in the guise of a rogue, involved in dubious intrigues with Nell\'s no-good brother and also with the repulsive Quilp. However, from the time that Quilp gets him a job as a clerk in the office of Samson Brass and his sister, the awful Miss Brass, Swiveller\'s basic decency and natural good humour begin to reveal themselves, and his soliloquies and dialogue provide many hilarious moments from that point on. The Dick Swiveller who subsequently meets up with the hapless young girl kept prisoner by Miss Brass is funny, considerate, charming and kind, and a long way from the doubtful type of character that he at first appears to be.\r\nThe book proceeds along two different narrative lines; one which charts the progress of Nell and her grandfather on their long journey, and the other revolving around Swiveller, Quilp and Kit, and to a lesser extent the families of these latter two, as well as \"the single gentleman\" and the little girl memorably christened \"The Marchioness\" by Swiveller. One of the big faults I found with this dual structure is that the characters of one plot line have no contact with those in the other plot line for most of the novel, and it is left to the Quilp, Swiveller and Kit to act out most of the drama. Nell and her grandfather spend most of their time journeying through various scenes of early nineteenth century life in England. Nonetheless these all make for enjoyable reading. One particular scene where Nell and her grandfather sleep beside a furnace in the company of a wretched man who watches the flames is particularly memorable.</p>\r\n\r\n<p>All in all, it\'s not exactly a page-turner, and the ending is not a happy one. I would not recommend this book as an introduction to Dickens, and is best read by people, like myself, who have already decided that anything by Dickens is worth reading. Also it focuses less on London than many Dickens novels, and gives an interesting view of rural, village and town life outside London in those times.</p>','Daniel Quilp, Dick Swiveller, Nell Trent, Kit Nubbles, Grandfather',0,'2','1, 10, 9, 8, 7, 6',0);

/*!40000 ALTER TABLE `lib_book_info` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table lib_links
# ------------------------------------------------------------

DROP TABLE IF EXISTS `lib_links`;

CREATE TABLE `lib_links` (
  `href` text NOT NULL COMMENT 'link',
  `server_id` int(8) unsigned zerofill NOT NULL COMMENT 'server id for the hosted link',
  `book_id` int(8) unsigned zerofill NOT NULL COMMENT 'book id of the link',
  KEY `fk_server_id2` (`server_id`),
  KEY `fk_book_id4` (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table lib_server_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `lib_server_info`;

CREATE TABLE `lib_server_info` (
  `server_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique id for a server',
  `server_name` varchar(32) NOT NULL DEFAULT '' COMMENT 'name of the server',
  `server_url` varchar(128) NOT NULL DEFAULT '' COMMENT 'address of the server',
  `server_description` tinytext NOT NULL COMMENT 'description for the server',
  `server_protocol` varchar(16) NOT NULL DEFAULT '' COMMENT 'protocol used by the server',
  `server_username` tinytext NOT NULL COMMENT 'server username',
  `server_password` tinytext NOT NULL COMMENT 'server password',
  PRIMARY KEY (`server_id`),
  KEY `server_name` (`server_name`),
  KEY `server_url` (`server_url`),
  KEY `server_protocol` (`server_protocol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table like_thread_user_rel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `like_thread_user_rel`;

CREATE TABLE `like_thread_user_rel` (
  `user_id` int(8) unsigned zerofill NOT NULL COMMENT 'user_id from user_student_info',
  `thread_id` int(8) unsigned zerofill NOT NULL COMMENT 'thread_id from thread_info',
  `context` tinyint(1) unsigned NOT NULL COMMENT '0=>dislike, 1=>like,',
  KEY `fk_usr_id` (`user_id`),
  KEY `fk_thread_rl` (`thread_id`),
  CONSTRAINT `fk_thread_rl` FOREIGN KEY (`thread_id`) REFERENCES `thread_info` (`thread_id`),
  CONSTRAINT `fk_usr_id` FOREIGN KEY (`user_id`) REFERENCES `user_student_info` (`student_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table ncert_book_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ncert_book_info`;

CREATE TABLE `ncert_book_info` (
  `book_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique book id',
  `book_title` varchar(128) NOT NULL DEFAULT '' COMMENT 'name of the book',
  `book_link` text NOT NULL,
  `buy_link` text NOT NULL,
  `chapter_no` int(4) unsigned DEFAULT NULL COMMENT 'no of chapters in the book',
  `rating` tinyint(1) unsigned zerofill NOT NULL DEFAULT '0' COMMENT 'popular rating of the book',
  `grade` tinyint(1) NOT NULL DEFAULT '12' COMMENT 'grade for the class the book is',
  `chapter_info` text COMMENT 'chapter info',
  `size` float NOT NULL DEFAULT '0',
  `isAvailLib` int(11) NOT NULL DEFAULT '0',
  `isAvailDown` int(11) NOT NULL DEFAULT '0',
  `img` tinyint(1) NOT NULL,
  PRIMARY KEY (`book_id`),
  UNIQUE KEY `book_title_2` (`book_title`),
  KEY `book_title` (`book_title`),
  KEY `rating` (`rating`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `ncert_book_info` WRITE;
/*!40000 ALTER TABLE `ncert_book_info` DISABLE KEYS */;

INSERT INTO `ncert_book_info` (`book_id`, `book_title`, `book_link`, `buy_link`, `chapter_no`, `rating`, `grade`, `chapter_info`, `size`, `isAvailLib`, `isAvailDown`, `img`)
VALUES
	(00000001,'Mathematics Part 1 Class XII','http://1drv.ms/1LD9FEP','',6,7,12,'Chapter 1 Relations And Functions|https://onedrive.live.com/embed?cid=36F70FF47AC92B61&resid=36F70FF47AC92B61%2177629&authkey=AJmnD8jTbIg5xNE&em=2|Chapter 2 Inverse Trigonometric Functions|https://onedrive.live.com/embed?cid=36F70FF47AC92B61&resid=36F70FF47AC92B61%2177630&authkey=AFov8qjV5YoCZ-0&em=2|Chapter 3 Matrices|https://onedrive.live.com/embed?cid=36F70FF47AC92B61&resid=36F70FF47AC92B61%2177633&authkey=AHoF6wDg-Q7e-Rc&em=2|Chapter 4 Determinants|https://onedrive.live.com/embed?cid=36F70FF47AC92B61&resid=36F70FF47AC92B61%2177627&authkey=AHRWXyLGBKQRUWw&em=2|Chapter 5 Continuity and Diffrentiability|https://onedrive.live.com/embed?cid=36F70FF47AC92B61&resid=36F70FF47AC92B61%2177632&authkey=AE28Zp2tMbuFig0&em=2|Chapter 6 Application of Derivatives|https://onedrive.live.com/embed?cid=36F70FF47AC92B61&resid=36F70FF47AC92B61%2177631&authkey=ALJ3LgEN1ueHvXk&em=2|Answers|https://onedrive.live.com/embed?cid=36F70FF47AC92B61&resid=36F70FF47AC92B61%2177626&authkey=AHtL9wRgnJ3BbHE&em=2',16.36,0,1,1),
	(00000002,'Mathematics Part 2 Class XII','','',7,8,12,NULL,20.12,0,1,1),
	(00000003,'Chemistry Part 1 Class XII','','',9,6,12,NULL,43.83,0,1,1),
	(00000004,'Chemistry Part 2 Class XII','','',7,4,12,NULL,22.71,0,1,1),
	(00000005,'Physics Part 1 Class XII','','',8,3,12,NULL,21.11,0,1,1),
	(00000006,'Physics Part 2 Class XII','','',7,5,12,NULL,18.05,0,1,1),
	(00000007,'Flamingo','','',14,9,12,NULL,0.07,0,1,1),
	(00000008,'Vistas','','',8,8,12,NULL,0.28,0,1,1);

/*!40000 ALTER TABLE `ncert_book_info` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table ncert_links
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ncert_links`;

CREATE TABLE `ncert_links` (
  `href` text NOT NULL COMMENT 'link for the item',
  `server_id` int(4) unsigned zerofill NOT NULL COMMENT 'server id for the hosted link',
  `context` tinyint(1) unsigned zerofill NOT NULL COMMENT 'context: book(1),notes(2),oldq(3),ass(4),samp(5)',
  KEY `server_id` (`server_id`),
  KEY `context` (`context`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ncert_referencebook_subject_rel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ncert_referencebook_subject_rel`;

CREATE TABLE `ncert_referencebook_subject_rel` (
  `subject_id` int(4) unsigned zerofill NOT NULL COMMENT 'subject_id->subject of a grade',
  `grade` tinyint(1) unsigned zerofill NOT NULL COMMENT 'grade of a subject',
  `ref_book_id` int(8) unsigned zerofill NOT NULL COMMENT 'elibrary book id',
  KEY `fk_subject_id2` (`subject_id`),
  KEY `grade` (`grade`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ncert_server_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ncert_server_info`;

CREATE TABLE `ncert_server_info` (
  `server_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique id for a server',
  `server_name` varchar(32) NOT NULL DEFAULT '' COMMENT 'name of the server',
  `server_url` varchar(128) NOT NULL DEFAULT '' COMMENT 'address of the server',
  `server_description` tinytext NOT NULL COMMENT 'description for the server',
  `server_protocol` varchar(16) NOT NULL DEFAULT '' COMMENT 'protocol used by the server',
  `server_username` tinytext NOT NULL COMMENT 'server username',
  `server_password` tinytext NOT NULL COMMENT 'server password',
  PRIMARY KEY (`server_id`),
  KEY `server_name` (`server_name`),
  KEY `server_url` (`server_url`),
  KEY `server_protocol` (`server_protocol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table ncert_topic_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `ncert_topic_info`;

CREATE TABLE `ncert_topic_info` (
  `topic_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique\ntopic id ',
  `topic_name` varchar(64) NOT NULL DEFAULT '' COMMENT 'topic name',
  `rating` tinyint(1) unsigned zerofill NOT NULL COMMENT 'popularity of topic',
  PRIMARY KEY (`topic_id`),
  KEY `topic_name` (`topic_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table scat_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `scat_info`;

CREATE TABLE `scat_info` (
  `scat_id` int(8) unsigned NOT NULL AUTO_INCREMENT COMMENT 'unique id to small cat',
  `scat_name` varchar(32) NOT NULL DEFAULT '' COMMENT 'name of small cat',
  `description` varchar(128) DEFAULT NULL COMMENT 'quick description to small cat',
  `bcat_id` int(8) unsigned zerofill NOT NULL COMMENT 'id of broad cat',
  PRIMARY KEY (`scat_id`),
  KEY `fk_bcat_rel` (`bcat_id`),
  KEY `scat_name` (`scat_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table showcase_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `showcase_info`;

CREATE TABLE `showcase_info` (
  `media_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique id to media',
  `topic_id` int(8) unsigned zerofill NOT NULL COMMENT 'topic_id->topic name',
  `media_title` varchar(32) NOT NULL DEFAULT '' COMMENT 'heading of the media',
  `description` tinytext COMMENT 'description for media ',
  `rating` tinyint(1) unsigned zerofill NOT NULL DEFAULT '0' COMMENT 'popular rating',
  `href` tinytext COMMENT 'link of the media:optional',
  `embed` tinytext NOT NULL COMMENT 'embed rule for the media',
  PRIMARY KEY (`media_id`),
  KEY `fk_topic_id2` (`topic_id`),
  KEY `media_title` (`media_title`),
  KEY `rating` (`rating`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table subject_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `subject_info`;

CREATE TABLE `subject_info` (
  `subject_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique subject id',
  `subject` varchar(32) NOT NULL DEFAULT '' COMMENT 'subject name',
  PRIMARY KEY (`subject_id`),
  KEY `subject_name` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `subject_info` WRITE;
/*!40000 ALTER TABLE `subject_info` DISABLE KEYS */;

INSERT INTO `subject_info` (`subject_id`, `subject`)
VALUES
	(0007,'CHEMISTRY'),
	(0006,'COMPUTER SCIENCE'),
	(0003,'ENGLISH'),
	(0005,'GERMAN'),
	(0004,'HINDI'),
	(0001,'MATHEMATICS'),
	(0002,'PHYSICS');

/*!40000 ALTER TABLE `subject_info` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table thread_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `thread_info`;

CREATE TABLE `thread_info` (
  `thread_id` int(8) unsigned zerofill NOT NULL DEFAULT '00000000' COMMENT 'unique thread id',
  `dcq_id` int(8) unsigned zerofill NOT NULL COMMENT 'foreign dcq id',
  `content` varchar(256) NOT NULL DEFAULT '' COMMENT 'content of the thread',
  `in_replay_to` int(8) unsigned zerofill DEFAULT NULL,
  `published` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT 'date of publishing',
  `user_id` int(8) unsigned zerofill NOT NULL COMMENT 'user_id of publisher',
  `context` tinyint(1) NOT NULL COMMENT 'Context of the thread for futur purposes',
  `likes` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'likes',
  `dislikes` int(11) unsigned NOT NULL DEFAULT '0' COMMENT 'dislikes',
  PRIMARY KEY (`thread_id`),
  KEY `fk_dcq_rel` (`dcq_id`),
  KEY `in_replay_to` (`in_replay_to`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `fk_dcq_rel` FOREIGN KEY (`dcq_id`) REFERENCES `dcq_thread_info` (`dcq_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table user_class_subject_teacher_rel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_class_subject_teacher_rel`;

CREATE TABLE `user_class_subject_teacher_rel` (
  `class_id` int(4) unsigned zerofill NOT NULL COMMENT 'class id ->section and grade',
  `subject_id` int(4) unsigned zerofill NOT NULL COMMENT 'subject id->subject name',
  `teacher_id` int(8) unsigned zerofill NOT NULL COMMENT 'teacher id->teacher',
  KEY `fk_class_id` (`class_id`),
  KEY `fk_subject_id` (`subject_id`),
  KEY `fk_teacher_id` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;



# Dump of table user_passreset_temp
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_passreset_temp`;

CREATE TABLE `user_passreset_temp` (
  `user_id` int(8) unsigned zerofill DEFAULT NULL,
  `onetime_serial` varchar(128) NOT NULL DEFAULT '',
  `sql_data` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  UNIQUE KEY `onetime_serial` (`onetime_serial`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user_passreset_temp` WRITE;
/*!40000 ALTER TABLE `user_passreset_temp` DISABLE KEYS */;

INSERT INTO `user_passreset_temp` (`user_id`, `onetime_serial`, `sql_data`, `time`)
VALUES
	(NULL,'088368c80885ffb79dfd96a14e0d124f','\n                    INSERT INTO `user_student_info` \n                    (email_id, pass, first_name, last_name, gender, dob, notifications, history, is_mod, registered) \n                    VALUES (\'sampurng@gmail.com\', \'3a0515fc443ee3df8b932d09a30d485e\', \'sampurn\', \'g\', \'1\', \'1999-09-29\', \'Welcome to BBPS DigitalLibrary|\', \'Joined Digilib on Wednesday 2015/11/18 at 07:50:21am|\', \'0\', \'1\');','2015-11-18 12:20:21');

/*!40000 ALTER TABLE `user_passreset_temp` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_student_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_student_info`;

CREATE TABLE `user_student_info` (
  `student_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique student id',
  `email_id` varchar(128) NOT NULL DEFAULT '' COMMENT 'unique email id',
  `pass` char(32) NOT NULL DEFAULT '' COMMENT 'password 128bit md5hash',
  `first_name` varchar(64) NOT NULL DEFAULT '' COMMENT 'first name of student',
  `last_name` varchar(64) NOT NULL DEFAULT '' COMMENT 'last name of student',
  `gender` tinyint(1) unsigned zerofill NOT NULL COMMENT 'gender',
  `class_id` int(3) unsigned zerofill DEFAULT NULL COMMENT 'class id fked to\\nclass_info',
  `dob` date NOT NULL COMMENT 'dob of the student',
  `points` int(6) NOT NULL DEFAULT '0' COMMENT 'points earned',
  `badges` varchar(10) NOT NULL DEFAULT '0000000000' COMMENT 'badges collected',
  `notifications` text COMMENT 'activity notification',
  `history` text COMMENT 'history of activity',
  `is_mod` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'moderator status',
  `registered` tinyint(1) unsigned zerofill NOT NULL DEFAULT '0',
  `cookie_hash` char(34) DEFAULT NULL COMMENT 'cookie hash',
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `email_id` (`email_id`),
  KEY `name` (`first_name`,`last_name`),
  KEY `fk_class_id2` (`class_id`),
  KEY `pass` (`pass`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `user_student_info` WRITE;
/*!40000 ALTER TABLE `user_student_info` DISABLE KEYS */;

INSERT INTO `user_student_info` (`student_id`, `email_id`, `pass`, `first_name`, `last_name`, `gender`, `class_id`, `dob`, `points`, `badges`, `notifications`, `history`, `is_mod`, `registered`, `cookie_hash`)
VALUES
	(00000016,'sal.uncd@gmail.com','58f40ca76ce7c541008d82adba159ac9','Sal','Singh',1,NULL,'1998-10-10',0,'0000000000','Welcome to BBPS DigitalLibrary|','Joined Digilib on Sunday 2015/11/08 at 06:58:32am|',1,1,'7bd33b6351396b28096aeba37dee036e');

/*!40000 ALTER TABLE `user_student_info` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table user_teacher_info
# ------------------------------------------------------------

DROP TABLE IF EXISTS `user_teacher_info`;

CREATE TABLE `user_teacher_info` (
  `teacher_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique teacher id',
  `email_id` varchar(128) NOT NULL DEFAULT '' COMMENT 'unique email id',
  `pass` char(32) NOT NULL DEFAULT '' COMMENT 'password',
  `first_name` varchar(64) NOT NULL DEFAULT '' COMMENT 'first name of teacher',
  `last_name` varchar(64) NOT NULL DEFAULT '' COMMENT 'lastname of teacher',
  `gender` tinyint(3) unsigned zerofill NOT NULL COMMENT 'gender',
  `dob` date NOT NULL COMMENT 'dob of teacher',
  `serial` int(11) DEFAULT NULL COMMENT 'teacher serial',
  `backup_email` varchar(128) NOT NULL DEFAULT '' COMMENT 'backup email',
  `teacher_time_table` text COMMENT 'time table of teacher',
  PRIMARY KEY (`teacher_id`),
  UNIQUE KEY `email_id` (`email_id`),
  KEY `name` (`first_name`,`last_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
