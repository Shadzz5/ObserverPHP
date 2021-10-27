<?php

spl_autoload_register(static fn($class_name) => include $class_name . '.php');
$mg1 = new Partner("Partenaire 1");
$mg2 = new Partner("Partenaire 1");

/* Pour voir des données s'afficher à l'écran, il suffisait d'appeler la méthode Attach() avant la méthode setName() (ok dans la version C#). */
$Casting1 = new Casting();
$Casting1->setName("Casting 1");
$Casting1->Attach($mg1);

$Casting2= new Casting();
$Casting2->setName("Casting 2");
$Casting2->Attach($mg2);
