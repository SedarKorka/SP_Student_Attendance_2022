
<?php

include_once("../Backend/removeUsers.php");

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
    <title>Remove Users</title>
</head>

<body onload="myFunction()">
    <div class="title">
        <h2>Remove Graduate users</h2>
    </div>
    <br>
    <form method="POST" action="#">
        <div class="studId">
            <label for="studId">User:</label>
            <select id="studId" name="role">
                <option value="Professor">Professor</option>
                <option value="staff">Staff</option>
            </select>
            <input type="text" id="studId" name="userid" placeholder="Enter ID" required>
        </div>
    <br>
    <button type="button" class="btn btn-outline-primary btn-lg" onClick="toggleTable()" id="remtblbtn">Enter</button>
    </form>
    <form>
    <div class="hidden1" id="myTable">
    <table class="table" id="removeTable">
        <thead>
          <tr>
            <th scope="col">User Id</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Professor/Staff</th>
            <th scope="col">FullTime/Erasmus </th>
            <th scope="col">Delete</th>
          </tr>
          <?php 
          if (count($users) > 0) {
             
          foreach ($users as $user) {?>
          <tr>
            <th scope="row"><?= $user->id ?></th>
            <td><?= $user->firstname ?></td>
            <td><?= $user->lassname ?></td>
            <td><?= $user->role ?></td>
            <td><?= $user->status ?></td>
            <td>
                <a href="../Backend/removeUsers.php?id=<?= $user->id ?>" class="btn btn-outline-danger">Click</a>
            </td>
          </tr>



        <?php
              
          } 
        }


        ?>
        </tbody>
      </table>
    </div>
</form>
</body>
</html>