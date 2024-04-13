<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>

    <!-- HEADER -->

    <?php include('header.php'); ?>

    <main>

        <!--OEUVRES -->

        <div id="liste-oeuvres">

            <?php include('oeuvres.php'); ?>

            <?php foreach ($oeuvres as $oeuvre): ?>
                <article class="oeuvre">
                    <a href="oeuvre.php?id=<?php echo $oeuvre['id']; ?>">
                        <img src="img/<?php echo $oeuvre['image']; ?>" /></a>

                    <h2>
                        <?php echo $oeuvre['title']; ?>
                    </h2>
                    <div>
                        <?php echo $oeuvre['auteur']; ?>
                    </div>
                </article>
            <?php endforeach ?>

        </div>
    </main>

    <!-- FOOTER -->

    <?php include('footer.php'); ?>
</body>

</html>