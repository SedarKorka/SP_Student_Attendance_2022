
<?php

include_once("../Backend/AddnewUsers.php");

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
    <title>Profile</title>
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
        <h2>Add New User</h2>
    </div>
    
<form action="#" method="POST" enctype="multipart/form-data">

        <?php if(count($errors) > 0): ?>
        <div class="message" align="center">
            <?php
            foreach ($errors as $err) { ?>
                *<?= $err ?><br/>
            <?php }


            ?>
            </div>
        <?php endif; ?>


        <label for="img">
            <br>
            <div class="container">
                <img src="profile.png" alt="Avatar" class="image" style="width:100%">
                <div class="middle">
                    <div class="text">
                        <input type="file" id="img" name="img">
                    </div>
                </div>
            </div>
        </label>
        <br>
    

    
        <div class="User">
            <label for="user">User:</label>
            <select id="user" name="role">
                <option value="admin">Administrator</option>
                <option value="Professor">Teacher</option>
                <option value="faculty">Faculty</option>
                <option value="Student">Student</option>
            </select>
        </div>
        <br>
        
        <br>
        <div class="fname">
            <label for="fName">First Name: </label>
            <input type="text" name="firstname" id="fName" value="">
        </div>
        <div class="lname">
            <label for="lName">Last Name: </label>
            <input type="text" name="lastname" id="lName" value="">
        </div>
        <div class="password">
            <label for="password">Password: </label>
            <input type="password" name="password" id="password" maxlength="22" size="22">
            <input type="checkbox" onclick="passwordfunctionUser()">Show Password
        </div>
        <br>
        <div class="gender">
            <label for="gen">Gender: </label>
            <select name="gender" id="gen">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <br>
        <div class="country">
            <label for="country">Nationality: </label>
            <select name="country" id="country" value="Choose Country">
                <option value="Afganistan">Afghanistan</option>
                <option value="Albania">Albania</option>
                <option value="Algeria">Algeria</option>
                <option value="American Samoa">American Samoa</option>
                <option value="Andorra">Andorra</option>
                <option value="Angola">Angola</option>
                <option value="Anguilla">Anguilla</option>
                <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                <option value="Argentina">Argentina</option>
                <option value="Armenia">Armenia</option>
                <option value="Aruba">Aruba</option>
                <option value="Australia">Australia</option>
                <option value="Austria">Austria</option>
                <option value="Azerbaijan">Azerbaijan</option>
                <option value="Bahamas">Bahamas</option>
                <option value="Bahrain">Bahrain</option>
                <option value="Bangladesh">Bangladesh</option>
                <option value="Barbados">Barbados</option>
                <option value="Belarus">Belarus</option>
                <option value="Belgium">Belgium</option>
                <option value="Belize">Belize</option>
                <option value="Benin">Benin</option>
                <option value="Bermuda">Bermuda</option>
                <option value="Bhutan">Bhutan</option>
                </select>
        </div>
        <br>
        <div class="email">
            <label for="email">Email Adress: </label>
            <input type="text" name="email" id="email" value="@email.com">
        </div>
        <br>
        <div class="birth">
            <label for="birth"> Date Of Birth: </label>
            <input type="date" name="date_of_birth" id="birth" >
        </div>
        <br>
        <br>
        <div class="address">
            <label for="address">Address: </label>
            <input type="text" name="address" id="address" value="" maxlength="22" size="22">
        </div>
        <br>
        <div class="status">
            <label for="status">Status: </label>
            <select name="status" id="status">
                <option value="full">Full Time</option>
                <option value="eras">Erasmus</option>
            </select>
        </div>
        <br><br>
        <div class="button"> 
            <input type="submit" class="btn btn-outline-primary btn-lg" id="Addbtn" value="Add" name="addBtn">
        </div>
    </form>

</body>

</html>