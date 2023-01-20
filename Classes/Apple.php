<?php

namespace Classes;

class Apple extends Fruit
{

    public function __construct($data)
    {
        parent::__construct();
        $this->addFruit($data);
        $this->data = $this->getData();
    }

}