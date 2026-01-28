<?php
    const BASE_PATH = __DIR__;
    const DOMAIN = "http://localhost:8000";
    CONST AVAILABLE_LANGUAGES = array('tr','en');
    const LANGUAGE_URI = [
        'tr' => [
            'not-found' => 'sayfa-bulunamadi',

            'about-us' => 'hakkimizda',
                    'mission-vision-values' => 'misyon-vizyon-degerler',
                    'certificates' => 'sertifikalar',
            
            'products' => 'urunler',
                'product-group-1' => 'urun-grubu-1',
                    'group-1-product-1' => 'grup-1-urun-1',
                    'group-1-product-2' => 'grup-1-urun-2',
                    'group-1-product-3' => 'grup-1-urun-3',
                'product-1' => 'urun-1',
                'product-2' => 'urun-2',
            
            'services-solutions' => 'hizmetler-cozumler',
            'solutions' => 'cozumler',
                'solution-1' => 'cozum-1',
                'solution-2' => 'cozum-2',

            'services' => 'hizmetler',
                'service-1' => 'hizmet-1',
            
            'contact' => 'iletisim',
        ],
        'en' => [
            'not-found' => 'not-found',

            'about-us' => 'about-us',
                    'mission-vision-values' => 'mission-vision-values',
                    'certificates' => 'certificates',

            'products' => 'products',
                    'product-group-1' => 'product-group-1',
                        'group-1-product-1' => 'group-1-product-1',
                        'group-1-product-2' => 'group-1-product-2',
                        'group-1-product-3' => 'group-1-product-3',
                    'product-1' => 'product-1',
                    'product-2' => 'product-2',

            'services-solutions' => 'services-solutions',
            'solutions' => 'solutions',
                'solution-1' => 'solution-1',
                'solution-2' => 'solution-2',

            'services' => 'services',
                'service-1' => 'service-1',
            
            'contact' => 'contact',
        ],
        
    ];
    $ROUTES;
    $PAGE_CURRENT_TITLE;
    $PAGE_TITLES;
    $CONTENT = "<div>SOMETHING WENT WRONG</div>";
    $CURRENT_LANGUAGE;
    $ISDESKTOP;
?>