<?php require "admin-partials/admin-header.php" ?>


<section id="adminMovies" class="container">

    <form action="/admin/genres/update" method="POST">
        <input type="hidden" value="<?= $genre->id?>" name="id">
        <label for="name">Title</label>
        <input type="text" name="name" id="name" value="<?= $genre->name ?>">
        <button>Submit</button>
    </form>
</section>



<?php require "admin-partials/admin-footer.php" ?>


