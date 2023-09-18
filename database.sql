use preventive_motor;

desc motors;

show create table motors;

CREATE TABLE `motors` (
  `funcloc` varchar(100) NOT NULL,
  `electrical_panel` varchar(15) DEFAULT NULL,
  `electrical_motor` varchar(15) DEFAULT NULL,
  `field_name` varchar(100) DEFAULT NULL,
  `manufacture` varchar(100) DEFAULT NULL,
  `power` varchar(5) DEFAULT NULL,
  `voltage` varchar(5) DEFAULT NULL,
  `current` varchar(5) DEFAULT NULL,
  `pole` char(2) DEFAULT NULL,
  PRIMARY KEY (`funcloc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci