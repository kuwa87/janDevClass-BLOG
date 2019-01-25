<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Permanent+Marker" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="blog.css">
</head>

<body class="profile">
    <div class="container-fluid p-0">
        <?php
    include 'menu.php';
        ?>
    <div class="jumbotron bg-primary rounded-0 mb-0">
            <h1><i class="fas fa-pen"></i>Add Post</h1>
        </div>
        <div class="common-wrap">
            <div class="profile-area">
                <?php
                    // $loginid = $_SESSION['loginid'];
                    // $sql = "SELECT password FROM login WHERE loginID ='$loginid'";
                    // $sql = "SELECT * FROM user WHERE loginID = '$loginid'";
                    // $result = $conn->query($sql);
                    //     if ($result->num_rows > 0) {
                    //         $row = $result->fetch_assoc();

                            echo '<div class="form-group"><form method="post" action="">Title<br>
                    <input type="text" class="form-control" value="" name="title" required>
                    Category<br>';
                            echo '<select name="catID">';

                        $sql = "SELECT * FROM categories";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='".$row['catID']."'>".$row['catName']."</option>";
                            }
                        }else{
                            echo 'error' .$conn->error;
                        }
                    echo '</select>';

                    echo '<br>Post Details<br>';
                    echo '<textarea type="text" class="form-control" rows="5" name="postDetails" required></textarea>
                    <br>';
                    echo "<div class='update-area'><input type='hidden' value='$loginid' name='loginid' required>";
                    echo "<input type='submit' name='save' value='save' class='btn btn-primary update-btn'><div>";
                    echo '</form></div>';
                        // } else{
                        //     echo 'error' .$conn->error;
                        // }

        if(isset($_POST['save'])){

        $title = $_POST['title'];
        $title = $conn->real_escape_string($title);
        $catID = $_POST['catID'];
        $postDetails = $_POST['postDetails'];
        $postDetails = $conn->real_escape_string($postDetails);
        $loginid = $_SESSION['loginid'];

        // echo $title;
        // echo $catName;
        // echo $postDetails;
        // echo $loginid;

        $sql = "INSERT INTO posts(postTitle, postDate, postDetails, catID, loginID) VALUES ('$title',CURDATE(),'$postDetails','$catID','$loginid')";

        if ($conn->query($sql)==TRUE) {
            
            // $sql = "UPDATE login SET email = '$email' WHERE loginID = '$loginID'";
            // if ($conn->query($sql)==TRUE) {
     
            header("Location: dashboard.php");
            # code...
            }else{
                echo "Updating error." .$conn->error;
            }
        }




                                ?>
            </div>
        </div>
            <?php
    include 'footer.php';
        ?>
    </div>

</body>

</html>