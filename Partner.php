<?php

class Partner implements Observer
{
    public string $NamePartner;
    public function __construct(string $name)
    {
        $this->NamePartner = $name;
    }
    public function Update(Subject $subject): void
    {
        $casting = new Casting(); // Il ne faut pas créer une nouvelle instance de Casting ici. $subject est le casting (ok dans la version C#).
        if($subject->casting)
        {
            echo $this->NamePartner . "a été notifié par mail de l'ajout du casting".$casting->getName();
        }

    }

}