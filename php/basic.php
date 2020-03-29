<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php Tutorial</title>
</head>
<body>
    <h4>This is outside Php </h4>
    <?php
        echo 'Hiii';
        echo "<br>";
        echo "Second line in php";
        echo "<br>";
        $var1 = 2;
        $var2 = 5;
        echo $var1;
        echo $var2;
        $var3 = $var1+$var2;
        echo "<br>";
        echo "Sum is:" .$var3;
        echo "<br>";
        echo "<br>";
         
        // Assignment operator
        $newvar = $var1;
        echo "The value of new variable is :";
        echo $newvar;
    ?>
</body>
</html>