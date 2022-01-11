<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th,tr,td, h3
        {
            text-align: center;
        }
        table
        {
            border-collapse: collapse;
        }
        th{
            background-color:blue;
            color :white;
        }
        .btn{
            float: right;
        }
        .btn a{
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php require_once 'ketnoicsdl.php'?>

    <?php
       if(!empty($_POST['check_list'])) 
        {
            foreach($_POST['check_list'] as $check) 
            {
                $sql = "DELETE FROM nhanvien WHERE IDNV='$check'";
                if ($conn->query($sql) === TRUE) 
                {
                    echo "Record deleted successfully";
                } 
                else 
                {
                    echo "Error deleting record: " . $conn->error;
                }
                  
                $conn->close();
            }
        }
    ?>
        <br>
        <button class='btn'><a href="xoanhieu.php">>> Xóa nhân viên</a></button>

</body>
</html>