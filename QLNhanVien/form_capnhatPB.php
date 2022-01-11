<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script lang="Javascripts">

    </script>
     <style>
        label 
            {
                display: inline-block;
                width:150px;
                text-align: left;
            }
        .btn{
            float: right;
        }
        .btn a{
            text-decoration: none;
        }
        input{
            width: 150px;
        }
    </style>
</head>
<body>
        <?php require_once 'ketnoicsdl.php'?>
        <?php
             $IDPB = $_REQUEST['IDPB'];
             $sql = "SELECT * FROM phongban where IDPB = '$IDPB'";
             $result = $conn->query($sql);
             $row = $result->fetch_assoc();
             $Ten = $row['TenPB'];
             $Mota = $row['MoTa'];
        echo '<div class="container">
            <form action="xulycapnhat.php" method="post" style="text-align:center;">
                <h2 >Nhập thông tin cập nhật phòng ban </h2>
                <label for="namePB">Tên phòng ban: </label>
                <input type="text" name="namePB" value='.$Ten.'>
                <br>
                <br>
                <label for="mota">Mô tả: </label>
                <input type="text" name="mota" value='.$Mota.'>
                <br>
                <br>
                <button type ="submit" name="OK">OK</button>
                <button type ="reset">Reset</button>
            </form>
        </div>
        <br>
        <button class="btn"><a href="capnhat.php"> >> Cập nhật</a></button>
        <button class="btn"><a href="option.php">>> Option</a></button>';
        ?>
</body>
</html>