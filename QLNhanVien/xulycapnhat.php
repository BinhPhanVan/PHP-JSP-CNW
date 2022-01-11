<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php require_once 'ketnoicsdl.php'?>

<?php
    if(isset($_POST['OK']))
    {
        $namePB = $_POST['namePB'];
        $Mota = $_POST['mota'];
    }
    $sql = "UPDATE phongban SET MoTa='$Mota' WHERE TenPB='$namePB'";
    if ($conn->query($sql) === TRUE) {
        echo "Updated successfully";
      } else {
        echo "Error updating record: " . $conn->error;
      }
    $conn->close();
    header("Location: capnhat.php"); 

?>
</body>
</html>