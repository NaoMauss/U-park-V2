<?php
// On récupere les données de l'utilisateur
$req = $pdo->prepare('SELECT * FROM user WHERE userId = :id');
$req->execute(array(':id' => $_SESSION['user']));
$data = $req->fetch();

$userId = $data['userId'];
$profilPic = $data['userPic'];
$name = ucfirst($data['userName']);
$surname = ucfirst($data['userSurname']);
$point = $data['userPoint'];
$userMail = $data['userMail'];
?>
