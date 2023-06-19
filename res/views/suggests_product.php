<?php
namespace page\products\suggests;
include('./product_card.php');
use element\products\card;
class suggests_product
{
    private $cardObjComplete;
    public function __construct($pagesize, $objectInfo, $titlePage = null, $callToAction = null)
    {
        $Card = $this->processCard();

        echo "
        <section class='section-daily-contact-lens'>
        <h1>LENTES DE CONTATO DIÁRIO</h1>
        
        <div class='btn-ver-tudo'>
            <button>VER MAIS</button>
        </div>
    </section>
    ";
    }

}