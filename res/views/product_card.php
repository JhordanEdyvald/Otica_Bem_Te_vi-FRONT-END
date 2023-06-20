<?php
namespace element\products\card;

class product_card {
    public $elementCard;
    public function __construct($cardInfo)
    {
        $id = $cardInfo->id;
        $imgCard = $cardInfo->img;
        $title = $cardInfo->title;
        $price = $cardInfo->price;
        $installments = $cardInfo->installments;
        $lastPrice = $cardInfo->lastPrice;
        $assessmentStars = $cardInfo->assessmentStars;
        $productCtaBtn = $cardInfo->productCtaBtn;
        $descount = $this->calcDiscountPercent($price, $lastPrice);
        $allAssessment = $this->allAssessmentCalc($assessmentStars);
        $this->elementCard = "
        <div class='container-card-item' id='{$id}'>
            <div class='img-item' style='background-image:url({$imgCard});'></div>
            <div class='title-item'>
                <p>{$title}</p>
            </div>
            <span class='last-price'>{$lastPrice}</span>
            <div class='container-price-item'>
                <div class='price'>
                    <p>{$price}</p>
                </div>
                <div class='descount-percent'>-{$descount}%</div>
            </div>
            " . (isset($installments) ? "<span class='split-payment'>{$installments}</span>" : "") . "
            <div class='quality-assessment'>
                <div>
                    " . $this->PutStarsElement($assessmentStars) . "
                </div>
                <span>{$allAssessment}</span>
            </div>
            <div class='buy-btn' href='{$productCtaBtn}'>
                <span>COMPRAR</span>
            </div>
        </div>";
    }

    private function allAssessmentCalc($object)
    {
        $add = 0;
        foreach ($object as $value) {
            if (is_numeric($value)) {
                $add += $value;
            }
        }
        return $add;
    }
    
    private function calcDiscountPercent($lastValue, $newValue){
        $descount = ($lastValue - $newValue) / 100;
        $parts = explode('.',$descount);
        $decimal = isset($parts[1]) ? $parts[1] : '';
        return $decimal;
    }
    private function PutStarsElement($object)
    {
        $elementsCompleteArray = [$object->first, $object->second, $object->third, $object->fourth, $object->fifth];
        $assessment = $this->calcScore($elementsCompleteArray[0], $elementsCompleteArray[1], $elementsCompleteArray[2], $elementsCompleteArray[3], $elementsCompleteArray[4]);
        $middleStar = false;
        $starColour = '#121079';
        if (fmod($assessment, 1) == 0.5) {
            $middleStar = true;
        }
        $elementsTextArray = [
            '<i class="fa-regular fa-star" style="color: ' . $starColour . ';"></i>',
            '<i class="fa-regular fa-star" style="color: ' . $starColour . ';"></i>',
            '<i class="fa-regular fa-star" style="color: ' . $starColour . ';"></i>',
            '<i class="fa-regular fa-star" style="color: ' . $starColour . ';"></i>',
            '<i class="fa-regular fa-star" style="color: ' . $starColour . ';"></i>'
        ];
        for ($index = 0; $index < intval($assessment); $index++) {
            //COMPLETE STAR
            $elementsTextArray[$index] = '<i class="fa-solid fa-star" style="color: ' . $starColour . ';"></i>';
            if ($index == intval($assessment) - 1 && $middleStar == true) {
                //HALF STAR
                $elementsTextArray[$index + 1] = '<i class="fa-solid fa-star-half-stroke" style="color: ' . $starColour . ';"></i>';
            }
        }
        $elementsText = implode('', $elementsTextArray);
        return $elementsText;
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