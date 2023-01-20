<?php

namespace Classes;

use Database\Database;
use mysqli;

abstract class Fruit
{
    protected $data;
    private $db;
    private $table;

    public function __construct()
    {
        $this->connect();
        $arr         = \explode('\\', \get_class($this));
        $className   = \strtolower($arr[\count($arr) - 1]);
        $this->table = $className;
        $this->creatTable();
    }

    public function getInfo()
    {
        echo ucfirst($this->getTable()) . " ";
        $quantity = 0;
        $weight   = 0;

        foreach ($this->data as $value) {
            $quantity += $value['quantity'];
            if (isset($value['weight'])) {
                $weight += $value['weight'] / 1000;
            }
        }
        echo "(quantity: $quantity weight: $weight kg.) \n\r";
    }

    public function getTable()
    {
        return $this->table;
    }

    protected function connect()
    {
        $this->db = new mysqli(\HOST, \USER, \PASSWORD, \DB_NAME);
        if ($this->db->connect_error) {
            die('Connect Error (' . $this->db->connect_errno . ') ' . $this->db->connect_error);
        }
    }

    protected function getData()
    {
        $query = "SELECT * FROM " . $this->table;

        return $this->db->query($query)->fetch_all(MYSQLI_ASSOC);
    }


    protected function creatTable()
    {
        $query = "CREATE TABLE IF NOT EXISTS " . $this->table . " (
                    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                    quantity INT NOT NULL,
                    weight INT NOT NULL
                    ) ";
        $this->db->query($query);
    }

    public function addFruit(array $fruit)
    {
        foreach ($fruit as $key => $value) {
            if (isset($value['weight'])) {
                $fruit[$key]['weight'] = $this->sum($value['weight']);
            }
        }
        $query = "SELECT * FROM $this->table ";
        $data  = $this->db->query($query)->fetch_all(MYSQLI_ASSOC);
        if ( ! $data) {
            $query = "INSERT INTO $this->table ";
            $str1  = '(';
            $str2  = '(';
            $str1  .= "quantity, weight";
            foreach ($fruit as $f) {
                foreach ($f as $v) {
                    $str2 .= "'$v',";
                }
                $str2 = \rtrim($str2, ',') . '),(';
            }
            $query .= \rtrim($str1, ',') . ") VALUES " . rtrim($str2, ',(');
            $this->db->query($query);
        }
    }

    protected function sum(array $arr)
    {
        $sum = 0;

        foreach ($arr as $item) {
            $sum += $item;
        }

        return $sum;
    }

    protected function weight()
    {
        $sum = 0;

        foreach ($this->data as $item) {
            $sum += $item['average_weight'];
        }

        return $sum;
    }
}