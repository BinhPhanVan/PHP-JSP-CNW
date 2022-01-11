<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require_once 'ketnoicsdl.php'?>

    <?php
        if(isset($_POST['login']))
        {
            $user = $_POST['user'];
            $pass = $_POST['pass'];
        }
        if($user=="" || $pass =="")
        {
            header("Location:login.php");
        }
        else
        {
            $sql = "SELECT * FROM admin where Username='$user' and Password= '$pass' ";
            $result = $conn->query($sql);
            if ($result->num_rows != 0)
            {
                header("Location:capnhat.php");
            }
            else
            {
                header("Location:login.php");
            }
        }
    ?>
</body>
</html>