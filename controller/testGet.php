<?php
$user=[
    'uuid'=>'Qe8ETMQxwts',
    'name'=>'Anderson Ismael'
];
$message=[
    'site'=>'site.com',
    'title'=>'Dólar continua subindo',
    'link'=>'https://site.com/pagina',
    'uuid'=>'Qe8ETMQxwts',
    'message'=>'Olá mundo',
    'date'=>time()
];
$data=[
    'message'=>$message,
    'user'=>$user,
    'title'=>$message['title']
];
$content=view('media/message',$data,false);
$data=[
    'title'=>$data['title'],
    'content'=>$content
];
view('msg',$data);
?>
