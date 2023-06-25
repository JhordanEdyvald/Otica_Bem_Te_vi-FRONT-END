<?php
namespace page\products\suggests;

use element\products\card\product_card as newCard;

class suggests_product
{
    private $cardObjComplete;

    public function __construct($pagesize, $objectInfo, $titlePage = null, $callToAction = null)
    {
        $objectInfo = json_decode($objectInfo);
        $titlePage = isset($titlePage) ? "<h1>".$titlePage."</h1>" : '';
        $callToAction = isset($callToAction) ? "<div class='btn-ver-tudo'><button href='".$callToAction."'>VER MAIS</button></div>" : '<div style="height:20%;"></div>';
        echo "
        <section class='section-daily-contact-lens'>
                $titlePage
                <div class='container-suggest-contact-lens'>
                    {$this->suggestsCards($objectInfo, $pagesize)}
                </div>
                $callToAction
        </section>
    ";
    }

    private function suggestsCards($object, $pagesize)
    {
        $infoArrayFromObjCards = $object->listCardsSuggestion;
        $objCardElements = [];
        $amount = $this->calcPageSize($pagesize);

        for ($i = 0; $i < $amount; $i++) {
            if (isset($infoArrayFromObjCards[$i])) {
                $CardInfo = $infoArrayFromObjCards[$i];
                $classcall = new newCard($CardInfo);
                $objCardElements[] = $classcall->elementCard;
            }
        }

        return implode('', $objCardElements);
    }
    private function calcPageSize($pagesize)
    {
        $calc = floor($pagesize / (314 + 20));
        return $calc;
    }

}