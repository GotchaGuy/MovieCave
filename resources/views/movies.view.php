<?php require "partials/header.php" ?>
    <section id="movies">
        <!--<ul>-->
        <?php foreach ($movies as $movie): ?>
            <a href="?id=<?= $movie->id ?>">
            <div class="item">
                <div> <img  src="/poster_images/<?= $movie->poster_image ?>" alt=""> </div>
                <h2><?= $movie->title ?></h2>
                <h3><?= $movie->year_of_release ?></h3>
            </div>
            </a>

        <?php endforeach; ?>
        <!--</ul>-->

<!--        <h2>Crete a new task!</h2>-->

<!--        <form action="/movies/submit" method="POST">-->
<!--            <input type="text" name="description">-->
<!--            <label for="completed">Completed:</label>-->
<!--            <input type="checkbox" id="completed" name="completed" value="1">-->
<!--            <button>Submit</button>-->
<!--        </form>-->
    </section>
<?php require "partials/footer.php" ?>