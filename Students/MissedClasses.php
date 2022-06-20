
<?php 
session_start();
//die($_SESSION['id']);
 
 

session_start();

include_once("../db/config.php");
include_once("../classes/MissingClass.php");

$Shedules = MissingClass::selectAllmissingById($_SESSION['id']);

$countMissing = MissingClass::selectAllmissingByIdOnline($_SESSION['id']);

 
 

   
 



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <title>MissedClasses</title>
</head>

<body>
    <div class="title">
        <h2>Missed Classes</h2>
    </div>

    <br>
    <table class="table table-striped">
        <thead>
           
                <tr>
                <th scope="col">Dates</th>
                <th scope="col">Times</th>
                <th scope="col">Classes</th>
                <th scope="col">Missed Count</th>
                <th scope="col">Missed Percentage</th>
            </tr>
               
            
        </thead>
        <tbody>
        <?php foreach ($Shedules as $u) {
            $time = new DateTime($u->date);
            $date = $time->format('n.j.Y');
            $time1 = $time->format('H:i');


            
            
            
            ?>
            <tr>
                <th scope="row"><?= $date ?></th>
                <td><?= $time1 ?></td>
                <td><?= $u->subject ?></td>
                <td>
                    <?php

                     foreach ($countMissing as $k) {

                        if($u->subject == "	Mathematic"):
                             echo $k->t[0];
                        else:
                            echo $k->t;
                        endif;
                     }
                
                
                
                    ?>
                </td>
                <td></td>
            </tr>
            <?php }  ?>
           
        </tbody>
    </table>
</body>

</html>