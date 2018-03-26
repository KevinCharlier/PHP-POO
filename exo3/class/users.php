<?php

    class USers{
        /* Propriétés */
        public $username;
        public $email;
        public $connected;
        private $id;
        private $password;
        
        /* Méthodes */
        public function __construct($id, $username, $email, $password, $connected){

            $this->id = $id;
            $this->username = $username;
            $this->email = $email;
            $this->password = $password;
            $this->connected = $connected;
        }

        public function enregistrementBdUser(){
            /*****/
        }
        public function sessionUserConnect(){
            /****/
        }
        public function sessionUserDisconnect(){
            /****/
        }
        public function updateUserName(){
            /****/
        }
        public function updateUserMail(){
            /****/
        }
        public function destroyUser(){
            /****/
        }
    }
?>