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

        public function authenticate($username, $password){
            $db = Database::DB;
            $string = "SELECT * FROM $db.$db WHERE username = :username AND password = :password;";
            $query = Database::prepare($string);
            $query->bindValue(":username", $username);
            $query->bindValue(":password", $password);
            $query->execute();
            if(!$query->fetch())
                throw new UserException(UserException::AUTHENTICATION_FAILED);
        }

        public function get($username){
            $db = Database::DB;
            $string = "SELECT email, name, lastname1, lastname2, phone, birthday, password FROM $db.$db WHERE username = :username LIMIT 1;";
            $query = Database::prepare($string);
            $query->bindValue(":username", $username);
            $query->execute();
            $row = $query->fetch(PDO::FETCH_ASSOC);
            if(!$row)
                throw new UserException(UserException::USER_NOT_FOUNT);
            else{
                $email = $row["email"];
                $name = $row["name"];
                $lastname1 = $row["lastname1"];
                $lastname2 = $row["lastname2"];
                $phone = $row["phone"];
                $birthday = $row["birthday"];
                $password = $row["password"];
                return new User($username, $name, $lastname1, $lastname2, $email, $birthday, $phone, $password);
            }
        }

        public function edit($username, User $user){
            try{
                $db = Database::DB;
                $string = "UPDATE $db.$db SET
                    username = :username,
                    email = :email,
                    name = :name,
                    lastname1 = :lastname1,
                    lastname2 = :lastname2,
                    phone = :phone,
                    birthday = :birthday,
                    password  = :password
                    WHERE username = :old_username;";
                $query = Database::prepare($string);
                $query->bindValue(":username", $user->getUsername());
                $query->bindValue(":name", $user->getName());
                $query->bindValue(":lastname1", $user->getLastname1());
                $query->bindValue(":lastname2", $user->getLastname2());
                $query->bindValue(":email", $user->getEmail());
                $query->bindValue(":birthday", $user->getBirthday());
                $query->bindValue(":phone", $user->getPhone());
                $query->bindValue(":password", $user->getPassword());
                $query->bindValue(":old_username", $username);
                $query->execute();
            } catch(PDOException $e) {
                if($e->getCode() == self::DUPLICATE_UNIQUE_OR_PRIMARY_VALUE)
                    throw new UserException(UserException::USERNAME_OR_EMAIL_TAKEN);
                else
                    throw $e;
            }
        }
    }

?>