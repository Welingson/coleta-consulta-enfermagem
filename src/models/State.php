<?php

namespace src\models;

use \core\Model;

class Bed extends Model
{

    public $table = "paciente_estados";

    public function __construct()
    {
        $this->_table = $this->table;
    }


}
