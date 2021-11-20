<?php

namespace src\models;
use core\Model;

class Patient extends Model
{

    public $table = "pacientes";

    public function __construct()
    {
        $this->_table = $this->table;
    }


}


