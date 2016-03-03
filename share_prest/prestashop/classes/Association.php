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

class AssociationCore extends ObjectModel
{
    /** @var int supplier ID */
    public $id_association;

    /** @var string Name */
    public $name;

    /** @var string A short description for the discount */
    public $description;

    /** @var string Object creation date */
    public $date_add;

    /** @var string Object last modification date */
    public $date_upd;

    /** @var bool active */
    public $active;
    
    public $association_discount;

    public $association_gain;

    /**
     * @see ObjectModel::$definition
     */
    /*public static $definition = array(
        'table' => 'my_associations',
        'primary' => 'id_association',
        'multilang' => true,
        'fields' => array(
            'name' =>                array('type' => self::TYPE_STRING, 'validate' => 'isCatalogName', 'required' => true, 'size' => 64),
            'active' =>            array('type' => self::TYPE_BOOL),
            'date_add' =>            array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' =>            array('type' => self::TYPE_DATE, 'validate' => 'isDate'),

            /* Lang fields *
            'description' =>        array('type' => self::TYPE_HTML, 'lang' => true, 'validate' => 'isCleanHtml'),
        ),
    );

    protected $webserviceParameters = array(
        'fields' => array(
            'link_rewrite' => array('sqlId' => 'link_rewrite'),
        ),
    );*/


    /*public function __construct($id = null, $id_lang = null)
    {
        parent::__construct($id, $id_lang);
        
    }*/

    public static function getAssociations(){
        $query = new DbQuery();
        $query->select('name');
        $query->from('my_associations');
        $res = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($query);

        /*$sql = 'SELECT name 
                FROM my_associations';
        
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);*/
        return $res;
    }

    public static function getAssociationById($id){
        $sql = 'SELECT * 
                FROM my_associations
                WHERE id_association = '.(int)$id;
        
        $res = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        return $res;
    }

    /*public static function getAssociationByCartAndIdProduct($id_cart, $id_product, $id_product_attribute, $id_address_delivery){
        return 1;
    }*/
}



