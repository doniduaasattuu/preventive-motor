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

desc checking_motors;

delete from checking_motors;

TRUNCATE checking_motors;

select * from motors;

select * from motors WHERE funcloc = "FP-01-PM3-CUT-RWD1-FDR1";

select * from checking_motors;

DESC checking_motors;

SELECT * FROM checking_motors WHERE motor_funcloc = "FP-01-PM3-CUT-RWD1-FDR1";

insert into motors (funcloc) values ("FP-01-PM3-CUT-RWD1-FDR1");