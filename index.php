<?php
include_once 'globals.php';
include_once 'functions.php';
include_once 'views/controller.php';
include_once 'views/partials/components/products.php';
include_once 'views/partials/components/solutions.php';
include_once 'routes.php';
include_once 'page_titles.php';

$GLOBALS['ISDESKTOP'] = !preg_match('/Mobile|Android|iPhone|iPad|Tablet/i', $_SERVER['HTTP_USER_AGENT']) ? true : false;

load_dictionary_meta();
route($_SERVER['REQUEST_URI'], $ROUTES);