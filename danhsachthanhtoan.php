<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách hình thức thanh toán</title>

    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            border-bottom: 4px solid lightblue;
        }

        th, td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            font-size: 18px;
            font-weight: 800;
            background-color: lightblue;
        }

        tr:hover {
            background-color: pink;
            
        }

        a {
            font-size: large;
        }

        a:link {
        color: #e79654;
        background-color: transparent;
        text-decoration: none;
        }
        a:visited {
        color: #e75480;
        background-color: transparent;
        text-decoration: none;
        }
        a:hover {
        color: #54e7ba;
        background-color: transparent;
        text-decoration: underline;
        }
        a:active {
        color: darkblue;
        background-color: transparent;
        text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Danh sách hình thức thanh toán</h1>

    <a href="nhap-httt.php">Thêm hình thức thanh toán</a>
    <?php 
    include_once __DIR__ . '/dbconnect.php';

    $sql = 'SELECT *
	        FROM hinhthucthanhtoan;';

    $result = mysqli_query($conn, $sql);


    $data = [];
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {

        $data[] = array(
            'httt_ma' => $row['httt_ma'],
            'httt_ten' => $row['httt_ten']
        );

    }

    //var_dump($data);

    


    ?>

    <table>
        <tr>
            <th>Mã</th>
            <th>Tên</th>
            <th>Hành động</th>
        </tr>
        
        <?php foreach($data as $ds): ?>
            <tr>
                <td><?php echo $ds['httt_ma'];?></td>
                <td><?php echo $ds['httt_ten'];?></td>
                <td><a href="sua-httt.php?httt_ma=<?php echo $ds['httt_ma']; ?>">Sửa</a> --- 
                    <a href="xoa-httt.php?httt_ma=<?php echo $ds['httt_ma']; ?>">Xóa</a>
                </td>
            </tr>
        <?php endforeach; ?>
    
    </table>

    
</body>
</html>

