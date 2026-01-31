<?php

function get_content() {
    $certificates = dict_about_us('certificates');
    ob_start(); ?>
    
    <section>
      <div class="relative">
          <img src="/resources/images/banner_about_us.jpg" alt="<?php echo(dict('banner-background'))?>" class="w-full h-36 object-cover" />
          <div class="absolute inset-0 flex items-center justify-center text-blue-900 text-center p-6">
              <h1 class="text-3xl font-bold"><?php dict('certificates')?></h1>
          </div>
      </div>

      <div class="max-w-3xl xl:max-w-7xl mx-auto p-4">
          <!-- Intro -->
          <section class="text-center border-2 rounded-lg border-b-gray-900 p-8 bg-blue-950">
              <p class="text-lg text-gray-200">
              <?php echo($certificates['intro'])?>
              </p>
          </section>
      </div>


      <!-- Call To Action -->
      <section class="mx-8 rounded-lg text-center pb-8">
          <h2 class="text-xl font-semibold mb-4"><?php echo($certificates['contact'])?></h2>
          <a href="<?php localized_link('contact') ?>" class="inline-block bg-blue-900 text-white font-bold py-3 px-6 rounded hover:bg-blue-700 transition">
              <?php dict('contact')?>
          </a>
      </section>
    </section>
    
    <?php
    return ob_get_clean();
}

?>