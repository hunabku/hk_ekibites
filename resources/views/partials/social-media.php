<ul class="navbar social-media">

    <?php if( $__['social_media']['fb'] != '' ){ ?>
    <li>
        <a href="<?=$__['social_media']['fb']?>" alt="visitanos en facebook" aria-label="visitanos en facebook" target="_blank" class="hk-icon-link">
            <i class="hk-icon hk-icon-fb"></i>
        </a>
    </li>
    <?php } ?>

    <?php if( $__['social_media']['in'] != '' ){ ?>
    <li>
        <a href="<?=$__['social_media']['in']?>" alt="visitanos en instagram" aria-label="visitanos en instagram" target="_blank" class="hk-icon-link">
            <i class="hk-icon hk-icon-in"></i>
        </a>
    </li>
    <?php } ?>

    <?php if( $__['whatsapp_link']['active'] == 1 && $__['whatsapp_link']['number'] != '' && $__['whatsapp_link']['cta'] != '' ){ ?>
        <li>
            <a href="<?=whatsapp_link($__['whatsapp_link']['number'], $__['whatsapp_link']['cta'])?>" alt="envianos un whatsapp" aria-label="visitanos en twitter" target="_blank" class="hk-icon-link">
                <i class="hk-icon hk-icon-wa"></i>
            </a>
        </li>
    <?php } ?>
</ul>