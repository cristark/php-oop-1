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
            <img src="img/prime-video-logo.png" alt="Logo Prime Video">
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
            <i class="fas fa-user"></i>
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

                    <div class="extra_info">
                        <div class="row">
                            <h4>Regia</h4>
                            <a href=""><?php echo $movie1->regista; ?></a>
                        </div>
                        <div class="row">
                            <h4>Interpreti</h4>
                            <a href="#">
                            <?php 
                                $i = 0;
                                $cast = $movie1->cast;
                                $c = count($cast);
                            
                                foreach ($cast as $key => $val) {

                                    if ($i++ < $c - 1) {
                                        echo $val .= ', ';
                                    } else {
                                        echo $val;
                                    }
                                }
                            ?>
                            </a>
                        </div>
                        <div class="row">
                            <h4>Genere</h4>
                            <a href=""><?php echo $movie1->genere; ?></a>
                        </div>
                        <div class="row">
                            <h4>Lingua Audio</h4>
                            <a href=""><?php echo $movie1->lingua; ?></a>
                        </div>
                    </div>

                    <div class="buttons_container">
                        <div class="play_btn">Riproduci</div>
                        <div class="extra_btn">Altre opzioni d'acquisto</div>
                        <i class="fas fa-play"></i>
                        <i class="fas fa-plus"></i>
                        <i class="fas fa-user-friends"></i>
                        <i class="fas fa-download"></i>
                    </div>

                    <p>Facendo clic su Riproduci accetti i nostri <a href="#">Termini di utilizzo.</a></p>
                </div>
                <div class="share_container">
                    <i class="fas fa-share-alt"></i>
                    <p>Condividi</p>
                    <i class="fas fa-pen"></i>
                    <p>Feedback</p>
                    <i class="far fa-question-circle"></i>
                    <p>Ottieni assistenza</p>
                </div>
            </div>
        </div>
    </main>

    <!-- | FOOTER | -->
    <footer>
        <img src="img/prime-video-logo.png" alt="Logo Prime Video">
        <ul>
            <li><a href="#">Termini di utilizzo e informativa sulla privacy</a></li>
            <li><a href="#">Invia commenti</a></li>
            <li><a href="#">Aiuto</a></li>
            <li>© 1996-2021, Amazon.com, Inc. o società affiliate</li>
        </ul>
    </footer>
</body>
</html>