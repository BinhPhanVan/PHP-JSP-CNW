<?php 
    include_once "../DAO/ModelDAO.php";
    class ModelBO
    {
        public function __construct(){}
        public function checkAdmin(String $name, String $pass){
            $modelDAO = new ModelDAO();
            return $modelDAO->checkAdmin($name, $pass);
        }
        public function getListSV()
        {
            $modelDAO = new ModelDAO();
            return $modelDAO->getListSV();
        }
        public function getListKhoa()
        {
            $modelDAO = new ModelDAO();
            return $modelDAO->getListKhoa();
        }
        public function getListSV_Khoa($maKhoa)
        {
            $modelDAO = new ModelDAO();
            return $modelDAO->getListSV_Khoa($maKhoa);
        }
        public function getSV($ma)
        {
            $modelDAO = new ModelDAO();
            return $modelDAO->getSV($ma);
        }
        public function UpdateSV($id, $name, $gender, $makhoa)
        {
            $modelDAO = new ModelDAO();
            return $modelDAO->UpdateSV($id, $name, $gender, $makhoa);
        }
        public function DeleteSV($id)
        {
            $modelDAO = new ModelDAO();
            return $modelDAO->DeleteSV($id);
        }
        public function AddSV($id, $name, $gender, $makhoa)
        {
            $modelDAO = new ModelDAO();
            return $modelDAO->AddSV($id, $name, $gender, $makhoa);
        }
    }
?>