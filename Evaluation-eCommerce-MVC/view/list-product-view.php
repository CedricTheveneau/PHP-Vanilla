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
                    <form action="add-to-cart-action" method="post">
                        <input type="hidden" name="title" value="<?= $product['title'] ?>">
                        <input type="hidden" name="description" value="<?= $product['description'] ?>">
                        <input type="hidden" name="price" value="<?= $product['price'] ?>">
                        <input type="hidden" name="image" value="<?= $product['image'] ?>">
                        <button type="submit">Ajouter au panier</button>
                    </form>
                    <form action="details" method="post">
                        <input type="hidden" name="index" value="<?= $index ?>">
                        <button type="submit">Voir les détails</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>