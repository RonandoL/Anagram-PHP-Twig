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
            $input_list_word = array();
            $input_word_array = str_split($input_word);
            $input_list_array = explode(" ", $input_list);

            foreach ($input_list_array as $word) {

                $split_list_word = str_split($word);
        
                sort($input_word_array);
                sort($split_list_word);


                if ($input_word_array == $split_list_word) {
                    return true;
                } else {
                    return false;
                }
            }





        }

    }
?>
