create database project;

use project;
use register;

select * from signup_can;
select * from signup_emp;
select * from reg_job;
select *from stud_reg;
select *from register_can;

desc signup_can;


create table signup_emp(
	fname varchar(200) NOT NULL,
	pnumber bigint NOT NULL,
	email varchar(20) NOT NULL,
	uname varchar(200) primary key,
	pass varchar(200) NOT NULL);

desc signup_can;

/*Job*/
create table reg_job(
j_id int auto_increment primary key,
j_title varchar(100),
j_vacancy int,
j_location varchar(50),
j_cmp_name varchar(200),
j_salary varchar(50),
j_skills varchar(200),
j_exp varchar(50) null,
j_quali varchar(100),
emp_id varchar(200),
foreign key (emp_id) references signup_emp(uname)
);

insert into reg_job(j_title,j_vacancy,j_location,j_cmp_name,j_salary,j_skills,j_exp,j_quali,emp_id) values('ABC',4,'Pune','ABC','451','ABC','2 year','BSC','Admin');

desc reg_job;

select *from reg_job;

/*Candidate sql*/
create table signup_can(
	fname varchar(200) NOT NULL,
	pnumber bigint NOT NULL,
	email varchar(20) NOT NULL,
	uname varchar(200) primary key,
	pass varchar(200) NOT NULL);

alter table signup_can modify email varchar(60);

create table register_can(
c_id int auto_increment primary key,
c_name varchar(100),
c_uname varchar(100),
c_gender varchar(20),
c_dob date,
c_email varchar(200),
c_phoneno BIGINT,
c_address varchar(70),
c_city varchar(50),
c_zip varchar(10),
c_college_name varchar(50),
c_insititue_name varchar(50),
c_qualification varchar(70),
c_department varchar(80),
c_skills varchar(50),
can_id varchar(255),
foreign key (can_id) references signup_can(uname),
UNIQUE (c_uname));




desc Register_can;
select *from register_can;

alter table Register_can modify c_phoneno bigint;













/*alim*/
use project1;

drop table food;

Create table food(
f_id int(50),
f_name varchar(50),
f_type varchar(50),
calories numeric(50));
drop database php_pdo_login_db;
select *from tbl_user;
select *from food;
