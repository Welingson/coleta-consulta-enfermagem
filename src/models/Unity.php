<?php

namespace src\models;
use core\Model;

class Unity extends Model
{

    public $table = "unidades";

    function __construct()
    {
        $this->_table = $this->table;
        
    }

}

