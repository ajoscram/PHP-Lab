<?php
    if(isset($_POST["register"])){
        require_once "logic/user.php";
        require_once "logic/userController.php";
        require_once "logic/UserException.php";

        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $name = $_POST["name"];
        $lastname1 = $_POST["lastname1"];
        $lastname2 = $_POST["lastname2"];
        $phone = $_POST["phone"];
        $birthday = $_POST["birthday"];

        $user = new User($username, $name, $lastname1, $lastname2, $email, $birthday, $phone, $password);
        $userController = new UserController();
        try{
            $userController->add($user);
            header("Location: dashboard.php");
            exit();
        } catch(UserException $e){
            header("Location: register.php?error=" . $e->getType());
            exit();
        } catch(Exception $e){
            header("Location: unhandled-error.php?error=" . $e->getMessage());
        }
    } else{
        header("Location: index.php");
        exit();
    }
?>