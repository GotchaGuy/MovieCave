<?php require "partials/header.php" ?>

<a href="/admin/movies/insert">Insert New Task</a>
<table>
    <tr>
        <th>ID</th>
        <th>Description</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>

    <?php foreach ($movies as $movie): ?>
    <tr>
        <td><?= $movie->id ?><td>
        <td><?= $movie->description ?></td>
        <td><?= $movie->completed ?></td>
        <td>Edit | <a href="/admin/movies/delete?id=<?= $movie->id ?>">Delete</a></td>
    </tr>
    <?php endforeach; ?>
</table>

<?php require "partials/footer.php" ?>
