<!-- Prima Milestone:
Stampiamo i dischi solo con l’utilizzo di PHP, 
che stampa direttamente i dischi in pagina: 
al caricamento della pagina ci saranno tutti i dischi. 
-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
    <title>First Milestone</title>
</head>
<body>

    <?php 
        require_once __DIR__ . "/../database/database.php";
    ?>

    <nav>
        <div class="logo-spotify">
            <img src="../img/spotify-logo.png" alt="">
        </div>
    </nav>

    <main>
        <section class="discs-container">

            <?php
                foreach($discs as $disc) {
            ?>
            <div class="album-container">
                
                <div class="inner-card">
                    <img class="album" src="<?php echo "{$disc['poster']}";?>" alt="<?php echo "{$disc['title']} Poster";?>">
                    <h4>
                        <?php
                         $toUpper = $disc['title'];
                         echo strtoupper($toUpper);
                         ?>
                    </h4>
                    <p><?php echo "{$disc['author']}";?></p>
                    <p><?php echo "{$disc['year']}";?></p>
                </div>
    
            </div>
            <?php }; ?>

        </section>

    </main>

</body>
</html>
