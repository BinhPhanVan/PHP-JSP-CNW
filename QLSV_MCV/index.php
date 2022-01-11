<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        .container
        {
            display: flex;
            flex-direction: column;
            width: 200px;
        }
        a{
           
            text-align: center;
            height: 30px;
            border: 1px black solid;
            text-decoration: none;
            font-size: 19px;
        }
        a span
        {
            /* margin: auto auto; */
            vertical-align: middle;
        }
        a:hover{
            background-color: rgb(214, 215, 216);
            color: #000;
        }
        a:active{
            color:red;
        }
        .contaner-fluid
        {
            text-align: center;
            justify-items: center;
        }
    </style>
</head>

<body>
    <div class="contaner-fluid">
        <h1>Quản lý sinh viên</h1>
        <p> Mô hình MVC cơ bản</p>
    </div>
    <div class="container">
        <a href="./Controller/Controller_Student.php"><span>Xem sinh viên</span></a>
        <a href="./Controller/Controller_Student.php?mod1='1'"><span>Thêm sinh viên</span></a>
        <a href="./Controller/Controller_Student.php?mod2='1'"><span>Cập nhật sinh viên</span></a>
        <a href="./Controller/Controller_Student.php?mod3='1'"><span>Xóa sinh viên</span></a>
        <a href="./Controller/Controller_Student.php?mod4='1'"><span>Tìm kiếm nhân viên</span></a>
    </div>
</body>
</html>