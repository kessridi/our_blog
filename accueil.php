<?php
require_once __DIR__ .'/utilities/Page.php';

$indexPage = new Page();
$msg ="hello";
$tab =[
'nom'=>'zahra',
'prénom'=> 'hammami',
'age'=>'27',
];
$indexPage->renderPage('accueil.html.twig',[
    'msgAccueil'=>$msg,
    'tab'=>$tab

]);

