<section class="section section--header">
    <div class="header--wrapper">
        <div class="container px-0">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex justify-content-start align-items-center"">
                    <div class="header--brand">
                        <div class="brand-img">
                            <a href="<?= URL ?>" hk-ancla-from="inicio" alt="bienvenidos" target="_self" aria-label="bienvenidos a inicio">
                                <img src="<?=asset('brand/ekibites-negro@2x.png')?>" alt="Ekibites" class="img--fit" width="150" height="88">
                            </a>
                        </div>
                    </div>
                    <div class="header--navbar d-none d-lg-block">
                        <ul id="menu-main-primary" class="navbar menu--primary">
                            <li class="item item-hover">
                                <a href="<?=url('#como-empiezo');?>" hk-ancla-from="como-empiezo" alt="¿Cómo empiezo?" class="item-link"><span>¿Cómo empiezo?</span></a>
                            </li>
                            <li class="item item-hover">
                                <a href="<?=url('#descubre-el-placer');?>" hk-ancla-from="descubre-el-placer" alt="Descubre el placer" class="item-link"><span>Descubre el placer</span></a>
                            </li>
                            <li class="item item-hover">
                                <a href="<?=url('#preguntas-frecuentes');?>" hk-ancla-from="preguntas-frecuentes" alt="Preguntas frecuentes" class="item-link"><span>Preguntas frecuentes</span></a>
                            </li>
                            <li class="item item-hover">
                                <a href="<?=url('#realiza-tu-pedido');?>" hk-ancla-from="realiza-tu-pedido" alt="Realiza tu pedido" class="item-link"><span>Realiza tu pedido</span></a>
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