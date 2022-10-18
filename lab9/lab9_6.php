<?php include "connect.php";?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $sql = $pdo->prepare("SELECT * FROM `member`");
    $sql->execute();
    while ($row = $sql->fetch()) {

        echo "Username : " . $row["username"] . "<br>";
        echo  "Name : " . $row["name"] . "<br>";
        echo  "Address : " . $row["address"] . "<br>";
        echo  "Mobile : " . $row["mobile"] . "<br>";
        echo   "Email : " . $row["email"] . "<br>";
        echo   "<a href='edit_form.php?username=".$row["username"]."'>Edit</a> | ";
        echo   "<a href = 'delete.php?username=".$row["username"]." ' onclick='return confirm(\"ต้องการลบ user นี้ใช่หรือไม่ ".$row["username"]." \")'>Delete</a>";
        echo "<hr><br>";
    }

    ?>

</body>

</html>