<?php

function get_content() {
    $dict_product_group_1 = get_dict_product_group_1();
    $banner = $dict_product_group_1['banner'];
    $items = $dict_product_group_1['items'];

    function get_item($arr) {
        ob_start(); ?>

        <a href="<?php localized_link($arr['local_link']) ?>" class="h-full">
            <div class="bg-blue-900 rounded-lg overflow-hidden shadow hover:shadow-2xl transition text-center hover:bg-blue-700 h-full">
                <img src="<?php echo($arr['src'])?>" alt="<?php echo($arr['alt'])?>" class="w-full h-96 object-cover" />
                <h3 class="text-3xl lg:text-lg text-white font-semibold p-6 border-t-2 border-gray-900"><?php dict($arr['section'])?></h3>
            </div>
        </a>

        <?php
        return ob_get_clean();
    }

    ob_start(); ?>
    
    <!-- Products -->
    <div class="bg-gray-100">
        <div class="relative">
            <img src="<?php echo($banner['src'])?>" alt="<?php echo($banner['alt'])?>" class="w-full h-48 object-cover" />
            <div class="absolute inset-0 bg-black/50 flex items-center justify-center text-white text-center p-6">
                <h1 class="text-6xl lg:text-3xl font-bold"><?php dict($banner['title'])?></h1>
            </div>
        </div>

        <nav class="grid grid-cols-1 lg:grid-cols-3 py-16 px-32 gap-16">
            <?php foreach ($items as $item): ?>
                <?= get_item($item)?>
            <?php endforeach; ?>
        </nav>
    </div>
    
    <?php
    return ob_get_clean();
}

?>