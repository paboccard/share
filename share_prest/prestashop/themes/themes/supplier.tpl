{*
* 2007-2015 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
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
*  @license    http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{include file="$tpl_dir./errors.tpl"}
    {if !isset($errors) OR !sizeof($errors)} 
        {if !$isProductList}
        <section class="bar background-image-fixed-2 no-mb" style="background: url('{$img_sup_dir}{$supplier->id}.jpg') center top no-repeat;">
            {if !empty($supplier->description)}
                <div class="description_box rte">
                    <p>{$supplier->description}</p>
                </div>
            {/if}
            <div class="dark-mask"></div>
            <div class="container">
                <div class="row">

                    <div class="item catEntreprise">
                        <div class="col-md-3">
                            <div class="panel-group accordion" id="accordionOne">
                                {include file="./category-arbre.tpl" no_follow=$categories}
                            </div>

                            <!--<div class="col-sm-5 right">
                                <ul class="list-style-none list_categorie">
                                    <li><a class="li_hover" href="listProduitParMarque.php">Appareil Photo</a></li>
                                    <li><a class="li_hover" href="#">Ordinateur</a></li>
                                    <li><a class="li_hover" href="#">Livre</a></li>
                                    <li><a class="li_hover" href="#">Télévision</a></li>
                                </ul>
                            </div>-->
                        </div>
                        <div class="">
                            <div class="same-height-row">
                                <div class="col-md-offset-4 col-md-4">
                                    <div class="box-simple box-blue same-height">
                                        <div class="icon">
                                            <i class="fa fa-info-circle"></i>
                                        </div>
                                        <h1 class="page-heading product-listing">
                                            {$supplier->name|escape:'html':'UTF-8'}
                                        </h1>
                                        <h3>Pourcentage moyen : {$supplier->association_discount|string_format:"%.2f"}%</h3>
                                        <h3>{$supplier->association_gain|string_format:"%.2f"} € récoltés</h3>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </section>
        {else}
        <div class="col-sm-3">
            <div class="panel-group accordion" id="accordionOne">
                {include file="./category-arbre.tpl" no_follow=$categories}
            </div>
            {$HOOK_LEFT_COLUMN}
        </div>
        <div class="col-sm-9">
            {if $products}

                <div class="content_sortPagiBar">
                   <div class="top-pagination-content clearfix">
                        <div class="breadCrumbContainer">
                            <div class="nbrArticle">
                                <em>{$nb_products} articles</em>
                            </div>
                            <div class="breadCrumb">
                                <div>
                                        <span>
                                                <strong>{$supplier->name} | </strong>
                                        </span>

                                        <span style="color:#333">{$category->name}</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                {include file="./product-list.tpl" products=$products}

                <div class="content_sortPagiBar">
                    <div class="bottom-pagination-content clearfix">
                    </div>
                </div>
            {else}
            NO PRODUCT
            {/if}
        </div>
        {/if}
    {/if}