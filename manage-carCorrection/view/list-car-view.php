<div class="container mt-5">
    <h2>Liste des voitures</h2>
    <a href="form-add-car" class="btn btn-success">Ajouter</a>
    <table class="table">
        <thead>
        <tr>
            <th>Image</th>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($voitures as $index => $voiture): ?>
            <tr>
                <td><img src="<?= $voiture['image'] ?>" alt="Image de la voiture" width="100"></td>
                <td><?= $voiture['marque'] ?></td>
                <td><?= $voiture['modele'] ?></td>
                <td>
                    <form action="remove-car-action" method="post">
                        <input type="hidden" name="index" value="<?= $index ?>">
                        <button type="submit" name="supprimer" class="btn btn-danger">Supprimer</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>