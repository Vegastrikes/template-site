<?php

function route(string $url, array $routes): void
{
    $uri = parse_url($url);

    $data = $url;

    $pathString = $uri['path'];
    $pathArray = array_values(array_filter(explode('/', $pathString)));

    $data = $pathArray;
    $languageCookie = $_COOKIE['language'] ?? null;

    if (count($pathArray) === 0) {
        $languageTarget = $languageCookie ?? 'tr';
        setcookie("language", $languageTarget, time() + 60 * 60 * 24, '/');
        header("Location: ".DOMAIN."/".$languageTarget);
        exit;
        return;
    }

    $pathHasLanguage = in_array($pathArray[0], AVAILABLE_LANGUAGES);

    if($pathHasLanguage) {
        $languageTarget = $pathArray[0];
        $pathTarget = '/';

        setcookie("language", $languageTarget, time() + 60 * 60 * 24, '/');
        load_dictionary($languageTarget);

        array_shift($pathArray);

        if (count($pathArray) !== 0) {
            $languageOfOriginalPath= get_language_from_word($pathArray[0]);
            if ($languageOfOriginalPath !== $languageTarget) {
                $translatedPath = translate_path($pathArray, $languageTarget);
                if (array_key_exists($translatedPath, $routes[$languageTarget])) {
                    header("Location: ".DOMAIN."/".$languageTarget.'/'.$translatedPath);
                    exit;
                    return;
                }
            }

            $pathTarget = implode('/', $pathArray);
        }

        if (!array_key_exists($pathTarget, $routes[$languageTarget])) {
            http_response_code(404);
            $translatedPath = translate_path('not-found', $languageTarget);
            set_page_title($languageTarget, $translatedPath);
            $callback = $routes[$languageTarget][$translatedPath];
            $callback();
            return;
        }
        
        set_page_title($languageTarget, $pathTarget);
        $callback = $routes[$languageTarget][$pathTarget];
        $callback();
        return;
    }
    else {
        $languageTarget = $languageCookie ?? 'tr';
        setcookie("language", $languageTarget, time() + 60 * 60 * 24, '/');
        header("Location: ".DOMAIN."/".$languageTarget);
        exit;
        return;
    }
}

function get_language_from_word(string $word): ?string {
    foreach (LANGUAGE_URI as $langCode => $langWord) {
        if (in_array($word, $langWord, true)) {
            return $langCode;
        }
    }
    return null; // Not found
}

function translate_path($pathArray, $languageTarget, $returnArray = false) {
    $path = $pathArray;

    if (is_string($path))
        $path = array_values(array_filter(explode('/', $path)));

    if (count($path) === 0)
        return null;
    if (in_array($path[0], AVAILABLE_LANGUAGES))
        array_shift($path);
    if (count($path) === 0)
        return implode('/', $path);

    $languageInitial = get_language_from_word($path[0]);

    if (is_null($languageInitial))
        return null;

    $pathResult = [];
    $pathEnglish = [];

    foreach ($path as $key => $value) {
        foreach (LANGUAGE_URI[$languageInitial] as $k => $v) {
            if ($value === $v) {
                array_push($pathEnglish, $k);
                break;
            }
        }
    }

    if ($languageTarget !== 'en') {
        foreach ($pathEnglish as $key => $value) {
            foreach (LANGUAGE_URI[$languageTarget] as $k => $v) {
                if ($value === $k) {
                    array_push($pathResult, $v);
                    break;
                }
            }
        }
    }
    else {
        $pathResult = $pathEnglish;
    }

    if ($returnArray)
        return $path_result;

    return implode('/', $pathResult);
}

function _console($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}

