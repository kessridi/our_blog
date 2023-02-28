<?php
require_once __DIR__ .'/utilities/Page.php';

$indexPage = new Page();
$msg ="hello";
$indexPage->renderPage('accueil.html.twig',['msgAccueil'=>$msg]);
