<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php e($title); ?></title>
    <?php view('inc/header'); ?>
    <style media="screen">
    /* Large desktop */
    @media (min-width: 1200px) {
        body {
            padding-top: 0px;
        }
    }
    </style>
</head>
<body>
    <?php print $content; ?>
    <?php view('inc/footer'); ?>
</body>
</html>
