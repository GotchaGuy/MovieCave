
<?php require "admin-partials/admin-header.php" ?>

<section id="adminMovies" class="container">


<!--    <form action="/contact/submit" method="POST">-->
<!--        <input type="text" name="name">-->
<!--        <button type="submit">Submit</button>-->
<!--    </form>-->

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