<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<table border =2>
    <theade>
    <tr>
        <td>Référence</td>
        <td>Désignation</td>
        <td>Prix unitaire (hors taxe)</td>
        <td>Quantité"</td>
        <td>Prix total = PU * Q</td>
        <td>Total TTC (Prix * 20%</td>
    </tr>

    </theade>
    <?php 
    include"tableau.php";
    ?>


    <tr>
        <th><?php echo $produit[0] ["Référence"];?></th> 
        <th><?php echo $produit[0] ["Désignation"];?></th> 
        <th><?php echo $produit[0] ["Prix unitaire (hors taxe)"]?></th> 
        <th><?php echo $produit[0] ["Quantité"]?></th> 
        <th><?php echo $produit[0] ["Prix total = PU * Q"]?></th> 
        <th><?php echo $produit[0] ["Total TTC (Prix * 20%)"] ?></th>
       
    </tr>  
      <tr>
        <th><?php echo $produit[1] ["Référence"] ?></th> 
        <th><?php echo $produit[1]["Désignation"] ?></th>
        <th><?php echo $produit[1]["Prix unitaire (hors taxe)"] ?></th>
        <th><?php echo $produit[1]["Quantité"] ?></th>
        <th><?php echo $produit[1]["Prix total = PU * Q"] ?></th>
        <th><?php echo $produit[1]["Total TTC (Prix * 20%)"] ?></th>
       
    </tr>

    <tr>
        <th><?php echo $produit[1] ["Référence"] ?></th> 
        <th><?php echo $produit[1]["Désignation"] ?></th>
        <th><?php echo $produit[1]["Prix unitaire (hors taxe)"] ?></th>
        <th><?php echo $produit[1]["Quantité"] ?></th>
        <th><?php echo $produit[1]["Prix total = PU * Q"] ?></th>
        <th><?php echo $produit[1]["Total TTC (Prix * 20%)"] ?></th>
       
    </tr>
    <tr>
        <th><?php echo $produit[1] ["Référence"] ?></th> 
        <th><?php echo $produit[1]["Désignation"] ?></th>
        <th><?php echo $produit[1]["Prix unitaire (hors taxe)"] ?></th>
        <th><?php echo $produit[1]["Quantité"] ?></th>
        <th><?php echo $produit[1]["Prix total = PU * Q"] ?></th>
        <th><?php echo $produit[1]["Total TTC (Prix * 20%)"] ?></th>
       
    </tr>



<tbody>


    <tr>
        <td>285</td>
        <td>eau</td>
        <td>1</td>
        <td>6</td>
        <td>6 €</td>
        <td>7.2€</td>
    </tr>

    <tr>
        <td>190</td>
        <td>gâteau</td>
        <td>7</td>
        <td>20</td>
        <td>140 €</td>
        <td>168 €</td>
    </tr>

    <tr>
        <td>274</td>
        <td>viande</td>
        <td>10</td>
        <td>15</td>
        <td>150 €</td>
        <td>180 €</td>
    </tr>
 </tbody>
</div>
</table> -->
</br><br>
<table border= 1>
    <thead>
    <tr>
        <th>Total HT</th>
        <td>326 €</td>
    </tr>

    <tr>
        <th>TVA 20%</th>
        <td>65.2 €</td>
    </tr>

    <tr>
        <th>Total</th>
        <td>391.2 €</td>
    </tr>
    </thead>
</table>
    <?php
include "footer.php";

// ?>

</body>
</html>



