<?php

$isHome = $_SERVER['REQUEST_URI'] == '/' ? 'selected' : '';
$isLoops = $_SERVER['REQUEST_URI'] == '/loops/' ? 'selected' : '';
$isCountdown = $_SERVER['REQUEST_URI'] == '/countdown/' ? 'selected' : '';
$isSemesterTimer = $_SERVER['REQUEST_URI'] == '/semestertimer/' ? 'selected' : '';
$isDiceGame = $_SERVER['REQUEST_URI'] == '/dicegame/' ? 'selected' : '';
$isMagic8ball = $_SERVER['REQUEST_URI'] == '/magic8ball/' ? 'selected' : '';
$isMovieList = $_SERVER['REQUEST_URI'] == '/movielist/' ? 'selected' : '';
$isLogin = $_SERVER['REQUEST_URI'] == '/login/' ? 'selected' : '';

?>
<nav>
    <ul>
        <li class="<?=$isHome?>">
            <a href="/">Home</a>
        </li>
        <li class="<?=$isLoops?>">
            <a href="/loops">Loops</a>
        </li>
        <li class="<?=$isCountdown?>">
            <a href="/countdown">Countdown</a>
        </li>
        <li class="<?=$isSemesterTimer?>">
            <a href="/semestertimer">End of semester</a>
        </li>
        <li class="<?=$isMagic8ball?>">
            <a href="/magic8ball">Magic 8 Ball</a>
        </li>
        <li class="<?=$isDiceGame?>">
            <a href="/dicegame">Dice Game</a>
        </li>
        <li class="<?=$isMovieList?>">
            <a href="/movielist">Movie List</a>
        </li>
        <li class="<?=$isLogin?>">
            <a href="/login">Login</a>
        </li>

    </ul>
</nav>
