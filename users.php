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
<body class="users">
    <div class="container-fluid p-0">
                <?php
    include 'menu.php';
        ?>
        <div class="jumbotron bg-orange-original rounded-0 mb-0">
            <h1><i class="fas fa-users"></i>Users</h1>
        </div>
        <div class="bg-light top-area"></div>
        <div class="common-wrap">
                <h2 class="bg-light common-h2">Latest Users</h2>
         <div class="table-wrap">
<?php
// $sql = "SELECT * FROM users";
$sql = "SELECT user.name, user.dateReg, login.email FROM user INNER JOIN login ON user.loginID = login.loginID";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table class="table table-stripe">
                <thead>
                        <tr class="bg-dark text-white">
                                <th>#</th>
                                <th>Name</th>
                                <th>Date Registerd</th>
                                <th>Email</th>
                            </tr>
                </thead>
                <tbody>';
    $sequence = 1;
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>'.$sequence.'</td>';
        echo '<td>'.$row['name'].'</td>';
        echo '<td>'.$row['dateReg'].'</td>';
        echo '<td>'.$row['email'].'</td>';
        echo '</td>';
        echo '</tr>';
         $sequence ++;
    }
    echo ' </tbody></table>';
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