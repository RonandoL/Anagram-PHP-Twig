<?php

    require_once "src/Anagram.php";

    class AnagramTest extends PHPUnit_Framework_TestCase
    {

        function test_anagramMatch_oneWord()
        {

            //Arrange
            $test_Anagram = new Anagram;
            $input = "cat";

            //Act: runs the actual method that we are testing.
            $result = $test_Anagram->anagramMatch($input);

            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals(["c","a","t"], $result);
        }
        function test_anagramMatch_twoWords()
        {

            //Arrange
            $test_Anagram = new Anagram;
            $input = "cat";
            $input_list = "act";

            //Act: runs the actual method that we are testing.
            $result = $test_Anagram->anagramMatch($input);

            //Assert tells our tests what to expect from the output of our method.
            $this->assertEquals(true, $result);
        }
    }

    // Run in terminal in project folder
    // export PATH=$PATH:./vendor/bin
    // phpunit tests

?>
