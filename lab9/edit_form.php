<?php
    include "connect.php";
    $sql = $pdo->prepare("SELECT * FROM `member` WHERE username=?");
    $sql->bindParam(1,$_GET["username"]);
    $sql->execute();
    $row = $sql->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit member</title>
    <style>
        div{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form action="edit_member.php" method="post">
        <input type="hidden" name="uname" value="<?=$row["username"]?>">
        <div>
            <label for="name">Name : </label>
            <input type="text" name="name" id="name" value="<?=$row["name"]?>">
        </div>
        <div>
            <label for="address">Address : </label>
            <textarea name="address" id="address" cols="30" rows="5" ><?=$row["address"]?></textarea>
        </div>
        <div>
            <label for="mobile">Mobile : </label>
            <input type="text" name="mobile" id="mobile" value="<?=$row["mobile"]?>">
        </div>
        <div>
            <label for="email">E-mail : </label>
            <input type="text" name="email" id="email" value="<?=$row["email"]?>">
        </div>
        <div>
           <input type="submit" style="background-color:green;" value="Confirm">
        </div>
    </form>
</body>
</html>