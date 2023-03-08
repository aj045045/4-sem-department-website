create database if not exists depart;

create table event_cat(
cat_id int auto_increment,
cat_name varchar(30),
primary key(cat_id)
); 


create table program(
pro_id int auto_increment,
pro_name varchar(50),
pro_year year
);

create table faculty(
fac_id int auto_increment,
fac_name varchar(30),
fac_experience int(3),
fac_specialization varchar(30),
fac_designation int, 
foreign key(fac_designation) references fac_designation(des_id), 
primary key(fac_id)
);

create table award(
awd_id int auto_increment, 
awd_name varchar(50),
awd_year year,
accociation varchar(50),
primary key(awd_id),
foreign key(awd_id) references faculty(fac_id)
);

create table event(
ev_id int auto_increment,
ev_title varchar(70),
ev_description varchar(500),
ev_start datetime,
ev_end datetime,
ev_venue varchar(50),
primary key(ev_id),
foreign key(ev_id) references event_cat(cat_id),
foreign key(ev_id) references student(stu_id),
foreign key(ev_id) references faculty(fac_id)
);


