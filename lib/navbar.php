<?php
    class navbar{
        function __construct(){
            echo "<link rel='stylesheet' href='../css/navbar.css'>";
            echo '<nav>
            <a class="link-logo" href="./index.php">
                <div class="parte-logo"></div>
            </a>
            <div class="parteOptions">
                <ul>
                    <li>
                        <a href="./produtos.php">LENTES</a>
                    </li> 
                    <li>
                        <a href="./produtos.php">ARMAÇÕES</a>
                    </li> 
                    <li>
                       <a href="#">CONTATOS</a>
                   </li> 
                   <li>
                        <div class="container-cta-nav">
                            <div class="cta-conta-user-nav" id="Conta-nav">
    
                            </div>
                            <div class="cta-carrinho-nav" id="Carrinho-nav">
    
                            </div>
                        </div>
                   </li> 
                </ul>
            </div>
        </nav>';
        }
    }
?>