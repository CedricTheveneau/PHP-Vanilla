<div class="container mt-5">
    <h2>Panier</h2>
    <div class="products">
        <?php foreach ($products as $index => $product) : ?>
            <div class="productCard">
                <img src=<?= $product['image'] ?> alt=<?= $product['title'] ?>>
                <p><?= $product['title'] ?></p>
                <p><?= $product['description'] ?></p>
                <p><?= $product['price'] ?>€</p>
                <div class="crudRow">
                    <form action="remove-from-cart-action" method="post">
                        <input type="hidden" name="index" value="<?= $index ?>">
                        <button type="submit">Supprimer du panier</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

</div>