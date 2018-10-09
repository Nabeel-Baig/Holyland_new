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
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`travel_portal_db` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `travel_portal_db`;

/*Table structure for table `00000_mst_bed_types` */

DROP TABLE IF EXISTS `00000_mst_bed_types`;

CREATE TABLE `00000_mst_bed_types` (
  `Bed_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Bed_type_name` varchar(50) NOT NULL,
  `Arabic_name` varchar(200) DEFAULT NULL,
  `No_of_Persons` int(2) NOT NULL,
  `Note` varchar(2000) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Bed_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_category` */

DROP TABLE IF EXISTS `00000_mst_category`;

CREATE TABLE `00000_mst_category` (
  `Category_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Category_Desc` varchar(50) NOT NULL,
  `Category_sht_desc` varchar(15) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Category_ID`)
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_client` */

DROP TABLE IF EXISTS `00000_mst_client`;

CREATE TABLE `00000_mst_client` (
  `Client_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Client_name` varchar(50) NOT NULL,
  `Client_Sht_name` varchar(50) DEFAULT NULL,
  `Client_name_arabic` varchar(1000) DEFAULT NULL,
  `Category_ID` int(11) DEFAULT NULL,
  `Salesperson_ID` int(11) DEFAULT NULL,
  `Salesperson_commission` double(15,2) DEFAULT NULL,
  `Recoveryperson_ID` int(11) DEFAULT NULL,
  `pay_terms_id` int(11) DEFAULT NULL,
  `Credit_Limit` double(15,2) DEFAULT NULL,
  `credit_term_desc` varchar(50) DEFAULT NULL,
  `Hotel_ID` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Address_arabic` varchar(1000) DEFAULT NULL,
  `GL_AC_No` varchar(50) DEFAULT NULL,
  `Email_ID` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `Note` varchar(2000) DEFAULT NULL,
  `VAT_No` varchar(50) DEFAULT NULL,
  `NTN_No` varchar(50) DEFAULT NULL,
  `GST_No` varchar(50) DEFAULT NULL,
  `Black_List_Flag` tinyint(1) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  `VAT_flag` tinyint(1) DEFAULT NULL,
  `GST_flag` tinyint(1) DEFAULT NULL,
  `Travel_no` varchar(50) DEFAULT NULL,
  `Travel_Type_ID` int(11) DEFAULT NULL,
  `Branch_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Client_ID`),
  KEY `SP_ID` (`Salesperson_ID`),
  KEY `00.client_ibfk_2` (`country_id`),
  KEY `00.client_ibfk_3` (`city_id`),
  KEY `00.client_ibfk_4` (`pay_terms_id`),
  KEY `00.client_ibfk_5` (`Hotel_ID`),
  KEY `00.client_ibfk_6` (`Travel_Type_ID`),
  KEY `00000_mst_client_ibfk_7` (`Category_ID`),
  CONSTRAINT `00000_mst_client_ibfk_1` FOREIGN KEY (`Salesperson_ID`) REFERENCES `00000_mst_salesperson` (`Salesperson_ID`),
  CONSTRAINT `00000_mst_client_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `00000_mst_country` (`country_id`),
  CONSTRAINT `00000_mst_client_ibfk_3` FOREIGN KEY (`city_id`) REFERENCES `00000_mst_city` (`city_id`),
  CONSTRAINT `00000_mst_client_ibfk_4` FOREIGN KEY (`pay_terms_id`) REFERENCES `00000_mst_payment_terms` (`pay_terms_id`),
  CONSTRAINT `00000_mst_client_ibfk_5` FOREIGN KEY (`Hotel_ID`) REFERENCES `00000_mst_hotels` (`Hotel_ID`),
  CONSTRAINT `00000_mst_client_ibfk_6` FOREIGN KEY (`Travel_Type_ID`) REFERENCES `00000_mst_travel_type` (`Travel_Type_ID`),
  CONSTRAINT `00000_mst_client_ibfk_7` FOREIGN KEY (`Category_ID`) REFERENCES `00000_mst_category` (`Category_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_client_cont_person` */

DROP TABLE IF EXISTS `00000_mst_client_cont_person`;

CREATE TABLE `00000_mst_client_cont_person` (
  `Client_ID` int(11) NOT NULL,
  `Serial_No` int(11) NOT NULL,
  `Person_name` varchar(50) NOT NULL,
  `Person_title` varchar(50) DEFAULT NULL,
  `Phone_no` varchar(25) DEFAULT NULL,
  `Mobile_no` varchar(25) NOT NULL,
  `Email_ID` varchar(25) NOT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  KEY `Client_ID` (`Client_ID`),
  CONSTRAINT `00000_mst_client_cont_person_ibfk_1` FOREIGN KEY (`Client_ID`) REFERENCES `00000_mst_client` (`Client_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_client_contacts` */

DROP TABLE IF EXISTS `00000_mst_client_contacts`;

CREATE TABLE `00000_mst_client_contacts` (
  `Client_ID` int(11) DEFAULT NULL,
  `Serial_no` int(11) DEFAULT NULL,
  `Phone_no` varchar(25) DEFAULT NULL,
  `Fax_no` varchar(25) DEFAULT NULL,
  `Teletex` varchar(25) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  KEY `Client_ID` (`Client_ID`),
  CONSTRAINT `00000_mst_client_contacts_ibfk_1` FOREIGN KEY (`Client_ID`) REFERENCES `00000_mst_client` (`Client_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_country` */

DROP TABLE IF EXISTS `00000_mst_country`;

CREATE TABLE `00000_mst_country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(50) DEFAULT NULL,
  `country_sht_name` varchar(15) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_credit_terms` */

DROP TABLE IF EXISTS `00000_mst_credit_terms`;

CREATE TABLE `00000_mst_credit_terms` (
  `credit_term_ID` int(11) NOT NULL AUTO_INCREMENT,
  `credit_term_desc` varchar(50) NOT NULL,
  `Note` varchar(200) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`credit_term_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_hotels` */

DROP TABLE IF EXISTS `00000_mst_hotels`;

CREATE TABLE `00000_mst_hotels` (
  `Hotel_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Hotel_Name` varchar(100) NOT NULL,
  `Hotel_Arabic_name` varchar(1000) DEFAULT NULL,
  `Category` varchar(50) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `Address` varchar(500) DEFAULT NULL,
  `Address_arabic` varchar(1000) DEFAULT NULL,
  `GL_AC_No` varchar(25) DEFAULT NULL,
  `Alot_GL_AC_No` varchar(25) DEFAULT NULL,
  `Cost_Center` varchar(25) DEFAULT NULL,
  `VAT_No` varchar(50) DEFAULT NULL,
  `GAZT_No` varchar(50) DEFAULT NULL,
  `NTN_No` varchar(50) DEFAULT NULL,
  `GST_No` varchar(50) DEFAULT NULL,
  `Hot_email_ID` varchar(50) DEFAULT NULL,
  `Hot_website` varchar(50) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  `web_appear_flag` tinyint(1) DEFAULT NULL,
  `Hot_Avail_Flag` tinyint(1) DEFAULT NULL,
  `VAT_flag` tinyint(1) DEFAULT NULL,
  `GST_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Hotel_ID`),
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
  `Hotel_ID` int(11) NOT NULL,
  `Serial_No` int(11) NOT NULL,
  `Person_name` varchar(50) NOT NULL,
  `Person_title` varchar(50) DEFAULT NULL,
  `Phone_no` varchar(25) DEFAULT NULL,
  `Mobile_no` varchar(25) NOT NULL,
  `Email_ID` varchar(25) NOT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  KEY `Hotel_ID` (`Hotel_ID`),
  CONSTRAINT `00000_mst_hotels_cont_person_ibfk_1` FOREIGN KEY (`Hotel_ID`) REFERENCES `00000_mst_hotels` (`Hotel_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_hotels_contacts` */

DROP TABLE IF EXISTS `00000_mst_hotels_contacts`;

CREATE TABLE `00000_mst_hotels_contacts` (
  `Hotel_ID` int(11) DEFAULT NULL,
  `Serial_no` int(11) DEFAULT NULL,
  `Phone_no` varchar(25) DEFAULT NULL,
  `Fax_no` varchar(25) DEFAULT NULL,
  `Teletex` varchar(25) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  KEY `Hotel_ID` (`Hotel_ID`),
  CONSTRAINT `00000_mst_hotels_contacts_ibfk_1` FOREIGN KEY (`Hotel_ID`) REFERENCES `00000_mst_hotels` (`Hotel_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_hotels_meal_plans` */

DROP TABLE IF EXISTS `00000_mst_hotels_meal_plans`;

CREATE TABLE `00000_mst_hotels_meal_plans` (
  `Hotel_ID` int(11) NOT NULL,
  `Serial_no` int(11) NOT NULL,
  `Meal_Plan_ID` int(11) DEFAULT NULL,
  `Web_flag` tinyint(1) DEFAULT NULL,
  KEY `Hotel_ID` (`Hotel_ID`),
  KEY `00.hot_meal_plans_ibfk_2` (`Meal_Plan_ID`),
  CONSTRAINT `00000_mst_hotels_meal_plans_ibfk_1` FOREIGN KEY (`Hotel_ID`) REFERENCES `00000_mst_hotels` (`Hotel_ID`),
  CONSTRAINT `00000_mst_hotels_meal_plans_ibfk_2` FOREIGN KEY (`Meal_Plan_ID`) REFERENCES `00000_mst_meal_plans` (`Meal_plan_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_hotels_rooms` */

DROP TABLE IF EXISTS `00000_mst_hotels_rooms`;

CREATE TABLE `00000_mst_hotels_rooms` (
  `Hotel_ID` int(11) NOT NULL,
  `Serial_no` int(11) NOT NULL,
  `Room_ID` int(11) NOT NULL,
  `Bed_ID` int(11) DEFAULT NULL,
  `No_of_Bed` int(11) DEFAULT NULL,
  `Web_flag` tinyint(1) DEFAULT NULL,
  KEY `Hotel_ID` (`Hotel_ID`),
  KEY `00.hot_rooms_ibfk_2` (`Room_ID`),
  KEY `00000_mst_hotels_rooms_ibfk_3` (`Bed_ID`),
  CONSTRAINT `00000_mst_hotels_rooms_ibfk_1` FOREIGN KEY (`Hotel_ID`) REFERENCES `00000_mst_hotels` (`Hotel_ID`),
  CONSTRAINT `00000_mst_hotels_rooms_ibfk_2` FOREIGN KEY (`Room_ID`) REFERENCES `00000_mst_room_types` (`Room_ID`),
  CONSTRAINT `00000_mst_hotels_rooms_ibfk_3` FOREIGN KEY (`Bed_ID`) REFERENCES `00000_mst_bed_types` (`Bed_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_hotels_views` */

DROP TABLE IF EXISTS `00000_mst_hotels_views`;

CREATE TABLE `00000_mst_hotels_views` (
  `Hotel_ID` int(11) NOT NULL,
  `Serial_no` int(11) NOT NULL,
  `hot_view_id` int(11) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  KEY `00.hot_views_ibfk_1` (`Hotel_ID`),
  KEY `00.hot_views_ibfk_2` (`hot_view_id`),
  CONSTRAINT `00000_mst_hotels_views_ibfk_1` FOREIGN KEY (`Hotel_ID`) REFERENCES `00000_mst_hotels` (`Hotel_ID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `00000_mst_hotels_views_ibfk_2` FOREIGN KEY (`hot_view_id`) REFERENCES `00000_mst_views` (`hot_view_desc`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_meal_plans` */

DROP TABLE IF EXISTS `00000_mst_meal_plans`;

CREATE TABLE `00000_mst_meal_plans` (
  `Meal_plan_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Meal_Plan_desc` varchar(50) NOT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Meal_plan_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_payment_terms` */

DROP TABLE IF EXISTS `00000_mst_payment_terms`;

CREATE TABLE `00000_mst_payment_terms` (
  `pay_terms_id` int(11) NOT NULL AUTO_INCREMENT,
  `pay_term_desc` varchar(100) NOT NULL,
  `Note` varchar(2000) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`pay_terms_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_room_types` */

DROP TABLE IF EXISTS `00000_mst_room_types`;

CREATE TABLE `00000_mst_room_types` (
  `Room_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Room_Type_Name` varchar(50) NOT NULL,
  `Arabic_name` varchar(200) DEFAULT NULL,
  `No_of_Persons` int(2) NOT NULL,
  `Note` varchar(2000) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Room_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_salesperson` */

DROP TABLE IF EXISTS `00000_mst_salesperson`;

CREATE TABLE `00000_mst_salesperson` (
  `Salesperson_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Salesperson_name` varchar(50) NOT NULL,
  `Employee_ID` int(11) DEFAULT NULL,
  `Commmission_per` float(3,2) DEFAULT NULL,
  `Commission_fix` double(10,2) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Salesperson_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_seasons` */

DROP TABLE IF EXISTS `00000_mst_seasons`;

CREATE TABLE `00000_mst_seasons` (
  `Season_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Seeson_Name` varchar(50) NOT NULL,
  `Gor_from_Date` date DEFAULT NULL,
  `Gor_to_Date` date DEFAULT NULL,
  `Hij_from_date` date DEFAULT NULL,
  `Hij_to_date` date DEFAULT NULL,
  `Term_Cond_ID` int(11) DEFAULT NULL,
  `Term_cond_det_ID` int(11) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Season_ID`)
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_supplier` */

DROP TABLE IF EXISTS `00000_mst_supplier`;

CREATE TABLE `00000_mst_supplier` (
  `Supplier_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Supplier_name` varchar(50) NOT NULL,
  `Supplier_Sht_name` varchar(50) DEFAULT NULL,
  `Supplier_name_arabic` varchar(1000) DEFAULT NULL,
  `Category_ID` int(11) DEFAULT NULL,
  `pay_terms_id` int(11) DEFAULT NULL,
  `Credit_Limit` double(15,2) DEFAULT NULL,
  `credit_term_desc` varchar(50) DEFAULT NULL,
  `Hotel_ID` int(11) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `Address` varchar(100) NOT NULL,
  `Address_arabic` varchar(1000) DEFAULT NULL,
  `GL_AC_No` varchar(50) DEFAULT NULL,
  `Email_ID` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `Note` varchar(2000) DEFAULT NULL,
  `VAT_No` varchar(50) DEFAULT NULL,
  `NTN_No` varchar(50) DEFAULT NULL,
  `GST_No` varchar(50) DEFAULT NULL,
  `Black_list_flag` tinyint(1) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  `VAT_flag` tinyint(1) DEFAULT NULL,
  `GST_flag` tinyint(1) DEFAULT NULL,
  `Travel_No` varchar(50) DEFAULT NULL,
  `Travel_Type_ID` int(11) DEFAULT NULL,
  `Branch_ID` int(11) DEFAULT NULL,
  PRIMARY KEY (`Supplier_ID`,`Address`),
  KEY `Pyt_ID` (`pay_terms_id`),
  KEY `00.supplier_ibfk_2` (`Hotel_ID`),
  KEY `00.supplier_ibfk_3` (`country_id`),
  KEY `00.supplier_ibfk_4` (`city_id`),
  KEY `00.supplier_ibfk_5` (`Travel_Type_ID`),
  KEY `00000_mst_supplier_ibfk_6` (`Category_ID`),
  CONSTRAINT `00000_mst_supplier_ibfk_1` FOREIGN KEY (`pay_terms_id`) REFERENCES `00000_mst_payment_terms` (`pay_terms_id`),
  CONSTRAINT `00000_mst_supplier_ibfk_2` FOREIGN KEY (`Hotel_ID`) REFERENCES `00000_mst_hotels` (`Hotel_ID`),
  CONSTRAINT `00000_mst_supplier_ibfk_3` FOREIGN KEY (`country_id`) REFERENCES `00000_mst_country` (`country_id`),
  CONSTRAINT `00000_mst_supplier_ibfk_4` FOREIGN KEY (`city_id`) REFERENCES `00000_mst_city` (`city_id`),
  CONSTRAINT `00000_mst_supplier_ibfk_5` FOREIGN KEY (`Travel_Type_ID`) REFERENCES `00000_mst_travel_type` (`Travel_Type_ID`),
  CONSTRAINT `00000_mst_supplier_ibfk_6` FOREIGN KEY (`Category_ID`) REFERENCES `00000_mst_category` (`Category_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_supplier_cont_person` */

DROP TABLE IF EXISTS `00000_mst_supplier_cont_person`;

CREATE TABLE `00000_mst_supplier_cont_person` (
  `Supplier_ID` int(11) NOT NULL,
  `Serial_No` int(11) NOT NULL,
  `Person_name` varchar(50) NOT NULL,
  `Person_title` varchar(50) DEFAULT NULL,
  `Phone_no` varchar(25) DEFAULT NULL,
  `Mobile_no` varchar(25) NOT NULL,
  `Email_ID` varchar(25) NOT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  KEY `Supplier_ID` (`Supplier_ID`),
  CONSTRAINT `00000_mst_supplier_cont_person_ibfk_1` FOREIGN KEY (`Supplier_ID`) REFERENCES `00000_mst_supplier` (`Supplier_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_supplier_contacts` */

DROP TABLE IF EXISTS `00000_mst_supplier_contacts`;

CREATE TABLE `00000_mst_supplier_contacts` (
  `supplier_ID` int(11) DEFAULT NULL,
  `Serial_no` int(11) DEFAULT NULL,
  `Phone_no` varchar(25) DEFAULT NULL,
  `Fax_no` varchar(25) DEFAULT NULL,
  `Teletex` varchar(25) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  KEY `supplier_ID` (`supplier_ID`),
  CONSTRAINT `00000_mst_supplier_contacts_ibfk_1` FOREIGN KEY (`supplier_ID`) REFERENCES `00000_mst_supplier` (`Supplier_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_terms_condition` */

DROP TABLE IF EXISTS `00000_mst_terms_condition`;

CREATE TABLE `00000_mst_terms_condition` (
  `Term_Cond_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Term_Cond_Desc` varchar(100) NOT NULL,
  `Arabic_Desc` varchar(100) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Term_Cond_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_terms_condition_detail` */

DROP TABLE IF EXISTS `00000_mst_terms_condition_detail`;

CREATE TABLE `00000_mst_terms_condition_detail` (
  `Term_cond_det_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Term_Cond_ID` int(11) DEFAULT NULL,
  `Term_cond_Det_desc` varchar(100) NOT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Term_cond_det_ID`),
  KEY `TC_ID` (`Term_Cond_ID`),
  CONSTRAINT `00000_mst_terms_condition_detail_ibfk_1` FOREIGN KEY (`Term_Cond_ID`) REFERENCES `00000_mst_terms_condition` (`Term_Cond_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `00000_mst_travel_type` */

DROP TABLE IF EXISTS `00000_mst_travel_type`;

CREATE TABLE `00000_mst_travel_type` (
  `Travel_Type_ID` int(11) NOT NULL AUTO_INCREMENT,
  `Travel_Type_Desc` varchar(50) NOT NULL,
  `Travel_Type_Sht_desc` varchar(15) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`Travel_Type_ID`)
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
  `S_no` int(11) NOT NULL AUTO_INCREMENT,
  `User_ID` varchar(15) NOT NULL,
  `Email_ID` varchar(25) NOT NULL,
  `Full_Name` varchar(50) DEFAULT NULL,
  `Title` varchar(50) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Created_date` date DEFAULT NULL,
  `Created_by` varchar(15) DEFAULT NULL,
  `Expiry_date` date DEFAULT NULL,
  `Multi_login_flag` tinyint(1) DEFAULT NULL,
  `inactive_flag` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`User_ID`,`Email_ID`),
  KEY `S_no` (`S_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
