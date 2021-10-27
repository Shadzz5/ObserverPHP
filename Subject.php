<?php

/* Pouvait être supprimé pour utiliser la classe standard SplSubject */
interface Subject
{
    function Attach(Observer $observer): void;

    function Notify(): void;
}