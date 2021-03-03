create database if not exists players;
use players;

drop database players;
drop table player;

CREATE TABLE if not exists player (
  codeplayer varchar(50) ,
  firstname varchar(50) not null,
  lastname varchar(50) not null,
  email varchar(50) not null,
  hoursplayer int not null,
  CONSTRAINT PK_Players PRIMARY KEY (codeplayer)
)Engine=InnoDB;

select * from player;
UPDATE player SET firstname = 'hernan'
 WHERE codeplayer = '27';
