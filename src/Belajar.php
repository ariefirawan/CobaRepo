<?php

namespace Prakom\MembuatRepository;

class Belajar
{
    public function __construct(private string $mp)
    {
    }

    public function sayHello(string $name): void
    {
        echo "Hallo $name" . "silahkan belajar $this->mp";
    }
}