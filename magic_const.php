<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    trait Message {
        public function msg() {
            echo __TRAIT__;
            echo "<br>";
            echo __METHOD__;
        }
    }
    class Anan {
        use Message;
        public function __construct() {
            echo __DIR__;
            echo "<br>";
            echo __FILE__;
            echo "<br>";
            echo __LINE__;
            echo "<br>";
            echo __FUNCTION__;
            echo "<br>";
            echo __CLASS__;
            echo "<br>";
            echo __METHOD__;
            echo "<br>";
            echo __NAMESPACE__;
            echo "<br>";
            
        }

    }

    $Anan = new Anan();
    $Anan->msg();
    

?>