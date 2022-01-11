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
                width:100px;
                text-align: left;
            }
        h3
            {
                color :red;
            }
        .btn a
            {
                text-decoration: none;
                width: 150px;
                display: block;
            }
        .btn
            {
                height:40px;
            }
    </style>
</head>
<body>
        <div class="container">
            <form action="xuly_login.php" method="post" style="text-align:center;">
                <h2 >Lựa chọn chức năng</h2>
                <br><br>
                <button class='btn'><a href="them.php">Thêm nhân viên</a></button>
                <br><br>
                <button class='btn'><a href="xoa.php">Xóa nhân viên</a></button>
                <br><br>
                <button class='btn'><a href="xoanhieu.php">Xóa nhiều nhân viên</a></button>
                <br><br>
                <button class='btn'><a href="capnhat.php">Cập nhật phòng ban</a></button>
            </form>
        </div>
</body>
</html>