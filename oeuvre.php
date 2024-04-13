<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>
        <?php echo $title; ?>
    </title>
</head>

<body>
    <main>

        <!--Header-->

        <?php require_once('header.php'); ?>

        <!--Oeuvres-->

        <?php require_once('oeuvres.php'); ?>

        <?php $oeuvre = $_GET["id"];
        $oeuvre = $oeuvres[$oeuvre - 1];
        ?>

        <?php if (isset($_GET['id']) && $_GET['id'] > 0 && $_GET['id'] <= count($oeuvres)): ?>

            <article id="detail-oeuvre">
                <div id="img-oeuvre">
                    <img src="img/<?php echo $oeuvre['image'] ?>" alt="<?php echo $oeuvres[$_GET['id'] - 1]; ?> ">
                </div>
                <div id="contenu-oeuvre">

                    <h1>
                        <?php echo $oeuvre['title']; ?>
                    </h1>

                    <p class="description">
                        <?php echo $oeuvre['auteur']; ?>
                    </p>

                    <p class="description-complete">
                        <?php echo $oeuvre['resume']; ?>
                    </p>

                </div>
            </article>

        <?php else: ?>
            <p>Désolé mais cette page n'existe pas !!! </p>
        <?php endif ?>

            <!--Footer-->

            <?php require_once('footer.php'); ?>

    </main>
</body>

</html>