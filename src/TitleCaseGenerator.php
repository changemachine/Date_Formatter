<?php

/*
The Title Case program capitalizes the first letter of all words in a multiple-word title. For example, we expect it to change the color purple to The Color Purple.
*/

    class TitleCaseGenerator
    {
        function makeTitleCase($input_title)
        {
            return ucwords($input_title);
        }
    }


 ?>
