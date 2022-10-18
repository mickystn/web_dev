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
        img{
            padding:2px;
            
        }
      div{
        display: inline;
        position:fixed;
        top:0;
        width:100%;
        z-index:100;
        margin: 80px;
        font-size: large;
        
      }
    </style>
</head>

<body>
    <?php
    $stmt = $pdo->prepare("SELECT * FROM `member` where username = ?");
    $stmt->bindParam(1,$_GET["username"]);
    $stmt->execute();
    while ($row = $stmt->fetch()) {
        $img = "../member_photo/" . $row["username"] . ".jpg";
        echo  "<img src='$img' />";
        echo "<div>
                ชื่อ  : " . $row["name"] . "<br>
                ที่อยู่  : " . $row["address"] . "<br>
                อีเมล  : " . $row["email"] . "
        </div>";
        
        echo "<hr>\n";
    }
    ?>
</body>

</html>