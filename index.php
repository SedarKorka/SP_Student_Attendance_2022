
<?php

require_once("Backend/login.php")



?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <style>
        $bg: darkturquoise;
$accent: salmon;
$messagecolor:blanchedalmond;
html {
  box-sizing: border-box;
}
*, *:before, *:after {
  box-sizing: inherit;
}
input, select{
  display:block;
  width:100%;
  padding:.2em;
  margin: .2em 0 .6em;
  font-size:1.2em;
}
input[type=submit]{
  background: #0000FF;
  border:none;
  margin:1em 0;
  color:white;
  padding:1em;
}
.message{
  background: #FF0000;
  color:#FFF;
  padding: 1em .5em;
  margin: 1em 0;
}


/* Presentational for this pen */
html{
  background: $bg;
}
body{
  padding:5%;
  background: white;
  max-width:30em;
  margin: 6% auto;
  box-shadow:1em 1em 0 0 rgba(0,0,0,.2);
  font-family:Raleway, sans-serif; 
}



    </style>
    <body>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <h1>Log in</h1>
        
        <div class="message">
        <?php
          foreach ($errors as $err) { ?>
              *<?= $err ?><br/>
         <?php }


        ?>
        </div>
        

        <form class="login-form" method="POST">
            <label>Role:</label> 
            <select name="role" id="role">
                <option value="admin">Administrator</option>
                <option value="Professor">Teacher</option>
                <option value="faculty">Faculty</option>
                <option value="Student">Student</option>
            </select>


            <label>email:</label>
            <input type="email" name="email" placeholder="email"  >

            <label>Password:</label>
            <input type="password" name="pass">

            <input type="submit" value="Log In">
            <input type="hidden" name="did_login" value="true">
        </form>
        
        <script src="" async defer></script>
    </body>
</html>