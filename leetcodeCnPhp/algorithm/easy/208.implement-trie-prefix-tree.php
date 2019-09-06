<?php

class Trie
{
    public $data = [];
    /**
     * Initialize your data structure here.
     */
    public function __construct()
    {
    }
  
    /**
     * Inserts a word into the trie.
     * @param String $word
     * @return NULL
     */
    function insert($word)
    {
        array_push($this->data, $word);
    }
  
    /**
     * Returns if the word is in the trie.
     * @param String $word
     * @return Boolean
     */
    function search($word)
    {
        return in_array($word, $this->data);
    }
  
    /**
     * Returns if there is any word in the trie that starts with the given prefix.
     * @param String $prefix
     * @return Boolean
     */
    function startsWith($prefix)
    {
        $len = strlen($prefix);
        if ($len == 0) {
            return 0;
        }
        if (empty($this->data)) {
            return false;
        }
        foreach ($this->data as $data) {
            if (substr($data, 0, $len) == $prefix) {
                return true;
            }
        }
        return false;
    }
}

/**
 * Your Trie object will be instantiated and called as such:
 * $obj = Trie();
 * $obj->insert($word);
 * $ret_2 = $obj->search($word);
 * $ret_3 = $obj->startsWith($prefix);
 */
