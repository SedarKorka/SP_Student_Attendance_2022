
<?php 
session_start();
//die($_SESSION['id']);

?>
<!DOCTYPE html>
<html>

<head>
    <title></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>TopPage</title>
</head>

<body>
    <div class="header">
        <div class="left">
            <div class="logo">
                <img src="Liepaja_University-8913784.png" alt="logo">
            </div>
        </div>
        <div class="title">
            <h1>STUDENT'S DASHBOARD</h1>
        </div>
        <div class="right">
            <div class="profile">
                <div class="info">  
                    <span class="name"><?= $_SESSION['firstname'].' '.  $_SESSION['lassname']  ?></span>
                    <span class="id">Student ID:<?= $_SESSION['id'] ?></span>
                </div>
                <img src="profile.png" alt="profile">
            </div>
        </div>
    </div>

</body>

</html>