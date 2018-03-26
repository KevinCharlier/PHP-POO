<?php

class Html  {

	public $css;        // CSS Files
        public $meta;       // <meta>
        public $img;        // Images
        public $link;       // Links
        public $js;         // JS Files
        public function __construct() {
            $css = $this->css;
            $meta = $this->meta;
            $img = $this->img; 
            $link =$this->link;
            $js = $this->js;
        }

        public function css(){
            return ('<link rel="stylesheet" href="style.css">');
        }

        public function meta(){
            return ('<meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">');
        }

        public function title(){
            return ('<title>TEST</title>');
        }

        public function img(){
            return ('<img src="img/standard.jpg" alt="standard" />');
        }

        public function link(){
            return ('<a href="http://standard.be/fr" target="blank"><img src="img/standard.png" alt="standard" /></a>');
        }

        public function js(){
            return ('<script src="test.js"></script>');
        }


}

?>
