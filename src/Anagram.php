<?php
    class Anagram
    {
        // for capturing matching, nonmatching words to be printed on html doc
        private $match_result_array = array();
        private $fail_result_array = array();

        function getMatchResultArray()  // for array of matching words
        {
            return $this->match_result_array;
        }

        function getFailResultArray()  // for array of failing words
        {
            return $this->fail_result_array;
        }

        function pushMatchResultArray($new_element)  // pushing to the matching array
        {
            array_push($this->match_result_array, $new_element);
        }

        function pushFailResultArray($new_element)  // pushing to the failing array
        {
            array_push($this->fail_result_array, $new_element);
        }

        function anagramMatch($input_word, $input_list)  // input word and list
        {
            $input_word_array = str_split($input_word);
            $input_list_array = explode(" ", $input_list);

            foreach ($input_list_array as $word) {
                $split_list_word = str_split($word);

                // sort word arrays
                sort($input_word_array);
                sort($split_list_word);

                // comparing word arrays to each other
                if ($input_word_array == $split_list_word) {
                    $this->pushMatchResultArray($word);
                } else {
                    $this->pushFailResultArray($word);
                }
            }

            if ($this->match_result_array == []) {
                return false;
            } else {
                return true;
            }
        }

    }
?>
