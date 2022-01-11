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
    </style>
</head>
<body>
    <?php
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
            // echo "ket noi du lieu thanh cong!!! <br>";
        }
        
        $sql = "SELECT * FROM phongban";
        $result = $conn->query($sql);
        echo "<h3>DANH SÁCH PHÒNG BAN</h3><br>";
        if ($result->num_rows > 0) {
       
        echo '<table border = "1" width="100%">';
        echo " 
        <tr>
            <th>IDPB</th>
            <th>Tên phòng ban</th>
            <th>Mô tả</th>
            <th>Chi tiết</th>
        </tr>";
        while($row = $result->fetch_assoc()) {
            echo "
                <tr>
                    <td> ". $row["IDPB"]." </td>
                    <td> ". $row["TenPB"]."</td>
                    <td> ". $row["MoTa"]." </td>
                    <td> <a href=xemnhanvienPB.php?IDPB=".$row["IDPB"].">Xem</a></td>
                </tr>";
        }
        } else {
        echo "0 results";
        }
        $conn->close();
        echo '</table>';
        ?>
</body>
</html>