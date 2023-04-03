
CREATE DATABASE dcsdb;

USE dcsdb;

CREATE TABLE IF NOT EXISTS `user_category` (
  `use_category_id` INT NOT NULL AUTO_INCREMENT,
  `user_category_name` VARCHAR(30) NULL,
  PRIMARY KEY (`use_category_id`));
  
  
  -- -----------------------------------------------------
-- Table `user`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` INT NULL AUTO_INCREMENT,
  `user_name` VARCHAR(30) NULL,
  `user_profile` VARCHAR(50) NULL,
  `user_email` VARCHAR(50) NULL,
  `user_password` VARCHAR(80) NULL,
  `use_category_id` INT NOT NULL,
  PRIMARY KEY (`user_id`),
  CONSTRAINT `use_category_id`
    FOREIGN KEY (`use_category_id`)
    REFERENCES `user_category` (`use_category_id`));
    
    
    -- -----------------------------------------------------
-- Table `mydb`.`designation`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `designation` (
  `designation_id` INT NOT NULL AUTO_INCREMENT,
  `designation` VARCHAR(45) NULL,
  PRIMARY KEY (`designation_id`));
-- -----------------------------------------------------
-- Table `mydb`.`faculty`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `faculty` (
  `faculty_id` INT NOT NULL AUTO_INCREMENT,
  `faculty_experience` SMALLINT(3) NULL,
  `faculty_qualification` VARCHAR(50) NULL,
  `faculty_specialization` VARCHAR(50) NULL,
  `faculty_designation` VARCHAR(50) NULL,
  `designation_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`faculty_id`), 
  CONSTRAINT `fk_faculty_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `user` (`user_id`),   
  CONSTRAINT `fk_faculty_designation1`
    FOREIGN KEY (`designation_id`)
    REFERENCES `designation` (`designation_id`)
 );
 
 -- -----------------------------------------------------
-- Table `faculty_research`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `faculty_research` (
  `research_id` INT NOT NULL AUTO_INCREMENT,
  `research_title` VARCHAR(50) NULL,
  `research_journal` TEXT NULL,
  `research_publisher` VARCHAR(50) NULL,
  `research_year` YEAR NULL,
  `faculty_id` INT NOT NULL,
  PRIMARY KEY (`research_id`),
  CONSTRAINT `fk_fac_research_faculty1`
    FOREIGN KEY (`faculty_id`)
    REFERENCES `faculty` (`faculty_id`)
    );
    
-- -----------------------------------------------------
-- Table `achievement`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `achievement` (
  `award_id` INT NOT NULL AUTO_INCREMENT,
  `award_name` VARCHAR(50) NULL,
  `award_association` VARCHAR(50) NULL,
  `award_work` TEXT NULL,
  `award_year` YEAR NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`award_id`),
  CONSTRAINT `fk_achievement_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `user` (`user_id`)
   );
   
   -- -----------------------------------------------------
-- Table `course`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `course` (
  `course_id` INT NOT NULL AUTO_INCREMENT,
  `course_name` VARCHAR(50) NULL,
  `course_duration` TINYINT(1) NULL,
  `course_details` TEXT NULL,
  PRIMARY KEY (`course_id`));


-- -----------------------------------------------------
-- Table `student`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` INT NOT NULL AUTO_INCREMENT,
  `student_batch_year` YEAR NULL,
  `student_dob` DATE NULL,
  `course_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`student_id`),
  CONSTRAINT `fk_student_course1`
    FOREIGN KEY (`course_id`)
    REFERENCES `course` (`course_id`),
  CONSTRAINT `fk_student_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `user` (`user_id`));


-- -----------------------------------------------------
-- Table `syllabus`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `syllabus` (
  `syllabus_id` INT NOT NULL AUTO_INCREMENT,
  `syllabus_semister` SMALLINT NULL,
  `syllabus_document` VARCHAR(50) NULL,
  `course_id` INT NOT NULL,
  PRIMARY KEY (`syllabus_id`),
  CONSTRAINT `fk_syllabus_program1`
    FOREIGN KEY (`course_id`)
    REFERENCES `course` (`course_id`));
    
-- -----------------------------------------------------
-- Table `event_category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `event_category` (
  `event_category_id` INT NOT NULL AUTO_INCREMENT,
  `event_category_type` VARCHAR(50) NULL,
  PRIMARY KEY (`event_category_id`));
  
  
