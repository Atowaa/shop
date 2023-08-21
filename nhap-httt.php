<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhap</title>
</head>
<body>

    <form name="form_nhapdshttt" method="POST" action="">

        <label for="httt_ten">Nhập hình thức thanh toán mới: </label>
        <input name="httt_ten" type="text"><br>

        <button name="luu">OK!</button>


    </form>
    
    <?php
    
        if(isset($_POST['luu'])){
            $httt_ten = $_POST['httt_ten'];
            
            include_once __DIR__ . '/dbconnect.php';

            $sql = "INSERT INTO hinhthucthanhtoan
                    (httt_ten)
                    VALUES ('$httt_ten');";

            mysqli_query($conn, $sql);    

            echo '<script>
            location.href="danhsachthanhtoan.php";
            </script>';
            
        }
        
        
    ?>

    
</body>
</html>




