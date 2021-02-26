<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=table_test_php;charset=utf8", 'root' , '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $kpok = $pdo->prepare("INSERT INTO user (email, username, password) VALUES (?,?,?)");
    $mail = 'test@example.com';
    $username = 'moi';
    $mdp = 'azer';
    $kpok->bindParam(1, $mail);
    $kpok->bindParam(2, $username);
    $kpok->bindParam(3, $mdp);
    $kpok->execute();

    $koi=$pdo->prepare("INSERT INTO article (titre, contenu) VALUES (?,?)");
    $titre = 'un tritreA';
    $contenu='un contenueA';
    $koi->bindParam(1, $titre);
    $koi->bindParam(2, $contenu);
    $koi->execute();
}
catch (PDOException $exception) {
    echo $exception->getMessage();
}