<?php
    $postID = $_GET['postID'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Permanent+Marker" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="blog.css">
</head>
<body class="postone">
    <div class="container-fluid p-0">
            <?php
    include 'menu.php';
        ?>
        <div class="jumbotron bg-primary rounded-0 mb-0">
            <h1><i class="fas fa-pen"></i>Post One</h1>
        </div>
        <div class="bg-light top-area row">
                <div class="col-3">
                    <a href="dashboard.php" class="btn btn-white">
                            <i class="fas fa-arrow-left"></i>Back to Dashboard</a>
                </div>
                <div class="col-3 ml-auto">
                    <!-- <a href="dashboad.php" class="btn btn-green float-right"><i class="fas fa-check"></i>Edit Post</a> -->
                <form action="editpost.php" method="post">
                <input type="hidden" name="postID" value="<?php echo $postID; ?>">
                <button name="editpost" class="btn btn-green float-right">Edit Post</button>
                </form>
                </div>
                <div class="col-3">
                <form action="delete.php" method="post">
                <input type="hidden" name="postID" value="<?php echo $postID; ?>">
                <button name="delete" class="btn btn-red float-right">Delete Post</button>
                </form>
                        <!-- <a href="delete.php" class="btn btn-red float-right"><i class="fas fa-check"></i>Delete Post</a> -->
               </div>
    
            </div>
        <div class="common-wrap">
            <div class="psotone-area">
                                <?php
                                echo '<h2 class="bg-light">';
                                //postTitle
                                // $postID = $_GET['postID'];
                                $sql = "SELECT user.name, posts.postTitle, posts.postDate, posts.postDetails FROM User INNER JOIN posts ON user.loginID = posts.loginID WHERE posts.postID = '$postID'";
                                $result = $conn->query($sql);
                                    if ($result->num_rows > 0) {
                                        $row = $result->fetch_assoc();
                                        $postTitle = $row['postTitle'];
                                        echo $postTitle.' ';                                        

                                //name
                                    $name = $row['name'];
                                    echo 'by '.$name;

                                //date
                                $postDate = $row['postDate'];
                                echo '<span>Date posted: ';
                                echo $postDate;
                                echo '</span>';

                                echo '</h2>';
                                
                                //detail
                                $postDetails = $row['postDetails'];
                                echo '<div class="post-content"><p>';
                                echo $postDetails;
                                echo '</p></div>';

                                    } else{
                                        echo 'error' .$conn->error;
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