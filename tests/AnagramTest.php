<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_anagramMatch_oneWord()
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
        // function test_anagramMatch_sort()
        // {
        //
        //     //Arrange
        //     $test_Anagram = new Anagram;
        //     $input = "cat";
        //
        //     //Act: runs the actual method that we are testing.
        //     $result = $test_Anagram->anagramMatch($input);
        //
        //     //Assert tells our tests what to expect from the output of our method.
        //     $this->assertEquals(["a","c","t"], $result);
        //
        // }
        //
        // // Sorting two arrays and comparing
        // function test_anagramMatch_sortTwo()
        // {
        //
        //     //Arrange
        //     $test_Anagram = new Anagram;
        //     $input = "cat";
        //     $input_list = "tac";
        //
        //     //Act: runs the actual method that we are testing.
        //     $result = $test_Anagram->anagramMatch($input, $input_list);
        //
        //     //Assert tells our tests what to expect from the output of our method.
        //     $this->assertEquals(true, $result);
        // }
    }

    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests

?>
