<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <!-- navbar -->
    <?php
    include 'navbar.html';
    ?>
        <div class="header">
            <h1>To-Do <span>List</span></h1>
        </div>

        <div class="content-header">
            <p>Website yang memudahkan mengorganisasi kegiatan yang akan berlangsung.</p>
            <br>
            <div class="col-6">
                <div class="col">
                    <a href="newtodo.php">
                        <button type="button" class="btn btn-primary add-data"> NEW LIST</button>
                    </a>
                </div>    
            </div>
        </div>
        <div class="col-img">
            <img src="img/concept.png" alt="">
        </div>
    </div>
    <footer class="footer">
        <p>&copy; 2023 RaniUAS</p>
    </footer>
</body>
</html>