<?php include "menu.php"; ?>
<?php include "connect.php"; ?>
<?php
$opiskelijat=$db->query('SELECT etunimi,sukunimi,syntymavuosi FROM opiskelija');
//print_r($opiskelijat);
 ?>
<h1>Tietokanta esimerkki</h1>
<table class="table table-striped table-hover table-border">
<tr class="bg-success"><th>Etunimi</th><th>Sukunimi</th><th>Syntymävuosi</th></tr>
<?php
foreach ($opiskelijat as $rivi) {
  echo '<tr><td>'.$rivi['etunimi'].'</td><td>'.$rivi['sukunimi'].'</td><td>'.$rivi['syntymavuosi'].'</td></tr>';
  # code...
}
 ?>

</table>
<?php include "footer.php"; ?>
