<?php
namespace page\products\suggests;

require_once('../res/views/product_card.php');
use element\products\card\product_card as newCard;

class suggests_product
{
    private $cardObjComplete;

    private $testearray = '{
        "listCardsSuggestion": [
            {
                "id": 1,
                "img": "../res/img/olho-azul.jpg",
                "title": "Óculos de sol - Estilo Clássico",
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
                "productCtaBtn": "https://www.youtube.com/watch?v=dQw4w9WgXcQ"
            },
            {
                "id": 2,
                "img": "../res/img/oculos-rosa.jpg",
                "title": "Óculos de sol - Fashion Glamour",
                "price": 15.99,
                "installments": "2x de R$ 8.00",
                "lastPrice": 19.99,
                "assessmentStars": {
                    "first": 5,
                    "second": 8,
                    "third": 9,
                    "fourth": 7,
                    "fifth": 5
                },
                "productCtaBtn": "https://www.youtube.com/watch?v=ABhDiXbUaBE"
            },
            {
                "id": 3,
                "img": "../res/img/oculos-azul.jpg",
                "title": "Óculos de sol - Moderno Urbano",
                "price": 12.99,
                "installments": "3x de R$ 4.33",
                "lastPrice": 15.99,
                "assessmentStars": {
                    "first": 2,
                    "second": 4,
                    "third": 3,
                    "fourth": 2,
                    "fifth": 1
                },
                "productCtaBtn": "https://www.youtube.com/watch?v=DLzxrzFCyOs"
            },
            {
                "id": 4,
                "img": "../res/img/oculos-roxo.jpg",
                "title": "Óculos de sol - Estilo Vibrante",
                "price": 18.99,
                "installments": "2x de R$ 9.50",
                "lastPrice": 21.99,
                "assessmentStars": {
                    "first": 4,
                    "second": 7,
                    "third": 6,
                    "fourth": 5,
                    "fifth": 3
                },
                "productCtaBtn": "https://www.youtube.com/watch?v=3JWTaaS7LdU"
            },
            {
                "id": 5,
                "img": "../res/img/oculos-verde.jpg",
                "title": "Óculos de sol - Natureza Aventureira",
                "price": 16.99,
                "installments": "3x de R$ 5.66",
                "lastPrice": 19.99,
                "assessmentStars": {
                    "first": 3,
                    "second": 6,
                    "third": 4,
                    "fourth": 3,
                    "fifth": 2
                },
                "productCtaBtn": "https://www.youtube.com/watch?v=iik25wqIuFo"
            },
            {
                "id": 6,
                "img": "../res/img/oculos-amarelo.jpg",
                "title": "Óculos de sol - Estilo Divertido",
                "price": 14.99,
                "installments": "2x de R$ 7.50",
                "lastPrice": 17.99,
                "assessmentStars": {
                    "first": 4,
                    "second": 8,
                    "third": 7,
                    "fourth": 6,
                    "fifth": 4
                },
                "productCtaBtn": "https://www.youtube.com/watch?v=3k1XIDlu2Sg"
            },
            {
                "id": 7,
                "img": "../res/img/oculos-preto.jpg",
                "title": "Óculos de sol - Clássico Versátil",
                "price": 13.99,
                "installments": "3x de R$ 4.66",
                "lastPrice": 16.99,
                "assessmentStars": {
                    "first": 2,
                    "second": 5,
                    "third": 3,
                    "fourth": 2,
                    "fifth": 1
                },
                "productCtaBtn": "https://www.youtube.com/watch?v=zCTJmXrgsFg"
            },
            {
                "id": 8,
                "img": "../res/img/oculos-branco.jpg",
                "title": "Óculos de sol - Estilo Minimalista",
                "price": 17.99,
                "installments": "2x de R$ 9.00",
                "lastPrice": 20.99,
                "assessmentStars": {
                    "first": 5,
                    "second": 9,
                    "third": 8,
                    "fourth": 7,
                    "fifth": 5
                },
                "productCtaBtn": "https://www.youtube.com/watch?v=6hzrDeceEKc"
            }
        ]
    }';
    

    public function __construct($pagesize = null, $objectInfo = null, $titlePage = null, $callToAction = null)
    {
        $objectInfo = json_decode($this->testearray);
        $pagesize = 1440;
        echo "
        <section class='section-daily-contact-lens'>
            <h1>LENTES DE CONTATO DIÁRIO</h1>
                <div class='container-suggest-contact-lens'>
                    {$this->suggestsCards($objectInfo, $pagesize)}
                </div>
                <div class='btn-ver-tudo'>
                    <button>VER MAIS</button>
                </div>
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