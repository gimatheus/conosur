<div class="footeer-siguenos"> 
    <h4>SÍGUENOS</h4>
    <div class="botones-siguenos">
        <?php if (!empty($items["twitter"])): ?>
            <?php print $items["twitter"]; ?>
        <?php endif; ?>
        <?php if (!empty($items["facebook"])): ?>
            <?php print $items["facebook"]; ?>
        <?php endif; ?>
    </div> 
    <div class="formcorreofooter">
        <?php if (!empty($items['email'])): ?>
            <?php print drupal_render($items['email']); ?>
        <?php endif; ?>
    </div>
    
</div>