<div class="carrusel_home" >
    <ul class="bxslider">
        <?php foreach ($items as $value):?>
        <li>
        <?php print $value['img'];?>
            <div class="galleryDescripcion">
                <?php print $value['linkTerm'];?>
                <?php print $value['title'];?>
                <?php print $value['link'];?>
            </div>
        </li>
        <?php endforeach; ?>
    </ul>
    

</div>