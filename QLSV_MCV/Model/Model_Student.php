<?php 
include_once("Entity_Student.php");
class Model_Student{
    public function __construct() {}
    public function getAllStudent(){
            include "AccessDB.php";
            $sql = "select * from sinhvien";
            $rs = mysqli_query($conn, $sql);
            $i = 0;
            while($row=mysqli_fetch_array($rs)) {
            $id =$row["ID"];
            $name =$row["Name"];
            $age =$row["Age"];
            $university =$row["University"];
            $students[$i++] = new Entity_Student($id, $name, $age, $university);
        }
        if($i != 0) 
        {
            mysqli_close($conn);
            return $students;
        }
        else
        {
            echo "<h2>Không tìm thấy dữ liệu</h2>";
            mysqli_close($conn);
        } 
        
    }
    public function getStudentDetail($stid)
    {
        $allStudent = $this->getAllStudent();
        for($i=0; $i<sizeof($allStudent); $i++) 
        {
            if($allStudent[$i]->id == $stid)
                return $allStudent[$i];
        }
    }
    public function AddStudent($id, $name, $age, $university)
    {
        include "AccessDB.php";
        $sql = "Insert into sinhvien value ('$id', '$name', '$age','$university')";
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function UpdateStudent($id, $name, $age, $university)
    {
        include "AccessDB.php";
        $sql = "Update sinhvien set Name='$name', Age='$age', University = '$university' where ID = '$id'" ;
        $result = mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function DeleteStudent($id) {
        include "AccessDB.php";
        $sql = "delete from sinhvien where id = '$id'";
        $rs = mysqli_query($conn, $sql);
        mysqli_close($conn);
    }
    public function searchStudent($label, $data) {
        include "AccessDB.php";
        $sql = "select * from sinhvien where $label = '$data'";
        $rs = mysqli_query($conn, $sql);
        $i = 0;
        while($row=mysqli_fetch_array($rs)) {
            $id =$row["ID"];
            $name =$row["Name"];
            $age =$row["Age"];
            $university =$row["University"];
            $students[$i++] = new Entity_Student($id, $name, $age, $university);
        }
        if($i != 0) 
        {
            mysqli_close($conn);
            return $students;
        }
       
        else
        {
            echo "<h2>Không tìm thấy dữ liệu</h2>";
            mysqli_close($conn);
        } 
    }

}
?>