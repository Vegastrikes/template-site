<?php

function solutions_page($arr) {
    $section = $arr['section'];
    $banner = $arr['banner'];
    $intro = $arr['intro'];
    $key_points = $arr['key_points'];
    $features = $arr['features'];
    $products = $arr['products'] ?? null;
    $contact = $arr['contact'];
    $images = $arr['images'];

    ob_start(); ?>
    <?php require(BASE_PATH.'/views/layouts/overlays.php') ?>

    <div>
        <!-- Banner -->
        <div class="relative">
            <img src="<?php echo($banner[0])?>" alt="<?php echo($banner[1])?>" class="w-full h-36 object-cover" />
            <div class="absolute inset-0 bg-black/50 flex items-center justify-center text-white text-center p-6">
                <h1 class="text-3xl font-bold"><?php dict($section)?></h1>
            </div>
        </div>

        <div class="max-w-3xl xl:max-w-7xl mx-auto p-4">
            <!-- Intro -->
            <div class="pb-8">
                <div class="text-center border-2 rounded-lg border-b-gray-900 p-8 bg-blue-950 mb-8">
                    <p class="text-lg text-gray-200">
                    <?php echo($intro[0])?>
                    </p>
                </div>
    
                <div class="text-center border rounded-lg border-gray-400 p-8 bg-gray-50">
                    <p class="text-sm xl:text-base text-justify"><?php echo($intro[1])?></p>
                </div>
            </div>
    
            <!-- What We Do -->
            <div class="pb-8">
                <!-- Title -->
                <div class="flex w-full pb-4 items-center">
                    <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
                    <h2 class="text-3xl font-bold text-center text-blue-900 px-8"><?php dict('what-we-do')?></h2>
                    <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
                </div>
    
                <!-- Key Points -->
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-2 lg:gap-4 xl:gap-6 text-center pb-8">
                    <?php foreach ($key_points as $key_point): ?>
                        <?= solutions_key_points($key_point)?>
                    <?php endforeach; ?>
                </div>
    
                <!-- Features -->
                <div class="pb-8 text-start">
                    <ul class="grid grid-cols-2 sm:grid-cols-3 gap-2 lg:gap-4 xl:gap-6 text-gray-600">
                        <?php foreach ($features as $feature): ?>
                            <?= solutions_features($feature)?>
                        <?php endforeach; ?>
                    </ul>
                </div>
    
                <!-- Images -->
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4 lg:gap-6 xl:gap-8 text-blue-900 text-center">
                    <?php foreach ($images as $image): ?>
                        <?= solutions_images($image)?>
                    <?php endforeach; ?>
                </div>
            </div>
    
            <!-- Products -->
            <?php if (!is_null($products)): ?>
                <?= solutions_products($products)?>
            <?php endif; ?>
        </div>


        <!-- Call To Action -->
        <nav class="bg-blue-800 text-white py-12 text-center">
            <h2 class="text-xl font-semibold mb-4"><?php echo($contact[0])?></h2>
            <a href="<?php localized_link('contact') ?>" class="inline-block bg-white text-blue-900 font-bold py-3 px-6 rounded hover:bg-blue-700 hover:text-white transition">
                <?php dict('contact')?>
            </a>
        </nav>
    </div>
    
    <?php
    return ob_get_clean();
}

function solutions_key_points($arr) {
    ob_start(); ?>

    <div class="p-4 bg-gray-50 rounded-lg shadow hover:shadow-lg transition border-2 border-blue-900/80">
        <h3 class="text-lg font-semibold mb-1 text-blue-900"><?php echo($arr[0])?></h3>
        <p class="text-gray-600"><?php echo($arr[1])?></p>
    </div>
    
    <?php
    return ob_get_clean();
}

function solutions_features($feature) {
    ob_start(); ?>

    <li class="text-sm p-6 bg-gray-50 rounded-lg shadow hover:shadow-lg transition border border-blue-900/20"><?php echo($feature)?></li>
    
    <?php
    return ob_get_clean();
}

function solutions_images($arr) {
    ob_start(); ?>

    <div class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition">
        <img src="<?php echo($arr[0])?>" alt="<?php echo($arr[1])?>" class="w-full h-64 xl:h-96 object-cover preview-image" />
    </div>

    <?php
    return ob_get_clean();
}

function solutions_products($arr) {
    $section = $arr['section'];
    $what = $arr['what'];
    $why = $arr['why'];
    $image_links = $arr['image-links'];

    function why_point($point) {
        ob_start(); ?>

        <li><?php echo('- '.$point)?></li>

        <?php
        return ob_get_clean();
    }

    function image_link($i_l) {
        ob_start(); ?>

        <a href="<?php localized_link($i_l['link']) ?>">
            <div class="rounded-lg overflow-hidden shadow hover:shadow-lg transition hover:bg-blue-700 hover:text-white">
                <img src="<?php echo($i_l['src']) ?>" alt="<?php echo($i_l['alt']) ?>" class="w-full object-cover h-64 xl:h-96" />
                <div class="p-5">
                    <h3 class="text-lg font-semibold mb-2"><?php echo($i_l['title']) ?></h3>
                    <p><?php echo($i_l['description']) ?></p>
                </div>
            </div>
        </a>

        <?php
        return ob_get_clean();
    }

    ob_start(); ?>

    <div class="pb-8">
        <div class="flex w-full pb-4 items-center">
            <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
            <h2 class="text-3xl font-bold text-center text-blue-900 px-8"><?php dict($section)?></h2>
            <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 pb-8">
        <div class="border rounded-lg border-gray-400 p-6 bg-gray-50 shadow hover:shadow-lg transition">
            <h3 class="text-xl font-bold text-blue-700 text-center mb-2 pb-2 lg:pb-0"><?php echo($what[0])?></h3>
            <p class="text-gray-600 text-justify"><?php echo($what[1])?></p>
        </div>

        <div class="border rounded-lg border-gray-400 p-6 bg-gray-50 shadow hover:shadow-lg transition">
            <h3 class="text-xl font-bold text-blue-700 text-center mb-2 pb-2 lg:pb-0"><?php echo($why[0])?></h3>
            <ul class="text-gray-600 space-y-2 text-justify">
                <?php foreach ($why[1] as $point): ?>
                    <?= why_point($point)?>
                <?php endforeach; ?>
            </ul>
        </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6 xl:gap-8">
            <?php foreach ($image_links as $image_link): ?>
                <?= image_link($image_link)?>
            <?php endforeach; ?>
        </div>
    </div>

    <?php
    return ob_get_clean();
}

?>