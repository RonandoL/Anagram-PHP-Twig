<?php
    class Anagram
    {
        // private $xxx;
        // private $xxx;
        // private $name;
        //
        // function __construct($contact_name)
        // {
        //     $this->name = $contact_name;
        // }

    // SAVE, getAll(), deleteAll()
        function anagramMatch($input_word, $input_list)
        {
            $input_word_array = str_split($input_word);
            $input_list_array = str_split($input_list);
            sort($input_word_array);
            sort($input_list_array);
            $match = true;

            if ($input_word_array == $input_list_array) {
                return $match;
            }

            return $match;

        }

    }
?>
