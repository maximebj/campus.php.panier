<?php 
    include "templates/header.php"; 
    include "functions/prices.php";
    include "functions/products.php";

    $products = getProducts();
?>
        
<h1>Tous les produits</h1>

<?php if (count($products) > 0): ?>
    <div class="shop">
        <?php foreach($products as $key => $product): ?>
            <div class="product">
                <img src="<?= $product['image'] ?>" alt="<?= $product["title"] ?>">
                <h2><?= $product['title'] ?></h2>
                <p><?= $product['price'] ?> €</p>
                <p><?= $product['description'] ?></p>
                
                <form action="cart.php" method="post">
                    <input type="hidden" name="product" value="<?= $key ?>">
                    <input type="number" name="quantity" value="1" min="1">
                    
                    <?php if ($product["available"]): ?>
                        <button>Ajouter au panier</button>
                    <?php else: ?>
                        <button disabled>Produit indisponible</button>
                    <?php endif ?>
                </form>
            </div>
        <?php endforeach; ?>
    </div> <!-- fin shop -->

<?php else: ?>
    <p class="not-found">Aucun produit disponible</p>
<?php endif; ?>

<?php include "templates/footer.php" ?>