<div class="container mt-5">
    <h2>Liste des livres empruntés</h2>
    <table class="table">
        <thead>
            <tr>
                <th width="30%">Title</th>
                <th width="15%">Author</th>
                <th width="10%">ISBN</th>
                <th width="15%">Number of pages</th>
                <th width="15%">Borrower's ID</th>
                <th width="15%">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($books as $index => $book) : ?>
                <tr>
                    <td><?= $book['title'] ?></td>
                    <td><?= $book['author'] ?></td>
                    <td><?= $book['isbn'] ?></td>
                    <td><?= $book['pageCount'] ?></td>
                    <td><?= $book['borrowed'] ?></td>
                    <td style="display: flex;gap:10px;">
                        <form action="give-back-book" method="post">
                            <input type="hidden" name="index" value="<?= $index ?>">
                            <button type="submit" name="giveBack" class="btn btn-info">Give back</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>