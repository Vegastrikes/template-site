<?php

function get_content() {
    ob_start(); ?>
    
    <?=solutions_page(dict_solutions_content('solution-1'))?>
    
    <?php
    return ob_get_clean();
}

?>