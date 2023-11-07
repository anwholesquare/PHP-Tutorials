<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(-1);
    
    
    class Calculator {
        public $name = "EX991+";
        public $regYear = 2022;
        public function __construct($name, $regYear) {
            $this->$name = $name;
            $this->$regYear = $regYear;
        }

        // public function pow (int $x, int $y) {
        //     return pow($x, $y);
        // }

        // public function pow (int $x, int $y, int $z) {
        //     return (pow($x, $y) + $z);
        // } 

        function __call ($name, $arguments) {
            if ($name == "pow") {
                if (count($arguments) == 2) {
                    return pow($arguments[0], $arguments[1]);
                } else if (count($arguments) == 3) {
                    return (pow($arguments[0], $arguments[1]) + $arguments[2]);
                }
            }else {
                echo "Method $name does not exist";
            }
        }

        public function add (array $x) : float {
            if (!is_array($x)) {
                return 0;
            }
            $sum = 0;
            foreach ($x as $value) {
                $sum += $value;
            }
            return $sum;
        }

        public function __toString() {
            return "Name: $this->name, Reg Year: $this->regYear";
        }

    }

    $calculator = new Calculator("EX991+", 2022);
    echo $calculator->pow(10.2,2,3);
    echo "<br>";
    echo $calculator->add([1,2.2,3,4,5]);

?>