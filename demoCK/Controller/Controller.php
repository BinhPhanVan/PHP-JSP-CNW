<?php 
    include_once "../BO/ModelBO.php";
    class Ctrl_Web
    {
        public function invoke(){
            $modelBO = new ModelBO();
            if(isset($_POST['login']))
            {
                $user = $_POST["user"];
                $name = $_POST["pass"];
               
                if($modelBO->checkAdmin($user, $name))
                {
                    $ListKhoa  = $modelBO->getListKhoa();
                    $ListSV = $modelBO->getListSV();
                    include_once("../views/DanhSachSinhVien.html");
                }
                else
                {
                    header("Location:../index.php");
                }
            }
            elseif(isset($_GET['edit']))
            {
                $ListKhoa  = $modelBO->getListKhoa();
                $SV = $modelBO->getSV($_GET['edit']);
                include_once("../views/CapNhatSinhVien.html");
            }
            elseif(isset($_GET['delete']))
            {
                $ListKhoa  = $modelBO->getListKhoa();
                $SV = $modelBO->getSV($_GET['delete']);
                include_once("../views/XoaSinhVien.html");
            }
            elseif(isset($_POST['add']))
            {
                $ListKhoa  = $modelBO->getListKhoa();
                include_once("../views/ThemSinhVien.html");
            }
            elseif(isset($_POST['show']))
            {
                $ListKhoa  = $modelBO->getListKhoa();
                
                if($_POST["maKhoa"] ==-1)
                {
                    $ListSV = $modelBO->getListSV();
                }
                else
                {
                    $ListSV = $modelBO->getListSV_Khoa($_POST["maKhoa"]);
                }
                include_once("../views/DanhSachSinhVien.html");
            }
            elseif(isset($_POST["UpdateSV"]))
            {
                $modelBO->UpdateSV($_POST["IDSV"], $_POST["nameSV"], $_POST["GioiTinh"], $_POST["MaKhoa"]);
                $ListKhoa  = $modelBO->getListKhoa();
                $ListSV = $modelBO->getListSV();
                include_once("../views/DanhSachSinhVien.html");
            }
            elseif(isset($_POST["DeleteSV"]))
            {
                $modelBO->DeleteSV($_POST["IDSV"]); 
                $ListKhoa  = $modelBO->getListKhoa();
                $ListSV = $modelBO->getListSV();
                include_once("../views/DanhSachSinhVien.html");
            }
            elseif(isset($_POST["AddSV"]))
            {
                $modelBO->AddSV($_POST["IDSV"], $_POST["nameSV"], $_POST["GioiTinh"], $_POST["MaKhoa"]);
                $ListKhoa  = $modelBO->getListKhoa();
                $ListSV = $modelBO->getListSV();
                include_once("../views/DanhSachSinhVien.html");
            }
            
        }
    };
    $Controller = new Ctrl_Web();
    $Controller->invoke();
?>