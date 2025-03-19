<?php

include_once "modele.php";
include_once "maLibUtils.php";

echo isAdmin(3);
echo "<br />";
echo isAdmin(4);

//echo tprint(listerUtilisateurs());
//autoriserUtilisateur('3');
//interdireUtilisateur('3');

$login = 'Tom';
$passe = 'web1';

//verifUserBdd($login,$passe);

echo tprint(verifUserBdd($login,$passe));

$idUser = '4';

echo tprint(isAdmin($idUser));


?>
