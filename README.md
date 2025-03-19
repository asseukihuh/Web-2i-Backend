### 1. **Les Variables en PHP**

En PHP, les variables commencent par le symbole `$` et peuvent contenir différents types de données (chaîne de caractères, entier, flottant, etc.).

**Exemple de déclaration et d'utilisation de variables :**

```php
<?php
// Déclaration d'une variable
$nom = "Alice";
$age = 25;
$taille = 1.75;

// Utilisation des variables
echo "Bonjour, je m'appelle $nom, j'ai $age ans et ma taille est $taille mètres.";
?>
```

### 2. **Les Boucles en PHP**

PHP propose plusieurs types de boucles : `for`, `while` et `foreach`.

#### a) **La boucle `for`**
La boucle `for` est utilisée lorsque le nombre d'itérations est connu à l'avance.

**Exemple :**
```php
<?php
// Boucle for pour afficher les nombres de 1 à 5
for ($i = 1; $i <= 5; $i++) {
    echo "Le nombre est : $i <br>";
}
?>
```

#### b) **La boucle `while`**
La boucle `while` est utilisée lorsque l'on veut répéter des instructions tant qu'une condition est vraie.

**Exemple :**
```php
<?php
// Boucle while pour afficher les nombres de 1 à 5
$i = 1;
while ($i <= 5) {
    echo "Le nombre est : $i <br>";
    $i++;
}
?>
```

#### c) **La boucle `foreach`**
La boucle `foreach` est particulièrement utile pour itérer sur des tableaux.

**Exemple :**
```php
<?php
// Tableau des couleurs
$couleurs = array("Rouge", "Vert", "Bleu");

// Boucle foreach pour afficher les couleurs
foreach ($couleurs as $couleur) {
    echo "La couleur est : $couleur <br>";
}
?>
```

### 3. **Les Fonctions en PHP**

Les fonctions sont utilisées pour regrouper des instructions sous un même nom et ainsi pouvoir les réutiliser.

#### a) **Déclaration d'une fonction**
Une fonction en PHP se déclare avec le mot-clé `function`.

**Exemple :**
```php
<?php
// Déclaration d'une fonction
function direBonjour($prenom) {
    echo "Bonjour, $prenom !<br>";
}

// Appel de la fonction
direBonjour("Alice");
direBonjour("Bob");
?>
```

#### b) **Fonction avec retour de valeur**
Une fonction peut également retourner une valeur avec le mot-clé `return`.

**Exemple :**
```php
<?php
// Fonction qui calcule l'addition de deux nombres
function additionner($a, $b) {
    return $a + $b;
}

// Appel de la fonction
$sum = additionner(5, 10);
echo "La somme est : $sum<br>";
?>
```

### 4. **Exemple Complet**

Voici un exemple combinant variables, boucles et fonctions.

```php
<?php
// Fonction pour afficher un message
function afficherMessage($message) {
    echo "$message<br>";
}

// Déclaration de variables
$nom = "Jean";
$age = 30;
$interets = array("musique", "sport", "lecture");

// Utilisation de la fonction afficherMessage
afficherMessage("Bonjour, je suis $nom et j'ai $age ans.");

// Boucle pour afficher les intérêts
echo "Mes centres d'intérêt :<br>";
foreach ($interets as $interet) {
    afficherMessage($interet);
}
?>
```

### Résumé des principaux concepts :
- **Variables** : Déclarées avec `$`, elles peuvent contenir différents types de données.
- **Boucles** : 
  - `for` : Lorsque le nombre d'itérations est connu à l'avance.
  - `while` : Lorsque la condition doit être vraie pour continuer.
  - `foreach` : Idéale pour les tableaux.
- **Fonctions** : Permettent de regrouper du code réutilisable. Elles peuvent prendre des paramètres et retourner des valeurs.
