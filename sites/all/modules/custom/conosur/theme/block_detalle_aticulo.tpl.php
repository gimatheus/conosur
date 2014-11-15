<div class="block-detalle-articulo" >
    <div class="bg-ter-detalle" >
        <?php print $items['bg']; ?>
    </div>
    <div class="container">
        <?php print $items['list']; ?>
        <div class="clear"></div>
        <div class="detalle-contenheader row">
            <div class="lead-detalle-header col-sm-6 col-md-5 col-lg-6">
                <h1><?php print $items['title']; ?></h1>
                <div class="clear"></div>
                <p>
                    <?php print $items['lead']; ?>
                </p>
                <div class="fecha-detalle">
                     <?php print $items['fecha']; ?>
                </div>
            </div>
            <div class="imgdetalle col-sm-6 col-md-5 col-md-offset-2 col-lg-6 col-lg-offset-0">
                <div class="img-detalle-content">
                    <?php print $items['img'] ?>
                    <div class="itemShadow_img" ></div>
                </div>
            </div>
        </div>
    </div> 
    
    
</div>