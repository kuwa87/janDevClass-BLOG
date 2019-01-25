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
    include 'menu.php';
        ?>
        <div class="jumbotron bg-orange-original rounded-0 mb-0">
            <h1><i class="fas fa-user"></i>Add User</h1>
        </div>
        <div class="bg-light top-area"></div>
        <div class="common-wrap">
        <div class="login-area">
                <h2 class="bg-light">Add User</h2>
                <div class="form-group">
                <form action="" method="post">
                <input type="text" name="name" class="form-control" placeholder="Name" required>
                <input type="text" name="email" class="form-control" placeholder="Email Address" required>
                <input type="text" name="password" class="form-control" placeholder="Password" required>
                <textarea type="text" name="bio" class="form-control" rows="5" placeholder="About Yourself" required></textarea>
                <button class="btn btn-primary btn-block" name="submit">Submit</button>
                <!-- <input type="submit" class="btn btn-primary btn-block" name="submit"> -->
                </form><br>
                <!-- <a href="login.php">Already Registered?</a> -->
                    <div class="php-box">
    <?php
    if(isset($_POST['submit'])){
        // echo 'ssss';

        include 'connection.php';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];        
        $bio = $_POST['bio'];        

        $sqlFirst = "SELECT * FROM login WHERE email = '$email'";
        $result = $conn->query($sqlFirst);
        if ($result->num_rows > 0) {
            echo 'This Email adress is already registerd';
        } else{

        //insertする方法
        $sql = "INSERT INTO login(email,password) VALUES ('$email','$password')";
        //1

        if($conn->query($sql) === TRUE){
        //Q1 successfully excecuted ( no problem with sql statement)

        $lastIDinLoginTable = $conn->insert_id;
        //上の文で共通のcolumを保存している

        $sql2 = "INSERT INTO user(name,bio,loginID,dateReg) VALUES ('$name','$bio','$lastIDinLoginTable', CURDATE())";
        //上の文にも共通のcolumを追加している

        if ($conn->query($sql2) == TRUE) {            
            // echo 'New Record Inserted';
            header("Location: dashboard.php");

        }else
                    echo 'Error in inserting record' .$conn->error;


        } else{
            echo 'Error in inserting record' .$conn->error;
            //Q2 上記の.$conn->errorはエラー内容を吐き出す命令 
        }
    }
        //queryと書くことは Go に相当する
        //$connは connection file からきている
        //$conn->error は insert する時にどんなエラーが起きたかを教えてくれる

        // function ec(){
        // $fname = $_POST['fname'];
        // $lname = $_POST['lname'];
        // $country = $_POST['country'];
        // $mail = $_POST['email'];
        // $mobile = $_POST['mobile'];

        // echo $fname.'<br>'.$lname.'<br>'.$country.'<br>'.$mail.'<br>'.$mobile.'<br>';
        // }

        // ec();

    } 
    ?>
                </div>
            </div>
        </div>
<?php
include 'footer.php';
?>
    </div>
    
</body>
</html>