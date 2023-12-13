<?php if( $__['whatsapp_link']['active'] == 1 && $__['whatsapp_link']['number'] != '' && $__['whatsapp_link']['cta'] != '' ){ ?>
<div id="instant-chat" class="instant-message">
    <div class="instant-message-box">
        <ul>
            <li><a href="<?=whatsapp_link($__['whatsapp_link']['number'], $__['whatsapp_link']['cta'])?>" target="_blank" aria-label="whatsapp">
                    <i class="hk-icon hk-icon-64 hk-icon-chat-wa"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
<?php } ?>