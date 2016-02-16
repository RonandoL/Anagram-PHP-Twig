<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_anagramMatch_matchLetter()
        {

            //Arrange
            $test_Anagram = new Anagram;
            $input_word = "a";
            $input_list = "a";

            //Act: runs the actual method that we are testing.
            $result = $test_Anagram->anagramMatch($input_word, $input_list);

            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals(true, $result);
        }

        // Sorting one word
        function test_anagramMatch_matchWord()
        {

            //Arrange
            $test_Anagram = new Anagram;
            $input_word = "apple";
            $input_list = "apple";

            //Act: runs the actual method that we are testing.
            $result = $test_Anagram->anagramMatch($input_word, $input_list);

            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals(true, $result);
        }

        // Sorting two arrays and comparing
        function test_anagramMatch_matchAnagram()
        {

            //Arrange
            $test_Anagram = new Anagram;
            $input = "cat";
            $input_list = "tac";

            //Act: runs the actual method that we are testing.
            $result = $test_Anagram->anagramMatch($input, $input_list);

            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals(true, $result);
        }

        // // Two different words
        function test_anagramMatch_nonMatch()
        {

            //Arrange
            $test_Anagram = new Anagram;
            $input = "cat";
            $input_list = "car";

            //Act: runs the actual method that we are testing.
            $result = $test_Anagram->anagramMatch($input, $input_list);

            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals(false, $result);
        }
    }

    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests

?>
