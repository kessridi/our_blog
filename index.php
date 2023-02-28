<?php
require_once __DIR__ .'/utilities/Page.php';

$indexPage = new Page();

$indexPage->renderPage('index.html.twig');
