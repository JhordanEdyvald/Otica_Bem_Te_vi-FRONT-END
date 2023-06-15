<?php
namespace page\products\suggests;

class suggests_product
{
    private $cardObjComplete;
    private $scoreStarsObj;
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

    private function processCard($cardInfo)
    {
        $id = $cardInfo->id;
        $title = $cardInfo->title;
        $price = $cardInfo->price;
        $descount = $cardInfo->descount;
        $installments = $cardInfo->installments;
        $lastPrice = $cardInfo->lastPrice;
        $this->scoreStarsObj = $cardInfo->assessmentStars;
        $productCtaBtn = $cardInfo->productCtaBtn;
        return "
        <div class='container-card-item' {$id}>
            <div class='img-item'></div>
            <span class='last-price'>{$lastPrice}</span>
            <div class='container-price-item'>
                <div class='price'>
                    <p>{$price}</p>
                </div>
                <div class='descount-percent'>-{$descount}%</div>
            </div>
            " . ($installments) ? "<span class='split-payment'>{$installments}</span>" : "" . "
            <div class='quality-assessment'>
                <div>
                    <ion-icon name='star-outline'></ion-icon>
                    <ion-icon name='star-outline'></ion-icon>
                    <ion-icon name='star-outline'></ion-icon>
                    <ion-icon name='star-outline'></ion-icon>
                </div>
                <span>1.153</span>
            </div>
            <div class='buy-btn'>
                <span>COMPRAR</span>
            </div>
        </div>
    ";
    }

    public function cardContainerCall($cards, $classComplete)
    {
        return "
            <div class='container-suggest-contact-lens{$classComplete}'>
            {$cards}
            </div>
        ";
    }

    private function PutStarsElement($object)
    {
        $elementsCompleteArray = [$object->first, $object->second, $object->third, $object->fourth, $object->fifth];
        $assessment = $this->calcScore($elementsCompleteArray[0], $elementsCompleteArray[1], $elementsCompleteArray[2], $elementsCompleteArray[3], $elementsCompleteArray[4]);
        $middleStar = false;
        if (fmod($assessment, 1) == 0.5) {
            $middleStar = true;
        }
        $elementsTextArray = [
            "<ion-icon name='star-outline'></ion-icon>",
            "<ion-icon name='star-outline'></ion-icon>",
            "<ion-icon name='star-outline'></ion-icon>",
            "<ion-icon name='star-outline'></ion-icon>",
            "<ion-icon name='star-outline'></ion-icon>"
        ];
        for($index = 0; $index < intval($assessment); $index++) {
            $elementsTextArray[$index] = 'estrela!';
            if ($index == intval($assessment) - 1 && $middleStar == true) {
                $elementsTextArray[$index + 1] = 'metade!';
            }
        }
        return $elementsTextArray;
    }

    private function calcScore($firstStar, $secondStar, $thirdStar, $fourthStar, $fiveStar)
    {
        $allScore = $firstStar + $secondStar + $thirdStar + $fourthStar + $fiveStar;
        $goodPercent = ($thirdStar + $fourthStar + $fiveStar) / $allScore * 100;
        $assessment = $this->roundedNumber(round($goodPercent / 20, 1));
        return $assessment;
    }

    private function roundedNumber($number)
    {
        $decimal_part = round(fmod($number, 1), 2);
        if ($decimal_part < 0.30) {
            $rounded = floor($number);
        } elseif ($decimal_part >= 0.30 && $decimal_part < 0.70) {
            $rounded = intval($number) + 0.50;
        } else {
            $rounded = ceil($number);
        }
        return $rounded;
    }

}