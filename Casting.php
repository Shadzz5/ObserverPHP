<?php

class Casting implements Subject
{
public string $nameCasting;
public $casting;

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
            $observer->Update();
        }
    }
}
