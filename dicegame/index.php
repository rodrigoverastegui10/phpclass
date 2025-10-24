<?php
    session_start();

    if(!isset($_SESSION['playerWins']))
    {
        $_SESSION['playerWins'] = 0;
        $_SESSION['computerWins'] = 0;
        $_SESSION['ties'] = 0;
        $_SESSION['gamesPlayed'] = 0;
    }
    $randomDie1 = mt_rand(1,6);
    $randomDie2 = mt_rand(1,6);
    $randomDie3 = mt_rand(1,6);
    $randomDie4 = mt_rand(1,6);
    $randomDie5 = mt_rand(1,6);

    $playerTotal = $randomDie1 + $randomDie2;
    $computerTotal = $randomDie3 +  $randomDie4 + $randomDie5;

    if($playerTotal > $computerTotal)
    {
        $result = "Player win!";
        $_SESSION['playerWins']++;
    }
    else if ($computerTotal > $playerTotal)
    {
        $result = "Computer wins!";
        $_SESSION['computerWins']++;
    }
    else {
        $result = "Its a Tie!";
        $_SESSION['ties']++;
    }

    $_SESSION['gamesPlayed']++;


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rodrigo Verastegui website</title>
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
        <h2>Roll the Dice!</h2>

        <h3>Result : <?=$result?></h3>

        <h3> Your score: <?=$playerTotal?></h3>

        <img src="../images/dice/dice_<?= $randomDie1 ?>.png" alt="dice1" class="dice">

        <img src="../images/dice/dice_<?= $randomDie2 ?>.png" alt="dice2" class="dice">

        <h3> Computer score:  <?=$computerTotal?></h3>

        <img src="../images/dice/dice_<?= $randomDie3 ?>.png" alt="dice3" class="dice">

        <img src="../images/dice/dice_<?= $randomDie4 ?>.png" alt="dice4" class="dice">

        <img src="../images/dice/dice_<?= $randomDie5 ?>.png" alt="dice5" class="dice">

        <h3>Player wins: <?=$_SESSION['playerWins']?></h3>
        <h3>Computer wins: <?=$_SESSION['computerWins']?></h3>
        <h3>Ties: <?=$_SESSION['ties']?></h3>
        <h3>Games Played: <?=$_SESSION['gamesPlayed']?></h3>


    </main>
</div>
<?php
include "../includes/footer.php"
?>
</body>
</html>