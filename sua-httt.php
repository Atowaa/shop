<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sua</title>
</head>
<body>
    <?php 
        // luu du lieu cu
        $httt_ma = $_GET['httt_ma'];

        include_once __DIR__ . '/dbconnect.php';

        $sql = "SELECT * FROM hinhthucthanhtoan
                WHERE httt_ma = $httt_ma;";

        $result = mysqli_query($conn, $sql);

        $olddata = [];

        while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $olddata = array(
                'httt_ma'   =>  $row['httt_ma'],
                'httt_ten'  =>  $row['httt_ten']
            );
        }

        //var_dump($olddata);
    
    ?>

    <form name="form_suadshttt" method="POST" action="">

        <label for="httt_ten">Sửa hình thức thanh toán: </label>
        <input name="httt_ten" type="text" value="<?php echo $olddata['httt_ten'];?>"><br>

        <button name="luu">OK!</button>

    </form>

    <?php 
    
        if(isset($_POST['luu'])){
            $httt_ten = $_POST['httt_ten'];
           
            
            include_once __DIR__ . '/dbconnect.php';

            $sql = "UPDATE hinhthucthanhtoan
                    SET httt_ten='$httt_ten'
                    WHERE httt_ma=$httt_ma;";
                    // httt_ma có rồi - lấy trên GET
                    
            mysqli_query($conn, $sql);    

            echo '<script>
            location.href="danhsachthanhtoan.php";
            </script>';

        }
    ?>

    

    

    
</body>
</html>