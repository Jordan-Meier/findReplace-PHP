<?php

    require_once "src/Phrase.php";

    class PhraseTest extends PHPUnit_Framework_TestCase
    {

        function test_findReplaceExact_singleWordNoMatch()
        {
            //Arrange
            $test_Phrase = new Phrase;
            $phrase = "howdy";
            $word_to_replace = "hey";
            $replace_with = "hi";

            //Act
            $result1 = $test_Phrase->findReplaceExact($phrase, $word_to_replace, $replace_with);

            //Assert
            $this->assertEquals("howdy", $result1);

        }

        function test_findReplaceExact_singleWordMatch()
        {
            //Arrange
            $test_Phrase = new Phrase;
            $phrase = "howdy";
            $word_to_replace = "howdy";
            $replace_with = "hi";

            //Act
            $result1 = $test_Phrase->findReplaceExact($phrase, $word_to_replace, $replace_with);

            //Assert
            $this->assertEquals("hi", $result1);

        }

        function test_findReplaceExact_twoWordsNoMatch()
        {
            //Arrange
            $test_Phrase = new Phrase;
            $phrase = "howdy partner";
            $word_to_replace = "hey";
            $replace_with = "hullo";

            //Act
            $result1 = $test_Phrase->findReplaceExact($phrase, $word_to_replace, $replace_with);

            //Assert
            $this->assertEquals("howdy partner", $result1);

        }

        function test_findReplaceExact_twoWordsOneMatch()
        {
            //Arrange
            $test_Phrase = new Phrase;
            $phrase = "howdy partner";
            $word_to_replace = "howdy";
            $replace_with = "hullo";

            //Act
            $result1 = $test_Phrase->findReplaceExact($phrase, $word_to_replace, $replace_with);

            //Assert
            $this->assertEquals("hullo partner", $result1);

        }

        function test_findReplaceExact_manyWordsNoMatch()
        {
            //Arrange
            $test_Phrase = new Phrase;
            $phrase = "my pet dog is the best";
            $word_to_replace = "fish";
            $replace_with = "cat";

            //Act
            $result1 = $test_Phrase->findReplaceExact($phrase, $word_to_replace, $replace_with);

            //Assert
            $this->assertEquals("my pet dog is the best", $result1);

        }

        function test_findReplaceExact_manyWordsOneMatch()
        {
            //Arrange
            $test_Phrase = new Phrase;
            $phrase = "my pet dog is the best";
            $word_to_replace = "dog";
            $replace_with = "cat";

            //Act
            $result1 = $test_Phrase->findReplaceExact($phrase, $word_to_replace, $replace_with);

            //Assert
            $this->assertEquals("my pet cat is the best", $result1);

        }

        function test_findReplaceExact_manyWordSeveralMatches()
        {
            //Arrange
            $test_Phrase = new Phrase;
            $phrase = "My dog is cool. My dog is the best dog";
            $word_to_replace = "dog";
            $replace_with = "cat";

            //Act
            $result1 = $test_Phrase->findReplaceExact($phrase, $word_to_replace, $replace_with);

            //Assert
            $this->assertEquals("My cat is cool. My cat is the best cat", $result1);

        }
        // function test_findReplaceExact_punctuation()
        // {
        //     //Arrange
        //     $test_Phrase = new Phrase;
        //     $phrase = "My dog, Morgen is cool. My dog is the best dog.";
        //     $word_to_replace = "dog";
        //     $replace_with = "buddy";
        //
        //     //Act
        //     $result1 = $test_Phrase->findReplaceExact($phrase, $word_to_replace, $replace_with);
        //
        //     //Assert
        //     $this->assertEquals("My buddy, Morgen is cool. My buddy is the best buddy.", $result1);
        //
        // }



    }

?>
