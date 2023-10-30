<div class="crudRow">
    <button class="add"><a href="form-add-product">+</a></button>
</div>
<div class="container mt-5">
    <h2>Liste des produits</h2>
    <div class="products">
        <?php foreach ($products as $index => $product) : ?>
            <div class="productCard">
                <img src=<?= $product['image'] ?> alt=<?= $product['title'] ?>>
                <p><?= $product['title'] ?></p>
                <p><?= $product['description'] ?></p>
                <p><?= $product['price'] ?>€</p>
                <div class="crudRow">
                    <form action="remove-product-action" method="post">
                        <input type="hidden" name="index" value="<?= $index ?>">
                        <button type="submit">Supprimer</button>
                    </form>
                    <form action="form-modify-product" method="post">
                        <input type="hidden" name="index" value="<?= $index ?>">
                        <button type="submit">Modifier</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>