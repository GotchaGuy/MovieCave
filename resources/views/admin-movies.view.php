
<?php require "admin-partials/admin-header.php" ?>

<section id="adminMovies" class="container">


<!--    <form action="/contact/submit" method="POST">-->
<!--        <input type="text" name="name">-->
<!--        <button type="submit">Submit</button>-->
<!--    </form>-->

            <h2>Crete a new task!</h2>

            <form action="admin/movies/submit" method="POST">
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
                <label for="year">Year of release</label>
                <input type="number" id="completed" name="completed" min="1870" max="<?= date("Y", strtotime('now'))?>" value="<?= date("Y", strtotime('now'))?>">
                <button>Submit</button>
            </form>

<a href="/admin/movies/store">Insert New Task</a>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Title</th>
        <th>Year released</th>
        <th>Director ID</th>
        <th>Description</th>
        <th>Options</th>
    </tr>
    </thead>

    <tbody>
    <?php foreach ($movies as $movie): ?>
    <tr>
        <td><?= $movie->id ?></td>
        <td class="poster"> <img  src="/poster_images/<?= $movie->poster_image ?>" alt=""> </td>
        <td><?= $movie->title ?></td>
        <td><?= $movie->year_of_release ?></td>
        <td><?=$movie->directors_id?></td>
        <td><?= $movie->desc ?></td>
        <td class="options"><a href="/admin/movies/update?id=<?= $movie->id ?>">Edit</a> | <a href="/admin/movies/delete?id=<?= $movie->id ?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>

</section>
<?php require "admin-partials/admin-footer.php" ?>