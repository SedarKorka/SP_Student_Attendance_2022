
<?php

include_once("../Backend/MissedClasses.php");

session_start();

include_once("../db/config.php");
include_once("../classes/MissingClass.php");

 

   



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
    <title>MissedClasses</title>
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
        <h2>Class Missed Students</h2>
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
            <label for="date">Date:</label>
            <input type="date" id="date" name="date">
        </div>
        <div class="levels1">
        <label for="levels">Student: </label>
        <select name="idStudent" id="levels">
            <?php foreach ($students as $std) { ?>
                <option value="<?= $std->id ?>"><?= $std->firstname.' '.$std->lastname ?></option>
           <?php }?>
            
        </select>
    </div>
    <div class="levels">
        <label for="levels">Studie Level: </label>
        <select name="level" id="levels">
            <option value="Bachelor">Bachelor</option>
            <option value="Master">Master</option>
            <option value="PHD">PHD</option>
        </select>
    </div>
    <div class="Studies">
        <label for="Studies">Studies Programme: </label>
        <select name="programme" id="studeies">
            <option value="CS">Computer Science</option>
            <option value="IT">Information Technology</option>
            <option value="ET">Eco Technology</option>
        </select>
    </div>
    <div class="sub">
        <label for="sub">Subject: </label>
        <select name="subject" id="sub">
            <option value="Mathematic">Mathematic</option>
            <option value="Physic">Physic</option>
            <option value="English"></option>
        </select>
    </div>
    <br> 
    <input type="submit" class="btn btn-outline-primary btn-lg" id="tablebtn" value="Add" name="addBtn">
    </form>
    <div class="hidden1" id="myTable">
    <table class="table" id="commonTable">
        <thead>
          <tr>
            <th scope="col">Student Id</th>
            <th scope="col">Full Name</th>
            <th scope="col">Semester</th>
            
            <th scope="col">Absent Classes</th>
            <th scope="col">Participate persentage</th>
            <th scope="col">Message</th>
            <th scope="col">Repport</th>
          </tr>
          <?php foreach ($selectAllmissing as $m) {
              
              $users = MissingClass::selectUserByEId($m->idStudent);
              ?>


            <tr>
            <th scope="row"> 
                <?= $m->idStudent ?></th>
            <td><?php
            foreach ($users as $full) {
               echo $full->firstname." ".$full->lasstname;
            }

               
            
             ?></td>
            <td>
            <?php
            foreach ($users as $full) {
               echo $full->semester;
            }

               
            
             ?>
            </td>
            <td><?= $m->subject ?></td>
            <td><?= $m->programme ?></td>
            <td>
            <div class="form-group">
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" cols="30"></textarea>
                </div>
            </td>
            <td>
                <a href="" target="_blank" class="btn btn-primary">Send Repport</a>
            </td>
          </tr>
             


            <?php
          } ?>
         
         
          </tr>
        </tbody>
      </table>
    </div>
</body>

</html>