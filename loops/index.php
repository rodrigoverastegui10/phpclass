<?php
$pageName = "loops";
?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Not Ryan's website</title>
    <link rel="stylesheet" href="/css/base.css">
</head>
<body>
<?php
include "../includes/header.php";
?>
<div id="three-column">
    <?php
    include "../includes/navigation.php";
    ?>
    <main>
        <?php

       $i = 1;

       while ($i<7)
       {
           echo "<h$i>Hello World</h$i>";
           $i++;
       }

        echo "<br />";
       $i = 6;

       while ($i>0)
       {
            echo "<h$i>Hello World</h$i>";
            $i--;
       }

       echo "<br />";


       for($i=1; $i<7; $i++)
       {
            echo "<h$i>Hello World</$i>";
       }

        echo "<br /><br />";
       $FullName = "Doug Smith";
       $Position = strpos($FullName,'');
       echo $Position;

        echo "<br /><br />";

        $stuff = "My Stuff";
        echo '<h3>$stuff</h3>';

        echo strtoupper($FullName) . "<br />";
        echo strtolower($FullName) . "<br />";
        echo $FullName . "<br />";

        echo "<br /> <br />";

        $nameParts = explode (' ',$FullName);
        echo $nameParts[0] . "<br />";
        echo $nameParts[1];



        ?>
    </main>
</div>
<?php
include "../includes/footer.php"
?>;;;
</body>
</html>