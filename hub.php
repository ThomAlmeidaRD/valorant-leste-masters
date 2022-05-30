<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/main.css">
    <title>Document</title>
    <?
    include('inc/geral.php')
    ?>
</head>

<body>
    <?php
    include('inc/navbar.php')
    ?>


    <div class="container">
        <div class="container-content">
            <?
            include('inc/hub-banner.php');
            include('inc/table.php')
            ?>
        </div>
    </div>

</body>

<?
    include('inc/footer.php')
?>
</html>