<footer class="bg-gray-900 text-gray-300 py-12">
  <div class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-3 gap-8">
    <!-- About / Logo -->
    <div>
      <?php if (!isset($GLOBALS['CURRENT_LANGUAGE']) || $GLOBALS['CURRENT_LANGUAGE'] == 'tr'): ?>
        <img src="/resources/images/company_logo_tr.png" alt="Şirket Logosu">
      <?php endif; ?>
      <?php if ($GLOBALS['CURRENT_LANGUAGE'] == 'en'): ?>
        <img src="/resources/images/company_logo_en.png" alt="Company Logo">
      <?php endif; ?>
      <div class="flex space-x-4 mt-4">
        <a href="" aria-label="Youtube" target="_blank" class="hover:text-white text-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
            <path d="M10 15l5.19-3L10 9v6zm12-3c0 2.76-.24 4.32-.43 5.13a2.62 2.62 0 01-1.84 1.84C18.93 19.32 12 19.32 12 19.32s-6.93 0-7.73-.35a2.62 2.62 0 01-1.84-1.84C2.24 16.32 2 14.76 2 12s.24-4.32.43-5.13A2.62 2.62 0 014.27 5C5.07 4.68 12 4.68 12 4.68s6.93 0 7.73.35a2.62 2.62 0 011.84 1.84C21.76 7.68 22 9.24 22 12z"/>
          </svg>
        </a>
        <a href="" aria-label="Instagram" target="_blank" class="hover:text-white text-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
            <path d="M7 2C4.2 2 2 4.2 2 7v10c0 2.8 2.2 5 5 5h10c2.8 0 5-2.2 5-5V7c0-2.8-2.2-5-5-5H7zm10 2a3 3 0 013 3v10a3 3 0 01-3 3H7a3 3 0 01-3-3V7a3 3 0 013-3h10zm-5 3a5 5 0 100 10 5 5 0 000-10zm0 2a3 3 0 110 6 3 3 0 010-6zm4.5-.25a.75.75 0 100 1.5.75.75 0 000-1.5z"/>
          </svg>
        </a>
        <a href="" aria-label="Facebook" target="_blank" class="hover:text-white text-xl">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-10 h-10" fill="currentColor" viewBox="0 0 24 24">
            <path d="M22 12a10 10 0 10-11.5 9.87v-6.99h-2.6v-2.88h2.6V9.41c0-2.57 1.53-3.99 3.87-3.99 1.12 0 2.29.2 2.29.2v2.52h-1.29c-1.27 0-1.67.79-1.67 1.6v1.91h2.84l-.45 2.88h-2.39v6.99A10 10 0 0022 12z"/>
          </svg>
        </a>
      </div>
    </div>

    <!-- Quick Links -->
    <div>
      <h3 class="text-xl lg:text-xl font-semibold mb-1 text-white"><?php dict('quick-links') ?></h3>
      <ul class="space-y-2 lg:text-sm">
        <li><a href="<?php localized_link('')?>" class="hover:text-white"><?php dict('homepage')?></a></li>
        <li><a href="<?php localized_link('products')?>" class="hover:text-white"><?php dict('products')?></a></li>
        <li><a href="<?php localized_link('services-solutions')?>" class="hover:text-white"><?php dict('services-solutions')?></a></li>
        <li><a href="<?php localized_link('about-us')?>" class="hover:text-white"><?php dict('about-us')?></a></li>
        <li><a href="<?php localized_link('contact')?>" class="hover:text-white"><?php dict('contact')?></a></li>
      </ul>
    </div>

    <!-- Contact Info -->
    <div>
      <h3 class="text-xl lg:text-xl font-semibold mb-1 text-white"><?php dict('contact') ?></h3>
      <ul class="space-y-2 lg:text-sm">
        <li><strong><?php dict('address-1')?>: </strong>Ankara</li>
        <li><strong><?php dict('address-2')?>: </strong>Eskişehir</li>
        <li><strong><?php dict('phone')?>: </strong> <a href="" class="hover:text-white">+90 000 111 2233</a></li>
        <li><strong><?php dict('email')?>: </strong> <a href="" class="hover:text-white">company@engineering.com</a></li>
      </ul>
      
    </div>
  </div>
  <div class="mt-10 text-center text-gray-500 lg:text-xs">
    &copy; 2026 Özerk Özay. <?php dict('all-rights-reserved')?>.
  </div>
</footer>

</body>
</html>