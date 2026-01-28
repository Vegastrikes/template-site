<?php

function get_content() {
    ob_start(); ?>
    
    <?=production_page(dict_products_content('product-1'))?>
    
    <?php
    return ob_get_clean();
}

?>