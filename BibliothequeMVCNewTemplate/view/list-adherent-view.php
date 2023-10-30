<div class="container mt-5">
    <h2>Liste des adherents</h2>
    <table class="table">
        <thead>
            <tr>
                <th>Last name</th>
                <th>Name</th>
                <th>ID</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adherents as $index => $adherent) : ?>
                <tr>
                    <td><?= $adherent['lastName'] ?></td>
                    <td><?= $adherent['name'] ?></td>
                    <td><?= $adherent['id'] ?></td>
                    <td>
                        <form action="remove-adherent" method="post">
                            <input type="hidden" name="index" value="<?= $index ?>">
                            <button type="submit" name="supprimer" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>