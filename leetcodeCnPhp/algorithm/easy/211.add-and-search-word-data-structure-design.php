<?php

class WordDictionary {
    public $data = [];
    /**
     * Initialize your data structure here.
     */
    function __construct() {
        
    }
  
    /**
     * Adds a word into the data structure.
     * @param String $word
     * @return NULL
     */
    function addWord($word) {
        array_push($this->data, $word);
    }
  
    /**
     * Returns if the word is in the data structure. A word could contain the dot character '.' to represent any one letter.
     * @param String $word
     * @return Boolean
     */
    function search($word) {
        if (in_array($word, $this->data)) {
            return true;
        }
        foreach ($this->data as $data) {
            if (preg_match('/'.$word.'/',  $data)) {
                return true;
            }
        }
        
        return false;
    }
}
$word_dict = new WordDictionary();
$word_dict->addWord('at');
$word_dict->addWord('and');
$word_dict->addWord('an');
$word_dict->addWord('add');
$word_dict->search('a');
$word_dict->search('.at');
$word_dict->addWord('bat');
$word_dict->search('.at');
$word_dict->search('an.');
$word_dict->search('a.d.');
$word_dict->search('b.');
$word_dict->search('a.d');
$word_dict->search('.');




