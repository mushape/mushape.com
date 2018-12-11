<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/nav'); ?>
    <div class="container-fluid">
        <div class="row">
            <div class="offset3 span2">
                <strong>
                    Sobre:
                </strong>
                <p>Web developer PHP</p>
            </div>
            <div class="span4">
                msg
            </div>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
