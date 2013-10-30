-- create schema modcaketwo_db;

use modcaketwo_db;


create table users(
	`username` int primary key not null auto_increment,
	`groud_id` int`, 
	`password` varchar(35),
	`email` varchar(120),
	`firstname` varchar(45),
	`lastname` varchar(45)
)
