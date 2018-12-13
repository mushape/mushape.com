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
$content=view('media/image',$data,false);
$data=[
    'title'=>$data['title'],
    'content'=>$content
];
view('msg',$data);
?>
