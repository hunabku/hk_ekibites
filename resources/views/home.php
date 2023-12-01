@metatag
<title><?=$__sp['title']??'';?></title>
<meta name="title" content="<?=$__sp['meta']['title']??'';?>" />
<meta name="description" content="<?=$__sp['meta']['description']??'';?>" />
@endmetatag

@body_pageID("home");

@section
<!-- Hero -->
<section class="section">
	<div class="section--inner hero--section">
		<div class="container section--container">
			<div class="row d-flex justify-content-center align-items-center">
				<div class="col-11 col-md-8 col-xl-6 px-0 py-5 px-md-5 py-md-5">
					<div class="section--content text-center text-xl-start pb-3 pb-xl-0">
                        <div class="section--heading">
                            <h1>¡Distribuye y gana dinero con la marca de snacks saludables #1 de México!</h1>
                        </div>
						<p>¿Tienes una tienda / lugar de ejercicio, o quieres ofrecer snacks saludables a tus
							familiares, pacientes, amigos o colegas de la oficina? ¡Vende nuestros productos y genera
							una ganancia!</p>
						<a class="btn btn-primary" href="<?=url('#realiza-tu-pedido')?>">¡Empieza ya!</a>
                    </div>
				</div>
				<div class="col-12 col-xl-6">
					<div class="section--image">
						<img src="<?=asset('home/banner-principal@800x1067.jpg')?>" class="img--fit">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- HowWorks -->
