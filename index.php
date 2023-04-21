<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/index.css">
    <title>ÓTICAS | BEM TE VI</title>
</head>
<body>
    <?php
        //INCLUDES
        include('./lib/navbar.php');
        include('./lib/nav-header.php');
        include('./lib/destaque-inicio.php');
        include('./lib/footer.php');
        //FIM INCLUDES
        $menu = new navbar();
    ?>

    <!--INICIO DO CODIGO HTML-->


    <!--DECLARAÇÃO DE SCRIPTS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/navbar.js"></script>
    <script src="./js/index.js"></script>
    <!--FIM DECLARAÇÃO DE SCRIPTS-->
</body>
</html>