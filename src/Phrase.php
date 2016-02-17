<?php
    class Phrase
    {
        function findReplaceExact ($phrase, $word_to_replace, $replace_with)
        {
            $new_phrase = strtolower($phrase);
            $new_word_to_replace = strtolower($word_to_replace);
            $new_replace_with = strtolower($replace_with);
            $phrase_array = explode(" ", $new_phrase);
            foreach ($phrase_array as $index => $word) {
                if ($new_word_to_replace == $word) {
                    $phrase_array[$index] = $new_replace_with;
                }
            }
            $phrase_array = implode(" ", $phrase_array);
            return $phrase_array;
        }

    }


?>
