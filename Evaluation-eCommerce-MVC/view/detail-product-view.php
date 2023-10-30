<div class="container mt-5">
    <h2>Détails du produits</h2>
    <div class="productDetails">
        <div class="productCard">
            <img src=<?= $product['image'] ?> alt=<?= $product['title'] ?>>
            <div class="details">
                <p><?= $product['title'] ?></p>
                <p><?= $product['description'] ?></p>
                <p><?= $product['price'] ?>€</p>
                <div class="crudRow">
                    <form action="add-to-cart-action" method="post">
                        <input type="hidden" name="title" value="<?= $product['title'] ?>">
                        <input type="hidden" name="description" value="<?= $product['description'] ?>">
                        <input type="hidden" name="price" value="<?= $product['price'] ?>">
                        <input type="hidden" name="image" value="<?= $product['image'] ?>">
                        <button type="submit" class="CTA">Ajouter au panier</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>