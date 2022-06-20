
<?php

include_once("../Backend/changepassword.php");

session_start();

include_once("../db/config.php");
include_once("../classes/User.php");

 

   



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="Myscript.js"></script>
    <title>Change Password</title>
</head>
<style>
    .message{
  background: #008000;
  color:#FFF;
  padding: 1em .5em;
  margin: 1em 0;
}
</style>

<body>
    <div class="title">
        <h2>Change Password</h2>
    </div>
    <form action="#" method="POST">
        

    <?php if(count($errors) > 0): ?>
    <div class="message" align="center">
        <?php
          foreach ($errors as $err) { ?>
              *<?= $err ?><br/>
         <?php }


        ?>
        </div>
        <?php endif; ?>











        <div class="user">
            <label for="user">User: </label>
            <select id="user" name="role">
                <option value="Professors">Professors</option>
                <option value="Staff">Staff</option>
                <option value="Students">Students</option>
            </select>
        </div>
        <br/>
        <div class="stuId">
            <label for="stuId">User Id: </label>
            <input type="text" id="stuId" name="stuId" placeholder="Enter User Id">
        </div>
        <div class="oldPass">
            <label for="oldPass">Old Password: </label>
            <input type="password" name="oldPass" id="oldPass" maxlength="22" size="22">
            <input type="checkbox" onclick="oldPassfunction()">Show Password
        </div>
        <div class="newPass">
            <label for="newPass">New Password: </label>
            <input type="password" name="newPass" id="newPass" maxlength="22" size="22">
            <input type="checkbox" onclick="newPassfunction()">Show Password
        </div>
        <div class="rePass">
            <label for="rePass">Retype Password: </label>
            <input type="password" name="rePass" id="rePass" maxlength="22" size="22">
            <input type="checkbox" onclick="retypePassfunction()">Show Password
        </div>
        <br> 
            <input type="submit" class="btn btn-outline-primary btn-lg" id="passbtn" value="Add" name="addBtn">
    </form>
</body>

</html>