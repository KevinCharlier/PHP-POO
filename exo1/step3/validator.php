<?php
    class Validator{
        public $string;
        public $int;
        public $float;
            public function __construct($string, $int, $float){
                $this->string = $string;
                $this->int = $int;
                $this->float = $float;
            }
            public function validateString(){
                if(is_string($this->string)){
                    return '<div>This is a string</div>';
                }
                else{
                    return '<div>This is not a string</div>';
                }
            }
            public function validateInt(){
                if(is_int($this->int)){
                    return '<div>This is an int</div>';
                }
                else{
                    return '<div>This is not an int</div>';
                }
            }
            public function validateFloat(){
                if(is_float($this->float)){
                    return '<div>This is a float</div>';
                }
                else{
                    return '<div>This is not a float</div>';
                }
            }
    }
?>