<?php
    include_once('../Model/Model_Student.php');
    class Ctrl_Student
    {
        public function invoke()
        {
            if(isset($_GET['stid']))
            {
                $modelStudent = new Model_Student();
                $student = $modelStudent->getStudentDetail($_GET['stid']);
                include_once("../views/StudentDetail.html");
            }
            elseif(isset($_GET['mod1'])) 
            {
                include_once("../views/InsertStudent.html");
            }
            elseif(isset($_POST['insertSV']))
            {
                $id = $_POST["ID"];
                $name = $_POST["Name"];
                $age = $_POST["Age"];
                $university = $_POST["University"];
                $model_Student = new Model_Student();
                $model_Student->AddStudent($id, $name, $age, $university);
                header("Location:Controller_Student.php");
            }
            elseif(isset($_GET['update']))
            {
                $modelStudent = new Model_Student();
                $student= $modelStudent->getStudentDetail($_GET['update']);
                include_once("../views/FormUpdateStudent.html");
            }
            
            elseif(isset($_GET['mod2']))
            {
                $modelStudent = new Model_Student();
                $studentList = $modelStudent->getAllStudent();
                include_once("../views/UpdateListStudent.html");
            }
            elseif(isset($_POST['updateSV']))
            {
                $id = $_POST["ID"];
                $name = $_POST["Name"];
                $age = $_POST["Age"];
                $university = $_POST["University"];
                $model_Student = new Model_Student();
                $model_Student->UpdateStudent($id, $name, $age, $university);
                $studentList = $model_Student->getAllStudent();
                include_once("../views/UpdateListStudent.html");
            }
            elseif(isset($_GET['mod3']))
            {
                $modelStudent = new Model_Student();
                $studentList = $modelStudent->getAllStudent();
                include_once("../views/DeleteListStudent.html");
            }
            elseif(isset($_GET['delete']))
            {
                $id = $_GET['delete'];
                $modelStudent = new Model_Student();
                $modelStudent->DeleteStudent($id);
                $studentList = $modelStudent->getAllStudent();
                include_once("../views/DeleteListStudent.html");
            }
            elseif(isset($_GET['mod4']))
            {
                include_once("../views/FormSearchStudent.html");
            }
            elseif(isset($_POST['searchSV']))
            {
                $label = $_POST["Label_Info"];
                $data = $_POST["data"];
                $model_Student = new Model_Student();
                $studentList = $model_Student->searchStudent($label, $data);
                include_once("../views/StudentSearch.html");
            }
            else
            {
                $modelStudent = new Model_Student();
                $studentList = $modelStudent->getAllStudent();
                include_once("../views/StudentList.html");
            }
        }
    }
    $Controller_Student = new Ctrl_Student();
    $Controller_Student->invoke();
?>