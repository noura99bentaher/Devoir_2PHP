
<?php 
 $day= $_POST['jour'];
$month = $_POST['mois'];
$year =$_POST['annee'];
$new_date= date('d/m/Y', strtotime("$day/$month/$year"));
echo '<h1 style="align:centre;" > Validation de la date</h1>';
echo'<br>';
echo "la date saisie est:  $new_date <br/>";

echo"<table>";
if (checkdate($month, $day, $year)) {
    echo '<tr><td><h4>la date saisie  </h4>';
    echo'</td><td><div style="color:Green;" >est Valide</div></td></tr>';
} else {
    echo '<tr><td> l\'annee' . $year . 'est non bissextile ';
    echo '</td><td><div style="color:red;">Date invalide</div></td></tr>';

}

echo"</table>";
?> 