<?php
    if(isset($_POST["sign_in"])){
        require_once "logic/user.php";
        require_once "logic/userDAO.php";
        require_once "logic/UserException.php";

        $username = $_POST["username"];
        $password = $_POST["password"];
        
        $userDAO = new UserDAO();
        try{
            $userDAO->authenticate($username, $password);
            session_start();
            $_SESSION["username"] = $username;
            header("Location: dashboard.php");
            exit();
        } catch(UserException $e){
            header("Location: index.php?error=" . $e->getType());
            exit();
        } catch(Exception $e){
            header("Location: unhandled-error.php?error=" . $e->getMessage());
            exit();
        }
    } else{
        header("Location: index.php");
        exit();
    }
?>