<?php
include "connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member Form</title>
    <style>
        div{
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <form action="insert_member_redirect.php" method="post">
        <div>
            <label for="uname">Username :</label><br>
            <input type="text" name="uname" id="uname">
        </div>
        <div>
            <label for="pword">Password :</label><br>
            <input type="text" name="pword" id="pword">
        </div>
        <div>
            <label for="name">Name :</label><br>
            <input type="text" name="name" id="name">
        </div>
        <div>
            <label for="address">Address :</label><br>
            <textarea name="address" id="address" cols="30" rows="5"></textarea><br>
        </div>
        <div>
            <label for="mobile">Mobile :</label><br>
            <input type="text" name="mobile" id="mobile">
        </div>
        <div>
            <label for="email">E-mail :</label><br>
            <input type="text" name="email" id="email">
        </div>
        <input type="submit">
        
    </form>
</body>
</html>