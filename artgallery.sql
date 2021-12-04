DROP TABLE IF EXISTS `purchase_painting`;
CREATE TABLE IF NOT EXISTS `purchase_painting` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `painting1` varchar(20) NOT NULL,
  `size1` varchar(20) NOT NULL,
  `painting2` varchar(20) NOT NULL,
  `size2` varchar(20) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(50) NOT NULL,
  `province` varchar(30) NOT NULL,
  `postal_code` varchar(7) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `contact_information`;
CREATE TABLE IF NOT EXISTS `contact_information` (
	`name` varchar(100) NOT NULL,
	`email` varchar(100) NOT NULL,
	`phone` varchar(20) NOT NULL,
	`preference` varchar(5) NOT NULL,
	`message` varchar(1000),
	PRIMARY KEY (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;