<div class="add-product-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg bg-dark">
                    <div class="card-body">
                        <h2 class="mb-4 text-center">Ajouter un Produit</h2>
                        <form action="add-product-action" method="post">
                            <div class="form-group">
                                <label for="title">Titre:</label>
                                <input type="text" class="form-control" id="title" name="title" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="title">Prix:</label>
                                <input type="text" class="form-control" id="price" name="price" required>
                            </div>
                            <div class="form-group">
                                <label for="image">URL de l'Image:</label>
                                <input type="text" class="form-control" id="image" name="image" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Ajouter le Produit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>