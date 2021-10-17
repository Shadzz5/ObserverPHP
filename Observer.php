<?php

interface Observer
{
    function Update(Subject $subject) : void;
}