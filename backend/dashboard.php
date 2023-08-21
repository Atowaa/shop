<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <?php 
        include_once __DIR__ . '/layouts/styles.php';
    ?>
    
    
</head>
<body>
    <?php 
        include_once __DIR__ . '/layouts/header.php';
    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                Slider
            </div>
            <div class="col-md-9">
                content
            </div>
        </div>
    </div>
    <?php 
        include_once __DIR__ . '/layouts/footer.php';
    ?>

    <?php 
        include_once __DIR__ . '/layouts/scripts.php';
    ?>
</body>
</html>