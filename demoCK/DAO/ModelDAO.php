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
        public function getListSV()
        {
            include "AccessDB.php";
            $sql = "select * from SinhVien";
            $rs = mysqli_query($conn, $sql);
            $i = 0;
            while($row=mysqli_fetch_array($rs)) {
                $ms =$row["MSSV"];
                $name =$row["Name"];
                $gender =$row["Gender"];
                $makhoa =$row["MaKhoa"];
                $students[$i++] = new SinhVien($ms, $name, $gender, $makhoa);
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
        public function getListKhoa()
        {
            include "AccessDB.php";
            $sql = "select * from Khoa";
            $rs = mysqli_query($conn, $sql);
            $i = 0;
            while($row=mysqli_fetch_array($rs)) {
                $ms =$row["MaKhoa"];
                $name =$row["TenKhoa"];
                $Khoa[$i++] = new Khoa($ms, $name);
            }
            if($i != 0) 
            {
                mysqli_close($conn);
                return $Khoa;
            }
            else
            {
                echo "<h2>Không tìm thấy dữ liệu</h2>";
                mysqli_close($conn);
            } 
        }
        public function getListSV_Khoa($makhoa)
        {
            include "AccessDB.php";
            $sql = "select * from SinhVien where MaKhoa = $makhoa";
            $rs = mysqli_query($conn, $sql);
            $i = 0;
            while($row=mysqli_fetch_array($rs)) {
                $ms =$row["MSSV"];
                $name =$row["Name"];
                $gender =$row["Gender"];
                $makhoa =$row["MaKhoa"];
                $students[$i++] = new SinhVien($ms, $name, $gender, $makhoa);
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
        public function getSV($ma)
        {
            include "AccessDB.php";
            $sql = "select * from SinhVien where MSSV = $ma";
            $rs = mysqli_query($conn, $sql);
            $i = 0;
            while($row=mysqli_fetch_array($rs)) {
                $ms =$row["MSSV"];
                $name =$row["Name"];
                $gender =$row["Gender"];
                $makhoa =$row["MaKhoa"];
                $SV = new SinhVien($ms, $name, $gender, $makhoa);
            }
            mysqli_close($conn);
            return $SV;
        }
        public function UpdateSV($id, $name, $gender, $makhoa)
        {
            include "AccessDB.php";
            $sql = "Update SinhVien set MaKhoa='$makhoa', Name='$name', Gender = '$gender' where MSSV = '$id'" ;
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
        }
        public function DeleteSV($id)
        {
            include "AccessDB.php";
            $sql = "delete from SinhVien where MSSV = '$id'" ;
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
        }
        public function AddSV($id, $name, $gender, $makhoa)
        {
            include "AccessDB.php";
            $sql = "Insert into SinhVien value ('$id', '$name', '$gender','$makhoa')";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
        }
        
    }
?>