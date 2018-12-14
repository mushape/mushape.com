<!DOCTYPE html>
<html lang="pt" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Resultados da busca por "<?php e($q); ?>"</title>
    <?php view('inc/header'); ?>
</head>
<body>
    <?php view('inc/nav'); ?>
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="offset1 span6">
                <form class="" action="/search/all" method="post">
                    <div class="input-append searchBox">
                        <input class="input-block-level" id="appendedInputButton" type="text" value="<?php e($q); ?>">
                        <button class="btn" type="button">
                            <i class="icon-search"></i>
                        </button>
                    </div>
                </form>
                <ul class="nav nav-pills">
                    <li class="active">
                        <a href="/search/all?q=<?php e($q); ?>">
                            Tudo
                        </a>
                    </li>
                    <li>
                        <a href="/search/imagens?q=<?php e($q); ?>">
                            Imagens
                        </a>
                    </li>
                </ul>
            </div>
        </div><!--row-fluid-->
        <div class="row-fluid">
            <div class="span12">
                <hr>
            </div>
        </div><!--row-fluid-->
        <div class="row-fluid">
            <div class="offset1 span6">
                <?php
                $image=[
                    'caption'=>'Que bicho é esse voando sobre o gelo?',
                    'src'=>'/img/ice.jpg',
                    'created_at'=>time(),
                    'uuid'=>'Ie8ETMQxwts'
                ];
                $message=[
                    'site'=>'site.com',
                    'title'=>'Dólar continua subindo',
                    'link'=>'https://site.com/pagina',
                    'uuid'=>'Me8ETMQxwts',
                    'message'=>'Olá mundo olá mundo olá mundo olá mundo olá mundo olá mundo olá mundo olá mundo olá mundo olá mundo',
                    'created_at'=>time()
                ];
                $user=[
                    'uuid'=>'Ue8ETMQxwts',
                    'name'=>'Anderson Ismael'
                ];
                $data=[
                    'image'=>$image,
                    'message'=>$message,
                    'user'=>$user,
                    'title'=>'Titulo'
                ];
                view('media/message',$data);
                ?>
            </div>
        </div><!--row-fluid-->
    </div> <!--container-->
    <?php view('inc/footer'); ?>
</body>
</html>
