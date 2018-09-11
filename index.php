<?php

//INCLUDE THE FILES NEEDED...
require_once 'view/LayoutView.php';
require_once 'view/HangManView.php';
require_once 'view/ButtonView.php';
require_once 'controller/GameController.php';
require_once 'model/WordGenerator.php';
require_once 'model/HangmanState.php';


//MAKE SURE ERRORS ARE SHOWN... MIGHT WANT TO TURN THIS OFF ON A PUBLIC SERVER
error_reporting(E_ALL);
ini_set('display_errors', 'On');

//CREATE OBJECTS OF THE VIEWS
$layoutView = new LayoutView();
$buttons = new ButtonView();
$state = new \model\HangManState(WordGenerator::generateWord());
$gameController = new GameController($state, $buttons);

$layoutView->render($buttons);
