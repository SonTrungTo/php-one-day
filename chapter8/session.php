<?php
    session_start();

    $_SESSION['myFavFood']  = 'Seafood(King Crab)';
    $_SESSION['myFavDrink'] = 'Mjölk';
    $_SESSION['myFavColor'] = 'Blå';

    #updating a session variable
    $_SESSION['myFavColor'] = 'Vit';

    #deleting a session variable
    unset($_SESSION['myFavDrink']);
