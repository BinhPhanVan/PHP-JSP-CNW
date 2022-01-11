<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <title>Document</title>
</head>
<body>
        <div class="container">
            <form action="timkiemnhanvien.php" method="post">
                <h3>Tìm kiếm nhân viên </h3>
                <input type="radio" name="Info" value="IDNV">
                <label for="IDNV">IDNV</label>
                <br>
                <input type="radio" name="Info" value="HoTen">
                <label for="HoTen">Họ tên</label>
                <br>
                <input type="radio" name="Info" value="IDPB">
                <label for="IDPB">IDPB</label>
                <br>
                <input type="radio" name="Info" value="DiaChi">
                <label for="DiaChi">Địa chỉ</label>
                <br>
                <label for="txt_input">Nhập thông tin cần tìm kiếm</label>
                <input type="text" name="Info_input" id="txt_input" value='' placeholder="Nhập thông tin">
                <button type ="submit" name="summary">Search</button>
            </form>
        </div>
    
</body>
</html>