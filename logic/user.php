<?php
    class User{
        
        private $username;
        private $name;
        private $lastname1;
        private $lastname2;
        private $email;
        private $birthday;
        private $phone;
        private $password;

        function __construct($username, $name, $lastname1, $lastname2, $email, $birthday, $phone, $password){
            $this->username = $username;
            $this->name = $name;
            $this->lastname1 = $lastname1;
            $this->lastname2 = $lastname2;
            $this->email = $email;
            $this->birthday = $birthday;
            $this->phone = $phone;
            $this->password  =$password;
        }
        
        public function getUsername(){
            return $this->username;
        }

        public function getPassword(){
            return $this->password;
        }

        public function setPassword($password){
            $this->password = $password;
        }
        
        public function getEmail(){
            return $this->email;
        }

        public function getName(){
            return $this->name;
        }

        public function setName($name){
            $this->name = $name;
        }
        
        public function getLastname1(){
            return $this->lastname1;
        }
        
        public function setLastname1($lastname1){
            $this->lastname1 = $lastname1;
        }
        
        public function getLastname2(){
            return $this->lastname2;
        }

        public function setLastname2($lastname2){
            $this->lastname2 = $lastname2;
        }

        public function getPhone(){
            return $this->phone;
        }

        public function getBirthday(){
            return $this->birthday;
        }

        public function __toString(){
            return  "Username: " . $this->username . "<br>" . 
                    "Name: " . $this->name . "<br>" .
                    "Lastname1: " . $this->lastname1 . "<br>" .
                    "Lastname2: " . $this->lastname2 . "<br>" .
                    "Email: " . $this->email . "<br>" .
                    "Birthday: " . $this->birthday . "<br>" .
                    "Phone: " . $this->phone . "<br>" .
                    "Password: " . $this->password . "<br>";
        }
    }
?>