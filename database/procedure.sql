use dcsdb;
desc user;
desc student;
drop procedure if exists insert_student;
DELIMITER //
create procedure insert_student(in v_profile varchar(100),in v_name varchar(20),in v_mail varchar(80),in v_password varchar(25), v_course int(2), in v_batch year,in v_sem int(2), in v_address text)
BEGIN
declare v_userid int;
		insert into user(user_name, user_profile, user_email, user_password, use_category_id) values( v_name, v_profile, v_mail, v_password,0);
        select user_id into v_userid from user where user_name = v_name and user_email = v_mail order by user_id desc limit 1;
        insert into student(student_batch_year,student_sem, student_address, course_id, user_id) values(v_batch, v_sem, v_address,v_course, v_userid);
END //
DELIMITER ;

DELIMITER //
create procedure delete_student(in v_user_id int(11))
BEGIN
		delete from user where user_id = v_user_id;
		delete from student where user_id = v_user_id;
END //
DELIMITER ;

call insert_student("./image/student/ansh.png","ALEX DEV","aj045045@gmail.com","aj045045",2,2021,4,"Navrangpura");
select * from user;
select * from student;
select * from course;
select u.user_id, u.user_name, u.user_email, s.student_sem, s.student_address from user u inner join student s on (u.user_id= s.user_id) where u.use_category_id = 0;
select u.user_id, u.user_name, u.user_email,s.student_batch_year, s.student_sem, c.course_name from user u inner join student s on u.user_id= s.user_id inner join course c on s.course_id = c.course_id where u.use_category_id = 0;

