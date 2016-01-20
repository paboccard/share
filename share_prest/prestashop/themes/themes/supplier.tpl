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
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordionOne" href="#collapse1a">
                                            Electronique
                                            <i class="fa fa-chevron-down pull-right"></i>
                                        </a>

                                    </h4>
                                </div>
                                <div id="collapse1a" class="panel-collapse collapse">
                                    <ul>
                                        <li><a class="li_hover" href="listProduitParMarque.php">Appareil Photo</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">

                                        <a data-toggle="collapse" data-parent="#accordionOne" href="#collapse1b">
                                            Cuisine
                                            <i class="fa fa-chevron-down pull-right"></i>
                                        </a>

                                    </h4>
                                </div>
                                <div id="collapse1b" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                        <br>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordionOne" href="#collapse1c">
                                            Livre
                                            <i class="fa fa-chevron-down pull-right"></i>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse1c" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
                                        in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </div>
                                </div>
                            </div>
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
                    <!--<div class="col-md-8">
                        <div class="text-center">
                            <div class="icon icon-lg"><i class="fa fa-file-code-o"></i>
                            </div>
                            <h3>Pourcentage moyen : 20%</h3>
                            <h3>272€ récoltés</h3></br></br>
                        </div>
                    </div>-->
                    <!--<p class="text-center">
                        <a href="#" class="btn btn-template-transparent-black btn-lg">Voir les produits</a>
                    </p>-->

                </div>

            </div>
        </div>
    </section>


    {if $products}
        <div class="content_sortPagiBar">
            <div class="sortPagiBar clearfix">
                {include file="./product-sort.tpl"}
                {include file="./nbr-product-page.tpl"}
            </div>
            <div class="top-pagination-content clearfix">
                {include file="./product-compare.tpl"}
                {include file="$tpl_dir./pagination.tpl" no_follow=1}
            </div>
        </div>

        {include file="./product-list.tpl" products=$products}

        <div class="content_sortPagiBar">
            <div class="bottom-pagination-content clearfix">
                {include file="./product-compare.tpl"}
                {include file="./pagination.tpl" paginationId='bottom' no_follow=1}
            </div>
        </div>
    {/if}
{/if}
