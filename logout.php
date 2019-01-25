<?php

    session_start();
    session_destroy();
    //destroy what?

    header("Location: login.php");
    exit;

?>