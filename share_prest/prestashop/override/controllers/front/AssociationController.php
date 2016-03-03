<?php

class AssociationController extends FrontController
{
  protected $idAssociation;

  public $association = array();

  public $php_self = 'association.php';
  public $page_name = 'association';
  public $ssl = true;

  public function setMedia()
  {
		  parent::setMedia();
      $this->addJS(_THEME_JS_DIR_.'header.js');
  }

  public function init(){
    parent::init();
    // Get page main parameters
    $this->idAssociation = (int)Tools::getValue('id', null);
  }

  public function initContent(){
        $this->association = Association::getAssociationById($this->idAssociation);
        $this->context->smarty->assign(array(
          'association' => $this->association[0]
        ));

        //pass data to template file
        $this->setTemplate(_PS_THEME_DIR_.'association.tpl');

        //call parent initcontent - this is for loading the site's default header, footer, left and right columns
        parent::initContent();
    }

}


