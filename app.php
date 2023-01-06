<?php
namespace App;

require __DIR__ . '/vendor/autoload.php';

//On va instancier un tableau animals qui contient :

//5 poissons
//3 boissons bulles
//2 poissons chat
//1 poisson clown
//2 éléphants
//1 Zèbre
//10 perroquets
//2 colombes
$animals = [ new Fish('poissons'),new Fish('poissons'),new Fish('poissons'),new Fish('poissons'),new Fish('poissons'),
    new BubbleFish('poissons bulles'), new BubbleFish('poissons bulles'), new BubbleFish('poissons bulles'),
    new CatFish('poissons chat'),new CatFish('poissons chat'),
    new ClownFish('poisson clown'),
    new Elephant('éléphants'), new Elephant('éléphants'),
    new Zebra('Zèbre'),
    new Parrot('perroquets'),new Parrot('perroquets'),new Parrot('perroquets'),new Parrot('perroquets'),new Parrot('perroquets'),new Parrot('perroquets'),new Parrot('perroquets'),new Parrot('perroquets'),new Parrot('perroquets'),new Parrot('perroquets'),
    new Dove('colombes'),new Dove('colombes')];

//Une fois cela fait, il faudra, avec une simple boucle sur le tableau animals pour afficher le nom de l'animal et son cri.
foreach ($animals as $i){
    echo "Le".$i->getName()." fait ".$i->noise(). "\n";;
}
