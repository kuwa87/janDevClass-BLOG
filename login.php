<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="blog.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Permanent+Marker" rel="stylesheet">
</head>
<body class="login">
    <div class="container-fluid p-0">
            <?php
    include 'loginmenu.php';
        ?>
        <div class="jumbotron bg-primary rounded-0 mb-0">
            <h1><i class="fas fa-user"></i>Admin UI</h1>
        </div>
        <div class="bg-light top-area"></div>
        <div class="common-wrap">
        <div class="login-area">
                <h2 class="bg-light">Account Login</h2>
                <div class="form-group">
                <form action="" method="post">
                Email<br>
                <input type="text" name="email" class="form-control" required>
                Password<br>
                <input type="text" name="password" class="form-control" required>
                <button class="btn btn-primary btn-block" name="login">Login</button>
                </form><br>
                <a href="register.php">Not yet Registered?</a>
                </div>
            </div>
        </div>
        <div class="php-box">
        <?php
if(isset($_POST['login'])){
    include 'connection.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM login WHERE email = '$email' and password = '$password'";
    $result = $conn->query($sql);
    // Q3 $conn->query($sql);の意味？？
    //イコールであることをどのように判断してるのか

    // if ($conn->query($sql)== TRUE) {
    //     header("Location: dashboard.php");
    //     # code...
    // } else{
    //     echo 'Username and password error.';
    // }

    if($result->num_rows > 0){
        $row = $result->fetch_assoc();
        $_SESSION['loginid'] = $row['loginID'];
        header("Location: dashboard.php");
    } else{
        echo 'Username and Password error.';
    }

    // if($result->num_rows > 0){
        //0より大きいとは？
        // $row = $result->fetch_assoc();
        //$row　で、どの列の話しかを確認している
            // if ($row['status'] == 'A') {
            //     // echo 'Admin';
            //     $_SESSION['loginid'] = $row['loginid'];
            //     header('Location: admin.php');
            // }else{
            //     $_SESSION['loginid'] = $row['loginid'];
            //     header('Location: user.php');
            // }
    // }else{
    //     echo 'Username and password error';
    // }
}

?>
        
        </div>
<?php
include 'footer.php';
?>
    </div>
</body>
</html>