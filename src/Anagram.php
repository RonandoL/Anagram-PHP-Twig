<?php
    class Anagram
    {
        private $match_result_array = array();
        private $fail_result_array = array();

        function __construct()
        {
            $this->match_result_array;
            $this->fail_result_array;
        }

        function getMatchResultArray()
        {
            return $this->match_result_array;
        }

        function getFailResultArray()
        {
            return $this->fail_result_array;
        }

        function pushMatchResultArray($new_element)
        {
            $this->match_result_array = array_push($this->match_result_array, $new_element);
        }
        function pushFailResultArray($new_element)
        {
            $this->fail_result_array = array_push($this->fail_result_array, $new_element);
        }

        function anagramMatch($input_word, $input_list)
        {
            // split word, explode list
            $input_word_array = str_split($input_word);
            $input_list_array = explode(" ", $input_list);
                // arrays of matching and non-matching words
                // $variable_array = array();
                // $other_array = array();
                $this->match_result_array = array();
                $this->fail_result_array = array();
            // looping through list, splitting each word into array
            foreach ($input_list_array as $word) {
                $split_list_word = str_split($word);

                // sort word arrays
                sort($input_word_array);
                sort($split_list_word);

                // comparing word arrays to each other
                if ($input_word_array == $split_list_word) {
                    // $array = getMatchResultArray();
                    $this->pushMatchResultArray($word);
                } else {
                    // $array = getFailResultArray();
                    $this->pushFailResultArray($word);
                    // var_dump("FAIL");
                }
            }
            // var_dump($this->match_result_array);
            // var_dump($this->fail_result_array);
            if ($this->match_result_array == []) {
                return false;
            } else {
                return true;
            }
        }

    }
?>
