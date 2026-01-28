<?php

global $ROUTES;

$ROUTES = [
    'tr' => [
        '/' => function () {controller_page('views/pages/home.php');},

        LANGUAGE_URI['tr']['not-found'] => function () {controller_page('views/pages/not_found.php');},

        LANGUAGE_URI['tr']['about-us'] => function () {controller_page('views/pages/about_us/about_us.php');},
        LANGUAGE_URI['tr']['about-us'].'/'.LANGUAGE_URI['tr']['mission-vision-values'] => function () {controller_page('views/pages/about_us/mission_vision_values.php');},
        LANGUAGE_URI['tr']['about-us'].'/'.LANGUAGE_URI['tr']['certificates'] => function () {controller_page('views/pages/about_us/certificates.php');},

        LANGUAGE_URI['tr']['products'] => function () {controller_page('views/pages/products/products.php');},
            LANGUAGE_URI['tr']['products'].'/'.LANGUAGE_URI['tr']['product-group-1'] => function () {controller_page('views/pages/products/product-group-1/product_group_1.php');},
                LANGUAGE_URI['tr']['products'].'/'.LANGUAGE_URI['tr']['product-group-1'].'/'.LANGUAGE_URI['tr']['group-1-product-1'] => function () {controller_page('views/pages/products/product-group-1/group_1_product_1.php');},
                LANGUAGE_URI['tr']['products'].'/'.LANGUAGE_URI['tr']['product-group-1'].'/'.LANGUAGE_URI['tr']['group-1-product-2'] => function () {controller_page('views/pages/products/product-group-1/group_1_product_2.php');},
                LANGUAGE_URI['tr']['products'].'/'.LANGUAGE_URI['tr']['product-group-1'].'/'.LANGUAGE_URI['tr']['group-1-product-3'] => function () {controller_page('views/pages/products/product-group-1/group_1_product_3.php');},

            LANGUAGE_URI['tr']['products'].'/'.LANGUAGE_URI['tr']['product-1'] => function () {controller_page('views/pages/products/product_1.php');},
            LANGUAGE_URI['tr']['products'].'/'.LANGUAGE_URI['tr']['product-2'] => function () {controller_page('views/pages/products/product_2.php');},
        
        LANGUAGE_URI['tr']['services-solutions'] => function () {controller_page('views/pages/services_solutions.php');},
        LANGUAGE_URI['tr']['solutions'].'/'.LANGUAGE_URI['tr']['solution-1'] => function () {controller_page('views/pages/solutions/solution_1.php');},
        LANGUAGE_URI['tr']['solutions'].'/'.LANGUAGE_URI['tr']['solution-2'] => function () {controller_page('views/pages/solutions/solution_2.php');},

        LANGUAGE_URI['tr']['services'].'/'.LANGUAGE_URI['tr']['service-1'] => function () {controller_page('views/pages/services/service_1.php');},

        LANGUAGE_URI['tr']['contact'] => function () {controller_page('views/pages/contact.php');},
    ],
    'en' => [
        '/' => function () {controller_page('views/pages/home.php');},

        LANGUAGE_URI['en']['not-found'] => function () {controller_page('views/pages/not_found.php');},

        LANGUAGE_URI['en']['about-us'] => function () {controller_page('views/pages/about_us/about_us.php');},
        LANGUAGE_URI['en']['about-us'].'/'.LANGUAGE_URI['en']['mission-vision-values'] => function () {controller_page('views/pages/about_us/mission_vision_values.php');},
        LANGUAGE_URI['en']['about-us'].'/'.LANGUAGE_URI['en']['certificates'] => function () {controller_page('views/pages/about_us/certificates.php');},

        LANGUAGE_URI['en']['products'] => function () {controller_page('views/pages/products/products.php');},
            LANGUAGE_URI['en']['products'].'/'.LANGUAGE_URI['en']['product-group-1'] => function () {controller_page('views/pages/products/product-group-1/product_group_1.php');},
                LANGUAGE_URI['en']['products'].'/'.LANGUAGE_URI['en']['product-group-1'].'/'.LANGUAGE_URI['en']['group-1-product-1'] => function () {controller_page('views/pages/products/product-group-1/group_1_product_1.php');},
                LANGUAGE_URI['en']['products'].'/'.LANGUAGE_URI['en']['product-group-1'].'/'.LANGUAGE_URI['en']['group-1-product-2'] => function () {controller_page('views/pages/products/product-group-1/group_1_product_2.php');},
                LANGUAGE_URI['en']['products'].'/'.LANGUAGE_URI['en']['product-group-1'].'/'.LANGUAGE_URI['en']['group-1-product-3'] => function () {controller_page('views/pages/products/product-group-1/group_1_product_3.php');},

            LANGUAGE_URI['en']['products'].'/'.LANGUAGE_URI['en']['product-1'] => function () {controller_page('views/pages/products/product_1.php');},
            LANGUAGE_URI['en']['products'].'/'.LANGUAGE_URI['en']['product-2'] => function () {controller_page('views/pages/products/product_2.php');},
        
        LANGUAGE_URI['en']['services-solutions'] => function () {controller_page('views/pages/services_solutions.php');},
        LANGUAGE_URI['en']['solutions'].'/'.LANGUAGE_URI['en']['solution-1'] => function () {controller_page('views/pages/solutions/solution_1.php');},
        LANGUAGE_URI['en']['solutions'].'/'.LANGUAGE_URI['en']['solution-2'] => function () {controller_page('views/pages/solutions/solution_2.php');},

        LANGUAGE_URI['en']['services'].'/'.LANGUAGE_URI['en']['service-1'] => function () {controller_page('views/pages/services/service_1.php');},

        LANGUAGE_URI['en']['contact'] => function () {controller_page('views/pages/contact.php');},
    ],
];