-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 10, 2023 at 06:33 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dcsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievement`
--

CREATE TABLE `achievement` (
  `award_id` int(11) NOT NULL,
  `award_winner` varchar(255) NOT NULL,
  `award_name` varchar(255) DEFAULT NULL,
  `award_place` varchar(255) DEFAULT NULL,
  `award_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `achievement`
--

INSERT INTO `achievement` (`award_id`, `award_winner`, `award_name`, `award_place`, `award_time`) VALUES
(4, 'Dr.Bhumika Shah', 'WINNER OF ACM TEACHING CHALLENGE-2021', 'ACM compute-Online', '2021-09-01'),
(5, 'Dr.Bhumika Shah', 'WINNER OF ACM TEACHING CHALLENGE-2022', 'ACM compute-Jaipur', '2022-10-01'),
(6, 'Dr.Bhumika Shah', 'BEST PAPER AWARD ICPS-2019', 'International Conference on Police Science,Raksha Shakti University,Gandhinagar', '2019-09-28'),
(7, ' Dr.Jyoti Pareek', 'Regional Technical Coordinator-Virtual Labs IIT Bombay', 'IIT Bombay', '2019-02-28');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `username`, `password`) VALUES
(1, 'Admin', 'Admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `admission_enquiry`
--

CREATE TABLE `admission_enquiry` (
  `admission_enquiry_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admission_enquiry`
--

INSERT INTO `admission_enquiry` (`admission_enquiry_id`, `course_id`, `name`, `email`, `phone`, `subject`, `message`) VALUES
(9, 1, 'umang', 'dora@gmail.com', '9409750066', 'sfad', 'erfc');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `comment` text DEFAULT NULL,
  `comment_at` datetime DEFAULT NULL,
  `event_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(255) DEFAULT NULL,
  `course_duration` tinyint(1) DEFAULT NULL,
  `course_details` text DEFAULT NULL,
  `course_document` text NOT NULL,
  `course_image` text NOT NULL,
  `seat_number` int(11) NOT NULL,
  `boys_fees` varchar(11) NOT NULL,
  `girls_fees` varchar(11) NOT NULL,
  `brouchers` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`course_id`, `course_name`, `course_duration`, `course_details`, `course_document`, `course_image`, `seat_number`, `boys_fees`, `girls_fees`, `brouchers`) VALUES
(1, 'Doctor of Philosophy (Ph.D in Computer Science)', NULL, 'Department of Computer Science, Gujarat University is one of the earliest in Gujarat to introduce Ph.D. Programme. Currently there are SIX recognized Ph.D. Guides in Gujarat University in the subject of Computer Science. 35-40 students pursuing Ph.D. in varied areas like Network Security, Information Retrieval, Query optimization Computer Vision, e-learning, Image Processing ,NLP and Data Mining.\nA Ph.D. in Computer Science is a doctoral degree that represents the highest level of academic achievement in the field of computer science. It is a research-focused degree that typically requires several years of study and independent research.', '', 'image/academics/logo/phd.webp', 15, '₹20000', '₹20000', './error.php'),
(2, 'Masters of Computer Applications (MCA)', NULL, 'The MCA program prepares the student to take up high profile positions in the IT industry as analysts, system designers, developers and project managers in any area of Computer applications as well as prepares student for research and academics. This course also grooms students to become entrepreneurs.MCA programs focus on providing in-depth knowledge and practical skills related to computer applications and software development.', 'documents/syllabus/MCA-Scheme_&_Syllabus_Final.pdf', 'image/academics/logo/mca.webp', 20, '₹3140', '₹1700', './mca.php'),
(5, ' Post Graduate Diploma in Computer Science and Applications (PGDCSA)', NULL, 'PGDCA stands for Post Graduate Diploma in Computer Applications. It is a postgraduate diploma program that focuses on providing students with practical skills and knowledge in computer applications and software development.The PGDCSA program prepares the student to take up positions as programmer, web designer and lab administrator.', 'documents/syllabus/PGDCSA 2018.pdf', 'image/academics/logo/pgdca.webp', 33, '₹2250', '₹1500', './pgdcsa.php'),
(6, 'M.Sc Artificial Intelligence and Machine Learning [M.Sc AI & ML]', NULL, 'MSc AI/ML stands for Master of Science in Artificial Intelligence/Machine Learning. It is a specialized postgraduate degree program that focuses on the fields of artificial intelligence (AI) and machine learning (ML). MSc AI/ML programs provide advanced training in the theory and practical applications of AI and ML. The curriculum typically includes courses such as machine learning algorithms, data mining, deep learning, natural language processing, computer vision, statistical methods, reinforcement learning, and AI ethics.', 'documents/syllabus/M.Sc AI&ML Defence sem 1 & 2 July 2020.pdf', 'image/academics/logo/aiml.webp', 30, '₹27000', '₹27000', './aiml.php'),
(8, 'Five Years Integrated M.Sc Computer Science', NULL, 'An MSc CS 5-year integrated course is a specialized academic program that combines undergraduate and postgraduate studies in Computer Science. It is designed to provide students with a comprehensive understanding of computer science concepts and skills over an extended period of study.The MSc CS 5-year integrated course is structured to seamlessly integrate undergraduate (BSc) and postgraduate (MSc) studies into a single program. It eliminates the need for a separate application process for the master\'s program, allowing students to transition smoothly from their undergraduate studies to advanced coursework.', 'documents/syllabus/M.Sc Integrated sem 1 to 3 w.e.f 2021.pdf', 'image/academics/logo/msccs.webp', 120, '₹30000', '₹30000', './msc.php'),
(9, 'M.Tech. (Networking and Communications)', NULL, 'MTech, short for Master of Technology, is a postgraduate degree program in the field of engineering and technology. It is designed to provide students with advanced knowledge, skills, and expertise in specific areas of engineering.MTech programs, especially those with a thesis option, provide opportunities for research. Students can engage in research projects, contribute to ongoing research activities, or work with faculty members on research initiatives.', '', 'image/academics/logo/mca.webp', 25, '₹25000', '₹25000', './mtec.php');

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `designation` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation`) VALUES
(1, 'Head Of Department'),
(2, 'Professor'),
(3, 'Assistant Professor');

-- --------------------------------------------------------

--
-- Table structure for table `documents`
--

CREATE TABLE `documents` (
  `document_id` int(11) NOT NULL,
  `document_title` text NOT NULL,
  `document_location` varchar(50) NOT NULL,
  `course_id` int(11) NOT NULL,
  `document_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `documents`
--

INSERT INTO `documents` (`document_id`, `document_title`, `document_location`, `course_id`, `document_category_id`) VALUES
(4, 'Pgdcsa_sem_4', './documents/results/result-4-9-1.pdf', 9, 1),
(5, 'External sem-3', './documents/papers/paper-5-8-2.pdf', 8, 2),
(6, 'Department of computer science', './documents/circulars/circular-6-8-3.pdf', 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `document_category`
--

CREATE TABLE `document_category` (
  `document_category_id` int(2) NOT NULL,
  `document_category_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `document_category`
--

INSERT INTO `document_category` (`document_category_id`, `document_category_type`) VALUES
(1, 'result'),
(2, 'papers'),
(3, 'circular');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `event_title` varchar(100) DEFAULT NULL,
  `event_description` text DEFAULT NULL,
  `event_venue` varchar(100) DEFAULT NULL,
  `event_start` datetime DEFAULT NULL,
  `event_end` datetime DEFAULT NULL,
  `event_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `event_title`, `event_description`, `event_venue`, `event_start`, `event_end`, `event_category_id`) VALUES
(4, 'DevTools', 'Tech kauchalya is an event \r\norganized by the department of computer science to promote technical skills ', 'Department of computer Science', '2023-04-16 00:00:00', '2023-04-20 00:00:00', 1),
(6, 'Tech Kaushilya', 'A Technical Event organized by the Department of computer science. In which student can participate in those event many college has participate in this event. It is organized on april 20 to april 22. Their are technical event like footwall, gully cricket, tennis etc. and technical event like query relay and  ', 'Upasana & Department of computer Science', '2023-04-20 10:00:00', '2023-04-22 18:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `event_category`
--

CREATE TABLE `event_category` (
  `event_category_id` int(11) NOT NULL,
  `event_category_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_category`
--

INSERT INTO `event_category` (`event_category_id`, `event_category_type`) VALUES
(1, 'technical'),
(2, 'workshop'),
(3, 'seminar'),
(4, 'Webinar');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `faculty_experience` smallint(3) DEFAULT NULL,
  `faculty_qualification` varchar(50) DEFAULT NULL,
  `faculty_specialization` varchar(50) DEFAULT NULL,
  `faculty_designation` varchar(50) DEFAULT NULL,
  `designation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `faculty_experience`, `faculty_qualification`, `faculty_specialization`, `faculty_designation`, `designation_id`, `user_id`) VALUES
(1, 16, 'Ph. D, M. Sc, B.Sc', 'Machine Learning', 'HOD', 1, 1),
(2, 14, 'Ph. D, M. Sc, B.Sc', 'Web fundamentals', NULL, 2, 2),
(3, 14, 'PHD MCA BCom', 'DBMS and JAVA', NULL, 2, 3),
(4, 15, 'PHD', 'Networking', NULL, 2, 4),
(5, 14, 'PHD', 'Machine Learning', NULL, 2, 5),
(6, 10, 'PHD', 'Machine Learning', NULL, 2, 6),
(7, 8, 'MCA', 'Operating system and JAVA', NULL, 2, 7),
(8, 6, 'MCA', 'Machine Learning', NULL, 2, 8);

-- --------------------------------------------------------

--
-- Table structure for table `faculty_research`
--

CREATE TABLE `faculty_research` (
  `research_id` int(11) NOT NULL,
  `research_title` varchar(50) DEFAULT NULL,
  `research_journal` text DEFAULT NULL,
  `research_publisher` varchar(50) DEFAULT NULL,
  `research_year` year(4) DEFAULT NULL,
  `faculty_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `news_title` varchar(50) DEFAULT NULL,
  `news_description` text DEFAULT NULL,
  `expire_date` date NOT NULL,
  `news_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_category`
--

CREATE TABLE `news_category` (
  `news_category_id` int(11) NOT NULL,
  `news_category_type` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news_category`
--

INSERT INTO `news_category` (`news_category_id`, `news_category_type`) VALUES
(1, 'course'),
(2, 'event'),
(3, 'placement'),
(6, 'Work Shop');

-- --------------------------------------------------------

--
-- Table structure for table `photos`
--

CREATE TABLE `photos` (
  `photo_id` int(11) NOT NULL,
  `photo_document` varchar(50) DEFAULT NULL,
  `event_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `photos`
--

INSERT INTO `photos` (`photo_id`, `photo_document`, `event_id`) VALUES
(7, './image/events/event-4.1.webp', 4),
(8, './image/events/event-4.2.webp', 4),
(11, './image/events/event-6.1.webp', 6),
(12, './image/events/event-6.2.webp', 6),
(13, './image/events/event-6.3.webp', 6);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `question_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `type` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`question_id`, `question`, `answer`, `type`) VALUES
(1, 'hi,hiii,hey,hello', 'Greetings,How may I help you?', 'text'),
(2, 'how are you?', 'I am fine', 'text'),
(3, 'course,how many courses are there,how many courses are in rollwala computer center,how many courses are in departement of computer science,what are the courses', 'There are following courses in Department of computer science:<br/>\nMCA<br/>\nMSC(AI & ML)<br/>\nMSC(5 Year integrated)<br/>\nM.Tech<br/>\nPGDCA<br/>', 'text'),
(4, 'about dcs,about rcc,about rollwala computer center,tell me about rollwala,give me information about rollwala,give me information about dcs', 'You can find a information about <a style=\"color:blue;\" href=\"about.php\">here.</a>', 'text'),
(5, 'faculty', 'You can find a complete list of all DCS\'s faculties <a style=\"color:blue;\" href=\"https://www.gujaratuniversity.ac.in/details/18\">here.</a>', 'text'),
(10, 'admission', 'You can find Information about Admission from <a style=\"color:blue;\" href=\"admission_enquiry.php\">here.</a>', 'text');

-- --------------------------------------------------------

--
-- Table structure for table `reference_paper`
--

CREATE TABLE `reference_paper` (
  `subject_doc_id` int(11) NOT NULL,
  `subject_document_name` varchar(50) DEFAULT NULL,
  `subject_document` varchar(50) DEFAULT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `result`
--

CREATE TABLE `result` (
  `result_id` int(11) NOT NULL,
  `result_document` varchar(50) DEFAULT NULL,
  `faculty_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `student_batch_year` year(4) DEFAULT NULL,
  `student_dob` date DEFAULT NULL,
  `course_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(50) DEFAULT NULL,
  `subject_description` text DEFAULT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `syllabus`
--

CREATE TABLE `syllabus` (
  `syllabus_id` int(11) NOT NULL,
  `syllabus_semister` smallint(6) DEFAULT NULL,
  `syllabus_document` varchar(50) DEFAULT NULL,
  `course_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_questions`
--

CREATE TABLE `tmp_questions` (
  `tmp_question_id` int(11) NOT NULL,
  `question` text NOT NULL,
  `type` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) DEFAULT NULL,
  `user_profile` varchar(50) DEFAULT NULL,
  `user_email` varchar(50) DEFAULT NULL,
  `user_password` varchar(80) DEFAULT NULL,
  `use_category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_profile`, `user_email`, `user_password`, `use_category_id`) VALUES
(1, 'Dr. Jyoti Pareek', 'image/faculties/jyotiPareek.webp', 'jyotipareek@gmail.com', '12345678', 1),
(2, 'Dr. Hiren D Joshi', 'image/faculties/hirenJoshi.webp', 'hiren@gmail.com', '12345678', 2),
(3, 'Dr. Bhumika Shah', 'image/faculties/bhumikaShah.webp', 'bhumikashah@gmail.com', '12345678', 2),
(4, 'Dr. Hardik J Joshi', 'image/logos/admin.webp', NULL, '12345678', 2),
(5, 'Dr. Suchit Purohit', 'image/faculties/suchitPurohit.webp', NULL, '12345678', 2),
(6, 'Dr. Maitri Jhaveri', 'image/logos/admin.webp', NULL, '121345678', 2),
(7, 'Mr. Jaykumar Patel', 'image/faculties/jayPatel.webp', NULL, '12345678', 2),
(8, 'Jigna Satani', 'image/faculties/jignaSatani.webp', NULL, '12345678', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_category`
--

CREATE TABLE `user_category` (
  `use_category_id` int(11) NOT NULL,
  `user_category_name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_category`
--

INSERT INTO `user_category` (`use_category_id`, `user_category_name`) VALUES
(1, 'admin'),
(2, 'faculty'),
(3, 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achievement`
--
ALTER TABLE `achievement`
  ADD PRIMARY KEY (`award_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admission_enquiry`
--
ALTER TABLE `admission_enquiry`
  ADD PRIMARY KEY (`admission_enquiry_id`),
  ADD KEY `fk_course_admissioin` (`course_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `fk_comments_event1` (`event_id`),
  ADD KEY `fk_comments_user1` (`user_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `documents`
--
ALTER TABLE `documents`
  ADD PRIMARY KEY (`document_id`),
  ADD KEY `Foreign key course` (`course_id`) USING BTREE,
  ADD KEY `Foreign Key category` (`document_category_id`) USING BTREE;

--
-- Indexes for table `document_category`
--
ALTER TABLE `document_category`
  ADD PRIMARY KEY (`document_category_id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `fk_event_evt_cat` (`event_category_id`);

--
-- Indexes for table `event_category`
--
ALTER TABLE `event_category`
  ADD PRIMARY KEY (`event_category_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`),
  ADD KEY `fk_faculty_user1` (`user_id`),
  ADD KEY `fk_faculty_designation1` (`designation_id`);

--
-- Indexes for table `faculty_research`
--
ALTER TABLE `faculty_research`
  ADD PRIMARY KEY (`research_id`),
  ADD KEY `fk_fac_research_faculty1` (`faculty_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `fk_news_news_cat1` (`news_category_id`);

--
-- Indexes for table `news_category`
--
ALTER TABLE `news_category`
  ADD PRIMARY KEY (`news_category_id`);

--
-- Indexes for table `photos`
--
ALTER TABLE `photos`
  ADD PRIMARY KEY (`photo_id`),
  ADD KEY `fk_photos_event1` (`event_id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `reference_paper`
--
ALTER TABLE `reference_paper`
  ADD PRIMARY KEY (`subject_doc_id`),
  ADD KEY `fk_subject_doc_subject1` (`subject_id`);

--
-- Indexes for table `result`
--
ALTER TABLE `result`
  ADD PRIMARY KEY (`result_id`),
  ADD KEY `fk_result_faculty1` (`faculty_id`),
  ADD KEY `fk_result_subject1` (`subject_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`),
  ADD KEY `fk_student_course1` (`course_id`),
  ADD KEY `fk_student_user1` (`user_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD KEY `fk_subject_program1` (`course_id`);

--
-- Indexes for table `syllabus`
--
ALTER TABLE `syllabus`
  ADD PRIMARY KEY (`syllabus_id`),
  ADD KEY `fk_syllabus_program1` (`course_id`);

--
-- Indexes for table `tmp_questions`
--
ALTER TABLE `tmp_questions`
  ADD PRIMARY KEY (`tmp_question_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `use_category_id` (`use_category_id`);

--
-- Indexes for table `user_category`
--
ALTER TABLE `user_category`
  ADD PRIMARY KEY (`use_category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achievement`
--
ALTER TABLE `achievement`
  MODIFY `award_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_enquiry`
--
ALTER TABLE `admission_enquiry`
  MODIFY `admission_enquiry_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `documents`
--
ALTER TABLE `documents`
  MODIFY `document_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `document_category`
--
ALTER TABLE `document_category`
  MODIFY `document_category_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `event_category`
--
ALTER TABLE `event_category`
  MODIFY `event_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `faculty_research`
--
ALTER TABLE `faculty_research`
  MODIFY `research_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news_category`
--
ALTER TABLE `news_category`
  MODIFY `news_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `photos`
--
ALTER TABLE `photos`
  MODIFY `photo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reference_paper`
--
ALTER TABLE `reference_paper`
  MODIFY `subject_doc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `result`
--
ALTER TABLE `result`
  MODIFY `result_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `syllabus`
--
ALTER TABLE `syllabus`
  MODIFY `syllabus_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tmp_questions`
--
ALTER TABLE `tmp_questions`
  MODIFY `tmp_question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_category`
--
ALTER TABLE `user_category`
  MODIFY `use_category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admission_enquiry`
--
ALTER TABLE `admission_enquiry`
  ADD CONSTRAINT `fk_course_admissioin` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_comments_event1` FOREIGN KEY (`event_id`) REFERENCES `event` (`event_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_comments_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `documents`
--
ALTER TABLE `documents`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`document_category_id`) REFERENCES `document_category` (`document_category_id`),
  ADD CONSTRAINT `Foreign keycourse` FOREIGN KEY (`course_id`) REFERENCES `course` (`course_id`);

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `fk_faculty_designation1` FOREIGN KEY (`designation_id`) REFERENCES `designation` (`designation_id`),
  ADD CONSTRAINT `fk_faculty_user1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
