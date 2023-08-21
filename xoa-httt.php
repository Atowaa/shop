<?php 

    $httt_ma = $_GET['httt_ma'];

    include_once __DIR__ . '/dbconnect.php';

    $sql = "DELETE FROM hinhthucthanhtoan WHERE httt_ma = $httt_ma;";

    mysqli_query($conn, $sql);

    echo '<script>
            location.href="danhsachthanhtoan.php";
            </script>';

?>