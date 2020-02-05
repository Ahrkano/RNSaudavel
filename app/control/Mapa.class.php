<?php
/**
 * CommonPage
 *
 * @version    1.0
 * @package    control
 * @author     Alexandre Pontes
 * @copyright  Copyright (c) 2020 Suinin
 * @license    http://www.adianti.com.br/framework-license
 */
class Mapa extends TPage
{
    public function __construct()
    {
        parent::__construct();
        TPage::include_js('app/lib/include/map.js'); 
        TPage::include_css('app/lib/include/map.css');

        $html1 = new THtmlRenderer('app/resources/map.html');
        
        // replace the main section variables
        $html1->enableSection('main', array());
               
        $panel1 = new TPanelGroup('Adesão aos eixos');
        $panel1->add($html1);
        
           
        // add the template to the page
        parent::add( TVBox::pack($panel1) );
    }
}