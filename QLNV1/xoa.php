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
        $sql = "SELECT * FROM nhanvien";
        $result = $conn->query($sql);
        echo "<h3>DANH SÁCH NHÂN VIÊN</h3><br>";
        if ($result->num_rows > 0) {
            echo '<table border = "1" width="100%">';
            echo " 
            <tr>
                <th>IDNV</th>
                <th>Họ tên</th>
                <th>IDPB</th>
                <th>Địa chỉ</th>
                <th>Option</th>
            </tr>";
        while($row = $result->fetch_assoc()) 
        {
            echo "
            <tr>
                <td> ". $row["IDNV"]." </td>
                <td> ". $row["HoTen"]."</td>
                <td> ". $row["IDPB"]." </td>
                <td> ". $row["DiaChi"]." </td>
                <td>  <button><a href=xoanhanvien.php?IDNV=".$row["IDNV"].">Xóa</a></button> </td>
            </tr>";
        }
            echo '</table>';
        } 
        else {
            echo "0 results";
        }
        $conn->close();
       
        ?>
</body>
</html>