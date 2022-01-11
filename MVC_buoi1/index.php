<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .main{
            display: flex;
            flex-direction: column
        }
        a{
            text-decoration: none;
            font-size: 20px;
            padding: 10px 10px;
        }
        a:hover{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <div class="main">
    <a href="Controller/Controller_Student.php">Xem</a>
    <a href="Controller/Controller_Student.php?mod1='1'">Chèn</a>
    <a href="Controller/Controller_Student.php?mod2='1'">Cập Nhật</a>
    <a href="Controller/Controller_Student.php?mod3='1'">Xóa</a>
    <a href="Controller/Controller_Student.php?mod4='1'">Tìm Kiếm</a>
    </div>
</body>
</html>