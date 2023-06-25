<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../res/css/produtos.css">
    <title>ÓTICAS | BEM TE VI- PRODUTOS</title>
</head>

<body>
    <?php
    include('../lib/navbar.php');
    include('../lib/footer.php');
    include('../res/app/controller/suggests_product.php');
    include('../res/app/views/suggests_product.php');
    include('../res/app/views/product_card.php');
    use controller\products\suggestsCards\suggests_product as ready_suggests;
    ?>

    <?php
    //INCLUDES
    //FIM INCLUDES
    $menu = new navbar();
    ?>
    <!--INICIO DO CODIGO HTML-->

    <section class="banner-lens-page">
        <h2>LENTES DE CONTATOS!!!</h2>
        <ul>
            <li class="banner-item1"></li>
            <li class="banner-item2"></li>
            <li class="banner-item3"></li>
        </ul>
        <div class="forma-de-pagamento">
            <div></div>
            <h4>ACEITAMOS PAGAMENTO VIA PIX<div id="pix-icon">
            </h4>
        </div>
    </section>

    <section class="container-view-produtos">
        <?php
        $screen_width = $_GET['size_screen'];

        $chamada = new ready_suggests();
        if (isset($screen_width)) {
            $chamada->lens_contact_view($screen_width);
        } else {
            echo '<script> window.location.href = window.location.href + "?size_screen=" + screen.width; </script>';
        }
        ?>
    </section>

    <section class="container-view-produtos colours-lens">
        <?php
        $screen_width = $_GET['size_screen'];
        $chamada = new ready_suggests();
        if (isset($screen_width)) {
            $chamada->colored_lenses($screen_width);
        } else {
            echo '<script> window.location.href = window.location.href + "?size_screen=" + screen.width; </script>';
        }
        ?>
    </section>

    <?php
    $footer = new footer();
    ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
    <script src="../js/jquery-3.6.4.min.js"></script>
    <script src="../js/navbar.js"></script>
    <script src="https://kit.fontawesome.com/87b9fef10b.js" crossorigin="anonymous"></script>
</body>

</html>