<?php

    class UserException extends Exception{
        const USERNAME_OR_EMAIL_TAKEN = "USERNAME_OR_EMAIL_TAKEN";

        private $type;

        public function __construct($type){
            $this->type = $type;
            $this->message = $type;
        }

        public function getType(){
            return $this->type;
        }
    }  
?>