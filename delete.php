<?php 
session_start();
require 'db-config.php';

try {
    $DB = new PDO($DB_NAME, $DB_USER, $DB_PWD, $OPTIONS);

    $result = $DB->prepare('DELETE FROM user WHERE pseudo = ?');
    $result->bindValue(1, $_SESSION['pseudo']);
    $result->execute();

    $_SESSION['error'] = "Compte supprimé avec succès !";
    header('Location: index.php');
} 
catch (PDOException $e) {
    print "Erreur :" . $e->getMessage();
    die;
}
?>