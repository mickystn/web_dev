<?php include "connect.php";

$sql = $pdo->prepare("DELETE FROM `member` WHERE username  = ?");
$sql->bindParam(1,$_GET["username"]);
if($sql->execute()){
    header("location: 6.php");
}

?>