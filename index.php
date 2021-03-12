<?php
    include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Video: <?php echo $movie1->titolo ?></title>
    <!-- Link FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Link Google Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Link foglio di stile -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- | Header | -->
    <header>
        <div class="sx_nav">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/11/Amazon_Prime_Video_logo.svg/1280px-Amazon_Prime_Video_logo.svg.png" alt="Logo Prime Video">
            <nav>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Store</a></li>
                    <li><a href="#">Canali</a></li>
                    <li><a href="#">Categorie</a></li>
                    <li><a href="#">Area Personale</a></li>
                </ul>
            </nav>
        </div>
        <div class="dx_nav">
            <i class="fas fa-search"></i>
            <div class="user_img"></div>
            <p>Cristiano</p>
        </div>
    </header>

    <!-- MAIN -->
    <main>
        <div class="main_movie_container" style="background-image: url(<?php echo $movie1->poster ?>);">
            <div class="overlay">
                <div class="box">
                    <h1><?php echo $movie1->titolo; ?></h1>
                    <ul>
                        <li>IMDb <?php echo $movie1->voto; ?></li>
                        <li><?php echo $movie1->durata; ?> min.</li>
                        <li><?php echo $movie1->anno; ?></li>
                    </ul>
                    <p><?php echo $movie1->descrizione; ?></p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>