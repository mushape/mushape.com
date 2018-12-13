<?php
$user=[
    'uuid'=>'Ue8ETMQxwts',
    'name'=>'Anderson Ismael'
];
$message=[
    'site'=>'site.com',
    'title'=>'Dólar continua subindo',
    'link'=>'https://site.com/pagina',
    'uuid'=>'Me8ETMQxwts',
    'message'=>'Olá mundo olá mundo olá mundo olá mundo olá mundo olá mundo olá mundo olá mundo olá mundo olá mundo',
    'date'=>time()
];
$data=[
    'message'=>$message,
    'user'=>$user,
    'title'=>$message['title']
];
$content=view('media/link',$data,false);
$data=[
    'title'=>$data['title'],
    'content'=>$content
];
view('msg',$data);
?>
