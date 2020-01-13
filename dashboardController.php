<?php
    if(isset($_POST["edit"])){
        require_once "logic/user.php";
        require_once "logic/userDAO.php";
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
        $userDAO = new UserDAO();
        try{
            session_start();
            $username = $_SESSION["username"];
            $userDAO->edit($username, $user);
            $_SESSION["username"] = $user->getUsername();
            header("Location: dashboard.php?success");
            exit();
        } catch(UserException $e){
            header("Location: dashboard.php?error=" . $e->getType());
            exit();
        } catch(Exception $e){
            header("Location: unhandled-error.php?error=" . $e->getMessage());
            exit();
        }
    }else{
        session_start();
        if($_SESSION["username"])
            unset($_SESSION["username"]);
        header("Location: index.php");
        exit();
    }
?>