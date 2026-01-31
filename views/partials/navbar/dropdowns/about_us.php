<div class="relative group flex items-end">
  <span class="flex items-center gap-x-1 font-semibold text-gray-900" aria-expanded="false">
    <?php dict('company') ?>
    <svg class="size-5 flex-none text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
      <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
    </svg>
  </span>

  <div class="absolute top-full group-hover:block hidden -left-8 z-50 mt-0 w-screen max-w-md overflow-hidden rounded-3xl bg-white shadow-lg ring-1 ring-gray-900/5">
    <div class="p-4">
      <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm hover:bg-gray-50">
        <div class="flex-auto">
          <a href="<?php localized_link('about-us')?>" class="block font-semibold text-gray-900">
            <?php dict('about-us')?>
            <span class="absolute inset-0"></span>
          </a>
        </div>
      </div>
      <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm hover:bg-gray-50">
        <div class="flex-auto">
          <a href="<?php localized_link('about-us/mission-vision-values')?>" class="block font-semibold text-gray-900">
            <?php dict('mission-vision-values')?>
            <span class="absolute inset-0"></span>
          </a>
        </div>
      </div>
      <div class="group relative flex items-center gap-x-6 rounded-lg p-4 text-sm hover:bg-gray-50">
        <div class="flex-auto">
          <a href="<?php localized_link('about-us/certificates')?>" class="block font-semibold text-gray-900">
          <?php dict('certificates')?>
            <span class="absolute inset-0"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>