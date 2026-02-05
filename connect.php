<?php 
session_start();
require 'db-config.php';

try {
    $DB = new PDO($DB_NAME, $DB_USER, $DB_PWD, $OPTIONS);
    $username = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars($_POST['password']);

    $result = $DB->prepare('SELECT pseudo, password, progress FROM user WHERE pseudo = ?');
    $result->bindValue(1, $username);
    $result->execute();
    $datas = $result->fetch(PDO::FETCH_ASSOC);

    $username_db = $datas['pseudo'];
    $password_db = $datas['password'];
    $progress_db = $datas['progress'];
    $result->closeCursor();

    if($username == $username_db && password_verify($password, $password_db)){
        $_SESSION['pseudo'] = $username_db;
        $_SESSION['progress'] = $progress_db;
        header('Location: accueil.php');
    }
    else if($username != $username_db){
        $_SESSION['error'] = 'Pseudo incorrect !';
        header('Location: index.php');
    }
    else if(!password_verify($password, $password_db)){
        $_SESSION['error'] = 'Mot de passe incorrect !';
        header('Location: index.php');
    }

} 
catch (PDOException $e) {
    print "Erreur :" . $e->getMessage();
    die;
}
?>