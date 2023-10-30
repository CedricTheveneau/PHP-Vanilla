<div class="container mt-5">
    <h2>Liste des livres</h2>
    <table class="table">
        <thead>
            <tr>
                <th width="30%">Title</th>
                <th width="15%">Author</th>
                <th width="10%">ISBN</th>
                <th width="15%">Number of pages</th>
                <th width="30%">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $index => $book) : ?>
                <tr>
                    <td><?= $book['title'] ?></td>
                    <td><?= $book['author'] ?></td>
                    <td><?= $book['isbn'] ?></td>
                    <td><?= $book['pageCount'] ?></td>
                    <td style="display: flex;gap:10px;">
                        <form action="remove-book" method="post">
                            <input type="hidden" name="index" value="<?= $index ?>">
                            <button type="submit" name="supprimer" class="btn btn-danger">Supprimer</button>
                        </form>
                        <form action="modify-book" method="post">
                            <input type="hidden" name="index" value="<?= $index ?>">
                            <button type="submit" name="modifier" class="btn btn-primary">Modifier</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>