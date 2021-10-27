<?php

class Casting implements Subject
{
    /* Cette méthode devrait être en private pour forcer les développeurs à utiliser le setter et déclencher la notification des obervers. */
public string $nameCasting;
public $casting; // Supprimer cette ligne

/**
     * @var array< string, array<int, object >>
     */
private array $observers = [];

    public function getName(): string
    {
        return $this->nameCasting;
    }
    public function SetName(string $name):string{
        $this->nameCasting = $name;
        $this->Notify();
        return $name;
    }
    function __construct()
    {
        $this->observers = array();
    }

    function Attach(Observer $observer): void
    {
        array_push($this->observers,$observer);
    }

    function Notify(): void
    {
        foreach ($this->observers as $observer)
        {
            $observer->Update(); // Il faut passer ici des données en paramètre de la méthode update ($this par exemple) (ok dans la version C#)
        }
    }
}
