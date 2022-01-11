<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $ID = $_REQUEST["IDPB"];
        $servername = "localhost";
        $username = "root";
        $password = "";
        $DBname = "QLNV";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $DBname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        else
        {
            //echo "ket noi du lieu thanh cong!!! <br>";
        }
    ?>
</body>
</html>