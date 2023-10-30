<div class="container mt-5">
    <h2 class="text-center mb-4">Modifier les détails du livre</h2>

    <form action="modify-book-action" method="post">
        <div class="form-group">
            <label for="titre">Titre:</label>
            <input type="text" class="form-control" id="titre" name="titre" value="<?php echo $livreAModifier['title']; ?>" required>
        </div>
        <div class="form-group">
            <label for="auteur">Auteur:</label>
            <input type="text" class="form-control" id="auteur" name="auteur" value="<?php echo $livreAModifier['author']; ?>" required>
        </div>
        <div class="form-group" style="display: none;">
            <label for="nombrePages">ISBN</label>
            <input type="number" class="form-control" id="nombrePages" name="nombrePages" value="<?php echo $livreAModifier['isbn']; ?>" required>
        </div>
        <div class="form-group">
            <label for="nombrePages">Nombre de pages:</label>
            <input type="number" class="form-control" id="nombrePages" name="nombrePages" value="<?php echo $livreAModifier['pageCount']; ?>" required>
        </div>
        <div class="form-group" style="display: none;">
            <label for="nombrePages">Borrowed ?</label>
            <input type="number" class="form-control" id="nombrePages" name="nombrePages" value="<?php echo $livreAModifier['borrowed']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </form>
</div>