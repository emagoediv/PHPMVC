<?php

namespace App\Controller\Pages;

use \App\Utils\View;

class Home extends Page{
    
    public static function getHome(){
        $content = View::render('pages/home',[
            'name' => 'Emagoediv',
            'description' => 'Sou quase junior em programação'
        ]);

        return parent::getPage('PHP MVC', $content);
        
    }
}