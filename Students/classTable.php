
<?php 
session_start();
//die($_SESSION['id']);
 
 

session_start();

include_once("../db/config.php");
include_once("../classes/Classes.php");

$Shedules = Classes::selectAllShedulesById($_SESSION['id']);

 

   
 



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
    <title>ClassTable</title>
</head>

<body>
    <div class="title">
        <h2>Class Time Table</h2>
    </div>

    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Time</th>
                <th scope="col">Monday </th>
                <th scope="col">Tuesday</th>
                <th scope="col">Wednesday</th>
                <th scope="col">Thursday</th>
                <th scope="col">Friday</th>
                <th scope="col">Saturday</th>
                <th scope="col">Sunday </th>
            </tr>
        </thead>
        <tbody>
        <?php 
          if (count($Shedules) > 0) {
             
            foreach ($Shedules as $Shedule) {?>
            <?php if($Shedule->day == "Monday"):  ?>
                <tr>
                <th scope="row"><?= $Shedule->date ?></th>
                <td><?= $Shedule->studies ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php elseif($Shedule->day == "Tuesday"): ?>
                <tr>
                <th scope="row"><?= $Shedule->date ?></th>
                <td></td>
                <td><?= $Shedule->studies ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>

            <?php elseif($Shedule->day == "Wednesday"): ?>

                <tr>
                <th scope="row"><?= $Shedule->date ?></th>
                <td></td>
                <td></td>
                <td><?= $Shedule->studies ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php elseif($Shedule->day == "Thursday"): ?>
                <tr>
                <th scope="row"><?= $Shedule->date ?></th>
                <td></td>
                <td></td>
                <td></td>
                <td><?= $Shedule->studies ?></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php elseif($Shedule->day == "Friday"): ?>
                <tr>
                <th scope="row"><?= $Shedule->date ?></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?= $Shedule->studies ?></td>
                <td></td>
                <td></td>
            </tr>

            <?php elseif($Shedule->day == "Satursday"): ?>
                <tr>
                <th scope="row"><?= $Shedule->date ?></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?= $Shedule->studies ?></td>
                <td></td>
            </tr>

            <?php elseif($Shedule->day == "Sunday"): ?>
                <tr>
                <th scope="row"><?= $Shedule->date ?></th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><?= $Shedule->studies ?></td>
            </tr>
            <?php endif; ?>
        <?php
                
            } 
        }


        ?>
        </tbody>
    </table>
</body>

</html>