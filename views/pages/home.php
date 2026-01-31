<?php

function get_content() {
    global $ISDESKTOP;
    $dict_home = dict_home();
    $hero = $dict_home['hero'];
    $proven_experience = $dict_home['proven-experience'];
    $what_we_do = $dict_home['what-we-do'];
    $why_choose_us = $dict_home['why-choose-us'];
    $industries_we_serve = $dict_home['industries-we-serve'];
    $contact = $dict_home['contact'];

    function hero_items($arr) {
        ob_start(); ?>

        <div class="shrink-0 relative w-full h-96 xl:h-144">
            <img src="<?php echo($arr['src'])?>" class="absolute inset-0 w-full h-full object-cover" alt="<?php echo($arr['alt'])?>">

            <div class="absolute inset-0 bg-black/50 flex items-center justify-center text-white text-center p-6">
                <div class="px-24">
                    <h1 class="text-3xl font-bold "><?php echo($arr['title'])?></h1>
                </div>
            </div>
        </div>
        
        <?php
        return ob_get_clean();
    }

    function industries_we_serve_item($arr) {
        ob_start(); ?>

        <div class="flex flex-col items-center text-blue-900">
            <div class="text-3xl mb-3"><?php echo($arr['symbol'])?></div>
            <p class="font-semibold"><?php echo($arr['title'])?></p>
        </div>
        
        <?php
        return ob_get_clean();
    }

    function why_choose_us_item($arr) {
        ob_start(); ?>

        <div class="p-2 bg-gray-50 rounded-lg shadow hover:shadow-lg transition">
            <div class="mb-1">
                <div class="text-3xl mb-1"><?php echo($arr['symbol'])?></div>
                <h3 class="text-lg font-semibold"><?php echo($arr['title'])?></h3>
            </div>
            <p class="text-gray-600 h-full"><?php echo($arr['text'])?></p>
        </div>
        
        <?php
        return ob_get_clean();
    }

    function what_we_do_item($arr) {
        ob_start(); ?>

        <a href="<?php localized_link($arr['link']) ?>" class="mx-0 lg:p-0 border-3 border-blue-900/80 rounded-xl">
            <div class="group bg-white rounded-lg overflow-hidden shadow hover:shadow-lg transition hover:bg-blue-700 h-full">
                <img src="<?php echo($arr['src'])?>" alt="<?php echo($arr['alt'])?>" class="w-full h-64 xl:h-96 object-cover" />
                <div class="p-5">
                    <h3 class="text-lg font-semibold mb-2 group-hover:text-gray-200"><?php echo($arr['title'])?></h3>
                    <p class="text-gray-600 group-hover:text-white"><?php echo($arr['text'])?></p>
                </div>
            </div>
        </a>
        
        <?php
        return ob_get_clean();
    }


    ob_start(); ?>

    <script src="/js/carousel.js"></script>
    
    <div class="flex-1">
        <!-- Hero Section -->
        <div class="relative overflow-hidden">
            <div id="home_hero_carousel" class="flex transition-transform duration-300 ease-out w-full">
                <?php foreach ($hero as $hero_item): ?>
                    <?= hero_items($hero_item)?>
                <?php endforeach; ?>
            </div>

            <button id="home_hero_prev"
                    class="absolute left-2 top-1/2 -translate-y-1/2 bg-white hover:bg-black/60 text-2xl rounded-full p-2 transition duration-200 z-10">
                &#10094; <!-- left arrow -->
            </button>

            <button id="home_hero_next"
                    class="absolute right-2 top-1/2 -translate-y-1/2 bg-white hover:bg-black/60 text-2xl rounded-full p-2 transition duration-200">
                &#10095; <!-- right arrow -->
            </button>
        </div>

        <div class="px-4 max-w-3xl xl:max-w-7xl mx-auto">
            <!--Proven Experience -->
            <section class="py-8">
                <div class="flex w-full pb-8 items-center">
                    <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
                    <h2 class="text-3xl font-bold text-center text-blue-900 px-8"><?php echo($proven_experience['title'])?></h2>
                    <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
                </div>
    
                <div class="grid grid-cols-3 gap-8 ">
                    <div class="text-center">
                        <p class="text-2xl font-extrabold text-blue-900">100+</p>
                        <p class="text-gray-600 text-xl mt-2"><?php echo($proven_experience['completed-projects'])?></p>
                    </div>
    
                    <div class="text-center">
                        <p class="text-2xl font-extrabold text-blue-900">500+</p>
                        <p class="text-gray-600 text-xl mt-2"><?php echo($proven_experience['products-build'])?></p>
                    </div>
    
                    <div class="text-center">
                        <p class="text-2xl font-extrabold text-blue-900">10+</p>
                        <p class="text-gray-600 text-xl mt-2"><?php echo($proven_experience['industries-served'])?></p>
                    </div>
                </div>
            </section>
    
            <!-- What We Do -->
            <section class="pb-8">
                <div class="flex w-full pb-8 items-center">
                    <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
                    <h2 class="text-3xl font-bold text-center text-blue-900 px-8"><?php echo($what_we_do['title'])?></h2>
                    <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
                </div>
    
                <nav class="grid grid-cols-1 lg:grid-cols-2 items-stretch gap-4">
                    <?php foreach ($what_we_do['items'] as $item): ?>
                        <?= what_we_do_item($item)?>
                    <?php endforeach; ?>
                </nav>
            </section>
    
            <!-- Why Chose Us -->
            <section class="text-center pb-8 items-center">
                <div class="flex w-full pb-8">
                    <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
                    <h2 class="text-3xl font-bold text-center text-blue-900 px-8"><?php echo($why_choose_us['title'])?></h2>
                    <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
                </div>
    
                <!-- Intro -->
                <div class="text-center border-2 rounded-lg border-b-gray-900 p-8 mb-8 bg-blue-950">
                    <p class="text-lg text-gray-200"><?php echo($why_choose_us['intro'])?></p>
                </div>
    
                <div class="grid grid-cols-2 lg:grid-cols-4 items-stretch gap-8 text-blue-900">
                    <?php foreach ($why_choose_us['items'] as $item): ?>
                        <?= why_choose_us_item($item)?>
                    <?php endforeach; ?>
                </div>
            </section>
    
            <!-- Industries We Serve -->
            <section class="text-center">
                <div class="flex w-full pb-8 items-center">
                    <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
                    <h2 class="text-3xl font-bold text-center text-blue-900 px-8"><?php echo($industries_we_serve['title'])?></h2>
                    <div class="flex-1 h-1 min-w-6 bg-blue-900 my-4 rounded-lg"></div>
                </div>
    
                <div class="grid grid-cols-4 gap-8 pb-16">
                    <?php foreach ($industries_we_serve['items'] as $item): ?>
                        <?= industries_we_serve_item($item)?>
                    <?php endforeach; ?>
                </div>
            </section>
        </div>

        <!-- Call To Action -->
        <nav class="bg-blue-800 text-white py-12 text-center w-full">
            <h2 class="text-xl font-semibold mb-4 px-6"><?php echo($contact) ?></h2>
            <a href="<?php localized_link('contact') ?>" class="inline-block bg-white text-blue-900 font-bold py-3 px-6 rounded hover:bg-blue-700 hover:text-white transition">
                <?php dict('contact')?>
            </a>
        </nav>
    </div>
    
    <?php
    return ob_get_clean();
}

?>