<?php require "partials/header.php" ?>

<ul>
    <?php foreach ($movies as $movie): ?>
        <li><img class="item" src="/poster_images/<?= $movie->poster_image ?>" alt=""></li>

    <?php endforeach; ?>
</ul>

<h2>Crete a new task!</h2>

<form action="/movies/submit" method="POST">
    <input type="text" name="description">
    <label for="completed">Completed:</label>
    <input type="checkbox" id="completed" name="completed" value="1">
    <button>Submit</button>
</form>

<?php require "partials/footer.php" ?>