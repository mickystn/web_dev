<?php
    include "connect.php";

    $sql =  $pdo->prepare("INSERT INTO `member` VALUES (?,?,?,?,?,?)");
    $uname = $_POST["uname"];
    $sql->bindParam(1,$_POST["uname"]);
    $sql->bindParam(2,$_POST["pword"]);
    $sql->bindParam(3,$_POST["name"]);
    $sql->bindParam(4,$_POST["address"]);
    $sql->bindParam(5,$_POST["mobile"]);
    $sql->bindParam(6,$_POST["email"]);
    $sql->execute();
    header("location:5showdata.php?username=".$uname)
?>