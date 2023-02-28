<?php
require_once __DIR__ .'/utilities/Page.php';

$indexPage = new Page();
$msg ="hello";
$nom ="hammami";
$prenom ="zahra";
$age = 27;
$url ='templates\image\pexels-fidan-nazim-qizi-15640424.jpg';
$indexPage->renderPage('accueil.html.twig',[
    'msgAccueil'=>$msg,
    'nom'=>$nom,
    'prenom'=>$prenom,
    'age'=>$age,
    'url'=>$url,
]);



