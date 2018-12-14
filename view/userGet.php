<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title><?php e($user['name']); ?></title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/nav'); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="offset2 span8" id="userCover">
                <a href="#">
                    <img src="/img/eu.jpg" alt="" width="175" height="175" class="img-polaroid">
                </a>
                <h2>Anderson Ismael</h2>
            </div>
        </div>
        <div class="row-fluid visible-desktop">
            <div class="offset4 span6" id="userMenu">
                <ul class="nav nav-pills">
                    <li><a href="/link1">Link</a></li>
                    <li><a href="/link2">Link</a></li>
                    <li><a href="/link3">Link</a></li>
                </ul>
            </div>
        </div>
        <div class="row-fluid">
            <div class="offset2 span2">
                <hr class="visible-phone">
                <div id="userMeta">
                    <p>
                        <?php e($user['description']); ?>
                    </p>
                    <p>
                        <?php e($user['location']); ?>
                    </p>
                </div>
            </div>
            <div class="span6" id="userFeed">
                feed do usuario
            </div>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
