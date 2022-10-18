<?php
include_once "connect.php";
$stmt = $pdo->prepare("SELECT * FROM `member`");
$stmt->execute();
while ($row = $stmt->fetch()) {
echo "ชื่อ  : " . $row ["name"] . "<br>";
echo "ที่อยู่  : " . $row ["address"] . "<br>";
echo "อีเมล  : " . $row ["email"] . "<br>";
$img = "../member_photo/".$row["username"].".jpg";
echo  "<img src='$img' />";
echo "<hr>\n";
}
?>