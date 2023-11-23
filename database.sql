CREATE DATABASE crud_app;
use crud_app;

CREATE TABLE `siswa` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(100) NOT NULL,
  `age` int(3) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(200) NOT NULL,
  PRIMARY KEY  (`id`)
);
