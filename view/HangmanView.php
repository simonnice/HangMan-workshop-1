<?php

/*
One render function to render everything to
ther client in the beginning
 */
class HangmanView
{
    public function showChosenCharacter($chosenCharacter) {
         // Debugging purpose. The rendering should be handle in one of the View classes.
         if ($chosenCharacter) {
            echo 'You chose the character '  . $chosenCharacter .''; 
         } 
    }

    public function showWrongCharacters($wrongChosenCharacter) {
        
    }
}

