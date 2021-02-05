<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/67f19573a2.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');
    </style>
    <title>Yanis Dumont</title>
</head>

<body>
    <!-- Insertion du header -->
    <?php include '_header.php'; ?>

    <div class="cadre_presentation">

        <h1 class="titre_projet">
            Mes projets
        </h1>
    </div>
    <div id="liste_projet">
        <div class="projet">
            <a href="http://www.chaletsetcaviar.alweare.fr/">
                <div class="nom_projet">
                    Projet Worpdress
                </div>
                <img src="images/chaletetcaviar.png" alt="projet_chalet_et_caviar" class="screen_projet" />
            </a>


        </div>
        <div class="projet">
            <a href="http://alweare.fr/gbaf/">
                <div class="nom_projet">
                    Projet from scratch
                </div>
                <img src="images/gbaf.png" alt="projet_gbaf" class="screen_projet" />
            </a>


        </div>

    </div>



    <!-- Insertion du footer -->

    <?php include '_footer.php' ?>

</body>

</html>