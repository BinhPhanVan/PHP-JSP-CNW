<?php
    if (session_id() === '') session_start();
?>
<?php 
    include_once "../BO/ModelBO.php";
    class Ctrl_Web
    {
        public function invoke(){
            $modelBO = new ModelBO();
            if(isset($_POST['login']))
            {
                $username = $_POST["username"];
                $password = $_POST["password"];
               
                if($modelBO->checkAdmin($username, $password))
                {
                    $_SESSION["username"] =  $username ;
                    $_SESSION["password"] =  $password ;
                    include_once("../views/welcome.html");
                }
                else
                {
                    header("Location:../index.php");
                }
            }
        }
    };
    $Controller = new Ctrl_Web();
    $Controller->invoke();
?>