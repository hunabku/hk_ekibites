<section class="section section--header">
    <div class="header--wrapper">
        <div class="container px-0">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-start align-items-center"">
                    <div class="header--brand">
                        <div class="brand-img">
                            <a href="<?= URL ?>" hk-ancla-from="inicio" alt="bienvenidos" target="_self" aria-label="bienvenidos a inicio">
                                <img src="<?=asset('brand/ekibites-negro@2x.png')?>" class="img--fit">
                            </a>
                        </div>
                    </div>
                    <div class="header--navbar d-none d-lg-block">
                        <ul id="menu-main-primary" class="navbar menu--primary">
                            <li class="item item-hover">
                                <a href="<?=url('#como-empiezo');?>" hk-ancla-from="como-empiezo" alt="nosotros" class="item-link"><span>¿Cómo empiezo?</span></a>
                            </li>
                            <li class="item item-hover">
                                <a href="<?=url('#lista-de-precios');?>" hk-ancla-from="lista-de-precios" alt="contacto" class="item-link"><span>Lista de precios</span></a>
                            </li>
                            <li class="item item-hover">
                                <a href="<?=url('#beneficios');?>" hk-ancla-from="beneficios" alt="contacto" class="item-link"><span>beneficios</span></a>
                            </li>
                            <li class="item item-hover">
                                <a href="<?=url('#realiza-tu-pedido');?>" hk-ancla-from="realiza-tu-pedido" alt="contacto" class="item-link"><span>Realiza tu pedido</span></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="header--social">
                        <?php include(VIEWS.'partials/social-media.php'); ?>
                    </div>

            </div>
        </div>
    </div>
</section>