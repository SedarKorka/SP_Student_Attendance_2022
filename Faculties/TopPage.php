
<?php
session_start();
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
            <h1>STAFF'S DASHBOARD</h1>
        </div>
        <div class="right">
            <div class="profile">
                <div class="info">
                    <span class="name"><?php echo $_SESSION['firstname'] ?></span>
                    <span class="id">Staff ID</span>
                </div>
                <img src="profile.png" alt="profile">
            </div>
        </div>
    </div>

</body>

</html>