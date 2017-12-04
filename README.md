# pig-latin-code-test

This project is a simple Pig Latin translator.  

Rules:

Only letters are allowed, and only one word at a time.  Words beginning with a vowel simply add the letters '-yay' to the end. Words beginning with a consonant move the first consonant cluster to the end of the word and add 'ay.

So, 'egg' becomes 'egg-yay', and pig becomes 'ig-pay'.

The translation is done with a small php file which contains a Pig class.  This class filters out non-alphabetical characters and spaces, and translates the word based on it's beginning letter.

Also included are unit tests (using PHPUnit) for non-alpha characters, spaces, vowels, consonants and words beginning with 'qu', which need to move the u along with the q towards the end of the word.

