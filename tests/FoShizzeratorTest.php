<?php

    require_once "src/FoShizzerator.php";

    class FoShizzeratorTest extends PHPUnit_Framework_TestCase
    {
        function test_FoShizzerator_oneWord()
        {
            //Arrange
            $test_FoShizzerator = new FoShizzerator;
            $input = "Susan";

            //Act
            $result = $test_FoShizzerator->translate($input);

            //Assert
            $this->assertEquals("Suzan", $result);

        }

/*        function test_makeTitleCase_multipleWords()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "Susan is a gangsta!";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("The Little Mermaid", $result);
        }

        function test_makeTitleCase_mixedWords()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "qUeeN vIcToria";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("Queen Victoria", $result);
        }

        // exceptions to capitalization include the words not at the beginning or end: a, an, the, and, but, or, nor, at, by, for, from, in, into, of, off, on, onto, out, over, up, with, to, as
        function test_makeTitleCase_exceptions()
        {
            //Arrange
            $test_TitleCaseGenerator = new TitleCaseGenerator;
            $input = "a neW biscuit In the gravy Of An The And But Or Nor At By fOr From In Into Of Off On Onto Out Over Up With To As awesome!";

            //Act
            $result = $test_TitleCaseGenerator->makeTitleCase($input);

            //Assert
            $this->assertEquals("A New Biscuit in the Gravy of an the and but or nor at by for from in into of off on onto out over up with to as Awesome!", $result);
        }
*/

    }
 ?>
