<?php 
    include "templates/header.php"; 
    include "functions/prices.php";
    include "functions/products.php";
    include "functions/calculate-cart.php";
?>
        
<h1>Panier</h1>

<table>
    <thead>
        <tr>
            <th>Désignation</th>
            <th>Quantité</th>
            <th>Prix unitaire</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>NOM</td>
            <td>QTE</td>
            <td>PRIX</td>
            <td>TOTAL</td>
        </tr>
    </tbody>
</table>

<?php include "templates/footer.php"; ?>