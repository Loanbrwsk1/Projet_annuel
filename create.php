<?php 
session_start();
require 'db-config.php';

try {
    $DB = new PDO($DB_NAME, $DB_USER, $DB_PWD, $OPTIONS);
    $username = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars($_POST['password']);
    $confirm_password = htmlspecialchars($_POST['confirm-password']);

    $result = $DB->prepare('SELECT pseudo FROM user WHERE pseudo = ?');
    $result->bindValue(1, $username);
    $result->execute();
    $datas = $result->fetch(PDO::FETCH_ASSOC);

    $username_db = $data['pseudo'];

    $result->closeCursor();

    if(empty($username_db) && $password == $confirm_password){
        $result = $DB->prepare('INSERT INTO user(pseudo, password) VALUES (?, ?)');
        $result->bindValue(1, $username);
        $result->bindValue(2, password_hash($password, PASSWORD_BCRYPT));
        $result->execute();
        $_SESSION['pseudo'] = $username;
        header('Location: accueil.php');
    }
    else if(!empty($username_db)){
        $_SESSION['error'] = "Pseudo déjà utilisé !";
        header('Location: create-account.php');
    }
    else if($password != $confirm_password){
        $_SESSION['error'] = "Les mots de passe ne correspondent pas !";
        header('Location: create-account.php');
    }

} 
catch (PDOException $e) {
    print "Erreur :" . $e->getMessage();
    die;
}
?>