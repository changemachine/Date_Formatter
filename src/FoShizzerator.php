<?php

    class FoShizzerator
    {
        //private $exceptions = [""];

/*
explode sentences
loop through each word of exploded array
explode word
loop through letters
if not first letter OR capitalized
{ convert s to z}
*/
        function translate($input)
        {   //explode sentence
            $exploded_sentence = explode(" ", $input);
            // for ($i = 1; $i < count($exploded_sentence); $i++){ }

            for ($i = 1; $i < count($exploded_sentence); $i++) {
                $word = $exploded_sentence[$i];

                for  ($i = 1; $i < count($word[]); $i++){
                    $exploded_word[$i] = $word[$i];
                    
                }


            if (in_array($exploded_sentence[$i], "s")) {
                $exploded_sentence[$i] = "z");
            }
            }

            implode $exploded_sentence;
            return $exploded_sentence;
        }
    }

 ?>
