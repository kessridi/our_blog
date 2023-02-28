<?php
require_once __DIR__ .'/utilities/Page.php';

$contactPage = new Page();

if(isset($_POST)){
    $contactPage->renderPage('contact.html.twig');
}else{
    $donneContact =$_POST;
    $_SESSION['donnes'][] = $donneContact;
    $contactPage->redirectPage('index.php');
}
