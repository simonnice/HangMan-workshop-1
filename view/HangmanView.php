<?php

/*
One render function to render everything to
ther client in the beginning
 */
class HangmanView
{
    public function show($choosenCharacter) {
         // Debugging purpose. The rendering should be handle in one of the View classes.
         echo 'this is you chosen char ' + $choosenCharacter;
    }
}

