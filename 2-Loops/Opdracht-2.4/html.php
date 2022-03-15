<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    $ikzit = 'Ik zit in klas';
    $klassen = array("8A", "8B", "8C", "8D", "8E", "9A", "9B", "9C", "9D", "9E");
    echo "<fieldset style='border: solid 1px; width:150px;'><legend> klassenformulier </legend>";


    require("2.4.php");
    echo "$ikzit <select>";
    foreach ($klassen as $value){
        echo "<option value=$value> $value</option>";
    } 
    ?>
    <p>Ik zit in klas</p>
    </select> </br>
    <button> Verzend </button>
</body>
</html>