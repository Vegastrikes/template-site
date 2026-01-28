<?php
function controller_page($path) {
    global $CONTENT;

    // Capture the view output
    ob_start();
    include BASE_PATH.'/'.$path;
    $content = get_content();
    ob_get_clean();

    $CONTENT = $content;

    // Load the layout
    require BASE_PATH.'/views/layouts/master.php';
}