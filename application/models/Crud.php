<?php

class Crud extends CI_Model
{


    function tampil($table)
    {
        return $this->db->get($table);
    }



    function join($table, $tbljoin, $join)
    {
        $this->db->join($tbljoin, $join);
        return $this->db->get($table);
    }
}
