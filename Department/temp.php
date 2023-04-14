<?php

//* @audit-info Interface Method
interface Method
{
    public function add();
    public function delete();
    public function update();
}

// * @audit-info # Class user
class User
{
    public $userId, $userType,$userName, $userProfile;
    public function signIn()
    {
    }
    public function signUp()
    {
    }
    public function signOut()
    {
        session_abort();
        header("Location:./index.php");
    }
    public function __construct($v_userId, $v_userName, $v_userProfile, $v_userType)
    {
        $this->userId = $v_userId;
        $this->userType = $v_userType;
        $this->userName = $v_userName;
        $this->userProfile = $v_userProfile;
    }
}

//! @audit Student user

if ($value == true) {

    // * @audit-info # Class Achievement
    class Achievement
    {
        public function addAchievement()
        {
        }
        public function updateAchievement()
        {
        }
        public function deleteAchievement()
        {
        }
    }

    // * @audit-info # Class Comment
    class Comment
    {
        public function addComment()
        {
        }
    }

    // * @audit-info # Class Comment
    class Paper
    {
        public function viewPaper()
        {
        }
    }

    // * @audit-info # Class Result
    class Result
    {
        public function viewResult()
        {
        }
    }
}

//! @audit Faculty user

if ($value == true) {

    // * @audit-info # Class Research
    class Research
    {
        public function addResearch()
        {
        }
        public function deleteResearch()
        {
        }
        public function updateResearch()
        {
        }
    }

    // * @audit-info # Class News
    class News
    {
        public function addNews()
        {
        }
        public function deleteNews()
        {
        }
        public function updateNews()
        {
        }
    }

    // * @audit-info # Class Achievement
    class Achievement
    {
        public function addAchievement()
        {
        }
        public function deleteAchievement()
        {
        }
        public function updateAchievement()
        {
        }
    }

    // * @audit-info # Class Event
    class Event
    {
        public function updateEvent()
        {
        }
    }

    // * @audit-info # Class Comment
    class Comment
    {
        public function addComment()
        {
        }
    }
}

//! @audit Admin user

if ($value == true) {

    // * @audit-info # Class Course
    class Course
    {
        private $courseId, $courseName;
        public function addCourse()
        {
        }
        public function deleteCourse()
        {
        }
        public function updateCourse()
        {
        }
    }

    // *@audit-info # Class Subject
    class Subject
    {
        private $syllabusId;
        public function addSubject()
        {
        }
        public function deleteSubject()
        {
        }
        public function updateSubject()
        {
        }
    }

    // * @audit-info # Class News
    class News
    {
        public function addNews()
        {
        }
        public function deleteNews()
        {
        }
        public function updateNews()
        {
        }
    }

    // * @audit-info # Class Event
    class Event
    {
        public function addEvent()
        {
        }
        public function deleteEvent()
        {
        }
        public function updateEvent()
        {
        }
    }

    // * @audit-info # Class Achievement
    class Achievement
    {
        public function addAchievement()
        {
        }
        public function deleteAchievement()
        {
        }
        public function updateAchievement()
        {
        }
    }

    // * @audit-info # Class Comment
    class Comment
    {
        public function addComment()
        {
        }
        public function deleteComment()
        {
        }
        public function updateComment()
        {
        }
    }

    // * @audit-info # Class Paper
    class Paper
    {
        public function addPaper()
        {
        }
        public function deletePaper()
        {
        }
        public function updatePaper()
        {
        }
    }

    // * @audit-info # Class Result
    class Result
    {
        public function addResult()
        {
        }
        public function deleteResult()
        {
        }
        public function updateResult()
        {
        }
    }

    // * @audit-info # Class Research
    class Research
    {
        public function addResearch()
        {
        }
        public function deleteResearch()
        {
        }
        public function updateResearch()
        {
        }
    }
    class user
    {
        public function addFaculty()
        {
        }
        public function updateFaculty()
        {
        }
        public function deleteFaculty()
        {
        }
        public function addStudent()
        {
        }
        public function updateStudent()
        {
        }
        public function deleteStudent()
        {
        }
        public function addAdmin()
        {

        }
        public function updateAdmin()
        {
            
        }
        public function deleteAdmin()
        {
            
        }
    }
}
