<?php

function get_content() {
    ob_start(); ?>
    
    <?=production_page(dict_products_content('group-1-product-3'))?>
    
    <?php
    return ob_get_clean();
}

?>