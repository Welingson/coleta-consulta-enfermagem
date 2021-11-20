<?php

namespace src\models;
use core\Model;

class ClinicalData extends Model
{

    public $table = "pacientes_dados_clinicos";

    public function __construct()
    {
        $this->_table = $this->table;
    }






}


