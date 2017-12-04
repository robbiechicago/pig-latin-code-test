<?php  

  if ($_GET['submit']) {
    $word = $_GET['translate-me'];
    $pig = new Pig();
    $new_word = $pig->translate($word);
  }


  class Pig {

    //use regex to find words beginning with vowels
    function vowel_sound_start($word) {
      if (preg_match('/^[aeiou]/i', $word)) {
        return true;
      }
      return false;
    }

    //translation method
    public function translate($word) {

      //if word begins with a vowel
      if ($this->vowel_sound_start($word)) {
        return $word.'-yay';
      }

      //deal with qu words
      if (strtolower(substr($word, 0, 2)) == 'qu') {
        return substr($word, 2).'-quay';
      }

      //all other consonant words
      $pos = strcspn(strtolower($word), "aeiou");
      $consonants = substr($word, 0, $pos);
      $rest_of_word = substr($word, $pos);
      return $rest_of_word.'-'.$consonants.'ay';
    }

  }

?>