<?php
/*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2015 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class IndexControllerCore extends FrontController
{
    protected $idCategory = null;
    public $php_self = 'index';

    public function init(){
        parent::init();
        // Get page main parameters
        $this->idCategory = (int)Tools::getValue('id_category', null);
    }

    /**
     * Assign template vars related to page content
     * @see FrontController::initContent()
     */
    public function initContent()
    {
        parent::initContent();
        $this->addJS(_THEME_JS_DIR_.'index.js');
        $this->addJS(_THEME_JS_DIR_.'modernizr.custom.js');
        $this->addJS(_THEME_JS_DIR_.'toucheffects.js');
        $this->addJS(_THEME_JS_DIR_.'supplier_list.js');
        $this->addJS(_THEME_JS_DIR_.'jquery.bxslider.js');
        $this->addJS(_THEME_JS_DIR_.'header.js');
        $this->addJS(_THEME_JS_DIR_.'waypoints.min.js');
        $this->addJS(_THEME_JS_DIR_.'jquery.counterup.min.js');
        $this->addJS(_THEME_JS_DIR_.'front.js');
        
        $supplier = new SupplierControllerCore();
        if ($idCategory == null)            
            $supplier->initContent($this->idCategory);
        else{
            $supplier->initContent($this->idCategory);
            
        }

        /**
         * get categories level 2 for present them in header
        **/        
        $categories = Category::getChildrenWithNbSelectedSubCat(2,'',true,null,true);
        
        $this->context->smarty->assign(array(
            'categories' => $categories
        ));

        $this->assignKPI();
        /*$this->context->smarty->assign(array('HOOK_HOME' => Hook::exec('displayHome'),
            'HOOK_HOME_TAB' => Hook::exec('displayHomeTab'),
            'HOOK_HOME_TAB_CONTENT' => Hook::exec('displayHomeTabContent')
        ));*/
        $this->setTemplate(_PS_THEME_DIR_.'index.tpl');
    }

    public function assignKPI() {
        $b_showKPI = true;
        if($b_showKPI) {
            $nb_association = SupplierCore::getAssociationNumber();
            $nb_totalGain = SupplierCore::getTotalGain();
            $nb_monthGain = SupplierCore::getMonthGain();
            $nb_weekGain = SupplierCore::getWeekGain();
        }

        $this->context->smarty->assign(
            array(
                'showKPI' => $b_showKPI,
                'nb_association' => $nb_association,
                'nb_totalGain' => $nb_totalGain,
                'nb_monthGain' => $nb_monthGain,
                'nb_weekGain' => $nb_weekGain
                )
        );
    }
}
