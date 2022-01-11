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
    </style>
</head>
<body>
        <div class="container">
            <form action="xuly_login.php" method="post" style="text-align:center;">
                <h2 >Nhập thông tin đăng nhập </h2>
                <label for="user">Username</label>
                <input type="text" name="user" placeholder="Nhập Username">
                <br>
                <br>
                <label for="pass">Password</label>
                <input type="password" name="pass" placeholder="Nhập Password">
                <br>
                <br>
                <button type ="submit" name="login">Login</button>
                <button type ="reset">Reset</button>
            </form>
        </div>
</body>
</html>