<?php

/*
One render function to render everything to
ther client in the beginning
 */
class HangmanView
{

    public $wrongCharacterArray = array();

    public function showChosenCharacter($chosenCharacter) {
         // Debugging purpose. The rendering should be handle in one of the View classes.
         if ($chosenCharacter) {
            echo 'You chose the character '  . $chosenCharacter .''; 
         } 
    }

    public function showWrongCharacters($wrongChosenCharacter) {
        if(count($wrongChosenCharacter) > 0) {
            array_push($this->wrongCharacterArray, $wrongChosenCharacter[0]);
            
            foreach ($this->wrongCharacterArray as $char) {
                echo '<div> Wrong characters chosen: ' . $char .' </div>';
            }
        }
    }
}

