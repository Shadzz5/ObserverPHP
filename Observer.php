<?php

/* Pouvait être supprimé pour utiliser la classe standard SplObserver */
interface Observer
{
    function Update(Subject $subject) : void;
}