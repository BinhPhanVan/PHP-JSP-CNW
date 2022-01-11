<?php
    include_once("../Model/Model_Student.php");
    class Ctrl_Student{
        public function invoke() {
            if(isset($_GET['stid'])) {
                $modelStudent = new Model_Student();
                $student = $modelStudent->getStudentDetail($_GET['stid']);
                include_once("../View/StudentDetail.html");
            }
            else if(isset($_GET['update'])) {
                $modelStudent = new Model_Student();
                $student = $modelStudent->getStudentDetail($_GET['update']);
                include_once("../View/Update_Form.html");
            }
            else if(isset($_GET['mod1'])) {
                include_once("../View/Insert_Form.html");
            }
            else if(isset($_GET['mod2'])) {
                $modelStudent = new Model_Student();
                $studentList = $modelStudent->getAllStudent();
                include_once("../View/StudentListUpdate.html");
            }
            else if(isset($_GET['mod3'])) {
                $modelStudent = new Model_Student();
                $studentList = $modelStudent->getAllStudent();
                include_once("../View/StudentListRemove.html");
                           
            }
            else if(isset($_GET['mod4'])) {
                include_once("../View/Search_Form.html");
            }
            else if(isset($_POST['insert'])) {
                $id = $_REQUEST['id'];
                $name = $_REQUEST['name'];
                $age = $_REQUEST['age'];
                $university = $_REQUEST['university'];
                $modelStudent = new Model_Student();
                $modelStudent->addStudent($id, $name, $age, $university);
                header("Location:Controller_Student.php");
            }
            else if(isset($_POST['update'])) {
                $id = $_REQUEST['id'];
                $name = $_REQUEST['name'];
                $age = $_REQUEST['age'];
                $university = $_REQUEST['university'];
                $modelStudent = new Model_Student();
                $modelStudent->updateStudent($id, $name, $age, $university);
                header("Location:Controller_Student.php");
            }
            else if(isset($_GET['remove'])) {
                $modelStudent = new Model_Student();
                $studentList = $modelStudent->removeStudent($_GET['remove']);
                $studentList = $modelStudent->getAllStudent();
                include_once("../View/StudentListRemove.html");     
            }
            else if(isset($_POST['search'])) {
                $truong = $_REQUEST['truong'];
                $data = $_REQUEST['data'];
                echo $truong.$data;
                $modelStudent = new Model_Student();
                $studentList = $modelStudent->searchStudent($truong, $data);
                include_once("../View/StudentListSearch.html");
            }
            else {
                $modelStudent = new Model_Student();
                $studentList = $modelStudent->getAllStudent();
                include_once("../View/StudentList.html");
            }
        }
    }
    $Controller_Student = new Ctrl_Student();
    $Controller_Student->invoke();
?>
