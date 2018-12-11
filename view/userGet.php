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
        <div class="row-fluid">
            <div class="offset2 span8 userCoverContainer">

            </div>
        </div>
        <div class="row-fluid">
            <div class="offset2 span2">
                <strong>
                    Sobre:
                </strong>
                <p>Web developer PHP</p>
                <p><a href="#">Rio Grande do Sul, Brasil</a></p>
            </div>
            <div class="span6">
                msg
            </div>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
