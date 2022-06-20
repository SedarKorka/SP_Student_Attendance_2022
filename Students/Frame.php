<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frame</title>
</head>
<frameset rows="100,*,0" border="5" bordercolor="#0d6efd">
    <frame name="Top" scrolling="no" noresize target="content" src="TopPage.php">
        <frameset cols="150,*,">
            <frame name="saturs" target="info" src="button.html">
                <frame name="info" src="">
        </frameset>
</frameset>

</html>