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
    $index =10;
    $servername = "localhost";
    $username = "root";
    $password = "";
    $DBname = "DULIEU";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $DBname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    else
    {
        echo "ket noi du lieu thanh cong!!! <br>";
    }
    
    $sql = "SELECT * FROM table1";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        echo "id: " . $row["MaSo"]. " - Name: " . $row["HoTen"]. " - Date:" . $row["NgaySinh"]." - Job: ". $row["NgheNghiep"] . "<br>";
      }
    } else {
      echo "0 results";
    }
    $conn->close();
    ?>
    <?php
        function TestValue($a="macdinh")
        {
          echo "hello $a";
        } 
        function BinhPhuong($var)
        {
            return $var*$var;
        }
        TestValue("Phan Van Binh");
        echo BinhPhuong(12);
    ?>
</body>
</html>