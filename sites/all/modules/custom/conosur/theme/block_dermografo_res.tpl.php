<div class="lateraldermo-grafo" >
    <div class="block-image">
        <img class="imageblock-image" typeof="foaf:Image" src="<?php print $items['img']; ?>" alt="">
    </div>
    <div class="block-body">
        <h3>HOLA <?php print $items['userdata']; ?></h3>
        <p>
            Su producto se encuentra disponible
            en todas las droguerías, para mayor
            información, comunícarse con 
            0800XXXXXX
        </p>
        <label class="instruccion-derma">Si tiene alguna duda</label>
        <?php print render($items['form']); ?>
    </div>
</div>