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
        $casting = new Casting();
        if($subject->casting)
        {
            echo $this->NamePartner . "a été notifié par mail de l'ajout du casting".$casting->getName();
        }

    }

}