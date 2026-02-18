<?php

require "db-config.php";

function Connect()
{
    global $DB;
    $username = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars($_POST['password']);

    $SQL = 'SELECT pseudo, password, progress FROM user WHERE pseudo = ?';
    $result = $DB->prepare($SQL);
    $result->bindValue(1, $username, PDO::PARAM_STR);
    $result->execute();
    $datas = $result->fetch();

    $username_db = htmlspecialchars($datas['pseudo']);
    $password_db = htmlspecialchars($datas['password']);
    $progress_db = htmlspecialchars($datas['progress']);
    $result->closeCursor();

    if($username == $username_db && password_verify($password, $password_db)){
        $_SESSION['pseudo'] = $username_db;
        $_SESSION['progress'] = $progress_db;
        return 1;
    }
    else if($username != $username_db){
        $_SESSION['error'] = 'Pseudo incorrect !';
        return 0;
    }
    else if(!password_verify($password, $password_db)){
        $_SESSION['error'] = 'Mot de passe incorrect !';
        return 0;
    }
}

function Create()
{
    global $DB;
    $username = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm-password']);

    $SQL = 'SELECT pseudo FROM user WHERE pseudo = ?';
    $result = $DB->prepare($SQL);
    $result->bindValue(1, $username);
    $result->execute();
    $datas = $result->fetch();

    $username_db = htmlspecialchars($datas['pseudo']);

    $result->closeCursor();

    if(empty($username_db) && $password == $confirm_password){
        $SQL = 'INSERT INTO user(pseudo, password, progress) VALUES (?, ?, 0)';
        $result = $DB->prepare($SQL);
        $result->bindValue(1, $username);
        $result->bindValue(2, password_hash($password, PASSWORD_BCRYPT));
        $result->execute();
        $_SESSION['pseudo'] = $username;
        $_SESSION['progress'] = 0;
        return 1;
    }
    else if(!empty($username_db)){
        $_SESSION['error'] = "Pseudo déjà utilisé !";
        return 0;
    }
    else if($password != $confirm_password){
        $_SESSION['error'] = "Les mots de passe ne correspondent pas !";
        return 0;
    }
}

function Delete()
{
    global $DB;
    if($_SESSION['pseudo'] != "Invité"){
        $SQL = 'DELETE FROM user WHERE pseudo = ?';
        $result = $DB->prepare($SQL);
        $result->bindValue(1, $_SESSION['pseudo']);
        $result->execute();

        $_SESSION['error'] = "Compte supprimé avec succès !";
        return 1;
    }
    else{
        $_SESSION['error'] = "Vous ne pouvez pas supprimé le compte Invité !";
        return 0;
    }
}

function ChangePwd()
{
    global $DB;
    $actual_pwd = htmlspecialchars($_POST['actual-pwd']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm-password']);

    $result = $DB->prepare('SELECT password FROM user WHERE pseudo = ?');
    $result->bindValue(1, $_SESSION['pseudo']);
    $result->execute();
    $datas = $result->fetch();

    $actual_pwd_db = $datas['password'];

    $result->closeCursor();

    $SQL = 'UPDATE user SET password = ? WHERE pseudo = ?';
    $result = $DB->prepare($SQL);

    if($_SESSION['pseudo'] != "Invité"){
        if(password_verify($actual_pwd, $actual_pwd_db) && $password == $confirm_password){
            $result->bindValue(1, password_hash($password, PASSWORD_BCRYPT));
            $result->bindValue(2, $_SESSION['pseudo']);
            $result->execute();
            $_SESSION['error'] = "Mot de passe changé avec succès !";
        }
        else if(!password_verify($actual_pwd, $actual_pwd_db)){
            $_SESSION['error'] = "Le mot de passe actuel n'est pas vérifié !";
        }
        else if($password != $confirm_password){
            $_SESSION['error'] = "Les mots de passe ne correspondent pas !";
        }
    }
    else{
        $_SESSION['error'] = "Vous ne pouvez pas changer le mot de passe du compte Invité !";
    }
}