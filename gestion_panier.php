<?php
// variables
$produit1 = ["nom" => "Livre", "prix" => 15, "quantite" => 2];
$produit2 = ["nom" => "Stylo", "prix" => 3, "quantite" => 5];
$produit3 = ["nom" => "Sac", "prix" => 25, "quantite" => 1];

// funciion para calcular soustotal



function calculerSousTotal($produit) {
    return $produit['prix'] * $produit['quantite'];
}

$sous_total1 = calculerSousTotal($produit1);
$sous_total2 = calculerSousTotal($produit2);
$sous_total3 = calculerSousTotal($produit3);


echo "Le sous-total pour le " . $produit1['nom'] . " est de " . $sous_total1 . " €.<br>";
echo "Le sous-total pour le " . $produit2['nom'] . " est de " . $sous_total2 . " €.<br>";
echo "Le sous-total pour le " . $produit3['nom'] . " est de " . $sous_total3 . " €.<br>";

// calculo total
$total_panier = $sous_total1 + $sous_total2 + $sous_total3;


echo "Le montant total du panier est de " . $total_panier . " €.<br>";

//reduccion 


if ($total_panier > 50) {
    $reduction = $total_panier * 0.10;
    $total_apres_reduction = $total_panier - $reduction;
    echo "Après une réduction de 10%, le montant total est de " . $total_apres_reduction . " €.<br>";
} else {
    $total_apres_reduction = $total_panier;
}

// Bonus 

echo "<table border='1'>
        <tr>
            <th>Nom</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Sous-total</th>
        </tr>
        <tr>
            <td>{$produit1['nom']}</td>
            <td>{$produit1['prix']} €</td>
            <td>{$produit1['quantite']}</td>
            <td>{$sous_total1} €</td>
        </tr>
        <tr>
            <td>{$produit2['nom']}</td>
            <td>{$produit2['prix']} €</td>
            <td>{$produit2['quantite']}</td>
            <td>{$sous_total2} €</td>
        </tr>
        <tr>
            <td>{$produit3['nom']}</td>
            <td>{$produit3['prix']} €</td>
            <td>{$produit3['quantite']}</td>
            <td>{$sous_total3} €</td>
        </tr>
        <tr>
            <td colspan='3'>Total</td>
            <td>{$total_apres_reduction} €</td>
        </tr>
      </table>";
?>
