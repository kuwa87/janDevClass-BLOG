<?php

if(isset($_POST['delete'])){

    include 'connection.php';
    $postID = $_POST['postID'];

    // $sql = "SELECT * FROM posts WHERE postID = '$postID'";
    // $result = $conn -> query($sql);
    // if ($result->num_rows > 0) {
    //     $row = $result -> fetch_assoc();
    //     $postID = $row['postID'];
        
    // echo $postID;
    $sql = "DELETE FROM posts WHERE postID = '$postID'";
    if ($conn->query($sql)) {

        header("Location: dashboard.php");

        }else{
            echo 'ERROR' .$conn->error;
        }

    // }else{
    //         echo 'ERROR' .$conn->error;
    // }

}

?>