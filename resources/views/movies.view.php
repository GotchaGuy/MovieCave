<?php require "partials/header.php" ?>
    <section id="movies" class="container">

        <div class="multiple " >
        <?php foreach ($movies as $movie): ?>
            <a href="?id=<?= $movie->id ?>">
            <div class="item">
                <div> <img  src="/poster_images/<?= $movie->poster_image ?>" alt=""> </div>
                <h2><?= $movie->title ?></h2>
                <h3><?= $movie->year_of_release ?></h3>
            </div>
            </a>
        <?php endforeach; ?>
        </div>

        <?php
        if(isset($_GET['id'])) {
            $uniID = $_GET['id'];
        }

            ?>
        <div class="singular none">
            <div>
                <img src="" alt="">
            </div>
        </div>


    </section>
<?php require "partials/footer.php" ?>