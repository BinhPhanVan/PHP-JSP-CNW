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
        if(isset($_POST['summary']))
        {
            $IDNV = $_POST['IDNV'];
            $HoTen = $_POST['HoTen'];
            $IDPB = $_POST['IDPB'];
            $DiaChi = $_POST['DiaChi'];
        }
        if($IDNV!='' and  $HoTen!='' and $IDPB!='' and $DiaChi!='')
        {
            $sql1 = "INSERT INTO nhanvien (IDNV, HoTen,IDPB,DiaChi)
            VALUES ( '$IDNV', '$HoTen','$IDPB','$DiaChi')";
            if ($conn->query($sql1) === TRUE) {
                echo "New record created successfully";
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
                    </tr>";
                    while($row = $result->fetch_assoc()) 
                    {
                        echo "
                        <tr>
                            <td> ". $row["IDNV"]." </td>
                            <td> ". $row["HoTen"]."</td>
                            <td> ". $row["IDPB"]." </td>
                            <td> ". $row["DiaChi"]." </td>
                        </tr>";
                    }
                    echo '</table>';
                } 
                $conn->close();
            } 
            else
            {
                echo "Du lieu khong hop le!";
                $conn->close();
            }
        }  
        
        
    ?>
        <br>
        <button class='btn'><a href="them.php">>> Thêm nhân viên</a></button>

</body>
</html>