<a id="como-empiezo" hk-ancla-to="como-empiezo" class="anchor-screen"></a>
<section id="" class="section">
    <div class="section--inner howWorks--section">
        <div class="container px-xl-0">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-xl-12">
                    <div class="section--content">
                        <div class="section--heading text-center">
                            <h2 class="h1 text-primary">¿Cómo empiezo?</h2>
                        </div>
                        <div class="howWorks--content">
                            <div class="d-none d-xl-block">
                                <div class="row g-0 align-items-start howWorks--row">
                                    <?php
                                        $collect = [
                                            ['img'=>'home/proceso-crear-cta@800x.png', 'number' => 1, 'heading'=> 'Crea tu cuenta', 'paragraph'=>'Registra tu cuenta de distribuidor en menos de 2 minutos.'],
                                            ['img'=>'home/proceso-crear-cta@800x.png', 'number' => 2, 'heading'=> 'Crea tu cuenta', 'paragraph'=>'Registra tu cuenta de distribuidor en menos de 2 minutos.'],
                                            ['img'=>'home/proceso-crear-cta@800x.png', 'number' => 3, 'heading'=> 'Crea tu cuenta', 'paragraph'=>'Registra tu cuenta de distribuidor en menos de 2 minutos.'],
                                            ['img'=>'home/proceso-crear-cta@800x.png', 'number' => 4, 'heading'=> 'Crea tu cuenta', 'paragraph'=>'Registra tu cuenta de distribuidor en menos de 2 minutos.'],
                                        ];
                                    ?>
                                    <?php foreach ($collect as $item){ ?>
                                    <div class="col d-flex justify-content-center">
                                        <div class="howWorks--box text-center">
                                            <div class="howWorks--box__img">
                                                <img src="<?=asset($item['img'])?>" alt="" class="img--fit fit--contain"/>
                                            </div>
                                            <div class="howWorks--box__number">
                                                <span><?=$item['number']?></span>
                                            </div>
                                            <div class="howWorks--box__heading">
                                                <span><?=$item['heading']?></span>
                                            </div>
                                            <div class="howWorks--box__content"><?=$item['paragraph']?></div>
                                        </div>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="d-block d-xl-none">
                                <div class="owl-carousel owl-theme owl-howWorks">
                                    <?php foreach ($collect as $item){ ?>
                                        <div class="owl-wp text-center">
                                            <div class="howWorks--box text-center">
                                                <div class="howWorks--box__img">
                                                    <img src="<?=asset($item['img'])?>" alt="" class="img--fit fit--contain"/>
                                                </div>
                                                <div class="howWorks--box__number">
                                                    <span><?=$item['number']?></span>
                                                </div>
                                                <div class="howWorks--box__heading">
                                                    <span><?=$item['heading']?></span>
                                                </div>
                                                <div class="howWorks--box__content"><?=$item['paragraph']?></div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="text-center py-0 py-lg-5">
                                <a href="<?=url('#realiza-tu-pedido')?>" class="btn btn-primary">¡Empieza ya!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- PriceList -->
<a id="lista-de-precios" hk-ancla-to="lista-de-precios" class="anchor-screen"></a>
<section id="" class="section">
    <div class="section--inner priceList--section">
        <div class="container px-xl-0">
            <div class="row d-flex justify-content-center mb-4">
                <div class="col-12 col-xl-12">
                    <div class="section--content">
                        <div class="section--heading text-center">
                            <h2 class="h1">Ver lista de precios <br class="d-none d-lg-block">y catálogo:</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-12 col-xl-12">
                    <div class="section--content d-flex flex-column align-items-center">
                        <div class="priceList--icon--with__text d-flex justify-content-between">
                            <div class="flex-column align-items-center p-3">
                                <a href="javascript:void(0);" class="align-items-center flex-column priceList--link">
                                    <div class="d-flex justify-content-center pb-4">
                                        <img src="<?= asset('home/catalogo-@80x.png') ?>" alt="" class="img-fluid"/>
                                    </div>
                                    <span>
                                        Catálogo
                                    </span>
                                </a>
                            </div>
                            <div class="flex-column align-items-center p-3">
                                <a href="javascript:void(0);" class="align-items-center flex-column priceList--link">
                                    <div class="d-flex justify-content-center pb-4">
                                        <img src="<?= asset('home/catalogo-@80x.png') ?>" alt="" class="img-fluid"/>
                                    </div>
                                    <span>
                                        Lista de precios
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits -->
<a id="beneficios" hk-ancla-to="beneficios" class="anchor-screen"></a>
<section id="" class="section">
    <div class="section--inner benefits--section">
        <div class="container benefits--container">
            <div class="benefits--container--inner">
                <div class="row d-flex justify-content-center align-items-start"  data-sticky-container>
                    <div class="col-12 col-xl-5">
                        <div class="section--content sticky-js" data-sticky-for="1199" data-margin-top="100">
                            <div class="section--heading pe-0 pe-lg-3">
                                <h2 class="section--heading__title">¡Recibe beneficios increíbles con Come Verde!</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-xl-7">
                        <div class="benefits--content">
                            <div class="benefits--wrapper">
                                <div class="benefits--box">
                                    <p class="benefits--heading">¿Qué le ofrecerás a tus clientes?</p>
                                    <div class="box__wrapper text-primary">
                                        <?php
                                        $collect = [
                                            ['img'=>'home/bebeficios-clientes@500x.png', 'heading'=> 'Productos 100% naturales y saludables', 'paragraph'=>''],
                                            ['img'=>'home/bebeficios-clientes@500x.png', 'heading'=> 'La mejor variedad', 'paragraph'=>'Más de 60 snacks'],
                                            ['img'=>'home/bebeficios-clientes@500x.png', 'heading'=> 'Precios inigualables', 'paragraph'=>''],
                                            ['img'=>'home/bebeficios-clientes@500x.png', 'heading'=> 'Amigables con el medio ambiente', 'paragraph'=>''],
                                            ['img'=>'home/bebeficios-clientes@500x.png', 'heading'=> 'Sabores deliciosos', 'paragraph'=>'Sabor y salud, todo en uno.'],
                                        ];
                                        ?>
                                        <?php foreach ($collect as $item){ ?>
                                        <div class="box__item">
                                            <img src="//www.comeverde.mx/cdn/shop/files/Sin_titulo-2-07_500x.png?v=1696725400" alt="" class="img-fluid">
                                            <div class="box__item__content">
                                                <p class="box__heading"><?=$item['heading']?></p>
                                                <?php if($item['paragraph'] != ''){ ?>
                                                <p class="box__paragraph"><?=$item['paragraph']?></p>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="benefits--box">
                                    <p class="benefits--heading">¿Qué le ofrecerás a tus clientes?</p>
                                    <div class="box__fullwidth text-danger">
                                        <div class="box__item">
                                            <img src="<?=asset('home/beneficios-empresa-box@500x.png')?>" alt="" class="img-fluid">
                                            <div class="box__item__content">
                                                <p class="box__heading">Garantía de 30 días</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box__wrapper">
                                        <?php
                                        $collect = [
                                            ['img'=>'home/beneficios-empresa@500x.png', 'heading'=> '¡Descuentos fijos siempre!', 'paragraph'=>'Tienes ganancias brutales desde el primer pedido.'],
                                            ['img'=>'home/beneficios-empresa@500x.png', 'heading'=> 'Entregas express', 'paragraph'=>'Tus pedidos llegarán en máximo 7 días. ¡Garantizado!'],
                                            ['img'=>'home/beneficios-empresa@500x.png', 'heading'=> 'Sin mínimos de compra', 'paragraph'=>'Aunque gozarás de envíos gratis a partir de $2,199MXN.'],
                                            ['img'=>'home/beneficios-empresa@500x.png', 'heading'=> 'Soporte personalizado', 'paragraph'=>'Te acompañamos y asesoramos desde el primer momento.'],
                                        ];
                                        ?>
                                        <?php foreach ($collect as $item){ ?>
                                            <div class="box__item">
                                                <img src="<?=asset($item['img'])?>" alt="" class="img-fluid">
                                                <div class="box__item__content">
                                                    <p class="box__heading text-danger"><?=$item['heading']?></p>
                                                    <?php if($item['paragraph'] != ''){ ?>
                                                        <p class="box__paragraph"><?=$item['paragraph']?></p>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Banner -->
<section class="section">
    <div class="section--inner banner--section">
        <div class="container section--container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-12 col-xl-6 order-1 order-xl-0">
                    <div class="section--image">
                        <img src="<?=asset('home/banner-seccion@1080x.png')?>" class="img--fit">
                    </div>
                </div>
                <div class="col-11 col-md-8 col-xl-6  order-0 order-xl-1 px-0 pb-5 pt-0 px-md-5 py-md-5">
                    <div class="section--content text-center text-xl-start pb-3 pb-xl-0">
                        <h1>¿Quieres ser distribuidor?</h1>
                        <p>Únete a la familia Come Verde y se distribuidor de los mejores snacks de México.</p>
                        <a href="<?=url('#realiza-tu-pedido')?>" class="btn btn-primary">¡Empieza ya!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- NumberList -->
<section class="section ">
    <div class="section--inner numberList--section">
        <div class="container px-0">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-12">
                    <div class="section--content">
                        <div class="section--heading text-center">
                            <h2 class="h1">¡Los números hablan por si solos!</h2>
                        </div>
                        <div class="row numberList--collect d-flex justify-content-between">
                            <?php
                            $collect = [
                                ['heading'=> '+1,500', 'paragraph'=>'distribuidores exitosos en México'],
                                ['heading'=> '$15,000', 'paragraph'=>'distribuidores exitosos en México'],
                                ['heading'=> '$2,199', 'paragraph'=>'de inversión inicial'],
                                ['heading'=> '14 días', 'paragraph'=>'para recuperar tu inversión.'],
                                ['heading'=> '2 horas', 'paragraph'=>'invertidas díarias.'],
                            ];
                            ?>
                            <?php foreach ($collect as $item){ ?>
                            <div class="numberList--item">
                                <p class="numberList--item__heading"><?=$item['heading']?></p>
                                <p class="numberList--item__content"><?=$item['paragraph']?></p>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="numberList--section__foot bg-white">
        <svg width="1351" height="75" viewBox="0 0 1351 75" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M657.864 4.16406C663.105 1.44629 668.914 0.0263672 674.807 0.0234375H674.785C674.983 0.0234375 675.181 0.0244141 675.379 0.0273438C679.597 -0.0644531 683.825 0.568359 687.878 1.92383C695.328 4.41504 701.806 9.21973 706.382 15.6514C707.489 17.1885 708.942 18.4385 710.621 19.2979C712.301 20.1572 714.159 20.6025 716.042 20.5957C717.945 20.5918 719.819 20.1328 721.511 19.2559C723.203 18.3799 724.665 17.1113 725.776 15.5547C729.22 10.7471 733.746 6.83301 738.982 4.13281C744.218 1.43359 750.015 0.0253906 755.896 0.0253906C761.777 0.0253906 767.574 1.43359 772.81 4.13281C778.046 6.83301 782.572 10.7471 786.016 15.5547C787.128 17.1113 788.59 18.3789 790.282 19.2559C791.973 20.1318 793.847 20.5908 795.749 20.5957C797.651 20.5918 799.523 20.1328 801.214 19.2559C802.905 18.3799 804.366 17.1113 805.476 15.5547C808.919 10.7402 813.447 6.81934 818.688 4.11426C823.928 1.41016 829.731 0 835.618 0C841.504 0 847.307 1.41016 852.547 4.11426C857.788 6.81934 862.316 10.7402 865.759 15.5547C866.87 17.1113 868.33 18.3789 870.021 19.2559C871.712 20.1318 873.585 20.5908 875.486 20.5957C877.388 20.5918 879.262 20.1328 880.954 19.2559C882.646 18.3799 884.108 17.1113 885.219 15.5547C888.663 10.7471 893.189 6.83301 898.425 4.13281C903.661 1.43359 909.458 0.0253906 915.339 0.0253906C921.22 0.0253906 927.017 1.43359 932.253 4.13281C937.49 6.83301 942.015 10.7471 945.459 15.5547C946.571 17.1113 948.033 18.3789 949.725 19.2559C951.417 20.1318 953.291 20.5908 955.193 20.5957C957.095 20.5908 958.969 20.1318 960.66 19.2559C962.352 18.3789 963.814 17.1113 964.926 15.5547C968.37 10.7471 972.896 6.83301 978.132 4.13281C983.368 1.43359 989.165 0.0253906 995.046 0.0253906C1000.93 0.0253906 1006.72 1.43359 1011.96 4.13281C1017.2 6.83301 1021.72 10.7471 1025.17 15.5547C1026.28 17.1113 1027.74 18.3799 1029.43 19.2559C1031.12 20.1328 1033 20.5918 1034.9 20.5957C1036.8 20.5908 1038.67 20.1318 1040.36 19.2559C1042.05 18.3789 1043.52 17.1113 1044.63 15.5547C1048.07 10.7471 1052.6 6.83301 1057.83 4.13281C1063.07 1.43359 1068.86 0.0253906 1074.75 0.0253906C1080.63 0.0253906 1086.42 1.43359 1091.66 4.13281C1096.9 6.83301 1101.42 10.7471 1104.87 15.5547C1105.98 17.1113 1107.44 18.3789 1109.13 19.2559C1110.82 20.1318 1112.7 20.5908 1114.6 20.5957C1116.5 20.5908 1118.37 20.1318 1120.07 19.2559C1121.76 18.3789 1123.22 17.1113 1124.33 15.5547C1127.78 10.7471 1132.3 6.83301 1137.54 4.13281C1142.77 1.43359 1148.57 0.0253906 1154.45 0.0253906C1160.33 0.0253906 1166.13 1.43359 1171.37 4.13281C1176.6 6.83301 1181.13 10.7471 1184.57 15.5547C1185.68 17.1113 1187.15 18.3799 1188.84 19.2559C1190.53 20.1328 1192.4 20.5918 1194.31 20.5957C1196.21 20.5908 1198.08 20.1318 1199.77 19.2559C1201.46 18.3789 1202.92 17.1113 1204.03 15.5547C1207.48 10.7471 1212 6.83301 1217.24 4.13281C1222.48 1.43359 1228.27 0.0253906 1234.16 0.0253906C1240.04 0.0253906 1245.83 1.43359 1251.07 4.13281C1256.31 6.83301 1260.84 10.7471 1264.28 15.5547C1265.39 17.1113 1266.85 18.3799 1268.54 19.2559C1270.23 20.1328 1272.1 20.5918 1274.01 20.5957C1275.89 20.6035 1277.75 20.1582 1279.43 19.2988C1281.11 18.4385 1282.56 17.1885 1283.67 15.6514C1287.1 10.8193 1291.62 6.88184 1296.86 4.16406C1302.11 1.44629 1307.91 0.0263672 1313.81 0.0234375H1313.79C1320.14 0.015625 1326.38 1.64844 1331.93 4.7666C1337.48 7.88574 1342.14 12.3848 1345.47 17.8359C1348.8 23.2871 1350.7 29.5088 1350.97 35.9062C1351.24 42.3047 1349.88 48.666 1347.02 54.3838C1344.16 60.1025 1339.89 64.9863 1334.63 68.5703C1329.37 72.1543 1323.28 74.3184 1316.96 74.8574C1310.63 75.3955 1304.27 74.29 1298.48 71.6465C1292.7 69.0029 1287.68 64.9082 1283.92 59.7549C1282.8 58.2266 1281.35 56.9834 1279.67 56.125C1277.99 55.2666 1276.14 54.8154 1274.26 54.8096H1273.69C1271.81 54.8145 1269.95 55.2637 1268.28 56.123C1266.6 56.9814 1265.14 58.2256 1264.03 59.7549C1260.58 64.4814 1256.07 68.3242 1250.88 70.9717C1245.68 73.6201 1239.94 75 1234.12 75C1228.3 75 1222.56 73.6201 1217.36 70.9717C1212.17 68.3242 1207.66 64.4814 1204.21 59.7549C1203.09 58.2256 1201.64 56.9814 1199.96 56.123C1198.28 55.2637 1196.43 54.8145 1194.55 54.8096H1193.98C1192.1 54.8154 1190.25 55.2666 1188.57 56.125C1186.89 56.9834 1185.44 58.2266 1184.32 59.7549C1180.87 64.4814 1176.37 68.3232 1171.17 70.9717C1165.98 73.6201 1160.24 75 1154.42 75C1148.59 75 1142.86 73.6201 1137.66 70.9717C1132.47 68.3232 1127.96 64.4814 1124.51 59.7549C1123.39 58.2266 1121.94 56.9834 1120.26 56.125C1118.58 55.2666 1116.73 54.8154 1114.85 54.8096H1114.28C1112.39 54.8154 1110.54 55.2666 1108.86 56.125C1107.19 56.9834 1105.73 58.2266 1104.62 59.7549C1101.16 64.4814 1096.66 68.3232 1091.46 70.9717C1086.27 73.6201 1080.53 75 1074.71 75C1068.89 75 1063.15 73.6201 1057.95 70.9717C1052.76 68.3232 1048.25 64.4814 1044.8 59.7549C1043.69 58.2256 1042.23 56.9814 1040.56 56.123C1038.88 55.2637 1037.02 54.8145 1035.14 54.8096H1034.58C1032.69 54.8154 1030.84 55.2666 1029.16 56.125C1027.49 56.9834 1026.03 58.2266 1024.92 59.7549C1021.46 64.4814 1016.96 68.3232 1011.76 70.9717C1006.57 73.6201 1000.83 75 995.009 75C989.188 75 983.449 73.6201 978.254 70.9717C973.059 68.3232 968.554 64.4814 965.103 59.7549C963.987 58.2266 962.533 56.9834 960.855 56.125C959.178 55.2666 957.324 54.8154 955.443 54.8096H954.869C952.988 54.8154 951.134 55.2666 949.457 56.125C947.779 56.9834 946.324 58.2266 945.209 59.7549C941.757 64.4814 937.252 68.3232 932.058 70.9717C926.863 73.6201 921.123 75 915.302 75C909.482 75 903.742 73.6201 898.547 70.9717C893.352 68.3232 888.847 64.4814 885.396 59.7549C884.281 58.2266 882.826 56.9834 881.148 56.125C879.471 55.2666 877.617 54.8154 875.736 54.8096H875.17C873.288 54.8145 871.434 55.2637 869.756 56.123C868.078 56.9814 866.624 58.2256 865.51 59.7549C862.057 64.4814 857.551 68.3242 852.356 70.9717C847.161 73.6201 841.421 75 835.599 75C829.778 75 824.038 73.6201 818.842 70.9717C813.647 68.3242 809.141 64.4814 805.689 59.7549C804.576 58.2266 803.122 56.9834 801.446 56.124C799.769 55.2656 797.916 54.8154 796.036 54.8096H795.463C793.581 54.8154 791.728 55.2666 790.05 56.125C788.373 56.9834 786.918 58.2266 785.803 59.7549C782.351 64.4814 777.846 68.3232 772.651 70.9717C767.456 73.6201 761.717 75 755.896 75C750.075 75 744.336 73.6201 739.141 70.9717C733.946 68.3232 729.441 64.4814 725.989 59.7549C724.874 58.2266 723.419 56.9834 721.742 56.125C720.064 55.2666 718.211 54.8154 716.329 54.8096H715.763C713.881 54.8145 712.027 55.2637 710.349 56.123C708.671 56.9814 707.217 58.2256 706.103 59.7549C701.445 66.126 694.908 70.8477 687.426 73.2432C683.462 74.5117 679.342 75.0938 675.235 74.9883C669.817 75.0479 664.44 73.9111 659.485 71.6465C653.701 69.0029 648.685 64.9082 644.916 59.7549C643.8 58.2266 642.346 56.9834 640.668 56.125C638.991 55.2666 637.137 54.8154 635.255 54.8096H634.689C632.808 54.8145 630.953 55.2637 629.276 56.123C627.598 56.9814 626.143 58.2256 625.029 59.7549C621.577 64.4814 617.071 68.3242 611.876 70.9717C606.68 73.6201 600.94 75 595.119 75C589.298 75 583.558 73.6201 578.362 70.9717C573.167 68.3242 568.661 64.4814 565.209 59.7549C564.095 58.2256 562.64 56.9814 560.962 56.123C559.285 55.2637 557.43 54.8145 555.549 54.8096H554.982C553.101 54.8154 551.248 55.2666 549.57 56.125C547.892 56.9834 546.438 58.2266 545.322 59.7549C541.871 64.4814 537.366 68.3232 532.171 70.9717C526.976 73.6201 521.237 75 515.416 75C509.595 75 503.856 73.6201 498.661 70.9717C493.466 68.3232 488.961 64.4814 485.509 59.7549C484.394 58.2266 482.939 56.9834 481.262 56.125C479.584 55.2666 477.73 54.8154 475.849 54.8096H475.276C473.394 54.8154 471.54 55.2666 469.863 56.125C468.185 56.9834 466.731 58.2266 465.616 59.7549C462.164 64.4814 457.659 68.3232 452.464 70.9717C447.269 73.6201 441.53 75 435.709 75C429.888 75 424.149 73.6201 418.954 70.9717C413.759 68.3232 409.254 64.4814 405.802 59.7549C404.688 58.2256 403.234 56.9814 401.556 56.123C399.878 55.2637 398.024 54.8145 396.142 54.8096H395.576C393.695 54.8154 391.841 55.2666 390.163 56.125C388.486 56.9834 387.031 58.2266 385.916 59.7549C382.464 64.4814 377.959 68.3232 372.764 70.9717C367.57 73.6201 361.83 75 356.009 75C350.188 75 344.449 73.6201 339.254 70.9717C334.059 68.3232 329.554 64.4814 326.103 59.7549C324.987 58.2266 323.533 56.9834 321.855 56.125C320.178 55.2666 318.324 54.8154 316.443 54.8096H315.869C313.988 54.8154 312.134 55.2666 310.456 56.125C308.779 56.9834 307.324 58.2266 306.209 59.7549C302.757 64.4814 298.252 68.3232 293.058 70.9717C287.863 73.6201 282.123 75 276.302 75C270.482 75 264.742 73.6201 259.547 70.9717C254.352 68.3232 249.847 64.4814 246.396 59.7549C245.281 58.2266 243.826 56.9834 242.148 56.125C240.471 55.2666 238.617 54.8154 236.736 54.8096H236.17C234.288 54.8145 232.434 55.2637 230.756 56.123C229.078 56.9814 227.624 58.2256 226.51 59.7549C223.057 64.4814 218.551 68.3242 213.356 70.9717C208.161 73.6201 202.421 75 196.599 75C190.778 75 185.038 73.6201 179.842 70.9717C174.647 68.3242 170.141 64.4814 166.689 59.7549C165.576 58.2266 164.122 56.9834 162.446 56.124C160.769 55.2656 158.916 54.8154 157.036 54.8096H156.463C154.581 54.8154 152.728 55.2666 151.05 56.125C149.372 56.9834 147.918 58.2266 146.803 59.7549C143.351 64.4814 138.846 68.3232 133.651 70.9717C128.456 73.6201 122.717 75 116.896 75C111.075 75 105.336 73.6201 100.141 70.9717C94.9459 68.3232 90.4409 64.4814 86.9893 59.7549C85.8741 58.2266 84.4194 56.9834 82.7418 56.125C81.0643 55.2666 79.2105 54.8154 77.3292 54.8096H76.7631C74.8815 54.8145 73.0272 55.2637 71.3493 56.123C69.6715 56.9814 68.217 58.2256 67.103 59.7549C62.4454 66.126 55.9076 70.8477 48.426 73.2432C40.9445 75.6377 32.9033 75.583 25.4543 73.0869C18.0053 70.5908 11.5308 65.7812 6.95852 59.3477C2.3862 52.9141 -0.0493519 45.1855 0.000758004 37.2695C0.0509289 29.3545 2.58425 21.6582 7.2377 15.2832C11.8911 8.90918 18.4259 4.18359 25.9059 1.7832C33.3859 -0.616211 41.4272 -0.567383 48.8778 1.92383C56.3284 4.41504 62.8059 9.21973 67.3823 15.6514C68.4889 17.1885 69.9419 18.4385 71.6214 19.2979C73.3009 20.1572 75.159 20.6025 77.0425 20.5957C78.9446 20.5918 80.8187 20.1328 82.5107 19.2559C84.2028 18.3799 85.6645 17.1113 86.7761 15.5547C90.2196 10.7471 94.7456 6.83301 99.9818 4.13281C105.218 1.43359 111.015 0.0253906 116.896 0.0253906C122.777 0.0253906 128.574 1.43359 133.81 4.13281C139.046 6.83301 143.572 10.7471 147.016 15.5547C148.128 17.1113 149.59 18.3789 151.282 19.2559C152.973 20.1318 154.847 20.5908 156.749 20.5957C158.651 20.5918 160.523 20.1328 162.214 19.2559C163.905 18.3799 165.366 17.1113 166.476 15.5547C169.919 10.7402 174.447 6.81934 179.688 4.11426C184.928 1.41016 190.731 0 196.618 0C202.504 0 208.307 1.41016 213.547 4.11426C218.788 6.81934 223.316 10.7402 226.759 15.5547C227.87 17.1113 229.33 18.3789 231.021 19.2559C232.712 20.1318 234.585 20.5908 236.486 20.5957C238.388 20.5918 240.262 20.1328 241.954 19.2559C243.646 18.3799 245.108 17.1113 246.219 15.5547C249.663 10.7471 254.189 6.83301 259.425 4.13281C264.661 1.43359 270.458 0.0253906 276.339 0.0253906C282.22 0.0253906 288.017 1.43359 293.253 4.13281C298.49 6.83301 303.016 10.7471 306.459 15.5547C307.571 17.1113 309.033 18.3789 310.725 19.2559C312.417 20.1318 314.291 20.5908 316.193 20.5957C318.095 20.5908 319.969 20.1318 321.66 19.2559C323.352 18.3789 324.814 17.1113 325.926 15.5547C329.37 10.7471 333.896 6.83301 339.132 4.13281C344.368 1.43359 350.165 0.0253906 356.046 0.0253906C361.927 0.0253906 367.724 1.43359 372.96 4.13281C378.196 6.83301 382.722 10.7471 386.166 15.5547C387.277 17.1113 388.739 18.3799 390.431 19.2559C392.123 20.1328 393.997 20.5918 395.899 20.5957C397.801 20.5908 399.673 20.1318 401.364 19.2559C403.055 18.3789 404.515 17.1113 405.626 15.5547C409.069 10.7471 413.595 6.83301 418.831 4.13281C424.068 1.43359 429.865 0.0253906 435.746 0.0253906C441.627 0.0253906 447.423 1.43359 452.66 4.13281C457.896 6.83301 462.422 10.7471 465.865 15.5547C466.977 17.1113 468.439 18.3789 470.131 19.2559C471.823 20.1318 473.697 20.5908 475.599 20.5957C477.501 20.5908 479.375 20.1318 481.067 19.2559C482.759 18.3789 484.221 17.1113 485.333 15.5547C488.776 10.7471 493.302 6.83301 498.538 4.13281C503.775 1.43359 509.572 0.0253906 515.452 0.0253906C521.333 0.0253906 527.13 1.43359 532.367 4.13281C537.603 6.83301 542.129 10.7471 545.572 15.5547C546.684 17.1113 548.146 18.3799 549.838 19.2559C551.53 20.1328 553.404 20.5918 555.306 20.5957C557.207 20.5908 559.08 20.1318 560.77 19.2559C562.461 18.3789 563.922 17.1113 565.032 15.5547C568.476 10.7471 573.003 6.83301 578.24 4.13281C583.477 1.43359 589.274 0.0253906 595.156 0.0253906C601.037 0.0253906 606.835 1.43359 612.071 4.13281C617.308 6.83301 621.835 10.7471 625.279 15.5547C626.389 17.1113 627.85 18.3799 629.54 19.2559C631.231 20.1328 633.104 20.5918 635.006 20.5957C636.889 20.6035 638.747 20.1582 640.427 19.2988C642.107 18.4385 643.559 17.1885 644.666 15.6514C648.098 10.8193 652.622 6.88184 657.864 4.16406Z" fill="#dae5d0"></path>
        </svg>
    </div>
</section>

<!-- Faq -->
<section class="section bg-white">
    <div class="section--inner faq--section">
        <div class="container">
            <div class="row g-0 justify-content-center">
                <div class="col-12 col-xl-6">
                    <div class="py-2 py-lg-4">&nbsp;</div>
                    <div class="section--content">
                        <div class="section--heading text-center">
                            <h2 class="h1">Preguntas frecuentes</h2>
                        </div>
                        <div class="accordion mt-0 mt-lg-4" id="accordion-faq">
                            <?php
                            $collect = [
                                ['heading'=> '¿Cuál es el margen de ganancia?', 'paragraph'=>'Si pides por <strong>pieza</strong>, el margen de ganancia es de hasta <strong>35%</strong> por producto, si pides por <strong>caja</strong> puedes ganar hasta <strong>45%</strong> de tu venta!'],
                                ['heading'=> '¿Cuánto tarda en llegar mi pedido?', 'paragraph'=>'Enviamos a<strong> todo México </strong>en express por medio de <strong>FedEx </strong>y <strong>Estafeta</strong>, te llega directo a tu domicilio en menos de 7 días hábiles 🚚'],
                                ['heading'=> '¿Cuánto tengo que invertir?', 'paragraph'=>'No hay mínimo de compra para tu pedido de distribuidor, puedes seleccionar los productos que más quieras vender.📦</p><p>Todos los pedidos arriba de<strong> $2,199</strong> tienen envío gratís a <strong>todo México</strong>'],
                                ['heading'=> '¿Como funciona la garantía?', 'paragraph'=>'Una vez que recibes tu pedido📦 cuentas con una garantía de <strong>30 días </strong>naturales por cualquier situación🤗 (sujeto a revisión). Para que podamos cambiarte tu producto recuerda que necesitamos evidencia🕵️‍♀️, si sufre algún daño con la paqueteria es necesario avisar en el momento que se recibe📲.'],
                                ['heading'=> '¿Cuanto cuesta 1 caja y cuantas piezas contiene?', 'paragraph'=>'Nuestras cajas📦 contienen de <strong>48 a 100 piezas</strong> dependiendo el producto y los precios empiezan desde<strong> $999 a $1999</strong> por caja 🤗<br/><br/>Recuerda que al comprar por caja tienes un margen de distribuidor mucho más alto, ¡en algunos productos hasta el <strong>45%!</strong>'],
                                ['heading'=> 'Métodos de pago', 'paragraph'=>'Aceptamos Tarjeta de crédito y débito 💳, Transferencia vía SPEI, PayPal, Pago con efectivo 💵 e inclusive pagar en <strong>4 quincenas con Kueski Pay.</strong>'],
                            ];
                            ?>
                            <?php foreach ($collect as $key => $item){ ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-<?=$key?>" aria-expanded="true" aria-controls="collapse-<?=$key?>">
                                        <?=$item['heading']?>
                                    </button>
                                </h2>
                                <div id="collapse-<?=$key?>" class="accordion-collapse collapse" data-bs-parent="#accordion-faq">
                                    <div class="accordion-body">
                                        <p class="numberList--item__content"><?=$item['paragraph']?></p>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- contact -->
<?php
$frm_debug = false;
$frm_name = $frm_debug ? "Prueba" : "";
$frm_email = $frm_debug ? "prueba@prueba.com" : "";
$frm_phone = $frm_debug ? "3388889999" : "";
$frm_msg = $frm_debug ? "Comentarios desde local host" : "";
?>

<a id="realiza-tu-pedido" hk-ancla-to="realiza-tu-pedido" class="anchor-screen"></a>
<section id="" class="section">
    <div class="section--inner contact--section">
        <div class="container">
            <div class="row g-0 justify-content-center">
                <div class="col-11 col-xl-6">
                    <div class="section--content">
                        <div class="section--heading text-center">
                            <h2 class="h1">¡Realiza tu pedido aquí!</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0 justify-content-center">
                <div class="col-11 col-lg-6 col-xl-6">
                    <div class="section--content section--content__border">
                        <form id="contact-form"
                              class="frm-contacto"
                              method="POST"
                              action="#contacto"

                              data-action="contacto-enviar"
                              data-parsley-validate
                              data-wow-delay="0.3s"
                            >
                            <div class="frm-field mb-5">
                                <input type="text" name="name" id="name" class="form-control border-0 border-bottom border-secondary rounded-0 px-0 pb-1  "
                                       maxlength="64"
                                       placeholder='<?= $__sp['attr']['name']['label'] ?>'
                                       aria-describedby="name-help"
                                       data-parsley-required
                                       data-parsley-maxlength="64"
                                       data-parsley-required-message="<?= $__sp['attr']['message']['required'] ?>"
                                       value="<?=$frm_name?>"
                                >
                            </div>

                            <div class="frm-field mb-5">
                                <input type="email" name="email" id="email" class="form-control border-0 border-bottom border-secondary rounded-0 px-0 pb-1 "
                                       maxlength="64"
                                       placeholder="<?= $__sp['attr']['email']['place-holder'] ?>"
                                       aria-describedby="email-help"
                                       data-parsley-required
                                       data-parsley-maxlength="64"
                                       data-parsley-required-message="<?= $__sp['attr']['message']['required'] ?>" data-parsley-type-message="email@example.com"
                                       value="<?=$frm_email?>"
                                >
                            </div>

                            <div class="frm-field mb-5">
                                <input type="tel" name="phone" id="phone" class="form-control border-0 border-bottom border-secondary rounded-0 px-0 pb-1 "
                                       maxlength="20"
                                       placeholder="<?= $__sp['attr']['phone']['place-holder'] ?>"
                                       aria-describedby="phone-help"
                                       data-parsley-required
                                       data-parsley-maxlength="20"
                                       data-parsley-required-message="<?= $__sp['attr']['message']['required'] ?>"
                                       value="<?=$frm_phone?>"
                                >
                            </div>

                            <div class="frm-field mb-5">
                                <label for="message" class="text-muted"><?= $__sp['attr']['message']['label'] ?></label>
                                <textarea class="form-control border-secondary rounded-0" id="message" name="message" rows="5" maxlength="512" aria-describedby="message-help" data-parsley-required data-parsley-required-message="<?= $__sp['attr']['message']['required'] ?>"><?=$frm_msg?></textarea>
                            </div>

                            <div class="mb-3 text-center">
                                <button id="hk-btn-submit" type="submit" class="btn btn-primary btn-submit mfProgress">
                                    <div class="cnt">Registrarme</div>
                                    <div class="loader"></div>
                                    <span class="msg hidden"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection