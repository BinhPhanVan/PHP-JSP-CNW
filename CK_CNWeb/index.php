<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        label 
            {
                display: inline-block;
                width:100px;
                text-align: left;
            }
    </style>
</head>
<body>
    <body>
        <div class="container">
            <form action="./Controller/Controller.php" method="post" style="text-align:center;padding-top:100px;">
                <h3 style="color: blue;">Đăng nhập hệ thống</h3>
                <label for="username">Tên đăng nhập</label>
                <input type="text" name="username" placeholder="Nhập Username">
                <br>
                <br>
                <label for="password">Mật khẩu</label>
                <input type="password" name="password" placeholder="Nhập Password">
                <br>
                <br>
                <button type ="submit" name="login">Đăng nhập</button>
                <button type ="reset">Hủy</button>
            </form>
        </div>
</body>
</body>
</html>