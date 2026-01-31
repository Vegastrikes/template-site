<?php

ob_start();
?>

<script src="/js/overlay.js"></script>

<div id="imageHoverOverlay" class="hidden fixed inset-0 flex z-50">
    <img 
        id="hoverOverlayImage" 
        src="" 
        alt="" 
        class="rounded-xl shadow-2xl cursor-zoom-in transition-transform duration-300"
        draggable="false"
    />
</div>

<div id="imageClickOverlay" class="hidden bg-black/80 fixed inset-0 flex z-100 items-center justify-center">
    <img 
        id="clickOverlayImage" 
        src="" 
        alt="" 
        class="rounded-xl shadow-2xl transition-transform duration-300 h-96 lg:h-144 xl:h-208"
        draggable="false"
    />
</div>

<?php
$content = ob_get_clean();

echo($content);
?>
