<?php 
session_start();
require 'db-config.php';

try {
    $DB = new PDO($DB_NAME, $DB_USER, $DB_PWD, $OPTIONS);
    $username = htmlspecialchars($_POST['pseudo']);
    $password = htmlspecialchars($_POST['password']);

    $result = $DB->prepare('SELECT * FROM user WHERE pseudo = ?');
    $result->bindValue(1, $username);
    $result->execute();

    while($data = $result->fetch(PDO::FETCH_ASSOC)) {
        $user_db = $data['pseudo'];
        $pwd_db = $data['password'];
    }

    $result->closeCursor();

    if(empty($user_db)){
        $result = $DB->prepare('INSERT INTO user(pseudo, password) VALUES (?, ?)');
        $result->bindValue(1, $username);
        $result->bindValue(2, password_hash($password, PASSWORD_BCRYPT));
        $result->execute();
        $_SESSION['pseudo'] = $username;
        header('Location: accueil.php');
    }
    else{
        $_SESSION['error'] = "Pseudo déjà utilisé !";
        header('Location: index.php');
    }

} 
catch (PDOException $e) {
    print "Erreur :" . $e->getMessage();
    die;
}
?>