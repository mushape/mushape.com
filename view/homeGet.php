<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Hello World</title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/nav'); ?>
    <div class="container">
        <div class="offset3 span6 text-center">
            <img class="img-circle" data-src="holder.js/200x200">
            <p>
                <form class="" action="/" method="get">
                    <input type="text" class="input-block-level" name="q">
                    <button type="submit">Pesquisar</button>
                </form>
            </p>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
