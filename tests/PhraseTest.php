<?php

    require_once "src/Phrase.php";

    class PhraseTest extends PHPUnit_Framework_TestCase
    {

        function test_findReplace_singleWordNoMatch()
        {
            //Arrange
            $test_Phrase = new Phrase;
            $phrase = "howdy";
            $word_to_replace = "hey";
            $replace_with = "hi";

            //Act
            $result1 = $test_Phrase->findReplace($phrase, $word_to_replace, $replace_with);


            //Assert
            $this->assertEquals("howdy", $result1);

        }

        function test_findReplace_singleWordMatch()
        {
            //Arrange
            $test_Phrase = new Phrase;
            $phrase = "howdy";
            $word_to_replace = "howdy";
            $replace_with = "hi";

            //Act
            $result1 = $test_Phrase->findReplace($phrase, $word_to_replace, $replace_with);


            //Assert
            $this->assertEquals("hi", $result1);

        }

        function test_findReplace_twoWordsNoMatch()
        {
            //Arrange
            $test_Phrase = new Phrase;
            $phrase = "howdy partner";
            $word_to_replace = "hey";
            $replace_with = "hullo";

            //Act
            $result1 = $test_Phrase->findReplace($phrase, $word_to_replace, $replace_with);


            //Assert
            $this->assertEquals("howdy partner", $result1);

        }

        function test_findReplace_twoWordsOneMatch()
        {
            //Arrange
            $test_Phrase = new Phrase;
            $phrase = "howdy partner";
            $word_to_replace = "howdy";
            $replace_with = "hullo";

            //Act
            $result1 = $test_Phrase->findReplace($phrase, $word_to_replace, $replace_with);


            //Assert
            $this->assertEquals("hullo partner", $result1);

        }


    }

?>
