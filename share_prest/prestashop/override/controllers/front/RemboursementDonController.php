<?php

class RemboursementDonController extends FrontController
{

  public $association = array();

  //public $php_self = 'association.php';
  public $page_name = 'remboursementDon';
  public $ssl = true;

  public function setMedia()
  {
		  parent::setMedia();
      $this->addJS(_THEME_JS_DIR_.'header.js');
  }

  public function init(){
    parent::init();
  }

  public function initContent(){

        //pass data to template file
        $this->setTemplate(_PS_THEME_DIR_.'remboursementDon.tpl');

        //call parent initcontent - this is for loading the site's default header, footer, left and right columns
        parent::initContent();
    }

}


