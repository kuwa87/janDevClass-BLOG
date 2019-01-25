<?php
    session_start();
    if(isset($_POST['deleteaccount'])){
    echo 'aaaa';

    include 'connection.php';
    $loginID = $_SESSION['loginid'];
    echo $loginID;

    $sql = "DELETE FROM login WHERE loginID = '$loginID'";
    if ($conn->query($sql)) {

        header("Location: logout.php");

        }else{
            echo 'ERROR' .$conn->error;
        }

    }

?>
