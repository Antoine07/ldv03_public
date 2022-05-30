# Introduction & rappels

## Classe

Une classe est la somme des propriétés et attributs d'un objet. C'est une représentation abstraite d'un objet.

## Object

Un objet est une instance d'une classe. On peut faire plusieurs instances d'une même classe.

## Attributs et méthodes d'une classe

Les attributs d'une classe sont les variables d'une classe et les méthodes sont les fonctions de la classe. Plus généralement on appelle membre d'une classe les attributs ou méthodes d'une classe.

```php
class Persona{
    private $force;
    private $secret="my secret";

    public function fight(){
        echo "missile";
    }
}
```

Un objet est une instance de classe, c'est une variable dans le script courant.

```php
$mario = new Persona();
$luigi = new Persona();
// ...
```

## Visibilité d'un attribut ou d'une méthode

Si on souhaite afficher la valeur de l'attribut secret de la classe Persona, dans le script courant, il faut modifier sa visibilité et la passer en public :

```php
public $secret="my secret";
// dans le script

echo $peach->secret;
```