<!DOCTYPE html>
<html lang="<?=$lang?>" class="<?=$PAGE_ID?> <?=$IsMobile?>" data-debug="<?=DEBUG?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5" />
    <meta name="language" content="<?=$lang?>" />
    <?=$METATAG?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="<?=APP_URL?>css/app.css<?=DEBUG?'?v='.rand(999,9999):''?>">
	<script type="text/javascript">/* <![CDATA[ */var BodyClass ="<?=$PAGE_ID?>", gFuncInit=new Array(), _URL_="<?=URL?>", _LANG_="<?=$lang?>";/* ]]> */</script>

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#56b058">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <?php if( $__['metrics']['google']['head'] != '' ){ echo $__['metrics']['google']['head']; } ?>
</head>

<body id="<?=$PAGE_ID?>" class="<?=$PAGE_ID?> <?=$lang?> <?=$IsMobile?>">

    <?php if( $__['metrics']['google']['body'] != '' ){ echo $__['metrics']['google']['body']; } ?>

    <div id="app" class="app-container">
        <!--<div class="section section--announcement"></div>-->
        <header id="header" class="header">
            <?php include(VIEWS.'partials/header.php'); ?>
        </header><!-- Header -->

        <main id="content" class="content">
            <a id="inicio" hk-ancla-to="inicio" class="anchor-screen"></a>
            <?php echo $CONTENT??''; ?>
        </main><!-- Main -->

        <footer id="footer" class="section footer">
            <?php include(VIEWS.'partials/footer.php'); ?>
        </footer><!-- Footer -->

        <?php include(VIEWS.'partials/instant-chat.php'); ?>

    </div>
    <script async src="<?=APP_URL?>js/app.js<?=DEBUG?'?v='.rand(999,9999):''?>"></script>
    <?php if( $__['metrics']['facebook'] != '' ){ echo $__['metrics']['facebook']; } ?>
</body>
</html>