<?php
$engine = "mysql";
$host = "localhost";
$port = 3306;
$dbname = "db_upark";
$username = "root";
$password = "";

$pdo = new PDO("$engine:host=$host:$port;", $username, $password);

$maRequete = $pdo->prepare("CREATE DATABASE IF NOT EXISTS `db_upark`
CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;");
$maRequete->execute();
$maRequete->closeCursor();

$pdo = new PDO("$engine:host=$host:$port;dbname=$dbname", $username, $password);

$maRequete = $pdo->prepare(

    "CREATE TABLE IF NOT EXISTS `user` (
        `userId` INT NOT NULL AUTO_INCREMENT,
        `userMail` VARCHAR(255) NOT NULL,
        `userPwd` VARCHAR(255) NOT NULL,
        `userName` VARCHAR(255) NOT NULL,
        `userSurname` VARCHAR(255),
        `userPic` VARCHAR(255),
        `userPoint` VARCHAR(255),
        PRIMARY KEY (`userId`)
        ) ENGINE=InnoDB;

    CREATE TABLE IF NOT EXISTS `shop`(
        `shopId`  INT NOT NULL AUTO_INCREMENT,
        `shopName`  VARCHAR(255) NOT NULL,
        `shopAdress`  VARCHAR(255) NOT NULL,
        `shopPic` VARCHAR(255) NOT NULL,
        `shopStatus` VARCHAR(255) NOT NULL,
        PRIMARY KEY (`shopId`)
        ) ENGINE=InnoDB;"
);
$maRequete->execute();
$maRequete->closeCursor();


echo "ça marche";
?>