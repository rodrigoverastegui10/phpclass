<?php
$secPerMin = 60;
$secPerHour = 60 * $secPerMin;
$secPerDay = 24 * $secPerHour;

// Current time
$now = time();

$endOfSemester = mktime(12,0, 0,12,20);

$seconds = $endOfSemester - $now;

$days = floor($seconds / $secPerDay);
$seconds -= $days * $secPerDay;

$hours = floor($seconds / $secPerHour);
$seconds -= $hours * $secPerHour;

$minutes = floor($seconds / $secPerMin);
$seconds = $seconds - $minutes * $secPerMin;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rodrigo's website</title>
    <link rel="stylesheet" href="/css/base.css">
</head>
<body>
<?php
include"../includes/header.php";
?>
<div id="three-column">
    <?php
    include "../includes/navigation.php";
    ?>
    <main>
       <h1>Countdown to end of semester</h1>
        <span>Days: <?=$days?> </span>
        <span>Hours: <?=$hours?> </span>
        <span>Minutes: <?=$minutes?> </span>
        <span>Seconds: <?=$seconds?></span>
    </main>
</div>
<?php
include "../includes/footer.php"
?>
</body>
</html>