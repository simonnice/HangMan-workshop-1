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
            return $this->correctCharacters[0];
        } else {
            $this->wrongCharacters[] = $choosenCharacter;
            return $this->wrongCharacters[0];
        }
    }

    public function getWrongCharacters() {
        return $this->wrongCharacters;
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
