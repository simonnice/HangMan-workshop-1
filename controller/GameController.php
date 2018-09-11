<?php

// TODO: Make the provided word persistent.
// TODO: Test if all characters has been found.
// TODO: Count number of tries.


class GameController
{
   
    /**
     * Constructor for GameController.
     * Please provide the word of the game.
     *
     * @param string $word
     */
    public function __construct(\model\HangmanState $state, $buttons, $hangMan)
    {
        // The word should be saved between button clicks.
        $this->state = $state;
        $this->buttonView = $buttons;
        $this->hangManView = $hangMan;
        $this->handleCharacterButtonClick();
       
    }

    /**
     * Handle selected character.
     *
     * @return void
     */
    private function handleCharacterButtonClick()
    {
        if ($this->buttonView->userPlaysCharacter() == true) {
            $this->hangManView->showChosenCharacter($this->state->playCharacter($this->buttonView->getPlayedCharacter()));  
        }

        $this->hangManView->showWrongCharacters($this->state->getWrongCharacters());
    }
}
