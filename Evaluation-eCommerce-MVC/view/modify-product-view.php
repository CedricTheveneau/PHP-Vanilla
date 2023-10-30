<div class="add-product-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg bg-dark">
                    <div class="card-body">
                        <h2 class="mb-4 text-center">Modifier un Produit</h2>
                        <form action="modify-product-action" method="post">
                            <div class="form-group">
                                <label for="title">Titre:</label>
                                <input type="text" class="form-control" id="title" name="title" value=<?php echo $product['title'] ?> required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description:</label>
                                <textarea class="form-control" id="description" name="description" value=<?php echo $product['description'] ?> rows="3" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="title">Prix:</label>
                                <input type="text" class="form-control" id="price" name="price" value=<?php echo $product['price'] ?> required>
                            </div>
                            <div class="form-group">
                                <label for="image">URL de l'Image:</label>
                                <input type="text" class="form-control" id="image" name="image" value=<?php echo $product['image'] ?> required>
                            </div>
                            <input type="hidden" class="form-control" id="index" name="index" value=<?php echo $product['index'] ?> required>
                            <button type="submit" class="btn btn-primary btn-block btn-lg">Modifier le Produit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>