<?php
namespace page\products\suggests;
require_once('./product_card.php');
use element\products\card\product_card as newCard;
class suggests_product
{
    private $cardObjComplete;
    public function __construct($pagesize, $objectInfo, $titlePage = null, $callToAction = null)
    {

        echo "
        <section class='section-daily-contact-lens'>
        <h1>LENTES DE CONTATO DIÁRIO</h1>
        
        <div class='btn-ver-tudo'>
            <button>VER MAIS</button>
        </div>
    </section>
    ";
    }

    private function suggestsCards($object){
        $infoArrayFromObjCards = $object->suggestCards;
        $objCardElements = [];
        foreach($infoArrayFromObjCards as $CardInfo => $index){
            $objCardElements[] = new newCard($CardInfo);
        }
    }

}