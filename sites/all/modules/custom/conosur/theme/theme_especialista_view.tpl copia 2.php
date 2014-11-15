<div class="control-filter-especialistas pagination pagination-small" >
    <div class="filte-text">
        <ul class="list-inline">
           <li><a href="#" >A</a></li>
           <li><a href="#" >B</a></li>
           <li><a href="#" >C</a></li>
           <li><a href="#" >D</a></li>
           <li><a href="#" >E</a></li>
           <li><a href="#" >F</a></li>
           <li><a href="#" >G</a></li>
           <li><a href="#" >H</a></li>
           <li><a href="#" >I</a></li>
           <li><a href="#" >J</a></li>
           <li><a href="#" >K</a></li>
           <li><a href="#" >L</a></li>
           <li><a href="#" >M</a></li>
           <li><a href="#" >N</a></li>
           <li><a href="#" >O</a></li>
           <li><a href="#" >P</a></li>
           <li><a href="#" >Q</a></li>
           <li><a href="#" >R</a></li>
           <li><a href="#" >S</a></li>
           <li><a href="#" >T</a></li>
           <li><a href="#" >U</a></li>
           <li><a href="#" >V</a></li>
           <li><a href="#" >W</a></li>
           <li><a href="#" >X</a></li>
           <li><a href="#" >Y</a></li>
           <li><a href="#" >Z</a></li>
        </ul>
        <div class="outside">
            <p><span id="slider-prev"></span> | <span id="slider-next"></span></p>
         </div>
    </div>    
    <div class="comboCiudadesEspecialistas">
         <?php print $items['combo'];?>
    </div>
</div>
<div id="view-especialistas" class="view view-especialistas view-display-id-page contentSeccion">
    <div class="view-content">
        <?php foreach ($items['items'] as $value):?>
        <div class="views-row col-md-seccon">
            <div class="ItemfechaEvento">
            <?php print $value['city'];?>
            </div>
            <h4 class="itemconferencista">
            <?php print $value['name'];?>
            </h4>
            <strong class="itemcargo">
            <?php print $value['cargo'];?>
            </strong>
            <p class="field-content itemdescrop">
            <?php print $value['lead'];?> 
            </p>
            <div class="itemcorreo">
                <?php print $value['coreo'];?> 
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</div>
<div class="clear">
    <?php print $items['pager']; ?>
</div>