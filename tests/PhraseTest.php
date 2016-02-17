<?php

    require_once "src/Phrase.php";

    class PhraseTest extends PHPUnit_Framework_TestCase
    {

        function test_findReplace_singleWordNoMatch()
        {
            //Arrange
            $test_Phrase = new Phrase;
            $input1 = "howdy";
            $input2 = "hey";
            $input3 = "hi";

            //Act
            $result1 = $test_Phrase->findReplace($input1, $input2, $input3);


            //Assert
            $this->assertEquals("howdy", $result1);

        }
        function test_findReplace_singleWordMatch()
        {
            //Arrange
            $test_Phrase = new Phrase;
            $input1 = "howdy";
            $input2 = "howdy";
            $input3 = "hi";

            //Act
            $result1 = $test_Phrase->findReplace($input1, $input2, $input3);


            //Assert
            $this->assertEquals("hi", $result1);

        }


    }

?>
