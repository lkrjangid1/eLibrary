CREATE TABLE `author_book_rel` (
  `author_id` int(8) unsigned zerofill NOT NULL COMMENT 'author id-> author
name',
  `book_id` int(8) unsigned zerofill NOT NULL COMMENT 'book id-> book',
  `context` tinyint(1) NOT NULL COMMENT 'context:elib[1],ncert[2]',
  KEY `fk_author_id2` (`author_id`),
  KEY `context` (`context`),
  KEY `book_id` (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `author_dinfo` (
`author_id` int(8) unsigned zerofill NOT NULL COMMENT 'author id->author name', `life` varchar(32) NOT NULL DEFAULT '-N/A-' COMMENT 'life:lived from date to date',
`bio` text NOT NULL COMMENT 'biography/description',
`rating` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'popular rating', `reference_links` tinytext COMMENT 'external links for reference',
KEY `fk_author_id` (`author_id`),
KEY `rating` (`rating`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `author_info` (
  `author_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique
author id',
  `author_name` varchar(128) NOT NULL DEFAULT '' COMMENT 'unique author name',
  `is_detailed` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'has detailed info',
  PRIMARY KEY (`author_id`),
  KEY `author_name` (`author_name`),
  KEY `is_detailed` (`is_detailed`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `bcat_info` (
`bcat_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique id to broad category ',
`bcat_name` varchar(32) NOT NULL DEFAULT '' COMMENT 'name of broad category', `description` varchar(128) DEFAULT NULL COMMENT 'small decription of it', PRIMARY KEY (`bcat_id`),
KEY `bcat_name` (`bcat_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `blog_info` (
`blog_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique id to blog',
`blog_title` varchar(128) DEFAULT NULL COMMENT 'title of blog',
`user_id` int(8) unsigned zerofill NOT NULL COMMENT 'user_id->name of author', `is_student` tinyint(1) unsigned zerofill NOT NULL COMMENT 'is student or teacher',
`description` varchar(256) DEFAULT '' COMMENT 'small description',
`blog` text COMMENT 'blog',
`published` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT 'time of publishing',
`cont_to` int(8) DEFAULT NULL COMMENT 'if in continuty then previous blog_id ', `rating` tinyint(1) unsigned zerofill NOT NULL DEFAULT '0' COMMENT 'popular rating',
`scat_id` int(8) unsigned zerofill NOT NULL COMMENT 'small cat id-> category', PRIMARY KEY (`blog_id`),
KEY `fk_scat_id` (`scat_id`),
KEY `blog_title` (`blog_title`),
KEY `user_id` (`user_id`),
KEY `is_student` (`is_student`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `career_info` (
  `career_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique
career id',
  `career_name` varchar(128) NOT NULL DEFAULT '' COMMENT 'name of the career',
  `description` text NOT NULL COMMENT 'decription of the career',
  `reference_links` text COMMENT 'links for further reference',
  PRIMARY KEY (`career_id`),
  KEY `career_name` (`career_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `class_info` (
`class_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique class id',
`grade` tinyint(1) unsigned zerofill DEFAULT '0' COMMENT 'grade 1-12', `section` tinyint(1) unsigned zerofill NOT NULL DEFAULT '0' COMMENT 'sections A-H',
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
CREATE TABLE `dcq_cat_info` (
`dcqcat_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique dcqcat_id',
`dcq_cat` varchar(16) DEFAULT NULL COMMENT 'name of the page: eg elibrary, author, ncert',
PRIMARY KEY (`dcqcat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 
CREATE TABLE `dcq_thread_info` (
`context_id` int(8) unsigned zerofill NOT NULL COMMENT 'context of the page: eg
author_id for author page',
  `dcqcat_id` int(8) unsigned zerofill NOT NULL COMMENT 'dcq cat of the page',
  `dcq_thread` text NOT NULL COMMENT 'comment thread',
  PRIMARY KEY (`context_id`),
  KEY `fk_dcqid` (`dcqcat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `devlop_authors_userid_rel` (
`user_id` int(8) unsigned zerofill NOT NULL COMMENT 'user_id->user name', `is_student` tinyint(1) NOT NULL COMMENT 'is user student or teacher', `devlop_id` int(8) unsigned zerofill NOT NULL COMMENT 'devlop_id->devlop page', `post` varchar(32) DEFAULT '' COMMENT 'post of the mod user added',
KEY `fk_devlop_id2` (`devlop_id`),
KEY `user_id` (`user_id`),
KEY `is_student` (`is_student`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `devlop_info` (
`devlop_id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'unique app id', `devlop_title` varchar(64) NOT NULL DEFAULT '' COMMENT 'title of app', `devlop_description` text COMMENT 'description of the app',
`published` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT 'time of publishing',
`user_id` int(8) unsigned zerofill NOT NULL COMMENT 'user id->of publisher', `is_student` tinyint(1) unsigned zerofill NOT NULL DEFAULT '1' COMMENT 'is student or teacher',
`thread_id` int(8) unsigned zerofill NOT NULL COMMENT 'thread_id->thread related',
`status` tinyint(1) unsigned zerofill NOT NULL COMMENT 'status:open or closed', `rating` tinyint(1) unsigned zerofill NOT NULL COMMENT 'popular rating', `scat_id` int(8) unsigned zerofill NOT NULL COMMENT 'scat_id->small cat of app',
PRIMARY KEY (`devlop_id`),
KEY `fk_scat_id3` (`scat_id`),
KEY `fk_thread_id2` (`thread_id`),
KEY `devlop_title` (`devlop_title`),
KEY `rating` (`rating`),
KEY `status` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
CREATE TABLE `devlop_links` (
`href` text NOT NULL COMMENT 'link to the file',
`devlop_id` int(8) unsigned zerofill NOT NULL COMMENT 'devlop id-> app', `server_id` int(4) unsigned zerofill NOT NULL COMMENT 'server id->server', KEY `fk_server_id3` (`server_id`),
KEY `fk_devlop_id` (`devlop_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `devlop_server_info` (
`server_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique server id',
`server_name` varchar(32) NOT NULL DEFAULT '' COMMENT 'name of the server', `server_url` varchar(128) NOT NULL DEFAULT '' COMMENT 'address of server', `server_description` tinytext COMMENT 'description of server', PRIMARY KEY (`server_id`),
  KEY `server_name` (`server_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `exam_info` (
`exam_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique exam id',
`exam_name` varchar(128) NOT NULL DEFAULT '' COMMENT 'name of exam', `description` text NOT NULL COMMENT 'description of exam: requirements and all',
`reference_links` text COMMENT 'links to refer further',
PRIMARY KEY (`exam_id`),
KEY `exam_name` (`exam_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `genre_book_rel` (
`book_id` int(8) unsigned zerofill NOT NULL COMMENT 'book_id->name of lib book',
`genre_id` int(8) unsigned zerofill NOT NULL COMMENT 'genre id-> genre of book',
KEY `fk_book_id2` (`book_id`),
KEY `fk_genre_id` (`genre_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `genre_info` (
`genre_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique id to genre',
`genre` varchar(32) NOT NULL DEFAULT '' COMMENT 'name of genre',
PRIMARY KEY (`genre_id`),
KEY `genre` (`genre`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `keyword_blog_rel` (
`blog_id` int(8) unsigned zerofill NOT NULL COMMENT 'blog_id->blog', `key_id` int(8) unsigned zerofill NOT NULL COMMENT 'key_id->keyword', KEY `fk_blog_id` (`blog_id`),
KEY `fk_key_id4` (`key_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `keyword_book_rel` (
`book_id` int(8) unsigned zerofill NOT NULL COMMENT 'book_id->name of lib book',
`key_id` int(8) unsigned zerofill NOT NULL COMMENT 'key_id-> keyword for the book',
KEY `fk_book_id3` (`book_id`),
KEY `fk_key_id2` (`key_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `keyword_ncert_rel` (
`book_id` int(8) unsigned zerofill NOT NULL COMMENT 'book id->ncert book name', `key_id` int(8) unsigned zerofill NOT NULL COMMENT 'key_id->keyword',
KEY `fk_ncert_book_id` (`book_id`),
KEY `fk_key_id` (`key_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `keyword_showcase_rel` (
`media_id` int(8) unsigned zerofill NOT NULL COMMENT 'media_id->media', `key_id` int(8) unsigned zerofill NOT NULL COMMENT 'key_id->keyword', KEY `fk_media_id` (`media_id`),
  KEY `fk_key_id3` (`key_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `keyword_thread_rel` (
`thread_id` int(8) unsigned zerofill NOT NULL COMMENT 'thread_id->thread', `key_id` int(8) unsigned zerofill NOT NULL COMMENT 'key_id->keyword',
KEY `fk_thread_id` (`thread_id`),
KEY `fk_key_id5` (`key_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `keywords_info` (
`key_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique id to keyword',
`keyword` varchar(32) NOT NULL DEFAULT '' COMMENT 'a keyword',
PRIMARY KEY (`key_id`),
KEY `keyword` (`keyword`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `lib_book_info` (
`book_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique book id',
`book_title` varchar(128) NOT NULL DEFAULT '' COMMENT 'name of the book', `chapters` int(4) DEFAULT NULL COMMENT 'no of chapters',
`pages` int(4) DEFAULT NULL COMMENT 'no of pages',
`is_hard` tinyint(1) NOT NULL COMMENT 'available in library',
`is_soft` tinyint(1) NOT NULL COMMENT 'available as ebook',
`description` text COMMENT 'description of the book',
`published` int(2) unsigned zerofill DEFAULT NULL COMMENT 'year of publication',
`rating` tinyint(1) unsigned zerofill DEFAULT NULL COMMENT 'popular rating', PRIMARY KEY (`book_id`),
KEY `book_title` (`book_title`),
KEY `is_soft` (`is_soft`),
KEY `is_hard` (`is_hard`),
KEY `rating` (`rating`),
KEY `published` (`published`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `lib_links` (
`href` text NOT NULL COMMENT 'link',
`server_id` int(8) unsigned zerofill NOT NULL COMMENT 'server id for the hosted link',
`book_id` int(8) unsigned zerofill NOT NULL COMMENT 'book id of the link',
KEY `fk_server_id2` (`server_id`),
KEY `fk_book_id4` (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `lib_server_info` (
`server_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique id for a server',
`server_name` varchar(32) NOT NULL DEFAULT '' COMMENT 'name of the server', `server_url` varchar(128) NOT NULL DEFAULT '' COMMENT 'address of the server', `server_description` tinytext NOT NULL COMMENT 'description for the server', `server_protocol` varchar(16) NOT NULL DEFAULT '' COMMENT 'protocol used by the server',
`server_username` tinytext NOT NULL COMMENT 'server username', `server_password` tinytext NOT NULL COMMENT 'server password', PRIMARY KEY (`server_id`),
  KEY `server_name` (`server_name`),
  KEY `server_url` (`server_url`),
  KEY `server_protocol` (`server_protocol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `ncert_book_info` (
`book_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique book id',
`book_title` varchar(128) NOT NULL DEFAULT '' COMMENT 'name of the book', `chapters` int(4) unsigned DEFAULT NULL COMMENT 'no of chapters in the book', `pages` int(4) unsigned DEFAULT NULL COMMENT 'total no of pages in the book', `rating` tinyint(1) unsigned zerofill NOT NULL COMMENT 'popular rating of the book',
`grade` tinyint(1) NOT NULL COMMENT 'grade for the class the book is', `subject_id` int(4) NOT NULL COMMENT 'subject of the book for the grade specified',
PRIMARY KEY (`book_id`),
KEY `book_title` (`book_title`),
KEY `rating` (`rating`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `ncert_chapter_info` (
`chapter_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique chapter id',
`chapter_no` int(2) unsigned NOT NULL COMMENT 'chapter no/unit', `chapter_title` varchar(64) NOT NULL DEFAULT '' COMMENT 'chapter name', `book_id` int(8) unsigned zerofill NOT NULL COMMENT 'id of book-the chapter is in',
`solution_thread` longtext COMMENT 'questions and solutions for the chapter', PRIMARY KEY (`chapter_id`),
KEY `chapter_no` (`chapter_no`),
KEY `chapter_title` (`chapter_title`),
KEY `book_id` (`book_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `ncert_chapter_topic_rel` (
`chapter_id` int(8) unsigned zerofill NOT NULL COMMENT 'chapter id->chapter of a book',
`topic_id` int(8) unsigned zerofill NOT NULL COMMENT 'topic id->topics in the chapter',
KEY `chapter_id` (`chapter_id`),
KEY `topic_id` (`topic_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `ncert_links` (
`href` text NOT NULL COMMENT 'link for the item',
`server_id` int(4) unsigned zerofill NOT NULL COMMENT 'server id for the hosted link',
`context` tinyint(1) unsigned zerofill NOT NULL COMMENT 'context: book(1),notes(2),oldq(3),ass(4),samp(5)',
KEY `server_id` (`server_id`),
KEY `context` (`context`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `ncert_referencebook_subject_rel` (
`subject_id` int(4) unsigned zerofill NOT NULL COMMENT 'subject_id->subject of a grade', `grade` tinyint(1) unsigned zerofill NOT NULL COMMENT 'grade of a subject', `ref_book_id` int(8) unsigned zerofill NOT NULL COMMENT 'elibrary book id',
  KEY `fk_subject_id2` (`subject_id`),
  KEY `grade` (`grade`) ) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `ncert_server_info` (
`server_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique id for a server',
`server_name` varchar(32) NOT NULL DEFAULT '' COMMENT 'name of the server', `server_url` varchar(128) NOT NULL DEFAULT '' COMMENT 'address of the server', `server_description` tinytext NOT NULL COMMENT 'description for the server', `server_protocol` varchar(16) NOT NULL DEFAULT '' COMMENT 'protocol used by the server',
`server_username` tinytext NOT NULL COMMENT 'server username', `server_password` tinytext NOT NULL COMMENT 'server password',
PRIMARY KEY (`server_id`),
KEY `server_name` (`server_name`),
KEY `server_url` (`server_url`),
KEY `server_protocol` (`server_protocol`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `ncert_topic_info` (
`topic_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique
topic id ',
  `topic_name` varchar(64) NOT NULL DEFAULT '' COMMENT 'topic name',
  `rating` tinyint(1) unsigned zerofill NOT NULL COMMENT 'popularity of topic',
  PRIMARY KEY (`topic_id`),
  KEY `topic_name` (`topic_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `scat_info` (
`scat_id` int(8) unsigned NOT NULL AUTO_INCREMENT COMMENT 'unique id to small cat',
`scat_name` varchar(32) NOT NULL DEFAULT '' COMMENT 'name of small cat', `description` varchar(128) DEFAULT NULL COMMENT 'quick description to small cat',
`bcat_id` int(8) unsigned zerofill NOT NULL COMMENT 'id of broad cat', PRIMARY KEY (`scat_id`),
KEY `fk_bcat_rel` (`bcat_id`),
KEY `scat_name` (`scat_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `showcase_info` (
`media_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique id to media',
`topic_id` int(8) unsigned zerofill NOT NULL COMMENT 'topic_id->topic name', `media_title` varchar(32) NOT NULL DEFAULT '' COMMENT 'heading of the media', `description` tinytext COMMENT 'description for media ',
`rating` tinyint(1) unsigned zerofill NOT NULL DEFAULT '0' COMMENT 'popular rating',
`href` tinytext COMMENT 'link of the media:optional',
`embed` tinytext NOT NULL COMMENT 'embed rule for the media',
PRIMARY KEY (`media_id`),
KEY `fk_topic_id2` (`topic_id`),
KEY `media_title` (`media_title`),
KEY `rating` (`rating`) )ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `subject_info` (
`subject_id` int(4) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique subject id',
`subject` varchar(32) NOT NULL DEFAULT '' COMMENT 'subject name',
PRIMARY KEY (`subject_id`),
KEY `subject_name` (`subject`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `thread_info` (
`thread_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique id to a thread',
`thread_title` varchar(128) NOT NULL DEFAULT '' COMMENT 'title of the thread', `thread_description` varchar(256) NOT NULL DEFAULT '' COMMENT 'description of thread',
`scat_id` int(8) unsigned zerofill NOT NULL COMMENT 'scat of thread', `published` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP COMMENT 'date of publishing',
`is_question` tinyint(1) NOT NULL COMMENT 'is question or a page',
`is_solved` tinyint(1) NOT NULL COMMENT 'is solved/unsolved or open/close', `thread` longtext NOT NULL COMMENT 'thread',
`user_id` int(8) unsigned zerofill NOT NULL COMMENT 'user_id of publisher', `is_student` tinyint(1) NOT NULL COMMENT 'is student or teacher',
PRIMARY KEY (`thread_id`),
KEY `fk_scat_id2` (`scat_id`),
KEY `thread_title` (`thread_title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `user_class_subject_teacher_rel` (
`class_id` int(4) unsigned zerofill NOT NULL COMMENT 'class id ->section and grade',
`subject_id` int(4) unsigned zerofill NOT NULL COMMENT 'subject id->subject name',
`teacher_id` int(8) unsigned zerofill NOT NULL COMMENT 'teacher id->teacher', KEY `fk_class_id` (`class_id`),
KEY `fk_subject_id` (`subject_id`),
KEY `fk_teacher_id` (`teacher_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `user_passreset_temp` (
`user_id` int(8) unsigned zerofill NOT NULL, `is_student` tinyint(1) unsigned zerofill NOT NULL, `email` varchar(128) NOT NULL DEFAULT '', `onetime_serial` varchar(128) NOT NULL DEFAULT '', UNIQUE KEY `onetime_serial` (`onetime_serial`), KEY `is_student` (`is_student`),
KEY `user_id` (`user_id`),
KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `user_student_info` (
`student_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique student id',
`email_id` varchar(128) NOT NULL DEFAULT '' COMMENT 'unique email id', `pass` char(32) NOT NULL DEFAULT '' COMMENT 'password 128bit md5hash', `first_name` varchar(64) NOT NULL DEFAULT '' COMMENT 'first name of student', `last_name` varchar(64) NOT NULL DEFAULT '' COMMENT 'last name of student',
`gender` tinyint(1) unsigned zerofill NOT NULL COMMENT 'gender',
  `class_id` int(3) unsigned zerofill NOT NULL COMMENT 'class id fked to
class_info',
  `dob` date NOT NULL COMMENT 'dob of the student',
  `points` int(6) NOT NULL DEFAULT '0' COMMENT 'points earned',
  `badges` varchar(10) NOT NULL DEFAULT '0000000000' COMMENT 'badges collected',
  `notifications` text COMMENT 'activity notification',
  `history` text COMMENT 'history of activity',
  `backup_email` varchar(128) NOT NULL DEFAULT '' COMMENT 'backup email id',
  `is_mod` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'moderator status',
  PRIMARY KEY (`student_id`),
  UNIQUE KEY `email_id` (`email_id`),
  KEY `name` (`first_name`,`last_name`),
  KEY `fk_class_id2` (`class_id`),
  KEY `pass` (`pass`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
CREATE TABLE `user_teacher_info` (
`teacher_id` int(8) unsigned zerofill NOT NULL AUTO_INCREMENT COMMENT 'unique teacher id',
`email_id` varchar(128) NOT NULL DEFAULT '' COMMENT 'unique email id', `pass` char(32) NOT NULL DEFAULT '' COMMENT 'password',
`first_name` varchar(64) NOT NULL DEFAULT '' COMMENT 'first name of teacher', `last_name` varchar(64) NOT NULL DEFAULT '' COMMENT 'lastname of teacher', `gender` tinyint(3) unsigned zerofill NOT NULL COMMENT 'gender',
`dob` date NOT NULL COMMENT 'dob of teacher',
`serial` int(11) DEFAULT NULL COMMENT 'teacher serial',
`backup_email` varchar(128) NOT NULL DEFAULT '' COMMENT 'backup email', `teacher_time_table` text COMMENT 'time table of teacher',
PRIMARY KEY (`teacher_id`),
UNIQUE KEY `email_id` (`email_id`),
KEY `name` (`first_name`,`last_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;