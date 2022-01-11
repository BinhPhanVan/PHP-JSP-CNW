<?php
    include_once("Entity_Student.php");
    class Model_Student {
        public function __construct() {

        }

        public function getAllStudent() {
            include 'Connect.php';
            $sql = "select * from nhanvien";
            $rs = mysqli_query($conn, $sql);
            $i = 0;
            while($row=mysqli_fetch_array($rs)) {
                $id =$row["ID"];
                $name =$row["Name"];
                $age =$row["Age"];
                $university =$row["University"];
                $students[$i++] = new Entity_Student($id, $name, $age, $university);
            }
            return $students;
        }

        public function getStudentDetail($stid) {
            $allStudent = $this->getAllStudent();
            for($i=0; $i<sizeof($allStudent); $i++) {
                if($allStudent[$i]->id == $stid)
                    return $allStudent[$i];
            }
        }

        public function addStudent($id, $name, $age, $university) {
            include 'Connect.php';
            $sql = "Insert into nhanvien value ('$id', '$name', $age, '$university')";
            $rs = mysqli_query($conn, $sql);
            mysqli_close($conn);
        }

        public function updateStudent($id, $name, $age, $university) {
            include 'Connect.php';
            $sql = "Update sinhvien SET name = '$name', age = $age, university = '$university' where id = '$id'";
            $rs = mysqli_query($conn, $sql);
            mysqli_close($conn);
        }

        public function removeStudent($id) {
            include 'Connect.php';
            $sql = "Delete from sinhvien where id = '$id'";
            $rs = mysqli_query($conn, $sql);
            mysqli_close($conn);
        }

        public function searchStudent($truong, $data) {
            include 'Connect.php';
            $sql = "select * from nhanvien where $truong = '$data'";
            echo $sql;
            $rs = mysqli_query($conn, $sql);
            $i = 0;
            while($row=mysqli_fetch_array($rs)) {
                $id =$row["ID"];
                $name =$row["Name"];
                $age =$row["Age"];
                $university =$row["University"];
                $students[$i++] = new Entity_Student($id, $name, $age, $university);
            }
            return $students;
        }
    }
?>