function load_dictionary($lang = 'tr') {
    global $DICT;
    global $CURRENT_LANGUAGE;
    global $DICT_PRODUCTS;
    global $DICT_PRODUCT_GROUP_1;
    global $DICT_ABOUT_US;
    global $DICT_PRODUCTS_CONTENT;
    global $DICT_SOLUTIONS_CONTENT;
    global $DICT_SERVICES_SOLUTIONS;
    global $DICT_HOME;

    $lang_file = BASE_PATH.'/languages/'.$lang.'/dict.php';

    if (file_exists($lang_file)) {
        include $lang_file;
    } else {
        die("Language file not found: $lang_file");
    }

    $lang_file = BASE_PATH.'/languages/'.$lang.'/dict_products.php';

    if (file_exists($lang_file)) {
        include $lang_file;
    } else {
        die("Language file not found: $lang_file");
    }

    $lang_file = BASE_PATH.'/languages/'.$lang.'/dict_home.php';

    if (file_exists($lang_file)) {
        include $lang_file;
    } else {
        die("Language file not found: $lang_file");
    }

    $lang_file = BASE_PATH.'/languages/'.$lang.'/dict_product_group_1.php';

    if (file_exists($lang_file)) {
        include $lang_file;
    } else {
        die("Language file not found: $lang_file");
    }

    $lang_file = BASE_PATH.'/languages/'.$lang.'/dict_about_us.php';

    if (file_exists($lang_file)) {
        include $lang_file;
    } else {
        die("Language file not found: $lang_file");
    }

    $lang_file = BASE_PATH.'/languages/'.$lang.'/dict_products_content.php';

    if (file_exists($lang_file)) {
        include $lang_file;
    } else {
        die("Language file not found: $lang_file");
    }

    $lang_file = BASE_PATH.'/languages/'.$lang.'/dict_solutions_content.php';

    if (file_exists($lang_file)) {
        include $lang_file;
    } else {
        die("Language file not found: $lang_file");
    }

    $lang_file = BASE_PATH.'/languages/'.$lang.'/dict_services_solutions.php';

    if (file_exists($lang_file)) {
        include $lang_file;
    } else {
        die("Language file not found: $lang_file");
    }

    $CURRENT_LANGUAGE = $lang;
}

function load_dictionary_meta() {
    global $DICT_META;

    $lang_file = BASE_PATH.'/languages/meta.php';

    if (file_exists($lang_file)) {
        include $lang_file;
        if (isset($DICT_META) && is_array($DICT_META)) {
            $GLOBALS['DICT_META'] = $DICT_META;
        }
    } else {
        die("Language file not found: $lang_file");
    }
}

function get_path_from_uri() {
    $uri = parse_url($_SERVER['REQUEST_URI']);
    $pathString = $uri['path'];

    return $pathString;
}

function change_language_link($language) {
    $result = $language.'/'.translate_path(get_path_from_uri(), $language);
    
    if (str_ends_with($result, '/'))
    $result = substr($result, 0, -1);

    echo '/'.$result;
}

function localized_link($path, $sectionID = null) {
    $uri = parse_url($_SERVER['REQUEST_URI']);
    $uriPathString = $uri['path'];
    $uriPathArray = array_values(array_filter(explode('/', $uriPathString)));

    $currentLanguage = $uriPathArray[0];

    $path = array_values(array_filter(explode('/', $path)));
    $path = translate_path($path, $currentLanguage);
    
    $finalLink = '/'.$currentLanguage;

    if (!is_null($path))
        $finalLink = $finalLink.'/'.$path;

    if (!is_null($sectionID))
        $finalLink = $finalLink.'#'.$sectionID;

    echo $finalLink;
}

function set_page_title($language, $path) {
    global $PAGE_TITLES;
    global $PAGE_CURRENT_TITLE;

    $PAGE_CURRENT_TITLE = $PAGE_TITLES[$language][$path];

    if (is_null($PAGE_CURRENT_TITLE)) {
        var_dump("PAGE TITLE YOK");
    }
}

function dict($key) {
    echo($GLOBALS['DICT'][$key]);
}

function get_dict_products() {
    return $GLOBALS['DICT_PRODUCTS'];
}

function get_dict_services_solutions() {
    return $GLOBALS['DICT_SERVICES_SOLUTIONS'];
}

function get_dict_product_group_1() {
    return $GLOBALS['DICT_PRODUCT_GROUP_1'];
}

function dict_home() {
    return $GLOBALS['DICT_HOME'];
}

function dict_products_content($key) {
    return $GLOBALS['DICT_PRODUCTS_CONTENT'][$key];
}

function dict_solutions_content($key) {
    return $GLOBALS['DICT_SOLUTIONS_CONTENT'][$key];
}

function dict_about_us($key) {
    return $GLOBALS['DICT_ABOUT_US'][$key];
}