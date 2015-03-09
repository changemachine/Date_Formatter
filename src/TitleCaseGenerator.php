<?php

/*
The Title Case program capitalizes the first letter of all words in a multiple-word title. For example, we expect it to change the color purple to The Color Purple.
*/

    class TitleCaseGenerator
    {
        private $exceptions = ["a", "an", "the", "and", "but", "or", "nor", "at", "by", "for", "from", "in", "into", "of", "off", "on", "onto", "out", "over", "up", "with", "to", "as"];

        function makeTitleCase($input_title)
        {
            $temp = strtolower($input_title);
            $temp = ucwords($temp);
            $exploded = explode(" ", $temp);
            for ($i = 1; $i < count($exploded) - 1; $i) {
                if (in_array(strtolower($exploded[$i]), $this->exceptions)) {
                    $exploded[$i] = strtolower($exploded[$i]);
                }
            }
            $temp = implode(" ", $exploded);
            return $temp;
        }
    }


 ?>
