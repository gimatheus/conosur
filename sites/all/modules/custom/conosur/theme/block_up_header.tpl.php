<div class="buttom_top col-xs-12 col-sm-12 col-md-8 col-lg-8" >
    <?php if (!empty($items["link-registro"])): ?>
        <div class="registroheader col-xs-12 col-sm-6 col-md-6 col-md-4">
        <?php print $items["link-registro"]; ?>
        </div>    
    <?php endif; ?>
    <div class="rede-conosur col-xs-10 col-sm-4 col-md-4 col-lg-5">
        <div class="red-uno col-xs-12 col-sm-6 col-md-6" >
            <?php if (!empty($items["youtube"])): ?>
                <?php print $items["youtube"]; ?>
            <?php endif; ?>
            <?php if (!empty($items["facebook"])): ?>
                <?php print $items["facebook"]; ?>
            <?php endif; ?>
        </div> 
        <div class="red-dos col-xs-12 col-sm-6 col-md-6" >
            <?php if (!empty($items["twitter"])): ?>
                <?php print $items["twitter"]; ?>
            <?php endif; ?>
            <?php if (!empty($items["instagram"])): ?>
                <?php print $items["instagram"]; ?>
            <?php endif; ?>
        </div>
        <div class="domicilios_header">
            <a href="<?php print get_url_page(); ?>domicilios" title="conosur"></a>
        </div>
   </div> 
</div>