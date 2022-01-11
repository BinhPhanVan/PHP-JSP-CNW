<?php 
    include_once "../DAO/ModelDAO.php";
    class ModelBO
    {
        public function __construct(){}
        public function checkAdmin(String $name, String $pass){
            $modelDAO = new ModelDAO();
            return $modelDAO->checkAdmin($name, $pass);
        }
    }
?>