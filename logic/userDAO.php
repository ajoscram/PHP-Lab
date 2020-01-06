<?php

    require_once 'user.php';
    require_once 'db.php';
    require_once 'userException.php';

    class UserDAO{

        const DUPLICATE_UNIQUE_OR_PRIMARY_VALUE = "23000";

        public function add(User $user){
            try{
                $db = Database::DB;
                $string = "INSERT INTO $db.$db (username, name, lastname1, lastname2, email, birthday, phone, password) values (:username, :name, :lastname1, :lastname2, :email, :birthday, :phone, :password);";
                $query = Database::prepare($string);
                $query->bindValue(":username", $user->getUsername());
                $query->bindValue(":name", $user->getName());
                $query->bindValue(":lastname1", $user->getLastname1());
                $query->bindValue(":lastname2", $user->getLastname2());
                $query->bindValue(":email", $user->getEmail());
                $query->bindValue(":birthday", $user->getBirthday());
                $query->bindValue(":phone", $user->getPhone());
                $query->bindValue(":password", $user->getPassword());
                $query->execute();
            } catch(PDOException $e){
                if($e->getCode() == self::DUPLICATE_UNIQUE_OR_PRIMARY_VALUE)
                    throw new UserException(UserException::USERNAME_OR_EMAIL_TAKEN);
                else
                    throw $e;
            }
        }

        public function get($email){
            throw new Exception("Not implemented.");
        }

        public function authenticate($email, $password){
            throw new Exception("Not implemented.");
        }

        public function edit($oldEmail, $user){
            throw new Exception("Not implemented.");
        }
    }

?>