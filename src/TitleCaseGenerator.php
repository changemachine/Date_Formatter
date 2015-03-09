<?php

/*
The Title Case program capitalizes the first letter of "all" words in a multiple-word title. For example, we expect it to change the color purple to The Color Purple.  Exceptions exist that won't be capitalized (a, an, the, etc), and there are exceptions within that group as well (firs and last words).  Other exceptions include trendy camel-case names like iTunes, etc.
*/

    class TitleCaseGenerator
    {
        private $exceptions = ["a", "an", "the", "and", "but", "or", "nor", "at", "by", "for", "from", "in", "into", "of", "off", "on", "onto", "out", "over", "up", "with", "to", "as"];

        private $apple_exceptions = ["iphone", "itunes", "imac", "ipad", "ipod"];

        function makeTitleCase($input_title)
        {
            $temp = strtolower($input_title);
            $temp = ucwords($temp);
            $exploded = explode(" ", $temp);
            for ($i = 1; $i < count($exploded) - 1; $i++) {
                if (in_array(strtolower($exploded[$i]), $this->exceptions)) {
                    $exploded[$i] = strtolower($exploded[$i]);
                }

            }
            for ($i = 0; $i < count($exploded); $i++) {
                if (in_array(strtolower($exploded[$i]), $this->apple_exceptions)) {
                    $exploded[$i] = strtolower($exploded[$i]);
                    $apple_temp = $exploded[$i];
                    $apple_temp[1] = strtoupper($apple_temp[1]);
                    $exploded[$i] = $apple_temp;
                }
            }
            $temp = implode(" ", $exploded);
            return $temp;
        }
    }


 ?>
