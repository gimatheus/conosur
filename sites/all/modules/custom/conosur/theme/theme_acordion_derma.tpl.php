<div class="productos-derma-acordion" >
    <div id="example2">
        <?php foreach ($items as $key => $value) : ?>
        <div>
            <label class="shadowproducto"></label>
            <?php print $value['img']  ?> 
            <h1><?php print $value['link']  ?> </h1>
            <p class="lead-producto"><?php print $value['lead']  ?> </p>        
            <?php print $value['vermas']  ?>
        </div>
        <?php endforeach; ?> 
    </div>    
</div>