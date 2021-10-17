<?php

interface Subject
{
    function Attach(Observer $observer): void;

    function Notify(): void;
}