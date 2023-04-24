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
        include('./lib/header.php');
        include('./lib/destaque-inicio.php');
        include('./lib/footer.php');
        //FIM INCLUDES
        $menu = new navbar();
        $header = new header();
    ?>
    <!--INICIO DO CODIGO HTML-->
    <!-- BLOCO 1 TEXTO -->
    <div class="container-principal">
        <div class="container-informacoes1">
            <div class="container-texto">
                <h2>What is Lorem Ipsum?</h2>
                <div class="texto">
                    What is Lorem Ipsum?
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </div>
        </div>
        <div class="img-girl1"></div>
        </div>
    <!-- Bloco 1 Final -->
    <!-- Bloco 2 Final -->
    <div class="container-informacoes2">
        <div class="img-girl2">
            </div>
            <div class="container-texto1">
                <div class="texto">
                    What is Lorem Ipsum? Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer the 1960s with the release
                </div>
                <a href="#" class="armacao-botao">
                    ARMAÇÕES
                </a>
            </div>
        </div>
    </div>
    <!-- Bloco 2 Final -->
    
    
    <!--DECLARAÇÃO DE SCRIPTS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/navbar.js"></script>
    <script src="./js/index.js"></script>
    <!--FIM DECLARAÇÃO DE SCRIPTS-->
</body>
</html>