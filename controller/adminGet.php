<?php
$section=segment(2);
$users=[
    ['name'=>'Nome do usuario','type'=>'tipo de conta']
];
$data=[
    'users'=>$users
];
switch($section){
    case 'users':
    view('admin/usersGet',$data);
    break;
    default:
    view('404');
    break;
}
?>
