<?php

function get_content() {
    $certificates = dict_about_us('certificates');
    ob_start(); ?>
    
    <section class="bg-gray-100 pb-16">
      <div class="relative">
          <img src="/resources/images/banner_about_us.jpg" alt="<?php echo(dict('banner-background'))?>" class="w-full h-48 object-cover" />
          <div class="absolute inset-0 flex items-center justify-center text-blue-900 text-center p-6">
              <h1 class="text-6xl lg:text-3xl font-bold"><?php dict('certificates')?></h1>
          </div>
      </div>

      <!-- Intro -->
      <section class="text-center border-2 rounded-lg border-b-gray-900 p-8 m-16 mt-8 bg-blue-950">
          <p class="text-4xl lg:text-lg text-gray-200">
          <?php echo($certificates['intro'])?>
          </p>
      </section>

      <!-- Call To Action -->
      <section class="bg-gray-100 mx-16 rounded-lg text-center">
          <h2 class="text-4xl lg:text-2xl font-semibold mb-4"><?php echo($certificates['contact'])?></h2>
          <a href="<?php localized_link('contact') ?>" class="text-3xl lg:text-xl inline-block bg-blue-900 text-white font-bold py-3 px-6 rounded hover:bg-blue-700 transition">
              <?php dict('contact')?>
          </a>
      </section>
    </section>
    
    <?php
    return ob_get_clean();
}

?>