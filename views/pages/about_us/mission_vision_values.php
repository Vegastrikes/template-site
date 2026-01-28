<?php

function get_content() {
    $mission_vision_values = dict_about_us('mission-vision-values');
    $values = $mission_vision_values['values'];

    function get_value($arr) {
        ob_start(); ?>

        <div class="p-6 bg-gray-50 rounded-lg shadow hover:shadow-lg transition">
            <h3 class="text-4xl lg:text-xl font-semibold mb-2 text-blue-900 pb-2 lg:pb-0"><?php echo($arr[0])?></h3>
            <p class="text-gray-600 text-3xl lg:text-lg"><?php echo($arr[1])?></p>
        </div>
        
        <?php
        return ob_get_clean();
    }

    ob_start(); ?>
    
    <div class="bg-gray-100">
        <div class="relative">
            <img src="/resources/images/banner_about_us.jpg" alt="<?php echo(dict('banner-background'))?>" class="w-full h-48 object-cover" />
            <div class="absolute inset-0 flex items-center justify-center text-blue-900 text-center p-6">
                <h1 class="text-6xl lg:text-3xl font-bold"><?php dict('mission-vision-values')?></h1>
            </div>
        </div>

        <!-- Intro -->
        <div class="text-center border-2 rounded-lg border-b-gray-900 p-8 mx-16 mt-8 bg-blue-950">
            <p class="text-4xl lg:text-lg text-gray-200">
            <?php echo($mission_vision_values['intro'])?>
            </p>
        </div>

        <!-- Mission & Vision -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 p-16">
            <!-- Mission -->
            <div class="bg-gray-50 p-8 rounded-lg shadow-md border-l-4 border-blue-900">
                <h3 class="text-4xl lg:text-2xl font-bold text-blue-900 mb-4"><?php dict('mission')?></h3>
                <p class="text-gray-600 text-3xl lg:text-lg leading-relaxed">
                <?php echo($mission_vision_values['mission'])?>
                </p>
            </div>

            <!-- Vision -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-md border-l-4 border-blue-900">
                <h3 class="text-4xl lg:text-2xl font-bold text-blue-900 mb-4"><?php dict('vision')?></h3>
                <p class="text-gray-600 text-3xl lg:text-lg leading-relaxed">
                <?php echo($mission_vision_values['vision'])?>
                </p>
            </div>
        </div>

        <!-- Core Values Section -->
        <div class="px-16 pb-16">
            <div class="flex w-full pb-16">
                <div class="flex-1 bg-blue-900 my-4 rounded-lg"></div>
                <h2 class="text-6xl lg:text-4xl font-bold text-center text-blue-900 px-8"><?php dict('core-values')?></h2>
                <div class="flex-1 bg-blue-900 my-4 rounded-lg"></div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
                <?php foreach ($values as $value): ?>
                    <?= get_value($value)?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    
    <?php
    return ob_get_clean();
}

?>