-- -----------------------------------------------------
-- Table `event`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `event` (
  `event_id` INT NOT NULL AUTO_INCREMENT,
  `event_title` VARCHAR(100) NULL,
  `event_description` TEXT NULL,
  `event_venue` VARCHAR(100) NULL,
  `event_start` DATETIME NULL,
  `event_end` DATETIME NULL,
  `event_status` TINYINT NULL,
  `event_category_id` INT NOT NULL,
  `faculty_id` INT NOT NULL,
  PRIMARY KEY (`event_id`),
  CONSTRAINT `fk_event_evt_cat`
    FOREIGN KEY (`event_category_id`)
    REFERENCES `event_category` (`event_category_id`),
  CONSTRAINT `fk_event_faculty1`
    FOREIGN KEY (`faculty_id`)
    REFERENCES `faculty` (`faculty_id`));


-- -----------------------------------------------------
-- Table `news_category`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `news_category` (
  `news_category_id` INT NOT NULL AUTO_INCREMENT,
  `news_category_type` VARCHAR(50) NULL,
  PRIMARY KEY (`news_category_id`));
  
-- -----------------------------------------------------
-- Table `mydb`.`news`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `news` (
  `news_id` INT NOT NULL AUTO_INCREMENT,
  `news_title` VARCHAR(50) NULL,
  `news_image` VARCHAR(50) NULL,
  `news_description` TEXT NULL,
  `news_category_id` INT NOT NULL,
  PRIMARY KEY (`news_id`),
  CONSTRAINT `fk_news_news_cat1`
    FOREIGN KEY (`news_category_id`)
    REFERENCES `news_category` (`news_category_id`));


-- -----------------------------------------------------
-- Table `photos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `photos` (
  `photo_id` INT NOT NULL AUTO_INCREMENT,
  `photo_document` VARCHAR(50) NULL,
  `event_id` INT NOT NULL,
  PRIMARY KEY (`photo_id`),
  CONSTRAINT `fk_photos_event1`
    FOREIGN KEY (`event_id`)
    REFERENCES `event` (`event_id`));


-- -----------------------------------------------------
-- Table `subject`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` INT NOT NULL AUTO_INCREMENT,
  `subject_name` VARCHAR(50) NULL,
  `subject_description` TEXT NULL,
  `course_id` INT NOT NULL,
  PRIMARY KEY (`subject_id`),
  CONSTRAINT `fk_subject_program1`
    FOREIGN KEY (`course_id`)
    REFERENCES `course` (`course_id`));

-- -----------------------------------------------------
-- Table `reference_paper`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `reference_paper` (
  `subject_doc_id` INT NOT NULL AUTO_INCREMENT,
  `subject_document_name` VARCHAR(50) NULL,
  `subject_document` VARCHAR(50) NULL,
  `subject_id` INT NOT NULL,
  PRIMARY KEY (`subject_doc_id`),
  CONSTRAINT `fk_subject_doc_subject1`
    FOREIGN KEY (`subject_id`)
    REFERENCES `subject` (`subject_id`));
    
    
-- -----------------------------------------------------
-- Table `event_member`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `event_member` (
  `event_id` INT NOT NULL,
  `student_id` INT NOT NULL,
  PRIMARY KEY (`event_id`, `student_id`),
  CONSTRAINT `fk_event_has_student_event1`
    FOREIGN KEY (`event_id`)
    REFERENCES `event` (`event_id`),
  CONSTRAINT `fk_event_has_student_student1`
    FOREIGN KEY (`student_id`)
    REFERENCES `student` (`student_id`));
    
    
-- -----------------------------------------------------
-- Table `comments`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` INT NOT NULL AUTO_INCREMENT,
  `comment` TEXT NULL,
  `comment_at` DATETIME NULL,
  `event_id` INT NOT NULL,
  `user_id` INT NOT NULL,
  PRIMARY KEY (`comment_id`),
  CONSTRAINT `fk_comments_event1`
    FOREIGN KEY (`event_id`)
    REFERENCES `event` (`event_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_comments_user1`
    FOREIGN KEY (`user_id`)
    REFERENCES `user` (`user_id`));

-- -----------------------------------------------------
-- Table `mydb`.`result`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `result` (
  `result_id` INT NOT NULL AUTO_INCREMENT,
  `result_document` VARCHAR(50) NULL,
  `faculty_id` INT NOT NULL,
  `subject_id` INT NOT NULL,
  PRIMARY KEY (`result_id`),
  CONSTRAINT `fk_result_faculty1`
    FOREIGN KEY (`faculty_id`)
    REFERENCES `faculty` (`faculty_id`),
  CONSTRAINT `fk_result_subject1`
    FOREIGN KEY (`subject_id`)
    REFERENCES `subject` (`subject_id`));
