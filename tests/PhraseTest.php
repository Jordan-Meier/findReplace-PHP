<?php

    require_once "src/Phrase.php";

    class PhraseTest extends PHPUnit_Framework_TestCase
    {

        function test_findReplace_singleWordNoMatch()
        {
            //Arrange
            $test_Phrase = new Phrase;
            $input1 = "rock";
            $input2 = "scissors";
            $input3 = "paper";

            //Act
            $result1 = $test_RockPaperScissors->playGame($input1, $input2, $input3);


            //Assert
            $this->assertEquals("draw", $result1);

        }


    }

?>
