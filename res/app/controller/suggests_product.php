<?php
namespace controller\products\suggestsCards;
use \page\products\suggests\suggests_product as suggests_create;


class suggests_product
{
    private $width;

    private function lens_contact_module(){
        return 0;
    }
    private function colored_lenses_module(){
        return 0;
    }

    public function lens_contact_view($width){
        $cards_object = $this->lens_contact_module();
        //$title = 'LENTES DE CONTATO DIÁRIO';
        //$cta = null;
        $suggests_create = new suggests_create($width, $cards_object, $title, $cta);
        return $suggests_create;
    }
    
    public function colored_lenses($width){
        $cards_object = $this->colored_lenses_module();
        //$title = 'LENTES COLORIDAS';
        //$cta = null;
        $suggests_create = new suggests_create($width, $cards_object, $title, $cta);
        return $suggests_create;
    }
};