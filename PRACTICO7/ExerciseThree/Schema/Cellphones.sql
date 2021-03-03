create database if not exists cellphones;
use  cellphones;
create table if not exists User(
userName varchar(50) not null,
password  varchar(50) not null,
constraint id_user primary key(username)
)engine = InnoDB;

create table if not exists cellphone(
idcellphone int not null auto_increment, 
code varchar(4) not null,
brand varchar(50) not null,
model varchar(50) not null,
price DECIMAL(10, 2) DEFAULT 0,
constraint id_cellphone primary key(idcellphone)
)engine = InnoDB;

insert into user
 (username , password) 
 values("Juan Azar","azar123456"),
 ("Seba-Soler","1234sebastian"),
("Elena Perez","eleperez10"),
("Flor Hernandez","f123456789"),
("student","pass12345");

select * from user;
select * from cellphone;
delete from  cellphone where (idcellphone =2);
select username , password from user where (username ="tyy");
drop table cellphone;
insert into cellphone (code , brand , model , price ) value ("code","brand","model",0);
DELETE FROM CELLPHONE WHERE (idcellphone = 1);