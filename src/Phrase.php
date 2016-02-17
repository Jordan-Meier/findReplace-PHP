<?php
    class Phrase
    {
        function findReplace ($phrase, $word_to_replace, $replace_with)
        {
            if ($word_to_replace == $phrase) {
                $end_phrase = $replace_with;

            } elseif ($word_to_replace != $phrase) {
                $end_phrase = $phrase;
            }
            return $end_phrase;
        }

    }


?>
