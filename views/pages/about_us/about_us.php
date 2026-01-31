<?php

function get_content() {
    $about_us = dict_about_us('about-us');
    $hero = $about_us['hero'];
    $highlights = $about_us['highlights'];
    $quality_policy = $about_us['quality-policy'];
    $work_safety_policy = $about_us['work-safety-policy'];
    $environmental_policy = $about_us['environmental-policy'];
    ob_start(); ?>
    
    <section class="flex-1">
        <div class="relative">
            <img src="/resources/images/banner_about_us.jpg" alt="<?php echo(dict('banner-background'))?>" class="w-full h-36 object-cover" />
            <div class="absolute inset-0 flex items-center justify-center text-blue-900 text-center p-6">
                <h1 class="text-3xl font-bold"><?php dict('about-us')?></h1>
            </div>
        </div>

        <div class="max-w-3xl xl:max-w-7xl mx-auto p-4">
            <!-- Intro -->
            <div class="text-center border-2 rounded-lg border-b-gray-900 p-8 bg-blue-950 mb-8">
                <p class="text-lg text-gray-200">
                <?php echo($about_us['intro'])?>
                </p>
            </div>
    
            <!-- Image + Description -->
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 items-center mb-4 xl:mb-16">
                <img src="<?php echo($hero['src'])?>" alt="<?php echo($hero['alt'])?>" class="rounded-lg shadow-lg w-full object-cover xl:h-128" />
                <div class="lg:ml-2">
                    <h2 class="text-2xl font-semibold text-blue-900 mb-4"><?php echo($hero['title'])?></h2>
                    <p class="text-gray-600">
                        <?php echo($hero['p1'])?>
                        <br /><br />
                        <?php echo($hero['p2'])?>
                        <br /><br />
                        <?php echo($hero['p3'])?>
                    </p>
                </div>
            </div>
    
            <!-- Quality Policy -->
            <section class="pb-8">
                <div class="flex w-full pb-4 items-center">
                    <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
                    <h2 class="text-2xl font-bold text-center text-blue-900 px-8"><?php dict('quality-policy')?></h2>
                    <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
                </div>
    
                <div class="grid grid-cols-3 gap-2 lg:gap-6 xl:gap-12">
                    <ul class="col-span-2 p-4 bg-gray-50 rounded-lg shadow hover:shadow-lg transition space-y-2 lg:space-y-4 text-sm xl:text-base">
                        <li class="text-gray-600"><?php echo($quality_policy['points'][0])?></li>
                        <li class="text-gray-600"><?php echo($quality_policy['points'][1])?></li>
                        <li class="text-gray-600"><?php echo($quality_policy['points'][2])?></li>
                        <li class="text-gray-600"><?php echo($quality_policy['points'][3])?></li>
                        <li class="text-gray-600"><?php echo($quality_policy['points'][4])?></li>
                        <li class="text-gray-600"><?php echo($quality_policy['points'][5])?></li>
                        <li class="text-gray-600"><?php echo($quality_policy['points'][6])?></li>
                    </ul>
                    <div class="col-span-1 h-full rounded-lg">
                        <img src="<?php echo($quality_policy['image']['src'])?>" alt="<?php echo($quality_policy['image']['alt'])?>" class="w-full h-full rounded-lg object-cover" />
                    </div>
                </div>
            </section>
    
            <!-- Health and Safety Policy -->
            <section class="pb-8">
                <div class="flex w-full pb-4 items-center">
                    <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
                    <h2 class="text-2xl font-bold text-center text-blue-900 px-8"><?php dict('health-safety-policy')?></h2>
                    <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
                </div>
    
                <div class="grid grid-cols-3 gap-2 lg:gap-6 xl:gap-12">
                    <div class="col-span-1 h-full rounded-lg">
                        <img src="<?php echo($work_safety_policy['image']['src'])?>" alt="<?php echo($work_safety_policy['image']['alt'])?>" class="w-full h-full rounded-lg object-cover" />
                    </div>
                    <ul class="col-span-2 p-4 bg-gray-50 rounded-lg shadow hover:shadow-lg transition space-y-2 lg:space-y-4 text-sm xl:text-base">
                        <li class="text-gray-600"><?php echo($work_safety_policy['points'][0])?></li>
                        <li class="text-gray-600"><?php echo($work_safety_policy['points'][1])?></li>
                        <li class="text-gray-600"><?php echo($work_safety_policy['points'][2])?></li>
                        <li class="text-gray-600"><?php echo($work_safety_policy['points'][3])?></li>
                        <li class="text-gray-600"><?php echo($work_safety_policy['points'][4])?></li>
                    </ul>
                </div>
            </section>
    
            <!-- Environmental Policy -->
            <section class="ppb-8">
                <div class="flex w-full pb-4 items-center">
                    <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
                    <h2 class="text-lg xl:text-2xl font-bold text-center text-blue-900 px-8"><?php dict('environmental-policy')?></h2>
                    <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
                </div>
    
                <div class="grid grid-cols-3 gap-2 lg:gap-6 xl:gap-12">
                    <ul class="col-span-2 p-4 bg-gray-50 rounded-lg shadow hover:shadow-lg transition space-y-2 lg:space-y-4 text-sm xl:text-base">
                        <li class="text-gray-600"><?php echo($environmental_policy['points'][0])?></li>
                        <li class="text-gray-600"><?php echo($environmental_policy['points'][1])?></li>
                        <li class="text-gray-600"><?php echo($environmental_policy['points'][2])?></li>
                        <li class="text-gray-600"><?php echo($environmental_policy['points'][3])?></li>
                        <li class="text-gray-600"><?php echo($environmental_policy['points'][4])?></li>
                        <li class="text-gray-600"><?php echo($environmental_policy['points'][5])?></li>
                        <li class="text-gray-600"><?php echo($environmental_policy['points'][6])?></li>
                        <li class="text-gray-600"><?php echo($environmental_policy['points'][7])?></li>
                    </ul>
                    <div class="col-span-1 h-full rounded-lg">
                        <img src="<?php echo($environmental_policy['image']['src'])?>" alt="<?php echo($environmental_policy['image']['alt'])?>" class="w-full h-full rounded-lg object-cover" />
                    </div>
                </div>
            </section>
        </div>
        
    </section>
    
    <?php
    return ob_get_clean();
}

?>