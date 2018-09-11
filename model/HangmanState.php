<?php

namespace model;

class HangmanState {

    private $word;
    private $wrongCharacters = array();
    private $correctCharacters = array();

    public function __construct(string $word) {
        $this->word = $word;

    }

    public function playCharacter(string $choosenCharacter) {

        if ($this->isMatch($choosenCharacter)) {
            $this->correctCharacters[] = $choosenCharacter;
        } else {
            $this->wrongCharacters[] = $choosenCharacter;
        }
    }

    /**
     * Test if character is in word.
     *
     * @param string $testChar
     * @return boolean
     */
    private function isMatch(string $testChar) {
        return (strpos($this->word, $testChar) > 0)
        ? true
        : false;
    }
}
