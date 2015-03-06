<?php
    class Contact {
        private $name;
        private $phone;
        private $address;

        function __construct($name, $phone, $address) {
            $this->name = $name;
            $this->phone = $phone;
            $this->address = $address;
        }

        // getters
        function getName() {
            return $this->name;
        }

        function getPhone() {
            return $this->phone;
        }

        function getAddress() {
            return $this->address;
        }

        // setters
        function setName($name) {
            $this->name = $name;
        }

        function setName($phone) {
            $this->phone = $phone;
        }

        function setName($address) {
            $this->address = $address;
        }

        // save the particular contact in the session array
        function save() {
            array_push($_SESSION['contacts'], $this);
        }

        // get existing contancts
        static function getAll() {
            return $_SESSION['contacts'];
        }

        // delete existing contacts
        static function deleteAll() {
            $_SESSION['contacts'] = [];
        }
    }
?>
