<?php
$data=[
    'site'=>'site.com',
    'title'=>'Dólar continua subindo',
    'link'=>'https://site.com/pagina'
];
$content=view('media/link',$data,false);
$data=[
    'title'=>$data['title'],
    'content'=>$content
];
view('msg',$data);
?>
