<?php
global $ISDESKTOP;

ob_start();
?>

<?php if ($ISDESKTOP): ?>
<header class="bg-white sticky top-0 z-99">
  <nav class="flex max-w-screen items-end justify-between py-6 px-2 lg:px-8 border-b-4 border-b-blue-900" aria-label="<?php dict('navigation-bar')?>">
    <div class="flex flex-1 gap-x-12">
      <a href="<?php localized_link('')?>" class="font-semibold mr-6">
        <?php if (!isset($GLOBALS['CURRENT_LANGUAGE']) || $GLOBALS['CURRENT_LANGUAGE'] == 'tr'): ?>
          <img src="/resources/images/company_logo_tr.png" alt="Şirket Logosu" class="h-16">
        <?php endif; ?>
        <?php if ($GLOBALS['CURRENT_LANGUAGE'] == 'en'): ?>
          <img src="/resources/images/company_logo_en.png" alt="Company Logo" class="h-16">
        <?php endif; ?>
      </a>

      <?php require(BASE_PATH.'/views/partials/navbar/dropdowns/about_us.php') ?>
      <?php require(BASE_PATH.'/views/partials/navbar/dropdowns/products.php') ?>
      <?php require(BASE_PATH.'/views/partials/navbar/dropdowns/services_solutions.php') ?>

      <a href="<?php localized_link('contact')?>" class="text-sm/6 font-semibold text-gray-900 flex items-end">
        <?php dict('contact') ?>
      </a>
    </div>

    <div class="flex gap-x-2">
      <a href="<?php echo(DOMAIN.'/tr')?>" aria-label="Türkçe">
          <svg class="w-6 h-h" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><circle cx="256" cy="256" fill="#d80027" r="256"/><g fill="#f0f0f0"><path d="m245.518 209.186 21.005 28.945 34.017-11.03-21.038 28.92 21.002 28.944-34.005-11.072-21.037 28.92.022-35.761-34.006-11.072 34.018-11.03z"/><path d="m188.194 328.348c-39.956 0-72.348-32.392-72.348-72.348s32.392-72.348 72.348-72.348c12.458 0 24.18 3.151 34.414 8.696-16.055-15.702-38.012-25.392-62.24-25.392-49.178 0-89.043 39.866-89.043 89.043s39.866 89.043 89.043 89.043c24.23 0 46.186-9.691 62.24-25.392-10.234 5.547-21.956 8.698-34.414 8.698z"/></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>
      </a>
      <a href="<?php echo(DOMAIN.'/en')?>" aria-label="English">
          <svg class="w-6 h-6" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><circle cx="256" cy="256" fill="#f0f0f0" r="256"/><g fill="#0052b4"><path d="m52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178z"/><path d="m503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076z"/><path d="m8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075z"/><path d="m411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177z"/><path d="m100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102v-133.176z"/><path d="m189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075z"/><path d="m322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075z"/><path d="m370.005 322.784 89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076z"/></g><g fill="#d80027"><path d="m509.833 222.609h-220.44-.001v-220.442c-10.931-1.423-22.075-2.167-33.392-2.167-11.319 0-22.461.744-33.391 2.167v220.44.001h-220.442c-1.423 10.931-2.167 22.075-2.167 33.392 0 11.319.744 22.461 2.167 33.391h220.44.001v220.442c10.931 1.423 22.073 2.167 33.392 2.167 11.317 0 22.461-.743 33.391-2.167v-220.44-.001h220.442c1.423-10.931 2.167-22.073 2.167-33.392 0-11.317-.744-22.461-2.167-33.391z"/><path d="m322.783 322.784 114.236 114.236c5.254-5.252 10.266-10.743 15.048-16.435l-97.802-97.802h-31.482z"/><path d="m189.217 322.784h-.002l-114.235 114.235c5.252 5.254 10.743 10.266 16.435 15.048l97.802-97.804z"/><path d="m189.217 189.219v-.002l-114.236-114.237c-5.254 5.252-10.266 10.743-15.048 16.435l97.803 97.803h31.481z"/><path d="m322.783 189.219 114.237-114.238c-5.252-5.254-10.743-10.266-16.435-15.047l-97.802 97.803z"/></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>
      </a>
    </div>
  </nav>
</header>
<?php endif; ?>

