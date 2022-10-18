<?php include "connect.php"?>

<?php
    $sql = $pdo->prepare("UPDATE `member` SET name=?,address=?,mobile=?,email=? WHERE username=?");
    $sql->bindParam(1,$_POST['name']);
    $sql->bindParam(2,$_POST['address']);
    $sql->bindParam(3,$_POST['mobile']);
    $sql->bindParam(4,$_POST['email']);
    $sql->bindParam(5,$_POST['uname']);
    if($sql->execute()){
        echo "Complete editing ".$_POST["uname"];
        header("location:9.php");
    }
?>