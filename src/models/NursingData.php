<?php

namespace src\models\Patient;
use core\Model;

class NursingData extends Model
{

    public $table = "paciente_dados_enfermagem";

    public function __construct()
    {
        $this->_table = $this->table;
    }






}


