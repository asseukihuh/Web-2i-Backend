<?php
// Ce fichier permet de tester les fonctions développées dans le fichier controleur.php (première partie)

include_once "modele.php"; 
include_once "maLibUtils.php"; 

// Traiter l'action demandée
$action = valider('action', 'GET');
$idUser = valider('idUser', 'GET');
if ($action == "Interdire") {
  interdireUtilisateur($idUser);
}
if ($action == "Autoriser") {
  autoriserUtilisateur($idUser);
}

?>

<h1>Administration du site</h1>

<h2>Liste des utilisateurs de la base </h2>

<?php

echo "liste des utilisateurs autorises de la base :"; 
$users = listerUtilisateurs("nbl");

tprint($users);	// préférer un appel à mkTable($users);

echo "<hr />";

echo "liste des utilisateurs non autorises de la base :"; 
$users = listerUtilisateurs("bl");

tprint($users);	// préférer un appel à mkTable($users);
?>


<hr />

<h2>Changement de statut des utilisateurs</h2>

<form>

<select name="idUser">
<?php
$users = listerUtilisateurs("both");

// préférer un appel à mkOptions($users, ...)
foreach ($users as $dataUser)
{
  $selected = "";
  if ($idUser == $dataUser['id']) {
    $selected = "selected=\"selected\"";
  }
	echo "<option value=\"$dataUser[id]\" $selected>";
	echo  $dataUser["pseudo"];
	echo "</option>"; 
}
?>
</select>

<input type="submit" name="action" value="Interdire" />
<input type="submit" name="action" value="Autoriser" />
</form>