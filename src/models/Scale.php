<?php

namespace src\models;

use core\Model;

class Scale extends Model
{

    protected $table = "escalas";

    public function __construct()
    {
        $this->_table = $this->table;

    }


}
