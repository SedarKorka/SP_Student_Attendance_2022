
<?php

include_once("../Backend/AddClass.php");

session_start();

include_once("../db/config.php");
include_once("../classes/Student.php");

 

   



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
    <title>Attendances</title>
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
        <h2>Add Class Shedules</h2>
    </div>
    <br>
    <form method="POST" action="#">
    <?php if(count($errors) > 0): ?>
        <div class="message" align="center">
            <?php
            foreach ($errors as $err) { ?>
                *<?= $err ?><br/>
            <?php }


            ?>
            </div>
        <?php endif; ?>
        <div class="Date">
        <label for ="date">Date:</label>
        <input type="date" id="date" name="date">
        </div>

         

        <div class="time">
            <label for ="time">Time:</label>
            <input type="time" id="time" name="time">
        </div>

        <div class="levels1">
        <label for="day">Studie Level: </label>
        <select name="day" id="day">
            <option value="Monday">Monday</option>
            <option value="Tuesday">Tuesday</option>
            <option value="Wednesday">Wednesday</option>
            <option value="Thursday">Thursday</option>
            <option value="Friday">Friday</option>
            <option value="Saturday">Saturday</option>
            <option value="Sunday">Sunday</option>
        </select>
    </div>


    <div class="levels">
        <label for="levels">Studie Level: </label>
        <select name="levels" id="levels">
            <option value="Bachelor">Bachelor</option>
            <option value="Master">Master</option>
            <option value="PHD">PHD</option>
        </select>
    </div>
    
    <div class="Studies">
        <label for="Studies">Studies Programme: </label>
        <select name="studies" id="studies">
            <option value="Computer Science">Computer Science</option>
            <option value="Information Technology">Information Technology</option>
            <option value="Eco Technology">Eco Technology</option>
        </select>
    </div>
    <div class="sub">
        <label for="sub">Subject: </label>
        <select name="sub" id="sub">
            <option value="artificial intelligence">artificial intelligence</option>
            <option value="computer systems and networks">computer systems and networks</option>
            <option value="security">security</option>
        </select>
    </div>
    <br>
     
            <input type="submit" class="btn btn-outline-primary btn-lg" id="tablebtn" value="Add" name="addBtn">
      
    </form>