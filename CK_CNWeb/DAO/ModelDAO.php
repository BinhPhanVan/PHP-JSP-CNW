<?php 
include_once("../BEAN/SinhVien.php");
include_once("../BEAN/Khoa.php");
    class ModelDAO {
        public function __construct(){

        }
        public function CheckAdmin(String $name, String $pass)
        {
            include "AccessDB.php";
            $sql = "select * from Admin where Username = '$name' and Password = '$pass'";
            $rs = mysqli_query($conn, $sql);
            $i = 0;
            while($row = mysqli_fetch_array($rs))
            {
                $i++;
            }
            mysqli_close($conn);
            return $i;
        }
    }
?>