<?php if (!$ISDESKTOP): ?>
<header class="bg-white sticky top-0 z-99">
  <nav class="items-center justify-between py-6 px-2 border-b-4 border-b-blue-900" aria-label="<?php dict('navigation-bar')?>">
    <div class="grid grid-cols-2 items-center px-6">
      <a href="<?php localized_link('')?>" class="mr-6 justify-self-start">
        <?php if (!isset($GLOBALS['CURRENT_LANGUAGE']) || $GLOBALS['CURRENT_LANGUAGE'] == 'tr'): ?>
          <img src="/resources/images/company_logo_tr.png" alt="Şirket Logosu" class="h-32">
        <?php endif; ?>
        <?php if ($GLOBALS['CURRENT_LANGUAGE'] == 'en'): ?>
          <img src="/resources/images/company_logo_en.png" alt="Company Logo" class="h-32">
        <?php endif; ?>
      </a>

      <button type="button" id="mobile_navbar_button" class="flex flex-col gap-6 justify-self-end">
        <span class="w-12 h-2 bg-gray-700 rounded-full"></span>
        <span class="w-12 h-2 bg-gray-700 rounded-full"></span>
        <span class="w-12 h-2 bg-gray-700 rounded-full"></span>
      </button>
    </div>

    <!-- POPUP -->
    <div id="mobile_navbar" role="dialog" aria-modal="true" class="hidden">
      <!-- Background backdrop -->
      <div id="popup_bg" class="fixed inset-0 z-50 bg-gray-600/75"></div>

      <div id="popup" class="fixed inset-y-0 right-0 z-50 w-full max-w-3xl flex flex-col">

        <!-- Scrollable Content -->
        <div class="flex-1 overflow-y-auto">
          <!-- Section Wrapper -->
          <div class="h-full">
            <!-- ABOUT -->
            <div id="popup_parent_about_us" class="h-48 relative bg-gray-100 p-8 items-center">
              <button id="popup_about_us" class="flex p-8 w-full text-blue-900 text-6xl font-semibold border-4 border-blue-900 rounded-2xl">
                <?php dict('company')?>
                <svg class="size-16 ml-auto" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                    clip-rule="evenodd" />
                </svg>
              </button>
            </div>
            <div id="popup_about_us_list" class="hidden bg-gray-50">
              <a href="<?php localized_link('about-us')?>" class="block py-4 px-6 text-5xl"><?php dict('about-us')?></a>
              <a href="<?php localized_link('about-us/mission-vision-values')?>" class="block py-4 px-6 text-5xl bg-gray-200/50"><?php dict('mission-vision-values')?></a>
              <a href="<?php localized_link('about-us/certificates')?>" class="block py-4 px-6 text-5xl"><?php dict('certificates')?></a>
            </div>

            <!-- PRODUCTS -->
            <div id="popup_parent_product" class="h-48 relative bg-gray-100 p-8 items-center">
              <button id="popup_product" class="flex p-8 w-full items-center text-blue-900 text-6xl font-semibold border-4 border-blue-900 rounded-2xl">
                <?php dict('products')?>
                <svg class="size-16 ml-auto" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                    clip-rule="evenodd" />
                </svg>
              </button>
            </div>
            <div id="popup_product_list" class="hidden bg-gray-50">
              <a href="<?php localized_link('products')?>" class="block py-4 px-6 text-5xl bg-blue-900/80 text-white"><?php dict('catalog')?></a>
              <a href="<?php localized_link('products/product-group-1')?>" class="block py-4 px-6 text-5xl bg-gray-200/50"><?php dict('product-group-1')?></a>
              <a href="<?php localized_link('products/product-1')?>" class="block py-4 px-6 text-5xl"><?php dict('product-1')?></a>
              <a href="<?php localized_link('products/product-2')?>" class="block py-4 px-6 text-5xl"><?php dict('product-2')?></a>
            </div>

            <!-- SOLUTIONS & SERVICES -->
            <div id="popup_parent_services_solutions" class="h-48 relative bg-gray-100 p-8 items-center">
              <button id="popup_services_solutions" class="flex p-8 w-full items-center text-justify text-blue-900 text-5xl font-semibold border-4 border-blue-900 rounded-2xl">
                <?php dict('services-solutions')?>
                <svg class="size-16 ml-auto" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                    clip-rule="evenodd" />
                </svg>
              </button>
            </div>
            <div id="popup_services_solutions_list" class="hidden bg-gray-50">
              <a href="<?php localized_link('services-solutions')?>" class="block py-4 px-6 text-5xl bg-blue-900/80 text-white"><?php dict('catalog')?></a>
              <a href="<?php localized_link('solutions/solution-1')?>" class="block py-4 px-6 text-5xl bg-gray-200/50"><?php dict('solution-1')?></a>
              <a href="<?php localized_link('solutions/solution-2')?>" class="block py-4 px-6 text-5xl bg-gray-200/50"><?php dict('solution-2')?></a>
              <a href="<?php localized_link('services/service-1')?>" class="block py-4 px-6 text-5xl bg-gray-200/50"><?php dict('service-1')?></a>
            </div>

            <!-- CONTACT -->
            <div class="h-48 relative bg-gray-100 p-8 items-center">
              <div class="flex p-8 w-full text-blue-900 text-6xl font-semibold border-4 border-blue-900 rounded-2xl">
                <a href="<?php localized_link('contact')?>"
                  class="w-full">
                  <?php dict('contact')?>
                </a>
              </div>
            </div>

            <!-- LANGUAGES -->
            <div id="popup_parent_languages" class="flex h-48 relative bg-gray-100 p-8 items-center rounded-b-2xl">
              <button id="popup_languages" class="flex p-8 w-full items-center text-justify text-blue-900 text-6xl font-semibold border-4 border-blue-900 rounded-2xl">
                <img src="/resources/images/languages_icon.png" class="h-18 mr-8 object-cover" />
                <?php dict('languages')?>
                <svg class="size-16 ml-auto" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd"
                    d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                    clip-rule="evenodd" />
                </svg>
              </button>
            </div>
            <div id="popup_languages_list" class="hidden bg-gray-50">
              <a href="<?php echo(DOMAIN.'/tr')?>" aria-label="Türkçe" class="flex py-4 px-6 text-5xl bg-gray-200/50 items-center">
                <svg class="w-18 h-18" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><circle cx="256" cy="256" fill="#d80027" r="256"/><g fill="#f0f0f0"><path d="m245.518 209.186 21.005 28.945 34.017-11.03-21.038 28.92 21.002 28.944-34.005-11.072-21.037 28.92.022-35.761-34.006-11.072 34.018-11.03z"/><path d="m188.194 328.348c-39.956 0-72.348-32.392-72.348-72.348s32.392-72.348 72.348-72.348c12.458 0 24.18 3.151 34.414 8.696-16.055-15.702-38.012-25.392-62.24-25.392-49.178 0-89.043 39.866-89.043 89.043s39.866 89.043 89.043 89.043c24.23 0 46.186-9.691 62.24-25.392-10.234 5.547-21.956 8.698-34.414 8.698z"/></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>
                <span class="pl-8">Türkçe</span>
              </a>
              <a href="<?php echo(DOMAIN.'/en')?>" aria-label="English" class="flex py-4 px-6 text-5xl items-center">
                <svg class="w-18 h-18" enable-background="new 0 0 512 512" viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg"><circle cx="256" cy="256" fill="#f0f0f0" r="256"/><g fill="#0052b4"><path d="m52.92 100.142c-20.109 26.163-35.272 56.318-44.101 89.077h133.178z"/><path d="m503.181 189.219c-8.829-32.758-23.993-62.913-44.101-89.076l-89.075 89.076z"/><path d="m8.819 322.784c8.83 32.758 23.993 62.913 44.101 89.075l89.074-89.075z"/><path d="m411.858 52.921c-26.163-20.109-56.317-35.272-89.076-44.102v133.177z"/><path d="m100.142 459.079c26.163 20.109 56.318 35.272 89.076 44.102v-133.176z"/><path d="m189.217 8.819c-32.758 8.83-62.913 23.993-89.075 44.101l89.075 89.075z"/><path d="m322.783 503.181c32.758-8.83 62.913-23.993 89.075-44.101l-89.075-89.075z"/><path d="m370.005 322.784 89.075 89.076c20.108-26.162 35.272-56.318 44.101-89.076z"/></g><g fill="#d80027"><path d="m509.833 222.609h-220.44-.001v-220.442c-10.931-1.423-22.075-2.167-33.392-2.167-11.319 0-22.461.744-33.391 2.167v220.44.001h-220.442c-1.423 10.931-2.167 22.075-2.167 33.392 0 11.319.744 22.461 2.167 33.391h220.44.001v220.442c10.931 1.423 22.073 2.167 33.392 2.167 11.317 0 22.461-.743 33.391-2.167v-220.44-.001h220.442c1.423-10.931 2.167-22.073 2.167-33.392 0-11.317-.744-22.461-2.167-33.391z"/><path d="m322.783 322.784 114.236 114.236c5.254-5.252 10.266-10.743 15.048-16.435l-97.802-97.802h-31.482z"/><path d="m189.217 322.784h-.002l-114.235 114.235c5.252 5.254 10.743 10.266 16.435 15.048l97.802-97.804z"/><path d="m189.217 189.219v-.002l-114.236-114.237c-5.254 5.252-10.266 10.743-15.048 16.435l97.803 97.803h31.481z"/><path d="m322.783 189.219 114.237-114.238c-5.252-5.254-10.743-10.266-16.435-15.047l-97.802 97.803z"/></g><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/><g/></svg>
                <span class="pl-8">English</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </nav>
</header>
<?php endif; ?>

<?php
$content = ob_get_clean();

echo($content);
?>
