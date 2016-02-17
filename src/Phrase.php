<?php
    class Phrase
    {
        function findReplaceExact ($phrase, $word_to_replace, $replace_with)
        {
            $phrase = explode(" ", $phrase);
            foreach ($phrase as $index => $word) {
                if ($word_to_replace == $word) {
                    $phrase[$index] = $replace_with;
                }

            }
            $phrase = implode(" ", $phrase);
            return $phrase;
        }

    }


?>
