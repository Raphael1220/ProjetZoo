<?php

namespace App;

abstract class Animal{
    //Un attribut name, privé
    private string $name;

    //Qui sera défini au constructeur
    public function __construct(string $name) {
        $this->name = $name;
    }

    //Accesseur de lecture seulement pour l'attribut privé $name que l'on doit retourner
    public function getName()
    {
        return $this->name;
    }

    //Une méthode protégée abstraite appelée getNoise qui ne prend pas de paramètres, et qui renverra une chaîne de caractères.
    protected abstract function getNoise():string;

    //Une méthode publique appelée noise qui fera un appel à la méthode précédement créée et renverra son résultat.
    public function noise(){
        return $this->getNoise();
    }
}

//On va également créer des classes qui vont hériter de la classe Animal
//Sans oublier d'implémenter les différentes méthodes de la classe qu'ils héritent.