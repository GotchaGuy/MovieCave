
<?php require "admin-partials/admin-header.php" ?>

<section id="adminMovies" class="container">


    <!--    <form action="/contact/submit" method="POST">-->
    <!--        <input type="text" name="name">-->
    <!--        <button type="submit">Submit</button>-->
    <!--    </form>-->

    <a href="/admin/genres/store">Insert New Task</a>
    <table>
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        </thead>

        <tbody>
        <?php foreach ($genres as $genre): ?>
            <tr>
                <td><?= $genre->id ?></td>
                <td><?= $genre->name ?></td>
                <td class="options"><a href="/admin/genres/update?id=<?= $genre->id ?>">Edit</a> | <a href="/admin/genres/delete?id=<?= $genre->id ?>">Delete</a></td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</section>
<?php require "admin-partials/admin-footer.php" ?>
