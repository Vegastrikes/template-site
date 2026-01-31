<?php

function get_content() {
    $mission_vision_values = dict_about_us('mission-vision-values');
    $values = $mission_vision_values['values'];

    function get_value($arr) {
        ob_start(); ?>

        <div class="p-6 bg-gray-50 rounded-lg shadow hover:shadow-lg transition">
            <h3 class="text-lg font-semibold mb-2 text-blue-900 pb-2 lg:pb-0"><?php echo($arr[0])?></h3>
            <p class="text-gray-600 text-sm"><?php echo($arr[1])?></p>
        </div>
        
        <?php
        return ob_get_clean();
    }

    ob_start(); ?>
    
    <div>
        <div class="relative">
            <img src="/resources/images/banner_about_us.jpg" alt="<?php echo(dict('banner-background'))?>" class="w-full h-36 object-cover" />
            <div class="absolute inset-0 flex items-center justify-center text-blue-900 text-center p-6">
                <h1 class="text-3xl font-bold"><?php dict('mission-vision-values')?></h1>
            </div>
        </div>

        <div class="max-w-3xl xl:max-w-7xl mx-auto p-4">
            <!-- Intro -->
            <section class="text-center border-2 rounded-lg border-b-gray-900 p-8 bg-blue-950 mb-8">
                <p class="text-lg text-gray-200">
                <?php echo($mission_vision_values['intro'])?>
                </p>
            </section>
    
            <!-- Mission & Vision -->
            <section class="grid grid-cols-1 lg:grid-cols-2 gap-4 pb-8">
                <!-- Mission -->
                <div class="bg-gray-50 p-8 rounded-lg shadow-md border-l-4 border-blue-900">
                    <h3 class="text-lg font-bold text-blue-900 mb-2"><?php dict('mission')?></h3>
                    <p class="text-gray-600">
                    <?php echo($mission_vision_values['mission'])?>
                    </p>
                </div>
    
                <!-- Vision -->
                    <div class="bg-gray-50 p-8 rounded-lg shadow-md border-l-4 border-blue-900">
                    <h3 class="text-lg font-bold text-blue-900 mb-2"><?php dict('vision')?></h3>
                    <p class="text-gray-600">
                    <?php echo($mission_vision_values['vision'])?>
                    </p>
                </div>
            </section>
    
            <!-- Core Values Section -->
            <section class="pb-8">
                <div class="flex w-full pb-4 items-center">
                    <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
                    <h2 class="text-2xl font-bold text-center text-blue-900 px-8"><?php dict('core-values')?></h2>
                    <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
                </div>
    
                <div class="grid grid-cols-1 lg:grid-cols-2 xl:grid-cols-5 gap-8">
                    <?php foreach ($values as $value): ?>
                        <?= get_value($value)?>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>

    </div>
    
    <?php
    return ob_get_clean();
}

?>