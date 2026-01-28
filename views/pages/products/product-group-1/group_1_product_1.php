<?php

function get_content() {
    ob_start(); ?>
    
    <?=production_page(dict_products_content('group-1-product-1'))?>
    
    <?php
    return ob_get_clean();
}

?>