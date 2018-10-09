/*
SQLyog Ultimate v12.11 (64 bit)
MySQL - 5.7.21 : Database - travel_portal_db
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_xnoteS=@@SQL_xnoteS, SQL_xnoteS=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`travel_portal_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `travel_portal_db`;

/*Table structure for table `00000_mst_bed_types` */

DROP TABLE IF EXISTS `00000_mst_bed_types`;

CREATE TABLE `00000_mst_bed_types` (
  `bed_id` int(11) NOT NULL AUTO_INCREMENT,
  `bed_type_name` varchar(50) NOT NULL,
  `arabic_name` varchar(200) DEFAULT NULL,
  `no_of_persons` int(2) NOT NULL,
  `xnote` varchar(2000) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`bed_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_branch` */

DROP TABLE IF EXISTS `00000_mst_branch`;

CREATE TABLE `00000_mst_branch` (
  `branch_id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(50) NOT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`branch_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_category` */

DROP TABLE IF EXISTS `00000_mst_category`;

CREATE TABLE `00000_mst_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_desc` varchar(50) NOT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_city` */

DROP TABLE IF EXISTS `00000_mst_city`;

CREATE TABLE `00000_mst_city` (
  `city_id` int(11) NOT NULL AUTO_INCREMENT,
  `city_name` varchar(50) NOT NULL,
  `city_sht_name` varchar(15) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`city_id`),
  KEY `country_id` (`country_id`),
  KEY `00000_mst_city_ibfk_2` (`state_id`),
  CONSTRAINT `00000_mst_city_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `00000_mst_country` (`country_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `00000_mst_city_ibfk_2` FOREIGN KEY (`state_id`) REFERENCES `00000_mst_state` (`state_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_client` */

DROP TABLE IF EXISTS `00000_mst_client`;

CREATE TABLE `00000_mst_client` (
  `client_id` int(11) NOT NULL AUTO_INCREMENT,
  `client_name` varchar(50) NOT NULL,
  `client_sht_name` varchar(50) DEFAULT NULL,
  `client_name_arabic` varchar(1000) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `salesperson_id` int(11) DEFAULT NULL,
  `salesperson_commission` double(15,2) DEFAULT NULL,
  `recoveryperson_id` int(11) DEFAULT NULL,
  `pay_terms_id` int(11) DEFAULT NULL,
  `credit_limit` double(15,2) DEFAULT NULL,
  `credit_term_desc` varchar(50) DEFAULT NULL,
  `hotel_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `address_arabic` varchar(1000) DEFAULT NULL,
  `gl_ac_no` varchar(50) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `xnote` varchar(2000) DEFAULT NULL,
  `vat_no` varchar(50) DEFAULT NULL,
  `ntn_no` varchar(50) DEFAULT NULL,
  `gst_no` varchar(50) DEFAULT NULL,
  `black_list_flag` tinyint(1) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  `vat_flag` tinyint(1) DEFAULT NULL,
  `gst_flag` tinyint(1) DEFAULT NULL,
  `travel_no` varchar(50) DEFAULT NULL,
  `travel_type_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`client_id`),
  KEY `sp_id` (`salesperson_id`),
  KEY `00.client_ibfk_2` (`country_id`),
  KEY `00.client_ibfk_3` (`city_id`),
  KEY `00.client_ibfk_4` (`pay_terms_id`),
  KEY `00.client_ibfk_5` (`hotel_id`),
  KEY `00.client_ibfk_6` (`travel_type_id`),
  KEY `00000_mst_client_ibfk_7` (`category_id`),
  KEY `00000_mst_client_ibfk_8` (`state_id`),
  CONSTRAINT `00000_mst_client_ibfk_1` FOREIGN KEY (`salesperson_id`) REFERENCES `00000_mst_salesperson` (`salesperson_id`),
  CONSTRAINT `00000_mst_client_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `00000_mst_country` (`country_id`),
  CONSTRAINT `00000_mst_client_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `00000_mst_city` (`city_id`),
  CONSTRAINT `00000_mst_client_ibfk_4` FOREIGN KEY (`pay_terms_id`) REFERENCES `00000_mst_payment_terms` (`pay_terms_id`),
  CONSTRAINT `00000_mst_client_ibfk_5` FOREIGN KEY (`hotel_id`) REFERENCES `00000_mst_hotels` (`hotel_id`),
  CONSTRAINT `00000_mst_client_ibfk_6` FOREIGN KEY (`travel_type_id`) REFERENCES `00000_mst_travel_type` (`travel_type_id`),
  CONSTRAINT `00000_mst_client_ibfk_7` FOREIGN KEY (`category_id`) REFERENCES `00000_mst_category` (`category_id`),
  CONSTRAINT `00000_mst_client_ibfk_8` FOREIGN KEY (`state_id`) REFERENCES `00000_mst_state` (`state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_client_cont_person` */

DROP TABLE IF EXISTS `00000_mst_client_cont_person`;

CREATE TABLE `00000_mst_client_cont_person` (
  `client_id` int(11) NOT NULL,
  `serial_no` int(11) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `person_title` varchar(50) DEFAULT NULL,
  `phone_no` varchar(25) DEFAULT NULL,
  `mobile_no` varchar(25) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  KEY `client_id` (`client_id`),
  CONSTRAINT `00000_mst_client_cont_person_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `00000_mst_client` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_client_contacts` */

DROP TABLE IF EXISTS `00000_mst_client_contacts`;

CREATE TABLE `00000_mst_client_contacts` (
  `client_id` int(11) DEFAULT NULL,
  `serial_no` int(11) DEFAULT NULL,
  `phone_no` varchar(25) DEFAULT NULL,
  `fax_no` varchar(25) DEFAULT NULL,
  `teletex` varchar(25) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  KEY `client_id` (`client_id`),
  CONSTRAINT `00000_mst_client_contacts_ibfk_1` FOREIGN KEY (`client_id`) REFERENCES `00000_mst_client` (`client_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_country` */

DROP TABLE IF EXISTS `00000_mst_country`;

CREATE TABLE `00000_mst_country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(50) DEFAULT NULL,
  `country_sht_name` varchar(15) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_credit_terms` */

DROP TABLE IF EXISTS `00000_mst_credit_terms`;

CREATE TABLE `00000_mst_credit_terms` (
  `credit_term_id` int(11) NOT NULL AUTO_INCREMENT,
  `no_of_days` int(3) NOT NULL,
  `credit_term_desc` varchar(50) NOT NULL,
  `xnote` varchar(200) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`credit_term_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_hotels` */

DROP TABLE IF EXISTS `00000_mst_hotels`;

CREATE TABLE `00000_mst_hotels` (
  `hotel_id` int(11) NOT NULL AUTO_INCREMENT,
  `hotel_name` varchar(100) NOT NULL,
  `hotel_arabic_name` varchar(1000) DEFAULT NULL,
  `category` varchar(50) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `address_arabic` varchar(1000) DEFAULT NULL,
  `gl_ac_no` varchar(25) DEFAULT NULL,
  `alot_gl_ac_no` varchar(25) DEFAULT NULL,
  `cost_center` varchar(25) DEFAULT NULL,
  `vat_no` varchar(50) DEFAULT NULL,
  `gazt_no` varchar(50) DEFAULT NULL,
  `ntn_no` varchar(50) DEFAULT NULL,
  `gst_no` varchar(50) DEFAULT NULL,
  `hot_email_id` varchar(50) DEFAULT NULL,
  `hot_website` varchar(50) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  `web_appear_flag` tinyint(1) DEFAULT NULL,
  `hot_avail_flag` tinyint(1) DEFAULT NULL,
  `vat_flag` tinyint(1) DEFAULT NULL,
  `gst_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`hotel_id`),
  KEY `country_id` (`country_id`),
  KEY `00.hotels_ibfk_2` (`city_id`),
  KEY `00000_mst_hotels_ibfk_3` (`state_id`),
  CONSTRAINT `00000_mst_hotels_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `00000_mst_country` (`country_id`),
  CONSTRAINT `00000_mst_hotels_ibfk_2` FOREIGN KEY (`city_id`) REFERENCES `00000_mst_city` (`city_id`),
  CONSTRAINT `00000_mst_hotels_ibfk_3` FOREIGN KEY (`state_id`) REFERENCES `00000_mst_state` (`state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_hotels_cont_person` */

DROP TABLE IF EXISTS `00000_mst_hotels_cont_person`;

CREATE TABLE `00000_mst_hotels_cont_person` (
  `hotel_id` int(11) NOT NULL,
  `serial_no` int(11) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `person_title` varchar(50) DEFAULT NULL,
  `phone_no` varchar(25) DEFAULT NULL,
  `mobile_no` varchar(25) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  KEY `hotel_id` (`hotel_id`),
  CONSTRAINT `00000_mst_hotels_cont_person_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `00000_mst_hotels` (`hotel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_hotels_contacts` */

DROP TABLE IF EXISTS `00000_mst_hotels_contacts`;

CREATE TABLE `00000_mst_hotels_contacts` (
  `hotel_id` int(11) DEFAULT NULL,
  `serial_no` int(11) DEFAULT NULL,
  `phone_no` varchar(25) DEFAULT NULL,
  `fax_no` varchar(25) DEFAULT NULL,
  `teletex` varchar(25) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  KEY `hotel_id` (`hotel_id`),
  CONSTRAINT `00000_mst_hotels_contacts_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `00000_mst_hotels` (`hotel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_hotels_meal_plans` */

DROP TABLE IF EXISTS `00000_mst_hotels_meal_plans`;

CREATE TABLE `00000_mst_hotels_meal_plans` (
  `hotel_id` int(11) NOT NULL,
  `serial_no` int(11) NOT NULL,
  `meal_plan_id` int(11) DEFAULT NULL,
  `web_flag` tinyint(1) DEFAULT NULL,
  KEY `hotel_id` (`hotel_id`),
  KEY `00.hot_meal_plans_ibfk_2` (`meal_plan_id`),
  CONSTRAINT `00000_mst_hotels_meal_plans_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `00000_mst_hotels` (`hotel_id`),
  CONSTRAINT `00000_mst_hotels_meal_plans_ibfk_2` FOREIGN KEY (`meal_plan_id`) REFERENCES `00000_mst_meal_plans` (`meal_plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_hotels_rooms` */

DROP TABLE IF EXISTS `00000_mst_hotels_rooms`;

CREATE TABLE `00000_mst_hotels_rooms` (
  `hotel_id` int(11) NOT NULL,
  `serial_no` int(11) NOT NULL,
  `room_id` int(11) NOT NULL,
  `bed_id` int(11) DEFAULT NULL,
  `no_of_bed` int(11) DEFAULT NULL,
  `web_flag` tinyint(1) DEFAULT NULL,
  KEY `hotel_id` (`hotel_id`),
  KEY `00.hot_rooms_ibfk_2` (`room_id`),
  KEY `00000_mst_hotels_rooms_ibfk_3` (`bed_id`),
  CONSTRAINT `00000_mst_hotels_rooms_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `00000_mst_hotels` (`hotel_id`),
  CONSTRAINT `00000_mst_hotels_rooms_ibfk_2` FOREIGN KEY (`room_id`) REFERENCES `00000_mst_room_types` (`room_id`),
  CONSTRAINT `00000_mst_hotels_rooms_ibfk_3` FOREIGN KEY (`bed_id`) REFERENCES `00000_mst_bed_types` (`bed_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_hotels_views` */

DROP TABLE IF EXISTS `00000_mst_hotels_views`;

CREATE TABLE `00000_mst_hotels_views` (
  `hotel_id` int(11) NOT NULL,
  `serial_no` int(11) NOT NULL,
  `hot_view_id` int(11) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  KEY `00.hot_views_ibfk_1` (`hotel_id`),
  KEY `00.hot_views_ibfk_2` (`hot_view_id`),
  CONSTRAINT `00000_mst_hotels_views_ibfk_1` FOREIGN KEY (`hotel_id`) REFERENCES `00000_mst_hotels` (`hotel_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `00000_mst_hotels_views_ibfk_2` FOREIGN KEY (`hot_view_id`) REFERENCES `00000_mst_views` (`hot_view_desc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_meal_plans` */

DROP TABLE IF EXISTS `00000_mst_meal_plans`;

CREATE TABLE `00000_mst_meal_plans` (
  `meal_plan_id` int(11) NOT NULL AUTO_INCREMENT,
  `meal_plan_desc` varchar(50) NOT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`meal_plan_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_payment_terms` */

DROP TABLE IF EXISTS `00000_mst_payment_terms`;

CREATE TABLE `00000_mst_payment_terms` (
  `pay_terms_id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_term_desc` varchar(100) NOT NULL,
  `xnote` varchar(2000) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`pay_terms_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_room_types` */

DROP TABLE IF EXISTS `00000_mst_room_types`;

CREATE TABLE `00000_mst_room_types` (
  `room_id` int(11) NOT NULL AUTO_INCREMENT,
  `room_type_name` varchar(50) NOT NULL,
  `arabic_name` varchar(200) DEFAULT NULL,
  `no_of_persons` int(2) NOT NULL,
  `xnote` varchar(2000) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`room_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_salesperson` */

DROP TABLE IF EXISTS `00000_mst_salesperson`;

CREATE TABLE `00000_mst_salesperson` (
  `salesperson_id` int(11) NOT NULL AUTO_INCREMENT,
  `salesperson_name` varchar(50) NOT NULL,
  `employee_id` int(11) DEFAULT NULL,
  `commmission_per` float(3,2) DEFAULT NULL,
  `commission_fix` double(10,2) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`salesperson_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_seasons` */

DROP TABLE IF EXISTS `00000_mst_seasons`;

CREATE TABLE `00000_mst_seasons` (
  `season_id` int(11) NOT NULL AUTO_INCREMENT,
  `seeson_name` varchar(50) NOT NULL,
  `gor_from_date` date DEFAULT NULL,
  `gor_to_date` date DEFAULT NULL,
  `hij_from_date` date DEFAULT NULL,
  `hij_to_date` date DEFAULT NULL,
  `term_cond_id` int(11) DEFAULT NULL,
  `term_cond_det_id` int(11) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`season_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_state` */

DROP TABLE IF EXISTS `00000_mst_state`;

CREATE TABLE `00000_mst_state` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(50) NOT NULL,
  `state_sht_name` varchar(15) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`state_id`),
  KEY `country_id` (`country_id`),
  CONSTRAINT `00000_mst_state_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `00000_mst_country` (`country_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_supplier` */

DROP TABLE IF EXISTS `00000_mst_supplier`;

CREATE TABLE `00000_mst_supplier` (
  `supplier_id` int(11) NOT NULL AUTO_INCREMENT,
  `supplier_name` varchar(50) NOT NULL,
  `supplier_sht_name` varchar(50) DEFAULT NULL,
  `supplier_name_arabic` varchar(1000) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL,
  `pay_terms_id` int(11) DEFAULT NULL,
  `credit_limit` double(15,2) DEFAULT NULL,
  `credit_term_desc` varchar(50) DEFAULT NULL,
  `hotel_id` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `address` varchar(100) NOT NULL,
  `address_arabic` varchar(1000) DEFAULT NULL,
  `gl_ac_no` varchar(50) DEFAULT NULL,
  `email_id` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `xnote` varchar(2000) DEFAULT NULL,
  `vat_no` varchar(50) DEFAULT NULL,
  `ntn_no` varchar(50) DEFAULT NULL,
  `gst_no` varchar(50) DEFAULT NULL,
  `black_list_flag` tinyint(1) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  `vat_flag` tinyint(1) DEFAULT NULL,
  `gst_flag` tinyint(1) DEFAULT NULL,
  `travel_no` varchar(50) DEFAULT NULL,
  `travel_type_id` int(11) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`supplier_id`,`address`),
  KEY `pyt_id` (`pay_terms_id`),
  KEY `00.supplier_ibfk_2` (`hotel_id`),
  KEY `00.supplier_ibfk_3` (`country_id`),
  KEY `00.supplier_ibfk_4` (`city_id`),
  KEY `00.supplier_ibfk_5` (`travel_type_id`),
  KEY `00000_mst_supplier_ibfk_6` (`category_id`),
  CONSTRAINT `00000_mst_supplier_ibfk_1` FOREIGN KEY (`pay_terms_id`) REFERENCES `00000_mst_payment_terms` (`pay_terms_id`),
  CONSTRAINT `00000_mst_supplier_ibfk_2` FOREIGN KEY (`hotel_id`) REFERENCES `00000_mst_hotels` (`hotel_id`),
  CONSTRAINT `00000_mst_supplier_ibfk_3` FOREIGN KEY (`country_id`) REFERENCES `00000_mst_country` (`country_id`),
  CONSTRAINT `00000_mst_supplier_ibfk_4` FOREIGN KEY (`city_id`) REFERENCES `00000_mst_city` (`city_id`),
  CONSTRAINT `00000_mst_supplier_ibfk_5` FOREIGN KEY (`travel_type_id`) REFERENCES `00000_mst_travel_type` (`travel_type_id`),
  CONSTRAINT `00000_mst_supplier_ibfk_6` FOREIGN KEY (`category_id`) REFERENCES `00000_mst_category` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_supplier_cont_person` */

DROP TABLE IF EXISTS `00000_mst_supplier_cont_person`;

CREATE TABLE `00000_mst_supplier_cont_person` (
  `supplier_id` int(11) NOT NULL,
  `serial_no` int(11) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `person_title` varchar(50) DEFAULT NULL,
  `phone_no` varchar(25) DEFAULT NULL,
  `mobile_no` varchar(25) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  KEY `supplier_id` (`supplier_id`),
  CONSTRAINT `00000_mst_supplier_cont_person_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `00000_mst_supplier` (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_supplier_contacts` */

DROP TABLE IF EXISTS `00000_mst_supplier_contacts`;

CREATE TABLE `00000_mst_supplier_contacts` (
  `supplier_id` int(11) DEFAULT NULL,
  `serial_no` int(11) DEFAULT NULL,
  `phone_no` varchar(25) DEFAULT NULL,
  `fax_no` varchar(25) DEFAULT NULL,
  `teletex` varchar(25) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  KEY `supplier_id` (`supplier_id`),
  CONSTRAINT `00000_mst_supplier_contacts_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `00000_mst_supplier` (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_terms_condition` */

DROP TABLE IF EXISTS `00000_mst_terms_condition`;

CREATE TABLE `00000_mst_terms_condition` (
  `term_cond_id` int(11) NOT NULL AUTO_INCREMENT,
  `term_cond_desc` varchar(100) NOT NULL,
  `arabic_desc` varchar(100) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`term_cond_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_terms_condition_detail` */

DROP TABLE IF EXISTS `00000_mst_terms_condition_detail`;

CREATE TABLE `00000_mst_terms_condition_detail` (
  `term_cond_det_id` int(11) NOT NULL AUTO_INCREMENT,
  `term_cond_id` int(11) DEFAULT NULL,
  `term_cond_det_desc` varchar(100) NOT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`term_cond_det_id`),
  KEY `tc_id` (`term_cond_id`),
  CONSTRAINT `00000_mst_terms_condition_detail_ibfk_1` FOREIGN KEY (`term_cond_id`) REFERENCES `00000_mst_terms_condition` (`term_cond_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_travel_type` */

DROP TABLE IF EXISTS `00000_mst_travel_type`;

CREATE TABLE `00000_mst_travel_type` (
  `travel_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `travel_type_desc` varchar(50) NOT NULL,
  `travel_type_sht_desc` varchar(15) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`travel_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_views` */

DROP TABLE IF EXISTS `00000_mst_views`;

CREATE TABLE `00000_mst_views` (
  `hot_view_desc` int(11) NOT NULL AUTO_INCREMENT,
  `hot_view_id` varchar(50) NOT NULL,
  `hot_view_sht_name` varchar(10) NOT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`hot_view_desc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_sys_users` */

DROP TABLE IF EXISTS `00000_sys_users`;

CREATE TABLE `00000_sys_users` (
  `s_no` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(15) NOT NULL,
  `email_id` varchar(25) NOT NULL,
  `full_name` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_date` date DEFAULT NULL,
  `created_by` varchar(15) DEFAULT NULL,
  `expiry_date` date DEFAULT NULL,
  `multi_login_flag` tinyint(1) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`user_id`,`email_id`),
  KEY `s_no` (`s_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_xnoteS=@OLD_SQL_xnoteS */;
