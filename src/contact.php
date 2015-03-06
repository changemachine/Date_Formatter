<?php
    class Contact
    {
        private $name;

        function __construct()
        {
            $this->
        }

        // getters

        // setters

        //save the particular CD instance in the session array
        function save() {
            array_push($_SESSION['contacts'], $this);
        }
        static function getCDs() {
            return $_SESSION['contacts'];
        }
    }
?>
