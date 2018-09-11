<?php

// TODO: Make the provided word persistent.
// TODO: Test if all characters has been found.
// TODO: Count number of tries.

require_once 'view/HangManView.php';

class GameController
{
   
    /**
     * Constructor for GameController.
     * Please provide the word of the game.
     *
     * @param string $word
     */
    public function __construct(\model\HangmanState $state, $buttons)
    {
        // The word should be saved between button clicks.
        $this->state = $state;
        $this->view = $buttons;
        $this->handleCharacterButtonClick();
    }

    /**
     * Handle selected character.
     *
     * @return void
     */
    private function handleCharacterButtonClick()
    {
        if ($this->view->userPlaysCharacter()) {
            $this->state->playCharacter($this->view->getPlayedCharacter());            
            
            //$this->HangManView->show($this->state->playCharacter($this->view->getPlayedCharacter());
        }
    }
}
