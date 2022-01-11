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
        <div class="container">
            <form action="themnhanvien.php" method="post">
                <h3 style="text-align:center;">Nhập thông tin nhân viên </h3>
                <label for="IDNV">IDNV</label>
                <input type="text" name="IDNV" placeholder="IDNV: NV01, NV02,...">
                <br>
                <br>
                <label for="HoTen">Họ tên</label>
                <input type="text" name="HoTen" placeholder="Nhập họ tên">
                <br>
                <br>
                <label for="IDPB">IDPB</label>
                <input type="text" name="IDPB" placeholder="PB01,PB02,PB03" >
                <br>
                <br>
                <label for="DiaChi">Địa chỉ</label>
                <input type="text" name="DiaChi"placeholder="Nhập địa chỉ">
                <br>
                <br>
                <button type ="submit" name="summary">Thêm nhân viên</button>
            </form>
        </div>
</body>
</html>