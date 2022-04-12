<?php
    session_start();
    echo '<BR>Food: '.$_SESSION['myFavFood'];
    echo '<BR>Drink: '.$_SESSION['myFavDrink'];
    echo '<BR>Color: '.$_SESSION['myFavColor'];
