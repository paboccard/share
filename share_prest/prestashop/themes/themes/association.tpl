{include file="$tpl_dir./errors.tpl"}
{capture name=path}{l s='association'}{/capture}
{*{include file="$tpl_dir./breadcrumb.tpl"}*}

{if isset($association)}


<div id="content">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>{$association.name|escape:'html':'UTF-8'}</h2>
                </div>

                <p class="lead">{$association.introduction|escape:'html':'UTF-8'}</p>
            </div>
        </div>
        <div class="row portfolio-project">

            <section>

                <div class="col-sm-8">
                    <div class="project owl-carousel">
                        <div class="item">
                            <img src="img/asso/{$association.id_association|escape:'html':'UTF-8'}-asso-logo-small.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                    <!-- /.project owl-slider -->

                </div>

                <div class="col-sm-4">
                    <div class="project-more">
                    	<h4>Créé en </h4>
                        <p>{$association.anneeFondation|escape:'html':'UTF-8'}</p>
                        <h4>Fondateur</h4>
                        <p>{$association.fondateur|escape:'html':'UTF-8'}</p>
                        <h4>But</h4>
                        <p>{$association.but|escape:'html':'UTF-8'}</p>
                        <h4>Zone d'influence</h4>
                        <p>{$association.zoneInfluence|escape:'html':'UTF-8'}</p>                     
                        <h4>Président</h4>
                        <p>{$association.president|escape:'html':'UTF-8'}</p>
                        <h4>Lien site web</h4>
                        <p><a href={$association.lienWeb|escape:'html':'UTF-8'}>{$association.lienWeb|escape:'html':'UTF-8'}</a></p>
                    </div>
                </div>

            </section>

            <section>

                <div class="col-sm-12">

                    <div class="heading">
                        <h3>Description</h3>
                    </div>

                    <p>{$association.descritpion|escape:'html':'UTF-8'}</p>
                </div>
            </section>

        </div>

        <section>
            <div class="row portfolio">

                <div class="col-md-12">
                    <div class="heading">
                        <h3>Related projects</h3>
                    </div>
                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="box-image">
                        <div class="image">
                            <img src="img/portfolio-1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="bg"></div>
                        <div class="name">
                            <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3> 
                        </div>
                        <div class="text">
                            <p class="buttons">
                                <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                <a href="#" class="btn btn-template-transparent-primary">Website</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image -->

                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="box-image">
                        <div class="image">
                            <img src="img/portfolio-2.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="bg"></div>
                        <div class="name">
                            <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3> 
                        </div>
                        <div class="text">
                            <p class="buttons">
                                <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                <a href="#" class="btn btn-template-transparent-primary">Website</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image -->

                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="box-image">
                        <div class="image">
                            <img src="img/portfolio-3.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="bg"></div>
                        <div class="name">
                            <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3> 
                        </div>
                        <div class="text">
                            <p class="buttons">
                                <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                <a href="#" class="btn btn-template-transparent-primary">Website</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image -->

                </div>

                <div class="col-sm-6 col-md-3">
                    <div class="box-image">
                        <div class="image">
                            <img src="img/portfolio-4.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="bg"></div>
                        <div class="name">
                            <h3><a href="portfolio-detail.html">Portfolio box-image</a></h3> 
                        </div>
                        <div class="text">
                            <p class="buttons">
                                <a href="portfolio-detail.html" class="btn btn-template-transparent-primary">View</a>
                                <a href="#" class="btn btn-template-transparent-primary">Website</a>
                            </p>
                        </div>
                    </div>
                    <!-- /.box-image -->
                </div>

            </div>
        </section>

    </div>
    <!-- /.container -->


</div>
<!-- /#content -->
{/if}