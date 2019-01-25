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
<body class="settings">
    <div class="container-fluid p-0">
                <?php
    include 'menu.php';
        ?>
        <div class="jumbotron bg-primary rounded-0 mb-0">
            <h1><i class="fas fa-pen"></i>Settings</h1>
        </div>
                <div class="bg-light top-area row">
                    <div class="col-4">
                        <a href="#" class="btn btn-white">
                                <i class="fas fa-arrow-left"></i>Back to Dashboard</a>
                    </div>
                    <div class="col-4 ml-auto">
                        <a href="#" class="btn btn-green float-right"><i class="fas fa-check"></i>Save Changes</a></a>
                    </div>
                </div>
        <div class="common-wrap">
            <div class="settings-area">
                <h2 class="bg-light">Edit settings</h2>
                <div class="form-group">
                        <span class="form-label">Allow User Registration</span><br>
                            <div class="form-check">
                                <input type="radio" name="resistration" value="Yes" class="form-check-input"> Yes<br>
                                <input type="radio" name="resistration" value="No" class="form-check-input"> No<br>
                            </div> 
                            <span class="form-label">Homepage Format</span><br> 
                            <div class="form-check">
                                <input type="radio" name="format" value="Yes" class="form-check-input">Post Index<br>
                                <input type="radio" name="format" value="No" class="form-check-input"> Simple Page<br>
                            </div>
            </div>
        </div>
    </div>
                <?php
    include 'footer.php';
        ?>

    </div>
    
</body>
</html>