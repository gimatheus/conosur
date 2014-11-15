<div class="resultado-diagnostico" >
   <?php if (!empty($items["img"])): ?>
        <div class="imgProducto-res">
        <?php print $items["img"]; ?>
        </div>
    <?php endif; ?>
    <div class="desp-resultado">
        <div class="desp-resultado-cara">
            <label><span></span><a href="#" class="label">Características</a></label>
            <?php if (!empty($items["caracteristica"])): ?>
                <p>
                <?php print $items["caracteristica"]; ?>
                </p>
            <?php endif; ?>
        </div>
        <div class="desp-resultado-concejo">
            <label><span></span><a href="#" class="label">Consejos de expertos </a></label>
            <?php if (!empty($items["experto"])): ?>
                <p>
                <?php print $items["experto"]; ?>
                </p>
            <?php endif; ?>
            
        </div>
    </div>
    
</div>