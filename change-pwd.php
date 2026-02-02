<?php 
session_start();
require 'db-config.php';

try {
    $DB = new PDO($DB_NAME, $DB_USER, $DB_PWD, $OPTIONS);
    $actual_pwd = htmlspecialchars($_POST['actual-pwd']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm-password']);

    $result = $DB->prepare('SELECT password FROM user WHERE pseudo = ?');
    $result->bindValue(1, $_SESSION['pseudo']);
    $result->execute();
    $datas = $result->fetch(PDO::FETCH_ASSOC);

    $actual_pwd_db = $data['password'];

    $result->closeCursor();

    $result = $DB->prepare('UPDATE user SET password = ? WHERE pseudo = ?');

    if($_SESSION['pseudo'] != "Invité"){
        if(password_verify($actual_pwd, $actual_pwd_db) && $password == $confirm_password){
            $result->bindValue(1, password_hash($password, PASSWORD_BCRYPT));
            $result->bindValue(2, $_SESSION['pseudo']);
            $result->execute();
            $_SESSION['error'] = "Mot de passe changé avec succès !";
            header('Location: account.php');
        }
        else if(!password_verify($actual_pwd, $actual_pwd_db)){
            $_SESSION['error'] = "Le mot de passe actuel n'est pas vérifié !";
            header('Location: account.php');
        }
        else if($password != $confirm_password){
            $_SESSION['error'] = "Les mots de passe ne correspondent pas !";
            header('Location: account.php');
        }
    }
    else{
        $_SESSION['error'] = "Vous ne pouvez pas changer le mot de passe du compte Invité !";
        header('Location: account.php');
    }

} 
catch (PDOException $e) {
    print "Erreur :" . $e->getMessage();
    die;
}
?>