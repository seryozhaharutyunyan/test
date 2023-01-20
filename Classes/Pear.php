<?php

namespace Classes;

class Pear extends Fruit
{
    public function __construct($data)
    {
        parent::__construct();
        $this->addFruit($data);
        $this->data = $this->getData();
    }
}