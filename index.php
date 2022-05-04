<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Document</title>
</head>
<body>
        
    <?php 
        include('inc/navbar.php')
    ?>

    <div class="container">
        <div class="container-content">
            <?php
                include('inc/branding.php');
                include('inc/ranks.php');
                include('inc/valuation.php');
                include('inc/form.php')
            ?>
        </div>
    </div>

</body>

<script src="assets/js/modal.js"></script>

</html>