<?php


namespace Eshop;


class Db
{
    protected $db = null;
    public function __construct()
    {
        $this->db = new \mysqli("localhost", "mysql", "mysql", "ecom3");
    }

    public function getDb()
    {
        return $this->db;
    }

    public function query($query)
    {
        return $this->db->query($query);
    }
}