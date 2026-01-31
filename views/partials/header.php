<!doctype html>
<html lang="<?php echo $GLOBALS['CURRENT_LANGUAGE']?>" class="h-full">
<head>
    <meta charset="UTF-8">
    <title><?php echo $GLOBALS['PAGE_CURRENT_TITLE']; ?></title>
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/output.css?v=<?php echo time(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class="h-full bg-gray-100">
    <script>
        window.ISDESKTOP = <?php echo json_encode($GLOBALS['ISDESKTOP']);?>
    </script>

    <?php if (!$GLOBALS['ISDESKTOP']): ?>
        <script src="/js/navbar.js"></script>
    <?php endif; ?>

    