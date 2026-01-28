<?php

function get_content() {
    ob_start(); ?>
    
    <div>
        <h1>404</h1>
    </div>
    
    <?php
    return ob_get_clean();
}

?>