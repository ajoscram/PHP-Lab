<?php
    require_once 'user.php';
    require_once 'userDAO.php';

    class UserController{
        public function add(User $user){
            $dao = new UserDAO();
            $dao->add($user);
        }

        public function get($email){
            
        }

        public function authenticate($email, $password){
            
        }

        public function edit($email, $newUser){

        }
    }
    
?>