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
    //INCLUDES
    include('../lib/navbar.php');
    include('../lib/footer.php');
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
    <!-- Bloco 2 INICIO -->

    <?php
    /*include('../res/views/suggests_product.php');
    use page\products\suggests\suggests_product;
    $suggest_product = new suggests_product();*/
    
    ?>

    <section class="container-view-produtos">
        <section class="section-daily-contact-lens">
            <h1>LENTES DE CONTATO DIÁRIO</h1>
            <div class="container-suggest-contact-lens">
                <div class="container-card-item">
                    <div class="img-item"></div>
                    <div class="title-item">
                        <p>RAY-BAN - HEXAGONAL FLAT LENSES</p>
                    </div>
                    <span class="last-price">R$ 800,00</span>
                    <div class="container-price-item">
                        <div class="price">
                            <p>R$ 600,00</p>
                        </div>
                        <div class="descount-percent">-25%</div>
                    </div>
                    <span class="split-payment">12x 66,65 sem juros</span>
                    <div class="quality-assessment">
                        <div>
                            <i class="fa-solid fa-star" style="color: #000;"></i>
                            <i class="fa-solid fa-star" style="color: #000;"></i>
                            <i class="fa-solid fa-star-half-stroke" style="color: #000;"></i>
                            <i class="fa-regular fa-star" style="color: #000;"></i>
                            <i class="fa-regular fa-star" style="color: #000;"></i>
                        </div>
                        <span>1.153</span>
                    </div>
                    <div class="buy-btn">
                        <span>COMPRAR</span>
                    </div>
                </div>

                <?php
                        include('../res/views/product_card.php');
                        use element\products\card\product_card as danonaoGrosso;
                    
                        $cardInfo = json_decode('{
                            "id": 1,
                            "img": "../res/img/olho-azul.jpg",
                            "title": "Óculos de sol - rayban preto",
                            "price": 19.99,
                            "installments": "3x de R$ 6.66",
                            "lastPrice": 24.99,
                            "assessmentStars": {
                              "first": 1,
                              "second": 12,
                              "third": 3,
                              "fourth": 1,
                              "fifth": 1
                            },
                            "productCtaBtn": "https://www.example.com/comprar"
                          }');
                          
                          $card = new danonaoGrosso($cardInfo);
                          echo $card->elementCard;
                    
                    ?>
            </div>
            <div class="btn-ver-tudo">
                <button>VER MAIS</button>
            </div>
        </section>
    </section>

    <section class="container-view-produtos colours-lens">
        <section class="section-daily-colours-lens">
            <h1>LENTES DE CONTATO DIÁRIO</h1>
            <div class="container-suggest-contact-lens">
                <div class="container-card-item">
                    <div class="img-item"></div>
                    <span class="last-price">R$ 800,00</span>
                    <div class="container-price-item">
                        <div class="price">
                            <p>R$ 600,00</p>
                        </div>
                        <div class="descount-percent">-25%</div>
                    </div>
                    <span class="split-payment">12x 66,65 sem juros</span>
                    <div class="quality-assessment">
                        <div>
                            <i class="fa-regular fa-star" style="color: #000000;"></i>
                            <i class="fa-regular fa-star" style="color: #000000;"></i>
                            <i class="fa-regular fa-star" style="color: #000000;"></i>
                            <i class="fa-regular fa-star" style="color: #000000;"></i>
                            <i class="fa-regular fa-star" style="color: #000000;"></i>
                        </div>
                        <span>1.153</span>
                    </div>
                    <div class="buy-btn">
                        <span>COMPRAR</span>
                    </div>
                </div>
            </div>
            <div class="btn-ver-tudo">
                <button>VER MAIS</button>
            </div>
        </section>
    </section>


    <!-- Bloco 2 Final -->
    <!--FIM DO CODIGO HTML-->
    <?php
    //INICIO-FOOTER    
    $footer = new footer();
    //FINAL-FOOTER    
    ?>
    <!--DECLARAÇÃO DE SCRIPTS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"
        integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"
        integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ"
        crossorigin="anonymous"></script>
    <script src="../js/jquery-3.6.4.min.js"></script>
    <script src="../js/navbar.js"></script>
    <script src="https://kit.fontawesome.com/87b9fef10b.js" crossorigin="anonymous"></script>
    <!--
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    -->
    <!--NÃO PRECISA DECLARA O ARQUIVIO DO JAVASCRIPT INDEX. <script src="./js/index.js"></script>-->
    <!--FIM DECLARAÇÃO DE SCRIPTS-->
</body>

</html>