<?php
include_once "connect.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form > input{
            padding:2px;
            display:inline;
        }
    </style>
</head>

<body>
    <form action="" method="post">
        <input type="text" name="keyword" >
        <input type="submit" value="ค้นหา">
    </form>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM `member` where username LIKE ?");
    if(!empty($_POST))
        $value="%".$_POST['keyword']."%";
    $stmt->bindParam(1,$value);
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        echo "ชื่อ  : " . $row["name"] . "<br>";
        echo "ที่อยู่  : " . $row["address"] . "<br>";
        echo "อีเมล  : " . $row["email"] . "<br>";
        $img = "../member_photo/" . $row["username"] . ".jpg";
        echo  "<img src='$img' />";
        echo "<hr>\n";
    }
    ?>
</body>

</html>
