-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.1.32-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win32
-- HeidiSQL Version:             10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table thetravelfare.about_us
CREATE TABLE IF NOT EXISTS `about_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `about_desc` longtext,
  `service1` varchar(255) DEFAULT NULL,
  `service2` varchar(255) DEFAULT NULL,
  `service3` varchar(255) DEFAULT NULL,
  `service4` varchar(255) DEFAULT NULL,
  `about_img` text,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table thetravelfare.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(60) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table thetravelfare.car_rent
CREATE TABLE IF NOT EXISTS `car_rent` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `car_desc` longtext,
  `car_rule` longtext,
  `car_img` text,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table thetravelfare.contact_us
CREATE TABLE IF NOT EXISTS `contact_us` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contactno` varchar(50) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table thetravelfare.foreignexchange
CREATE TABLE IF NOT EXISTS `foreignexchange` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `foreign_desc` longtext,
  `foreign_rule` longtext,
  `foreign_img` text,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table thetravelfare.img_gallery
CREATE TABLE IF NOT EXISTS `img_gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img_name` varchar(50) DEFAULT NULL,
  `t_img` text,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table thetravelfare.popular_tour
CREATE TABLE IF NOT EXISTS `popular_tour` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `package_name` varchar(255) DEFAULT NULL,
  `package_price` int(11) DEFAULT NULL,
  `package_img` text,
  `url_link` longtext,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table thetravelfare.privacy_policy
CREATE TABLE IF NOT EXISTS `privacy_policy` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `policy_desc` longtext,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table thetravelfare.slider
CREATE TABLE IF NOT EXISTS `slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `slider_title` varchar(255) DEFAULT NULL,
  `slider_text` varchar(55) DEFAULT NULL,
  `slider_img` text,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table thetravelfare.term
CREATE TABLE IF NOT EXISTS `term` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `term_desc` longtext,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table thetravelfare.testimonial
CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(50) DEFAULT NULL,
  `client_img` text,
  `review` longtext,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table thetravelfare.tourpackage
CREATE TABLE IF NOT EXISTS `tourpackage` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `trip_name` longtext,
  `trip_day` varchar(50) DEFAULT NULL,
  `package_price` varchar(50) DEFAULT NULL,
  `trip_desc` longtext,
  `trip_img` text,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table thetravelfare.travel_insurance
CREATE TABLE IF NOT EXISTS `travel_insurance` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `travel_desc` longtext,
  `travel_rule` longtext,
  `travel_img` text,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table thetravelfare.video_slider
CREATE TABLE IF NOT EXISTS `video_slider` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `video` text,
  `video_title` varchar(255) DEFAULT NULL,
  `mime_type` varchar(255) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
-- Dumping structure for table thetravelfare.visa
CREATE TABLE IF NOT EXISTS `visa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visa_desc` longtext,
  `visa_rule` longtext NOT NULL,
  `visa_img` text,
  `created_at` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
