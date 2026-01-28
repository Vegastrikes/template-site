<!doctype html>
<html lang="<?php echo $GLOBALS['CURRENT_LANGUAGE']?>" class="h-full bg-gray-50">
<head>
    <meta charset="UTF-8">
    <title><?php echo $GLOBALS['PAGE_CURRENT_TITLE']; ?></title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/output.css?v=<?php echo time(); ?>">
</head>

<body class="h-full">
    <script>
        window.ISDESKTOP = <?php echo json_encode($GLOBALS['ISDESKTOP']);?>
    </script>

    <?php if (!$GLOBALS['ISDESKTOP']): ?>
        <script src="/js/navbar.js"></script>
    <?php endif; ?>

    