<?php
/**
 * @file
 *
 * Theme file for non empty cart.
 */
?>
<div id="cart-block-contents-ajax">
  <table class="cart-block-items">
    <!--<thead>
      <tr>
        <th colspan="4">
          <?php print t('Products')?>
        </th>
      </tr>
    </thead>-->
    <tbody>
      <?php foreach ( $items as $item ):?>
      <tr class="odd">
        <td class="cart-block-item-qty">
            
            <div class="cart-item-product col-xs-7 col-sm-12 col-md-6 col-lg-6" >
                 <?php print $item['title']; print $item['descr']; ?>
            </div>
            <div class="qty col-xs-4 col-sm-4 col-md-4 col-lg-4">
                <?php print $item['qty'] ?>
                <?php print $item['total'] ?>
            </div>
            <div colspan="4" class="cart-block-item-desc remove-item-conosur col-xs-1 col-sm-2 col-md-2 col-lg-2">
                <?php print $item['remove_link'] ?>
            </div>
        </td>
      </tr>
     <!-- <tr>
        <td colspan="4" class="cart-block-item-desc">
          <?php print $item['remove_link'] ?>
        </td>
      </tr>-->
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<div class="cart-block-summary-total">
    <label><?php print t('Total'); ?>: </label><?php print $total ;?>
</div>
<div class="cart-block-summary-total-tiempo">
    <?php  print t('Tiempo de espera estimado'); ?>
    
</div>
<?php print $cart_links; ?>
