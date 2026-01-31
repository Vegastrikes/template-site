<?php

function get_content() {
    ob_start(); ?>
    
    <div class="flex-1">
        <h1>404</h1>
    </div>
    
    <?php
    return ob_get_clean();
}

?>