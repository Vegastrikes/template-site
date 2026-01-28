<?php

function production_page($arr) {
    $section = $arr['section'];
    $banner = $arr['banner'];
    $intro = $arr['intro'];
    $key_points = $arr['key_points'];
    $features = $arr['features'];
    $contact = $arr['contact'];
    $images = $arr['images'];

    ob_start(); ?>
    <?php require(BASE_PATH.'/views/layouts/overlays.php') ?>

    <div>
        <!-- Banner -->
        <div class="relative">
            <img src="<?php echo($banner[0])?>" alt="<?php echo($banner[1])?>" class="w-full h-48 object-cover" />
            <div class="absolute inset-0 bg-black/50 flex items-center justify-center text-white text-center p-6">
                <h1 class="text-6xl lg:text-3xl font-bold"><?php dict($section)?></h1>
            </div>
        </div>

        <div class="px-16 lg:px-64">
            <!-- Intro -->
            <div class="pb-16">
                <div class="text-center border-2 rounded-lg border-b-gray-900 p-8 mx-16 mt-8 mb-8 bg-blue-950">
                    <p class="text-3xl lg:text-xl text-gray-200">
                    <?php echo($intro[0])?>
                    </p>
                </div>
    
                <div class="text-center border rounded-lg border-gray-400 p-8 mx-16 mt-8 bg-gray-50">
                    <p class="text-lg lg:text-m text-justify"><?php echo($intro[1])?></p>
                </div>
            </div>
    
            <!-- What We Do -->
            <div class="pb-16">
                <!-- Title -->
                <div class="flex w-full pb-8">
                    <div class="flex-1 bg-blue-900 my-4 rounded-lg"></div>
                    <h2 class="text-6xl lg:text-4xl font-bold text-center text-blue-900 px-8"><?php dict('what-we-do')?></h2>
                    <div class="flex-1 bg-blue-900 my-4 rounded-lg"></div>
                </div>
    
                <!-- Key Points -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center pb-8">
                    <?php foreach ($key_points as $key_point): ?>
                        <?= production_key_points($key_point)?>
                    <?php endforeach; ?>
                </div>
    
                <!-- Features -->
                <div class="pb-8 text-start">
                    <ul class="grid grid-cols-3 gap-6 text-gray-600">
                        <?php foreach ($features as $feature): ?>
                            <?= production_features($feature)?>
                        <?php endforeach; ?>
                    </ul>
                </div>
    
                <!-- Images -->
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-blue-900 text-center">
                    <?php foreach ($images as $image): ?>
                        <?= production_images($image)?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Call To Action -->
        <nav class="bg-blue-800 text-white py-12 text-center">
            <h2 class="text-4xl lg:text-2xl font-semibold mb-4"><?php echo($contact[0])?></h2>
            <a href="<?php localized_link('contact') ?>" class="text-2xl inline-block bg-white text-blue-900 font-bold py-3 px-6 rounded hover:bg-blue-700 hover:text-white transition">
                <?php dict('contact')?>
            </a>
        </nav>
    </div>
    
    <?php
    return ob_get_clean();
}

function production_key_points($arr) {
    ob_start(); ?>

    <div class="p-6 bg-gray-50 rounded-lg shadow hover:shadow-lg transition border-2 border-blue-900/80">
        <h3 class="text-3xl lg:text-xl font-semibold mb-2 text-blue-900 pb-2 lg:pb-0"><?php echo($arr[0])?></h3>
        <p class="text-gray-600 text-xl lg:text-lg"><?php echo($arr[1])?></p>
    </div>
    
    <?php
    return ob_get_clean();
}

function production_features($feature) {
    ob_start(); ?>

    <li class="text-lg lg:text-md p-6 bg-gray-50 rounded-lg shadow hover:shadow-lg transition border border-blue-900/20"><?php echo($feature)?></li>
    
    <?php
    return ob_get_clean();
}

function production_images($arr) {
    ob_start(); ?>

    <div class="bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition">
        <img src="<?php echo($arr[0])?>" alt="<?php echo($arr[1])?>" class="w-full h-96 object-cover preview-image" />
    </div>

    <?php
    return ob_get_clean();
}

?>