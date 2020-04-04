<html>

<head>
    <title>Commandes clients</title>
</head>

<body>
    <h1>Centrale d'achats</h1>
    <h2>Commandes clients</h2>
    <?php
$commandes = file("commandes.txt");

$nb = count($commandes);

for ($i = 0; $i < $nb; $i++) {
    
    $ligne = explode("|", $commandes[$i]);
    $ex = implode ( '|', $ligne );

    if($ligne[1]="CLI1001"){
        $ex = implode ( '|', $ligne ); 
        $fichier = fopen("pscde01_CLI1001.txt","a");
        fwrite($fichier,$ex);
        fclose($fichier);
    }
    if ($ligne[1]="CLI1004"){
        $ex = implode ( '|', $ligne ); 
        $fichier = fopen("psccl01_CLI1004.txt","a");
        fwrite($fichier,$ex);
        fclose($fichier);
        }


}

if ($nb == 0) {
echo "<p><strong>Aucune commande en attente.
Réessayez plus tard.</strong></p>";
}



echo "<table border=\"1\">\n";
echo "
<th bgcolor=\"#CCCCFF\">Numero de Commande</th>
<th bgcolor=\"#CCCCFF\">Numero de client</th>
<th bgcolor=\"#CCCCFF\">Date de commande</th>
<th bgcolor=\"#CCCCFF\">Designation artilce</th>
<th bgcolor=\"#CCCCFF\">Quantite (pal)</th>
<th bgcolor=\"#CCCCFF\">Pri unitaire (dh)</th>
<th bgcolor=\"#CCCCFF\">Date de livrision</th>
<th bgcolor=\"#CCCCFF\">Adresse client</th>
<tr>";
for ($i = 0; $i < $nb; $i++) {

$ligne = explode("|", $commandes[$i]);

echo "<tr>
<td>".$ligne[0]."</td>
<td>".$ligne[1]."</td>
<td>".$ligne[2]."</td>
<td>".$ligne[3]."</td>
<td>".$ligne[4]."</td>
<td>".$ligne[5]."</td>
<td>".$ligne[6]."</td>
<td>".$ligne[7]."</td>
</tr>";
}

echo "</table>";

?>
</body>

</html>