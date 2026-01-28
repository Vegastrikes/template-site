<?php

function get_content() {
    ob_start(); ?>
    
    <?=solutions_page(dict_solutions_content('service-1'))?>
    
    <?php
    return ob_get_clean();
}

?>