<?php
ini_set('display_errors', "On");
ini_set('error_reporting', E_ALL);

require(__DIR__.'/../vendor/autoload.php');

use App\Views\View;

$View = new View;

echo $View->render('TestViews');