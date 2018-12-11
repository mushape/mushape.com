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
            <div class="offset2 span8 userCoverContainer">

            </div>
        </div>
        <div class="row-fluid">
            <div class="offset2 span2">
                <p><?php e($user['description']); ?></p>
                <p>
                    <?php e($user['location']); ?>
                </p>
            </div>
            <div class="span6" id="userFeed">
                feed do usuario
            </div>
        </div>
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
