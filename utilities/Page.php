<?php
require_once  __DIR__ .'/../vendor/autoload.php';

class Page {

    private $twig;

public function __construct(){
$loader= new \Twig\Loader\FilesystemLoader( __DIR__ .'/../templates');
$this->twig = new \Twig\Environment($loader);

session_start();

if(isset($_SESSION['donnes']) && !empty($_SESSION['donnes'])) {
    echo 'Set and not empty, and no undefined index error!';
 }

}

public function renderPage(string $pageTitle, array $params=[]){
    echo $this->twig->render($pageTitle, $params);  

}

public function redirectPage(string $page){
    header('location: '.$page);

}


} 